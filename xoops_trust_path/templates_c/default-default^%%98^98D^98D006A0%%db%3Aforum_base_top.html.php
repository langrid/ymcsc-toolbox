<?php /* Smarty version 2.6.26, created on 2013-03-06 06:05:16
         compiled from db:forum_base_top.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_component_tab_navigation.html", 'smarty_include_vars' => array('topicId' => $this->_tpl_vars['topicId'],'forumId' => $this->_tpl_vars['forumId'],'categoryId' => $this->_tpl_vars['categoryId'],'activeTab' => $this->_tpl_vars['activeTab'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<style type="text/css">
.list_line03 {
	width: 200px;
}
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_forum_style.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</style>
<script type="text/javascript">
var Const = {
	Images : {
		loading : '<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/common/img/loading.gif" width="25" height"25" alt="" />'
	},
	Label : {
		postedOn : '<?php echo @_MD_D3FORUM_ON; ?>
',
		remove : '<?php echo @_MD_D3FORUM_COMMON_DELETE; ?>
',
		edit : '<?php echo @_MD_D3FORUM_COMMON_EDIT; ?>
',
		modify : '<?php echo @_MD_D3FORUM_COMMON_MODIFY; ?>
',
		reply : '<?php echo @_MD_D3FORUM_COMMON_REPLY; ?>
',
		translationResult : '<?php echo @_MD_D3FORUM_TRANSLATION_RESULT; ?>
',
		backTranslationResult : '<?php echo @_MD_D3FORUM_BACK_TRANSLATION_RESULT; ?>
',
		serviceName : '<?php echo @_MD_D3FORUM_COMMON_SERVICE_NAME; ?>
',
		copyright : '<?php echo @_MD_D3FORUM_COMMON_COPYRIGHT; ?>
',
		licenseInformation : '<?php echo @_MD_D3FORUM_COMMON_LICENSE_INFORMATION; ?>
',
		captionUpload:'<?php echo @_MD_D3FORUM_CAPTION_UPLOAD; ?>
',
		captionFileList:'<?php echo @_MD_D3FORUM_ATACCHED_FILELIST; ?>
',
		captionFileSize:'<?php echo @_MD_D3FORUM_CAPTION_FILESIZE; ?>
',
		captionFileName:'<?php echo @_MD_D3FORUM_CAPTION_FILENAME; ?>
',
		deleteFile:'<?php echo @_MD_D3FORUM_DELETE_FILE; ?>
',
		captionClose:'<?php echo @_MD_D3FORUM_CAPTION_CLOSE; ?>
',
		translate: '<?php echo @_MD_D3FORUM_COMMON_TRANSLATE; ?>
',
		ok: '<?php echo @_MD_D3FORUM_COMMON_OK; ?>
',
		cancel: '<?php echo @_MD_D3FORUM_COMMON_CANCEL; ?>
'
	},
	Message : {
		confirmDelete : '<?php echo @_MD_D3FORUM_CONFIRM_DELETE; ?>
',
		errorMessageRequired : '<?php echo @_MD_D3FORUM_MODIFY_ERROR_MESSAGE_IS_EMPTY; ?>
',
		langridError : '<?php echo @_MD_D3FORUM_TRANSLATION_LANGRID_ERROR; ?>
',
		translationUnavailable : '<?php echo @_MD_D3FORUM_NO_TRANSLATION; ?>
',
		nowTranslating : '<?php echo @_MD_D3FORUM_COMMON_NOW_TRANSLATING; ?>
',
		previewSourceError : '<?php echo @_MD_D3FORUM_PREVIEW_NO_SOURCE; ?>
',
		previewTargetError : '<?php echo @_MD_D3FORUM_PREVIEW_NO_TRANSLATOIN_RESULT; ?>
',
		errorFileNotExist:'<?php echo @_MD_D3FORUM_FILE_NOT_EXIST; ?>
',
		errorFileOverLimit:'<?php echo @_MD_D3FORUM_FILE_OVER_LIMIT; ?>
',
 		OverLimitCount:'<?php echo @_MD_D3FORUM_FILE_OVER_LIMIT_COUNT; ?>
'

	},
	Pull : {
		autoUpdateIntervalTime : <?php echo $this->_tpl_vars['autoUpdateIntevalTime']; ?>
,
		manualUpdateIntevalTime : <?php echo $this->_tpl_vars['manualUpdateIntevalTime']; ?>

	}
};
</script>
<div id="contents_body">
		

			<select style="<?php if ($this->_tpl_vars['changeLanguageDisabled']): ?>display:none;<?php endif; ?>float:right;" name="lang" id="displaylanguage" onchange="lanChange(this.value);">
			<?php $_from = $this->_tpl_vars['allLanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['selectedLanguageTag']): ?>
					<?php $this->assign('selected', " selected='selected'"); ?>
				<?php else: ?>
					<?php $this->assign('selected', ""); ?>
				<?php endif; ?>
				<option<?php echo $this->_tpl_vars['selected']; ?>
 value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select>
			<script>
			function lanChange(value) {
				location.href = '<?php echo $this->_tpl_vars['pagenquery']; ?>
' + value;
			}
			</script>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_add_dictoionary_panel.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<table style="clear:both;" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td valign="top" width="200" id="contents_left_box">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_user_access.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_component_menu.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</td>
			<td width="16" class="contents_m">&nbsp;</td>
			<td width="100%" valign="top" bordercolor="0">
				<div id="contents_right_box">