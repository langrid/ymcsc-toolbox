<?php /* Smarty version 2.6.26, created on 2013-02-20 12:07:29
         compiled from db:document_php2js.html */ ?>
var Const = {
	Message : {
		Error : {
			noMoreSmallToArea : '<?php echo @_MI_DOCUMENT_JS_NO_MORE_SMALL_AREA; ?>
',
			noMoreSmallToFont : '<?php echo @_MI_DOCUMENT_JS_NO_MORE_SMALL_FONT; ?>
',
			TranslateError    : '<?php echo @_MI_DOCUMENT_JS_TRANSLATE_ERROR; ?>
',
			ServerError       : '<?php echo @_MI_DOCUMENT_JS_SERVER_ERROR; ?>
',
			Warning			  : '<?php echo @_MI_DOCUMENT_JS_TAG_WARNING; ?>
'
		},
		voiceCreating: '<?php echo @_MI_DOCUMENT_JS_VOICE_CREATING; ?>
',
		voiceFailured: '<?php echo @_MI_DOCUMENT_JS_VOICE_CREATION_FAILED; ?>
',
		voiceUnablePlayer: '<?php echo @_MI_DOCUMENT_JS_UNABLE_QT_PLAYER; ?>
',
		voiceUnableLanguage: '<?php echo @_MI_DOCUMENT_JS_UNABLE_LANGUAGE; ?>
'
	},
	Image: {
		loading: '<img src="<?php echo $this->_tpl_vars['loadingImage']; ?>
" />'
	},
	Label : {
		licenseInformation : '<?php echo @_MI_DOCUMENT_LICENSE_INFORMATION; ?>
',
		serviceName : '<?php echo @_MI_DOCUMENT_SERVICE_NAME; ?>
',
		copyright : '<?php echo @_MI_DOCUMENT_COPYRIGHT; ?>
'
	}
};

var VoiceSetting = <?php echo $this->_tpl_vars['voiceSetting']; ?>
;