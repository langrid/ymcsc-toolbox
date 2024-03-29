//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This allows a user to create
// glossaries.
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
/**
 * @author kitajima
 */
var QaSearchRecordPanel = Class.create();
Object.extend(QaSearchRecordPanel.prototype, QaEditRecordPanel.prototype);
Object.extend(QaSearchRecordPanel.prototype, {
	createContentsHtml : function(language, aContents) {
		var contents = '';
		if (this.languages.indexOf(language) == -1) {
			contents =Global.Text.NOT_SUPPORTED_LANGUAGE_EXPRESSION;
		} else if (!aContents) {
			contents = Global.Text.BLANK;
		} else {
			contents = aContents;
		}
		return contents;
	}
});