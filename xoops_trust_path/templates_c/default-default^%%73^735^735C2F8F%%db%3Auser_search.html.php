<?php /* Smarty version 2.6.26, created on 2013-03-06 06:42:47
         compiled from db:user_search.html */ ?>
<div id="load-dictionary-table-area">
	<div id="load-dictionary-table-wrapper" style="">
		<table>
			<tr>
				<td>
					<table id="load-dictionary-table" class="body_title" >
						<tr>
							<td  class="searchResultTitle" style="text-align:center;" >
								<div>
									<?php echo @_MD_USER_LANG_SEARCH_KEYWORD; ?>

								</div>
							</td>
							<td class="searchInput"><input type="text" id="txtSearchWord" size="60" /></td>
							<td class="searchResultTitle" style="text-align:center;">
									<?php echo @_MD_USER_LANG_SEARCH_CONDITION; ?>

							</td>
							<td class="searchInput">
								<SELECT id="selectSearchType" >
									<option value="partial"><?php echo @_MD_USER_LANG_PARTIAL; ?>
</option>
									<option value="prefix"><?php echo @_MD_USER_LANG_PREFIX; ?>
</option>
									<option value="suffix"><?php echo @_MD_USER_LANG_SUFFIX; ?>
</option>
									<option value="complete"><?php echo @_MD_USER_LANG_COMPLETE; ?>
</option>
								</SELECT>
							</td>
						</tr>
					</table>
				</td>
				<td>
					<table class="btnTable">
						<tbody>
							<tr>
								<td class="btnTable">
									<span onclick="SearchUser()">
										<div class="btn_search_user">
											<span id="expote_btn" ><?php echo @_MD_USER_LANG_SEARCH; ?>
</span>
										</div>
									</span>
								</td>
								<td class="btnTable">
									<span onclick="ClearValue()">
										<div class="btn_search_user">
											<span id="clear_btn" ><?php echo @_MD_USER_LANG_CLEAR_VALUE; ?>
</span>
										</div>
									</span>
								</td>
								<td>
									<div id="containerSearchImg" style="visibility:hidden"><img  src="../images/loading.gif" /></div>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>