<?php /* Smarty version 2.6.26, created on 2013-03-06 05:48:24
         compiled from file:user_view.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'file:user_view.html', 19, false),array('function', 'xoops_token', 'file:user_view.html', 83, false),array('function', 'xoops_input', 'file:user_view.html', 84, false),array('function', 'legacy_profile', 'file:user_view.html', 227, false),array('modifier', 'xoops_formattimestamp', 'file:user_view.html', 69, false),array('modifier', 'xoops_escape', 'file:user_view.html', 200, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_USER_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=UserList"><?php echo @_AD_USER_LANG_USER_LIST; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_USER_LANG_USER_VIEW; ?>
</span>
</div>

<h3 class="admintitle"><?php echo @_AD_USER_LANG_USER_VIEW; ?>
 (<?php echo $this->_tpl_vars['object']->getShow('uname'); ?>
)</h3>

<div class="tips">
  <?php echo @_AD_USER_TIPS_RECOUNT_POSTS; ?>

</div>

<table class="outer">
  <tr>
    <th colspan="2"><?php echo @_AD_USER_LANG_USER_VIEW; ?>
</th>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_UID; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('uid'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_AVATAR; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->get('user_avatar') != "blank.gif"): ?>
        <img src="<?php echo @XOOPS_UPLOAD_URL; ?>
/<?php echo $this->_tpl_vars['object']->getShow('user_avatar'); ?>
" alt="Avatar" title="Avatar" />
      <?php else: ?>
        <img src="<?php echo @XOOPS_URL; ?>
/modules/user/images/no_avatar.png" alt="No Avatar" title="No Avatar" />
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_UNAME; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('uname'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_NAME; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('name'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_RANK; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['rank']): ?>
        <img src="<?php echo @XOOPS_UPLOAD_URL; ?>
/<?php echo $this->_tpl_vars['rank']->getShow('rank_image'); ?>
" alt="<?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>
" title="<?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>
" />
        <?php echo $this->_tpl_vars['rank']->getShow('rank_title'); ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_LEVEL; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->get('level') == 0): ?>
        <?php echo @_AD_USER_LANG_LEVEL_PENDING; ?>

      <?php elseif ($this->_tpl_vars['object']->get('level') == 1): ?>
        <?php echo @_AD_USER_LANG_LEVEL_ACTIVE; ?>

      <?php elseif ($this->_tpl_vars['object']->get('level') == 5): ?>
        <?php echo @_AD_USER_LANG_LEVEL_ROOT; ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_REGDATE; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['object']->get('user_regdate'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_LAST_LOGIN; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['object']->get('last_login'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_POSTS; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <form action="./index.php?action=UserView" method="post">
      <?php echo $this->_tpl_vars['object']->getShow('posts'); ?>

        <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

        <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'uid','value' => $this->_tpl_vars['actionForm']->get('uid')), $this);?>

        <input class='formButton' type='submit' value='<?php echo @_AD_USER_LANG_RECOUNT; ?>
' />
      </form>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_TIMEZONE_OFFSET; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['timezone']): ?>
        <?php echo $this->_tpl_vars['timezone']->getShow('zone_name'); ?>

      <?php else: ?>
        <?php echo $this->_tpl_vars['object']->getShow('timezone_offset'); ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_FROM; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_from'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_OCC; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_occ'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_INTREST; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_intrest'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_URL; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->getShow('url')): ?>
        <a href="<?php echo $this->_tpl_vars['object']->getShow('url'); ?>
" rel="external"><?php echo $this->_tpl_vars['object']->getShow('url'); ?>
</a>
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_EMAIL; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('email'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_VIEWEMAIL; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->getShow('user_viewemail') == 1): ?>
        <?php echo @_YES; ?>

      <?php else: ?>
        <?php echo @_NO; ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_MAILOK; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->getShow('user_mailok') == 1): ?>
        <?php echo @_YES; ?>

      <?php else: ?>
        <?php echo @_NO; ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_ICQ; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_icq'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_AIM; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_aim'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_YIM; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_yim'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_MSNM; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_msnm'); ?>

    </td>
  </tr>          
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_USER_SIG; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('user_sig'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_ATTACHSIG; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['object']->get('attachesig')): ?>
        <?php echo @_YES; ?>

      <?php else: ?>
        <?php echo @_NO; ?>

      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_THEME; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('theme'); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_UMODE; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['umode'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_UORDER; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['uorder'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_NOTIFY_METHOD; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['notify_method'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_NOTIFY_MODE; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['notify_mode'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_MD_USER_LANG_BIO; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['object']->getShow('bio'); ?>

    </td>
  </tr>
  <?php echo smarty_function_legacy_profile(array('uid' => $this->_tpl_vars['object']->getShow('uid')), $this);?>

</table>