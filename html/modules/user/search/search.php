<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This provides user management
// functions.
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
require_once '../../../mainfile.php';
require_once "class/manager/UserSearchManager.class.php";
$userSearchManager=new UserSearchManager();
//$res=$userSearchManager->TestSearch();
//$params = array("keyWord"=>$_GET["searchWord"], "type"=>$_GET["searchType"]);
$params = array("keyWord"=>$_POST["searchWord"], "type"=>$_POST["searchType"]);
$res = $userSearchManager->search($params);
echo json_encode($res);
?>