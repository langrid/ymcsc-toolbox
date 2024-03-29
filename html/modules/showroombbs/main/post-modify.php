<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This allows a user to view
// contents of BBS without logging into Toolbox.
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
require_once dirname(__FILE__).'/../class/permission/permission.php';
require_once dirname(__FILE__).'/../class/manager/post-manager.php';
require_once dirname(__FILE__).'/../class/manager/topic-manager.php';
require_once dirname(__FILE__).'/../class/manager/forum-manager.php';
require_once dirname(__FILE__).'/../class/manager/category-manager.php';

require_once dirname(__FILE__).'/../class/history/bbs-edit-history-manager.php';
require_once dirname(__FILE__).'/../class/history/enum-bbs-item-type-code.php';
require_once dirname(__FILE__).'/../class/history/enum-process-type-code.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$postManager = new PostManager();

	$postId = intval($_POST['postId']);
	$params = array(
		'postId' => $postId
	);
	$permission = new Permission($params);
	if (!$permission->postModify()){
		die(_MD_D3FORUM_ERR_MODPOST);
	}
	if (!$_POST['message'][$languageManager->getSelectedLanguage()]) {
		die(_MD_D3FORUM_ERR_NOMESSAGE);
	}

	$post = $postManager->getPost($_POST['postId']);

	if (!$_POST['message'][$languageManager->getSelectedLanguage()] == $post->getBody()) {
		redirect_header(XOOPS_URL.'/modules/'.$mydirname.'/?topicId='.$topicId);
		die();
	}

	$postManager->modifyPost($_POST);
	$topicId = intval($post->getTopicId());
	$page = floor(($post->getNumber()-1) / 20) + 1;
//	redirect_header(XOOPS_URL.'/modules/'.$mydirname.'/?topicId='.$topicId);
	redirect_header(XOOPS_URL.'/modules/'.$mydirname.'/?topicId='.$topicId.'&page='.$page.'#post-number-'.$post->getNumber());
	die();
} else {
	$languageManager = new LanguageManager();
	$postManager = new PostManager();
	$postId = intval($_GET['postId']);
	$post = $postManager->getPost($postId);

	if ($post->getOriginalLanguage() == $languageManager->getSelectedLanguage()) {
		redirect_header(XOOPS_URL.'/modules/'.$mydirname.'/?page=post-edit&postId='.$postId);
		die();
	}

	$topicManager = new TopicManager();
	$topic = $topicManager->getTopic($post->getTopicId());

	$forumManager = new ForumManager();
	$forum = $forumManager->getForum($topic->getForumId());

	$categoryManager = new CategoryManager();
	$category = $categoryManager->getCategory($forum->getCategoryId());

	$params = array(
		'categoryId' => $forum->getCategoryId(),
		'forumId' => $topic->getForumId(),
		'topicId' => $post->getTopicId(),
		'postId' => $postId
	);

	$permission = new Permission($params);

	if (!$permission->postModify()){
		die(_MD_D3FORUM_ERR_MODPOST);
	}

	include XOOPS_ROOT_PATH.'/header.php';
	$xoopsOption['template_main'] = $mydirname.'_main_post_modify_form.html';

	$bbsEditHistoryManager = new BBSEditHistoryManager();
	$modifyHistory = $bbsEditHistoryManager->getModificationHistory($postId
							, EnumBBSItemTypeCode::$post
							, $languageManager->getSelectedLanguage());
	$xoopsTpl->assign(
		array(
			'post' => $post,
			'topic' => $topic,
			'forum' => $forum,
			'category' => $category,
			'modifyHistory' => $modifyHistory
		)
	);
	include XOOPS_ROOT_PATH.'/footer.php' ;
}
?>