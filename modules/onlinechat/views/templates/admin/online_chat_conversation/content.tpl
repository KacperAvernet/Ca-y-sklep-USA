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
    admin_controller_name = '{$admin_controller_name|escape:'htmlall':'UTF-8'}';
    admin_controller_url = '{$admin_controller_url|escape:'quotes':'UTF-8'}';
    json_handler_url = '{$json_handler_url|escape:'quotes':'UTF-8'}';

    sSearch = '{l s='Filter records : ' mod='onlinechat' js=1}';
    sEmptyTable = '{l s='No data available in table' mod='onlinechat' js=1}';
    sLoadingRecords = '{l s='Please wait - loading...' mod='onlinechat' js=1}';
    sProcessing = '{l s='DataTables is currently busy' mod='onlinechat' js=1}';
    sNext = '{l s='Next' mod='onlinechat' js=1}';
    sPrevious = '{l s='Previous' mod='onlinechat' js=1}';
    sLengthMenu1 = '{l s='Display ' mod='onlinechat' js=1}';
    sLengthMenu2 = '{l s=' records' mod='onlinechat' js=1}';

    delete_thread = '{l s='Are you sure you want to delete this chat ?' mod='onlinechat' js=1}';
    delete_confirm_button = '{l s='Delete' mod='onlinechat' js=1}';
    delete_success = '{l s='Chat history deleted' mod='onlinechat' js=1}';
    text_error = '{l s='An error occured' mod='onlinechat' js=1}';

</script>

<div class="panel panel-default col-md-12 col-xs-12 col-lg-12" id="ochat-conv-panel">
    <div class="panel-heading">{l s='Conversations List' mod='onlinechat'}</div>
    <div class="panel-body" id="ochat-conv-body">
        <table id="table_thread_list" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="text-center">{l s='ID' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Customer' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Date Time' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Last Message' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Email' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Phone' mod='onlinechat'}</th>
                    <th class="text-center">{l s='Actions' mod='onlinechat'}</th>
                </tr>
            </thead>
            <tbody id="tbody_thread_list" class="ui-sortable"></tbody>
        </table>
    </div>
</div>
