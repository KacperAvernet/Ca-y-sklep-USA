<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:21:24
  from '/home/www/clients/client1/web339/web/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda8749eb632_18979631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881e57d52589409a8ef29930982ed68dde50080a' => 
    array (
      0 => '/home/www/clients/client1/web339/web/themes/classic/templates/_partials/footer.tpl',
      1 => 1539005205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda8749eb632_18979631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
    <div class="row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9977517065bbda8749dd0a8_85393272', 'hook_footer_before');
?>

    </div>
</div>
<div class="footer-container">
    <div class="container">
        <div class="row rowfoot2">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1634111805bbda8749df159_40463967', 'hook_footer');
?>

            <div class="col-md-2 links wrapper">
                <div class="hidden-sm-down">
                    <h1 class="h1delivery">DELIVERY</h1>
                    <ul>
                        <li>MANCHESTER</li>
                        <li>GOFFSTOWN</li>
                        <li>HOOKSETT</li>
                        <li>BEDFORD</li>
                        <li>CONCORD</li>
                        <li>AUBURN</li>
                        <li>MERRIMACK</li>
                        <li>AMHERST</li>
                        <li>HOLLIS</li>
                        <li>HUDSON</li>
                        <li>NASHUA</li>
                        <li>DERRY</li>
                                                                                                                                                                                                                                                
                    </ul>
                </div>
            </div>
                    <div class="col-md-2 links wrapper">
                        <div class="hidden-sm-down twofooter">

                            <ul>
                                <li>WINDHAM</li>
                                <li>LONDONDERRY</li>
                                <li>SALEM</li>
                                <li>STRATHAM</li>
                                <li>PORTSMOUTH</li>
                                <li>HAMPTON</li>
                                <li>NORTH HAMPTON</li>
                                <li>HAMPTON FALLS</li>
                                <li>EXETER</li>
                                <li>RYE</li>
                            </ul>
                        </div>
                    </div>
            <div class="col-md-4 links wrapper">
                <div class="hidden-sm-down thirdfooter">
                <h2>With every purchase, All Real Meal supports the food insecure in our local and global community!</h2>
                </div>
            </div>
                                                                                

                                <div class="row">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1329226285bbda8749e3c55_12806189', 'hook_footer_after');
?>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-sm-center">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19534778975bbda8749e5c32_94752326', 'copyright_link');
?>

                        </p>
                    </div>
                </div>
            </div>
        </div>
<?php }
/* {block 'hook_footer_before'} */
class Block_9977517065bbda8749dd0a8_85393272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_9977517065bbda8749dd0a8_85393272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_1634111805bbda8749df159_40463967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_1634111805bbda8749df159_40463967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_1329226285bbda8749e3c55_12806189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_1329226285bbda8749e3c55_12806189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

                    <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_19534778975bbda8749e5c32_94752326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_19534778975bbda8749e5c32_94752326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <a class="_blank" href="http://www.prestashop.com" target="_blank">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                                </a>
                            <?php
}
}
/* {/block 'copyright_link'} */
}
