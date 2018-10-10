/**
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
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of PrestaShop SA
*/

$(document).ready(function() {

    var swal_timer = 1000;

    /**
     * load the dataTable
     */
    var threadTable = $('#table_thread_list').dataTable({
        "processing": true,
        "bSort": false,
        "paging": true,
        "oLanguage": {
            "sSearch": sSearch,
            "sEmptyTable": sEmptyTable,
            "sLoadingRecords": sLoadingRecords,
            "sProcessing": sProcessing,
            "oPaginate": {
                "sNext": sNext,
                "sPrevious": sPrevious
            },
            "sLengthMenu": '<label>'+ sLengthMenu1 +'<select name="table_thread_list_length" aria-controls="table_thread_list" class="form-control input-sm"><option value="10">10</option><option value="20">20</option><option value="30">30</option></select> '+ sLengthMenu2 +'</label>'
        },
        "ajax": {
            "url": admin_controller_url,
            "type": "POST",
            "data": {
                controller : admin_controller_name,
                action : 'GetThreadList',
                ajax : true
            }
        },
        "columns": [
            { "data": "id_thread" },
            { "data": "customer" },
            { "data": "message_date" },
            { "data": "message_content" },
            { "data": "email" },
            { "data": "phone" },
            { "data": "actions" }
        ]
    });

    /**
     * Reload Table
     */
    var reloadTable = function(){
        var table = $('#table_thread_list').dataTable();
        table.fnReloadAjax();
    };

    /**
     * Delete thread history
     */
    $(document).on('click', '.ochat-btn-delete', function(e){
        var thread = $(this).attr('data-id');

        swal({
            title: 'Alert',
            text: delete_thread,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: delete_confirm_button,
            closeOnConfirm: false},
            function()
            {
                $.ajax({
                    type: 'POST',
                    url: admin_controller_url,
                    dataType: 'html',
                    data: {
                        controller : admin_controller_name,
                        ajax : true,
                        action : 'DeleteThread',
                        thread : thread
                    },
                    success : function(data) {
                        if (data.length == 0) {
                            reloadTable();
                            swal({
                                title: title,
                                text: delete_success,
                                type: "success",
                                timer: swal_timer,
                                showConfirmButton: false
                            });
                        }
                        else {
                            swal({
                                title: title,
                                text: text_error,
                                type: "error",
                                timer: swal_timer,
                                showConfirmButton: false
                            });
                        }
                    }
                });
            }
        );
        e.preventDefault();
    });


    $(document).on('click', '.ochat-btn-view', function(e) {
        var id_thread = $(this).attr('data-id');

        $.ajax({
            type: 'POST',
            url: admin_controller_url,
            dataType: 'html',
            data: {
                controller : admin_controller_name,
                ajax : true,
                action : 'GetThreadHistory',
                id_thread : id_thread
            },
            success : function(data) {
                swal({
                    title: title,
                    text: data,
                    html: true
                });
            }
        });
        e.preventDefault();
    });

});
