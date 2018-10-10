<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab557ed1c1_97940584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9065df2b3c81fd57c539f8f2855f078af72fa21' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/form.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./gift_script.tpl' => 1,
    'file:./gift_alert_msgs.tpl' => 1,
    'file:./gift_tabs.tpl' => 1,
    'file:./gift_product.tpl' => 1,
    'file:./gift_coupon.tpl' => 1,
    'file:./gift_shops.tpl' => 1,
    'file:./gift_footer.tpl' => 1,
    'file:./backoffice_css.tpl' => 1,
  ),
),false)) {
function content_5bbdab557ed1c1_97940584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:./gift_script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15887248775bbdab557d8e14_91574960', "input");
}
/* {block "input"} */
class Block_15887248775bbdab557d8e14_91574960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_15887248775bbdab557d8e14_91574960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- <div class="panel clearfix"> -->

<?php $_smarty_tpl->_subTemplateRender('file:./gift_alert_msgs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="well">
	<fieldset>
		<?php $_smarty_tpl->_subTemplateRender('file:./gift_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	    <!-- Tab Content -->
		<div class="col-lg-10 panel">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Gift']->value, 'card');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['card']->value) {
?>
			<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'htmlall','UTF-8' ));?>
&token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentToken']->value,'htmlall','UTF-8' ));?>
" class="defaultForm form-horizontal col-lg-12 clearfix" name="giftcards_request_form" id="giftcard_request_form" method="post" enctype="multipart/form-data">
				<!-- Gift Product -->
				<?php $_smarty_tpl->_subTemplateRender('file:./gift_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<!-- Gift Coupon -->
				<?php $_smarty_tpl->_subTemplateRender('file:./gift_coupon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<!-- Shops -->
				<?php $_smarty_tpl->_subTemplateRender('file:./gift_shops.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

				<!-- footer buttons -->
				<?php $_smarty_tpl->_subTemplateRender("file:./gift_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</form>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
		<div class="clearfix"></div>
	</fieldset>
</div>
<div class="clearfix"></div>

<?php $_smarty_tpl->_subTemplateRender("file:./backoffice_css.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "input"} */
}
