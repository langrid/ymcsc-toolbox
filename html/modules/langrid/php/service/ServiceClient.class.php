<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This provides access methods
// to the Language Grid.
// Copyright (C) 2009  NICT Language Grid Project
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
//  ------------------------------------------------------------------------ //
require_once('SOAP/Client.php');

abstract class ServiceClient extends SOAP_Client {

	protected $callTree = null;

	protected $encoding = 'UTF-8';
	protected $timeout = 180;
//	protected $timeout = 1;
	protected $trace = true;

	protected $moduleConfig = null;

	public function ServiceClient($service) {
		// get module config
		$this->moduleConfig = $this->_getXoopsModuleConfig();
		$option = array(
			'user' => $this->moduleConfig['langrid_id'],
			'pass' => $this->moduleConfig['langrid_pass'],
			'encoding' => $this->encoding,
			'timeout' => $this->timeout
		);
		$proxyHost = $this->moduleConfig['proxy_host'];
		$proxyPort = $this->moduleConfig['proxy_port'];
		if ($proxyHost != '') {
			$option[ 'proxy_host' ] = $proxyHost;
		}
		if ($proxyPort != '') {
			$option[ 'proxy_port' ] = $proxyPort;
		}

		if (strpos($service, 'http') === 0) {
			$wsdl = $service;
		} else {
			$wsdl = $this->moduleConfig['core_node_url'].$service;
		}
		// TODO: WSDL chche.
		$cache = '';
		if (strpos(strtolower(PHP_OS), 'win') === false) {
			$cache = '/tmp';
		} else {
			$cache = XOOPS_ROOT_PATH.'/cache';
		}
		parent::__construct($wsdl, true, false, $option, $cache);
	}

	public function call($operation, $parameters, $bindParameters = array()) {
		parent::setTrace($this->trace);

		$response = array('status' => 'OK', 'message' => 'soap request successed.', 'contents' => array());

		// Setting for SOAP Header
		$bind = $this->makeBindingHeader($bindParameters);
		if (!empty($bind)) {
			$this->addHeader(new SOAP_Header('{http://langrid.nict.go.jp/process/binding/tree}binding', '', $bind));
		}
		// Invoke!!
//		echoTime("call開始");
		$res =& parent::call($operation, $parameters);
//		echoTime("call終了");
		$this->callTree = json_decode($this->headersIn['calltree']);

		if (!PEAR::isError($res)) {
			$response
				= array('status' => 'OK',
						'contents' => &$res);
	    }
	    else {
	    	$response
//	    		= array('status' => 'ERROR',
//						'message' => print_r($this->fault->userinfo, true),
//	    				'contents' => $this->_makeErrorMessage());
	    		= array('status' => 'ERROR',
						'message' => $this->_makeErrorMessage(),
	    				'contents' => print_r($this->fault->userinfo, true));
	    }

		return $response;
	}

	abstract protected function makeBindingHeader($parameters);

	private function _makeErrorMessage() {
		// for language setup
		if (!defined("_MD_LANGRID_TAB1_NAME")) {
			require_once XOOPS_ROOT_PATH . '/modules/legacy/kernel/Legacy_LanguageManager.class.php';
			$languageManager = new Legacy_LanguageManager();
			$languageManager->loadModuleMessageCatalog('langrid');
		}

		$faultObj =& $this->fault->getFault();
		$message = $faultObj->faultstring;

//		$message = $this->fault->message;
		$userinfo = (array)$this->fault->userinfo;

		// If the client calls the service
		if ($this->callTree == null) {
			$serviceId = '';
			$serviceName = '';
		}
		// If the service is called in a composite service
		else {
			// service ID
			$serviceId = $this->callTree[0]->serviceId;
			// service name
			$serviceName = $this->callTree[0]->serviceName;
		}
		// Messages with no parameter
		if (preg_match('/jp.go.nict.langrid.service_1_2.AccessLimitExceededException/', $message)) {
			return sprintf(_MD_LANGRID_ERROR_ACCESS_LIMIT_EXCEEDED_EXCEPTION, $serviceId, $serviceName);
		}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.NoAccessPermissionException/', $message)) {
			return sprintf(_MD_LANGRID_ERROR_NO_ACCESS_PERMISSION_EXCEPTION, $serviceId, $serviceName);
		}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.NoValidEndpointsException/', $message)) {
			return sprintf(_MD_LANGRID_ERROR_NO_VALID_ENDPOINTS_EXCEPTION, $serviceId, $serviceName);
		}
		// Messages with one parameter
		else if (preg_match('/jp.go.nict.langrid.service_1_2.InvalidParameterException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.InvalidParameterException'];
			$parametername = $exception->parameterName;

			return sprintf(_MD_LANGRID_ERROR_INVALID_PARAMETER_EXCEPTION, $serviceId, $serviceName, $parameterName);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.ServiceNotActiveException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.ServiceNotActiveException'];
			$serviceId = $exception->serviceId;

			return sprintf(_MD_LANGRID_ERROR_SERVICE_NOT_ACTIVE_EXCEPTION, $serviceId);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.ServiceNotFoundException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.ServiceNotFoundException'];
			$serviceId = $exception->serviceId;

			return sprintf(_MD_LANGRID_ERROR_SERVICE_NOT_FOUND_EXCEPTION, $serviceId);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.ServiceAlreadyExistsException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.ServiceAlreadyExistsException'];
			$serviceId = $exception->serviceId;

			return sprintf(_MD_LANGRID_ERROR_SERVICE_ALREADY_EXISTS_EXCEPTION, $serviceId);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.NoValidEndpointsException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.NoValidEndpointsException'];
			$serviceId = $exception->serviceId;
			$nodeId = $exception->nodeId;

			return sprintf(_MD_LANGRID_ERROR_NO_VALID_ENDPOINTS_EXCEPTION, $serviceId, $nodeId);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.ServiceConfigurationException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.ServiceConfigurationException'];
			$nodeId = $exception->nodeId;
			return sprintf(_MD_LANGRID_ERROR_SERVICE_CONFIGURATION_EXCEPTION, $nodeId);
    	}
		else if (preg_match('/jp.go.nict.langrid.service_1_2.UnknownException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.UnknownException'];
			$nodeId = $exception->nodeId;

			return sprintf(_MD_LANGRID_ERROR_UNKNOWN_EXCEPTION, $nodeId);
    	}
    	else if (preg_match('/jp.go.nict.langrid.service_1_2.UnsupportedLanguageException/', $message)) {
    		$exception = $userinfo['jp.go.nict.langrid.service_1_2.UnsupportedLanguageException'];
			$language = $exception->language;

			return sprintf(_MD_LANGRID_ERROR_UNSUPPORTED_LANGUAGE_EXCEPTION, $language, $serviceId, $serviceName);
		}

    	// Messages with two parameters
		else if (preg_match('/jp.go.nict.langrid.service_1_2.UnsupportedLanguagePairException/', $message)) {
			$exception = $userinfo['jp.go.nict.langrid.service_1_2.UnsupportedLanguagePairException'];
			@$language1 = $exception->languagePair->first;
			if ($language1 == '') {
				$language1 = $exception->language1;
			}
			@$language2 = $exception->languagePair->second;
			if ($language2 == '') {
				$language2 = $exception->language2;
			}
			return sprintf(_MD_LANGRID_ERROR_UNSUPPORTED_LANGUAGE_PAIR_EXCEPTION, $language1, $language2, $serviceId, $serviceName);
		}
    	else if (preg_match('/jp.go.nict.langrid.service_1_2.ProcessFailedException/', $message)) {
    		$exception = $userinfo['jp.go.nict.langrid.service_1_2.ProcessFailedException'];
			$description = $exception->description;

			return sprintf(_MD_LANGRID_ERROR_PROCESS_FAILED_EXCEPTION, $description);
		} else {
			return $message;
		}
	}

	// load to langrid module config.
	private function _getXoopsModuleConfig() {
		$module_handler= & xoops_gethandler('module');
		$psModule = $module_handler->getByDirname('langrid');
		$config_handler =& xoops_gethandler('config');
		$config =& $config_handler->getConfigsByCat(0, $psModule->mid());

		if ($config == null) {
			die('Failed to retrieve config.['.__FILE__.'('.__LINE__.')]');
		}
		return $config;
	}

	protected function getLocalTranslationLicense($exec) {
		$license = array();
		$serviceType = $exec->get('service_type');
//		if ($serviceType == 1) {
			$serviceId = $exec->get('service_id');
			require_once dirname(__FILE__).'/../../class/LangridServicesClass.php';
			$langridServices = new LangridServicesClass();
			switch ($serviceType) {
				case 1:	// LocalTranslator
					$results = $langridServices->searchLocalTranslatorsByEndpoint($serviceId);
					break;
				default:
					$results = array($langridServices->searchTranslation($serviceId));
					break;
			}
			if (count($results) > 0) {
				foreach ($results as $key => $result) {
					$license[$result['service_id']] = array(
						'serviceName' => isset($result['service_name']) ? $result['service_name'] : '',
						'serviceCopyright' => isset($result['copyright']) ? $result['copyright'] : '',
						'serviceLicense' => isset($result['license']) ? $result['license'] : '',
						'lastAccessDate' => date('D, j M Y G:i:s +0900')
					);
				}
			}
//		}
		return $license;
	}
	
	protected function convertServiceId($serviceId) {
		require_once dirname(__FILE__).'/../../class/LangridServicesClass.php';
		$ls = new LangridServicesClass();
		$result = $ls->searchLocalTranslators($serviceId);
		if (empty($result)) {
			return $serviceId;
		}
		
		return $result[0]['endpoint_url'];
	}

    public function getGridId() {
        return $this->moduleConfig['core_node_grid_id'];
    }
}
?>