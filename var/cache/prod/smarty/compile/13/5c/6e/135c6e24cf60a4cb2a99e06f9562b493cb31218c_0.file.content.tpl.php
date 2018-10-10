<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:16:12
  from '/home/www/clients/client1/web339/web/admin300u137u0/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda73cc67b64_86024632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135c6e24cf60a4cb2a99e06f9562b493cb31218c' => 
    array (
      0 => '/home/www/clients/client1/web339/web/admin300u137u0/themes/default/template/content.tpl',
      1 => 1533633722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda73cc67b64_86024632 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
