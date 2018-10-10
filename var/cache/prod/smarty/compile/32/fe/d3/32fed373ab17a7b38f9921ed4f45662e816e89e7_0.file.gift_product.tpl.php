<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab558b48b8_98294549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32fed373ab17a7b38f9921ed4f45662e816e89e7' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_product.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./textarea_lang.tpl' => 1,
  ),
),false)) {
function content_5bbdab558b48b8_98294549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="giftcard_fonts" class="gift_card tab-pane">
<h3 class="tab"><i class="icon-gift"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift Product','mod'=>'giftcard'),$_smarty_tpl ) );?>
</h3><div class="separation"></div>	
<label class="control-label col-lg-3 required">
	<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This name will be displayed in the cart summary, as well as on the invoice.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift Card Name : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
</label>
<div class="form-group margin-form col-lg-9">
	<div class="col-lg-8">
	<?php $_smarty_tpl->_assignInScope('divLangName', 'cpara&curren;dd');?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
	<div class="lang_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 col-lg-9" id="cpara_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_lang']->value) {?> block<?php } else { ?>none<?php }?>;float: left;">

		<input id="name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" type="text" name="card_name_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value != null && isset($_smarty_tpl->tpl_vars['product']->value['name'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
"<?php }?> value=""/>

	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<div class="col-lg-2"><?php echo $_smarty_tpl->tpl_vars['module']->value->displayFlags($_smarty_tpl->tpl_vars['languages']->value,$_smarty_tpl->tpl_vars['current_lang']->value,$_smarty_tpl->tpl_vars['divLangName']->value,'cpara',true);?>
</div>
	</div>
	<p class="col-lg-12 preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Product name will be considered as your Gift card name.','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
</div><div class="clearfix"></div>

<label class="form-group control-label col-lg-3">
    <span data-html="true" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The description will be displayed on gift card product detail page.','mod'=>'giftcard'),$_smarty_tpl ) );?>
" class="label-tooltip" data-toggle="tooltip" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
</label>
<div class="col-lg-8 form-group margin-form">
    <div class="col-lg-12">
        <?php $_smarty_tpl->_subTemplateRender("file:./textarea_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>'product_description','class'=>"autoload_rte",'input_value'=>$_smarty_tpl->tpl_vars['product']->value['description']), 0, false);
?>
    </div>
    <div class="clearfix"></div>
</div>

<label class="control-label col-lg-3">
	<span class="label-tooltip" data-toggle="tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload image : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
</label>
<div class="form-group margin-form">
	<div class="col-lg-6">
		<input id="gift-image" class="btn btn-default" type="file" name="giftimage" value=""/>
		<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Format: JPG, GIF, PNG. Filesize: 8.00 MB max.','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
	</div>
</div>

<div id="preview" class="form-group" style="display:none;">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
	</label>
	<div class="col-lg-7">
		<img id="image-thumb" src="" class="img img-thumbnail" width="300">
	</div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value) && isset($_smarty_tpl->tpl_vars['product']->value['id_cover']) && $_smarty_tpl->tpl_vars['product']->value['id_cover']) {?>
<div id="product-image" class="form-group col-lg-push-3 col-lg-7 margin-form">
	<img id="image-thumb" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'][$_smarty_tpl->tpl_vars['id_lang']->value],$_smarty_tpl->tpl_vars['product']->value['id_cover'],'home_default'),'htmlall','UTF-8' ));?>
" class="img img-thumbnail" width="300">
</div><div class="clearfix"></div>
<?php }?>

<label class="form-group control-label col-lg-3 required">
	<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'specify the number of gift card instances.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Quantity : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
</label>
<div class="form-group margin-form">
<div class="col-lg-2">
	<input id="qty" type="text" name='qty' <?php if ($_smarty_tpl->tpl_vars['product']->value && isset($_smarty_tpl->tpl_vars['product']->value['quantity'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['quantity'],'htmlall','UTF-8' ));?>
"<?php }?>/>
</div>
</div><div class="clearfix"></div>
<label class="form-group control-label col-lg-3">
	<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select type of price for your gift card.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price Type : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
</label>
<div class="form-group margin-form ">
	<div class="col-lg-9">
		<input type="radio" value="dropdown" id="dropdown" name="value_type" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['value_type']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'dropdown') {?>checked="checked"<?php }?>/>
		<label for="dropdown" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dropdown','mod'=>'giftcard'),$_smarty_tpl ) );?>
 </label>

		<input type="radio" value="fixed" id="fixed" name="value_type" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['value_type']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'fixed' || $_smarty_tpl->tpl_vars['card']->value == null) {?>checked="checked"<?php }?>/>
		<label for="fixed" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fixed','mod'=>'giftcard'),$_smarty_tpl ) );?>
 </label>

		<input type="radio" value="range" id="range" name="value_type" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['value_type']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range') {?>checked="checked"<?php }?> />
		<label for="range" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Range','mod'=>'giftcard'),$_smarty_tpl ) );?>
 </label>
	</div>
</div>
<label class="form-group control-label col-lg-3"><span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set price for your gift card.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Price : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span></label>
<div >
	<div class="col-lg-6">
		<input id="card_val" type="text" name="card_value" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['card_value']) && ($_smarty_tpl->tpl_vars['card']->value['value_type'] == 'dropdown' || $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'fixed')) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['card_value'],'htmlall','UTF-8' ));?>
"<?php } elseif (isset($_smarty_tpl->tpl_vars['card']->value['card_value']) && ($_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range')) {?>style="display:none;"<?php }?> value=""/>
		<div id="dropdown_div" class="form-group margin-form "<?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['value_type']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'dropdown') {?>style="display:block"<?php }?>style="display:none">
			<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Example: 10,50,100,200 (use comma (,) as a separater to make your dropdown list.)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
		</div>
		<div id="fixed_div" class="form-group margin-form " <?php if ($_smarty_tpl->tpl_vars['card']->value == null || (isset($_smarty_tpl->tpl_vars['card']->value['value_type']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'fixed')) {?>style="display:block"<?php }?>style="display:none">
			<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Example: 100 (enter single numeric value.)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
		</div>
		<div id="range_div" class="form-group margin-form " <?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['card_value']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range') {?>style="display:inline-flex;margin-top:-5px;"<?php }?> style="display:none;">
			<?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['card_value']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range') {?>
				<?php $_smarty_tpl->_assignInScope('vals', explode(",",$_smarty_tpl->tpl_vars['card']->value['card_value']));?>
			<?php }?>
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
					<input type="text" id="range_val" name="min" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['card_value']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range') {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vals']->value[0],'htmlall','UTF-8' ));?>
"<?php }?>/>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="input-group">
					<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
					<input type="text" id="range_val" name="max"<?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['card_value']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range') {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vals']->value[1],'htmlall','UTF-8' ));?>
"<?php }?>/>
				</div>
			</div>
			<p class="preference_description help-block hint-block" style="padding-top:-5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select min and max values for your gift card.','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
		</div>
	</div>
</div><div class="clearfix"></div>

<label class="col-lg-3 control-label form-group"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax rule','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
<div class="col-lg-6">
	<select name="id_tax_rules_group" id="id_tax_rules_group" <?php if ($_smarty_tpl->tpl_vars['tax_exclude_taxe_option']->value) {?>disabled="disabled"<?php }?> >
		<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Tax','mod'=>'giftcard'),$_smarty_tpl ) );?>
</option>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tax_rules_groups']->value, 'tax_rules_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tax_rules_group']->value) {
?>
			<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group'],'htmlall','UTF-8' ));?>
" <?php if (isset($_smarty_tpl->tpl_vars['product']->value) && $_smarty_tpl->tpl_vars['product']->value && isset($_smarty_tpl->tpl_vars['product']->value['id_tax_rules_group']) && $_smarty_tpl->tpl_vars['product']->value['id_tax_rules_group'] == $_smarty_tpl->tpl_vars['tax_rules_group']->value['id_tax_rules_group']) {?>selected="selected"<?php }?> >
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['tax_rules_group']->value['name']),'htmlall','UTF-8' ));?>

			</option>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
</div>
</div><div class="clearfix"></div><?php }
}
