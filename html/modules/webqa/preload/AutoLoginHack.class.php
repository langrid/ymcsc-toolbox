<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This allows a user to search
// Q&As stored in Toolbox and post a question through a Web page.
// Copyright (C) 2009  Department of Social Informatics, Kyoto University
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
class WebQA_AutoLoginHack extends XCube_ActionFilter
{
    var $mCookiePath;
    var $mRememberMe = 0;
    var $mLifeTime;

    function preBlockFilter()
    {
    	$url = $_SERVER['REQUEST_URI'];
    	if (strpos($url, 'modules/webqa') !== false) {
//	    	echo 'WebQA_AutoLoginHack::preBlockFilter()';
	        $root =& XCube_Root::getSingleton();
	        $root->mDelegateManager->add('Legacy_Controller.SetupUser', array(&$this, 'setupUser'), XCUBE_DELEGATE_PRIORITY_FINAL-1);
    	}


//        $config_handler =& xoops_gethandler('config');
//        $moduleConfigCubeUtils =& $config_handler->getConfigsByDirname('cubeUtils');
//
//        if ($moduleConfigCubeUtils['cubeUtils_use_autologin']){
//
//            //Define custom delegate functions for AutoLogin.
//            $root->mDelegateManager->add('Legacy_Controller.SetupUser', array(&$this, 'setupUser'), XCUBE_DELEGATE_PRIORITY_FINAL-1);
//            $root->mDelegateManager->add('Site.CheckLogin.Success', array(&$this, 'CheckLoginSuccess'), XCUBE_DELEGATE_PRIORITY_NORMAL-1);
//            $root->mDelegateManager->add('Site.Logout',             array(&$this, 'Logout'), XCUBE_DELEGATE_PRIORITY_NORMAL-1);
//            $root->mDelegateManager->add('Legacypage.User.Access',  array(&$this, 'AccessToUser'), XCUBE_DELEGATE_PRIORITY_NORMAL-1);
//
//            $this->mCookiePath = defined('XOOPS_COOKIE_PATH') ? XOOPS_COOKIE_PATH : preg_replace( '?http://[^/]+(/.*)$?' , '$1' , XOOPS_URL ) ;
//            if( $this->mCookiePath == XOOPS_URL ) $this->mCookiePath = '/' ;
//            if( substr( $this->mCookiePath , -1 ) != '/' ) $this->mCookiePath .= '/' ;
//
//            $this->mLifeTime = $moduleConfigCubeUtils['cubeUtils_login_lifetime'] * 3600;
//
//            $GLOBALS['xoopsAutoLoginEnable'] = true;
//        }
    }

    function setupUser(&$principal, &$controller, &$context) {
//    	echo 'WebQA_AutoLoginHack::setupUser()';
        $root =& XCube_Root::getSingleton();
        $xoopsUser = $this->getUserObject();
		if ($xoopsUser == null) {
			die('管理者ユーザでの偽装ログインに失敗しました。');
		}
        $context->mXoopsUser =& $xoopsUser;
        // Regist to session
        $root->mSession->regenerate();
        $_SESSION['xoopsUserId'] = $xoopsUser->getVar('uid');
        $_SESSION['xoopsUserGroups'] = $xoopsUser->getGroups();

        $context->mXoopsUser->setGroups($_SESSION['xoopsUserGroups']);

        $roles = array();
        $roles[] = "Site.RegisteredUser";
        if ($context->mXoopsUser->isAdmin(-1)) {
            $roles[] = "Site.Administrator";
        }
        if (in_array(XOOPS_GROUP_ADMIN, $_SESSION['xoopsUserGroups'])) {
            $roles[] = "Site.Owner";
        }

        $identity = new Legacy_Identity($context->mXoopsUser);
        $principal = new Legacy_GenericPrincipal($identity, $roles);

//        //
//        // Use 'mysession'
//        //
//        $xoopsConfig = $root->mContext->mXoopsConfig;
//
//        if ($xoopsConfig['use_mysession'] && $xoopsConfig['session_name'] != '') {
//            setcookie($xoopsConfig['session_name'], session_id(), time() + (60 * $xoopsConfig['session_expire']), '/', '', 0);
//        }
        // Raise Site.CheckLogin.Success event
        XCube_DelegateUtils::call('Site.CheckLogin.Success', new XCube_Ref($xoopsUser));
    }

    function getUserObject() {
//        $criteria = new CriteriaCompo(new Criteria('uname', addslashes($uname)));
        $user_handler =& xoops_gethandler('user');
        return $user_handler->get(1);
//        $users =& $user_handler->getObjects($criteria, false);
//        if( empty( $users ) || count( $users ) != 1 ) {
//            $xoopsUser = null ;
//        } else {
//            $xoopsUser = $users[0];
//        }
//        return $xoopsUser;
    }

//    /**
//     * Custom 'mSetupUser' Delegate functions for AutoLogin
//     *
//     */
//    function setupUser(&$principal, &$controller, &$context) {
//        if (is_object($context->mXoopsUser)) {
//            return;
//        }
//        //Anonymous session
//        if (empty($_SESSION['xoopsUserId'])) {
//            //Check Cookies for AutoLogin
//            $xoopsUser = $this->_getUserFromCookie();
//            if (is_object($xoopsUser) && $xoopsUser->getVar('level') > 0) {
//                $root =& XCube_Root::getSingleton();
//                $context->mXoopsUser =& $xoopsUser;
//                // Regist to session
//                $root->mSession->regenerate();
//                $_SESSION['xoopsUserId'] = $xoopsUser->getVar('uid');
//                $_SESSION['xoopsUserGroups'] = $xoopsUser->getGroups();
//
//                $context->mXoopsUser->setGroups($_SESSION['xoopsUserGroups']);
//
//                $roles = array();
//                $roles[] = "Site.RegisteredUser";
//                if ($context->mXoopsUser->isAdmin(-1)) {
//                    $roles[] = "Site.Administrator";
//                }
//                if (in_array(XOOPS_GROUP_ADMIN, $_SESSION['xoopsUserGroups'])) {
//                    $roles[] = "Site.Owner";
//                }
//
//                $identity = new Legacy_Identity($context->mXoopsUser);
//                $principal = new Legacy_GenericPrincipal($identity, $roles);
//
//                //
//                // Use 'mysession'
//                //
//                $xoopsConfig = $root->mContext->mXoopsConfig;
//
//                if ($xoopsConfig['use_mysession'] && $xoopsConfig['session_name'] != '') {
//                    setcookie($xoopsConfig['session_name'], session_id(), time() + (60 * $xoopsConfig['session_expire']), '/', '', 0);
//                }
//                // Raise Site.CheckLogin.Success event
//                XCube_DelegateUtils::call('Site.CheckLogin.Success', new XCube_Ref($xoopsUser));
//            } else { //Invalid AutoLogin
//                setcookie('autologin_uname', '', time() - 3600, $this->mCookiePath, '', 0);
//                setcookie('autologin_pass', '', time() - 3600, $this->mCookiePath, '', 0);
//                if (is_object($xoopsUser)) $xoopsUser = false;
//            }
//        }
//    }

//    function &_getUserFromCookie() {
//        $root =& XCube_Root::getSingleton();
//        $controller = $root->mController;
//        //Check Cookies for AutoLogin
//        if(isset($_COOKIE['autologin_uname']) && substr(@$_COOKIE['autologin_pass'],0,1)=='2') {
//            // Loop check for some environments which cookie cannot be modified.
//            if( @$_SESSION['AUTOLOGIN_TRIED_UNAME'] == $_COOKIE['autologin_uname'] ) {
//                $ret = null;
//                return $ret ;
//            }
//
//            //Forwarding to confirmation sequence, if request with POST or GET paramaters.
//            $confirm_url = '/user.php';
//            if(!empty( $_POST)) {
//                $_SESSION['AUTOLOGIN_POST'] = $_POST ;
//                $_SESSION['AUTOLOGIN_REQUEST_URI'] = $_SERVER['REQUEST_URI'] ;
//
//                $controller->executeForward(XOOPS_URL.$confirm_url.'?op=confirm');
//            } else if(!empty($_SERVER['QUERY_STRING']) && substr($_SERVER['SCRIPT_NAME'], -strlen($confirm_url)) != $confirm_url) {
//                $_SESSION['AUTOLOGIN_REQUEST_URI'] = $_SERVER['REQUEST_URI'] ;
//                $controller->executeForward(XOOPS_URL.$confirm_url.'?op=confirm');
//            }
//            //Verify UserID and Password in Cookie
//            $member_handler =& xoops_gethandler('member');
//            $myts =& MyTextSanitizer::getInstance();
//            $uname = $myts->stripSlashesGPC($_COOKIE['autologin_uname']);
//            $pass = $myts->stripSlashesGPC($_COOKIE['autologin_pass']);
//
//            $criteria = new CriteriaCompo(new Criteria('uname', addslashes($uname)));
//            $user_handler =& xoops_gethandler('user');
//            $users =& $user_handler->getObjects($criteria, false);
//            if( empty( $users ) || count( $users ) != 1 ) {
//                $xoopsUser = null ;
//                $_SESSION['AUTOLOGIN_TRIED_UNAME'] = $_COOKIE['autologin_uname'] ;            } else {
//                $xoopsUser = $users[0];
//                //Check Cookie LifeTime;
//                $old_limit = time() - $this->mLifeTime ;
//                list( $old_Ynj , $old_encpass ) = explode( ':' , $pass ) ;
//                if( strtotime( $old_Ynj ) < $old_limit || md5( $xoopsUser->getVar('pass') . $old_Ynj ) != $old_encpass ) {
//                    $xoopsUser = false ;
//                }
//            }
//        }
//        return $xoopsUser;
//    }

//    /**
//     * Custom 'Site.CheckLogin.Success' Delegate function for AutoLogin
//     *
//     * @param XoopsUser $xoopsUser
//     */
//    function CheckLoginSuccess(&$xoopsUser)
//    {
//        if (is_object($xoopsUser)){
//            if ($this->mRememberMe || (!empty($_COOKIE['autologin_uname']) && !empty($_COOKIE['autologin_pass']))) {
//                $expire = time() + $this->mLifeTime;
//                $Ynj = date('Y-n-j');
//                setcookie('autologin_uname', $xoopsUser->getVar('uname'), $expire, $this->mCookiePath, '', 0);
//                setcookie('autologin_pass', $Ynj.':'.md5($xoopsUser->getVar('pass').$Ynj), $expire, $this->mCookiePath,'', 0);
//            }
//        }
//    }
//
//    /**
//     * Custom 'Site.Logout' Delegate function for AutoLogin
//     *
//     */
//    function Logout()
//    {
//        // Remove Cookies for Auto login.
//        setcookie('autologin_uname', '', time()-3600, $this->mCookiePath, '', 0);
//        setcookie('autologin_pass',  '', time()-3600, $this->mCookiePath, '', 0);
//
//        // Remove Cookies for old Auto login.
//        setcookie('autologin_uname', '', time()-3600, '/', '', 0);
//        setcookie('autologin_pass',  '', time()-3600, '/', '', 0);
//    }
//
//    /**
//     * Custom 'Legacypage.User.Access' Delegate function for AutoLogin
//     *
//     */
//    function AccessToUser()
//    {
//        $op=isset($_REQUEST['op']) ? trim($_REQUEST['op']) : 'main';
//        $root =& XCube_Root::getSingleton();
//
//        $controller =& $root->mController;
//        $xoopsUser =& $root->mContext->mXoopsUser;
//
//        switch($op) {
//          case 'main':
//            if (empty($xoopsUser)) {
//                $controller->executeHeader();
//                // Using User Module Context (This part is a little bit tricky)
//                $controller->setupModuleContext('user');
//                // Using CubeUtil Module Context (This part is a little bit tricky)
//                $root->mLanguageManager->loadModuleMessageCatalog('cubeUtils');
//                $context =& $root->mContext;
//                $renderTarget =& $context->mModule->getRenderTarget();
//                $moduleConfig =  $context->mModuleConfig;
//                // Rendering Logon Screen With "Remember Me"
//                $renderTarget->setTemplateName('cubeUtils_userform.html');
//                if (@isset($_COOKIE[$moduleConfig['usercookie']])) {
//                    $renderTarget->setAttribute('usercookie', $_COOKIE[$moduleConfig['usercookie']]);
//                }
//                if (isset($_GET['xoops_redirect'])) {
//                    $renderTarget->setAttribute('redirect_page', xoops_getrequest('xoops_redirect'));
//                }
//                $renderTarget->setAttribute('allow_register', $moduleConfig['allow_register']);
//                $controller->executeView();
//                exit(); //Should not return;
//            } else {
//                header('Location: '.XOOPS_URL . '/userinfo.php?uid='.$xoopsUser->getVar('uid'));
//                exit();
//            }
//            break;
//
//          case 'login':
//            if (!empty($_POST['rememberme'])) {
//                $this->mRememberMe = 1;
//            } else {
//                $this->mRememberMe = 0;
//            }
//            break;
//
//          case 'confirm':
//            // 'confirm' action is special for autologin for security checking
//            if(!isset( $_SESSION['AUTOLOGIN_REQUEST_URI'])) exit ;
//            // get URI
//            $url = $_SESSION['AUTOLOGIN_REQUEST_URI'] ;
//            unset($_SESSION['AUTOLOGIN_REQUEST_URI']) ;
//            if( preg_match('/javascript:/si', $url) ) exit ; // black list of url
//            $url4disp = preg_replace('/&amp;/i', '&', htmlspecialchars($url, ENT_QUOTES));
//            // loop check
//            /* if( strstr( $url4disp , 'autologin_loop_check=1' ) ) {
//                redirect_header(XOOPS_URL.'/', 1, _TAKINGBACK);
//                exit();
//            }
//            $url4disp .= strstr( $url4disp , '?' ) ? '&autologin_loop_check=1' : '?autologin_loop_check=1' ; */
//
//            if( isset( $_SESSION['AUTOLOGIN_POST'] ) ) {
//                // For GET request, it require confirmation to continue.
//                $old_post = $_SESSION['AUTOLOGIN_POST'] ;
//                unset( $_SESSION['AUTOLOGIN_POST'] ) ;
//
//                $hidden_str = '' ;
//                foreach( $old_post as $k => $v ) {
//                    $hidden_str .= "\t".'      <input type="hidden" name="'.htmlspecialchars($k,ENT_QUOTES).'" value="'.htmlspecialchars($v,ENT_QUOTES).'" />'."\n" ;
//                }
//                echo '
//                <html><head><meta http-equiv="Content-Type" content="text/html; charset='._CHARSET.'" />
//                <title>'.$root->mContext->mXoopsConfig['sitename'].'</title>
//                </head>
//                <body>
//                <div style="text-align:center; background-color: #EBEBEB; border-top: 1px solid #FFFFFF; border-left: 1px solid #FFFFFF; border-right: 1px solid #AAAAAA; border-bottom: 1px solid #AAAAAA; font-weight : bold;">
//                  <h4>Retry Post</h4>
//                  <pre>This screen would be a result by some XSS attack.<br />Please be careful to continue.</pre>
//                  <form action="'.$url4disp.'" method="POST">
//                  '.$hidden_str.'
//                    <input type="submit" name="timeout_repost" value="'._SUBMIT.'" />
//                  </form>
//                </div>
//                </body>
//                </html>
//                ' ;
//                exit ;
//            } else {
//                // For GET request, Do just redirecting
////                redirect_header($url4disp, 1, _TAKINGBACK);
//                redirect_header($url4disp);
//                exit();
//            }
//            break;
//        }
//    }
}
?>