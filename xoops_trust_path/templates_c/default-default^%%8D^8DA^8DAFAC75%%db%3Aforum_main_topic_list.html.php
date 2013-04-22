<?php /* Smarty version 2.6.26, created on 2013-03-06 07:07:56
         compiled from db:forum_main_topic_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:forum_main_topic_list.html', 8, false),array('modifier', 'nl2br', 'db:forum_main_topic_list.html', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_base_top.html", 'smarty_include_vars' => array('forums' => $this->_tpl_vars['forums'],'categories' => $this->_tpl_vars['categories'],'forumId' => $this->_tpl_vars['forum']->getId(),'categoryId' => $this->_tpl_vars['category']->getId(),'activeTab' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('forumId', $this->_tpl_vars['forum']->getId()); ?>
<input type='hidden' id='moduleId' value='forum'>
<input type='hidden' id='screenId' value='topic_list'>
<div id="topic_path" style="float:left;">
	<ol>
		<li><a href="./"><?php echo @_MD_D3FORUM_RETURN_COMMUNITY_TOP; ?>
</a></li>
		<li><a href="./?categoryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
	</ol>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_search_box.html", 'smarty_include_vars' => array('forumId' => $this->_tpl_vars['forumId'],'categoryId' => $this->_tpl_vars['categoryId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="contents_title">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="19" class="title_l"></td>
			<td class="title_m"><?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td width="19" class="title_r"></td>
		</tr>
	</table>
</div>
<div class="topic_title bbs-composite-descritpion-box clearfix">
	<h2 class="bbs-composite-descritpion-area"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['forum']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</h2>
		<ul class="btn_set01" style="margin-bottom: 0;">
		<?php if ($this->_tpl_vars['permission']->forumDelete()): ?>
			<li>
				<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=forum-delete&forumId=<?php echo $this->_tpl_vars['forumId']; ?>
">
					<div class="btn_gray01">
						<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_DELETE; ?>
</span>
					</div>
				</a>
			</li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['permission']->forumEdit()): ?>
			<li>
				<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="editLinkForm">
				<input type="hidden" name="type_code" value="forum_edit" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<a href="#" onclick="document.editLinkForm.submit(); return false;">
						<div class="btn_blue01">
							<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_EDIT; ?>
</span>
						</div>
					</a>
				</form>
						</li>
		<?php elseif ($this->_tpl_vars['permission']->forumModify()): ?>
			<li>
				<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=forum-modify&forumId=<?php echo $this->_tpl_vars['forumId']; ?>
">
					<div class="btn_blue01">
						<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_MODIFY; ?>
</span>
					</div>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
	<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="createLinkForm">
	<input type="hidden" name="type_code" value="topic_create" />
	<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<p class="bbs-create-composite-link">
		<a href="#" onclick="document.createLinkForm.submit(); return false;">
			<?php echo @_MD_D3FORUM_CREATE_A_NEW_TOPIC; ?>

		</a>
	</p>
	</form>
	<?php $this->assign('myurl', ($this->_tpl_vars['mod_url'])."/?forumId=".($this->_tpl_vars['forumId'])."&lang=".($this->_tpl_vars['selectedLanguageTag'])); ?>
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
        <td>
        	<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(1); ?>
">
        	<?php echo @_MD_D3FORUM_TOPICTITLE; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(1); ?>

        </td>
        <td class="list-composite-entries">
        	<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(2); ?>
">
        	<?php echo @_MD_D3FORUM_TOTALPOSTSCOUNT; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(2); ?>

        </td>
        <td class="list-latest-post">
        	<a href="<?php echo $this->_tpl_vars['myurl']; ?>
&page=<?php echo $this->_tpl_vars['pager']->getCurrentPage(); ?>
&sortkey=<?php echo $this->_tpl_vars['sortheader']->getNextKey(3); ?>
">
        	<?php echo @_MD_D3FORUM_LASTPOST; ?>

			</a>
			<?php echo $this->_tpl_vars['sortheader']->getLabel(3); ?>

        </td>
    </tr>
	<?php $_from = $this->_tpl_vars['topics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['topic']):
?>
		<?php $this->assign('params', $this->_tpl_vars['topic']->getParams()); ?>
	    <tr>
	        <td>
	        	<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['mod_url']; ?><?php echo '/?topicId='; ?><?php echo $this->_tpl_vars['topic']->getId(); ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a>'; ?><?php if ($this->_tpl_vars['topic']->hasNewPost()): ?><?php echo '<span class="bbs-new-mark">&nbsp;'; ?><?php echo @_MD_D3FORUM_NEW_MARK; ?><?php echo '</span>'; ?><?php endif; ?><?php echo ''; ?>

	        </td>
	        <td class="list-composite-entries"><?php echo $this->_tpl_vars['params']['topic_posts_count']; ?>
</td>
	        <td class="list-latest-post">
		        <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['params']['uid']; ?>
"><?php echo $this->_tpl_vars['params']['uname']; ?>
</a><br />
		        <?php echo $this->_tpl_vars['params']['topic_last_post_time_f']; ?>

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