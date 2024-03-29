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
var QaSearchState = Class.create();
Object.extend(QaSearchState.prototype, Panel.prototype);
Object.extend(QaSearchState.prototype, {

	id : 'qa-search-state',
	panel : null,

	initialize : function() {
		this.panel = new QaSearchPanel();
	},

	draw : function() {
		this.panel.load();
	},
	
	hide : function() {
		Panel.prototype.hide.apply(this, arguments);
		this.panel.clear();
	}
});