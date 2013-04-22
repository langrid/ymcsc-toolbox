<?php /* Smarty version 2.6.26, created on 2013-02-16 06:55:47
         compiled from default/theme.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'default/theme.html', 16, false),array('modifier', 'replace', 'default/theme.html', 20, false),array('modifier', 'regex_replace', 'default/theme.html', 36, false),array('modifier', 'substr', 'default/theme.html', 44, false),array('modifier', 'escape', 'default/theme.html', 252, false),array('modifier', 'lower', 'default/theme.html', 255, false),)), $this); ?>
<?php 
	$this->assign( 'xoops_user_groups' , is_object($GLOBALS['xoopsUser']) ? $GLOBALS['xoopsUser']->getGroups() : array() ) ;
 ?>
<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ($this->_tpl_vars['xoops_rootpath'])."/themes/".($this->_tpl_vars['xoops_theme'])."/hd_assign.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['xoops_charset']; ?>
"<?php echo '?>'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
	<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
	<meta http-equiv="content-script-type" content="text/javascript" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
	<meta name="robots" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_meta_robots'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
" />
	<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
	<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
	<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
	<meta name="author" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_meta_author'])) ? $this->_run_mod_handler('replace', true, $_tmp, "@", "&#x40;") : smarty_modifier_replace($_tmp, "@", "&#x40;")); ?>
" />
	<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
	<meta name="generator" content="XOOPS Cube Legacy" />

	<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php if ($this->_tpl_vars['xoops_pagetitle']): ?> - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
<?php elseif ($this->_tpl_vars['xoops_slogan']): ?> - <?php echo $this->_tpl_vars['xoops_slogan']; ?>
<?php endif; ?></title>
	<link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="SHORTCUT ICON" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/css/import.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/default.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/module.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
css/user_style.css" />
	<!-- JS -->
	<script language="JavaScript" type="text/javascript">/*@cc_on _d=document;eval('var document=_d')@*/</script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/lib/prototype.js"></script>
	<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/js/rollover.js"></script>
	<script language="JavaScript" type="text/javascript"><?php echo ((is_array($_tmp=$this->_tpl_vars['xoops_js'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/(\/\/\-\->|<!\-\-)/", "") : smarty_modifier_regex_replace($_tmp, "/(\/\/\-\->|<!\-\-)/", "")); ?>
</script>
	<?php if ($this->_tpl_vars['xoops_module_header']): ?><?php echo $this->_tpl_vars['xoops_module_header']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['xoops_block_header']): ?><?php echo $this->_tpl_vars['xoops_block_header']; ?>
<?php endif; ?>
	<?php if ($this->_tpl_vars['user_define_header']): ?><?php echo $this->_tpl_vars['user_define_header']; ?>
<?php endif; ?>
</head>
<?php if (substr_count ( $this->_tpl_vars['xoops_requesturi'] , "/user/search/" ) > 0): ?>
<body id ="user_search">
<?php elseif ($this->_tpl_vars['xoops_dirname']): ?>
	<?php if (((is_array($_tmp=$this->_tpl_vars['xoops_dirname'])) ? $this->_run_mod_handler('substr', true, $_tmp, '0', '7') : substr($_tmp, '0', '7')) == 'langrid'): ?>
<body id ="settings">
	<?php else: ?>
<body id="<?php echo $this->_tpl_vars['xoops_dirname']; ?>
">
	<?php endif; ?>
<?php else: ?>
<body id="top">
<?php endif; ?>
	<div id="body_bg">
		<div id="wrap">
			<div id="container" class="clearfix">
				<div id="head">
					<h1 id="logo"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/logo.gif" alt="tool box" width="206" height="103" /></h1>
					<div id="font-box">
						<dl style="display:none;">
							<dt>font&nbsp;size</dt>
							<dd>
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/admin.php"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/icon_font_s.jpg" width="18" height="24" class="imgover" /></a>
							</dd>
							<dd>
								<a href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/icon_font_m.jpg" width="21" height="24" class="imgover" /></a>
							</dd>
							<dd>
								<a href="#"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/icon_font_l.jpg" width="24" height="24" class="imgover" /></a>
							</dd>
						</dl>
						<span style="margin-right:10px;">
							<?php if (in_array ( XOOPS_GROUP_ADMIN , $this->_tpl_vars['xoops_user_groups'] ) || in_array ( XOOPS_GROUP_USERS , $this->_tpl_vars['xoops_user_groups'] )): ?>
								<?php if ($this->_tpl_vars['uname'] != ''): ?><?php echo $this->_tpl_vars['welcome']; ?>
&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_THEME_TOP_LOGOUT_LB; ?>
</a><?php endif; ?>
							<?php elseif (in_array ( XOOPS_GROUP_ANONYMOUS , $this->_tpl_vars['xoops_user_groups'] )): ?>
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_THEME_TOP_LOGIN_LB; ?>
</a>
							<?php endif; ?>
							&nbsp;<?php if ($this->_tpl_vars['xoops_crblocks']): ?>
							<!-- (UI Language Selection) -->
								<?php $_from = $this->_tpl_vars['xoops_crblocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lbloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lbloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['lbloop']['iteration']++;
?>
										<?php echo $this->_tpl_vars['block']['content']; ?>

								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
							</span>
					</div>
					<ul id="navi_set">
										<?php if (in_array ( XOOPS_GROUP_ADMIN , $this->_tpl_vars['xoops_user_groups'] ) || in_array ( XOOPS_GROUP_USERS , $this->_tpl_vars['xoops_user_groups'] )): ?>
						<li class="navi_line">
						</li>
						<li id="navi_t">
							<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @_THEME_MENU_TEXT00_LB; ?>
</a>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_c01" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_COMMUNICATION; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/forum/"><span><?php echo @_THEME_MENU_TEXT01_LB; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_d01" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_TEXT02_LB; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/document/"><span><?php echo @_THEME_MENU_TEXT_TRANSLATION; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/web_translation/"><span><?php echo @_THEME_MENU_TRANSLATION_WEB; ?>
</span></a></li>
								<!--<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/speechtrans/"><span><?php echo @_THEME_MENU_SPEECH_TRANSLATION; ?>
</span></a></li>-->
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_d02" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_TEXT03_LB; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/dictionary/"><span><?php echo @_THEME_MENU_TEXT_DICTIONARY; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/dictionary/?mode=parallel_text"><span><?php echo @_THEME_MENU_TEXT_PARALLEL_TEXT; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/web_creation/"><span><?php echo @_THEME_MENU_WEB_TRANSLATION; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/qa/"><span><?php echo @_THEME_MENU_QA; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/glossary/"><span><?php echo @_THEME_MENU_GLOSSARY; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/template/"><span><?php echo @_THEME_MENU_TEMPLATE; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_community" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_COMMUNITY; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/user/search/index.php"><span><?php echo @_THEME_MENU_USER_SEARCH; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/filesharing/"><span><?php echo @_THEME_MENU_TEXT_FILE_MANAGEMENT; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/task/"><span><?php echo @_THEME_MENU_TASK_MANAGEMENT; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/collabtrans/"><span><?php echo @_THEME_MENU_COLLABORATION_TRANSLATION; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/communication/"><span><?php echo @_THEME_MENU_DISUCSSION; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_special" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_SPECIAL; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/storefront/"><span><?php echo @_THEME_MENU_RECEPTION; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/webqa/"><span><?php echo @_THEME_MENU_WEB_QA; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/showroombbs/"><span><?php echo @_THEME_MENU_SHOWROOM_BBS; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/showroomcom/"><span><?php echo @_THEME_MENU_SHOWROOM_DISUCSSION; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_p" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_SETTING; ?>
</a>
							<ol>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php"><span><?php echo @_THEME_MENU_TEXT04_LB; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=user"><span><?php echo @_THEME_MENU_SETTING_USER; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=client_control_shared"><span><?php echo @_THEME_MENU_SETTING_SITE; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=server_control_shared"><span><?php echo @_THEME_MENU_SETTING_SERVER; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid/?mode=collabtrans"><span><?php echo @_THEME_MENU_COLLABORATION_TRANSLATION; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=import"><span><?php echo @_THEME_MENU_IMPORTED_SERVICES; ?>
</span></a></li>
								<!-- <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/autocomplete/?page=setting"><span><?php echo @_THEME_MENU_AUTOCOMPLETE_SETTING; ?>
</span></a></li> -->
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/uicustomize/"><span><?php echo @_THEME_MENU_UICUSTOMIZE; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
					<?php else: ?>
						<li class="navi_line">
						</li>
						<li id="navi_t">
							<?php if (in_array ( XOOPS_GROUP_ANONYMOUS , $this->_tpl_vars['xoops_user_groups'] )): ?>
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_THEME_MENU_TEXT00_LB; ?>
</a>
							<?php else: ?>
								<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><?php echo @_THEME_MENU_TEXT00_LB; ?>
</a>
							<?php endif; ?>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_c01" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_COMMUNICATION; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT01_LB; ?>
</span></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_d01" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_TEXT02_LB; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT_TRANSLATION; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_TRANSLATION_WEB; ?>
</span></li>
								<!--<li class="disable"><span><?php echo @_THEME_MENU_SPEECH_TRANSLATION; ?>
</span></li>-->
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_d02" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_TEXT03_LB; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT_DICTIONARY; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT_PARALLEL_TEXT; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_WEB_TRANSLATION; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_QA; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_GLOSSARY; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_TEMPLATE; ?>
</span></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_community" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_COMMUNITY; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_USER_SEARCH; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT_FILE_MANAGEMENT; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_TASK_MANAGEMENT; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_COLLABORATION_TRANSLATION; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_DISUCSSION; ?>
</span></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_special" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_SPECIAL; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_RECEPTION; ?>
</span></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/webqa/"><span><?php echo @_THEME_MENU_WEB_QA; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/showroombbs/"><span><?php echo @_THEME_MENU_SHOWROOM_BBS; ?>
</span></a></li>
								<li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/showroomcom/"><span><?php echo @_THEME_MENU_SHOWROOM_DISUCSSION; ?>
</span></a></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
						<li id="navi_p" class="menu_off" onmouseover="this.className='menu_on'" onmouseout="this.className='menu_off'">
							<a href="javascript:void(0);" onclick="return false;"><?php echo @_THEME_MENU_SETTING; ?>
</a>
							<ol>
								<li class="disable"><span><?php echo @_THEME_MENU_TEXT04_LB; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_SETTING_USER; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_SETTING_SITE; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_SETTING_SERVER; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_COLLABORATION_TRANSLATION; ?>
</span></li>
								<li class="disable"><span><?php echo @_THEME_MENU_IMPORTED_SERVICES; ?>
</span></li>
								<!-- <li class="disable"><span><?php echo @_THEME_MENU_AUTOCOMPLETE_SETTING; ?>
</span></li> -->
								<li class="disable"><span><?php echo @_THEME_MENU_UICUSTOMIZE; ?>
</span></li>
							</ol>
						</li>
						<li class="navi_line">
						</li>
					<?php endif; ?>
					</ul>
				</div>

				<div style="clear: both; height: 1px;"></div>

				<div>
					<?php if ($this->_tpl_vars['howToUse']): ?>
					<button id="how-to-use-button" onclick="window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['howToUse'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
', '_blank'); return false; location.href='<?php echo ((is_array($_tmp=$this->_tpl_vars['howToUse'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'; return false;"><?php echo @_THEME_HOW_TO_USE; ?>
</button>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['showSettingLink']): ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['showSettingLink'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'site'): ?>
							<a id="path-setting-button" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=client_control_shared" style="float:right;"><?php echo @_THEME_MENU_SETTING_SITE_NOBR; ?>
</a>
						<?php endif; ?>
						<?php if (((is_array($_tmp=$this->_tpl_vars['showSettingLink'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == 'user'): ?>
							<a id="path-setting-button" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/langrid_config/?page=user" style="float:right;"><?php echo @_THEME_MENU_SETTING_USER_NOBR; ?>
</a>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<?php if ($this->_tpl_vars['xoops_contents']): ?>
					<?php echo $this->_tpl_vars['xoops_contents']; ?>

				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['xoops_rootpath'])."/themes/".($this->_tpl_vars['xoops_theme'])."/top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>

				<div id="footer_inner">
					<address>
						<?php 
							if(defined('_MD_COPYRIGHT_LB')){
								echo _MD_COPYRIGHT_LB;
							}else{
								echo _THEME_COPYRIGHT_LB;
							}
						 ?>
					</address>
					<div class="poweredby">
					<a href="<?php echo @_THEME_POWERED_BY_URL; ?>
">
						<img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
common/img/pb_icon_Langrid02.gif" alt="Powered by Language Grid" width="80" height="30" />
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>