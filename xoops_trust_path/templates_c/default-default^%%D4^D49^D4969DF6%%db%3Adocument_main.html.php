<?php /* Smarty version 2.6.26, created on 2013-02-20 12:07:29
         compiled from db:document_main.html */ ?>
<!--[if IE 7 ]>
<style type="text/css">
#qt {
	position: relative;
	top: -15px;
}
object {
	position: relative;
	top: -10px;
}
</style>
<![endif]-->
<!-- 
<script type="text/javascript" src="http://fbug.googlecode.com/svn/lite/branches/firebug1.4/content/firebug-lite-dev.js"></script>
-->
<script type="text/javascript">
var haveqt = false;
function haveQuickTime() {
	return haveqt;
}
</script>
<script language="VBScript">
On Error Resume Next
Set theObject = CreateObject("QuickTimeCheckObject.QuickTimeCheck.1")
On Error goto 0
If IsObject(theObject) Then
	If theObject.IsQuickTimeAvailable(0) Then
		haveqt = true
	End If
End If
</script>
<script type="text/javascript">
if (navigator.plugins) {
	for (i=0; i < navigator.plugins.length; i++ ) {
		if (navigator.plugins[i].name.indexOf("QuickTime") >= 0) {
			haveqt = true;
		}
	}
}
if ((navigator.appVersion.indexOf("Mac") > 0)
	&& (navigator.appName.substring(0,9) == "Microsoft")
	&& (parseInt(navigator.appVersion) < 5) ) {
	haveqt = true;
}
</script>
<script type="text/javascript">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:document_php2js.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</script>
<?php echo $this->_tpl_vars['revision']; ?>

<div id="tab_set">
	<div id="tab_box">
		<a href="#">
			<ul class="tab_on">
				<li class="tab_l"></li>
				<li class="tab_m">
					<span><?php echo @_MI_DOCUMENT_TOOL_NAME; ?>
</span>
				</li>
				<li class="tab_r"></li>
			</ul>
		</a>
	</div>
</div>

<input type='hidden' id='moduleId' value='document'>
<input type='hidden' id='screenId' value='Translation'>

<div id="contents_body" class="yui-skin-sam">
	<table id="translation-workspace-table" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th width="40%">
				<div class="title_bg02 editor-head">
					<h2><?php echo @_MI_DOCUMENT_TOOL_TRANSLATION_FROM; ?>
:&nbsp;<span id="from-language"><?php echo $this->_tpl_vars['languages']['source']['default']['name']; ?>
</span></h2>
					<ul style='width:120px;'>
						<li>
							<a href="#" onclick="return false;" id='source-editor-font-resize-small'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_small.jpg" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='source-editor-font-resize-large'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_large.jpg" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='source-editor-resize-small'>
								<img id="source-editor-reduction-button" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_smaller.gif" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='source-editor-resize-large'>
								<img id="source-editor-expansion-button" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_larger.gif" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
					</ul>
				</div>
			</th>
			<td rowspan="2" align="center" valign="top" width="170px" style="text-align:center;">
				<br/>
				<div class="clearfix" align="center">
				<!-- <div class="clearfix" style="width:169px; margin-left:auto; margin-right:auto;">-->
					<select style="width: 70px;" id="sourceLang">
					 <?php echo $this->_tpl_vars['languages']['source']['tags']; ?>

					</select>
					&nbsp;&gt;&nbsp;
					<select style="width: 70px;" id="targetLang">
					 <?php echo $this->_tpl_vars['languages']['target']['tags']; ?>

					</select>
					<div class="center-area-item clearfix">
						<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/icon_next01.gif" alt="" width="33" height="26" />
					</div>
					<div class="center-area-item clearfix">
						<div id='translate-button-area'>
							<a id="translate-button" href="#" onclick="return false;">
								<span class="btn_blue01">
										<?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE; ?>

								</span>
							</a>
							<a id="cancel-button" style="display: none;" href="#" onclick="return false;">
								<span class="btn_blue01">
										<?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE_CANCEL; ?>

								</span>
							</a>
						</div>
					</div>
					<div class="center-area-item clearfix">
						<input id="rich-checkbox" type="checkbox" name="rich" />
						<label><?php echo @_MI_DOCUMENT_RICH; ?>
</label>
					</div>
					<div class="center-area-item clearfix" style="margin-top:2px;">
						<input id="lite-checkbox" type="checkbox" name="lite" />
						<label><?php echo @_MI_DOCUMENT_LITE; ?>
</label>
					</div>
					<div class="center-area-item clearfix" style="margin-top:22px;">
						<div><?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATION_TIME; ?>
: <span id="time">0</span> sec.</div>
					</div>
					<div class="center-area-item clearfix">
						<div id='clear-button-area'>
							<a id="clear-button" href="#" onclick="return false;">
								<span class="btn_blue01">
										<?php echo @_MI_DOCUMENT_TOOL_BUTTON_CLEAR; ?>

								</span>
							</a>
						</div>
					</div>
				</div>
			</td>
			<th width="40%">
				<div class="title_bg02 editor-head">
					<h2><?php echo @_MI_DOCUMENT_TOOL_TRANSLATION_TO; ?>
:&nbsp;<span id="to-language"><?php echo $this->_tpl_vars['languages']['target']['default']['name']; ?>
</span></h2>
					<ul style='width:120px;'>
						<li>
							<a href="#" onclick="return false;" id='target-editor-font-resize-small'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_small.jpg" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='target-editor-font-resize-large'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_large.jpg" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='target-editor-resize-small'>
								<img id="target-editor-reduction-button" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_smaller.gif" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='target-editor-resize-large'>
								<img id="target-editor-expansion-button" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_larger.gif" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
					</ul>
				</div>
			</th>
		</tr>
		<tr>
			<td valign="top">
				<textarea id="original-textarea" name="original-textarea"></textarea>
			</td>
			<td valign="top">
				<textarea id="translation-textarea" name="translation-textarea"></textarea>
				<!-- div id="translation-textarea"></div -->
			</td>
		</tr>
		<tr>
			<td height="50" valign="top">
				<span style="display: none;" id="parsing">
					<img src="img/loading.gif" />&nbsp;
					<?php echo @_MI_DOCUMENT_TOOL_TRANSLATION_PARSE_TEXT; ?>

				</span>
			</td>
			<td height="50">
				<span style="text-align:center;">
					<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/icon_next02.gif" alt="" width="33" height="32" />
				</span>
			</td>
			<td height="50" valign="top">
				<span style="display: none;" id="translating">
					<img src="img/loading.gif" />&nbsp;
					<span id="translatingMessage"><?php echo @_MI_DOCUMENT_TOOL_TRANSLATION_DOING; ?>
</span>
					<span id="cancelMessage" style="display:none;"><?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE_CANCEL_DOING; ?>
</span>
					&nbsp;"<span id="traslatingSentence"></span>"
				</span>
				<span id="translate-parsing" style="display: none;"><img src="img/loading.gif" />&nbsp;<?php echo @_MI_DOCUMENT_TOOL_TRANSLATION_PARSE_TEXT; ?>
</span>
				
				<span id="qt-message" style="display:none;"><?php echo @_MI_DOCUMENT_JS_UNABLE_QT_PLAYER; ?>
</span>
				<div id="qt" style="display: none;">
					<table width="100%"><tr><td>
					<div id="player-wrap">
					<!-- <embed postdomevents="true" enablejavascript="true" autoplay="false" name="voice" id="qt-player" autostart="false" loop="false" height="16" width="100%">
						<noembed>
							<?php echo @_MI_DOCUMENT_JS_UNABLE_QT_PLAYER; ?>

						</noembed>
					</embed>-->
					</div>
					</td><td width="100">
					<div align="right">
						<a href="#" onclick="return false;" id="qt-prev"><img src="./img/arrow-l.png" /></a>
						<span id="qt-index"></span>
						<a href="#" onclick="return false;" id="qt-next"><img src="./img/arrow-r.png" /></a>
						<a href="#" onclick="return false;" id="qt-save"><img src="./img/save.png" /></a>
					</div>
					</td></tr></table>
				</div>
				<div id="qt-save-dialog"></div>
			</td>
		</tr>
		<tr>
			<th>
				<div class="title_bg02 editor-head">
					<h2><?php echo @_MI_DOCUMENT_TOOL_BACKTRANSLATION_NAME; ?>
:&nbsp;<span id="backtranslation-head"><?php echo $this->_tpl_vars['languages']['source']['default']['name']; ?>
</span></h2>
					<ul style='width:120px;'>
						<li>
							<a href="#" onclick="return false;" id='backtarget-editor-font-resize-small'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_small.jpg" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='backtarget-editor-font-resize-large'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/font_large.jpg" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='backtarget-editor-resize-small'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_smaller.gif" alt="textarea_smaller" width="22" height="21" />
							</a>
						</li>
						<li>
							<a href="#" onclick="return false;" id='backtarget-editor-resize-large'>
								<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
/img/textarea_larger.gif" alt="textarea_larger" width="22" height="21" />
							</a>
						</li>
					</ul>
				</div>
			</th>
			<td valign="top" rowspan="2">
				<div id='back-translate-button-area'>
					<a id="back-translate-button" href="#" onclick="return false;">
						<span class="btn_blue01">
								<?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE; ?>

						</span>
					</a>
					<a id="back-translate-cancel-button" style="display: none;" href="#" onclick="return false;">
						<span class="btn_blue01">
								<?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE_CANCEL; ?>

						</span>
					</a>
				</div>
				<br/>
				<div><?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATION_TIME; ?>
: <span id="back-translate-time">0</span> sec.</div>
			</td>
			<th>
			</th>
		</tr>
		<tr>
			<td valign="top">
				<textarea id="backtranslation-textarea" name="backtranslation-textarea"></textarea>
			</td>
			<td valign="top">
			</td>
		</tr>
		<tr>
			<td height="50" valign="top">
				<span style="display: none;" id="backtranslating">
					<img src="img/loading.gif" />&nbsp;
					<span id="backtranslatingMessage"><?php echo @_MI_DOCUMENT_TOOL_BACKTRANSLATION_DOING; ?>
</span>
					<span id="cancelBackMessage" style="display:none;"><?php echo @_MI_DOCUMENT_TOOL_BUTTON_TRANSLATE_CANCEL_DOING; ?>
</span>
					&nbsp;"<span id="backtranslatingSentence"></span>"
				</span>
			</td>
			<td height="50">&nbsp;</td>
			<td height="50" valign="top">&nbsp;</td>
		</tr>
	</table>

<div class="title_bg02 editor-head">
	<h2><?php echo @_MI_DOCUMENT_LICENSE_INFORMATION; ?>
</h2>
</div>
<div id="license-information-area"></div>
</div>