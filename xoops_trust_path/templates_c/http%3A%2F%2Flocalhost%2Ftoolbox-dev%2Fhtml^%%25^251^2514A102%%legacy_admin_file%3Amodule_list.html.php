<?php /* Smarty version 2.6.26, created on 2013-02-16 07:05:18
         compiled from file:module_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:module_list.html', 16, false),array('modifier', 'theme', 'file:module_list.html', 27, false),array('modifier', 'xoops_formattimestamp', 'file:module_list.html', 63, false),array('function', 'xoops_token', 'file:module_list.html', 23, false),array('function', 'cycle', 'file:module_list.html', 48, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><a href="./index.php?action=ModuleList"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a></span>
</div>

<h1 class="admintitle"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</h1>

<ul class="toptab">
  <li><a href="index.php?action=InstallList"><?php echo @_AD_LEGACY_LANG_MODINSTALL; ?>
</a></li>
</ul>

<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
<div class="error">
  <ul>
    <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
</div>
<?php endif; ?>

<form method="post" action="">
<?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

<table class="outer">
  <tr>
    <th><?php echo @_AD_LEGACY_LANG_MOD_MID; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_MID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_MID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_MOD_NAME; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_VERSION; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_VERSION; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_VERSION; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_LASTUPDATE; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_LASTUPDATE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_LASTUPDATE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_WEIGHT; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_ISACTIVE; ?>
<br />
      <a href="index.php?action=ModuleList&amp;sort=<?php echo @MODULE_SORT_KEY_ISACTIVE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="index.php?action=ModuleList&amp;sort=-<?php echo @MODULE_SORT_KEY_ISACTIVE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_LEGACY_LANG_CONTROL; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['moduleObjects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
    <?php if ($this->_tpl_vars['module']->get('hasmain') && $this->_tpl_vars['module']->getShow('weight','e') != 0): ?>
      <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
 active">
    <?php else: ?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <?php endif; ?>
      <td class="legacy_list_id"><?php echo $this->_tpl_vars['module']->getShow('mid'); ?>
</td>
      <td class="legacy_list_image"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
/<?php echo $this->_tpl_vars['module']->modinfo['image']; ?>
" alt="<?php echo $this->_tpl_vars['module']->getShow('name'); ?>
" /><br />
        <input type="text" size="24" name="name[<?php echo $this->_tpl_vars['module']->getShow('mid'); ?>
]" value="<?php echo $this->_tpl_vars['module']->getShow('name'); ?>
" /></td>
      <td class="legacy_list_order">
        <?php if ($this->_tpl_vars['module']->hasNeedUpdate()): ?>
          <strong class="legacy_module_versionMsg"><?php echo $this->_tpl_vars['module']->getRenderedVersion(); ?>
</strong>
          <a href="index.php?action=ModuleUpdate&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/upgrade.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_UPGRADE; ?>
" title="<?php echo @_AD_LEGACY_LANG_UPGRADE; ?>
" /></a>
        <?php else: ?>
          <?php echo $this->_tpl_vars['module']->getRenderedVersion(); ?>

        <?php endif; ?>
      </td>
      <td class="legacy_list_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['module']->get('last_update'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
</td>
      <td class="legacy_list_select">
        <input type="text" size="4" maxlength="4" name="weight[<?php echo $this->_tpl_vars['module']->getShow('mid'); ?>
]" value="<?php echo $this->_tpl_vars['module']->getShow('weight','e'); ?>
" class=legacy_list_number />
      </td>
      <td class="legacy_list_select"><input type="checkbox" name="isactive[<?php echo $this->_tpl_vars['module']->getShow('mid'); ?>
]" value="1" <?php if ($this->_tpl_vars['module']->get('isactive')): ?>checked="checked"<?php endif; ?> /></td>
      <td class="legacy_list_control">
        <a href="index.php?action=ModuleUpdate&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/update.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_UPDATE; ?>
" title="<?php echo @_AD_LEGACY_LANG_UPDATE; ?>
" /></a>
        <?php if ($this->_tpl_vars['module']->get('isactive') == 0): ?>
          <a href="index.php?action=ModuleUninstall&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/uninstall.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_UNINSTALL; ?>
" title="<?php echo @_AD_LEGACY_LANG_UNINSTALL; ?>
" /></a>
        <?php endif; ?>
        <a href="index.php?action=ModuleInfo&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/info.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_INFORMATION; ?>
" title="<?php echo @_AD_LEGACY_LANG_INFORMATION; ?>
" /></a>
      </td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td class="foot" colspan="7">
      <input type="submit" value="<?php echo @_AD_LEGACY_LANG_UPDATE; ?>
" class="formButton" />
    </td>
  </tr>
</table>
</form>