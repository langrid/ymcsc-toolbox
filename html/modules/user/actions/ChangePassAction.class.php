<?php
/**
 * @package user
 * @version $Id: ChangePassAction.class.php,v 1.3 2007/12/22 17:54:05 minahito Exp $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

require_once XOOPS_MODULE_PATH . "/user/class/AbstractEditAction.class.php";
require_once XOOPS_MODULE_PATH . "/user/forms/ChangePassEditForm.class.php";

/***
 * @internal
 */
class User_ChangePassAction extends User_AbstractEditAction
{
	/**
	 * @var string
	 */
	function prepare(&$controller, &$xoopsUser, $moduleConfig)
	{
		parent::prepare($controller, $xoopsUser, $moduleConfig);
		//$this->mUserCookie = $moduleConfig['usercookie'];
	}

	function _getId()
	{
		$root =& XCube_Root::getSingleton();
		$uid = is_object($root->mContext->mXoopsUser) ? $root->mContext->mXoopsUser->get('uid') : 0;

		return isset($_REQUEST['uid']) ? intval(xoops_getrequest('uid')) : $uid;
	}

	function &_getHandler()
	{
		$handler =& xoops_getmodulehandler('users', 'user');
		return $handler;
	}

	/**
	 * Because editable fields are decided by the module config, this member
	 * function hands the config to the constructor of the action form.
	 *
	 * @see User_AbstractUserEditForm
	 */
	function _setupActionForm()
	{
		$this->mActionForm = new User_ChangePassEditForm($this->mConfig);
		$this->mActionForm->prepare();
	}

	function isEnableCreate()
	{
		return false;
	}

	function isSecure()
	{
		return true;
	}

	/**
	 * Allow Conditions:
	 *
	 * 1) The current user is the target user.
	 * 2) The current user is administrators.
	 */
	function hasPermission(&$controller, &$xoopsUser, $moduleConfig)
	{
		if (!is_object($this->mObject)) {
			return false;
		}

		if ($controller->mRoot->mContext->mUser->isInRole('Module.user.Admin')) {
			return true;
		}

		return ($this->mObject->get('uid') == $xoopsUser->get('uid'));
	}

	function _doExecute()
	{
		if ($this->mObjectHandler->insert($this->mObject)) {
			return true;
		}else {
			return false;
		}
	}

	function executeViewInput(&$controller, &$xoopsUser, &$render)
	{
		$render->setTemplateName("user_changepass.html");
		$render->setAttribute("actionForm", $this->mActionForm);
		$render->setAttribute("thisUser", $this->mObject);
		//$render->setAttribute("currentUser", $xoopsUser);

		/*
		$render->setAttribute("allow_chgmail", $this->mConfig['allow_chgmail']);

		/*
		$handler =& xoops_gethandler('timezone');
		$timezoneArr =& $handler->getObjects();
		$render->setAttribute('timezones', $timezoneArr);

		//
		// umode option
		//
		$umodeOptions = array("nest" => _NESTED, "flat" => _FLAT, "thread" => _THREADED);
		$render->setAttribute('umodeOptions', $umodeOptions);

		//
		// uorder option
		//
		$uorderOptions = array(0 => _OLDESTFIRST, 1 => _NEWESTFIRST);
		$render->setAttribute('uorderOptions', $uorderOptions);

		//
		// notify option
		//

		$Languages = array();
		$Languages = explode(",",CUBE_UTILS_ML_LANGNAMES);
		$render->setAttribute('displaylangs', $Languages);

		/*
		//
		// TODO Because abstract message catalog style is not decided, we load directly.
		//
		$root =& XCube_Root::getSingleton();
		$root->mLanguageManager->loadPageTypeMessageCatalog('notification');
		require_once XOOPS_ROOT_PATH . "/include/notification_constants.php";

		// Check the PM service has been installed.
		$root =& XCube_Root::getSingleton();
		$service =& $root->mServiceManager->getService('privateMessage');

		$methodOptions = array();
		$methodOptions[XOOPS_NOTIFICATION_METHOD_DISABLE] = _NOT_METHOD_DISABLE;
		if ($service != null) {
			$methodOptions[XOOPS_NOTIFICATION_METHOD_PM] = _NOT_METHOD_PM;
		}
		$methodOptions[XOOPS_NOTIFICATION_METHOD_EMAIL] = _NOT_METHOD_EMAIL;

		$render->setAttribute('notify_methodOptions', $methodOptions);

		$modeOptions = array(
			XOOPS_NOTIFICATION_MODE_SENDALWAYS => _NOT_MODE_SENDALWAYS,
			XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE => _NOT_MODE_SENDONCE,
			XOOPS_NOTIFICATION_MODE_SENDONCETHENWAIT => _NOT_MODE_SENDONCEPERLOGIN
		);

		$render->setAttribute('notify_modeOptions', $modeOptions);
		*/
	}

	function executeViewSuccess(&$controller,&$xoopsUser,&$render)
	{
		$controller->executeForward(XOOPS_URL . '/userinfo.php?uid=' . $this->mObject->getShow('uid'));
	}

	function executeViewError(&$controller, &$xoopsUser, &$render)
	{
		$controller->executeRedirect(XOOPS_URL . '/', 1, _MD_USER_ERROR_DBUPDATE_FAILED);
	}
}

?>