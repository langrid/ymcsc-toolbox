<?php /* Smarty version 2.6.26, created on 2013-03-06 06:05:16
         compiled from db:forum_component_tab_navigation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:forum_component_tab_navigation.html', 30, false),)), $this); ?>

<?php if ($this->_tpl_vars['searchMode'] == 'yes'): ?>
	<?php $this->assign('tab1', 'tab_off'); ?>
	<?php $this->assign('tab2', 'tab_on'); ?>
<?php else: ?>
	<?php $this->assign('tab1', 'tab_on'); ?>
	<?php $this->assign('tab2', 'tab_off'); ?>
<?php endif; ?>

<div id="tab_set">
	<div id="tab_box">
		<a href="./">
			<ul class="<?php echo $this->_tpl_vars['tab1']; ?>
">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MD_D3FORUM_BBS; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>

<?php if ($this->_tpl_vars['topicId'] != null): ?>
		<a href="./?search&topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topicId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php elseif ($this->_tpl_vars['forumId'] != null): ?>
		<a href="./?search&forumId=<?php echo ((is_array($_tmp=$this->_tpl_vars['forumId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php elseif ($this->_tpl_vars['categoryId'] != null): ?>
		<a href="./?search&categoryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['categoryId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php else: ?>
		<a href="./?search">
<?php endif; ?>
			<ul class="<?php echo $this->_tpl_vars['tab2']; ?>
">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MD_D3FORUM_BBS_SEARCH; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>