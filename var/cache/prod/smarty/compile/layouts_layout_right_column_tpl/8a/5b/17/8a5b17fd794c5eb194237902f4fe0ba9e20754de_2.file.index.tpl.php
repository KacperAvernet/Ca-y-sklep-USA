<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:17:04
  from '/home/www/clients/client1/web339/web/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda770d18bd1_57252839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5b17fd794c5eb194237902f4fe0ba9e20754de' => 
    array (
      0 => '/home/www/clients/client1/web339/web/themes/classic/templates/index.tpl',
      1 => 1535036209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda770d18bd1_57252839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6997998455bbda770d13765_06965625', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14397682765bbda770d144b5_11558964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19243686335bbda770d16235_23983750 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11336144635bbda770d15692_85678383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19243686335bbda770d16235_23983750', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6997998455bbda770d13765_06965625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6997998455bbda770d13765_06965625',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14397682765bbda770d144b5_11558964',
  ),
  'page_content' => 
  array (
    0 => 'Block_11336144635bbda770d15692_85678383',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19243686335bbda770d16235_23983750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14397682765bbda770d144b5_11558964', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11336144635bbda770d15692_85678383', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
