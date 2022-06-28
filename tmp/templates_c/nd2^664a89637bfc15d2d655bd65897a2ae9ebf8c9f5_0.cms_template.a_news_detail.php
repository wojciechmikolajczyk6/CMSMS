<?php
/* Smarty version 3.1.31, created on 2022-06-27 22:31:12
  from "cms_template:a_news_detail" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ba139089f022_41317428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a89637bfc15d2d655bd65897a2ae9ebf8c9f5' => 
    array (
      0 => 'cms_template:a_news_detail',
      1 => '1656361871',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba139089f022_41317428 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_date_format.php';
?>
<div id="main" class="wrapper style2">
					<div class="title"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title,'htmlall');?>
</div>
<div id="NewsPostDetailContent">
	
</div>





					
					<div class="container">
						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
<h2><?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
	<div id="NewsPostDetailDate">
		<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

	</div>
<?php }?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
	<div id="NewsPostDetailSummary">
		<strong>
			<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

		</strong>
	</div>
<?php }?>
</header>
										
										<p><?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>
</p>
									<?php if ($_smarty_tpl->tpl_vars['return_url']->value != '') {?>
<div text-align: center>
<button class="button-success pure-button"><?php echo $_smarty_tpl->tpl_vars['return_url']->value;
if ($_smarty_tpl->tpl_vars['category_name']->value != '') {?> - <?php echo $_smarty_tpl->tpl_vars['category_link']->value;
}?></button>
</div>
<?php }?>
								</article>
							</div>
					</div>
				</div><?php }
}
