<?php
//  ------------------------------------------------------------------------ //
// This is a program for Language Grid Toolbox. This provides a series of
// multilingual collaboration tools.
// Copyright (C) 2010 CITY OF KYOTO All Rights Reserved.
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

require_once XOOPS_ROOT_PATH.'/api/IResourceVO.interface.php';

/**
 * @author kitajima
 */
class QaCategoryUtil {
	
	/**
	 * 
	 * @param ToolboxVO_QA_QACategory $category
	 * @return array
	 */
	public static function buildCategory($category) {
		$return = array(
			'language' => $category->language,
			'count' => $category->termCount
		);
		foreach ($category->name as $exp) {
			$return[$exp->language] = $exp->expression;
		}
		return $return;
	}
}
?>