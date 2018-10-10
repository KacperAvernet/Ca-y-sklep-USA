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
	ps_version = '{$ps_version|intval}';

	admin_module_controller_ochat = '{$controller_name|escape:'htmlall':'UTF-8'}';
	admin_module_ajax_url_ochat = '{$controller_url|escape:'quotes':'UTF-8'}';
	json_handler_url = '{$json_handler_url|escape:'quotes':'UTF-8'}';

	success_title = '{l s='Online Chat' mod='onlinechat' js=1}';
	success_message = '{l s='Configuration saved' mod='onlinechat' js=1}';
	error_title = '{l s='Error' mod='onlinechat' js=1}';
	error_message = '{l s='An error occured' mod='onlinechat' js=1}';
	error_email = '{l s='Please verify your email address' mod='onlinechat' js=1}';
	error_empty_text = '{l s='Please enter text for all languages' mod='onlinechat' js=1}';
	error_empty_operator = '{l s='Please enter operator name' mod='onlinechat' js=1}';
	error_empty_max_window = '{l s='Please set the maximum number of online windows' mod='onlinechat' js=1}';

	type_date = '{$type_date|escape:'htmlall':'UTF-8'}';
	chat_offline = '{l s="The chat is set offline by the administrator" mod="onlinechat" js=1}';
</script>

<div class="clearfix"></div>

<div class="bootstrap">
	<!-- Module content -->
	<div id="modulecontent" class="clearfix">

		{if $OCHAT_RIGHT == 0 || $config_vars['OCHAT_INSTALL'] == 0}
			<div class="alert alert-warning" role="alert">
				<p>
					{l s='Please correct the following error(s) before launching the module' mod='onlinechat'}
				</p>
				<p>
					<ul>
						{if $OCHAT_RIGHT == 0}
							<li>{l s='The current employee doesn\'t have the necessary rights to make the Online Chat module work. Please ask to the \'super admin\' of this shop to attribute you the edit rights in \'Administrateur > Permissions\'' mod='onlinechat'}</li>
						{/if}
						{if $config_vars['OCHAT_INSTALL'] == 0}
							<li>{l s='You don\'t have the necessary rights to make the Online Chat module work. Please give creation, update, delete permissions recursively on the module folder. Then reset the module.' mod='onlinechat'}</li>
						{/if}
					</ul>
				</p>
			</div>
		{/if}

		<!-- Nav tabs -->
		<div class="col-lg-2">
			<div class="list-group">
				<a href="#help" class="menu_tab list-group-item active" data-toggle="tab"><i class="icon-book"></i> {l s='Help' mod='onlinechat'}</a>
				<a href="#configuration" class="menu_tab list-group-item" data-toggle="tab"><i class="icon-cogs"></i> {l s='Configuration' mod='onlinechat'}</a>
			</div>
			<div class="list-group">
				<a class="list-group-item"><i class="icon-users"></i> {l s='Employees connected' mod='onlinechat'} ({count($employees_conected_list)})</a>
				<div class="list-group-item user-list">
					{if !empty($employees_conected_list)}
						{foreach from=$employees_conected_list item=user}
						<span>#{$user.id_employee} | {$user.lastname} {$user.firstname}</span><br/>
						{/foreach}
					{else}
						<span>{l s='No employee connected' mod='onlinechat'}</span>
					{/if}
				</div>
			</div>
			<div class="list-group">
				<a class="list-group-item"><i class="icon-info"></i> {l s='Version' mod='onlinechat'} {$module_version|escape:'htmlall':'UTF-8'}</a>
			</div>
		</div>
		<!-- Tab panes -->
		<div class="tab-content col-lg-10">
			<div class="tab-pane active panel" id="help">
				{include file="./tabs/help.tpl"}
			</div>
			<div class="tab-pane panel" id="configuration">
				{include file="./tabs/configuration.tpl"}
			</div>
		</div>
	</div>
</div>
