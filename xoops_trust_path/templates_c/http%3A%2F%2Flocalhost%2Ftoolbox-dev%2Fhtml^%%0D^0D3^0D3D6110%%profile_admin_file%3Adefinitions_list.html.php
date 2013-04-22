<?php /* Smarty version 2.6.26, created on 2013-02-16 07:39:15
         compiled from file:definitions_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'theme', 'file:definitions_list.html', 15, false),array('function', 'cycle', 'file:definitions_list.html', 38, false),array('function', 'xoops_pagenavi', 'file:definitions_list.html', 54, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_PROFILE_LANG_PROFILE; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=DefinitionsList"><?php echo @_MI_PROFILE_LANG_DEFINITIONS_LIST; ?>
</a>
</div>

<h3><?php echo @_MI_PROFILE_LANG_DEFINITIONS_LIST; ?>
</h3>

<ul class="toptab">
  <li class="add"><a href="index.php?action=DefinitionsEdit"><?php echo @_MD_PROFILE_LANG_ADD_A_NEW_DEFINITIONS; ?>
</a></li>
</ul>

<table class="outer">
  <tr>
    <th><?php echo @_MD_PROFILE_LANG_FIELD_NAME; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_FIELD_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_FIELD_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_LABEL; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_LABEL; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_LABEL; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_TYPE; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_TYPE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_TYPE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_VALIDATION; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_VALIDATION; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_VALIDATION; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_REQUIRED; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_REQUIRED; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_REQUIRED; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_SHOW_FORM; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_SHOW_FORM; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_SHOW_FORM; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_WEIGHT; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=<?php echo @PROFILE_DEFINITIONS_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;<?php echo $this->_tpl_vars['pageNavi']->getPrefix(); ?>
sort=-<?php echo @PROFILE_DEFINITIONS_SORT_KEY_WEIGHT; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_PROFILE_LANG_CONTROL; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['obj']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <td><?php echo $this->_tpl_vars['obj']->getShow('field_name'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('label'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('type'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('validation'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('required'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('show_form'); ?>
</td>
      <td><?php echo $this->_tpl_vars['obj']->getShow('weight'); ?>
</td>
      <td align="center">
        <a href="./index.php?action=DefinitionsView&amp;field_id=<?php echo $this->_tpl_vars['obj']->getShow('field_id'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/view.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_VIEW; ?>
" title="<?php echo @_VIEW; ?>
" /></a>
        <a href="./index.php?action=DefinitionsEdit&amp;field_id=<?php echo $this->_tpl_vars['obj']->getShow('field_id'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_EDIT; ?>
" title="<?php echo @_EDIT; ?>
" /></a>
        <a href="./index.php?action=DefinitionsDelete&amp;field_id=<?php echo $this->_tpl_vars['obj']->getShow('field_id'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/delete.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DELETE; ?>
" title="<?php echo @_DELETE; ?>
" /></a>
      </td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<div class="pagenavi"><?php echo smarty_function_xoops_pagenavi(array('pagenavi' => $this->_tpl_vars['pageNavi']), $this);?>
</div>