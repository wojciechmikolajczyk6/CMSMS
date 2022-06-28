<?php
/* Smarty version 3.1.31, created on 2022-06-27 22:13:58
  from "tpl_body:19" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ba0f86df6028_79113223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8eadcda5e8a70de66fc44178b715e28b30bf10' => 
    array (
      0 => 'tpl_body:19',
      1 => '1656344505',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba0f86df6028_79113223 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.global_content.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

	<section id="content">
		<?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
	</section>
  <?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
