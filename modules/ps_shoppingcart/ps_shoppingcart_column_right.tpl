
<!-- #cart-product-list > blockcart >header {
  display: none:
}   -->
<div class="cartadd">
<div id="cart-product-list">
  <div class="blockcartright cart-preview" data-refresh-url="{$refresh_url}">
     {if $cart.products_count > 0}
     
      <div class="product-list plist">
          <div class="product-content-box tvscroll-container">
              {foreach from=$cart.products item=product}
                  <div class="product-wrapper items">{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}</div>
              {/foreach}
          </div>
           

          <div class="product-list-total-info cartinfo">
            <hr class="separator">
              <div class="product-list-subtotal-prod subprod">{l s='Subtotal' d='Shop.Theme.Checkout'}<span> </span><span class="product-price pprice">{$cart.subtotals.products.value}</span></div>

              <div class="product-list-subtotal-shipping subship">{l s='Shipping' d='Shop.Theme.Checkout'}<span> </span><span class="product-price pprice">{$cart.subtotals.shipping.value}</span></div>

              <div class="product-list-subtotal-tax subtax">{l s='Tax' d='Shop.Theme.Checkout'}<span> </span><span class="product-price pprice">{$cart.subtotals.tax.value}</span></div>

              <div class="product-list-subtotal-excluding-text subtxt">{l s='Total' d='Shop.Theme.Checkout'}<span> </span><span class="product-price pprice">   {$cart.totals.total_excluding_tax.value}</span></div>

              <div class="btn btn-primary product-list-checkout lcheck"><a href="{$cart_url}">{l s='Process To CheckOut' d='Shop.Theme.Checkout'}</a></div>
          </div>
     
      </div>
      {else}
      <div class="no-product">
          <img src="/img/cart_empty.png" alt="cart_empty" class="img-fluid" />
          <h4 class="light">{l s='No Product Add in Cart' d='Shop.Theme.Checkout'}</h4>
      </div>
      {/if}
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

                    

                