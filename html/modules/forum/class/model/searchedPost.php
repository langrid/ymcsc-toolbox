<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This provides a multilingual
// BBS, where messages can be displayed in multiple languages.
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
require_once dirname(__FILE__).'/abstract-model.php';
require_once dirname(__FILE__).'/../util/user.php';

class searchedPost extends Post {

	private $id;
	private $body;
	private $description;
	private $translationFlag = true;
	
	//$params is postsTable and postsBodyTable all fields
	public function __construct($params) {
		parent::__construct();
		$selectedLanguageTag = $this->languageManager->getSelectedLanguage();

		$this->id = $params['post_id'];
		
		$this->categoryId = $params['cat_id'];
		if (!isset($params['cat_title']) || $params['cat_title'] == "") {
			$this->cat_title = _MD_D3FORUM_NO_TRANSLATION;
		} else {
			$this->cat_title = $params['cat_title'];
		}

		$this->forumId = $params['forum_id'];
		if (!isset($params['forum_title']) || $params['forum_title'] == "") {
			$this->forum_title = _MD_D3FORUM_NO_TRANSLATION;
		} else {
			$this->forum_title = $params['forum_title'];
		}

		$this->topicId = $params['topic_id'];
		if (!isset($params['topic_title']) || $params['topic_title'] == "") {
			$this->topic_title = _MD_D3FORUM_NO_TRANSLATION;
		} else {
			$this->topic_title = $params['topic_title'];
		}

		if (!isset($params['description']) || $params['description'] == "") {
			$this->body = _MD_D3FORUM_NO_TRANSLATION;
			$this->translationFlag = false;
		} else {
			$this->body = $params['description'];
		}

		$this->updateTIme = $params['update_time'];
		$this->time = formatTimestamp($params['post_time'], 'm');
		$this->originalLanguage = $params['post_original_language'];

		$this->user = new User($params['uid']);
		$this->number = $params['post_order'];

		if(isset($params['reply_number']) && is_numeric($params['reply_number']) && $params['reply_number'] > 0){
			$this->reply_number = intval($params['reply_number']);
		}else{
			$this->reply_number = "";
		}
		if ($params["avatar"]=="blank.gif" || $params["avatar"]==""){
			$params["avatar"] = "no-image.jpg";
		}
		$this->avatar = XOOPS_UPLOAD_URL. "/".$params["avatar"];
		
		$this->params = $params;
	}
	public function isNotTranslated() {
		return $this->translationFlag;
	}
	public function isDeleted() {
		return $this->deleteFlag;
	}
	public function getParams() {
		return $this->params;
	}
	public function getId() {
		return $this->id;
	}
	public function getTime() {
		return $this->time;
	}
	public function getBody() {
		return $this->body;
	}
	public function getReply() {
		$reply = explode("\n", $this->body);
		array_unshift($reply, '>'.$this->getNumber());
		for ($i = 0, $length = count($reply); $i < $length; $i++) {
			$reply[$i] = '>'.$reply[$i];
		}
		$reply = implode("\n", $reply);
		return  $reply;
	}
	public function getOriginalBody() {
		$sql  = ' SELECT description FROM %s ';
		$sql .= ' WHERE post_id = %d AND `language_code` = \'%s\' ';

		$sql = sprintf($sql, $this->db->prefix(
				$this->moduleName.'_posts_body'), $this->id,
				$this->originalLanguage);
//				die($sql);
		$result = $this->db->query($sql);
		if (!$result) {
			die(_MD_D3FORUM_ERR_SQL.__LINE__);
		}
		if ($row = $this->db->fetchArray($result)) {
			$this->originalBody = $row['description'];
		}

		return $this->originalBody;
	}
	public function getNumber() {
		return $this->number;
	}
	public function getOriginalLanguage() {
		return $this->originalLanguage;
	}
	public function getOriginalLanguageName() {
		return $this->languageManager->getNameByTag($this->originalLanguage);
	}
	public function getUser() {
		return $this->user;
	}
	public function getTopicId() {
		return $this->topicId;
	}
	public function canEdit() {
		$editableFlag = ($this->root->mContext->mXoopsUser->isAdmin()
						|| $this->root->mContext->mXoopsUser->get('uid')
								== $this->user->getId());
		return ($editableFlag && !$this->canModify());
	}
	public function canReply() {
		return true;
	}
	public function canModify() {
		return $this->languageManager->getSelectedLanguage() != $this->originalLanguage;
	}
	public function canDelete() {
		$editableFlag = ($this->root->mContext->mXoopsUser->isAdmin()
						|| $this->root->mContext->mXoopsUser->get('uid')
								== $this->user->getId());
		return $editableFlag;
	}
	public function getUpdateTime() {
		return $this->updateTIme;
	}
	public function setUpdateTime($updateTIme) {
		$this->updateTIme = $updateTIme;
	}
	public function setReplyNumber($replyNumber) {
		if(is_numeric($replyNumber)){
			$this->reply_number = intval($replyNumber);
		}else{
			$this->reply_number = "";
		}
	}
	public function getReplyNumber() {
		return $this->reply_number;
	}
	public function getReplyPage($view) {
		return ceil($this->reply_number / $view);
	}
	public function isReply() {
		if(is_numeric($this->reply_number) && $this->reply_number != 0){
			return true;
		}else{
			return false;
		}
	}

	public function getAvatar(){
		return $this->avatar;
	}
}
?>