<?php
//  ------------------------------------------------------------------------ //
// This is a module for Language Grid Toolbox. This allows a user to create
// translation templates.
// Copyright (C) 2010  Department of Social Informatics, Kyoto University
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
require_once dirname(__FILE__).'/../../../mainfile.php';
?>
var Global = {
	Text : {
		A : '<?php echo _MI_TEMPLATE_A; ?>',
		ADD_ANSWER : '<?php echo _MI_TEMPLATE_ADD_ANSWER; ?>',
		ADD_BOUND_WORD : '<?php echo _MI_TEMPLATE_ADD_BOUND_WORD; ?>',
		ADD_BOUND_WORD_SET : '<?php echo _MI_TEMPLATE_ADD_BOUND_WORD_SET; ?>',
		ADD_CATEGORY : '<?php echo _MI_TEMPLATE_ADD_CATEGORY; ?>',
		ADD_DELETE_LANGUAGES : '<?php echo _MI_TEMPLATE_ADD_DELETE_LANGUAGES; ?>',
		ADD_PARAMETER : '<?php echo _MI_TEMPLATE_ADD_PARAMETER; ?>',
		ADD_QUESTION : '<?php echo _MI_TEMPLATE_ADD_QUESTION; ?>',
		ALERT : '<?php echo _MI_TEMPLATE_ALERT; ?>',
		ALL : '<?php echo _MI_TEMPLATE_ALL; ?>',
		ALL_ANSWERS : '<?php echo _MI_TEMPLATE_ALL_ANSWERS; ?>',
		ALL_CATEGORIES : '<?php echo _MI_TEMPLATE_ALL_CATEGORIES; ?>',
		ALL_LANGUAGES : '<?php echo _MI_TEMPLATE_ALL_LANGUAGES; ?>',
		ALL_EMPTY_NOT_REGISTER : '<?php echo _MI_TEMPLATE_ALL_EMPTY_NOT_REGISTER; ?>',
		ALL_RESOURCES : '<?php echo _MI_TEMPLATE_ALL_RESOURCES; ?>',
		ANSWERS_WITH_RESUTLS : '<?php echo _MI_TEMPLATE_ANSWERS_WITH_RESUTLS; ?>',
		AT_LEAST_TWO_LANGUAGES : '<?php echo _MI_TEMPLATE_AT_LEAST_TWO_LANGUAGES; ?>',
		BLANK : '<?php echo _MI_TEMPLATE_BLANK; ?>',
		BOUND_WORD_SETS : '<?php echo _MI_TEMPLATE_BOUND_WORD_SETS; ?>',
		CANCEL : '<?php echo _MI_TEMPLATE_CANCEL; ?>',
		CATEGORY : '<?php echo _MI_TEMPLATE_CATEGORY; ?>',
		CATEGORIES : '<?php echo _MI_TEMPLATE_CATEGORIES; ?>',
		CLEAR_SEARCH_RESULTS : '<?php echo _MI_TEMPLATE_CLEAR_SEARCH_RESULTS; ?>',
		CLOSE : '<?php echo _MI_TEMPLATE_CLOSE; ?>',
		COMPLETE : '<?php echo _MI_TEMPLATE_COMPLETE; ?>',
		CONFIRM : '<?php echo _MI_TEMPLATE_CONFIRM; ?>',
		CONFIRM_DELETE : '<?php echo _MI_TEMPLATE_CONFIRM_DELETE; ?>',
		CONFIRM_DELETE_ANSWER_ROW : '<?php echo _MI_TEMPLATE_CONFIRM_DELETE_ANSWER_ROW; ?>',
		CONFIRM_DELETE_BOUND_WORD_SET : '<?php echo _MI_TEMPLATE_CONFIRM_DELETE_BOUND_WORD_SET; ?>',
		CONFIRM_DELETE_CATEGORY : '<?php echo _MI_TEMPLATE_CONFIRM_DELETE_CATEGORY; ?>',
		CONFIRM_DELETE_QUESTION : '<?php echo _MI_TEMPLATE_CONFIRM_DELETE_QUESTION; ?>',
		CONFIRM_DISCARD_CHANGES : '<?php echo _MI_TEMPLATE_CONFIRM_DISCARD_CHANGES; ?>',
		CREATE_A_LANGUAGE_RESOURCE : '<?php echo _MI_TEMPLATE_CREATE_A_LANGUAGE_RESOURCE; ?>',
		CREATOR : '<?php echo _MI_TEMPLATE_CREATOR; ?>',
		DELETE : '<?php echo _MI_TEMPLATE_DELETE; ?>',
		DELETE_LANGUAGE_RESOURCE : '<?php echo _MI_TEMPLATE_DELETE_LANGUAGE_RESOURCE; ?>',
		DELETE_RECORD : '<?php echo _MI_TEMPLATE_DELETE_RECORD; ?>',
		DEPLOY : '<?php echo _MI_TEMPLATE_DEPLOY; ?>',
		DO_YOU_DISCARD_ANSWERS : '<?php echo _MI_TEMPLATE_DO_YOU_DISCARD_ANSWERS; ?>',
		EDIT : '<?php echo _MI_TEMPLATE_EDIT; ?>',
		EDIT_BOUND_WORDS : '<?php echo _MI_TEMPLATE_EDIT_BOUND_WORDS; ?>',
		EDIT_BOUND_WORD_SETS : '<?php echo _MI_TEMPLATE_EDIT_BOUND_WORD_SETS; ?>',
		EDIT_LANGUAGE_RESOURCE : '<?php echo _MI_TEMPLATE_EDIT_LANGUAGE_RESOURCE; ?>',
		EDIT_THE_CATEGORIES : '<?php echo _MI_TEMPLATE_EDIT_THE_CATEGORIES; ?>',
		EDIT_PARAMETER : '<?php echo _MI_TEMPLATE_EDIT_PARAMETER; ?>',
		EDIT_PERMISSION : '<?php echo _MI_TEMPLATE_EDIT_PERMISSION; ?>',
		EDIT_PERMISSION_SHORT : '<?php echo _MI_TEMPLATE_EDIT_PERMISSION_SHORT; ?>',
		ENTRIES : '<?php echo _MI_TEMPLATE_ENTRIES; ?>',
		ERROR_KEYWORD_IS_EMPTY : '<?php echo _MI_TEMPLATE_ERROR_KEYWORD_IS_EMPTY; ?>',
		ERROR_SELECT_A_FILE : '<?php echo _MI_TEMPLATE_ERROR_SELECT_A_FILE; ?>',
		ERROR_SELECT_A_CATEGORY : '<?php echo _MI_TEMPLATE_ERROR_SELECT_A_CATEGORY; ?>',
		ERROR_SELECT_A_RESOURCE : '<?php echo _MI_TEMPLATE_ERROR_SELECT_A_RESOURCE; ?>',
		ERROR_AJAX_FAILURE : '<?php echo _MI_TEMPLATE_ERROR_AJAX_FAILURE; ?>',
		ERROR_SELECT_AT_LEAST_TWO_LANGUAGES : '<?php echo _MI_TEMPLATE_ERROR_SELECT_AT_LEAST_TWO_LANGUAGES; ?>',
		ERROR_INPUT_RESOURCE_NAME : '<?php echo _MI_TEMPLATE_ERROR_INPUT_RESOURCE_NAME; ?>',
		EXPORT : '<?php echo _MI_TEMPLATE_EXPORT; ?>',
		FILE : '<?php echo _MI_TEMPLATE_FILE; ?>',
		FOR_ALL_USERS : '<?php echo _MI_TEMPLATE_FOR_ALL_USERS; ?>',
		FOR_THE_CURRENT_USER_ONLY : '<?php echo _MI_TEMPLATE_FOR_THE_CURRENT_USER_ONLY; ?>',
		IMPORT_LANGUAGE_RESOURCE : '<?php echo _MI_TEMPLATE_IMPORT_LANGUAGE_RESOURCE; ?>',
		INDEX : '<?php echo _MI_TEMPLATE_INDEX; ?>',
		INSERT : '<?php echo _MI_TEMPLATE_INSERT; ?>',
		INSERT_A_NEW_PARAMETER : '<?php echo _MI_TEMPLATE_INSERT_A_NEW_PARAMETER; ?>',
		INSERT_A_PARAMETER : '<?php echo _MI_TEMPLATE_INSERT_A_PARAMETER; ?>',
		INVALID_RESOURCE_NAME : '<?php echo _MI_TEMPLATE_INVALID_RESOURCE_NAME; ?>',
		ITEMS : '<?php echo _MI_TEMPLATE_ITEMS; ?>',
		KEYWORD : '<?php echo _MI_TEMPLATE_KEYWORD; ?>',
		LANGUAGE : '<?php echo _MI_TEMPLATE_LANGUAGE; ?>',
		LANGUAGES : '<?php echo _MI_TEMPLATE_LANGUAGES; ?>',
		LAST_UPDATE : '<?php echo _MI_TEMPLATE_LAST_UPDATE; ?>',
		MATCHING_METHOD : '<?php echo _MI_TEMPLATE_MATCHING_METHOD; ?>',
		NAME : '<?php echo _MI_TEMPLATE_NAME; ?>',
		NEXT : '<?php echo _MI_TEMPLATE_NEXT; ?>',
		NO_CATEGORY_DEFINED : '<?php echo _MI_TEMPLATE_NO_CATEGORY_DEFINED; ?>',
		NOT_SUPPORTED_LANGUAGE_EXPRESSION : '<?php echo _MI_TEMPLATE_NOT_SUPPORTED_LANGUAGE_EXPRESSION; ?>',
		NOW_CREATING : '<?php echo _MI_TEMPLATE_NOW_CREATING; ?>',
		NOW_DELETING : '<?php echo _MI_TEMPLATE_NOW_DELETING; ?>',
		NOW_IMPORTING : '<?php echo _MI_TEMPLATE_NOW_IMPORTING; ?>',
		NOW_LOADING : '<?php echo _MI_TEMPLATE_NOW_LOADING; ?>',
		NOW_SAVING : '<?php echo _MI_TEMPLATE_NOW_SAVING; ?>',
		NOW_SEARCHING : '<?php echo _MI_TEMPLATE_NOW_SEARCHING; ?>',
		OK : '<?php echo _MI_TEMPLATE_OK; ?>',
		OPEN : '<?php echo _MI_TEMPLATE_OPEN; ?>',
		OTHER : '<?php echo _MI_TEMPLATE_OTHER; ?>',
		Q : '<?php echo _MI_TEMPLATE_Q; ?>',
		QA : '<?php echo _MI_TEMPLATE_QA; ?>',
		QA_LIST : '<?php echo _MI_TEMPLATE_QA_LIST; ?>',
		PARAMETER : '<?php echo _MI_TEMPLATE_PARAMETER; ?>',
		PARTIAL : '<?php echo _MI_TEMPLATE_PARTIAL; ?>',
		PREFIX : '<?php echo _MI_TEMPLATE_PREFIX; ?>',
		PREVIEW : '<?php echo _MI_TEMPLATE_PREVIEW; ?>',
		READ_PERMISSION : '<?php echo _MI_TEMPLATE_READ_PERMISSION; ?>',
		READ_PERMISSION_SHORT : '<?php echo _MI_TEMPLATE_READ_PERMISSION_SHORT; ?>',
		REMOVE_PARAMETER : '<?php echo _MI_TEMPLATE_REMOVE_PARAMETER; ?>',
		RESOURCE_NAME : '<?php echo _MI_TEMPLATE_RESOURCE_NAME; ?>',
		RESOURCE_NAME_PATTERN : '<?php echo _MI_TEMPLATE_RESOURCE_NAME_PATTERN; ?>',
		RESOURCE_NAME_WITH_RESULTS : '<?php echo _MI_TEMPLATE_RESOURCE_NAME_WIDTH_RESULTS; ?>',
		RETURN_TO_TOP : '<?php echo _MI_TEMPLATE_RETURN_TO_TOP; ?>',
		PAGE_RESULTS : '<?php echo _MI_TEMPLATE_PAGE_RESULTS; ?>',
		PREV : '<?php echo _MI_TEMPLATE_PREVIEW; ?>',
		SAVE : '<?php echo _MI_TEMPLATE_SAVE; ?>',
		SELECT_CATEGORY : '<?php echo _MI_TEMPLATE_SELECT_CATEGORY; ?>',
		SERVICE : '<?php echo _MI_TEMPLATE_SERVICE; ?>',
		SEARCH : '<?php echo _MI_TEMPLATE_SEARCH; ?>',
		SEARCH_ORDER_UPDATE_DATE : '<?php echo _MI_TEMPLATE_SEARCH_ORDER_UPDATE_DATE; ?>',
		SEARCH_ORDER_ALPHABET : '<?php echo _MI_TEMPLATE_SEARCH_ORDER_ALPHABET; ?>',
		SEARCH_SCOPE : '<?php echo _MI_TEMPLATE_SEARCH_SCOPE; ?>',
		SORT : '<?php echo _MI_TEMPLATE_SORT; ?>',
		SUFFIX : '<?php echo _MI_TEMPLATE_SUFFIX; ?>',
		SURE_DELETE : '<?php echo _MI_TEMPLATE_SURE_DELETE; ?>',
		S_FOR_RESULTS_FOUND : '<?php echo _MI_TEMPLATE_S_FOR_RESULTS_FOUND; ?>',
		THERE_ARE_NO_RESOURCES : '<?php echo _MI_TEMPLATE_THERE_ARE_NO_RESOURCES; ?>',
		TYPE : '<?php echo _MI_TEMPLATE_TYPE; ?>',
		TYPE_OF_VALUE : '<?php echo _MI_TEMPLATE_TYPE_OF_VALUE; ?>',
		UNDEPLOY : '<?php echo _MI_TEMPLATE_UNDEPLOY; ?>',
		UNSAVED_PARAMETERS : '<?php echo _MI_TEMPLATE_UNSAVED_PARAMETERS; ?>',
		VIEW_QUESTIONS : '<?php echo _MI_TEMPLATE_VIEW_QUESTIONS; ?>',
		WARNING_NO_CATEGORIES_YOU_CAN_SELECT : '<?php echo _MI_TEMPLATE_WARNING_NO_CATEGORIES_YOU_CAN_SELECT; ?>',
		WARNING_NO_LANGUAGES_YOU_CAN_SELECT : '<?php echo _MI_TEMPLATE_WARNING_NO_LANGUAGES_YOU_CAN_SELECT; ?>',
		WARNING_NO_RESOURCES_YOU_CAN_SEARCH : '<?php echo _MI_TEMPLATE_WARNING_NO_RESOURCES_YOU_CAN_SEARCH; ?>'
	},
	Image : {
		BLANK : '-',
		CHECK : '<img src="./image/icon/icon_check.png" />',
		LOADING : '<img style="vertical-align: middle;" src="./image/etc/loading.gif" />'
	},
	Url : {
		CREATE_RESOURCE : './?page=create-resource',
		EDIT_RESOURCE : './?page=edit-resource',
		DELETE_RESOURCE : './?page=delete-resource',
		EXPORT_RESOURCE : './?page=export-resource',
		IMPORT_RESOURCE : './?page=import-resource',
		LOAD_WORDS : './?page=load-bound-words',
		LOAD_CATEGORIES : './?page=load-categories',
		LOAD_RESOURCES : './?page=load-resources',
		LOAD_SETS : './?page=load-bound-word-sets',
		READ_RESOURCE : './?page=read-resource',
		SAVE_MASTER_CATEGORY : './?page=save-master-category',
		SAVE_SET : './?page=save-master-sets',
		SAVE_WORD : './?page=save-master-words',
		DELETE_MASTER_CATEGORY : './?page=delete-master-category',
		DELETE_MASTER_SET : './?page=delete-master-set',
		DELETE_MASTER_WORD : './?page=delete-master-word',
		SAVE_RECORD : './?page=save-record',
		DELETE_RECORD : './?page=delete-record',
		SEARCH : './?page=search'
	},
	Language : {
		<?php 
		require XOOPS_ROOT_PATH.'/modules/langrid/include/Languages.php';
		$language = '';
		foreach ($LANGRID_LANGUAGE_ARRAY as $key => $value) {
			$language .= '\''.$key.'\' : \''.$value.'\',';
		}
		echo substr($language, 0, -1);
		?>
	},
	WideLanguages : ['nb', 'be', 'zh-CN', 'zh-TW', 'en-GB', 'en-US', 'ga', 'nn', 'pt-BR', 'pt-PT', 'rm', 'gd'],
	ClassName : {
		CLICKABLE_TEXT : 'qa-common-clickable',
		DISABLE_TEXT : 'qa-common-disable',
		OPENABLE : 'qa-common-openable',
		CLOSABLE : 'qa-common-closable'
	},
	Templates : {
		DIV : '<div id="#{id}" class="#{className}">#{contents}</div>',
		SPAN : '<span id="#{id}" class="#{className}">#{contents}</span>',
		INPUT : '<label><input id="#{id}" type="#{type}" class="#{className}"'
			+ ' value="#{value}" name="#{name}" #{attribute} /> #{contents}</label>',
		BUTTON : '<button id="#{id}" class="#{className}">#{name}</button>',
		LIST_BOX : {
			HEADER : '<select id="#{id}" class="#{className}">',
			BODY : '<option value="#{value}" #{attribute}>#{name}</option>',
			FOOTER : '</select>'
		}
	},
	location : null,
	displayLanguage : '<?php echo preg_replace('/[^a-zA-Z-]+/u', '', (isset($_COOKIE['ml_lang']) ? $_COOKIE['ml_lang'] : 'en')); ?>',
	sourceLanguage : null,
	targetLanguage : null,
	recordPanel : null,
	Permission : {
		NO : '0',
		READ : '1',
		EDIT : '2',
		SU : '3'
	},
	Categories : new CategoriesHash({
		0 : {
			
		}
	}),
	WordSets : new WordSetsHash({
		0 : {
			
		}
	}),
	Words : new CategoriesHash({
		0 : {
			
		}
	})
};