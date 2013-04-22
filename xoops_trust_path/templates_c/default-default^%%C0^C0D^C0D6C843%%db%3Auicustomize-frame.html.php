<?php /* Smarty version 2.6.26, created on 2013-03-05 12:20:38
         compiled from db:uicustomize-frame.html */ ?>
<div id="tab_set">
	<div id="tab_box">
		<a href="./?page=text_resource" id="">
			<ul id="panetab1" class="<?php if ($this->_tpl_vars['pageConfig']['pageType'] == 'text_resource'): ?>tab_on<?php else: ?>tab_off<?php endif; ?>">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MI_UIC_TABNAME_1; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
		<a href="./?page=menu" id="" style="display:none;">
			<ul id="panetab2" class="<?php if ($this->_tpl_vars['pageConfig']['pageType'] == 'menu'): ?>tab_on<?php else: ?>tab_off<?php endif; ?>">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MI_UIC_TABNAME_2; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
		<a href="./?page=logo" id="" style="display:none;">
			<ul id="panetab3" class="<?php if ($this->_tpl_vars['pageConfig']['pageType'] == 'logo'): ?>tab_on<?php else: ?>tab_off<?php endif; ?>">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MI_UIC_TABNAME_3; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
		<a href="./?page=toppage" id="" style="display:none;">
			<ul id="panetab4" class="<?php if ($this->_tpl_vars['pageConfig']['pageType'] == 'toppage'): ?>tab_on<?php else: ?>tab_off<?php endif; ?>">
				<li class="tab_l"></li>
				<li class="tab_m"><span><?php echo @_MI_UIC_TABNAME_4; ?>
</span></li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>
<div id="contents_body">
	<div id="uicustomize-main-frame">
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['subpagetemplate'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</div>
</div>