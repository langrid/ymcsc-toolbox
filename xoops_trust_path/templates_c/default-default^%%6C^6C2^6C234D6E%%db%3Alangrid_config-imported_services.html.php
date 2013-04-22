<?php /* Smarty version 2.6.26, created on 2013-03-05 03:49:31
         compiled from db:langrid_config-imported_services.html */ ?>
<style type="text/css">
</style>
<div id="tab_set">
	<div id="tab_box">
		<a href="javascript:void(0);" onclick="return false;">
			<ul class="tab_on">
				<li class="tab_l">
				</li>
				<li class="tab_m">
					<span><?php echo @_MD_LANGRID_IMPORTED_SERVICES; ?>
</span>
				</li>
				<li class="tab_r">
				</li>
			</ul>
		</a>
	</div>
</div>
<div id="contents_body">
<div id="langrid-imported-services-main">
	<div class="langrid-imported-services-button-area clearfix">
		<div>
			<button class="langrid-common-button langrid-common-button-disabled" <?php if (! $this->_tpl_vars['userIsAdmin']): ?>style="display: none;"<?php endif; ?> id="langrid-imported-services-add-service-button"><?php echo @_MD_LANGRID_IMPORTED_SERVICES_ADD_SERVICE; ?>
</button>
		</div>
	</div>
	<div id="langrid-imported-services-table-wrapper">
		<img src="./images/imported_service/ajax.gif" />
	</div>
	<div class="langrid-imported-services-button-area clearfix">
		<p id="langrid-imported-services-status-message-area">
		</p>
		<div>
			<button class="langrid-common-button langrid-common-button-disabled" <?php if (! $this->_tpl_vars['userIsAdmin']): ?>style="display: none;"<?php endif; ?> id="langrid-imported-services-edit-service-button"><?php echo @_MD_LANGRID_IMPORTED_SERVICES_EDIT_SERVICE; ?>
</button>
			<button class="langrid-common-button langrid-common-button-disabled" <?php if (! $this->_tpl_vars['userIsAdmin']): ?>style="display: none;"<?php endif; ?> id="langrid-imported-services-remove-service-button"><?php echo @_MD_LANGRID_IMPORTED_SERVICES_REMOVE_SERVICE; ?>
</button>
		</div>
	</div>
</div>
</div>