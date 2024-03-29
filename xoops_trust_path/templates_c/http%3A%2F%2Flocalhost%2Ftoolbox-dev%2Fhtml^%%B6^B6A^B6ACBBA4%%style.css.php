<?php /* Smarty version 2.6.26, created on 2013-03-06 05:46:23
         compiled from file:stylesheets/style.css */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'theme', 'file:stylesheets/style.css', 19, false),)), $this); ?>
/* 
	Administration Theme 2.2
	File style.css

	XOOPS Cube Project 
	(c) 2008
*/

* {
	margin:0;
	padding:0;
}

body {
	color:#37415C;
	font-size:12px;
	line-height:130%;
	font:12px/1.5em Arial, Helvetica, sans-serif;
	background:#fff url(<?php echo ((is_array($_tmp="design/bg_page.jpg")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) top left repeat-x;
}

h1, h2, h3, h4, h5, h6 {
	margin:0.5em;
}
h3 {
	font-size:18px;
}
h4 {
	font-size:16px;
	margin:1em;
}
h5 {
	font-size:14px;
	margin:1em;
}
h6 {
	font-size:12px;
}

a, a:visited {
	color:#3F4D6B;
	font-weight:normal;
	text-decoration:none;
}
a:hover, a:active {
	color:#F29B09;
}

img {
	border:0
}

hr {
	color:#E18A00;
	background-color:#E18A00;
	border:none;
	width:95%;
	height:0.3em;
	margin: 10px auto; 
	text-align:center; 
}

ul {
	margin:2px;
	padding:2px;
	list-style:square outside;
}
li {
	margin-left:20px;
	line-height:130%;
}

table {
	margin:0;
	padding:0;
	width:100%;
	border-collapse:collapse; 
}
td {
	vertical-align:top;
}
th {
	text-align:center;
	padding:5px 1px;
	background:#eee url(<?php echo ((is_array($_tmp="design/bg_blocktitle.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) top left repeat-x;
}
th a {
	font-weight:bold;
}
th a:visited {
	font-weight:bold;
}
th a:hover {
	font-weight:bold;
	color:#ff8c00;
}

form {
	margin:0.5em 0;
}
input {
	border-top:1px solid #999;
	border-right:1px solid #CCC;
	border-bottom:1px solid #DDD;
	border-left:1px solid #999;
	padding:2px;
	background:url(<?php echo ((is_array($_tmp="design/bg_data.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) top left repeat;
}
input.formButton {
	background:url(<?php echo ((is_array($_tmp="design/bg_data.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
);
	border-top:solid 1px #CCC;
	border-left:solid 1px #DDD;
	border-right:solid 1px #999;
	border-bottom:solid 1px #999;
	padding: 1px 10px;
}
textarea {
	font-size:13px;	
}

select option {
	padding: 0 3px;
}

#container {
	width:100%;
	margin:0 auto;
	text-align:left;
}

/* ====================================================== common ===== */

.outer td , .outer th {
	border:1px solid #ccc;
}
table.outer {
	margin:10px 0;
	border:1px solid #ddd;
}
.head {
	background:#dddddd;
	padding:5px 3px;
}
.foot {
	padding:6px 4px;
	text-align: center;
	background:url(<?php echo ((is_array($_tmp="design/bg_footer.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) top left repeat-x;
}

.odd {
	background:#eeeeff;
	padding:5px 3px;
}
.even {
	background:#ffffff;
	padding:5px 3px;
}
tr .odd td {
	padding:3px;
	vertical-align:middle;
}
tr .even td {
	padding:3px;
	vertical-align:middle;
}
.nw {
	white-space:nowrap;
}

/* ====================================================== header ===== */

#header {
	height:100px;
}

#header .logo a {
	float:left;
	padding:14px;
	font-size:20px;
	color:#FFF;
}

#header .logo a:hover {
	border-bottom: 0;
}

#header .headerSearch {
	float:right;
	text-align:right;
	padding:14px;
}
#header .headerSearchForm {
	margin:0;
}
#header .topnav {
	clear:both;
	text-align:right;
	padding:2px 10px;
}
#header .topnav a, .topnav a:visited {
	font-weight:bold;
	vertical-align:top;
}

#header .topnav span.linkadmin { float:left;}
#header .topnav span.linkadmin a, span.linksite a { margin-right:10px;}

/* ====================================================== LeftColumn ===== */

#leftcolumn {
	width:190px;
	padding:10px;
}
#leftcolumn .head {
	padding:5px;
	font-weight:bold;
	border:1px solid #E5E5E5;
	text-align:left;
	background:url(<?php echo ((is_array($_tmp="design/bg_blocktitle.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) left top repeat-x;
}
#leftcolumn .head a, #leftcolumn .head a:visited {
	font-weight:bold;
}

#leftcolumn .head2 {
	padding:5px;
	text-align:left;		
	border-top:1px solid #fff;
	border-bottom:1px solid #D4D4FF;
	background:url(<?php echo ((is_array($_tmp="design/bg_blocktitle2.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) left top repeat-x;
}
#leftcolumn .head2 a {
	font-weight:bold;
}

#leftcolumn .submenu {
	margin:0px;
	padding:3px 2px;
	display:none;	
	background:url(<?php echo ((is_array($_tmp="design/bg_blockcontent.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) left top repeat-x;
}
#leftcolumn .submenu li {
	margin:0;
	padding:2px 2px 2px 17px;
	list-style:none;
	background:url(<?php echo ((is_array($_tmp="design/menulist.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) center left no-repeat;
}

/* ====================================================== Center Column ===== */

#centercolumn {
	background:#fff;
	margin:0;
	padding:0;
}
#contentBody {
	background:#fff;
	padding:10px;
}

#footer {
	padding:15px 0;	
	text-align:center;
	font-size:0.9em;
	border-top:1px solid #ddd;
	background:url(<?php echo ((is_array($_tmp="design/bg_footer.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) top left repeat-x;
}

.return_top {
	float:right;
	width:140px;
	text-align:center;
	margin:20px;
	padding:5px;
	border-top:1px solid #eee;
	border-left:1px solid #eee;
	border-right:1px solid #ddd;
	border-bottom:1px solid #ccc;
	background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/page_up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) left center no-repeat;
}

/* ====================================================== MenuNavi for noscript ===== */

#menunavi {
	margin:8px;
	background-color:#eeeeff;
}
#menunavi h2 {
	margin:0.4em 2em;
	font-size: 16px;
	color:#333366;
}
ul.submenunavi {
	text-align:left;
	padding:0;
	margin:3px;
}
ul.submenunavi li {
	display:inline;
	margin:0 2px;	
	padding:3px;
	line-height:2em;
	border-top:1px solid #ffffff;
	border-left:1px solid #ffffff;
	border-right:1px solid #cccccc;
	border-bottom:1px solid #cccccc;
	background:#f8f8ff;
}

/* ====================================================== Admin Navi ===== */

.adminnavi {
	margin:0px -3px 20px -3px;
	padding:5px 10px;
	border:1px solid #EEE;
	border-bottom:1px solid #fff;
	background:#FBFBFB url(<?php echo ((is_array($_tmp="design/bg_blockcontent.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 0px -25px repeat-x;
}
.adminnavi a:link , .adminnavi a:visited {
	font-weight:bold;
}
.adminnavi a:hover {
	font-weight:bold;
}
.adminnaviTitle {
	font-size:16px;
	font-weight:bold;
}
h3.admintitle {
	display:none;
}

/* ====================================================== Top Tab ===== */

ul.toptab {
	text-align:right; padding:0; margin:10px;
}
ul.toptab li {
	display:inline;
	margin:5px;
	padding:5px 10px 5px 25px; 
	border-top:1px solid #eee;
	border-left:1px solid #eee;
	border-right:1px solid #ddd;
	border-bottom:1px solid #ccc;	
}

/* ====================================================== Buttons ===== */

ul.toptab li.add {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.archive {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/archive.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBanner {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/time_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBannerClientList {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/time_user.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBannerList {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/timeline.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBannerExpire {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/time_expire.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBlock {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/block.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBlockCustom {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/block_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addBlockEdit {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/block_edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addFile {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/page_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addField {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/add_field.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addFolder {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/folder_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addGroup {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/group_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addImage {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/image_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addModule {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/module_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addRank {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/rank_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addUser {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/user_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addSearch {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/search_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.addSend {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/send.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.editFile {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/page_edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.editFolder {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/folder_edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.group {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/group.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.import {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/import.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.save {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/page_save.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.templates {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/templates.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.theme {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/theme.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}
ul.toptab li.view {
background:#f2f2f2 url(<?php echo ((is_array($_tmp="icons/view.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) 5px center no-repeat;
}


/* ====================================================== Module Nav ===== */

	ul.modulenav {  width:100%; font-size:93%; line-height:normal; margin:0; padding:0; list-style:none; }
	ul.modulenav li { display:inline; margin:0; padding:0;}
	ul.modulenav a { float:left; background:url(<?php echo ((is_array($_tmp="design/bg_blocktitle.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) repeat left top; margin:0; padding:0 0 0 9px;border-right:1px solid #d4d4ff; border-bottom:1px solid #d4d4ff; text-decoration:none; }
	ul.modulenav a span { float:left; display:block; padding:8px 10px; font-weight:bold; color:#37415C; }
	ul.modulenav a span {float:none;}
	ul.modulenav .current a { background-position:0 45px; border-width:0; }
	ul.modulenav .current a span { color:#37415C; }
	ul.modulenav a:hover { background-position:0% 50px; }
	ul.modulenav a:hover span { color:#F29B09;background-position:100% 45px;  }

/* ====================================================== Page Navi ===== */

.pagenavi {
	font-size:14px;
	text-align:center;
	margin:10px;
	word-spacing: 0.5em;
}

/* ====================================================== top message ===== */

.warning, .resultMsg {
	color:#770000;
	font-size:15px;
	border:1px solid #cc0000;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background:#fff8ee url(<?php echo ((is_array($_tmp="icons/error.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}
.confirm, .confirmMsg {
	color:#000000;
	border:1px solid #ff6633;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background:#fff8ee url(<?php echo ((is_array($_tmp="icons/important.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}
.tips {
	color:#000000;
	border:1px solid #00cc00;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background:#f8fff8 url(<?php echo ((is_array($_tmp="icons/idea.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}
.error, .errorMsg {
	color:#000000;
	border:2px dotted #ff6633;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background: #fff8ee url(<?php echo ((is_array($_tmp="icons/error.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}

.resultMsg {
	color:#000000;
	font-size:15px;
	border:1px solid #6B94C5;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background:#EEEEFF url(<?php echo ((is_array($_tmp="icons/info.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}

.sqlAdd {
	color:#009900;
	border:1px solid #00cc00;
	display:block;
	height:240px;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	overflow:auto;
	background:#E4E4E4 url(<?php echo ((is_array($_tmp="icons/database_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}
.sqlDelete {
	color:#CC3300;
	border:1px solid #ff6633;
	display:block;
	height:240px;
	overflow:auto;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	background:#E4E4E4 url(<?php echo ((is_array($_tmp="icons/database_delete.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}

.updateMsg {
	color:#009900;
	border:1px solid #00cc00;
	display:block;
	height:240px;
	padding:8px 8px 8px 35px;
	margin:15px 10px;
	overflow:auto;
	background:#E4E4E4 url(<?php echo ((is_array($_tmp="icons/update.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_css_theme($_tmp)); ?>
) no-repeat 5px 4px;
}

/* ====================================================== active ===== */

.active {
	background-color:#E6FFE6;
}
.active a:hover {
		color:#cc0000;
}
.inactive {
		color:#333333; 
}
/* ====================================================== Ranking ===== */

.user_module_error {
	color:#ff0000;
}