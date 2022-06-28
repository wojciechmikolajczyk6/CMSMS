<?php
/* Smarty version 3.1.31, created on 2022-06-27 23:43:52
  from "cms_template:1" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ba2498a330d8_00676941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50470a741f99fb273c021a465e5d45647bca304c' => 
    array (
      0 => 'cms_template:1',
      1 => '1656366115',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba2498a330d8_00676941 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_global_content')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.global_content.php';
if (!is_callable('smarty_function_title')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\function.title.php';
echo smarty_function_global_content(array('name'=>'a_part_top'),$_smarty_tpl);?>

	<section id="content">
<!-- Main -->
<div id="main" class="wrapper style2">
<div class="title"><?php echo smarty_function_title(array(),$_smarty_tpl);?>
</div>
						<!-- Content -->
							<div id="content">
								<article class="box post">
									<p></p>
								</article>
							</div>

					</div>
				</div>
	
	</section>
  <?php echo smarty_function_global_content(array('name'=>'a_part_bottom'),$_smarty_tpl);
}
}
