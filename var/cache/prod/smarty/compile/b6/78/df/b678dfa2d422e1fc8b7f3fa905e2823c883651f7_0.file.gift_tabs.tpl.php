<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab55835704_78005301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b678dfa2d422e1fc8b7f3fa905e2823c883651f7' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_tabs.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdab55835704_78005301 (Smarty_Internal_Template $_smarty_tpl) {
?><legend class="panel-heading"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( @constant('__PS_BASE_URI__'),'htmlall','UTF-8' ));?>
modules/giftcard/views/img/crd.png" alt=""><?php if ($_smarty_tpl->tpl_vars['Gift']->value != NULL) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Edit Gift Card','mod'=>'giftcard'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Add Gift Card','mod'=>'giftcard'),$_smarty_tpl ) );
}?></legend>
<div class="col-lg-2" id="gift-card">
 	<div class="productTabs">
		<ul class="tab">
			<li class="tab-row">
				<a class="gift_card_page selected" id="giftcard_link_fonts" href="javascript:displayDesignTab('fonts');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift Settings','mod'=>'giftcard'),$_smarty_tpl ) );?>
</a>
			</li>
			<li class="tab-row">
				<a class="gift_card_page" id="giftcard_link_color" href="javascript:displayDesignTab('color');"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Coupon Settings','mod'=>'giftcard'),$_smarty_tpl ) );?>
</a>
			</li>
			<?php if (isset($_smarty_tpl->tpl_vars['shops']->value) && $_smarty_tpl->tpl_vars['shops']->value) {?>
				<li class="tab-row">
					<a class="gift_card_page" id="giftcard_link_shops" href="javascript:displayDesignTab('shops');">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shops','mod'=>'giftcard'),$_smarty_tpl ) );?>

					</a>
				</li>
			<?php }?>
		</ul>
	</div>
</div><?php }
}
