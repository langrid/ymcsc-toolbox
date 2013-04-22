<?php /* Smarty version 2.6.26, created on 2013-02-16 06:55:47
         compiled from C:/xampp/htdocs/toolbox-dev/html/themes/default/top.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_input', 'C:/xampp/htdocs/toolbox-dev/html/themes/default/top.html', 76, false),)), $this); ?>
<div id="contents_body">
	<div id="top_contents">
		<div id="contents_left_box_top">
			<div id="top_main_img">
				<?php echo @_THEME_TOP_MESSAGE_HTML; ?>

							</div>
			<div style="text-align:left; font-weight:bold;"><?php echo @_THEME_TOP_SUPPORT_SITE; ?>
</div>
			<div style="text-align:left; font-size:10px; color:#007EC4;"><?php echo @_THEME_TOP_BROWSER_INFO_LB; ?>
</div>
			<div class="top_info"><?php echo @_THEME_TOP_INFOMATION_LB; ?>
</div>
			<?php echo @_THEME_INFORMATION_HTML; ?>

					</div>
		<div id="contents_right_box_top">
				<?php if ($this->_tpl_vars['uname'] == ''): ?>
			<?php if ($this->_tpl_vars['redirect_message'] != ''): ?>
				<div id="login_message" style="color: #f00;"><?php echo $this->_tpl_vars['redirect_message']; ?>
</div>
			<?php endif; ?>
			<div id="top_loginbox">
				<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post" name='login_form'>
					<input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
					<input name="op" id="legacy_xoopsform_block_op" type="hidden" value="login" />
					<table width="210" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="60"><label for="legacy_xoopsform_uname"><?php echo @_THEME_TOP_UNAME_LB; ?>
</label></td>
							<td><?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','class' => 'login_text','id' => 'legacy_xoopsform_uname'), $this);?>
</td>
						</tr>
						<tr>
							<td><label for="legacy_xoopsform_pass"><?php echo @_THEME_TOP_PASSWD_LB; ?>
</label></td>
							<td><?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','class' => 'login_text','id' => 'legacy_xoopsform_pass'), $this);?>
</td>
						</tr>
					</table>
					<table width="210" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="210" class="login_text02">
								<input name="rememberme" id="rememberme_check" type="checkbox" value="On" />
								<label for="rememberme_check"><?php echo @_THEME_TOP_AUTOLOGIN_LB; ?>
</label>
							</td>
						</tr>
						<tr>
							<td width="210">
								<div class="btn_login">
									<button onclick="document.login_form.submit(); return false;"><?php echo @_THEME_TOP_LOGIN_LB; ?>
</button>
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
			<div id="new_user">
				<div class="signin_message">
					<?php echo @_THEME_SIGNIN_MESSAGE; ?>

				</div>
				<span>
					<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @_THEME_TOP_NEW_USER_LB; ?>
</a>
				</span>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
<script language="JavaScript" type="text/javascript">
<!--
jQuery.noConflict();
window.onload = function() {
	Event.observe(window.document, 'keypress',
		function login_form_keypress(e){
			if(e.keyCode == Event.KEY_RETURN ){
				if(Field.present('legacy_xoopsform_uname') && Field.present('legacy_xoopsform_pass')){
					document.login_form.submit();
				}else if(Field.present('legacy_xoopsform_uname')){
					Field.focus('legacy_xoopsform_pass');
				}else if(Field.present('legacy_xoopsform_pass')){
					Field.focus('legacy_xoopsform_uname');
				}else{
					Field.focus('legacy_xoopsform_uname');
				}

			}
		}
	);
}

-->
</script>