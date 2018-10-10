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

<style>
    #ochat-details .msg_receive {
        background-color: {$OCHAT_CLIENT_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
        color : {$OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
    }
    #ochat-details .msg_sent {
        background-color: {$OCHAT_OPERATOR_CHAT_BOX_BG_COLOR|escape:'htmlall':'UTF-8'};
        color : {$OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR|escape:'htmlall':'UTF-8'};
    }
    #ochat-details {
        max-height: 550px;
        overflow: auto;
    }
</style>

<div id="ochat-details">
    {foreach from=$message_list item=message}
        {if isset($message.id_employee)}
            <div class="row msg_container base_sent">
                <div class="col-md-10 col-xs-10">
                    <div class="messages msg_sent">
                        <p>{$message.message_content}</p>
                        <time datetime="2009-11-13T20:00">{$message.message_date|escape:'quotes':'UTF-8'}</time>
                    </div>
                </div>
            </div>
        {else}
            <div class="row msg_container base_receive">
                <div class="col-md-10 col-xs-10">
                    <div class="messages msg_receive">
                        <p>{$message.message_content}</p>
                        <time datetime="2009-11-13T20:00">{$message.message_date|escape:'quotes':'UTF-8'}</time>
                    </div>
                </div>
            </div>
        {/if}
    {/foreach}
</div>
