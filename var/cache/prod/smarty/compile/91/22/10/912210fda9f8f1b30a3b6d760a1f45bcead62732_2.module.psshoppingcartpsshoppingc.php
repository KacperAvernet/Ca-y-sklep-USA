<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:17:04
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda770eebba4_00957636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '912210fda9f8f1b30a3b6d760a1f45bcead62732' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1538389358,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda770eebba4_00957636 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- #cart-product-list > blockcart >header {
  display: none:
}   -->

<div class="cartadd">
<div id="cart-product-list">
  <div class="blockcartright cart-preview" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
     <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>

      <div class="product-list plist">
          <div class="product-content-box tvscroll-container">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                  <div class="product-wrapper items row ">
                 <div class="col-md-9">   
                    <span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </div>
                  <div class="col-md-3">
                    <span class="product-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <a  class="remove-from-cart"
                        rel="nofollow"
                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                        data-link-action="delete-from-cart"
                        data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                    >
                        <!-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 -->
                                            <i class="material-icons float-xs-right trashcan">delete</i>
                                        
                    </a>
                    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
                        <div class="customizations">
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                                    <li>
                                        <span class="product-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" class="remove-from-cart" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                                        <ul>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                                <li>
                                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                        <span><?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                                    <?php }?>
                                                </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                <?php }?>
</div>
                  </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
           

          <div class="product-list-total-info cartinfo">
            <hr class="separator">
             <!--  <div class="product-list-subtotal-prod subprod"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
<span> </span><span class="product-price pprice"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div> -->

              <div class="product-list-subtotal-shipping subship"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
<span> </span><span class="product-price pprice"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['shipping']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div>

              <div class="product-list-subtotal-tax subtax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
<span> </span><span class="product-price pprice"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div>

              <div class="product-list-subtotal-excluding-text subtxt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
<span> </span><span class="product-price pprice">   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_excluding_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></div>

              <div class="btn btn-primary product-list-checkout lcheck"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed To CheckOut','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</a></div>
          </div>
     
      </div>
      <?php } else { ?>
      <div class="no-product">
          <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Product in Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
      </div>
      <?php }?>
 </div>
</div>
</div>



            
              <!--  <DIV class="card cart-summary cartadd" id="cartadd">
                  
              <div class="cart-detailed-totals">

                <div class="card-block">
                                <div class="cart-summary-line" id="cart-subtotal-products">
                        <span class="label js-subtotal">
                                        1 item
                                    </span>
                        <span class="value">$8.00</span>
                                </div
                                                <div class="cart-summary-line" id="cart-subtotal-shipping">
                        <span class="label">
                                        Shipping
                                    </span>
                        <span class="value">Free</span>
                                      <div><small class="value"></small></div>
                                </div
                                    </div>

   

                <hr class="separator">

                <div class="card-block">
                  <div class="cart-summary-line cart-total">
                    <span class="label">Total (tax excl.)</span>
                    <span class="value">$8.00</span>
                  </div>

                  
                                          
                  <div class="cart-summary-line">
                    <small class="label">Taxes</small>
                    <small class="value">$0.72</small>
                  </div>
                </div>

                <hr class="separator">
              </div>

 
                        
  <div class="checkout cart-detailed-actions card-block">
          <div class="text-sm-center">
        <a href="http://food.vm6.pl/en/order" class="btn btn-primary">Proceed to checkout</a>
        
      </div>
      </div> -->

                    

                <?php }
}
