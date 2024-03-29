<?php
/**
 * @package stdCache
 * @version $Id: Initialize.class.php,v 1.1 2007/05/15 02:35:37 minahito Exp $
 */

if (!defined('XOOPS_ROOT_PATH')) exit();
 
class StdCache_Initialize extends XCube_ActionFilter
{
	function preBlockFilter()
	{
		$this->mController->mSetBlockCachePolicy->add(array(&$this, 'setForBlock'), XCUBE_DELEGATE_PRIORITY_FIRST + 10);
		$this->mController->mSetModuleCachePolicy->add(array(&$this, 'setForModule'), XCUBE_DELEGATE_PRIORITY_FIRST + 10);
	}
	
	function setForBlock($cacheInfo)
	{
		$user =& $this->mRoot->mContext->mXoopsUser;
		if (is_object($user)) {
			$cacheInfo->mGroupArr = $user->getGroups();
			$cacheInfo->setEnableCache(!in_array(XOOPS_GROUP_ADMIN, $user->getGroups()));
		}
		else {
			$cacheInfo->mGroupArr = array(XOOPS_GROUP_ANONYMOUS);
			$cacheInfo->setEnableCache(true);
		}
	}

	function setForModule($cacheInfo)
	{
		$user =& $this->mRoot->mContext->mXoopsUser;
		if (is_object($user)) {
			$cacheInfo->mGroupArr = $user->getGroups();
			$cacheInfo->setEnableCache(!in_array(XOOPS_GROUP_ADMIN, $user->getGroups()));
		}
		else {
			$cacheInfo->mGroupArr = array(XOOPS_GROUP_ANONYMOUS);
			$cacheInfo->setEnableCache(true);
		}
	}
}

?>