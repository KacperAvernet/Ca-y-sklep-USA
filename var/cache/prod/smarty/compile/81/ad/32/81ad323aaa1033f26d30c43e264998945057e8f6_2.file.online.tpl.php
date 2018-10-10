<?php
/* Smarty version 3.1.32, created on 2018-10-10 03:17:04
  from '/home/www/clients/client1/web339/web/modules/onlinechat/views/templates/front/online.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbda770c7d971_73651291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ad323aaa1033f26d30c43e264998945057e8f6' => 
    array (
      0 => '/home/www/clients/client1/web339/web/modules/onlinechat/views/templates/front/online.tpl',
      1 => 1537541234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbda770c7d971_73651291 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var id_customer = null;
    if( typeof OCHAT_FRONT_CONTROLLER_URL == 'undefined' ) {
        OCHAT_FRONT_CONTROLLER_URL = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['OCHAT_FRONT_CONTROLLER_URL']->value, ENT_QUOTES, 'UTF-8');?>
";
    }
    <?php if (isset($_smarty_tpl->tpl_vars['id_lang']->value)) {?> var id_lang = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
"; <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['id_shop']->value)) {?> var id_shop = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_shop']->value), ENT_QUOTES, 'UTF-8');?>
" ;<?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['ochat_customer']->value['name'])) {?> var customer_name = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ochat_customer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ;<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ochat_customer']->value['email'])) {?> var customer_email = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ochat_customer']->value['email'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ;<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ochat_customer']->value['id_customer'])) {?> var customer_id = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['ochat_customer']->value['id_customer']), ENT_QUOTES, 'UTF-8');?>
" ;<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['ochat_customer']->value['id_guest'])) {?> var customer_id_guest = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['ochat_customer']->value['id_guest']), ENT_QUOTES, 'UTF-8');?>
" ;<?php }?>


    <?php if (isset($_smarty_tpl->tpl_vars['id_customer']->value)) {?>
        id_customer = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_customer']->value), ENT_QUOTES, 'UTF-8');?>
";
        if (id_customer == '0') {
            id_customer = null;
        }
    <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['id_guest']->value)) {?> var id_guest = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_guest']->value), ENT_QUOTES, 'UTF-8');?>
";<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['online']->value)) {?> var online = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['online']->value), ENT_QUOTES, 'UTF-8');?>
";<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['json_handler_url']->value)) {?> var json_handler_url = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['json_handler_url']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['OCHAT_OPERATOR_NAME']->value)) {?> var OCHAT_OPERATOR_NAME = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_NAME']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['OCHAT_TIME_DELAY']->value)) {?> var OCHAT_TIME_DELAY = "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['OCHAT_TIME_DELAY']->value), ENT_QUOTES, 'UTF-8');?>
";<?php }?>

    var cant_create_thread_message = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, we are currently busy, please try contact us shortly...','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
',
        cant_create_thread_time = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now','mod'=>'onlinechat','js'=>1),$_smarty_tpl ) );?>
';
    OCHAT_UNIQID = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ochat_uniqid']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>

<style>
    #chat_window_1 .msg_sent {
        background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        color : <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
    }
    #chat_window_1 .msg_receive {
        background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        color : <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
    }
</style>
<div class="row chat-window" id="chat_window_1">
    <div class="ochat-panel-default">
        <div class="ochat-panel-heading" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_BG_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <div class="col-md-10 col-xs-10">
                <p class="ochat-title" style="color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-comments-o fa-lg"></i>&nbsp;&nbsp;<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_TEXT']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
            <div class="col-md-2 col-xs-2">
                <a href="#"><span id="minim_chat_window" class="fa fa-caret-up fa-lg icon-minus icon_minim panel-collapsed" style="color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></span></a>
            </div>
        </div>
        <div class="msg_container_base" style="display: none;" data-thread="">
            <br/>
            <div class="row">
                <div class="col-sm-12 OCHAT_ONLINE_WELCOME_TEXT">
                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_WELCOME_TEXT']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                </div>
            </div>
            <br/>
            <div class="ochat-alert ochat-alert-info ochat-closed-thread" role="alert" style="display: none;">
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_DELETED_THREAD_MESSAGE']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

            </div>
        </div>
        <div class="ochat-footer" style="display: none;">
            <div class="ochat-form-group">
                <div class="ochat-online-form-message">
                    <textarea id="btn-input" class="ochat-form-control chat-input" rows="3" placeholder="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['OCHAT_ONLINE_INPUT_PLACEHOLDER']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></textarea>
                </div>
            </div>
            <button type="submit" id="btn-chat" class="ochat-btn ochat-btn-primary ochat-disabled"><i class="fa fa-send-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'onlinechat'),$_smarty_tpl ) );?>
</button>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php }
}
