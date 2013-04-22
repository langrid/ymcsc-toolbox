<?php /* Smarty version 2.6.26, created on 2013-03-06 06:05:16
         compiled from db:forum_main_post_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:forum_main_post_list.html', 4, false),array('modifier', 'nl2br', 'db:forum_main_post_list.html', 221, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_base_top.html", 'smarty_include_vars' => array('forumId' => $this->_tpl_vars['forum']->getId(),'categoryId' => $this->_tpl_vars['category']->getId(),'activeTab' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript">
var topicId = <?php echo $this->_tpl_vars['topic']->getId(); ?>
;
var offset = <?php echo ((is_array($_tmp=$this->_tpl_vars['offset'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
;
var limit = <?php echo ((is_array($_tmp=$this->_tpl_vars['limit'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
;
var timestamp = <?php echo ((is_array($_tmp=$this->_tpl_vars['timestamp'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
;
var results = <?php echo $this->_tpl_vars['aResults']; ?>
;
var users = [];
<?php $_from = $this->_tpl_vars['onlineUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
users.push({
	id : '<?php echo $this->_tpl_vars['item']['id']; ?>
'
});
<?php endforeach; endif; unset($_from); ?>
</script>
<input type='hidden' id='moduleId' value='forum'>
<input type='hidden' id='screenId' value='post_list'>
<div id="pull-refresh-controllers-wrapper">
	<table class="pull-refresh-controllers">
	<tr>
		<td>
			<button id="bbs-pull-refresh" class="toolbox-common-button toolbox-common-button-disabled"><?php echo @_MD_D3FORUM_COMMON_PULL_REFRESH; ?>
</button>
			<label class="bbs-pull-radio-label"><input class="bbs-pull-radio-button" name="load_type" value="auto" type="radio" /> <?php echo @_MD_D3FORUM_COMMON_PULL_AUTO_UPDATE; ?>
</label>
			<label class="bbs-pull-radio-label"><input class="bbs-pull-radio-button" name="load_type" value="manual" type="radio" checked="checked" /> <?php echo @_MD_D3FORUM_COMMON_PULL_MANUAL_UPDATE; ?>
</label>
		</td>
		<td>
	<div id="bbs-online-users-area">
				<table id="bbs-online-users-area-table" style="width: <?php echo $this->_tpl_vars['userTableWidth']; ?>
px;"><tr>
		<?php $_from = $this->_tpl_vars['onlineUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
			<td>
				<?php if ($this->_tpl_vars['item']['fullName']): ?>
					<?php $this->assign('username', $this->_tpl_vars['item']['fullName']); ?>
				<?php else: ?>
					<?php $this->assign('username', $this->_tpl_vars['item']['name']); ?>
				<?php endif; ?>
				<a target="_blank" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['item']['id']; ?>
"><img title="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" src="<?php echo $this->_tpl_vars['item']['icon']; ?>
" width="30" /></a>
			</td>
		<?php endforeach; endif; unset($_from); ?>
		</tr></table>
	</div>	</td>
	</tr>
	</table>
</div>
<div id="topic_path" style="float:left;">
	<ol>
		<li><a href="./"><?php echo @_MD_D3FORUM_RETURN_COMMUNITY_TOP; ?>
</a></li>
		<li><a href="./?categoryId=<?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['category']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
		<li><a href="./?forumId=<?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['forum']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></li>
		<li><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
	</ol>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_search_box.html", 'smarty_include_vars' => array('topicId' => $this->_tpl_vars['topic']->getId(),'forumId' => $this->_tpl_vars['forumId'],'categoryId' => $this->_tpl_vars['categoryId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="contents_title">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="19" class="title_l"></td>
			<td class="title_m"><?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
			<td width="19" class="title_r"></td>
		</tr>
	</table>
</div>
<div class="topic_title bbs-composite-descritpion-box clearfix"  style="width:100%;">
	<h2 class="bbs-composite-descritpion-area"></h2>
		<ul class="btn_set01" style="margin-bottom:0; margin-right:4px;">
		<?php if ($this->_tpl_vars['permission']->isAdmin()): ?>
			<li>
				<a href="./?page=topic-delete&topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
					<div class="btn_gray01">
						<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_DELETE_TOPIC; ?>
</span>
					</div>
				</a>
			</li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['permission']->topicEdit()): ?>
			<li>
				<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="editLinkForm">
				<input type="hidden" name="type_code" value="topic_edit" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
					<a href="#" onclick="document.editLinkForm.submit(); return false;">
						<div class="btn_blue01">
							<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_EDIT; ?>
</span>
						</div>
					</a>
				</form>
			</li>
		<?php elseif ($this->_tpl_vars['permission']->topicModify()): ?>
			<li>
				<a href="./?page=topic-modify&topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
					<div class="btn_blue01">
						<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_MODIFY_TOPIC; ?>
</span>
					</div>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div>
<div class="bbs-pager-wrapper">
<?php if ($this->_tpl_vars['pager']->getTotalPages() >= 2): ?>
<div class="page_index">
	<div class="bbs-pager">
		<ul class="clearfix" style="width: <?php echo $this->_tpl_vars['pager']->getTotalPages()*40+200; ?>
px;">
			<?php if ($this->_tpl_vars['pager']->hasPreview()): ?>
				<li><a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['pager']->getPreviewNumber(); ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
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
					<a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['item']; ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
				<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['pager']->hasNext()): ?>
				<li><a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['pager']->getNextNumber(); ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
">Next &gt;&gt;</a></li>
			<?php endif; ?>


		</ul>
	</div>
</div>
<?php endif; ?>
</div>
<div class="list_table01 bbs-post-list-add-message-wrapper">
		<table id="bbs-post-list-table" border="0" cellspacing="0" cellpadding="0">
			<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
			<?php $this->assign('user', $this->_tpl_vars['post']->getUser()); ?>
			<tr class="bbs-post-header" id="post-number-<?php echo $this->_tpl_vars['post']->getNumber(); ?>
">
								<td class="list_line01" style="padding:1px 0px; width:65%;">
					<img width="30" src="<?php echo $this->_tpl_vars['post']->getAvatar(); ?>
" style="vertical-align:middle;">
					<?php echo $this->_tpl_vars['post']->getNumber(); ?>
: <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['user']->getId(); ?>
">
					<?php echo $this->_tpl_vars['user']->getName(); ?>

					</a> (<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getOriginalLanguageName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)
								<?php echo @_MD_D3FORUM_ON; ?>

								<?php echo $this->_tpl_vars['post']->getTime(); ?>

					<?php if ($this->_tpl_vars['post']->postedFiles): ?>
						<a href="javascript:void(0)" class="DownloadFileButton" id="DownloadFileButton-<?php echo $this->_tpl_vars['post']->getId(); ?>
">
						<img src="images/attach_icon.gif" alt="<?php echo @_MD_D3FORUM_ATACCHED_FILELIST; ?>
" id="DownloadImage-<?php echo $this->_tpl_vars['post']->getId(); ?>
"  style="vertical-align:middle;"/>
						</a>
					<?php endif; ?>

					<?php if ($this->_tpl_vars['post']->isReply()): ?>
						&nbsp;&nbsp;
						<?php if ($this->_tpl_vars['post']->getReplyPage($this->_tpl_vars['view']) == $this->_tpl_vars['pager']->getCurrentPage()): ?>
							<a href="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
#post-number-<?php echo $this->_tpl_vars['post']->getReplyNumber(); ?>
">
						<?php else: ?>
							<a href="?topicId=<?php echo $this->_tpl_vars['post']->getTopicId(); ?>
&page=<?php echo $this->_tpl_vars['post']->getReplyPage($this->_tpl_vars['view']); ?>
#post-number-<?php echo $this->_tpl_vars['post']->getReplyNumber(); ?>
">
						<?php endif; ?>
						&gt;&gt; <?php echo $this->_tpl_vars['post']->getReplyNumber(); ?>
</a>
					<?php endif; ?>
					<span style="color: #f00;" id="bbs-update-<?php echo $this->_tpl_vars['post']->getId(); ?>
"></span>
				</td>

				<td class="list_line01" style="padding:1px 0px;width:35%;">
					<ul class="btn_set01"style="margin-bottom: 0;">
						<?php if ($this->_tpl_vars['post']->canDelete()): ?>
									<li>
									<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=post-delete&postId=<?php echo $this->_tpl_vars['post']->getId(); ?>
">
											<div class="btn_gray01">
													<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_POSTDELETE; ?>
</span>
											</div>
										</a>
										</li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['post']->canEdit()): ?>
							<li>
								<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="editMessageLinkForm<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
								<input type="hidden" name="type_code" value="post_edit" />
								<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
									<a href="#" onclick="document.editMessageLinkForm<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.submit(); return false;">
										<div class="btn_blue01">
											<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_POSTEDIT; ?>
</span>
										</div>
									</a>
								</form>
							</li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['post']->canModify()): ?>
						<li>
						<a href="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=post-modify&postId=<?php echo $this->_tpl_vars['post']->getId(); ?>
">
													<div class="btn_blue01">
															<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_POST_TRANSLATION_MODIFY; ?>
</span>
													</div>
													</a>
													</li>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['post']->canReply()): ?>
											<li>
								<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="replyMessageLinkForm<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
								<input type="hidden" name="type_code" value="post_reply" />
								<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
									<a href="#" onclick="document.replyMessageLinkForm<?php echo ((is_array($_tmp=$this->_tpl_vars['post']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
.submit(); return false;">
										<div class="btn_blue01">
											<span style="text-align:center; width:60px; padding: 2px 0;"><?php echo @_MD_D3FORUM_POSTREPLY; ?>
</span>
										</div>
									</a>
								</form>

																							</li>
						<?php endif; ?>
									</ul>
				</td>
					</tr>
			<tr id="post-body-number-<?php echo $this->_tpl_vars['post']->getNumber(); ?>
">
				<td colspan="2">
					<?php if ($this->_tpl_vars['post']->isDeleted() || $this->_tpl_vars['post']->isNotTranslated() == false): ?>
						<span class="bbs-invalid-post"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getBody())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</span>
					<?php else: ?>
						<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['post']->getBody())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

					<?php endif; ?>
				</td>
			</tr>

			<?php if ($this->_tpl_vars['post']->tags): ?>
			<tr>
				<td colspan="2" class="bbs-post-tag-row">
					<ul class="clearfix">
					<?php $_from = $this->_tpl_vars['post']->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag']):
?>
						<li class="clearfix" style="float:left;">
						<span><?php echo $this->_tpl_vars['tag']['name']; ?>
</span>:
						<a href="./?search_result&topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&tag[<?php echo ((is_array($_tmp=$this->_tpl_vars['tag']['tag_set_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
]=<?php echo ((is_array($_tmp=$this->_tpl_vars['tag']['tag_id'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"><?php echo $this->_tpl_vars['tag']['word']; ?>
</a>
						</li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</td>
			</tr>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		</table>
</div>
<div class="bbs-pager-wrapper">
<?php if ($this->_tpl_vars['pager']->getTotalPages() >= 2): ?>
<div class="page_index" style="clear: both;">
	<div class="bbs-pager" style="padding-top: 15px;">
		<ul class="clearfix" style="width: <?php echo $this->_tpl_vars['pager']->getTotalPages()*40+200; ?>
px;">
			<?php if ($this->_tpl_vars['pager']->hasPreview()): ?>
				<li><a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['pager']->getPreviewNumber(); ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
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
					<a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['item']; ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
"><?php echo $this->_tpl_vars['item']; ?>
</a>
				<?php endif; ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['pager']->hasNext()): ?>
				<li><a href="./?topicId=<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&page=<?php echo $this->_tpl_vars['pager']->getNextNumber(); ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
">Next &gt;&gt;</a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>
<?php endif; ?>
</div>
<div class="page_num03">
		<a href="#"><?php echo @_MD_D3FORUM_RETURN_PAGE_TOP; ?>
</a>
</div>
<div class="list_table02" style="width: 200px;">
				<form action="<?php echo $this->_tpl_vars['mod_url']; ?>
/?page=preview" method="post" name="createMessageLinkForm">
			<input type="hidden" name="topicId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<table width="100%" border="0" cellspacing="0" cellpadding="0" >
					<tr>
						<td style="border:0; background:#fff;">
								<textarea style="display:none;" name="message" cols="60" rows="6" id="source-text-area"></textarea>
					<div id="result-text-area">
					</div>
				</td>
					</tr>
			</table>
<div class="clearfix">
<div id="bbs-splash">
	<span style="display: none;">
		<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/loading.gif" /> <?php echo @_MD_D3FORUM_NOW_TRANSLATING; ?>

	</span>
</div>
			<ul class="btn_set01" style="float: left !important; margin-bottom: 0;">
										<li>
				<input type="hidden" name="type_code" value="post_create" />
				<input type="hidden" name="id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['topic']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
				<button style="margin-bottom: -50px; position: relative; top: -50px;" class="bbs-common-button-component" onclick="document.createMessageLinkForm.submit(); return false;">
				<?php echo @_MD_D3FORUM_COMMON_NEW_POST; ?>

				</button>
							 </li>
</ul>
</div>
</form>
</div>
</div>
<script type="text/javascript">
	var FileListHash={
		<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['listLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['listLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['post']):
        $this->_foreach['listLoop']['iteration']++;
?>
			<?php echo $this->_tpl_vars['post']->getId(); ?>
:[
			<?php unset($this->_sections['dataLoop']);
$this->_sections['dataLoop']['name'] = 'dataLoop';
$this->_sections['dataLoop']['loop'] = is_array($_loop=$this->_tpl_vars['post']->postedFiles) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dataLoop']['show'] = true;
$this->_sections['dataLoop']['max'] = $this->_sections['dataLoop']['loop'];
$this->_sections['dataLoop']['step'] = 1;
$this->_sections['dataLoop']['start'] = $this->_sections['dataLoop']['step'] > 0 ? 0 : $this->_sections['dataLoop']['loop']-1;
if ($this->_sections['dataLoop']['show']) {
    $this->_sections['dataLoop']['total'] = $this->_sections['dataLoop']['loop'];
    if ($this->_sections['dataLoop']['total'] == 0)
        $this->_sections['dataLoop']['show'] = false;
} else
    $this->_sections['dataLoop']['total'] = 0;
if ($this->_sections['dataLoop']['show']):

            for ($this->_sections['dataLoop']['index'] = $this->_sections['dataLoop']['start'], $this->_sections['dataLoop']['iteration'] = 1;
                 $this->_sections['dataLoop']['iteration'] <= $this->_sections['dataLoop']['total'];
                 $this->_sections['dataLoop']['index'] += $this->_sections['dataLoop']['step'], $this->_sections['dataLoop']['iteration']++):
$this->_sections['dataLoop']['rownum'] = $this->_sections['dataLoop']['iteration'];
$this->_sections['dataLoop']['index_prev'] = $this->_sections['dataLoop']['index'] - $this->_sections['dataLoop']['step'];
$this->_sections['dataLoop']['index_next'] = $this->_sections['dataLoop']['index'] + $this->_sections['dataLoop']['step'];
$this->_sections['dataLoop']['first']      = ($this->_sections['dataLoop']['iteration'] == 1);
$this->_sections['dataLoop']['last']       = ($this->_sections['dataLoop']['iteration'] == $this->_sections['dataLoop']['total']);
?>

						{
							ID:"<?php echo $this->_tpl_vars['post']->postedFiles[$this->_sections['dataLoop']['index']]['id']; ?>
",
							FileName:"<?php echo $this->_tpl_vars['post']->postedFiles[$this->_sections['dataLoop']['index']]['file_name']; ?>
",
							FileSize:"<?php echo $this->_tpl_vars['post']->postedFiles[$this->_sections['dataLoop']['index']]['file_size']; ?>
"
						<?php if ($this->_sections['dataLoop']['last']): ?>
						}
						<?php else: ?>
						},
						<?php endif; ?>
			<?php endfor; endif; ?>

			<?php if (($this->_foreach['listLoop']['iteration'] == $this->_foreach['listLoop']['total'])): ?>
				]
			<?php else: ?>
				],
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	};
</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:".($this->_tpl_vars['mydirname'])."_base_footer.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>