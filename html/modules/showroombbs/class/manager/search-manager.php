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
require_once dirname(__FILE__).'/abstract-manager.php';
require_once dirname(__FILE__).'/../model/searchedPost.php';

class searchManager extends AbstractManager {

	private $posts = array();

	public function __construct() {
		parent::__construct();
	}

	public function searchPosts($word, $page, $view ,$topicId = null,$forumId = null,$categoryId = null) {
		$categoriesTable     = $this->db->prefix($this->moduleName.'_categories');
		$categoriesBodyTable = $this->db->prefix($this->moduleName.'_categories_body');
		$forumsTable         = $this->db->prefix($this->moduleName.'_forums');
		$forumsBodyTable     = $this->db->prefix($this->moduleName.'_forums_body');
		$topicsTable         = $this->db->prefix($this->moduleName.'_topics');
		$topicsBodyTable     = $this->db->prefix($this->moduleName.'_topics_body');
		$postsTable          = $this->db->prefix($this->moduleName.'_posts');
		$postsBodyTable      = $this->db->prefix($this->moduleName.'_posts_body');
		$usersTable          = $this->db->prefix("users");
		$groupId = $this->root->mContext->mXoopsUser->getGroups();
		$NowLang = $this->languageManager->getSelectedLanguage();

		$sql  = '';
		$sql .= ' SELECT  ';
		$sql .= '   P.`post_id`, ';
		$sql .= '   C.`cat_id`, ';
		$sql .= '   F.`forum_id`, ';
		$sql .= '   T.`topic_id`, ';
		$sql .= '   CB.`title` AS cat_title, ';
		$sql .= '   FB.`title` AS forum_title, ';
		$sql .= '   TB.`title` AS topic_title, ';
		$sql .= '   PB.`description`, ';
		$sql .= '   PB.`update_time`, ';
		$sql .= '   P.`uid`, ';
		$sql .= '   P.`post_order`, ';
		$sql .= '   P.`reply_post_id`, ';
		$sql .= '   P2.`post_order` AS reply_number, ';
		$sql .= '   P.`delete_flag`, ';
		$sql .= '   P.`post_time`, ';
		$sql .= '   P.`post_original_language`,';
		$sql .= '   U.user_avatar as avatar ';
		
		$sql .= ' FROM `'.$categoriesTable.'` AS C ';
		$sql .= ' INNER JOIN `'.$categoriesBodyTable.'` AS CB USING (`cat_id`)  ';
		$sql .= ' INNER JOIN `'.$forumsTable.'` AS F USING (`cat_id`)  ';
		$sql .= ' INNER JOIN `'.$forumsBodyTable.'` AS FB USING (`forum_id`) ';
		$sql .= ' INNER JOIN `'.$topicsTable.'` AS T USING (`forum_id`) ';
		$sql .= ' INNER JOIN `'.$topicsBodyTable.'` AS TB USING (`topic_id`) ';
		$sql .= ' INNER JOIN `'.$postsTable.'` AS P USING (`topic_id`) ';
		$sql .= ' INNER JOIN `'.$postsBodyTable.'` AS PB USING (`post_id`) ';
		$sql .= ' LEFT JOIN `'.$postsTable.'` AS P2 ';
		$sql .= ' ON P.reply_post_id = P2.post_id ';
		$sql .= ' LEFT JOIN `'.$usersTable.'` AS U ';
		$sql .= ' ON U.uid = P.uid ';

		$sql .= ' WHERE   CB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   FB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   TB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   PB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   PB.`description` LIKE \'%'.str_replace('\\"','"',addslashes($word)).'%\'  ';
		if($topicId != null){
			$sql .= ' AND   T.`topic_id` = '.intval($topicId).'  ';
		}
		if($forumId != null){
			$sql .= ' AND   F.`forum_id` = '.intval($forumId).'  ';
		}
		if($categoryId != null){
			$sql .= ' AND   C.`cat_id` = '.intval($categoryId).'  ';
		}
		$sql .= ' AND   C.`delete_flag` = 0  ';
		$sql .= ' AND   F.`delete_flag` = 0  ';
		$sql .= ' AND   T.`delete_flag` = 0  ';
		$sql .= ' ORDER BY C.`cat_id`,F.`forum_id`,T.`topic_id`,P.`post_order` ASC';

		$page = intval($page);
		if (!$page){$page = 1;}

		$view = intval($view);
		if (!$view) {$view = POST_LIST_MAX;}
		$page--;
		$start = $page * $view;
		$sql .= ' LIMIT '.intval(($page) * intval($view)).', '.intval($view);

		$result = $this->db->query($sql);

		$posts = array();
		$i = 0;
		while ($row = $this->db->fetchArray($result)) {
			$posts[$i] = new searchedPost($row);
			/*
			if(is_numeric($row['reply_post_id']) && $row['reply_post_id'] != 0){
				$sql  = '';
				$sql .= ' SELECT post_order ';
				$sql .= '   FROM '.$postsTable;
				$sql .= '   WHERE post_id = '.intval($row['reply_post_id']).' AND delete_flag = 0 ';
				$sql .= ' LIMIT 1 ';

				$result2 = $this->db->query($sql);
				if ($row2 = $this->db->fetchArray($result2)) {
					$posts[$i]->setReplyNumber($row2['post_order']);
				}
			}
			*/
			$i++;
		}
		return $posts;
	}
	public function getSearchCount($word, $page, $view ,$topicId = null,$forumId = null,$categoryId = null) {
		$postsCount = 0;
		
		$categoriesTable     = $this->db->prefix($this->moduleName.'_categories');
		$categoriesBodyTable = $this->db->prefix($this->moduleName.'_categories_body');
		$forumsTable         = $this->db->prefix($this->moduleName.'_forums');
		$forumsBodyTable     = $this->db->prefix($this->moduleName.'_forums_body');
		$topicsTable         = $this->db->prefix($this->moduleName.'_topics');
		$topicsBodyTable     = $this->db->prefix($this->moduleName.'_topics_body');
		$postsTable          = $this->db->prefix($this->moduleName.'_posts');
		$postsBodyTable      = $this->db->prefix($this->moduleName.'_posts_body');

		$NowLang = $this->languageManager->getSelectedLanguage();

		$sql  = '';
		$sql .= ' SELECT  ';
		$sql .= '   COUNT(P.`post_id`) AS CNT  ';
		$sql .= ' FROM `'.$categoriesTable.'` AS C ';
		$sql .= ' INNER JOIN `'.$categoriesBodyTable.'` AS CB USING (`cat_id`)  ';
		$sql .= ' INNER JOIN `'.$forumsTable.'` AS F USING (`cat_id`)  ';
		$sql .= ' INNER JOIN `'.$forumsBodyTable.'` AS FB USING (`forum_id`) ';
		$sql .= ' INNER JOIN `'.$topicsTable.'` AS T USING (`forum_id`) ';
		$sql .= ' INNER JOIN `'.$topicsBodyTable.'` AS TB USING (`topic_id`) ';
		$sql .= ' INNER JOIN `'.$postsTable.'` AS P USING (`topic_id`) ';
		$sql .= ' INNER JOIN `'.$postsBodyTable.'` AS PB USING (`post_id`) ';
		$sql .= ' WHERE C.`delete_flag` = 0  ';
		$sql .= ' AND   F.`delete_flag` = 0  ';
		$sql .= ' AND   T.`delete_flag` = 0  ';
		$sql .= ' AND   P.`delete_flag` = 0  ';
		$sql .= ' AND   CB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   FB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   TB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   PB.`language_code` = \''.$NowLang.'\'  ';
		$sql .= ' AND   PB.`description` LIKE \'%'.str_replace('\\"','"',addslashes($word)).'%\'  ';
		if($topicId != null){
			$sql .= ' AND   T.`topic_id` = '.intval($topicId).'  ';
		}
		if($forumId != null){
			$sql .= ' AND   F.`forum_id` = '.intval($forumId).'  ';
		}
		if($categoryId != null){
			$sql .= ' AND   C.`cat_id` = '.intval($categoryId).'  ';
		}
		$result = $this->db->query($sql);
		if ($row = $this->db->fetchArray($result)) {
			$postsCount = $row['CNT'];
		}
		return $postsCount;
	}
}
?>