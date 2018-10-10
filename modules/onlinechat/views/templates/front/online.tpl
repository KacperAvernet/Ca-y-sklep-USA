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
    var id_customer = null;
    if( typeof OCHAT_FRONT_CONTROLLER_URL == 'undefined' ) {
        OCHAT_FRONT_CONTROLLER_URL = "{$OCHAT_FRONT_CONTROLLER_URL}";
    }
    {if isset($id_lang)} var id_lang = "{$id_lang|intval}"; {/if}
    {if isset($id_shop)} var id_shop = "{$id_shop|intval}" ;{/if}

    {if isset($ochat_customer['name'])} var customer_name = "{$ochat_customer['name']|escape:'htmlall':'UTF-8'}" ;{/if}
    {if isset($ochat_customer['email'])} var customer_email = "{$ochat_customer['email']|escape:'htmlall':'UTF-8'}" ;{/if}
    {if isset($ochat_customer['id_customer'])} var customer_id = "{$ochat_customer['id_customer']|intval}" ;{/if}
    {if isset($ochat_customer['id_guest'])} var customer_id_guest = "{$ochat_customer['id_guest']|intval}" ;{/if}


    {if isset($id_customer)}
        id_customer = "{$id_customer|intval}";
        if (id_customer == '0') {
            id_customer = null;
        }
    {/if}
            {if isset($id_guest)} var id_guest = "{$id_guest|intval}";{/if}
    {if isset($online)} var online = "{$online|intval}";{/if}
    {if isset($json_handler_url)} var json_handler_url = "{$json_handler_url|escape:'quotes':'UTF-8'}";{/if}
    {if isset($OCHAT_OPERATOR_NAME)} var OCHAT_OPERATOR_NAME = "{$OCHAT_OPERATOR_NAME|escape:'htmlall':'UTF-8'}";{/if}
    {if isset($OCHAT_TIME_DELAY)} var OCHAT_TIME_DELAY = "{$OCHAT_TIME_DELAY|intval}";{/if}

    var cant_create_thread_message = '{l s='Sorry, we are currently busy, please try contact us shortly...' mod='onlinechat' js=1}',
        cant_create_thread_time = '{l s='Now' mod='onlinechat' js=1}';
    OCHAT_UNIQID = "{$ochat_uniqid|escape:'htmlall':'UTF-8'}";
</script>

<style>
    #chat_window_1 .msg_sent {
        background-color: {$OCHAT_CLIENT_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
        color : {$OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
    }
    #chat_window_1 .msg_receive {
        background-color: {$OCHAT_OPERATOR_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
        color : {$OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
    }
</style>
<div class="row chat-window" id="chat_window_1">
    <div class="ochat-panel-default">
        <div class="ochat-panel-heading" style="background-color: {$OCHAT_ONLINE_HEADER_BG_COLOR|escape:'htmlall':'UTF-8'}">
            <div class="col-md-10 col-xs-10">
                <p class="ochat-title" style="color: {$OCHAT_ONLINE_HEADER_TEXT_COLOR|escape:'htmlall':'UTF-8'}"><i class="fa fa-comments-o fa-lg"></i>&nbsp;&nbsp;{$OCHAT_ONLINE_HEADER_TEXT|escape:'htmlall':'UTF-8'}</p>
            </div>
            <div class="col-md-2 col-xs-2">
                <a href="#"><span id="minim_chat_window" class="fa fa-caret-up fa-lg icon-minus icon_minim panel-collapsed" style="color: {$OCHAT_ONLINE_HEADER_TEXT_COLOR|escape:'htmlall':'UTF-8'}"></span></a>
            </div>
        </div>
        <div class="msg_container_base" style="display: none;" data-thread="">
            <br/>
            <div class="row">
                <div class="col-sm-12 OCHAT_ONLINE_WELCOME_TEXT">
                    {$OCHAT_ONLINE_WELCOME_TEXT|escape:'htmlall':'UTF-8'}
                </div>
            </div>
            <br/>
            <div class="ochat-alert ochat-alert-info ochat-closed-thread" role="alert" style="display: none;">
                {$OCHAT_ONLINE_DELETED_THREAD_MESSAGE|escape:'htmlall':'UTF-8'}
            </div>
        </div>
        <div class="ochat-footer" style="display: none;">
            <div class="ochat-form-group">
                <div class="ochat-online-form-message">
                    <textarea id="btn-input" class="ochat-form-control chat-input" rows="3" placeholder="{$OCHAT_ONLINE_INPUT_PLACEHOLDER|escape:'htmlall':'UTF-8'}"></textarea>
                </div>
            </div>
            <button type="submit" id="btn-chat" class="ochat-btn ochat-btn-primary ochat-disabled"><i class="fa fa-send-o"></i> {l s='Send' mod='onlinechat'}</button>
            <div class="clear"></div>
        </div>
    </div>
</div>
