<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:17:04
  from '/home/www/clients/client1/web339/web/themes/classic/templates/layouts/layout-right-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda770d422a3_55127103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff968e242597617b2c1c4a6ea06ea64dba8b755e' => 
    array (
      0 => '/home/www/clients/client1/web339/web/themes/classic/templates/layouts/layout-right-column.tpl',
      1 => 1536330683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda770d422a3_55127103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13841485075bbda770d333b6_57264541', 'left_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13891347315bbda770d344e8_77961110', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_13841485075bbda770d333b6_57264541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_13841485075bbda770d333b6_57264541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'content'} */
class Block_827662865bbda770d3be07_31483267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <P>Hello world! This is HTML5 Boilerplate.</P>
            <?php
}
}
/* {/block 'content'} */
/* {block 'content'} */
class Block_13396491205bbda770d3f592_76910863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <P>Hello world! This is HTML5 Boilerplate.</P>
            <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_13891347315bbda770d344e8_77961110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_13891347315bbda770d344e8_77961110',
  ),
  'content' => 
  array (
    0 => 'Block_827662865bbda770d3be07_31483267',
    1 => 'Block_13396491205bbda770d3f592_76910863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product' || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>

        <DIV id="content-wrapper" class="cart-grid-body col-xs-12 col-lg-8">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_827662865bbda770d3be07_31483267', 'content', $this->tplIndex);
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

        </DIV>

      
      


    <?php } else { ?>

        <DIV id="content-wrapper" class="right-column col-xs-12 col-sm-8 col-md-9">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13396491205bbda770d3f592_76910863', 'content', $this->tplIndex);
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

        </DIV>

    <?php }?>

<?php
}
}
/* {/block 'content_wrapper'} */
}
