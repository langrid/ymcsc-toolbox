<?php /* Smarty version 2.6.26, created on 2013-02-16 06:55:47
         compiled from db:legacy_block_usermenu.html */ ?>
<script type="text/javascript">
<!--
    function logout_confirm(){ 
      if( window.confirm('<?php echo @_US_LOGOUT_CONFIRM; ?>
') ){
        location.href = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout" ;
      }
    }
//-->
</script>
<ul id="usermenu">
  <li><a class="menuTop" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><?php echo @_MB_LEGACY_VACNT; ?>
</a></li>
  <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/edituser.php"><?php echo @_MB_LEGACY_EACNT; ?>
</a></li>
  <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/notifications.php"><?php echo @_MB_LEGACY_NOTIF; ?>
</a></li>
  <li>
  <script type="text/javascript">
  <!--
    document.write('  <a href="javascript:logout_confirm()"><?php echo @_MB_LEGACY_LOUT; ?>
<\/a>') ;
  //-->
  </script>
  <noscript>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_MB_LEGACY_LOUT; ?>
</a>
  </noscript>
  </li>
  <?php if ($this->_tpl_vars['block']['flagShowInbox']): ?>
    <?php if ($this->_tpl_vars['block']['new_messages'] > 0): ?>
      <li><a class="highlight" href="<?php echo $this->_tpl_vars['block']['inbox_url']; ?>
"><?php echo @_MB_LEGACY_INBOX; ?>
 (<span style="color:#ff0000; font-weight: bold;"><?php echo $this->_tpl_vars['block']['new_messages']; ?>
</span>)</a></li>
    <?php else: ?>
      <li><a href="<?php echo $this->_tpl_vars['block']['inbox_url']; ?>
"><?php echo @_MB_LEGACY_INBOX; ?>
</a></li>
    <?php endif; ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['block']['show_adminlink']): ?>
    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><?php echo @_MB_LEGACY_ADMENU; ?>
</a></li>
  <?php endif; ?>
</ul>