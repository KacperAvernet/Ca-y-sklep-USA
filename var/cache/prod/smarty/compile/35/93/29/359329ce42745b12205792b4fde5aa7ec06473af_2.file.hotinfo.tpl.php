<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:17:04
  from '/home/www/clients/client1/web339/web/modules/hotinfo/hotinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda770c96309_82163897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '359329ce42745b12205792b4fde5aa7ec06473af' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/hotinfo/hotinfo.tpl',
      1 => 1538144629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda770c96309_82163897 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="hotinfo_top" align="center" style="text-align:center; background:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array']->value->bg_color, ENT_QUOTES, 'UTF-8');?>
; border-top:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array']->value->br_size, ENT_QUOTES, 'UTF-8');?>
px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array']->value->br_color, ENT_QUOTES, 'UTF-8');?>
;">
    <table style="width:100%; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['array']->value->height, ENT_QUOTES, 'UTF-8');?>
px; text-align:center;">
        <td><?php echo $_smarty_tpl->tpl_vars['array']->value->body;?>
</td>
    </table>
</div><?php }
}
