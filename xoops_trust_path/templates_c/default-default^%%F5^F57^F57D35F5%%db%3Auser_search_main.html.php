<?php /* Smarty version 2.6.26, created on 2013-03-06 06:42:47
         compiled from db:user_search_main.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:user_search_main.html', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:user_php2js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<a name="top"></a>
<div id="tab_set">
	<div id="tab_box">
		<a href="#">
			<ul id="panetab1" class="tab_on">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MD_USER_LANG_USER_SEARCH; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>


<div id="contents_body" class="yui-skin-sam">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:user_search.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

			<div style="">
				<div id="result_title" style=""><?php echo @_MD_USER_LANG_USER_SEARCH; ?>
</div>
				<div id="load-dictionary-table-wrapper" style="">
					<div id="containerTableResult" class="load-resource-body-wrapper">


						<table id="userList-table" class="load-resource-body-table body_title" cellspacing="0"	cellpadding="0" border="0" width="820">
							<thead id="userList-head">
								<tr class='searchResultTitle'>
									<td class="tableBlankCell"	style="border-width:0px;"></td>
									<td class="nocase" style="text-align: center;">
											<?php echo @_MD_USER_LANG_NICKNAME; ?>

									</td>
									<td class="nocase" style="text-align: center;">
										<?php echo @_MD_USER_LANG_NAME; ?>

									</td>
								<?php if ($this->_tpl_vars['title']): ?>
									<?php $_from = $this->_tpl_vars['title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['titleLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['titleLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['titleID'] => $this->_tpl_vars['t']):
        $this->_foreach['titleLoop']['iteration']++;
?>
										<td  style="text-align: center;" id="titleTD<?php echo ($this->_foreach['titleLoop']['iteration']-1); ?>
" class="nocase"><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
									<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
								</tr>
							</thead>

							<tbody id="userList-body">
							<?php $_from = $this->_tpl_vars['userData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['userDataLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['userDataLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['u']):
        $this->_foreach['userDataLoop']['iteration']++;
?>
							<tr class="userDataTR<?php echo ($this->_foreach['userDataLoop']['iteration']-1); ?>
">
							<td  class="userSearchTD" width="20px" ><?php echo ($this->_foreach['userDataLoop']['iteration']-1)+1; ?>
</td>
									<td  class="userSearchTD" ><a  id="uname<?php echo ($this->_foreach['userDataLoop']['iteration']-1); ?>
" href="../../../userinfo.php?uid=<?php echo $this->_tpl_vars['u']['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['uname'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></td>
									<td  class="userSearchTD"  id="name<?php echo ($this->_foreach['userData']['iteration']-1); ?>
" ><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<?php if ($this->_tpl_vars['title']): ?>
									<?php $_from = $this->_tpl_vars['u']['definitions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['defs']):
?>
									<?php $this->assign('k', $this->_tpl_vars['defs']['field_name']); ?>
									<td  class="userSearchTD"><?php echo ((is_array($_tmp=$this->_tpl_vars['u']['values'][$this->_tpl_vars['k']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
									<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
								</tr>
							<?php endforeach; endif; unset($_from); ?>

							</tbody>
						</table>

						<a href="#top"><?php echo @_MD_USER_LANG_TO_TOP; ?>
</a>


					</div>
				</div>
			</div>

		</div>