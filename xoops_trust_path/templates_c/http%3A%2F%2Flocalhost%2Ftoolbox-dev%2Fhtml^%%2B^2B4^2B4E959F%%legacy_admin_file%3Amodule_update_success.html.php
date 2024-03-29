<?php /* Smarty version 2.6.26, created on 2013-02-16 07:05:41
         compiled from file:module_update_success.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:module_update_success.html', 13, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=ModuleList"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_MODUPDATE_SUCCESS; ?>
</span>
</div>

<h1 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODUPDATE_SUCCESS; ?>
</h1>

<h2 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODUPDATE_LOG; ?>
</h2>
<ul>
<?php $_from = $this->_tpl_vars['log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
  <?php if ($this->_tpl_vars['msg']['type'] == 'error'): ?>
    <li class="legacy_module_error"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php elseif ($this->_tpl_vars['msg']['type'] == 'warning'): ?>
    <li class="legacy_module_warning"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php else: ?>
    <li class="legacy_module_message"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['isPhasedMode'] && ! $this->_tpl_vars['isLatestUpgrade']): ?>
  <p>&raquo; <a href="index.php?action=ModuleUpdate&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><b>Go to the next phased version</b></a></p>
<?php else: ?>
  <p>&raquo; <a href="index.php?action=ModuleList"><b><?php echo @_AD_LEGACY_LANG_MODLIST; ?>
</b></a></p>
<?php endif; ?>