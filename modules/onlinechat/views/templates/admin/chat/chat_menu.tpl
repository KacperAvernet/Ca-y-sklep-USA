{*
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<script>
    var id_shop = "{$id_shop|intval}",
        admin_module_controller_ochat = "{$controller_name|escape:'htmlall':'UTF-8'}",
        admin_module_ajax_url_ochat = "{$controller_url|escape:'quotes':'UTF-8'}",
        is_connected = "{$is_connected|intval}",
        id_employee = "{$id_employee|intval}",
        json_handler_url = "{$json_handler_url|escape:'quotes':'UTF-8'}",
        OCHAT_TIME_DELAY = "{$OCHAT_TIME_DELAY|intval}",
        OCHAT_BIP_SOUND = "{$OCHAT_BIP_SOUND|intval}",
        OCHAT_BIP_VOLUME = "{$OCHAT_BIP_VOLUME|intval}",
        OCHAT_POSITION = "{$OCHAT_POSITION|escape:'htmlall':'UTF-8'}",
        OCHAT_OPERATOR_NAME = "{$OCHAT_OPERATOR_NAME|escape:'htmlall':'UTF-8'}",
        OCHAT_ONLINE_HEADER_BG_COLOR = "{$OCHAT_ONLINE_HEADER_BG_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_ONLINE_HEADER_TEXT_COLOR = "{$OCHAT_ONLINE_HEADER_TEXT_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_CLIENT_CHAT_BOX_BG_COLOR = "{$OCHAT_CLIENT_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR = "{$OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_OPERATOR_CHAT_BOX_BG_COLOR = "{$OCHAT_OPERATOR_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR = "{$OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'}",
        OCHAT_UNIQID = "{$ochat_uniqid|escape:'htmlall':'UTF-8'}",

        sounds = "{$sounds|escape:'htmlall':'UTF-8'}",

        answer_message = '{l s='Your answer' mod='onlinechat' js=1}',
        send_message = '{l s='Send' mod='onlinechat' js=1}',
        title = '{l s='Online Chat' mod='onlinechat' js=1}',
        title_login = '{l s='Chat switched to online' mod='onlinechat' js=1}',
        title_logout = '{l s='Chat switched to offline' mod='onlinechat' js=1}',
        login_message = '{l s='You are now connected!' mod='onlinechat' js=1}',
        logout_message = '{l s='You are no longer connected! All your closed conversations will be saved into the database.' mod='onlinechat' js=1}',
        customer = '{l s='Customer' mod='onlinechat' js=1}',
        guest = '{l s='Guest' mod='onlinechat' js=1}',
        open_menu_title = '{l s='Open conversations' mod='onlinechat' js=1}',
        closed_menu_title = '{l s='Closed conversations' mod='onlinechat' js=1}',
        cancel_button = '{l s='Cancel' mod='onlinechat' js=1}',
        title_closed_thread = '{l s='End this conversation ?' mod='onlinechat' js=1}',
        text_closed_thread = '{l s='If you click ‘Close conversation’, your closed conversations will remain visible and available until you switch to offline' mod='onlinechat' js=1}',
        text_closed_thread_confirm_button = '{l s='Close Conversation' mod='onlinechat' js=1}',
        text_closed_thread_success = '{l s='Conversation closed' mod='onlinechat' js=1}',
        text_open_thread_success = '{l s='Conversation re opened, please check the message in the open conversations menu' mod='onlinechat' js=1}',
        text_error = '{l s='An error occured' mod='onlinechat' js=1}',
        text_error_configuration = '{l s='Module configuration must be valid' mod='onlinechat' js=1}',
        close_conversation_link = '{l s='Finish this conversation' mod='onlinechat' js=1}',
        open_conversation_link = '{l s='Open this conversation' mod='onlinechat' js=1}';
</script>


<style>
    .msg_receive {
        background-color: {$OCHAT_CLIENT_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
        color : {$OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
    }
    .msg_sent {
         background-color: {$OCHAT_OPERATOR_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
         color : {$OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
     }
</style>

<div class="panel panel-default" id="ochat-menu" style="{$OCHAT_POSITION|escape:'htmlall':'UTF-8'}:10px;">
    <div class="list-group ochat-list">
        <div class="list-group-item ochat-login">
            <div class="ochat-login_threads" style="{if $OCHAT_IS_ONLINE eq 'no'}display: none;{/if}"></div>
            <p class="text-center ochat-menu-title">{l s='ONLINE CHAT' mod='onlinechat'} <i class="ochat-resize-menu btn btn-default fa fa-lg fa-caret-down pull-right"></i></p>
            <div class="btn-group ochat-connector ochat-is-online {if $OCHAT_IS_ONLINE eq 'yes'}ochat-button-show{/if}" data-toggle="buttons" style="{if $OCHAT_IS_ONLINE eq 'no'}display: none;{/if}">
                <label class="btn {if $is_connected == 1}btn-success active{else}btn-default{/if}" id="ochat-switch-online">
                    <input type="radio" name="options" id="option1" autocomplete="off" />{l s='ONLINE' mod='onlinechat'}
                </label>
                <label class="btn {if $is_connected == 0}btn-danger active{else}btn-default{/if}" id="ochat-switch-offline">
                    <input type="radio" name="options" id="option2" autocomplete="off" />{l s='OFFLINE' mod='onlinechat'}
                </label>
            </div>
             <div class="btn-group ochat-connector ochat-is-offline {if $OCHAT_IS_ONLINE eq 'no'}ochat-button-show{/if}" style="{if $OCHAT_IS_ONLINE eq 'yes'}display: none;{/if}">
                <p class="text-center">{l s='The chat is set offline by the administrator' mod='onlinechat'}.</p>
            </div>
        </div>
    </div>
</div>
