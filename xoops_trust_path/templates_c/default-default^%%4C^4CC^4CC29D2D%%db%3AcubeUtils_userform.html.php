<?php /* Smarty version 2.6.26, created on 2013-03-05 03:38:28
         compiled from db:cubeUtils_userform.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_input', 'db:cubeUtils_userform.html', 13, false),)), $this); ?>
<script>
	location.href="<?php echo @XOOPS_URL; ?>
";
</script>
<div id="contents_body">
	<div id='contents_user_login'>
		<h2><?php echo @_LOGIN; ?>
</h2>
		<div id="top_loginbox">
			<form action="<?php echo @XOOPS_URL; ?>
/user.php" method="post" name="login_form">
				<?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'op','value' => 'login'), $this);?>

				<?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'xoops_redirect','value' => $this->_tpl_vars['redirect_page']), $this);?>


				<table width="210" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="60"><label for="legacy_xoopsform_uname"><?php echo @_USERNAME; ?>
</label></td>
						<td><?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','class' => 'login_text'), $this);?>
</td>
					</tr>
					<tr>
						<td><label for="legacy_xoopsform_pass"><?php echo @_PASSWORD; ?>
</label></td>
						<td><?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','class' => 'login_text'), $this);?>
</td>
					</tr>
				</table>
				<table width="210" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="210" class="login_text02">
											&nbsp;</td>
					</tr>
					<tr>
						<td width="210" >
							<div class="btn_gy01">
								<a href="#" onclick="document.login_form.submit(); return false;"><?php echo @_LOGIN; ?>
</a>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div id="lost_pass_box">
			<div class="btn_gy01">
				<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/lostpass.php"><?php echo @_MD_USER_LANG_LOSTPASS; ?>
</a>
			</div>
		</div>
		<?php if ($this->_tpl_vars['allowRegister']): ?>
		<div id="new_user">
			<span>
				<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @_THEME_TOP_NEW_USER_LB; ?>
</a>
			</span>
		</div>
		<?php endif; ?>
	</div>
</div>