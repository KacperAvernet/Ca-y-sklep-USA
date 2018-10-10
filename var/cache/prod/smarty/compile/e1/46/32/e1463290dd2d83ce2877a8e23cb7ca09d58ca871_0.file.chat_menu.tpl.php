<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:16:12
  from '/home/www/clients/client1/web339/web/modules/onlinechat/views/templates/admin/chat/chat_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda73c423032_40073263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1463290dd2d83ce2877a8e23cb7ca09d58ca871' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/onlinechat/views/templates/admin/chat/chat_menu.tpl',
      1 => 1537541234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda73c423032_40073263 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var id_shop = "<?php echo intval($_smarty_tpl->tpl_vars['id_shop']->value);?>
",
        admin_module_controller_ochat = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['controller_name']->value,'htmlall','UTF-8' ));?>
",
        admin_module_ajax_url_ochat = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['controller_url']->value,'quotes','UTF-8' ));?>
",
        is_connected = "<?php echo intval($_smarty_tpl->tpl_vars['is_connected']->value);?>
",
        id_employee = "<?php echo intval($_smarty_tpl->tpl_vars['id_employee']->value);?>
",
        json_handler_url = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['json_handler_url']->value,'quotes','UTF-8' ));?>
",
        OCHAT_TIME_DELAY = "<?php echo intval($_smarty_tpl->tpl_vars['OCHAT_TIME_DELAY']->value);?>
",
        OCHAT_BIP_SOUND = "<?php echo intval($_smarty_tpl->tpl_vars['OCHAT_BIP_SOUND']->value);?>
",
        OCHAT_BIP_VOLUME = "<?php echo intval($_smarty_tpl->tpl_vars['OCHAT_BIP_VOLUME']->value);?>
",
        OCHAT_POSITION = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_POSITION']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_OPERATOR_NAME = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_NAME']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_ONLINE_HEADER_BG_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_BG_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_ONLINE_HEADER_TEXT_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_CLIENT_CHAT_BOX_BG_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_OPERATOR_CHAT_BOX_BG_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' ));?>
",
        OCHAT_UNIQID = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ochat_uniqid']->value,'htmlall','UTF-8' ));?>
",

        sounds = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sounds']->value,'htmlall','UTF-8' ));?>
",

        answer_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your answer','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        send_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Online Chat','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        title_login = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Chat switched to online','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        title_logout = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Chat switched to offline','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        login_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are now connected!','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        logout_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are no longer connected! All your closed conversations will be saved into the database.','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        customer = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        guest = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        open_menu_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open conversations','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        closed_menu_title = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Closed conversations','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        cancel_button = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        title_closed_thread = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'End this conversation ?','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_closed_thread = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you click ‘Close conversation’, your closed conversations will remain visible and available until you switch to offline','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_closed_thread_confirm_button = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close Conversation','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_closed_thread_success = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversation closed','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_open_thread_success = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversation re opened, please check the message in the open conversations menu','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_error = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An error occured','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        text_error_configuration = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module configuration must be valid','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        close_conversation_link = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Finish this conversation','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        open_conversation_link = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Open this conversation','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>


<style>
    .msg_receive {
        background-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' ));?>
;
        color : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' ));?>
;
    }
    .msg_sent {
         background-color: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' ));?>
;
         color : <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' ));?>
;
     }
</style>

<div class="panel panel-default" id="ochat-menu" style="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_POSITION']->value,'htmlall','UTF-8' ));?>
:10px;">
    <div class="list-group ochat-list">
        <div class="list-group-item ochat-login">
            <div class="ochat-login_threads" style="<?php if ($_smarty_tpl->tpl_vars['OCHAT_IS_ONLINE']->value == 'no') {?>display: none;<?php }?>"></div>
            <p class="text-center ochat-menu-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ONLINE CHAT','mod'=>'onlinechat'),$_smarty_tpl ) );?>
 <i class="ochat-resize-menu btn btn-default fa fa-lg fa-caret-down pull-right"></i></p>
            <div class="btn-group ochat-connector ochat-is-online <?php if ($_smarty_tpl->tpl_vars['OCHAT_IS_ONLINE']->value == 'yes') {?>ochat-button-show<?php }?>" data-toggle="buttons" style="<?php if ($_smarty_tpl->tpl_vars['OCHAT_IS_ONLINE']->value == 'no') {?>display: none;<?php }?>">
                <label class="btn <?php if ($_smarty_tpl->tpl_vars['is_connected']->value == 1) {?>btn-success active<?php } else { ?>btn-default<?php }?>" id="ochat-switch-online">
                    <input type="radio" name="options" id="option1" autocomplete="off" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ONLINE','mod'=>'onlinechat'),$_smarty_tpl ) );?>

                </label>
                <label class="btn <?php if ($_smarty_tpl->tpl_vars['is_connected']->value == 0) {?>btn-danger active<?php } else { ?>btn-default<?php }?>" id="ochat-switch-offline">
                    <input type="radio" name="options" id="option2" autocomplete="off" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OFFLINE','mod'=>'onlinechat'),$_smarty_tpl ) );?>

                </label>
            </div>
             <div class="btn-group ochat-connector ochat-is-offline <?php if ($_smarty_tpl->tpl_vars['OCHAT_IS_ONLINE']->value == 'no') {?>ochat-button-show<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['OCHAT_IS_ONLINE']->value == 'yes') {?>display: none;<?php }?>">
                <p class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The chat is set offline by the administrator','mod'=>'onlinechat'),$_smarty_tpl ) );?>
.</p>
            </div>
        </div>
    </div>
</div>
<?php }
}
