<?php
/* Smarty version 3.1.31, created on 2022-06-28 00:12:20
  from "cms_template:a_news_summary" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_62ba2b44b2c8c8_94532423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd215feecc76d76024c97e4282dba6312fdea58d5' => 
    array (
      0 => 'cms_template:a_news_summary',
      1 => '1656367277',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ba2b44b2c8c8_94532423 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_cms_escape')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_escape.php';
if (!is_callable('smarty_modifier_cms_date_format')) require_once 'C:\\xampp\\htdocs\\CMS\\lib\\plugins\\modifier.cms_date_format.php';
?>
<section id="highlights" class="wrapper style3">
					<div class="container">
						<div class="row aln-center">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
							<div class="col-4 col-12-medium">
								<section class="highlight">
									<h3><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value->moreurl;?>
"><?php echo smarty_modifier_cms_escape($_smarty_tpl->tpl_vars['entry']->value->title);?>
</a></h3>
									<?php if ($_smarty_tpl->tpl_vars['entry']->value->postdate) {?>
										<div class="NewsSummaryPostdate">
											<?php echo smarty_modifier_cms_date_format($_smarty_tpl->tpl_vars['entry']->value->postdate);?>

									</div>
									<?php }?>
									
									<?php if ($_smarty_tpl->tpl_vars['entry']->value->summary) {?>
										<div class="NewsSummarySummary">
											<?php echo $_smarty_tpl->tpl_vars['entry']->value->summary;?>

										</div>
									<ul class="actions">
	
										<li class="button style1"><?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
</li>
	
									</ul>

									<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value->content) {?>
										<div class="NewsSummaryContent">
										<?php echo $_smarty_tpl->tpl_vars['entry']->value->content;?>

									</div>
<ul class="actions">
	
		<li class="button style1"><?php echo $_smarty_tpl->tpl_vars['entry']->value->morelink;?>
</li>
	
</ul>

<?php }?>
								</section>
							</div>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

							

						</div>
					</div>
				</section>



<?php if ($_smarty_tpl->tpl_vars['pagecount']->value > 1) {?>
  <p>
<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value > 1) {
echo $_smarty_tpl->tpl_vars['firstpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['prevpage']->value;?>
&nbsp;
<?php }
echo $_smarty_tpl->tpl_vars['pagetext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagenumber']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['oftext']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>

<?php if ($_smarty_tpl->tpl_vars['pagenumber']->value < $_smarty_tpl->tpl_vars['pagecount']->value) {?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lastpage']->value;?>

<?php }?>
</p>
<?php }?>
</section><?php }
}
