<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab559e0e09_21554517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a25579b91313ca44e6b2c3b2ac9996f8c8fb134' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_footer.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdab559e0e09_21554517 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['version']->value < 1.6) {?>
<div class="col-lg-9">
	<input id="mybutton" type="submit" name="SaveGift" value="Save" class="button btn btn-default pull-right" />
</div>
<?php } else { ?>
	<div class="panel-footer">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminGift'),'htmlall','UTF-8' ));?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'giftcard'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="SaveGift" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'giftcard'),$_smarty_tpl ) );?>
</button>
	</div>
<?php }?>

<div class="form-group margin-form ">
	<div class="col-lg-3">
		<input type="hidden" name="id_product" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['id_product'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['id_product'],'htmlall','UTF-8' ));?>
"<?php }?>value="">
		<input type="hidden" name="gid" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['id_gift_card'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['id_gift_card'],'htmlall','UTF-8' ));?>
"<?php }?>value="">
		<input type="hidden" name="aid" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['id_attribute'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['id_attribute'],'htmlall','UTF-8' ));?>
"<?php }?>value="">
	</div>
</div><?php }
}
