<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This provides accurate
// translation using the autocomplete feature based on parallel texts and
// translation template.
// Copyright (C) 2010  CITY OF KYOTO
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
/*
 * $Id: save.php 3550 2010-03-25 07:36:17Z yoshimura $
 */
try {
	$datas = array();
	if (isset($_POST['paralleltexts'])) {
		$datas = $_POST['paralleltexts'];
	}

	$settingClass = new AutoCompleteSetting();
	if ($settingClass->update($datas) === false) {
		throw new Exception("");
	}

	echo json_encode(array('status' => 'OK'));
} catch (Exception $e) {
	echo json_encode(array('status' => 'Error'));
}
?>
