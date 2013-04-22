<?php /* Smarty version 2.6.26, created on 2013-02-16 07:37:39
         compiled from db:user_userinfo.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_formattimestamp', 'db:user_userinfo.html', 33, false),array('modifier', 'escape', 'db:user_userinfo.html', 73, false),array('function', 'mailto', 'db:user_userinfo.html', 61, false),)), $this); ?>
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
						<div id="profile_inner">
			<div id="all_about_user">
				<h2 style="float:left;"><?php echo $this->_tpl_vars['thisUser']->getShow('uname'); ?>
</h2>
				<span style="font-weight:bold;font-size:110%;margin-left:40px;">
					(<?php echo @_MD_USER_LANG_LAST_LOGIN; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['thisUser']->get('last_login'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
)
				</span>
				<div class="list_table02">
					<table style="width: 440px !important;" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="list_line03"><?php echo @_MD_USER_LANG_AVATAR; ?>
</td>
							<td align="center">
								<?php if ($this->_tpl_vars['thisUser']->get('user_avatar') != "blank.gif"): ?>
									<img src="<?php echo @XOOPS_UPLOAD_URL; ?>
/<?php echo $this->_tpl_vars['thisUser']->getShow('user_avatar'); ?>
" alt="Avatar" title="Avatar" />
								<?php else: ?>
									<img src="<?php echo @XOOPS_URL; ?>
/modules/user/images/no-image.jpg" width="80" height="80" alt="No Avatar" title="No Avatar" />
								<?php endif; ?>
								<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
									<a style="display: block; width: 100px;" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?op=avatarform&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
">
										<div class="btn_blue01">
											<span><?php echo @_MD_USER_LANG_AVATAR_CHANGE; ?>
</span>
										</div>
									</a>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td class="list_line03" width="55" ><?php echo @_MD_USER_LANG_USER_NAME; ?>
</td>
							<td><?php echo $this->_tpl_vars['thisUser']->getShow('name'); ?>
</td>
						</tr>
						<?php if ($this->_tpl_vars['thisUser']->get('user_viewemail') == 1 || $this->_tpl_vars['user_ownpage'] == true || $this->_tpl_vars['xoops_isadmin'] == true): ?>
							<tr>
								<td class="list_line03"><?php echo @_MD_USER_LANG_EMAIL; ?>
</td>
								<td><?php echo smarty_function_mailto(array('address' => $this->_tpl_vars['thisUser']->get('email'),'encode' => 'javascript'), $this);?>
</td>
							</tr>
						<?php endif; ?>
						
		<?php unset($this->_sections['tc']);
$this->_sections['tc']['name'] = 'tc';
$this->_sections['tc']['loop'] = is_array($_loop=$this->_tpl_vars['title']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tc']['show'] = true;
$this->_sections['tc']['max'] = $this->_sections['tc']['loop'];
$this->_sections['tc']['step'] = 1;
$this->_sections['tc']['start'] = $this->_sections['tc']['step'] > 0 ? 0 : $this->_sections['tc']['loop']-1;
if ($this->_sections['tc']['show']) {
    $this->_sections['tc']['total'] = $this->_sections['tc']['loop'];
    if ($this->_sections['tc']['total'] == 0)
        $this->_sections['tc']['show'] = false;
} else
    $this->_sections['tc']['total'] = 0;
if ($this->_sections['tc']['show']):

            for ($this->_sections['tc']['index'] = $this->_sections['tc']['start'], $this->_sections['tc']['iteration'] = 1;
                 $this->_sections['tc']['iteration'] <= $this->_sections['tc']['total'];
                 $this->_sections['tc']['index'] += $this->_sections['tc']['step'], $this->_sections['tc']['iteration']++):
$this->_sections['tc']['rownum'] = $this->_sections['tc']['iteration'];
$this->_sections['tc']['index_prev'] = $this->_sections['tc']['index'] - $this->_sections['tc']['step'];
$this->_sections['tc']['index_next'] = $this->_sections['tc']['index'] + $this->_sections['tc']['step'];
$this->_sections['tc']['first']      = ($this->_sections['tc']['iteration'] == 1);
$this->_sections['tc']['last']       = ($this->_sections['tc']['iteration'] == $this->_sections['tc']['total']);
?>
						<tr>
							<td class="list_line03"><?php echo ((is_array($_tmp=$this->_tpl_vars['title'][$this->_sections['tc']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][$this->_sections['tc']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
						</tr>
		<?php endfor; endif; ?>

			<?php $_from = $this->_tpl_vars['defArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['def']):
?>
			<tr>
			  <td class="list_line03"><?php echo $this->_tpl_vars['def']->getShow('label'); ?>
</td>
			  <td>
			  	<?php $this->assign('defkey', $this->_tpl_vars['def']->getShow('field_name')); ?>
			    <?php echo $this->_tpl_vars['profile']->showField($this->_tpl_vars['defkey']); ?>

			  </td>
			</tr>
			<?php endforeach; endif; unset($_from); ?>


					</table>

					<?php if ($this->_tpl_vars['user_ownpage'] == true): ?>
						<div class="btnset_profile">
							<div class="profile_btn">
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
">
									<span><?php echo @_MD_USER_LANG_EDITPROFILE; ?>
</span>
								</a>
							</div>
							<div class="profile_btn">
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php?op=changepass&amp;uid=<?php echo $this->_tpl_vars['thisUser']->getShow('uid'); ?>
">
									<span><?php echo @_MD_USER_LANG_CHANGE_PASS; ?>
</span>
								</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
					</div>
</div>