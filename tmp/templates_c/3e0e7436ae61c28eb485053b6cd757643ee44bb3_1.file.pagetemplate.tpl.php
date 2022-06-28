<?php
/* Smarty version 3.1.31, created on 2022-06-27 22:32:15
  from "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ba13cf0d3cd9_78164830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e0e7436ae61c28eb485053b6cd757643ee44bb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\pagetemplate.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
    '8dc23f99047b58fa87617f36a0ff0b247ea85cb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\shortcuts.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
    '796c5f5832acbb131b310fa4f25acc6085714d0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\navigation.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
    '54bb5aaa2ff441411219c9c22d0cbba44429568c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\messages.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
    '3e1700b22862dc79d6eb9aef71359700c4b3b84f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\footer.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:shortcuts.tpl' => 1,
    'file:navigation.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_62ba13cf0d3cd9_78164830 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_sitename')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.sitename.php';
if (!is_callable('smarty_function_cms_jquery')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.cms_jquery.php';
if (!is_callable('smarty_function_root_url')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.root_url.php';
if (!is_callable('smarty_function_cms_version')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.cms_versionname.php';
?>
<!doctype html>
<html lang="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lang']->value,'2','');?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_dir']->value;?>
">
  <head>
    <?php $_smarty_tpl->_assignInScope('thetitle', $_smarty_tpl->tpl_vars['pagetitle']->value);
?>
    <?php if ($_smarty_tpl->tpl_vars['thetitle']->value && $_smarty_tpl->tpl_vars['subtitle']->value) {
$_smarty_tpl->_assignInScope('thetitle', ((string)$_smarty_tpl->tpl_vars['thetitle']->value)." - ".((string)$_smarty_tpl->tpl_vars['subtitle']->value));
}?>
    <?php if ($_smarty_tpl->tpl_vars['thetitle']->value) {
$_smarty_tpl->_assignInScope('thetitle', ((string)$_smarty_tpl->tpl_vars['thetitle']->value)." - ");
}?>
		<meta charset="utf-8" />
		<title><?php echo $_smarty_tpl->tpl_vars['thetitle']->value;
echo smarty_function_sitename(array(),$_smarty_tpl);?>
</title>
		<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/" />
		<meta name="generator" content="CMS Made Simple - Copyright (C) 2004-14 Ted Kulp. All rights reserved." />
		<meta name="robots" content="noindex, nofollow" />
		<meta name="referrer" content="origin"/>
		<meta name="viewport" content="initial-scale=1.0 maximum-scale=1.0 user-scalable=no" />
		<meta name="HandheldFriendly" content="True"/>
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/cmsms-favicon.ico"/>
		<link rel='apple-touch-icon' href='<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/apple-touch-icon-iphone.png' />
		<link rel='apple-touch-icon' sizes='72x72' href='<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/apple-touch-icon-ipad.png' />
		<link rel='apple-touch-icon' sizes='114x114' href='<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/apple-touch-icon-iphone4.png' />
		<link rel='apple-touch-icon' sizes='144x144' href='<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/apple-touch-icon-ipad3.png' />
		<meta name='msapplication-TileImage' content='<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/favicon/ms-application-icon.png' />
		<meta name='msapplication-TileColor' content='#f89938'>
		<!-- learn IE html5 -->
		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="http://html5shiv.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
		<![endif]-->
		<!-- custom jQueryUI Theme 1.10.04 see link in UI Stylesheet for color reference //-->
		<link rel="stylesheet" href="style.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" />
		<?php echo smarty_function_cms_jquery(array('append'=>((string)$_smarty_tpl->tpl_vars['config']->value['admin_url'])."/themes/OneEleven/includes/standard.js",'include_css'=>0),$_smarty_tpl);?>

		<link href="<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/css/default-cmsms/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
		<!-- THIS IS WHERE HEADER STUFF SHOULD GO -->
	 	<?php echo (($tmp = @$_smarty_tpl->tpl_vars['headertext']->value)===null||$tmp==='' ? '' : $tmp);?>

	</head>
	<body lang="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['lang']->value,'2','');?>
" id="<?php echo md5($_smarty_tpl->tpl_vars['pagetitle']->value);?>
" class="oe_<?php echo $_smarty_tpl->tpl_vars['pagealias']->value;?>
">
		<!-- start container -->
		<div id="oe_container" class="sidebar-on">
			<!-- start header -->
			<header role="banner" class="cf header">
				<!-- start header-top -->
				<div class="header-top cf">
					<!-- logo -->
					<div class="cms-logo">
						<a href="http://www.cmsmadesimple.org" rel="external"><img src="<?php echo $_smarty_tpl->tpl_vars['config']->value['admin_url'];?>
/themes/OneEleven/images/layout/cmsms-logo.jpg" width="205" height="69" alt="CMS Made Simple" title="CMS Made Simple" /></a>
					</div>
					<!-- title -->
					<span class="admin-title"> <?php echo lang('adminpaneltitle');?>
 - <?php echo smarty_function_sitename(array(),$_smarty_tpl);?>
</span>
				</div>
				<div class='clear'></div>
				<!-- end header-top //-->
				<!-- start header-bottom -->
				<div class="header-bottom cf">
					<!-- welcome -->
					<div class="welcome">
					<?php if (isset($_smarty_tpl->tpl_vars['myaccount']->value)) {?>
						<span><a class="welcome-user" href="myaccount.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('myaccount');?>
"><?php echo lang('myaccount');?>
</a> <?php echo lang('welcome_user');?>
: <a href="myaccount.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</a></span>
					<?php } else { ?>
						<span><a class="welcome-user"><?php echo lang('myaccount');?>
</a> <?php echo lang('welcome_user');?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</span>
					<?php }?>
					</div>
					<!-- bookmarks -->
					<?php
$_smarty_tpl->_subTemplateRender('file:shortcuts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '8dc23f99047b58fa87617f36a0ff0b247ea85cb2', 'content_62ba13cf0619a1_84762579');
?>

				</div>
				<!-- end header-bottom //-->
			</header>
			<!-- end header //-->
			<!-- start content -->
			<div id="oe_admin-content">
				<div class="shadow">
					&nbsp;
				</div>
				<!-- start sidebar -->
				<div id="oe_sidebar">
				  <aside>
				    <span title="<?php echo lang('open');?>
/<?php echo lang('close');?>
" class="toggle-button close"><?php echo lang('open');?>
/<?php echo lang('close');?>
</span>
 			            <?php
$_smarty_tpl->_subTemplateRender('file:navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nav'=>$_smarty_tpl->tpl_vars['theme']->value->get_navigation_tree()), 0, false, '796c5f5832acbb131b310fa4f25acc6085714d0d', 'content_62ba13cf090bd5_96955153');
?>

				    </aside>
				</div>
				<!-- end sidebar //-->
				<!-- start main -->
				<div id="oe_mainarea" class="cf">
					<?php
$_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '54bb5aaa2ff441411219c9c22d0cbba44429568c', 'content_62ba13cf0b5728_33613113');
?>
<article role="main" class="content-inner"><header class="pageheader<?php if (isset($_smarty_tpl->tpl_vars['is_ie']->value)) {?> drop-hidden<?php }?> cf"><?php if (isset($_smarty_tpl->tpl_vars['module_icon_url']->value) || isset($_smarty_tpl->tpl_vars['pagetitle']->value)) {?><h1><?php if (isset($_smarty_tpl->tpl_vars['module_icon_url']->value)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['module_icon_url']->value;?>
" alt="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['module_name']->value)===null||$tmp==='' ? '' : $tmp);?>
" class="module-icon" /><?php }
echo (($tmp = @$_smarty_tpl->tpl_vars['pagetitle']->value)===null||$tmp==='' ? '' : $tmp);?>
</h1><?php }
if (isset($_smarty_tpl->tpl_vars['module_help_url']->value)) {?> <span class="helptext"><a href="<?php echo $_smarty_tpl->tpl_vars['module_help_url']->value;?>
"><?php echo lang('module_help');?>
</a></span><?php }?></header><?php if ($_smarty_tpl->tpl_vars['pagetitle']->value && $_smarty_tpl->tpl_vars['subtitle']->value) {?><header class="subheader"><h3 class="subtitle"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</h3></header><?php }?><section class="cf"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</section></article>
				</div>
				<!-- end main //-->
				<div class="spacer">
					&nbsp;
				</div>
			</div>
			<!-- end content //-->
			<!-- start footer -->
			<?php
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false, '3e1700b22862dc79d6eb9aef71359700c4b3b84f', 'content_62ba13cf0c32a4_60100986');
?>

			<!-- end footer //-->
			<?php echo (($tmp = @$_smarty_tpl->tpl_vars['footertext']->value)===null||$tmp==='' ? '' : $tmp);?>

		</div>
		<!-- end container //-->
		</body>
</html>
<?php }
/* Start inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
function content_62ba13cf0619a1_84762579 ($_smarty_tpl) {
?>
<div class="shortcuts"><ul class="cf"><li class="help"><?php if (isset($_smarty_tpl->tpl_vars['module_help_url']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['module_help_url']->value;?>
" title="<?php echo lang('module_help');?>
"><?php echo lang('module_help');?>
</a><?php } else { ?><a href="https://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a><?php }?></li><?php if (isset($_smarty_tpl->tpl_vars['myaccount']->value)) {?><li class="settings"><a href="myaccount.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('myaccount');?>
"><?php echo lang('myaccount');?>
</a></li><?php }
if (isset($_smarty_tpl->tpl_vars['marks']->value)) {?><li class="favorites open"><a href="listbookmarks.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('bookmarks');?>
"><?php echo lang('bookmarks');?>
</a></li><?php }
$_smarty_tpl->_assignInScope('my_alerts', $_smarty_tpl->tpl_vars['theme']->value->get_my_alerts());
if (!empty($_smarty_tpl->tpl_vars['my_alerts']->value)) {
$_smarty_tpl->_assignInScope('num_alerts', count($_smarty_tpl->tpl_vars['my_alerts']->value));
if ($_smarty_tpl->tpl_vars['num_alerts']->value > 0) {
if ($_smarty_tpl->tpl_vars['num_alerts']->value > 10) {
$_smarty_tpl->_assignInScope('txt', '&#2295');
} else {
$_smarty_tpl->_assignInScope('num', 1+$_smarty_tpl->tpl_vars['num_alerts']->value);
$_smarty_tpl->_assignInScope('txt', ((string)$_smarty_tpl->tpl_vars['num_alerts']->value));
}?><li class="notifications"><a id="alerts" title="<?php echo lang('notifications_to_handle2',$_smarty_tpl->tpl_vars['num_alerts']->value);?>
"><span class="bubble"><?php echo $_smarty_tpl->tpl_vars['txt']->value;?>
</span></a></li><?php }
}?><li class="view-site"><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php" rel="external" target="_blank" title="<?php echo lang('viewsite');?>
"><?php echo lang('viewsite');?>
</a></li><li class="logout"><a href="logout.php?<?php echo $_smarty_tpl->tpl_vars['secureparam']->value;?>
" title="<?php echo lang('logout');?>
" <?php if (isset($_smarty_tpl->tpl_vars['is_sitedown']->value)) {?>onclick="return confirm('<?php echo strtr(lang('maintenance_warning'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"<?php }?>><?php echo lang('logout');?>
</a></li></ul></div><?php if (isset($_smarty_tpl->tpl_vars['marks']->value)) {?><div class="dialog invisible" role="dialog" title="<?php echo lang('bookmarks');?>
"><?php if (is_array($_smarty_tpl->tpl_vars['marks']->value) && count($_smarty_tpl->tpl_vars['marks']->value) > 0) {?><h3><?php echo lang('user_created');?>
</h3><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marks']->value, 'mark');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mark']->value) {
?><li><a<?php if ($_smarty_tpl->tpl_vars['mark']->value->bookmark_id > 0) {?> class="bookmark"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['mark']->value->url;?>
" title="<?php echo $_smarty_tpl->tpl_vars['mark']->value->title;?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value->title;?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }?><h3><?php echo lang('help');?>
</h3><ul><li><a rel="external" class="external" href="https://docs.cmsmadesimple.org" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a rel="external" class="external" href="https://forum.cmsmadesimple.org" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a rel="external" class="external" href="https://www.cmsmadesimple.org/support/documentation/chat/"><?php echo lang('chat');?>
</a></li></ul></div><?php }
if (!empty($_smarty_tpl->tpl_vars['my_alerts']->value)) {?><!-- alerts go here --><div id="alert-dialog" class="alert-dialog" role="dialog" title="<?php echo lang('alerts');?>
" style="display: none;"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['my_alerts']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?><li class="alert-box" data-alert-name="<?php echo $_smarty_tpl->tpl_vars['one']->value->get_prefname();?>
"><div class="alert-head ui-corner-all <?php if ($_smarty_tpl->tpl_vars['one']->value->priority == '_high') {?>ui-state-error red<?php } elseif ($_smarty_tpl->tpl_vars['one']->value->priority == '_normal') {?>ui-state-highlight orange<?php } else { ?>ui-state-highlightblue<?php }?>"><?php $_smarty_tpl->_assignInScope('icon', $_smarty_tpl->tpl_vars['one']->value->get_icon());
if ($_smarty_tpl->tpl_vars['icon']->value) {?><img class="alert-icon ui-icon" alt="" src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" title="<?php echo lang('remove_alert');?>
"/><?php } else { ?><span class="alert-icon ui-icon <?php if ($_smarty_tpl->tpl_vars['one']->value->priority != '_low') {?>ui-icon-alert<?php } else { ?>ui-icon-info<?php }?>" title="<?php echo lang('remove_alert');?>
"></span><?php }?><span class="alert-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['one']->value->get_title())===null||$tmp==='' ? lang('alert') : $tmp);?>
</span><span class="alert-remove ui-icon ui-icon-close" title="<?php echo lang('remove_alert');?>
"></span><div class="alert-msg"><?php echo $_smarty_tpl->tpl_vars['one']->value->get_message();?>
</div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><div id="alert-noalerts" class="information" style="display: none;"><?php echo lang('info_noalerts');?>
</div></div><?php }?><!-- alerts-end --><?php
}
/* End inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
/* Start inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
function content_62ba13cf090bd5_96955153 ($_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['depth']->value)) {
$_smarty_tpl->_assignInScope('depth', '0');
}
if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?><nav class="navigation" id="oe_menu" role="navigation"><div class="box-shadow">&nbsp;</div><ul<?php if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?> id="oe_pagemenu"<?php }?>><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nav']->value, 'navitem', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['navitem']->value) {
?><li class="nav<?php if (!isset($_smarty_tpl->tpl_vars['navitem']->value['system']) && (isset($_smarty_tpl->tpl_vars['navitem']->value['module']) || isset($_smarty_tpl->tpl_vars['navitem']->value['firstmodule']))) {?> module<?php }
if (!empty($_smarty_tpl->tpl_vars['navitem']->value['selected']) || (isset($_GET['section']) && $_GET['section'] == mb_strtolower($_smarty_tpl->tpl_vars['navitem']->value['name'], 'UTF-8'))) {?> current<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['navitem']->value['url'];?>
" class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['navitem']->value['name'], 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['navitem']->value['children'])) {?> parent<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['navitem']->value['target'])) {?> target="_blank"<?php }?> title="<?php if (!empty($_smarty_tpl->tpl_vars['navitem']->value['description'])) {
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['description']);
} else {
echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['title']);
}?>" <?php if (substr($_smarty_tpl->tpl_vars['navitem']->value['url'],0,6) == 'logout' && isset($_smarty_tpl->tpl_vars['is_sitedown']->value)) {?>onclick="return confirm('<?php echo strtr(lang('maintenance_warning'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"<?php }?>><?php echo $_smarty_tpl->tpl_vars['navitem']->value['title'];?>
</a><?php if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?><span class="open-nav" title="<?php echo lang('open');?>
/<?php echo lang('close');?>
 <?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['navitem']->value['title']);?>
"><?php echo lang('open');?>
/<?php echo lang('close');?>
 <?php echo $_smarty_tpl->tpl_vars['navitem']->value['title'];?>
</span><?php }
if (isset($_smarty_tpl->tpl_vars['navitem']->value['children'])) {
if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?><ul><?php }
$_smarty_tpl->_subTemplateRender(basename($_smarty_tpl->source->filepath), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nav'=>$_smarty_tpl->tpl_vars['navitem']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), 0, true);
if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?></ul><?php }
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['depth']->value == '0') {?></ul></nav><?php }
}
/* End inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
/* Start inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
function content_62ba13cf0b5728_33613113 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['errors']->value) && $_smarty_tpl->tpl_vars['errors']->value[0] != '') {?><aside class="message pageerrorcontainer" role="alert"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
if ($_smarty_tpl->tpl_vars['error']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</aside><?php }
if (isset($_smarty_tpl->tpl_vars['messages']->value) && $_smarty_tpl->tpl_vars['messages']->value[0] != '') {?><aside class="message pagemcontainer" role="status"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
if ($_smarty_tpl->tpl_vars['message']->value) {?><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</aside><?php }
}
/* End inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
/* Start inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
function content_62ba13cf0c32a4_60100986 ($_smarty_tpl) {
?>
<footer id="oe_footer" class="cf"><div class="footer-left"><small class="copyright">Copyright &copy; <a rel="external" href="http://www.cmsmadesimple.org">CMS Made Simple&trade; <?php echo smarty_function_cms_version(array(),$_smarty_tpl);?>
 &ldquo;<?php echo smarty_function_cms_versionname(array(),$_smarty_tpl);?>
&rdquo;</a></small></div><div class="footer-right cf"><ul class="links"><li><a href="https://docs.cmsmadesimple.org/" rel="external" title="<?php echo lang('documentation');?>
"><?php echo lang('documentation');?>
</a></li><li><a href="https://forum.cmsmadesimple.org/" rel="external" title="<?php echo lang('forums');?>
"><?php echo lang('forums');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/" rel="external" title="<?php echo lang('about');?>
"><?php echo lang('about');?>
</a></li><li><a href="http://www.cmsmadesimple.org/about-link/about-us/" rel="external" title="<?php echo lang('team');?>
"><?php echo lang('team');?>
</a></li></ul></div></footer><?php
}
/* End inline template "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\pagetemplate.tpl" =============================*/
}
