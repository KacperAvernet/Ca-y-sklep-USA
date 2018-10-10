<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:33:41
  from '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_coupon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbdab559b3050_12808366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57df66d8927e50d65d8bad4fa499d07e5a0f6ca1' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/giftcard/views/templates/admin/_add/helpers/form/gift_coupon.tpl',
      1 => 1539095384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdab559b3050_12808366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="giftcard_color" class="gift_card tab-pane" style="display:none;">
    <h3 class="tab"><i class="icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift Coupon','mod'=>'giftcard'),$_smarty_tpl ) );?>
</h3><div class="separation"></div>
			<!-- Discount -->
			<label class="form-group control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply discount on gift card.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount Type : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="form-group margin-form ">
				<div class="col-lg-9">	
					<input type="radio" value="percent" id="apply_discount_percent" name="apply_discount" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['reduction_type']) && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>checked="checked"<?php }?>>
					<label for="apply_discount_percent" class="t">
						<img style="cursor:pointer" title="Enabled" alt="Enabled" src="../img/admin/enabled.gif"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Percent (%)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
					<input type="radio" value="amount" id="apply_discount_amount" name="apply_discount" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'amount') {?>checked="checked"<?php }?>>
					<label for="apply_discount_amount" class="t">
						<img style="cursor:pointer" title="Enabled" alt="Enabled" src="../img/admin/enabled.gif"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>

				</div>
			</div>
				<div id="apply_discount_percent_div" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>style="display:block;"<?php }?>style="display:none;">
					<label class="form-group control-label col-lg-3">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value(s) : ','mod'=>'giftcard'),$_smarty_tpl ) );?>

					</label>
				<div class="form-group margin-form">
					<!-- pecentage value for fixed price -->
					<div id="percent_fixed" class="col-lg-6" style="display:none;">
						<div class="input-group col-lg-6">
							<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
							<input type="text" name="reduction_percent_fixed" id="reduction_percent" value="<?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['reduction_amount']) && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['reduction_amount'],'htmlall','UTF-8' ));
}?>">	
						</div>
					</div>

					<!-- percentage values for dropdown list -->
					<div  id="percent_dropdown" class="col-lg-6" style="display:none;">
						<div class="input-group">
							<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
							<input type="text" name="reduction_percent_dropdown" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['reduction_amount']) && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['reduction_amount'],'htmlall','UTF-8' ));?>
"<?php } else { ?>value=""<?php }?>>
						</div>
							<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Example: 5,10,15,20 (use comma separater. Th percentage will be applied respectively.)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
					</div>

					<!-- percentage values for rage type -->
					<div id="percent_range" class="input-group"  style="display:none;">
						<?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['reduction_amount']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range' && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>
							<?php $_smarty_tpl->_assignInScope('per', explode(",",$_smarty_tpl->tpl_vars['card']->value['reduction_amount']));?>
						<?php }?>

						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="min_percent" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['reduction_amount']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range' && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>value="<?php if (!empty($_smarty_tpl->tpl_vars['per']->value) && $_smarty_tpl->tpl_vars['per']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['per']->value[0],'htmlall','UTF-8' ));
}?>"<?php }?>/><span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Min','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="input-group">
								<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
								<input type="text" name="max_percent"<?php if ($_smarty_tpl->tpl_vars['card']->value != null && !empty($_smarty_tpl->tpl_vars['card']->value['reduction_amount']) && $_smarty_tpl->tpl_vars['card']->value['value_type'] == 'range' && $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent') {?>value="<?php if (!empty($_smarty_tpl->tpl_vars['per']->value) && $_smarty_tpl->tpl_vars['per']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['per']->value[1],'htmlall','UTF-8' ));
}?>"<?php }?>/><span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
							</div>
						</div>
						<p class="preference_description help-block hint-block" style="padding-top:-5px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select min and max percentage value.','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
					</div>
				</div>
				</div>

				<div class="clearfix"></div>
				<div id="apply_discount_to_div" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['reduction_type']) && ($_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'amount' || $_smarty_tpl->tpl_vars['card']->value['reduction_type'] == 'percent')) {?>style="display:block;"<?php }?>style="display:none;">
					<label class="form-group control-label col-lg-3">
						<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can apply specified amount/percentage of discount to the whole order or you can choose a specific product.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply discount to : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
					</label>
					<div class="margin-form">
						<div class="col-lg-9 form-group">
							<input type="radio" value="order" id="apply_discount_to_order" name="apply_discount_to" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['id_discount_product'] == 0) {?>checked="checked"<?php }?>>
							<label for="apply_discount_to_order" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order (without shipping)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
							<input type="radio" value="specific" id="apply_discount_to_product" name="apply_discount_to" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && !empty($_smarty_tpl->tpl_vars['card']->value['id_discount_product'])) {?>checked="checked"<?php }?>>
							<label for="apply_discount_to_product" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific product','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
						</div>
					</div>
					<div id="apply_discount_to_product_div" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['id_discount_product']) && $_smarty_tpl->tpl_vars['card']->value['id_discount_product'] != 0) {?>style="display:block;"<?php }?>style="display:none;">
						<label class="form-group control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
						<div class="margin-form">
							<div class="col-lg-7">
								<div class="input-group">
									<input type="text" style="width:400px" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['discount_product'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['discount_product'],'htmlall','UTF-8' ));?>
"<?php }?> value="" name="reductionProductFilter" id="reductionProductFilter" autocomplete="off" class="ac_input">
									<span class="input-group-addon"><i class="icon-search"></i></span>
								</div>
								<input type="hidden" name="reduction_product" id="reduction_product" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['id_discount_product'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['id_discount_product'],'htmlall','UTF-8' ));?>
"<?php }?>>
								<input id="spy" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'htmlall','UTF-8' ));?>
" />
								<input id="lang_spy" type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id_lang']->value,'htmlall','UTF-8' ));?>
" />
								<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Begin typing the first letters of the product name, then select the product from the drop-down list.)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
				<label class="form-group control-label col-lg-3 required">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount will be given in selected currency','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount currrency : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
				</label>
				<div class="form-group margin-form ">
					<div class="col-lg-2">
						<select name="reduction_currency" >
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['id_currency'],'htmlall','UTF-8' ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['reduction_currency'] == $_smarty_tpl->tpl_vars['currency']->value['id_currency']) {?>selected="selected"<?php } elseif ($_smarty_tpl->tpl_vars['default_currency']->value == $_smarty_tpl->tpl_vars['currency']->value['id_currency']) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value['iso_code'],'htmlall','UTF-8' ));?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>

				<div class="clearfix"></div>
				<label class="form-group control-label col-lg-3 required">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax will be applied on this gift card','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
				</label>
				<div class="form-group margin-form ">
					<div class="col-lg-3">
						<select name="reduction_tax">
							<option value="0" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['reduction_tax'] == 0) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','mod'=>'giftcard'),$_smarty_tpl ) );?>
</option>
							<option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['reduction_tax'] == 1) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','mod'=>'giftcard'),$_smarty_tpl ) );?>
</option>
						</select>
					</div>
				</div>

			<div class="clearfix"></div>
			<label class="form-group control-label col-lg-3 required">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specified length of code will be generated, default length is 14.','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Coupon code Length : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="form-group margin-form ">
				<div class="col-lg-9">
				<input id="length" type="text" name="length" style="width:10%;" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['length'])) {?>value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['length'],'htmlall','UTF-8' ));?>
"<?php }?> placeholder="14"/>
				<p class="preference_description help-block hint-block" style="padding-top:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum length is 4 and maximum length is 20.','mod'=>'giftcard'),$_smarty_tpl ) );?>
</p>
			</div>
			</div>
			<div class="clearfix"></div>

			<!-- Vcode type -->
			<label class="form-group control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Coupon code type(i.e Numeric or Alphanumeric).','mod'=>'giftcard'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Coupon code Type : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="form-group margin-form ">
				<div class="col-lg-9">	
					<input type="radio" value="NUMERIC" id="vcode_type_num" name="vcode_type" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['vcode_type']) && $_smarty_tpl->tpl_vars['card']->value['vcode_type'] == 'NUMERIC') {?>checked="checked"<?php }?>>
					<label for="vcode_type_num" class="t">
						<img style="cursor:pointer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Numeric','mod'=>'giftcard'),$_smarty_tpl ) );?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Numeric','mod'=>'giftcard'),$_smarty_tpl ) );?>
" src="../img/admin/enabled.gif"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Numeric (i.e 12345)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
					<input type="radio" value="ALPHANUMERIC" id="vcode_type_alphanum" name="vcode_type" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && $_smarty_tpl->tpl_vars['card']->value['vcode_type'] == 'ALPHANUMERIC') {?>checked="checked"<?php }?>>
					<label for="vcode_type_alphanum" class="t">
						<img style="cursor:pointer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alphanumeric','mod'=>'giftcard'),$_smarty_tpl ) );?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alphanumeric','mod'=>'giftcard'),$_smarty_tpl ) );?>
" src="../img/admin/enabled.gif"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alphanumeric  (i.e ABC123)','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
				</div>
			</div>

			<div class="clearfix"></div>
				<label class="form-group control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
			<div class="form-group margin-form ">
				<div class="col-lg-6">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="status" id="status_on" value="1" <?php if (isset($_smarty_tpl->tpl_vars['product']->value) && $_smarty_tpl->tpl_vars['product']->value['active'] == 1) {?>checked="checked"<?php }?>/>
						<label class="t" for="status_on"><?php if ($_smarty_tpl->tpl_vars['version']->value < 1.6) {?><img src="../img/admin/enabled.gif" alt="Enabled" title="Enabled" /><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'giftcard'),$_smarty_tpl ) );
}?></label>
						<input type="radio" name="status" id="status_off" value="0" <?php if (isset($_smarty_tpl->tpl_vars['product']->value) && $_smarty_tpl->tpl_vars['product']->value['active'] == 0) {?>checked="checked"<?php }?>/>
						<label class="t" for="status_off"><?php if ($_smarty_tpl->tpl_vars['version']->value < 1.6) {?><img src="../img/admin/disabled.gif" alt="Disabled" title="Disabled" /><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'giftcard'),$_smarty_tpl ) );
}?></label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>

			<label class="form-group control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The default period is one month.','mod'=>'giftcard'),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid : ','mod'=>'giftcard'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="form-group margin-form ">
				<div class="col-lg-9" style="display: inline-flex;">
					<div class="col-lg-4">
					 <div class="input-group">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
						<input type="text" class="datepicker input-medium" name="from" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['from'])) {?>value = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['from'],'htmlall','UTF-8' ));?>
"<?php }?> value="" />
						<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
					 </div>
					</div>
					<div class="col-lg-4">
					 <div class="input-group">
						<span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To','mod'=>'giftcard'),$_smarty_tpl ) );?>
</span>
						<input type="text" class="datepicker input-medium" name="to" <?php if ($_smarty_tpl->tpl_vars['card']->value != null && isset($_smarty_tpl->tpl_vars['card']->value['to'])) {?>value = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['card']->value['to'],'htmlall','UTF-8' ));?>
"<?php }?> value="" />
						<span class="input-group-addon"><i class="icon-calendar-empty"></i></span>
					</div>
					</div>
				</div>
			</div>

			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){

					$('.datepicker').datepicker({
						prevText: '',
						nextText: '',
						dateFormat: 'yy-mm-dd',

						// Define a custom regional settings in order to use PrestaShop translation tools
						currentText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
						closeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
						ampm: false,
						amNames: ['AM', 'A'],
						pmNames: ['PM', 'P'],
						timeFormat: 'hh:mm:ss tt',
						timeSuffix: '',
						timeOnlyTitle: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Time','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
						timeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
						hourText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hour','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
						minuteText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minute','mod'=>'giftcard','js'=>1),$_smarty_tpl ) );?>
',
					});
				});
			<?php echo '</script'; ?>
>

			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping : ','mod'=>'giftcard'),$_smarty_tpl ) );?>
</label>
			<div class="form-group margin-form ">
				<div class="col-lg-6">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="free_shipping" id="free_shipping_on" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['free_shipping'] == 1) {?>checked="checked"<?php }?>/>
						<label class="t" for="free_shipping_on"><?php if ($_smarty_tpl->tpl_vars['version']->value < 1.6) {?><img src="../img/admin/enabled.gif" alt="Enabled" title="Enabled" /><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'giftcard'),$_smarty_tpl ) );
}?></label>
						<input type="radio" name="free_shipping" id="free_shipping_off" value="0" <?php if (!empty($_smarty_tpl->tpl_vars['card']->value) && $_smarty_tpl->tpl_vars['card']->value['free_shipping'] == 0) {?>checked="checked"<?php }?>/>
						<label class="t" for="free_shipping_off"><?php if ($_smarty_tpl->tpl_vars['version']->value < 1.6) {?><img src="../img/admin/disabled.gif" alt="Disabled" title="Disabled" /><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'giftcard'),$_smarty_tpl ) );
}?></label>
						<a class="slide-button btn"></a>
					</span>
				</div>
			</div>
	<div class="clearfix"></div>
</div><div class="clearfix"></div><?php }
}
