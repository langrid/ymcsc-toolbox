<?php /* Smarty version 2.6.26, created on 2013-02-16 07:39:25
         compiled from file:definitions_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:definitions_edit.html', 45, false),array('function', 'xoops_token', 'file:definitions_edit.html', 51, false),array('function', 'xoops_input', 'file:definitions_edit.html', 52, false),array('function', 'cycle', 'file:definitions_edit.html', 67, false),array('function', 'xoops_dhtmltarea', 'file:definitions_edit.html', 124, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_PROFILE_LANG_PROFILE; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=DefinitionsList"><?php echo @_MI_PROFILE_LANG_DEFINITIONS_LIST; ?>
</a>
  <?php if ($this->_tpl_vars['actionForm']->get('field_id')): ?>
    &raquo;&raquo; <?php echo @_AD_PROFILE_LANG_DEFINITIONS_EDIT; ?>

  <?php else: ?>
    &raquo;&raquo; <?php echo @_MI_PROFILE_LANG_ADD_A_NEW_DEFINITIONS; ?>

  <?php endif; ?>
</div>

  <?php if ($this->_tpl_vars['actionForm']->get('field_id')): ?>
    <h3><?php echo @_AD_PROFILE_LANG_DEFINITIONS_EDIT; ?>
</h3>
  <?php else: ?>
    <h3><?php echo @_MI_PROFILE_LANG_ADD_A_NEW_DEFINITIONS; ?>
</h3>
  <?php endif; ?>

<div class="tips">
<ul>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP1; ?>

</li>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP2; ?>

</li>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP3; ?>

</li>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP4; ?>

</li>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP5; ?>

</li>
<li>
<?php echo @_MD_PROFILE_LANG_FIELD_TIP6; ?>

</li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacy/admin/index.php?action=Help&dirname=profile"><?php echo @_HELP; ?>
</a></li>
</ul>
</div>

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
<form action="index.php?action=DefinitionsEdit" method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'field_id','value' => $this->_tpl_vars['actionForm']->get('field_id')), $this);?>

  <?php if ($this->_tpl_vars['actionForm']->get('field_id')): ?>
  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'type','value' => $this->_tpl_vars['actionForm']->get('type')), $this);?>

  <?php endif; ?>
  <table class="outer">
    <tr>
    <?php if ($this->_tpl_vars['actionForm']->get('field_id')): ?>
      <th colspan="2"><?php echo @_AD_PROFILE_LANG_DEFINITIONS_EDIT; ?>
</th>
  <?php else: ?>
      <th colspan="2"><?php echo @_MD_PROFILE_LANG_ADD_A_NEW_DEFINITIONS; ?>
</th>
  <?php endif; ?>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_FIELD_NAME; ?>
<br />
      <?php echo @_MD_PROFILE_LANG_FIELD_NAME_DESC; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'field_name','value' => $this->_tpl_vars['actionForm']->get('field_name'),'size' => 15,'maxlength' => 32), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_LABEL; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'label','value' => $this->_tpl_vars['actionForm']->get('label'),'size' => 15,'maxlength' => 255), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_TYPE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
		    <?php if ($this->_tpl_vars['actionForm']->get('field_id')): ?>
       	<?php echo $this->_tpl_vars['object']->getShow('type'); ?>

        <?php else: ?>
      	<select name="type" id="legacy_xoopsform_type">
					<?php $_from = $this->_tpl_vars['typeArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['type']):
?>
					<option value="<?php echo $this->_tpl_vars['type']; ?>
"<?php if ($this->_tpl_vars['type'] == $this->_tpl_vars['actionForm']->get('type')): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['type']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
        </select>
        <?php endif; ?>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_VALIDATION; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
      	<select name="validation" id="legacy_xoopsform_validation">
			<option value="<?php echo $this->_tpl_vars['validation']; ?>
"<?php if (! $this->_tpl_vars['actionForm']->get('validation')): ?> selected="selected"<?php endif; ?>></option>
			<?php $_from = $this->_tpl_vars['validationArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['validation']):
?>
			<option value="<?php echo $this->_tpl_vars['validation']; ?>
"<?php if ($this->_tpl_vars['validation'] == $this->_tpl_vars['actionForm']->get('validation')): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['validation']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_REQUIRED; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'required','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('required')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_SHOW_FORM; ?>
<br />
		<?php echo @_MD_PROFILE_LANG_SHOW_FORM_DESC; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'show_form','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('show_form')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_WEIGHT; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'weight','value' => $this->_tpl_vars['actionForm']->get('weight')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_DESCRIPTION; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_dhtmltarea(array('type' => 'text','name' => 'description','value' => $this->_tpl_vars['actionForm']->get('description')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_ACCESS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name="access[]" id="legacy_xoopsform_access" size='3' multiple="multiple">
          <?php $_from = $this->_tpl_vars['groupArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
            <?php $this->assign('flag', 0); ?>
            <?php $_from = $this->_tpl_vars['accessArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['selected']):
?>
              <?php if ($this->_tpl_vars['group']->get('groupid') == $this->_tpl_vars['selected']): ?><?php $this->assign('flag', 1); ?><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <option value="<?php echo $this->_tpl_vars['group']->getShow('groupid'); ?>
" <?php if ($this->_tpl_vars['flag']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['group']->getShow('name'); ?>
</option>
          <?php endforeach; endif; unset($_from); ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_PROFILE_LANG_OPTIONS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
	      <div id="fieldtype_string" class="optionField">
	        <input type="text" name="options" id="legacy_xoopsform_options" value="<?php echo $this->_tpl_vars['actionForm']->get('options'); ?>
" />
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_STRING; ?>
</p>
	      </div>
	      <div id="fieldtype_int" class="optionField">
	        <input type="text" name="options" id="legacy_xoopsform_options" value="<?php echo $this->_tpl_vars['actionForm']->get('options'); ?>
" />
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_INT; ?>
</p>
	      </div>
	      <div id="fieldtype_float" class="optionField">
	        <input type="text" name="options" id="legacy_xoopsform_options" value="<?php echo $this->_tpl_vars['actionForm']->get('options'); ?>
" />
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_FLOAT; ?>
</p>
	      </div>
	      <div id="fieldtype_text" class="optionField">
	        <label><input type="radio" name="options" value="bbcode" id="legacy_xoopsform_options"<?php if ($this->_tpl_vars['actionForm']->get('options') == 'bbcode'): ?> checked="checked"<?php endif; ?> />bbcode</label>
	        <label><input type="radio" name="options" value="html" id="legacy_xoopsform_options"<?php if ($this->_tpl_vars['actionForm']->get('options') == 'html'): ?> checked="checked"<?php endif; ?> />html</label>
	        <label><input type="radio" name="options" value="none" id="legacy_xoopsform_options"<?php if ($this->_tpl_vars['actionForm']->get('options') == 'none'): ?> checked="checked"<?php endif; ?> />none</label>
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_TEXT; ?>
</p>
	      </div>
	      <div id="fieldtype_checkbox" class="optionField">
	        <textarea name="options" id="legacy_xoopsform_options"><?php echo $this->_tpl_vars['actionForm']->get('options'); ?>
</textarea>
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_CHECKBOX; ?>
</p>
	      </div>
	      <div id="fieldtype_selectbox" class="optionField">
	        <textarea name="options" id="legacy_xoopsform_options"><?php echo $this->_tpl_vars['actionForm']->get('options'); ?>
</textarea>
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_SELECTBOX; ?>
</p>
	      </div>
	      <div id="fieldtype_category" class="optionField">
	        <select name="options" id="legacy_xoopsform_options">
	          <?php $_from = $this->_tpl_vars['catDirnames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['catDir']):
?>
	          <option value="<?php echo $this->_tpl_vars['catDir']; ?>
"<?php if ($this->_tpl_vars['catDir'] == $this->_tpl_vars['actionForm']->get('options')): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['catDir']; ?>
</options>
	          <?php endforeach; endif; unset($_from); ?>
	        </select>
	        <p><?php echo @_AD_PROFILE_DESC_FIELD_CATEGORY; ?>
</p>
	      </div>
      
      
      	<br />
              </td>
    </tr>
    <tr>
      <td class="foot" colspan="2">
        <input type="submit" class="formButton" value="<?php echo @_SUBMIT; ?>
"/>
        <input type="submit" class="formButton" value="<?php echo @_MD_PROFILE_LANG_CANCEL; ?>
" name="_form_control_cancel"/>
      </td>
    </tr>
  </table>
</form>