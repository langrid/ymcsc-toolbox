<?php /* Smarty version 2.6.26, created on 2013-02-16 07:03:40
         compiled from db:user_block_login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_input', 'db:user_block_login.html', 4, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post" style="margin-top: 0px;">
<dl class="fh">
<dt><label for="legacy_xoopsform_block_uname"><?php echo @_MB_USER_USERNAME; ?>
</label></dt>
  <dd><?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','size' => 10,'value' => $this->_tpl_vars['block']['unamevalue'],'maxlength' => 25,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_uname"), $this);?>
</dd>
<dt><label for="legacy_xoopsform_block_pass"><?php echo @_MB_USER_PASSWORD; ?>
</label></dt>
  <dd><?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','size' => 10,'maxlength' => 32,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_pass"), $this);?>
</dd>
  <dd>  <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'op','value' => 'login','id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_op"), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'submit','name' => 'submit','value' => @_MB_USER_LOGIN,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_submit"), $this);?>
</dd>
</dl>
</form>
<ul class="nlm">
<?php if ($this->_tpl_vars['block']['use_ssl'] == '1'): ?>
  <li><a href="javascript:openWithSelfMain('<?php echo $this->_tpl_vars['block']['sslloginlink']; ?>
', 'ssllogin', 300, 200);"><?php echo @_MB_USER_SECURE; ?>
</a></li>
<?php endif; ?>
  <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/lostpass.php"><?php echo @_MB_USER_LOSTPASS; ?>
</a></li>
<?php if ($this->_tpl_vars['block']['allow_register'] == '1'): ?>
  <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @_MB_USER_USERREG; ?>
</a></li>
<?php endif; ?>
</ul>