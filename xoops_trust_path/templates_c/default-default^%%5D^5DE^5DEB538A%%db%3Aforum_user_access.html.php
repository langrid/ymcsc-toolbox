<?php /* Smarty version 2.6.26, created on 2013-03-06 06:05:16
         compiled from db:forum_user_access.html */ ?>
<style type="text/css">
div.scl {
	display:block;
	width:190px;
	height:150px;
	padding: 0px;
	background: #ffffff;
	border:0px;
	text-align:left;
	line-height:130%;
	overflow-y: scroll;}
</style>

<!-- Enabling User Access List -->
<div id="community_left">
<h2><?php echo @_MD_D3FORUM_ORGACCESS; ?>
</h2>
<div  class=scl>
<?php if (! count ( $this->_tpl_vars['titles'] )): ?>
	<?php echo @_MD_D3FORUM_ERR_NOT_EXIST_MENU; ?>

<?php else: ?>
	<?php echo '<table cellspacing="10" cellpadding="5" >'; ?><?php $_from = $this->_tpl_vars['org_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oacc']):
?><?php echo '<tr><td width=30><img src= '; ?><?php echo $this->_tpl_vars['xoops_url']; ?><?php echo '/uploads/'; ?><?php echo $this->_tpl_vars['oacc']['avatar']; ?><?php echo ' width="30" /></td><td width=200 bgcolor='; ?><?php echo $this->_tpl_vars['oacc']['_bgc']; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['oacc']['org']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

<?php endif; ?>
</div>
</div>
<br>


<!-- Disableing User Access List by commenting-out -->
<!-- 
<div id="community_left">
<h2><?php echo @_MD_D3FORUM_USERACCESS; ?>
</h2>
<div  class=scl>
<?php if (! count ( $this->_tpl_vars['titles'] )): ?>
	<?php echo @_MD_D3FORUM_ERR_NOT_EXIST_MENU; ?>

<?php else: ?>
	<?php echo '<table cellspacing="10" cellpadding="5" >'; ?><?php $_from = $this->_tpl_vars['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['uacc']):
?><?php echo '<tr><td width=30><img src= '; ?><?php echo $this->_tpl_vars['xoops_url']; ?><?php echo '/uploads/'; ?><?php echo $this->_tpl_vars['uacc']['avatar']; ?><?php echo ' width="30" /></td><td width=200 bgcolor='; ?><?php echo $this->_tpl_vars['uacc']['_bgc']; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['uacc']['name']; ?><?php echo '</td><td width=200 bgcolor='; ?><?php echo $this->_tpl_vars['uacc']['_bgc']; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['uacc']['org']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

<?php endif; ?>
</div>
</div>
-->