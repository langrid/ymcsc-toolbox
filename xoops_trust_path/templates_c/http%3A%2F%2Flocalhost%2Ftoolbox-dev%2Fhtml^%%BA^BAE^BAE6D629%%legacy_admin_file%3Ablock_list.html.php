<?php /* Smarty version 2.6.26, created on 2013-03-05 04:02:39
         compiled from file:block_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:block_list.html', 18, false),array('modifier', 'theme', 'file:block_list.html', 28, false),array('modifier', 'xoops_formattimestamp', 'file:block_list.html', 108, false),array('function', 'xoops_token', 'file:block_list.html', 24, false),array('function', 'cycle', 'file:block_list.html', 52, false),array('function', 'xoops_input', 'file:block_list.html', 71, false),array('function', 'xoops_optionsArray', 'file:block_list.html', 105, false),array('function', 'xoops_pagenavi', 'file:block_list.html', 127, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><a href="./index.php?action=BlockList"><?php echo @_MI_LEGACY_MENU_BLOCKLIST; ?>
</a></span>
</div>

<h1 class="admintitle"><?php echo @_MI_LEGACY_MENU_BLOCKLIST; ?>
</h1>

<p class="tips"><?php echo @_AD_LEGACY_TIPS_ADD_CUSTOM_BLOCK; ?>
</p>

<ul class="ctrlMsg">
  <li><a href="index.php?action=BlockInstallList"><?php echo @_AD_LEGACY_LANG_BLOCK_INSTALL; ?>
</a></li>
  <li><a href="index.php?action=CustomBlockEdit"><?php echo @_AD_LEGACY_LANG_ADD_CUSTOM_BLOCK; ?>
</a></li>
</ul>

<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
<ul class="error">
  <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
    <li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>

<form method="post" action="./index.php?action=BlockList">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <table class="outer">
    <tr>
      <th><?php echo @_AD_LEGACY_LANG_BID; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_BID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_BID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_BLOCK_MOD; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_MID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_MID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_TITLE; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_TITLE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_TITLE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_SIDE; ?>

        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_SIDE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_SIDE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a><br />
        <?php echo @_AD_LEGACY_LANG_LCR; ?>
</th>
      <th><?php echo @_AD_LEGACY_LANG_WEIGHT; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_BCACHETIME; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_BCACHETIME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_BCACHETIME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_LAST_MODIFIED; ?>
<br />
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @NEWBLOCKS_SORT_KEY_LAST_MODIFIED; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
        <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @NEWBLOCKS_SORT_KEY_LAST_MODIFIED; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
      <th><?php echo @_AD_LEGACY_LANG_CONTROL; ?>
</th>
    </tr>
    <?php $_from = $this->_tpl_vars['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['obj']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
        <td class="legacy_list_id"><?php echo $this->_tpl_vars['obj']->getShow('bid'); ?>
</td>
        <td class="legacy_list_name">
          <?php if ($this->_tpl_vars['obj']->mModule): ?>
            <span class="legacy_blocktype_module"><?php echo $this->_tpl_vars['obj']->mModule->getShow('name'); ?>
</span>
          <?php else: ?>
            <span class="legacy_blocktype_custom">
            <?php if ($this->_tpl_vars['obj']->get('c_type') == 'H'): ?><?php echo @_AD_LEGACY_LANG_CUSTOM_HTML; ?>

            <?php elseif ($this->_tpl_vars['obj']->get('c_type') == 'P'): ?><?php echo @_AD_LEGACY_LANG_CUSTOM_PHP; ?>

            <?php elseif ($this->_tpl_vars['obj']->get('c_type') == 'S'): ?><?php echo @_AD_LEGACY_LANG_CUSTOM_WITH_SMILIES; ?>

            <?php elseif ($this->_tpl_vars['obj']->get('c_type') == 'T'): ?><?php echo @_AD_LEGACY_LANG_CUSTOM_WITHOUT_SMILIES; ?>

            <?php endif; ?>
            </span>
          <?php endif; ?>
        </td>
        <td class="legacy_list_title"><?php echo $this->_tpl_vars['obj']->getShow('title'); ?>
</td>
        <td class="legacy_blockside">
        <?php echo ''; ?><?php if ($this->_tpl_vars['obj']->get('side') == 0): ?><?php echo '<div class="legacy_blocksideInput active">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 0,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="legacy_blocksideInput inactive">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 0,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo '<div class="legacy_blockside_separator">-</div>'; ?><?php if ($this->_tpl_vars['obj']->get('side') == 3): ?><?php echo '<div class="legacy_blocksideInput active">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 3,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="legacy_blocksideInput inactive">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 3,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['obj']->get('side') == 5): ?><?php echo '<div class="legacy_blocksideInput active">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 5,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="legacy_blocksideInput inactive">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 5,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['obj']->get('side') == 4): ?><?php echo '<div class="legacy_blocksideInput active">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 4,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="legacy_blocksideInput inactive">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 4,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo '<div class="legacy_blockside_separator">-</div>'; ?><?php if ($this->_tpl_vars['obj']->get('side') == 1): ?><?php echo '<div class="legacy_blocksideInput active">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 1,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php else: ?><?php echo '<div class="legacy_blocksideInput inactive">'; ?><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'side','key' => $this->_tpl_vars['obj']->get('bid'),'value' => 1,'default' => $this->_tpl_vars['obj']->get('side')), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>

        </td>
        <td class="legacy_list_select">
          <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'weight','size' => 4,'key' => $this->_tpl_vars['obj']->get('bid'),'value' => $this->_tpl_vars['obj']->get('weight'),'class' => 'legacy_list_number'), $this);?>

        </td>
        <td class="legacy_list_select">
          <select name="bcachetime[<?php echo $this->_tpl_vars['obj']->getShow('bid'); ?>
]">
            <?php $this->assign('bid', $this->_tpl_vars['obj']->getShow('bid')); ?>
            <?php echo smarty_function_xoops_optionsArray(array('id' => "bcachetime[".($this->_tpl_vars['bid'])."]",'from' => $this->_tpl_vars['cachetimeArr'],'value' => 'cachetime','label' => 'label','default' => $this->_tpl_vars['obj']->get('bcachetime')), $this);?>

          </select>
        </td>
        <td class="legacy_list_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->getShow('last_modified'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
</td>
        <td class="legacy_list_control">
          <?php if ($this->_tpl_vars['obj']->get('block_type') == 'C'): ?>
            <a href="./index.php?action=CustomBlockEdit&amp;bid=<?php echo $this->_tpl_vars['obj']->getShow('bid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/edit.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_EDIT; ?>
" title="<?php echo @_EDIT; ?>
" /></a>
          <?php else: ?>
            <a href="./index.php?action=BlockEdit&amp;bid=<?php echo $this->_tpl_vars['obj']->getShow('bid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/edit.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_EDIT; ?>
" title="<?php echo @_EDIT; ?>
" /></a>
          <?php endif; ?>
          <a href="./index.php?action=BlockUninstall&amp;bid=<?php echo $this->_tpl_vars['obj']->getShow('bid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/uninstall.gif")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_LEGACY_LANG_UNINSTALL; ?>
" title="<?php echo @_AD_LEGACY_LANG_UNINSTALL; ?>
" /></a>
        </td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
    <tr>
      <td colspan="10" class="foot">
        <input type="submit" value="<?php echo @_SUBMIT; ?>
" class="formButton" />
      </td>
    </tr>
  </table>
</form>

<div class="pagenavi"><?php echo smarty_function_xoops_pagenavi(array('pagenavi' => $this->_tpl_vars['pageNavi']), $this);?>
</div>