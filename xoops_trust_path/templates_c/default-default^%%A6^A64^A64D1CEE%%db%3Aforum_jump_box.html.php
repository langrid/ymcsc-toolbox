<?php /* Smarty version 2.6.26, created on 2013-03-06 06:50:35
         compiled from db:forum_jump_box.html */ ?>
<div id="jump_box" class="clearfix">
<script type="text/javascript">
var JumpBoxConst = {
	Text : {
	},
	Resource : <?php echo $this->_tpl_vars['jumpBoxResource']; ?>

};
</script>
<form name="jump_box_form" id="jump_box_form" action="./?page=preview" method="post">
<input type="hidden" name="id" id="id" />
<input type="hidden" name="type_code" id="type_code" />
	<ul>
		<li>
			<select id="jumpbox_category"></select>
		</li>
		<li id="jumpbox_forum_wrapper">
			<span>＞</span><select id="jumpbox_forum"></select>
		</li>
		<li id="jumpbox_topic_wrapper">
			<span>＞</span><select id="jumpbox_topic"></select>
		</li>
		<li>
			<input type="button" name="jumpbox_button" id="jumpbox_button" class="btn_blue01" value="<?php echo @_MD_D3FORUM_JUMPBOX_BUTTON; ?>
" />
		</li>
	</ul>
</form>
</div>