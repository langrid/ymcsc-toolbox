<?php /* Smarty version 2.6.26, created on 2013-02-16 07:44:00
         compiled from db:profile_inc_data_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_inc_data_edit.html', 4, false),array('function', 'xoops_input', 'db:profile_inc_data_edit.html', 6, false),array('function', 'xoops_dhtmltarea', 'db:profile_inc_data_edit.html', 11, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['defArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['def']):
?>
	<tr>
    <td class="head"><?php echo $this->_tpl_vars['def']->get('label'); ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
    	<?php if ($this->_tpl_vars['def']->get('type') == 'string'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 40,'maxlength' => 255), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'int' || $this->_tpl_vars['def']->get('type') == 'float'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 15,'maxlength' => 11), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'text'): ?>
      <?php if ($this->_tpl_vars['def']->mFieldType->getOption($this->_tpl_vars['def']) == 'bbcode'): ?>
      <?php echo smarty_function_xoops_dhtmltarea(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'editor' => 'bbcode'), $this);?>

      <?php elseif ($this->_tpl_vars['def']->mFieldType->getOption($this->_tpl_vars['def']) == 'html'): ?>
      <?php echo smarty_function_xoops_dhtmltarea(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'editor' => 'html'), $this);?>

      <?php else: ?>
      <?php echo smarty_function_xoops_dhtmltarea(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'editor' => 'none'), $this);?>

      <?php endif; ?>
      <?php elseif ($this->_tpl_vars['def']->get('type') == 'date'): ?>
      <?php echo smarty_function_xoops_input(array('class' => 'datepicker','type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name')),'size' => 20,'maxlength' => 10), $this);?>

      <?php elseif ($this->_tpl_vars['def']->get('type') == 'checkbox'): ?>
      <?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => 1,'default' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name'))), $this);?>

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
      <?php echo smarty_function_xoops_input(array('type' => 'text','name' => $this->_tpl_vars['def']->getShow('field_name'),'value' => $this->_tpl_vars['profileForm']->get($this->_tpl_vars['def']->getShow('field_name'),1)), $this);?>

      <?php endif; ?>
      <div class="description"><?php echo $this->_tpl_vars['def']->getShow('description'); ?>
</div>
    </td>
  </tr>
	<?php endforeach; endif; unset($_from); ?>