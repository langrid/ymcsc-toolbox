<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox.
//
// Copyright (C) 2010  NICT Language Grid Project
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
/**
 * $Id: text-resource-load-modules.php 3662 2010-06-16 02:22:17Z yoshimura $
 */
error_reporting(0);
require_once(dirname(__FILE__).'/../class/manager/UICustomizeTextResourceFilesManager.php');

$result = array(
	'status' => 'OK',
	'message' => 'Success!',
	'contents' => array()
);

try {
	$lang = @$_POST['lang'];
	$manager = new UICustomizeTextResourceFilesManager();

	$result['contents']['modules'] = $manager->getModules($lang);

} catch (Exception $e) {
	$result['status'] = 'ERROR';
	$result['message'] = $e->getMessage();
}

//$result['contents']['modules'] = $test;

header('Content-Type: application/json; charset=utf-8;');
echo json_encode($result);
?>