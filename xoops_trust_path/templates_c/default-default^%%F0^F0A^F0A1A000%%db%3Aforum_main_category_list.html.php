<?php /* Smarty version 2.6.26, created on 2013-03-06 06:50:35
         compiled from db:forum_main_category_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:forum_main_category_list.html', 114, false),array('modifier', 'mb_substr', 'db:forum_main_category_list.html', 122, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_base_top.html", 'smarty_include_vars' => array('titles' => $this->_tpl_vars['titles'],'forumId' => $this->_tpl_vars['forumId'],'categoryId' => $this->_tpl_vars['categoryId'],'activeTab' => 2)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<input type='hidden' id='moduleId' value='forum'>
<input type='hidden' id='screenId' value='category_list'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_posted_notice_box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_jump_box.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_search_box.html", 'smarty_include_vars' => array('forumId' => $this->_tpl_vars['forumId'],'categoryId' => $this->_tpl_vars['categoryId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="contents_title">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="19" class="title_l"></td>
			<td class="title_m"><?php echo @_MD_D3FORUM_BBS_TOP; ?>
</td>
			<td width="19" class="title_r"></td>
		</tr>
	</table>
</div>
<?php if ($this->_tpl_vars['permission']->categoryCreate()): ?>
	<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="createLinkForm">
	<input type="hidden" name="type_code" value="category_create" />
	<p class="bbs-create-composite-link">
		<a href="#" onclick="document.createLinkForm.submit(); return false;">
			<?php echo @_MD_D3FORUM_CREATE_A_NEW_CATEGORY; ?>

		</a>
	</p>
	</form>
<?php endif; ?>
<?php $this->assign('myurl', ($this->_tpl_vars['mod_url'])."/?lang=".($this->_tpl_vars['selectedLanguageTag'])); ?>

<?php if ($this->_tpl_vars['pager']->getTotalPages() >= 2): ?>
<div class="page_index">
	<div class="bbs-pager">
		<ul class="clearfix" style="width: <?php echo $this->_tpl_vars['pager']->getTotalPages()*40+200; ?>
px;">
			<?php if ($this->_tpl_vars['pager']->hasPreview()): ?>
				<li><a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getPreviewNumber(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
">&lt;&lt; Previous</a></li>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['pager']->toArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<li>
				<?php if ($this->_tpl_vars['item'] == 'CURRENT'): ?>
					<span><?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
</span>
				<?php elseif ($this->_tpl_vars['item'] == 'SKIP'): ?>
					<span>...</span>
				<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['item']; ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
				<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['pager']->hasNext()): ?>
				<li><a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getNextNumber(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
">Next &gt;&gt;</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<?php endif; ?>

<table class="body_title list-table">
	<tr class="table_title_bg">
		<td class="list-composite-title">
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(1); ?>
">
			<?php echo @_MD_D3FORUM_CATEGORY; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(1); ?>

		</td>
		<td>
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(2); ?>
">
			<?php echo @_MD_D3FORUM_DESCRIPTION; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(2); ?>

		</td>
		<td class="list-composite-entries">
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(3); ?>
">
			<?php echo @_MD_D3FORUM_TOTALFORUMSCOUNT; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(3); ?>

		</td>
		<td class="list-composite-entries">
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(4); ?>
">
			<?php echo @_MD_D3FORUM_TOTALTOPICSCOUNT; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(4); ?>

		</td>
		<td class="list-composite-entries">
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(5); ?>
">
			<?php echo @_MD_D3FORUM_TOTALPOSTSCOUNT; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(5); ?>

		</td>
		<td class="list-latest-post">
			<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(6); ?>
">
			<?php echo @_MD_D3FORUM_LASTPOST; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(6); ?>

		</td>
	</tr>
	<?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
		<?php $this->assign('params', $this->_tpl_vars['category']->getParams()); ?>
		<tr>
			<td class="list-composite-title">
			<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/?categoryId='; ?><?php echo $this->_tpl_vars['category']->getId(); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>'; ?>

			<?php if ($this->_tpl_vars['category']->hasNewPost()): ?>
	        	<span class="bbs-new-mark"><?php echo @_MD_D3FORUM_NEW_MARK; ?>
</span>
	        <?php endif; ?>
			</td>
			<td>
			<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['category']->getDescription())) ? $this->_run_mod_handler('mb_substr', true, $_tmp, 0, 300, "utf-8") : mb_substr($_tmp, 0, 300, "utf-8")))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

			<?php if (mb_strlen ( $this->_tpl_vars['category']->getDescription() , "utf-8" ) > 301): ?>
				...
			<?php endif; ?>
			</td>
			<td class="list-composite-entries"><?php echo $this->_tpl_vars['params']['cat_forums_count']; ?>
</td>
			<td class="list-composite-entries"><?php echo $this->_tpl_vars['params']['cat_topics_count']; ?>
</td>
			<td class="list-composite-entries"><?php echo $this->_tpl_vars['params']['cat_posts_count']; ?>
</td>
			<td class="list-latest-post">
				<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['params']['uid']; ?>
"><?php echo $this->_tpl_vars['params']['uname']; ?>
</a><br />
				<?php echo $this->_tpl_vars['params']['cat_last_post_time_f']; ?>

			</td>
		</tr>
	<?php endforeach; endif; unset($_from); ?>
</table>

<?php if ($this->_tpl_vars['pager']->getTotalPages() >= 2): ?>
<div class="page_index">
	<div class="bbs-pager">
		<ul class="clearfix" style="width: <?php echo $this->_tpl_vars['pager']->getTotalPages()*40+200; ?>
px;">
			<?php if ($this->_tpl_vars['pager']->hasPreview()): ?>
				<li><a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getPreviewNumber(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
">&lt;&lt; Previous</a></li>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['pager']->toArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
				<li>
				<?php if ($this->_tpl_vars['item'] == 'CURRENT'): ?>
					<span><?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
</span>
				<?php elseif ($this->_tpl_vars['item'] == 'SKIP'): ?>
					<span>...</span>
				<?php else: ?>
					<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['item']; ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
				<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['pager']->hasNext()): ?>
				<li><a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getNextNumber(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getCurrentKey(); ?>
">Next &gt;&gt;</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_base_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>