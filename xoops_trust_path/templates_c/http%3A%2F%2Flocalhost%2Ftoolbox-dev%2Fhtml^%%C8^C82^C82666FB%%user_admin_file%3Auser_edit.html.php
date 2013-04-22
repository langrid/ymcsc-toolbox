<?php /* Smarty version 2.6.26, created on 2013-02-16 07:44:00
         compiled from file:user_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:user_edit.html', 25, false),array('function', 'xoops_token', 'file:user_edit.html', 32, false),array('function', 'xoops_input', 'file:user_edit.html', 33, false),array('function', 'cycle', 'file:user_edit.html', 46, false),array('function', 'xoops_optionsArray', 'file:user_edit.html', 74, false),array('function', 'xoops_dhtmltarea', 'file:user_edit.html', 126, false),array('function', 'html_options', 'file:user_edit.html', 136, false),array('function', 'xoops_textarea', 'file:user_edit.html', 160, false),array('function', 'legacy_profile', 'file:user_edit.html', 222, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_USER_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=UserList"><?php echo @_AD_USER_LANG_USER_LIST; ?>
</a>
  &raquo;&raquo;
  <?php if ($this->_tpl_vars['actionForm']->get('uid')): ?>
    <span class="adminnaviTitle"><?php echo @_AD_USER_LANG_USER_EDIT; ?>
</span>
  <?php else: ?>
    <span class="adminnaviTitle"><?php echo @_AD_USER_LANG_USER_NEW; ?>
</span>
  <?php endif; ?>
</div>

<?php if ($this->_tpl_vars['actionForm']->get('uid')): ?>
  <h3 class="admintitle"><?php echo @_AD_USER_LANG_USER_EDIT; ?>
 (<?php echo $this->_tpl_vars['actionForm']->get('uname'); ?>
)</h3>
  <div class="tips"><?php echo @_AD_USER_TIPS_USER_EDIT; ?>
</div>
<?php else: ?>
  <h3 class="admintitle"><?php echo @_AD_USER_LANG_USER_NEW; ?>
</h3>
  <div class="tips"><?php echo @_AD_USER_TIPS_USER_NEW; ?>
</div>
<?php endif; ?>


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

<form action="" method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'uid','value' => $this->_tpl_vars['actionForm']->get('uid')), $this);?>

  <table class="outer">
    <tr>
      <th colspan="2">
      <?php if ($this->_tpl_vars['actionForm']->get('uid')): ?>
        <?php echo @_AD_USER_LANG_USER_EDIT; ?>

      <?php else: ?>
        <?php echo @_AD_USER_LANG_USER_NEW; ?>

      <?php endif; ?>
      </th>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_UNAME; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','value' => $this->_tpl_vars['actionForm']->get('uname'),'size' => 25,'maxlength' => 25), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_NAME; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'name','value' => $this->_tpl_vars['actionForm']->get('name'),'size' => 30,'maxlength' => 60), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_EMAIL; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'email','value' => $this->_tpl_vars['actionForm']->get('email'),'size' => 30,'maxlength' => 60), $this);?>

        <br />
        <label><?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'user_viewemail','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('user_viewemail')), $this);?>
 <?php echo @_MD_USER_LANG_USER_VIEWEMAIL; ?>
</label>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_URL; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'url','value' => $this->_tpl_vars['actionForm']->get('url'),'size' => 50,'maxlength' => 100), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_TIMEZONE_OFFSET; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name="timezone_offset">
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'timezone_offset','label' => 'zone_name','value' => 'offset','from' => $this->_tpl_vars['timezones'],'default' => $this->_tpl_vars['actionForm']->get('timezone_offset')), $this);?>

        </select>
      </td>
    </tr>
    
<!-- Optional Fields

    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_ICQ; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_icq','value' => $this->_tpl_vars['actionForm']->get('user_icq'),'size' => 15,'maxlength' => 15), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_AIM; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_aim','value' => $this->_tpl_vars['actionForm']->get('user_aim'),'size' => 18,'maxlength' => 18), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_YIM; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_yim','value' => $this->_tpl_vars['actionForm']->get('user_yim'),'size' => 25,'maxlength' => 25), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_MSNM; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_msnm','value' => $this->_tpl_vars['actionForm']->get('user_msnm'),'size' => 25,'maxlength' => 100), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_FROM; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_from','value' => $this->_tpl_vars['actionForm']->get('user_from'),'size' => 50,'maxlength' => 100), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_OCC; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_occ','value' => $this->_tpl_vars['actionForm']->get('user_occ'),'size' => 50,'maxlength' => 100), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_INTREST; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'user_intrest','value' => $this->_tpl_vars['actionForm']->get('user_intrest'),'size' => 50,'maxlength' => 150), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_SIG; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_dhtmltarea(array('name' => 'user_sig','value' => $this->_tpl_vars['actionForm']->get('user_sig')), $this);?>

        <br />
        <label><?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'attachsig','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('attachsig')), $this);?>
 <?php echo @_MD_USER_LANG_ATTACHSIG; ?>
</label>
      </td>
    </tr>
-->

    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_UMODE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_html_options(array('name' => 'umode','options' => $this->_tpl_vars['umodeOptions'],'selected' => $this->_tpl_vars['actionForm']->get('umode')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_UORDER; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_html_options(array('name' => 'uorder','options' => $this->_tpl_vars['uorderOptions'],'selected' => $this->_tpl_vars['actionForm']->get('uorder')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_NOTIFY_METHOD; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_html_options(array('name' => 'notify_method','options' => $this->_tpl_vars['notify_methodOptions'],'selected' => $this->_tpl_vars['actionForm']->get('notify_method')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_NOTIFY_MODE; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_html_options(array('name' => 'notify_mode','options' => $this->_tpl_vars['notify_modeOptions'],'selected' => $this->_tpl_vars['actionForm']->get('notify_mode')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_BIO; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_textarea(array('type' => 'text','rows' => 5,'cols' => 50,'name' => 'bio','value' => $this->_tpl_vars['actionForm']->get('bio')), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_RANK; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select name="rank">
          <option id="rank_0" value="0"><?php echo @_AD_USER_LANG_NO_SPECIAL_RANK; ?>
</option>
          <?php echo smarty_function_xoops_optionsArray(array('id' => 'rank','value' => 'rank_id','label' => 'rank_title','from' => $this->_tpl_vars['ranks'],'default' => $this->_tpl_vars['actionForm']->get('rank')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_PASS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','size' => 25,'maxlength' => 32), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_USER_LANG_VPASS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'vpass','size' => 25,'maxlength' => 32), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_USER_MAILOK; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <label><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'user_mailok','value' => 1,'default' => $this->_tpl_vars['actionForm']->get('user_mailok')), $this);?>
<?php echo @_YES; ?>
</label>
        <label><?php echo smarty_function_xoops_input(array('type' => 'radio','name' => 'user_mailok','value' => 0,'default' => $this->_tpl_vars['actionForm']->get('user_mailok')), $this);?>
<?php echo @_NO; ?>
</label>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_AD_USER_LANG_GROUP; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <select size="5" name="groups[]" multiple="multiple">
          <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['groupOptions'],'selected' => $this->_tpl_vars['actionForm']->get('groups')), $this);?>

        </select>
      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_POSTS; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'posts','value' => $this->_tpl_vars['actionForm']->get('posts'),'class' => 'user_list_number'), $this);?>

      </td>
    </tr>
    <tr>
      <td class="head"><?php echo @_MD_USER_LANG_LEVEL; ?>
</td>
      <td class="<?php echo smarty_function_cycle(array('values' => "odd,even"), $this);?>
">
        <?php if ($this->_tpl_vars['actionForm']->get('level') == 0): ?>
          <select name="level">
            <option id="level_0" value="0" selected="selected"><?php echo @_AD_USER_LANG_LEVEL_PENDING; ?>
</option>
            <option id="level_1" value="1"><?php echo @_AD_USER_LANG_LEVEL_ACTIVE; ?>
</option>
          </select>
        <?php elseif ($this->_tpl_vars['actionForm']->get('level') == 1): ?>
          <?php echo @_AD_USER_LANG_LEVEL_ACTIVE; ?>

          <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'level','value' => $this->_tpl_vars['actionForm']->get('level')), $this);?>

        <?php elseif ($this->_tpl_vars['actionForm']->get('level') == 5): ?>
          <?php echo @_AD_USER_LANG_LEVEL_ROOT; ?>

          <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'level','value' => $this->_tpl_vars['actionForm']->get('level')), $this);?>

        <?php endif; ?>
      </td>
    </tr>
    <?php echo smarty_function_legacy_profile(array('template' => "profile_inc_data_edit.html",'action' => 'edit','actionForm' => $this->_tpl_vars['actionForm']), $this);?>

    <tr>
      <td colspan="2"  class="foot">
        <input class="formButton" type="submit" value="<?php echo @_SUBMIT; ?>
" />
        <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
      </td>
    </tr>
  </table>
</form>