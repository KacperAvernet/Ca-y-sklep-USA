<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab559c9c22_99372911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be68d7fc70e878182a23d27da3ec601b1e2b5368' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_shops.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdab559c9c22_99372911 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="giftcard_shops" class="gift_card tab-pane" style="display:none;">
<h3 class="tab"><i class="icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop Association','mod'=>'giftcard'),$_smarty_tpl ) );?>
</h3>
<div class="separation"></div>
	<?php echo $_smarty_tpl->tpl_vars['shops']->value;?>
</div><?php }
}
