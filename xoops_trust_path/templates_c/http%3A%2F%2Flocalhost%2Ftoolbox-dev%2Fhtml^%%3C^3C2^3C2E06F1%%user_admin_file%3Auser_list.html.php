<?php /* Smarty version 2.6.26, created on 2013-02-16 07:06:08
         compiled from file:user_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:user_list.html', 31, false),array('modifier', 'theme', 'file:user_list.html', 73, false),array('modifier', 'xoops_formattimestamp', 'file:user_list.html', 103, false),array('function', 'xoops_token', 'file:user_list.html', 68, false),array('function', 'cycle', 'file:user_list.html', 98, false),array('function', 'xoops_pagenavi', 'file:user_list.html', 125, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_USER_NAME; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><a href="./index.php?action=UserList"><?php echo @_AD_USER_LANG_USER_LIST; ?>
</a></span>
</div>

<h3 class="admintitle"><?php echo @_AD_USER_LANG_USER_LIST; ?>
</h3>

<div class="tips">
<ul>
<li>
<?php echo @_AD_USER_LANG_USER_TOTAL; ?>
: <?php echo $this->_tpl_vars['UserTotal']; ?>
<br />
<?php echo @_AD_USER_LANG_LEVEL_ACTIVE; ?>
: <?php echo $this->_tpl_vars['activeUserTotal']; ?>
&nbsp;&nbsp;|&nbsp; <?php echo @_AD_USER_LANG_LEVEL_PENDING; ?>
: <?php echo $this->_tpl_vars['inactiveUserTotal']; ?>

</li>
<li>
<?php echo @_AD_USER_TIPS_USER_ADMIN; ?>

</li>
<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacy/admin/index.php?action=Help&amp;dirname=user"><?php echo @_HELP; ?>
</a></li>
</ul>
</div>

<ul class="toptab">
<li class="addUser"><a href="index.php?action=UserEdit"><?php echo @_AD_USER_LANG_USER_NEW; ?>
</a></li>
<li class="group"><a href="index.php?action=GroupList"><?php echo @_AD_USER_LANG_GROUP_LIST; ?>
</a></li>
<li class="addField"><a href="<?php echo @XOOPS_URL; ?>
/modules/profile/admin/index.php?action=DefinitionsList"><?php echo @_AD_USER_LANG_USER_NEW_FIELD; ?>
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

<div>
<form action="./index.php" method="get">
  <input type="hidden" name="action" value="UserList" />
  <?php echo @_SEARCH; ?>
 : 
  <input type="text" name="search" value="<?php echo $this->_tpl_vars['filterForm']->mKeyword; ?>
" />
  <?php echo @_AD_USER_LANG_DISPLAY_USER_LEVEL; ?>
 : 
  <select name="option_field">
    <option value="all" <?php if ($this->_tpl_vars['filterForm']->mOptionField == 'all'): ?>selected="selected"<?php endif; ?>><?php echo @_AD_USER_LANG_ALL_OF_USERS; ?>
</option>
    <option value="inactive" <?php if ($this->_tpl_vars['filterForm']->mOptionField == 'inactive'): ?>selected="selected"<?php endif; ?>><?php echo @_AD_USER_LANG_PENDING_USERS_ONLY; ?>
</option>
    <option value="active" <?php if ($this->_tpl_vars['filterForm']->mOptionField == 'active'): ?>selected="selected"<?php endif; ?>><?php echo @_AD_USER_LANG_APPROVE_USERS_ONLY; ?>
</option>
  </select>
  <?php echo @_VIEW; ?>
 : 
  <select name="perpage">
    <option value="<?php echo @XCUBE_PAGENAVI_DEFAULT_PERPAGE; ?>
"><?php echo @_SELECT; ?>
</option>
    <?php $_from = $this->_tpl_vars['pageArr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
      <?php if ($this->_tpl_vars['pageNavi']->mPerpage == $this->_tpl_vars['page'] && $this->_tpl_vars['page'] != 0): ?>
        <option value="<?php echo $this->_tpl_vars['page']; ?>
" selected="selected"><?php echo $this->_tpl_vars['page']; ?>
</option>
      <?php elseif ($this->_tpl_vars['pageNavi']->mPerpage == $this->_tpl_vars['page'] && $this->_tpl_vars['page'] == 0): ?>
        <option value="<?php echo $this->_tpl_vars['page']; ?>
" selected="selected"><?php echo @_ALL; ?>
</option>
      <?php elseif ($this->_tpl_vars['pageNavi']->mPerpage != $this->_tpl_vars['page'] && $this->_tpl_vars['page'] == 0): ?>
        <option value="<?php echo $this->_tpl_vars['page']; ?>
"><?php echo @_ALL; ?>
</option>
      <?php else: ?>
        <option value="<?php echo $this->_tpl_vars['page']; ?>
"><?php echo $this->_tpl_vars['page']; ?>
</option>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
  </select>
  <input class="formButton" type="submit" value="<?php echo @_SUBMIT; ?>
" />
</form>
</div>

<form name="userlistform" method="post" action="./index.php?action=UserList">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

<table class="outer">
  <tr>
    <th>&nbsp;</th>
    <th><?php echo @_MD_USER_LANG_UID; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_UID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_UID; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_USER_LANG_UNAME; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_UNAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_UNAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_USER_LANG_NAME; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_NAME; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_USER_LANG_REGDATE; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_USER_REGDATE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_USER_REGDATE; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_AD_USER_LANG_LASTLOGIN; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_LAST_LOGIN; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_LAST_LOGIN; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_USER_LANG_POSTS; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_POSTS; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_POSTS; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_MD_USER_LANG_LEVEL; ?>

      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=<?php echo @USER_SORT_KEY_LEVEL; ?>
"><img src="<?php echo ((is_array($_tmp="icons/up.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_ASCENDING; ?>
" title="<?php echo @_ASCENDING; ?>
" /></a>
      <a href="<?php echo $this->_tpl_vars['pageNavi']->renderUrlForSort(); ?>
&amp;sort=-<?php echo @USER_SORT_KEY_LEVEL; ?>
"><img src="<?php echo ((is_array($_tmp="icons/down.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DESCENDING; ?>
" title="<?php echo @_DESCENDING; ?>
" /></a></th>
    <th><?php echo @_DELETE; ?>
<br />
      <input name="allbox" id="allbox" onclick="with(document.userlistform){for(i=0;i<length;i++){if(elements[i].type=='checkbox'&&elements[i].disabled==false&&elements[i].name.indexOf('delete')>=0){elements[i].checked=this.checked;}}}" type="checkbox" value="Check All" /></th>
    <th><?php echo @_AD_USER_LANG_CONTROL; ?>
</th>
  </tr>
  <?php $_from = $this->_tpl_vars['objects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <td class="user_list_image"><img src="<?php echo ((is_array($_tmp="icons/user.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_AD_USER_LANG_USER; ?>
" title="<?php echo @_AD_USER_LANG_USER; ?>
" /></td>
      <td class="user_list_id"><?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
</td>
      <td class="user_list_title"><a href="<?php echo @XOOPS_URL; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
"><?php echo $this->_tpl_vars['user']->getShow('uname'); ?>
</a></td>
      <td class="user_list_name"><?php echo $this->_tpl_vars['user']->getShow('name'); ?>
</td>
      <td class="user_list_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->get('user_regdate'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp) : smarty_modifier_xoops_formattimestamp($_tmp)); ?>
</td>
      <td class="user_list_date"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->get('last_login'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>
</td>
      <td class="user_list_number"><?php if ($this->_tpl_vars['user']->get('uid') != 1): ?><input type="text" size="4" maxlength="6" name="posts[<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
]" value="<?php echo $this->_tpl_vars['user']->getShow('posts'); ?>
" class=user_list_number /><?php else: ?><?php echo $this->_tpl_vars['user']->getShow('posts'); ?>
<?php endif; ?></td>
      <td class="user_list_order"><?php if ($this->_tpl_vars['user']->get('uid') != 1): ?><input type="text" size="2" maxlength="4" name="level[<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
]" value="<?php echo $this->_tpl_vars['user']->getShow('level'); ?>
" class=user_list_number /><?php else: ?><?php echo $this->_tpl_vars['user']->getShow('level'); ?>
<?php endif; ?></td>
      <td class="user_list_select"> <?php if ($this->_tpl_vars['user']->get('uid') != 1): ?><input type="checkbox" name="delete[<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
]" value="1" /> <?php endif; ?></td>
      <td class="user_list_control">
        <a href="./index.php?action=UserView&amp;uid=<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/property.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_VIEW; ?>
" title="<?php echo @_VIEW; ?>
" /></a>
        <a href="./index.php?action=UserEdit&amp;uid=<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_EDIT; ?>
" title="<?php echo @_EDIT; ?>
" /></a>
        <?php if ($this->_tpl_vars['user']->get('uid') != 1): ?>
          <a href="index.php?action=UserDelete&amp;uid=<?php echo $this->_tpl_vars['user']->getShow('uid'); ?>
"><img src="<?php echo ((is_array($_tmp="icons/delete.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="<?php echo @_DELETE; ?>
" title="<?php echo @_DELETE; ?>
" /></a>
        <?php endif; ?>
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