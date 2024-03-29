<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This allows users to share
// contents on the multilingual BBS to have a discussion over the contents
// through the BBS.
// Copyright (C) 2010  Graduate School of Informatics, Kyoto University
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

require_once(XOOPS_ROOT_PATH.'/api/class/client/BBSClient.class.php');


if($_POST['message'] == null || $_GET['topicId'] == null){
	die();
}

$attachementContentId = @$_POST['contentId'];
// topicid & contentid check
if($attachementContentId != ""){
	$comContent = Com_Content::findById($attachementContentId);
	if(!$comContent || $_GET['topicId'] != $comContent -> getTopicId()){
		//die();
		redirect_header(XOOPS_URL.'/modules/'.$mytrustdirname.'/?action=list&topicId='.$topicId);
	}
}


$message = Com_Message::createFromParams($_GET['topicId'], $_POST);
$message -> insert();


redirect_header(XOOPS_URL.'/modules/'.$mytrustdirname.'/?topicId='.$_GET['topicId'].'#message-area-'.$message->getId());

?>
