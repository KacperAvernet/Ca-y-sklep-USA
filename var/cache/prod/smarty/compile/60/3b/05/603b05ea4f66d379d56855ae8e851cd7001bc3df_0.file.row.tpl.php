<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:19:41
  from '/home/www/clients/client1/web339/web/admin300u137u0/themes/default/template/helpers/kpi/row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda80d7d0215_16751893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '603b05ea4f66d379d56855ae8e851cd7001bc3df' => 
    array (
      0 => '/home/www/clients/client1/web339/web/admin300u137u0/themes/default/template/helpers/kpi/row.tpl',
      1 => 1533633738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda80d7d0215_16751893 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel kpi-container">
	<?php if ($_smarty_tpl->tpl_vars['refresh']->value) {?>
		<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis(true);"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<?php }?>
	<div class="row">
		<?php $_smarty_tpl->_assignInScope('col', (int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kpis']->value, 'i', false, NULL, 'kpi', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']++;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
