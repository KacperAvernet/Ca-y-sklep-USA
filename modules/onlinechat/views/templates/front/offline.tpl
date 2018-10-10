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
    var online = "{$online|intval}";
    OCHAT_UNIQID = "{$ochat_uniqid|escape:'htmlall':'UTF-8'}";
</script>

<div class="row chat-window" id="chat_window_2">
    <div class="ochat-panel-default">
        <div class="ochat-panel-heading" style="background-color: {$OCHAT_OFFLINE_HEADER_BG_COLOR|escape:'htmlall':'UTF-8'}">
            <div class="col-md-10 col-xs-10">
                <p class="ochat-title" style="color: {$OCHAT_OFFLINE_HEADER_TEXT_COLOR|escape:'htmlall':'UTF-8'}"><i class="fa fa-comments-o fa-lg"></i>&nbsp;&nbsp;{$OCHAT_OFFLINE_HEADER_TEXT|escape:'htmlall':'UTF-8'}</p>
            </div>
            <div class="col-md-2 col-xs-2">
                <a href="#"><span id="minim_chat_window" class="fa fa-caret-up fa-lg icon-minus icon_minim  panel-collapsed" style="color: {$OCHAT_OFFLINE_HEADER_TEXT_COLOR|escape:'htmlall':'UTF-8'}"></span></a>
            </div>
        </div>
        <div class="offline-form msg_container_base" style="display: none;">
            <form role="form" class="form-group" enctype="text/plain" action="#" method="POST" id="offlineForm" name="offlineForm">
                <br/>
                <div class="ochat-alert ochat-alert-success" role="alert" style="display: none;" id="return-message">
                        {$OCHAT_OFFLINE_SEND_MESSAGE|escape:'htmlall':'UTF-8'}
                </div>
                <div class="ochat-alert ochat-alert-warning" role="alert" style="display: none;" id="disconnect-message">
                        {l s='An error occured. Please try to send your message later.' mod='onlinechat'}
                </div>
                <div class="row">
                    <div class="col-sm-12 OCHAT_OFFLINE_WELCOME_TEXT">
                        {$OCHAT_OFFLINE_WELCOME_TEXT|escape:'htmlall':'UTF-8'}
                    </div>
                </div>
                <br/>
                {if $OCHAT_FORM_NAME == 1}
                    <div class="row">
                        <div class="ochat-form-group clear">
                            <div class="col-sm-12">
                                <input type="text" class="ochat-form-control {if isset($ochat_customer['name'])}valid-input{/if}" id="OCHAT_FORM_NAME" name="OCHAT_FORM_NAME" placeholder="{l s='Name' mod='onlinechat'}" value="{if isset($ochat_customer['name'])}{$ochat_customer['name']|escape:'htmlall':'UTF-8'}{/if}" maxlength="40"/>
                            </div>
                        </div>
                    </div>
                {/if}
                <div class="row">
                    <div class="ochat-form-group ochat-form-email clear">
                        <div class="col-sm-12">
                            <input type="email" class="ochat-form-control {if isset($ochat_customer['email'])}valid-input{/if}" id="OCHAT_FORM_EMAIL" name="OCHAT_FORM_EMAIL" placeholder="{l s='Email' mod='onlinechat'}" value="{if isset($ochat_customer['email'])}{$ochat_customer['email']|escape:'htmlall':'UTF-8'}{/if}" maxlength="40"/>
                        </div>
                    </div>
                </div>
                {if $OCHAT_FORM_PHONE == 1}
                    <div class="row">
                        <div class="ochat-form-group clear">
                            <div class="col-sm-12">
                                <input type="text" class="ochat-form-control" id="OCHAT_FORM_PHONE" name="OCHAT_FORM_PHONE" placeholder="{l s='Phone' mod='onlinechat'}" maxlength="40"/>
                            </div>
                        </div>
                    </div>
                {/if}
                <div class="row">
                    <div class="ochat-form-group clear">
                        <div class="col-sm-12 ochat-offline-form-message">
                            <textarea type="textarea" rows="3" class="ochat-form-control" id="OCHAT_FORM_MESSAGE" name="OCHAT_FORM_MESSAGE" placeholder="{l s='Message' mod='onlinechat'}"></textarea>
                        </div>
                    </div>
                </div>
                {hook h='displayGDPRConsent' mod='psgdpr' id_module=$id_module}
                    <button type="submit" id="send-offline-form" class="ochat-btn ochat-btn-primary ochat-pull-right cant-submit"><i class="fa fa-send-o"></i> {l s='Send' mod='onlinechat'}</button>            </form>
        </div>
    </div>
</div>
