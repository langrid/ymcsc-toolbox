<?php /* Smarty version 2.6.26, created on 2013-02-16 07:38:37
         compiled from db:user_edituser.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'db:user_edituser.html', 24, false),array('function', 'xoops_token', 'db:user_edituser.html', 46, false),array('function', 'xoops_input', 'db:user_edituser.html', 47, false),array('function', 'cycle', 'db:user_edituser.html', 83, false),array('function', 'xoops_optionsArray', 'db:user_edituser.html', 85, false),array('function', 'xoops_textarea', 'db:user_edituser.html', 234, false),)), $this); ?>
<style type="text/css">
	.ok-cancel-layout {
		margin: 0 0 0 30px;
	}
	.ok-cancel-layout td {
		border: 0 !important;
	}
</style>
<div id="tab_set">
	<div id="tab_box">
		<a href="#">
			<ul class="tab_on" id="ue_tab_1">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MD_USER_LANG_PROFILE; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>
<div id="contents_body">
		<div id="topic_path">
			<ol>
				<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @_MD_USER_LANG_TOP; ?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('uid'))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
"><?php echo @_MD_USER_LANG_PROFILE; ?>
</a></li>
				<li><?php echo @_MD_USER_LANG_EDITPROFILE; ?>
</li>
			</ol>
		</div>
				<div id="profile_inner">
			<div id="all_about_user">
				<h2><?php echo @_MD_USER_LANG_EDITPROFILE; ?>
</h2>
				<div class="list_table02">
					<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
					<ul class="errorMsg">
					  <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
					    <li><?php echo $this->_tpl_vars['message']; ?>
</li>
					  <?php endforeach; endif; unset($_from); ?>
					</ul>
					<?php endif; ?>
					<form action="#" method="post" name="editForm">
						<?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

						<?php echo smarty_function_xoops_input(array('name' => 'uid','type' => 'hidden','value' => $this->_tpl_vars['actionForm']->get('uid')), $this);?>

						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td class="list_line03" width="110" ><?php echo @_MD_USER_LANG_USER_ID; ?>
</td>
								<td><?php echo $this->_tpl_vars['thisUser']->getShow('uname'); ?>
</td>
							</tr>
							<tr>
								<td class="list_line03"><label for="legacy_xoopsform_name"><?php echo @_MD_USER_LANG_USER_NAME; ?>
</label></td>
								<td>
									<?php echo smarty_function_xoops_input(array('name' => 'name','size' => 30,'maxlength' => 60,'value' => $this->_tpl_vars['actionForm']->get('name')), $this);?>

								</td>
							</tr>
							<tr>
								<td class="list_line03">
									<?php if ($this->_tpl_vars['allow_chgmail']): ?>
										<label for="legacy_xoopsform_email"><?php echo @_MD_USER_LANG_EMAIL; ?>
</label>
									<?php else: ?>
										<?php echo @_MD_USER_LANG_EMAIL; ?>

									<?php endif; ?>
								</td>
								<td>
									<?php if ($this->_tpl_vars['allow_chgmail']): ?>
										<?php echo smarty_function_xoops_input(array('name' => 'email','size' => 30,'maxlength' => 60,'value' => $this->_tpl_vars['actionForm']->get('email')), $this);?>
<br />
									<?php else: ?>
										<a href="#"><?php echo $this->_tpl_vars['thisUser']->getShow('email'); ?>
</a>
									<?php endif; ?>
									<span class="ui_label">
										<label>
											<?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'user_viewemail','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('user_viewemail')), $this);?>

											<?php echo @_MD_USER_LANG_USER_VIEWEMAIL; ?>

										</label>
									</span>
								</td>
							</tr>
							<tr>
								<td class="list_line03"><label for="legacy_xoopsform_timezone_offset"><?php echo @_MD_USER_LANG_TIMEZONE_OFFSET; ?>
</label></td>
								<td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
									<select name="timezone_offset" id="legacy_xoopsform_timezone_offset">
										<?php echo smarty_function_xoops_optionsArray(array('id' => 'timezone_offset','label' => 'zone_name','value' => 'offset','from' => $this->_tpl_vars['timezones'],'default' => $this->_tpl_vars['actionForm']->get('timezone_offset')), $this);?>

									</select>
								</td>
							</tr>
																																			
													
	<?php $_from = $this->_tpl_vars['defArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['def']):
?>
	<tr>
    <td class="list_line03"><?php echo $this->_tpl_vars['def']->get('label'); ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
    	<?php if ($this->_tpl_vars['def']->get('type') == 'string'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 40,'maxlength' => 255), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'int' || $this->_tpl_vars['def']->get('type') == 'float'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 15,'maxlength' => 11), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'text'): ?>
      <?php echo smarty_function_xoops_textarea(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name')),'editor' => 'none'), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'date'): ?>
      <?php echo smarty_function_xoops_input(array('class' => 'datepicker','type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 20,'maxlength' => 10), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'checkbox'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => 1,'default' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name'))), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'selectbox'): ?>
      <select name="<?php echo $this->_tpl_vars['def']->getShow('field_name'); ?>
" id="legacy_xoopsform_<?php echo $this->_tpl_vars['def']->getShow('field_name'); ?>
">
      <?php $_from = $this->_tpl_vars['def']->mFieldType->getOption($this->_tpl_vars['def']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
      	<option value="<?php echo $this->_tpl_vars['option']; ?>
"<?php if ($this->_tpl_vars['profile']->get($this->_tpl_vars['def']->getShow('field_name')) == $this->_tpl_vars['option']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['option']; ?>
</option>
	    <?php endforeach; endif; unset($_from); ?>
      </select>
      <?php elseif ($this->_tpl_vars['def']->get('type') == 'uri'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['actionForm']->get($this->_tpl_vars['def']->getShow('field_name'),1)), $this);?>

      <?php endif; ?>
    </td>
  </tr>
	<?php endforeach; endif; unset($_from); ?>

							<tr>
								<td colspan="2"  style="border-left:none;border-right:none;border-bottom:none;padding:0px;">
									<div class="btnset_profile" style="width:300px;margin-left:auto;margin-right:auto;">
										<div class="profile_btn" onclick="document.editForm.submit(); return false;">
											<a href="#"><span><?php echo @_MD_USER_LANG_SAVECHANGES; ?>
</span></a>
										</div>
										<div class="profile_btn">
											<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('uid'))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
"><span><?php echo @_MD_USER_REGCONFIRM_CANCEL; ?>
</span></a>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
</div>