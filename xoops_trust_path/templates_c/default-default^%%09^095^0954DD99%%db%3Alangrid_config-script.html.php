<?php /* Smarty version 2.6.26, created on 2013-02-16 07:24:58
         compiled from db:langrid_config-script.html */ ?>
<!-- This line after by template/langrid_config-script.html -->
<script><!--
jQuery.noConflict();
//--></script>
<script charset="utf-8" type="text/javascript">
<!--

var Resource = <?php echo $this->_tpl_vars['resource']; ?>
;

var Const = {
	Label: {
		CombinationCheckBox: '<?php echo @_MD_LANGRID_BBS_STG_CONBINATION_BTN; ?>
',
		DeleteButton: '<?php echo @_MD_LANGRID_BBS_STG_DELETE_BTN; ?>
',
		DictionaryButton: '<?php echo @_MD_LANGRID_BBS_STG_DICTIONARY_BTN; ?>
',
		Save: '<?php echo @_MD_LANGRID_BBS_STG_SUBMIT_BTN; ?>
',
		AddPath: '<?php echo @_MD_LANGRID_BBS_STG_ADD_PATH_BTN; ?>
',
		Default: '<?php echo @_MD_LANGRID_SETTING_DEFAULT_DICTIONARY; ?>
',
		Custom: '<?php echo @_MD_LANGRID_SETTING_CUSTOM_DICTIONARY; ?>
',
		Advanced: '<?php echo @_MD_LANGRID_SETTING_ADVANCED; ?>
',
		ViewDefaultDict: '<?php echo @_MD_LANGRID_SETTING_VIEW_DEFAULT_DICT; ?>
',
		CloseBtn: '<?php echo @_MD_LANGRID_SETTING_CLOSE_BUTTON; ?>
',
		FilterFrom: '<?php echo @_MD_LANGRID_SETTING_FILTER_FROM; ?>
',
		FilterTo: '<?php echo @_MD_LANGRID_SETTING_FILTER_TO; ?>
',
		Matches: '<?php echo @_MD_LANGRID_SETTING_MATCHES; ?>
',
		EditDefaultDict: '<?php echo @_MD_LANGRID_SETTING_EDIT_DEFAULT_DICT; ?>
',
		ReturnTop: '<?php echo @_MD_LANGRID_SETTING_RETURN_TOP; ?>
',
		DictSelect: '<?php echo @_MD_LANGRID_SETTING_DICT_SELECT; ?>
',
		DictNoSelect: '<?php echo @_MD_LANGRID_SETTING_DICT_NO_SELECT; ?>
',
		FlterButton: '<?php echo @_MD_LANGRID_SETTING_FILTER_BTN; ?>
',
		DispAllPath: '<?php echo @_MD_LANGRID_SETTING_DISPLAY_ALL_PATH; ?>
',
		AddButton: '<?php echo @_MD_LANGRID_SETTING_ADD_BUTTON; ?>
'
	},
	Message: {
		SaveOk:'<?php echo @_MD_LANGRID_STG_MSG1; ?>
',
		SaveBBSOk:'<?php echo @_MD_LANGRID_STG_MSG2; ?>
',
		ConfirmDeleteBBS: '<?php echo @_MD_LANGRID_STG_MSG3; ?>
',
		NoSelectedTranslator: '<?php echo @_MD_LANGRID_STG_ERR_MSG1; ?>
',
		NoSelectedLanguages: '<?php echo @_MD_LANGRID_STG_ERR_MSG2; ?>
',
		SaveOnError1: '<?php echo @_MD_LANGRID_STG_ERR_MSG3; ?>
',
		SaveOnError2: '<?php echo @_MD_LANGRID_STG_ERR_MSG4; ?>
',
		AddedMessage: '<?php echo @_MD_LANGRID_STG_ADDED_MESSAGE; ?>
',
		SavedMessage: '<?php echo @_MD_LANGRID_STG_SAVED_MESSAGE; ?>
',
		CancelConfirm: '<?php echo @_MD_LANGRID_CONFIRM_CANCEL; ?>
',
		NoSelectedDict: '<?php echo @_MD_LANGRID_DICT_POP_MSG_NO_DICT; ?>
',
		NoSelectedLocalDict: '<?php echo @_MD_LANGRID_DICT_POP_MSG_NO_IMP_DICT; ?>
',
		NoSelectedUserDict: '<?php echo @_MD_LANGRID_DICT_POP_MSG_NO_COM_DICT; ?>
',
		NoDictionaryLocal: '<?php echo @_MD_LANGRID_DICT_MSG_NO_DICTIONARY_LOCAL; ?>
',
		NoDictionaryTemporal: '<?php echo @_MD_LANGRID_DICT_MSG_NO_DICTIONARY_TEMPORAL; ?>
',
		OverMaxDictCount: "<?php echo @_MD_LANGRID_DICT_MSG_OVER_SELECT_DICTIONARY; ?>
",
		ParallelEBMTError: "<?php echo @_MI_LANGRID_CONFIG_EBMT_PARALLEL_TEXT_ERROR; ?>
"
	},
	Popup: {
		Title: '<?php echo @_MD_LANGRID_DICT_POP_TITLE; ?>
',
		Label1: '<?php echo @_MD_LANGRID_DICT_POP_T1; ?>
',
		Label2: '<?php echo @_MD_LANGRID_DICT_POP_T2; ?>
',
		Label3: '<?php echo @_MD_LANGRID_DICT_POP_T3; ?>
',
		BTN_OK: '<?php echo @_MD_LANGRID_DICT_POP_OK; ?>
',
		BTN_CANCEL: '<?php echo @_MD_LANGRID_DICT_POP_CANCEL; ?>
',
		MA_Title: '<?php echo @_MD_LANGRID_DICT_POP_MORPHOLOGICAL_ANALYZER; ?>
',
		LoadDefault: '<?php echo @_MD_LANGRID_DICT_POP_LOAD_DEFAULT; ?>
'
	},
	Images: {
		DefaultDict: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_default_dictionary.gif',
		CustomDict: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_custom_dicttionary.gif',
		AddPath: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_add.gif',
		SaveOn: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_save.gif',
		SaveOff: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_save_disable.gif',
		Cancel: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_cancel.gif',
		Close: '<?php echo $this->_tpl_vars['module_img_url']; ?>
/icon/icn_close.gif'
	},
	URL: {
		TopPage: '<?php echo $this->_tpl_vars['xoops_url']; ?>
'
	},
	DEFINE:{
		MaxDicts: '<?php echo $this->_tpl_vars['max_dict_count']; ?>
'
	}
};
var NowTab = '<?php echo $this->_tpl_vars['tab_page']; ?>
';
<?php if (isset ( $this->_tpl_vars['INIT_DATA'] )): ?>
	var INIT_DATA = <?php echo $this->_tpl_vars['INIT_DATA']; ?>
;
<?php endif; ?>
-->
</script>
<!-- This line upper by template/langrid_config-script.html -->