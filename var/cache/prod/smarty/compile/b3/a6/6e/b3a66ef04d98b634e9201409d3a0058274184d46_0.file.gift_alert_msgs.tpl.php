<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_alert_msgs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab558251e2_01609088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a66ef04d98b634e9201409d3a0058274184d46' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_alert_msgs.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdab558251e2_01609088 (Smarty_Internal_Template $_smarty_tpl) {
?><div <?php if ($_smarty_tpl->tpl_vars['msg']->value == 0) {?> style="display:none;"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['msg']->value == 1) {?>
		<div class="conf alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift Card saved successfully','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value == 2) {?>
		<div class="conf alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings Updated successfully','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>	
	<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value == 3) {?>
		<div class="conf error alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid date','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value == 4) {?>
		<div class="conf error alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid discount amount/percentage','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value == 5) {?>	
		<div class="conf error alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific a discount product','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value == 6) {?>	
		<div class="conf error alert alert-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid Gift card value','mod'=>'giftcard'),$_smarty_tpl ) );?>
</div>
	<?php }?>
</div><?php }
}
