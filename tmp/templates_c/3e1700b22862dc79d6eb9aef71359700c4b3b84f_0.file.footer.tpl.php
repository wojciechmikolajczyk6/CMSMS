<?php
/* Smarty version 3.1.31, created on 2022-06-27 19:07:19
  from "C:\xampp\htdocs\CMS\admin\themes\OneEleven\templates\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62b9e3c752f346_32133055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e1700b22862dc79d6eb9aef71359700c4b3b84f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CMS\\admin\\themes\\OneEleven\\templates\\footer.tpl',
      1 => 1655661227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b9e3c752f346_32133055 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cms_version')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.cms_version.php';
if (!is_callable('smarty_function_cms_versionname')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.cms_versionname.php';
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
</a></li></ul></div></footer><?php }
}
