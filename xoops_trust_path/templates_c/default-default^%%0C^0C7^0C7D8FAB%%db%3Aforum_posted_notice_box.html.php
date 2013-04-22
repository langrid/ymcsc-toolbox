<?php /* Smarty version 2.6.26, created on 2013-03-06 06:50:35
         compiled from db:forum_posted_notice_box.html */ ?>
<div id="posted_notice_box">
<script type="text/javascript">
var PostedNoticeConst = {
	Label : {
		popTitle : '<?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_TITE; ?>
',
		interval : '<?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_LB_INTERVAL; ?>
',
		language : '<?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_LB_LANGUAGE; ?>
'
	},
	Message : {
	},
	Templates : {
		languageSelector : '<select id="#{ID}"><?php $_from = $this->_tpl_vars['allLanguages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?><option value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</option><?php endforeach; endif; unset($_from); ?></select>',
		intervalSelector : '<select id="#{ID}">'
			+'<option value="0"><?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_INTERVAL_OP_0; ?>
</option>'
			+'<option value="1"><?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_INTERVAL_OP_1; ?>
</option>'
			+'<option value="2"><?php echo @_MD_D3FORUM_POSTED_NOTICE_POP_INTERVAL_OP_2; ?>
</option>'
		+'</select>'
	},
	Config : <?php echo $this->_tpl_vars['postedNoticeConfig']; ?>

};
var TagConfigConst = {
	IsShow : '<?php if ($this->_tpl_vars['permission']->isAdmin()): ?>yes<?php else: ?>0<?php endif; ?>',
	Resource : <?php echo $this->_tpl_vars['tagConfigResource']; ?>
,
	Languages : <?php echo $this->_tpl_vars['allLanguageJson']; ?>
,
	Text : {
		TITLE : '<?php echo @_MD_D3FORUM_TAG_MANAGE_TITLE; ?>
',
		ADD_TAG_SET : '<?php echo @_MD_D3FORUM_ADD_TAG_SET; ?>
',
		BLANK : '<?php echo @_MD_D3FORUM_BLANK; ?>
',
		CONFIRM_DISCARD_CHANGES : '<?php echo @_MD_D3FORUM_CONFIRM_DISCARD_CHANGES; ?>
',
		CONFIRM_DELETE : '<?php echo @_MD_D3FORUM_CONFIRM_DELETE; ?>
',
		CONFIRM_DELETE_BOUND_WORD_SET : '<?php echo @_MD_D3FORUM_CONFIRM_DELETE_BOUND_WORD_SET; ?>
',
		ALL_EMPTY_NOT_REGISTER : '<?php echo @_MD_D3FORUM_ALL_EMPTY_NOT_REGISTER; ?>
',
		EDIT_TAGS : '<?php echo @_MD_D3FORUM_EDIT_TAGS; ?>
',
		ADD_TAG : '<?php echo @_MD_D3FORUM_ADD_TAG; ?>
',
		CLOSE : '<?php echo @_MD_D3FORUM_CLOSE; ?>
',
		SAVE : '<?php echo @_MD_D3FORUM_TAG_CONFIG_POP_SAVE; ?>
',
		EDIT : '<?php echo @_MD_D3FORUM_TAG_CONFIG_POP_EDIT; ?>
',
		DELETE : '<?php echo @_MD_D3FORUM_TAG_CONFIG_POP_DELETE; ?>
',
		CANCEL : '<?php echo @_MD_D3FORUM_TAG_CONFIG_POP_CANCEL; ?>
'
	}
};
</script>

	<form method="get" name="postedNoticeForm" action="" target="">
		<input type="button" id="posted-notice-config-button" name="posted-notice-config-button" value="<?php echo @_MD_D3FORUM_BTN_POSTED_NOTICE; ?>
" class="btn_blue01" />
	</form>
</div>