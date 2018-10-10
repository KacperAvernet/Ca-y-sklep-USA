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

<div class="clearfix"></div>
<h3><i class="icon-cogs"></i> {l s='CONFIGURATION' mod='onlinechat'} <small>{$module_display_name|escape:'htmlall':'UTF-8'}</small></h3>
<form role="form" class="form-group" enctype="text/plain" action="#" method="POST" id="onlineChatForm" name="onlineChatForm">
    <div class="form-group">
        {* Merchant settings *}
        <div class="panel panel-default">
            <div class="panel-heading">
                1 - {l s='MERCHANT SETTINGS' mod='onlinechat'}
            </div>
            <div class="panel-body">
                <div class="clearfix">
                    <div class="form-group clear">
                        <label for="OCHAT_IS_ONLINE" class="col-sm-4 control-label">
                            <h4>{l s='Allow chat Online' mod='onlinechat'} ?</h4>
                        </label>
                        <div class="col-sm-6">
                            <span id="OCHAT_IS_ONLINE" class="switch prestashop-switch input-group col-sm-12 col-md-8 col-lg-8">
                                <input type="radio" name="OCHAT_IS_ONLINE" id="OCHAT_IS_ONLINE_YES" {if $config_vars['OCHAT_IS_ONLINE'] == 'yes'}checked="checked"{/if} value="yes" />
                                    <label for="OCHAT_IS_ONLINE_YES" class="radioCheck">
                                        <i class="color_success"></i> {l s=' YES ' mod='onlinechat'}
                                    </label>
                                <input type="radio" class="switch_off" name="OCHAT_IS_ONLINE" id="OCHAT_IS_ONLINE_NO"{if empty($config_vars['OCHAT_IS_ONLINE']) || $config_vars['OCHAT_IS_ONLINE'] == 'no'}checked="checked"{/if} value="no" />
                                <label for="OCHAT_IS_ONLINE_NO" class="radioCheck">
                                    <i class="color_success"></i> {l s=' NO ' mod='onlinechat'}
                                </label>
                                <a class="slide-button btn"></a>
                            </span>
                            <p class="help-block">
                                {l s='If you choose NO, even if an employee is "Online", the module will appear offline for your customers' mod='onlinechat'}
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_OPERATOR_NAME" class="col-sm-4 control-label">
                            <h4>{l s='Operator name' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="{if !empty($config_vars['OCHAT_OPERATOR_NAME'])}{$config_vars['OCHAT_OPERATOR_NAME']|escape:'htmlall':'UTF-8'}{/if}" id="OCHAT_OPERATOR_NAME" name="OCHAT_OPERATOR_NAME" placeholder="{l s='Admin' mod='onlinechat'}" maxlength="40"/>
                            <p class="help-block">
                                {l s='This name will be displayed in the chat below your messages' mod='onlinechat'}
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_POSITION" class="col-sm-4 control-label">
                            <h4>{l s='Display back-office chat menu on the left or right side ?' mod='onlinechat'}</h4>
                        </label>
                        <div class="col-sm-6">
                            <span id="OCHAT_POSITION" class="switch prestashop-switch input-group col-sm-12 col-md-8 col-lg-8">
                                <input type="radio" name="OCHAT_POSITION" id="OCHAT_POSITION_LEFT" {if $config_vars['OCHAT_POSITION'] == 'left'}checked="checked"{/if} value="left" />
                                    <label for="OCHAT_POSITION_LEFT" class="radioCheck">
                                        <i class="color_success"></i> {l s=' LEFT ' mod='onlinechat'}
                                    </label>
                                <input type="radio" class="switch_off" name="OCHAT_POSITION" id="OCHAT_POSITION_RIGHT"{if empty($config_vars['OCHAT_POSITION']) || $config_vars['OCHAT_POSITION'] == 'right'}checked="checked"{/if} value="right" />
                                <label for="OCHAT_POSITION_RIGHT" class="radioCheck">
                                    <i class="color_success"></i> {l s=' RIGHT ' mod='onlinechat'}
                                </label>
                                <a class="slide-button btn"></a>
                            </span>
                            <p class="help-block">
                                {l s='If you click left, the chat menu will be displayed on the left side' mod='onlinechat'}
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_BIP_SOUND" class="col-sm-4 control-label">
                            <h4>{l s='Activate beep sound when you receive a new message' mod='onlinechat'}</h4>
                        </label>
                        <div class="col-sm-6">
                            <span id="OCHAT_BIP_SOUND" class="switch prestashop-switch input-group col-sm-12 col-md-8 col-lg-8">
                                <input type="radio" name="OCHAT_BIP_SOUND" id="OCHAT_BIP_SOUND_YES" {if $config_vars['OCHAT_BIP_SOUND'] == 1}checked="checked"{/if} value="1" />
                                    <label for="OCHAT_BIP_SOUND_YES" class="radioCheck">
                                        <i class="color_success"></i> {l s=' YES ' mod='onlinechat'}
                                    </label>
                                <input type="radio" class="switch_off" name="OCHAT_BIP_SOUND" id="OCHAT_BIP_SOUND_NO"{if empty($config_vars['OCHAT_BIP_SOUND']) || $config_vars['OCHAT_BIP_SOUND']|intval === 0}checked="checked"{/if} value="0" />
                                <label for="OCHAT_BIP_SOUND_NO" class="radioCheck">
                                    <i class="color_success"></i> {l s=' NO ' mod='onlinechat'}
                                </label>
                                <a class="slide-button btn"></a>
                            </span>
                            <div class="sound-control" style="{if $config_vars['OCHAT_BIP_SOUND'] != 1}display: none;{/if}">
                                <p class="help-block">
                                    <div id="ochat-sound-slider"></div><i class="fa fa-volume-up" aria-hidden="true"><span class="pull-right" id="sound-vol">{$OCHAT_BIP_VOLUME|intval}<span></i>
                                    <input name="OCHAT_BIP_VOLUME" type="hidden" id="OCHAT_BIP_VOLUME" value="{$OCHAT_BIP_VOLUME|intval}"/>
                                    {*{l s='If you click yes, you will hear a small beep sound every time there is a new conversation or new message' mod='onlinechat'}*}
                                </p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_IF_OFFLINE_ACTIVATED" class="col-sm-4 control-label">
                            <h4>{l s='Do you want to activate offline mode ?' mod='onlinechat'}</h4>
                        </label>
                        <div class="col-sm-6">
                            <span id="OCHAT_IF_OFFLINE_ACTIVATED" class="switch prestashop-switch input-group col-sm-12 col-md-8 col-lg-8">
                                <input type="radio" name="OCHAT_IF_OFFLINE_ACTIVATED" id="OCHAT_IF_OFFLINE_ACTIVATED_YES" {if $config_vars['OCHAT_IF_OFFLINE_ACTIVATED'] == 1}checked="checked"{/if} value="1" />
                                    <label for="OCHAT_IF_OFFLINE_ACTIVATED_YES" class="radioCheck">
                                        <i class="color_success"></i> {l s=' YES ' mod='onlinechat'}
                                    </label>
                                <input type="radio" class="switch_off" name="OCHAT_IF_OFFLINE_ACTIVATED" id="OCHAT_IF_OFFLINE_ACTIVATED_NO"{if empty($config_vars['OCHAT_IF_OFFLINE_ACTIVATED']) || $config_vars['OCHAT_IF_OFFLINE_ACTIVATED']|intval === 0}checked="checked"{/if} value="0" />
                                <label for="OCHAT_IF_OFFLINE_ACTIVATED_NO" class="radioCheck">
                                    <i class="color_success"></i> {l s=' NO ' mod='onlinechat'}
                                </label>
                                <a class="slide-button btn"></a>
                            </span>
                            <p class="help-block">
                                {l s='If you choose to activate offline mode, the chat window will display a contact form on your store when you are offline' mod='onlinechat'}
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO" class="col-sm-4 control-label">
                            <h4>{l s='Maximum number of simultaneous online conversations' mod='onlinechat'} <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" value="{if !empty($config_vars['OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO'])}{$config_vars['OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO']|intval}{/if}" id="OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO" name="OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO" placeholder="{l s='20' mod='onlinechat'}" min="1"/>
                            <p class="help-block">
                                {l s='Choose the maximum number of clients who will be able to chat with you at the same time. Your other clients will see a offline window if you clicked Yes on Offline activation. Info : if you choose a number higher than 15-20, it may decrease the performance of your website.' mod='onlinechat'}
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            </div>
        </div>

        {* Online chat box configuration *}
        <div class="panel panel-default">
            <div class="panel-heading">
                2 - {l s='ONLINE CHAT BOX CONFIGURATION' mod='onlinechat'}
            </div>
            <div class="panel-body">
                <div class="clearfix">
                    <div class="form-group clear">
                        <label for="OCHAT_ONLINE_HEADER_TEXT" class="col-sm-4 control-label">
                            <h4>{l s='Header text' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {foreach from=$languages key=k item=lang }
                                    <div class="OCHAT_ONLINE_HEADER_TEXT" id="OCHAT_ONLINE_HEADER_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" style="{if $k != 0}display:none;{/if}">
                                        <div class="col-sm-10 cleft">
                                            <input type="text"  name="OCHAT_ONLINE_HEADER_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" size="15" value="{if isset($config_vars['OCHAT_ONLINE_HEADER_TEXT'][$lang.id_lang|intval])}{$config_vars['OCHAT_ONLINE_HEADER_TEXT'][$lang.id_lang|intval]}{/if}" placeholder="{l s='Header text' mod='onlinechat'}" />
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown" style="width: 40px;">
                                                {$lang.iso_code|escape:'htmlall':'UTF-8'}
                                                <i class="icon-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                {foreach from=$languages item=lang}
                                                    <li><a href="#" class="OCHAT_ONLINE_HEADER_TEXT_BUTTON" data-id-lang="{$lang.id_lang|intval}">{$lang.name|escape:'htmlall':'UTF-8'}</a></li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <p class="help-block">
                                {l s='This text will be displayed in the header of the chat window on your store' mod='onlinechat'}
                            </p>
                        </div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_ONLINE_WELCOME_TEXT" class="col-sm-4 control-label">
                            <h4>{l s='Welcome text' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {foreach from=$languages key=k item=lang}
                                    <div class="OCHAT_ONLINE_WELCOME_TEXT" id="OCHAT_ONLINE_WELCOME_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" style="{if $k != 0}display:none;{/if}">
                                        <div class="col-sm-10 cleft">
                                            <input type="text"  name="OCHAT_ONLINE_WELCOME_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" size="15" value="{if isset($config_vars['OCHAT_ONLINE_WELCOME_TEXT'][$lang.id_lang|intval])}{$config_vars['OCHAT_ONLINE_WELCOME_TEXT'][$lang.id_lang|intval]}{/if}" placeholder="{l s='Welcome text' mod='onlinechat'}" />
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown" style="width: 40px;">
                                                {$lang.iso_code|escape:'htmlall':'UTF-8'}
                                                <i class="icon-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                {foreach from=$languages item=lang}
                                                    <li><a href="#" class="OCHAT_ONLINE_WELCOME_TEXT_BUTTON" data-id-lang="{$lang.id_lang|intval}">{$lang.name|escape:'htmlall':'UTF-8'}</a></li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <p class="help-block">
                                {l s='This text will be displayed inside the chat window below the header and above the messages of the conversation' mod='onlinechat'}
                            </p>
                        </div>
                    </div>

                    <div class="form-group clear">
                        <div class="col-sm-6">
                            <div class="form-group clear">
                                <label for="OCHAT_ONLINE_HEADER_BG_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Header background color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_ONLINE_HEADER_BG_COLOR" name="OCHAT_ONLINE_HEADER_BG_COLOR" value="{if !empty($config_vars['OCHAT_ONLINE_HEADER_BG_COLOR'])}{$config_vars['OCHAT_ONLINE_HEADER_BG_COLOR']|escape:'htmlall':'UTF-8'}{else}#ffffff{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label for="OCHAT_ONLINE_HEADER_TEXT_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Header text color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_ONLINE_HEADER_TEXT_COLOR" name="OCHAT_ONLINE_HEADER_TEXT_COLOR" value="{if !empty($config_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR'])}{$config_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR']|escape:'htmlall':'UTF-8'}{else}#000000{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label class="col-sm-12 control-label">
                                    <h4>{l s='OPERATOR' mod='onlinechat'}</h4>
                                </label>
                            </div>
                            <div class="form-group clear">
                                <label for="OCHAT_OPERATOR_CHAT_BOX_BG_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Chat box background color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_OPERATOR_CHAT_BOX_BG_COLOR" name="OCHAT_OPERATOR_CHAT_BOX_BG_COLOR" value="{if !empty($config_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR'])}{$config_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR']|escape:'htmlall':'UTF-8'}{else}#ffffff{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label for="OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Chat box text color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR" name="OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR" value="{if !empty($config_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR'])}{$config_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR']|escape:'htmlall':'UTF-8'}{else}#000000{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label class="col-sm-12 control-label">
                                    <h4>{l s='CLIENT' mod='onlinechat'}</h4>
                                </label>
                            </div>
                            <div class="form-group clear">
                                <label for="OCHAT_CLIENT_CHAT_BOX_BG_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Chat box background color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_CLIENT_CHAT_BOX_BG_COLOR" name="OCHAT_CLIENT_CHAT_BOX_BG_COLOR" value="{if !empty($config_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR'])}{$config_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR']|escape:'htmlall':'UTF-8'}{else}#ffffff{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label for="OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Chat box text color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR" name="OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR" value="{if !empty($config_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR'])}{$config_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR']|escape:'htmlall':'UTF-8'}{else}#000000{/if}" />
                                </div>
                            </div>
                        </div>

                        {* Preview *}
                        <div class="col-sm-6">
                            <div class="form-group clear">
                                <label class="col-sm-2 col-sm-offset-5 control-label">
                                    <h4>{l s='PREVIEW' mod='onlinechat'}</h4>
                                </label>
                                <br/>
                                <br/>
                                <div id="online-preview">
                                    {include file="./../../front/online.tpl"}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {* Offline configuration *}
        <div class="panel panel-default pannel-offline" {if ($config_vars['OCHAT_IF_OFFLINE_ACTIVATED']|intval == 0)}style="display: none";{/if}>
            <div class="panel-heading">
                3 - {l s='OFFLINE CONFIGURATION' mod='onlinechat'}
            </div>
            <div class="panel-body">
                <div class="clearfix">
                    <div class="form-group clear">
                        <label for="OCHAT_EMAIL_TO_NOTIFY" class="col-sm-4 control-label">
                            <h4>{l s='Email to notify' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" value="{if !empty($config_vars['OCHAT_EMAIL_TO_NOTIFY'])}{$config_vars['OCHAT_EMAIL_TO_NOTIFY']|escape:'htmlall':'UTF-8'}{/if}" id="OCHAT_EMAIL_TO_NOTIFY" name="OCHAT_EMAIL_TO_NOTIFY" placeholder="{l s='Email to notify' mod='onlinechat'}" />
                            <p class="help-block">
                                {l s='This email will receive messages that clients send you through the offline chat' mod='onlinechat'}
                            </p>
                        </div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_OFFLINE_HEADER_TEXT" class="col-sm-4 control-label">
                            <h4>{l s='Header text' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {foreach from=$languages key=k item=lang }
                                    <div class="OCHAT_OFFLINE_HEADER_TEXT" id="OCHAT_OFFLINE_HEADER_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" style="{if $k != 0}display:none;{/if}">
                                        <div class="col-sm-10 cleft">
                                            <input type="text"  name="OCHAT_OFFLINE_HEADER_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" size="15" value="{if isset($config_vars['OCHAT_OFFLINE_HEADER_TEXT'][$lang.id_lang|intval])}{$config_vars['OCHAT_OFFLINE_HEADER_TEXT'][$lang.id_lang|intval]}{/if}" placeholder="{l s='Header text' mod='onlinechat'}" />
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown" style="width: 40px;">
                                                {$lang.iso_code|escape:'htmlall':'UTF-8'}
                                                <i class="icon-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                {foreach from=$languages item=lang}
                                                    <li><a href="#" class="OCHAT_OFFLINE_HEADER_TEXT_BUTTON" data-id-lang="{$lang.id_lang|intval}">{$lang.name|escape:'htmlall':'UTF-8'}</a></li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <p class="help-block">
                                {l s='This text will be displayed in the header of the chat window on your store' mod='onlinechat'}
                            </p>
                        </div>
                    </div>

                    <div class="form-group clear">
                        <label for="OCHAT_OFFLINE_WELCOME_TEXT" class="col-sm-4 control-label">
                            <h4>{l s='Welcome text' mod='onlinechat'}  <sup class="mandatory">*</sup></h4>
                        </label>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {foreach from=$languages key=k item=lang}
                                    <div class="OCHAT_OFFLINE_WELCOME_TEXT" id="OCHAT_OFFLINE_WELCOME_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" style="{if $k != 0}display:none;{/if}">
                                        <div class="col-sm-10 cleft">
                                            <input type="text"  name="OCHAT_OFFLINE_WELCOME_TEXT_{$lang.id_lang|intval}" class="OCHAT_TEXT_LANG" size="15" value="{if isset($config_vars['OCHAT_OFFLINE_WELCOME_TEXT'][$lang.id_lang|intval])}{$config_vars['OCHAT_OFFLINE_WELCOME_TEXT'][$lang.id_lang|intval]}{/if}" placeholder="{l s='Welcome text' mod='onlinechat'}" />
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown" style="width: 40px;">
                                                {$lang.iso_code|escape:'htmlall':'UTF-8'}
                                                <i class="icon-caret-down"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                {foreach from=$languages item=lang}
                                                    <li><a href="#" class="OCHAT_OFFLINE_WELCOME_TEXT_BUTTON" data-id-lang="{$lang.id_lang|intval}">{$lang.name|escape:'htmlall':'UTF-8'}</a></li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <p class="help-block">
                                {l s='This text will be displayed inside the chat window below the header and above the messages of the conversation' mod='onlinechat'}
                            </p>
                        </div>
                    </div>

                    <div class="form-group clear">
                        <br />
                        <div class="col-sm-6">
                            <div class="form-group clear">
                                <label class="col-sm-8 control-label" style="padding-left: 0;">
                                    <h4>{l s='Choose required information when you \'re offline' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4">
                                    <div class="col-sm-12">
                                        <input type="checkbox" class="OCHAT_CHECKBOX" name="OCHAT_FORM_NAME" id="OCHAT_FORM_NAME" {if $config_vars['OCHAT_FORM_NAME']|intval == 1}checked="true"{/if}>
                                        <label for="OCHAT_FORM_NAME">{l s='Name' mod='onlinechat'}</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="checkbox" class="OCHAT_CHECKBOX" name="OCHAT_FORM_EMAIL" id="OCHAT_FORM_EMAIL" disabled="disabled" checked="true">
                                        <label>{l s='Email' mod='onlinechat'}</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="checkbox" class="OCHAT_CHECKBOX" name="OCHAT_FORM_PHONE" id="OCHAT_FORM_PHONE" {if $config_vars['OCHAT_FORM_PHONE']|intval == 1}checked="true"{/if}>
                                        <label for="OCHAT_FORM_PHONE">{l s='Phone' mod='onlinechat'}</label>
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="checkbox" class="OCHAT_CHECKBOX" name="OCHAT_FORM_MESSAGE" id="OCHAT_FORM_MESSAGE" disabled="disabled" checked="true">
                                        <label>{l s='Message' mod='onlinechat'}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label for="OCHAT_OFFLINE_HEADER_BG_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Header background color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_OFFLINE_HEADER_BG_COLOR" name="OCHAT_OFFLINE_HEADER_BG_COLOR" value="{if !empty($config_vars['OCHAT_OFFLINE_HEADER_BG_COLOR'])}{$config_vars['OCHAT_OFFLINE_HEADER_BG_COLOR']|escape:'htmlall':'UTF-8'}{else}#ffffff{/if}" />
                                </div>
                            </div>

                            <div class="form-group clear">
                                <label for="OCHAT_OFFLINE_HEADER_TEXT_COLOR" class="col-sm-8 control-label ochat-left">
                                    <h4>{l s='Header text color' mod='onlinechat'}</h4>
                                </label>
                                <div class="col-sm-4 ochat-bottom">
                                    <input type="color" data-hex="true" class="color mColorPickerInput mColorPicker" id="OCHAT_OFFLINE_HEADER_TEXT_COLOR" name="OCHAT_OFFLINE_HEADER_TEXT_COLOR" value="{if !empty($config_vars['OCHAT_OFFLINE_HEADER_TEXT_COLOR'])}{$config_vars['OCHAT_OFFLINE_HEADER_TEXT_COLOR']|escape:'htmlall':'UTF-8'}{else}#000000{/if}" />
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group clear">
                                <label class="col-sm-2 col-sm-offset-5 control-label">
                                    <h4>{l s='PREVIEW' mod='onlinechat'}</h4>
                                </label>
                                <br/>
                                <br/>
                                <div id="offline-preview">
                                    {include file="./../../front/offline.tpl"}
                                </div>
                            </div>
                            {* Preview *}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="panel-footer">
            <div class="btn-group pull-right">
                <button name="submitConfiguration" id="submitConfiguration" type="submit" class="btn btn-default"><i class="process-icon-save"></i> {l s='Save' mod='onlinechat'}</button>
            </div>
        </div>
    </div>
</form>
