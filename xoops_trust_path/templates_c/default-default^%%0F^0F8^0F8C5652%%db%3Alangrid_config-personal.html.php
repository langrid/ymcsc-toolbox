<?php /* Smarty version 2.6.26, created on 2013-02-16 07:24:58
         compiled from db:langrid_config-personal.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:langrid_config-script.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<h2 style="text-align:left; padding: 10px 0 10px 40px; font-size: 18px;"><?php echo $this->_tpl_vars['tabTitle']; ?>
</h2>
<div id="tab_set">
	<div id="tab_box">
		<a href="#">
			<ul class="tab_on">
				<li class="tab_l"></li>
				<li class="tab_m">
					<span><?php echo @_MI_LANGRID_CONFIG_TAB_NAME_TRANSLATION; ?>
</span>
				</li>
				<li class="tab_r"></li>
			</ul>
		</a>
		<a href="./?action=voiceSetting&set=<?php echo $this->_tpl_vars['set']; ?>
">
			<ul class="tab_off">
				<li class="tab_l"></li>
				<li class="tab_m">
					<span><?php echo @_MI_LANGRID_CONFIG_TAB_NAME_VOICE; ?>
</span>
				</li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>
<div id="contents_body">
	<span id="ruler" style="visibility:hidden;position:absolute;" class="setting_btn_off"></span>
	<div>
		<div class="contents-header-block clearfix">
			<span id="setting_nowload"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/ajax.gif" border="0" alt="nowloading"/><?php echo @_MD_LANGRID_NOWLOADING; ?>
</span>
			<span id="setting_error_message"></span>
			<?php if ($this->_tpl_vars['xoopsUserIsAdmin'] != true && ( $this->_tpl_vars['tab_page'] == 'bbs' || $this->_tpl_vars['tab_page'] == 'bbs_view' )): ?>
				<div id="div-page-message" style="display:none;"><img src="./images/icon/icn_lock.gif" /><?php echo @_MD_LANGRID_STG_MSG4; ?>
</div>
			<?php endif; ?>
		</div>
		<div id="translation-path-root-panel"></div>
	</div>
</div>