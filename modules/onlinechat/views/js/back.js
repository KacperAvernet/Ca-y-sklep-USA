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
    var swal_timer = 1500,
        ochat_max_text_length = 15;

    /**
     * Ion-sound library for playing songs in jquery
     */
    ion.sound({
        sounds: [
            {
                name: "new_message"
            }
        ],
        volume: OCHAT_BIP_VOLUME,
        path: sounds,
        preload: true
    });

    /**
     * Handle volume changement
     */
    $( "#ochat-sound-slider" ).slider({
        change: function( event, ui ) {
            $('#OCHAT_BIP_VOLUME').val(ui.value);
            $('#sound-vol').html(ui.value);

            ion.sound.play("new_message", {
                volume: ui.value
            });
        },
        value: OCHAT_BIP_VOLUME,
        step: 10,
        min: 10,
        max: 100
    });

    /**
     * Picto menu admin
     */
    $('.icon-AdminOChat').addClass('fa fa-comments');

    /* Like Hangout Chat */
    $(document).on('click', '.ochat-panel-heading span.icon-minus', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            minimizedChat($this);
        } else {
            expendChat($this);
        }
        e.preventDefault();
    });

    /**
     * Close chat
     */
    $(document).on('click', '.ochat-chat .icon-hide', function (e) {
        $(this).parents('.ochat-chat').remove();
        generateChatsPosition();
        removeDisplayedThreadInStorage($(this).parents('.ochat-chat').attr('data-thread'));
        e.preventDefault();
    });

    /**
     * Close chat
     */
    $(document).on('click', '.ochat-chat .ochat-close-p', function (e) {
        var thread = $(this).parents('.ochat-chat').attr('data-thread'),
            elm = $(this);

        swal({
            title: title_closed_thread,
            text: text_closed_thread,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: text_closed_thread_confirm_button,
            cancelButtonText: cancel_button,
            closeOnConfirm: false},
            function() {
                closeThread(thread, elm);
            }
        );
        e.preventDefault();
    });


    /**
     * Re open thread for new message
     */
    $(document).on('click', '.ochat-chat .ochat-open-p', function (e) {
        var thread = $(this).parents('.ochat-chat').attr('data-thread'),
            elm = $(this),
            params = {thread : thread};

        elm.parents('.ochat-chat').remove();
        removeDisplayedThreadInStorage(thread);
        generateChatsPosition();

        $.ajax({
            type: 'POST',
            url: json_handler_url,
            dataType: 'json',
            data: {
                ajax : true,
                action : 'openThread',
                params : params
            },
            success : function(data) {
                if (data == 1) {
                    fetcher(0);
                    swal({
                        title: title,
                        text: text_open_thread_success,
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
        e.preventDefault();
    });

    /**
     * Launch the ajax call to close the thread
     * @param thread
     * @param elm
     */
    function closeThread(thread, elm) {
        var data = JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)),
            params = {thread : thread};

        $.ajax({
            type: 'POST',
            url: json_handler_url,
            dataType: 'json',
            data: {
                ajax : true,
                action : 'closeThread',
                params : params
            },
            success : function(data) {
                if (data == 1) {
                    elm.parents('.ochat-chat').remove();
                    removeDisplayedThreadInStorage(thread);
                    generateChatsPosition();
                    fetcher(0);
                    swal({
                        title: title,
                        text: text_closed_thread_success,
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

    /**
     * Reduce chat window
     */
    function minimizedChat($this) {
        $this.parents('.ochat-panel-default').find('.msg_container_base, .ochat-close, .ochat-footer').slideUp();
        $this.addClass('panel-collapsed');
        $this.removeClass('fa-caret-down').addClass('fa-caret-up');
        localStorage.setItem('ochat-min_'+OCHAT_UNIQID, true);
    }

    /**
     * Expend chat window
     */
    function expendChat($this) {
        $this.parents('.ochat-panel-default').find('.msg_container_base, .ochat-close, .ochat-footer').slideDown();
        $this.removeClass('panel-collapsed');
        $this.removeClass('fa-caret-up').addClass('fa-caret-down');
        $('.msg_container_base').scrollTop($('.msg_container_base')[0].scrollHeight);
        localStorage.setItem('ochat-min_'+OCHAT_UNIQID, false);
    }

    /**
     * Login
     */
     $(document).on('click', '#ochat-switch-online', function(e){
        if (!$(this).hasClass('btn-success')) {
            // Login
            $.ajax({
                type: 'POST',
                url: admin_module_ajax_url_ochat,
                dataType: 'html',
                data: {
                    controller : admin_module_controller_ochat,
                    action : 'ActivateChat',
                    ajax : true,
                    id_employee : id_employee
                },
                success : function(data) {
                    if (data == 1) {
                        displayLogin();
                    } else if( data == -1 ) {
                        swal({
                            title: title_logout,
                            text: text_error_configuration,
                            type: "error",
                            timer: swal_timer,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: title_logout,
                            text: text_error,
                            type: "error",
                            timer: swal_timer,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        e.preventDefault();
    });

    /**
     * Logout
     */
    $(document).on('click', '#ochat-switch-offline', function(e){
        if (!$(this).hasClass('btn-danger')) {
            // Logout
            $.ajax({
                type: 'POST',
                url: admin_module_ajax_url_ochat,
                dataType: 'html',
                data: {
                    controller : admin_module_controller_ochat,
                    action : 'Logout',
                    ajax : true,
                    id_employee : id_employee
                },
                success : function(data) {
                    if (data == 1) {
                        displayLogout();
                    } else {
                        swal({
                            title: title_login,
                            text: text_error,
                            type: "error",
                            timer: swal_timer,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        e.preventDefault();
    });

    /**
     * Manage the display after login
     */
    function displayLogin() {
        $('#ochat-switch-online').addClass('btn-success').removeClass('btn-default');
        $('#ochat-switch-offline').addClass('btn-default').removeClass('btn-danger');

        initOchat();

        swal({
            title: title_login,
            text: login_message,
            type: "success",
            timer: swal_timer,
            showConfirmButton: false
        });
    }

    /**
     * Remove all vars in storage
     */
    function removeAllStorage() {
        localStorage.removeItem('ochat-data_'+OCHAT_UNIQID);
        localStorage.removeItem('ochat-old-data_'+OCHAT_UNIQID);
        localStorage.removeItem('ochat-chat-list_'+OCHAT_UNIQID);
        localStorage.removeItem('ochat-sorted-data_'+OCHAT_UNIQID);
    }

    /**
     * Manage the display after logout
     */
    function displayLogout() {
        $('#ochat-switch-offline').addClass('btn-danger').removeClass('btn-default');
        $('#ochat-switch-online').addClass('btn-default').removeClass('btn-success');

        removeAllStorage();
        $('.open-thread-list, .closed-thread-list, .ochat-open-conv, .ochat-closed-conv, .ochat-chat').remove();
        dumpDb();

        swal({
            title: title_logout,
            text: logout_message,
            type: "success",
            timer: swal_timer,
            showConfirmButton: false
        });
    }

    /**
     * Save all closed thread in DB
     */
    function dumpDb() {
        $.ajax({
            type: 'POST',
            url: admin_module_ajax_url_ochat,
            dataType: 'html',
            data: {
                controller : admin_module_controller_ochat,
                action : 'dumpDb',
                ajax : true
            },
            success : function(data) {
            }
        });
    }

    /**
     * Check if is connect and set elements
     */
    if (is_connected == 1) {
        if (localStorage.getItem('ochat-data_'+OCHAT_UNIQID) != null) {
            createMenu(0);
            initChatWindow();
            fetcher(1);
        }
        else {
            initOchat();
        }
    }

    /**
     * Re create all chat window after refresh
     */
    function initChatWindow() {
        if (localStorage.getItem('ochat-chat-list_'+OCHAT_UNIQID) != null) {
            $.each(JSON.parse(localStorage.getItem('ochat-chat-list_'+OCHAT_UNIQID)), function(i, v){
                loadChat(i, v['type']);
            });
        }
    }

    /**
     * Init HTML and vars in localStorage for online Mode
     */
    function initOchat() {
        $.ajax({
            type: 'POST',
            url: json_handler_url,
            dataType: 'json',
            asynch : false,
            data: {
                ajax : true,
                action : 'getAllThread',
                params : true
            },
            success : function(data) {
                if (data[0] != null && data[1] != null) {
                    localStorage.setItem('ochat-data_'+OCHAT_UNIQID, JSON.stringify(data[0]));
                    localStorage.setItem('ochat-sorted-data_'+OCHAT_UNIQID, JSON.stringify(data[1]));
                    createMenu(0);
                    initChatWindow();
                    fetcher(1);
                }
            }
        });
    }

    /**
     * Create html menu elements for online chat
     * @param update 1 == yes | 0 == no
     */
    function createMenu(update) {
        var online_mode = '<a href="#" class="list-group-item ochat-open-conv" id="ochat-menu-open"><span class="badge badge-success ochat-nb-open"></span>' + open_menu_title + '</a>';

        online_mode += '<p class="open-thread-list" style="max-height: 200px; overflow: auto;"></p><a href="#" class="list-group-item ochat-closed-conv"  id="ochat-menu-closed">';
        online_mode += '<span class="badge badge-danger ochat-nb-closed"></span>' + closed_menu_title + '</a>';
        online_mode += '<p class="closed-thread-list" style="max-height: 200px; overflow: auto;"></p>';

        if (update == 0) {
            $('.ochat-login .ochat-login_threads').prepend(online_mode);
        } else {
            $('.open-thread-list, .closed-thread-list, .ochat-open-conv, .ochat-closed-conv').remove();
            $('.ochat-login .ochat-login_threads').prepend(online_mode);
        }

        createConversationsMenu();
    }


    /**
     * Create the sub menu for Open|Closed conversations
     */
    function createConversationsMenu() {
        var data = JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)),
            sorted_data = JSON.parse(localStorage.getItem('ochat-sorted-data_'+OCHAT_UNIQID)),
            closed_elm =  '',
            open_elm = '',
            is_new = 0;

        // Check if the open list does exist
        if (typeof data['open'] != 'undefined') {
            $.each(sorted_data['open'], function(i, v) {
                if (data['open'][v]['message_list'].length > 0) {
                    var last_message_key = data['open'][v]['message_list'].length - 1;
                    if (typeof data['open'][v]['message_list'][last_message_key]['id_employee'] != 'undefined') {
                        is_new = 0;
                    } else {
                        is_new = 1;
                    }
                    if( data['open'][v]['id_customer'] > 0 ) {
                        $.ajax({
                            type: 'POST',
                            url: admin_module_ajax_url_ochat,
                            dataType: 'html',
                            async: false,
                            data: {
                                controller : admin_module_controller_ochat,
                                action : 'GetUserName',
                                ajax : true,
                                id_customer : data['open'][v]['id_customer']
                            },
                            success : function(data_customer) {
                                customer_name = textShorter( data_customer );
                            }
                        });
                    } else {
                        customer_name = data['open'][v]['customer_name'];
                    }
                    open_elm += getListItemHtml(v, customer_name, data['open'][v]['id_guest'], 'open', is_new);
                }
            });
            $('.open-thread-list').append(open_elm);
            $('.ochat-nb-open').html(Object.keys(data['open']).length);
        }
        else {
            $('.ochat-nb-open').html(0);
        }

        // Check if the closed list does exist
        if (typeof data['closed'] != 'undefined') {
            $.each(sorted_data['closed'], function(i, v) {
                if (data['closed'][v]['message_list'].length > 0) {
                    if( data['closed'][v]['id_customer'] > 0 ) {
                        $.ajax({
                            type: 'POST',
                            url: admin_module_ajax_url_ochat,
                            dataType: 'html',
                            async: false,
                            data: {
                                controller : admin_module_controller_ochat,
                                action : 'GetUserName',
                                ajax : true,
                                id_customer : data['closed'][v]['id_customer']
                            },
                            success : function(data_customer) {
                                customer_name = textShorter( data_customer );
                            }
                        });
                    } else {
                        customer_name = data['closed'][v]['customer_name'];
                    }
                    closed_elm += getListItemHtml(v, customer_name, data['closed'][v]['id_guest'], 'closed', 0);
                }
            });
            $('.closed-thread-list').append(closed_elm);
            $('.ochat-nb-closed').html(Object.keys(data['closed']).length);
        }
        else {
            $('.ochat-nb-closed').html(0);
        }
    }

    /**
     * Generate the html menu link
     * @param thread
     * @param customer_name
     * @param id_guest
     * @param type
     * @param is_new
     * @returns {string}
     */
    function getListItemHtml(thread, customer_name, id_guest, type, is_new) {
        var n = ' | ' + textShorter(customer_name);

        if (customer_name.length == 0) {
            n = ' | ' +  guest + ' ' + id_guest;
        }
        if (is_new == 1) {
            return '<a href="#" data-thread="' + thread + '" id="chat_link_' + thread + '" class="list-group-item ochat-open-conv ' + type + '-link"><strong>ID ' + thread + ' ' + n + '<i class="fa fa-expand pull-right" aria-hidden="true"></i></strong></a>';
        }
        return '<a href="#" data-thread="' + thread + '" id="chat_link_' + thread + '" class="list-group-item ochat-open-conv ' + type + '-link">ID ' + thread + ' ' + n + '<i class="fa fa-expand pull-right" aria-hidden="true"></i></a>';
    }

    /**
     * Hide open and closed menu
     */
    $(document).on('click', '.ochat-menu-title', function(e){
        var ochat_button = $('#ochat-menu .ochat-resize-menu');
        if (localStorage.getItem('ochat-data_'+OCHAT_UNIQID) !== null) {
            if (ochat_button.hasClass('collapsed')) {
                $('.ochat-list').find('.ochat-open-conv, .ochat-closed-conv').slideDown();
                $('.ochat-resize-menu').removeClass('fa-caret-up').addClass('fa-caret-down');
                $('.ochat-login').css('padding-top', '15px');
                $('.ochat-button-show').show();
                ochat_button.removeClass('collapsed');
            } else {
                $('.ochat-list').find('.ochat-open-conv, .ochat-closed-conv').slideUp();
                $('.ochat-resize-menu').removeClass('fa-caret-down').addClass('fa-caret-up');
                $('.ochat-login').css('padding-top', '0');
                $('.ochat-button-show').hide();
                ochat_button.addClass('collapsed');
            }
        }
        e.preventDefault();
    });

    /**
    * Return false on open|closed link
    */
    $(document).on('click', '.ochat-open-conv, .ochat-closed-conv, .ochat-login', function(e){
        e.preventDefault();
    });

    /**
    * Call the thread to diplay
    */
    $(document).on('click', '.open-link, .closed-link', function(e){
       var thread = $(this).attr('data-thread'),
           type = 'open';

        if ($(this).hasClass('closed-link')) {
            type = 'closed';
        } else {
            readNewMessageClean(thread);
        }
        loadChat(thread, type);
        e.preventDefault();
    });

    /**
     * Remove strong
     * @param thread
     */
    function readNewMessageClean(thread) {
        var new_content = $('#chat_link_' + thread).html();
        new_content = String(new_content).replace(/<strong>/g, '').replace(/<\/strong>/g, '');
        $('#chat_link_' + thread).html(new_content);
    }

    /**
     * Add thread id in storage
     * @param thread
     * @param type
     */
    function addDisplayedThreadInStorage(thread, type) {
        if (localStorage.getItem('ochat-chat-list_'+OCHAT_UNIQID) === null) {
            var data = {};
            data[thread] = {type: type};
            localStorage.setItem('ochat-chat-list_'+OCHAT_UNIQID, JSON.stringify(data));
        }
        else {
            var data = JSON.parse(localStorage.getItem('ochat-chat-list_'+OCHAT_UNIQID));
            data[thread] = {type: type};
            localStorage.setItem('ochat-chat-list_'+OCHAT_UNIQID, JSON.stringify(data));
        }
    }

    /**
     * Remove thread id in storage
     * @param thread
     */
    function removeDisplayedThreadInStorage(thread) {
        var data = JSON.parse(localStorage.getItem('ochat-chat-list_'+OCHAT_UNIQID));
        delete data[thread];
        localStorage.setItem('ochat-chat-list_'+OCHAT_UNIQID, JSON.stringify(data));
    }

    /**
     * Load form with message in it
     * @param thread
     * @param type
     */
    function loadChat(thread, type) {
        if ($('#chat_' + thread).length == 0) {
            if (ifEmptySpaceForChatWindow() == false) {
                removeDisplayedThreadInStorage($('.ochat-chat').last().attr('data-thread'));
                $('.ochat-chat').last().remove();
                loadChat(thread, type);
            } else {
                var elm = generateChatWindow(thread, type);

                if ($('.ochat-chat').length == 0) {
                    $('#ochat-menu').after(elm);
                } else {
                    $('.ochat-chat').last().after(elm);
                }

                addDisplayedThreadInStorage(thread, type); //Save elm for regeneration after changing page
                generateChatsPosition();
                $('.ochat-chat').removeClass('hide');
            }
        }
    }

    /**
     * Check text size
     * @param text
     * @param length
     * @returns {*}
     * @constructor
     */
    function textShorter(text) {
        if (text == null) {
            return "";
        }
        if (text.length <= ochat_max_text_length) {
            return text;
        }
        text = text.substring(0, ochat_max_text_length);
        return text + "...";
    }

    /**
     * Generate ochat-chat window
     * @param thread
     * @param type
     * @returns {string}
     */
    function generateChatWindow(thread, type) {
        var send = 0,
            operator = OCHAT_OPERATOR_NAME,
            data = JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)),
            panel_title = 'ID ' + thread + ' | ',
            panel_title_name = '',
            is_customer = 0,
            elm = '';

        for (var i = (data[type][thread]['message_list'].length - 1); typeof data[type][thread]['message_list'][i] != 'undefined'; i++) {
            v = data[type][thread];
            if (typeof v['id_customer'] == 'undefined') {
                panel_title_name = guest + ' ' + data[type][thread]['id_guest'];
            } else {
                if( is_customer === 0 ) {
                     $.ajax({
                        type: 'POST',
                        url: admin_module_ajax_url_ochat,
                        dataType: 'html',
                        async: false,
                        data: {
                            controller : admin_module_controller_ochat,
                            action : 'GetUserName',
                            ajax : true,
                            id_customer : v['id_customer']
                        },
                        success : function(data_customer) {
                            if( data_customer.length == 0 ) {
                                panel_title_name = guest + ' ' + data[type][thread]['id_guest'];  
                            } else {
                                panel_title_name = textShorter( data_customer );
                            }
                        }
                    });
                    is_customer++;
                }
            }
        }
        panel_title += panel_title_name;
        elm = '<div class="row ochat-chat hide" id="chat_' + thread + '" data-thread="' + thread + '" data-thread-type="' + type + '">';
        elm += '<div class="ochat-panel-default">';
        elm += '<div class="ochat-panel-heading" style="background-color: ' + OCHAT_ONLINE_HEADER_BG_COLOR + '">';

        elm += '<div class="col-md-10 col-xs-10"><p class="ochat-title" style="color :' + OCHAT_ONLINE_HEADER_TEXT_COLOR + '">' + panel_title + '</p></div>';

        elm += '<div class="col-md-1 col-xs-1">';
        elm += '<a href="#"><span class="fa fa-caret-down fa-lg icon-minus" style="color :' + OCHAT_ONLINE_HEADER_TEXT_COLOR + '"></span></a>';
        elm += '</div>';
        elm += '<div class="col-md-1 col-xs-1">';
        elm += '<a href="#"><span class="fa fa-compress fa-lg icon-hide" style="color :' + OCHAT_ONLINE_HEADER_TEXT_COLOR + '"></span></a>';
        elm += '</div>';
        elm += '</div>';

        if (type == 'open') {
            elm += '<div class="ochat-close"><p class="ochat-close-p" style="color: black;" align="center"><i class="fa fa-check fa-lg" aria-hidden="true"></i>' + close_conversation_link.toUpperCase() + '</p></div>';
        } else {
            elm += '<div class="ochat-close"><p class="ochat-open-p" style="color: black;" align="center"><i class="fa fa-check fa-lg" aria-hidden="true"></i>' + open_conversation_link.toUpperCase() + '</p></div>';
        }

        elm += '<div class="msg_container_base" data-thread="' + thread + '">';

        if (typeof data[type] != 'undefined') {
            $.each(data[type][thread]['message_list'], function(i, v) {
                if (typeof v['id_employee'] == 'undefined') {
                    send = 1;
                    if (typeof v['id_customer'] == 'undefined') {
                        operator = guest + ' ' + v['id_guest'];
                    } else {
                        operator = customer + ' ' + v['id_customer'];
                    }
                } else {
                    send = 0;
                    operator = OCHAT_OPERATOR_NAME;
                }
                elm += createMessageBlock(send, v['message_content'], v['message_date'].substring(11), i, operator);
            });
        }

        elm += '</div>';
        elm += '<div class="ochat-footer">';
        if (type == 'open') {
            elm += '<textarea rows="3" class="form-control chat-input" placeholder="' + answer_message + '" style="color: black;"></textarea>';
            elm += '<div class="btn-send-message" style="float: right;"><br/><button type="submit" class="btn btn-primary btn-chat"><i class="fa fa-send-o"></i> '+send_message+'</button></div>';
        } else {
            elm += '<input type="text" class="form-control chat-input" disabled="disabled" placeholder="' + answer_message + '" style="color: black;"/>';
            elm += '<div class="btn-send-message"><button type="submit" class="btn btn-primary btn-chat" disabled="disabled"><i class="fa fa-send-o fa-lg"></i> '+send_message+'</button></div>';
        }
        elm += '</div>'; // footer
        elm += '</div>'; // panel-default
        elm += '</div>'; // chat-window
        return elm;
    }

    /**
     * Create the message bleck then append it
     * @param is_send 1 == send message | 0 == recieve message
     * @param date
     * @param position
     * @param operator
     * @returns {string}
     */
    function createMessageBlock(is_send, content, date, position, operator) {
        var elm = '';

        // Send message
        if (is_send == 0) {
            elm += '<div class="row msg_container base_sent" id="' + position + '">';
            elm += '<div class="col-md-2 col-xs-2"></div><div class="col-md-10 col-xs-10"><div class="messages msg_sent">';
            elm += '<p>' + content + '</p></div><p class="ochat-time ochat-time-sent"><small>'+ operator + ' ' + date + '</small></p></div></div>';
        } else {
            elm += '<div class="row msg_container base_receive" id="' + position + '">';
            elm += '<div class="col-md-10 col-xs-10"><div class="messages msg_receive">';
            elm += '<p>' + content + '</p></div><p class="ochat-time"><small>'+ operator + ' ' + date + '</small></p></div>';
            elm += '<div class="col-md-2 col-xs-2"></div></div>';
        }
        return elm;
    }

    /**
     * Position all chat windows
     * @returns {number}
     */
    function generateChatsPosition() {
        var interval = 10,
            chat_width = $('#ochat-menu').width(),
            last_position = interval * 2 + chat_width,
            footer_bool = $('.product-footer').length;

        if (footer_bool == 1) {
            $('#ochat-menu').css('bottom', $('.product-footer').css('height'));
        }

        $.each($('.ochat-chat'), function(){
            $(this).css(OCHAT_POSITION, last_position + interval);
            last_position = last_position + interval + chat_width;

            if (footer_bool == 1) {
                $(this).css('bottom', $('.product-footer').css('height'));
            }
        });
    }

    /**
     * Check if there is enough space for display a new chat window
     * @returns {boolean}
     */
    function ifEmptySpaceForChatWindow() {
        var interval = 10,
            window_width = $(window).width(),
            chat_width = $('#ochat-menu').width(),
            result = Math.floor(window_width / ((interval * 2) + chat_width));

        if (result > $('.ochat-chat').length + 1) {
            return true;
        }
        return false;
    }

    /**
     * Get new message from json
     * @param recursif
     */
    function fetcher(recursif) {
        if (JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)) != null) {
            $.ajax({
                type: 'POST',
                url: json_handler_url,
                dataType: 'json',
                asynch : false,
                data: {
                    ajax : true,
                    action : 'getAllThread',
                    params : true
                },
                success : function(new_data) {
                    if (new_data != null) {
                        var data = JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)),
                            test = 1;

                        if ((typeof data['open'] == 'undefined' && typeof new_data[0]['open'] != 'undefined')
                        || (typeof data['open'] != 'undefined' && typeof new_data[0]['open'] == 'undefined')) {
                            test = 0;
                        } else if ((typeof data['closed'] == 'undefined' && typeof new_data[0]['closed'] != 'undefined')
                        || (typeof data['closed'] != 'undefined' && typeof new_data[0]['closed'] == 'undefined')) {
                            test = 0;
                        } else if (typeof data['open'] != 'undefined' && typeof new_data[0]['open'] != 'undefined') {
                            if (JSON.stringify(data['open']).length != JSON.stringify(new_data[0]['open']).length) {
                                test = 0;
                            }
                        } else if (typeof data['closed'] != 'undefined' && typeof new_data[0]['closed'] != 'undefined') {
                            if (JSON.stringify(data['closed']).length != JSON.stringify(new_data[0]['closed']).length) {
                                test = 0;
                            }
                        }

                        if (test == 0) {
                            localStorage.setItem('ochat-old-data_'+OCHAT_UNIQID, JSON.stringify(data));
                            localStorage.setItem('ochat-data_'+OCHAT_UNIQID, JSON.stringify(new_data[0]));
                            localStorage.setItem('ochat-sorted-data_'+OCHAT_UNIQID, JSON.stringify(new_data[1]));

                            if (new_data[2] == 1 && OCHAT_BIP_SOUND == 1) {
                                ion.sound.play("new_message");
                            }
                            createMenu(1);
                            updateChatList();
                        }
                    }
                },
                complete: function() {
                    if (recursif == 1) {
                        setTimeout(fetcher, OCHAT_TIME_DELAY, recursif); // Schedule the next request when the current one's complete
                    }
                }
            });
        }
    }

    /**
     * Update message list in chat view
     */
    function updateChatList() {
        var data = JSON.parse(localStorage.getItem('ochat-data_'+OCHAT_UNIQID)),
            old_data = JSON.parse(localStorage.getItem('ochat-old-data_'+OCHAT_UNIQID));

        $('.ochat-chat').each(function() {
            var elm = '',
                type = $(this).attr('data-thread-type'),
                thread = $(this).attr('data-thread'),
                v = '';
            var is_customer = 0;
            if (typeof data[type] != 'undefined') {
                if (data[type][thread]['message_list'].length > old_data[type][thread]['message_list'].length) {
                    for (var i = $('#chat_' + thread + ' .messages').length; typeof data[type][thread]['message_list'][i] != 'undefined'; i++)
                    {
                        v = data[type][thread]['message_list'][i];
                        if (typeof v['id_customer'] == 'undefined') {
                            operator = guest + ' ' + v['id_guest'];
                        } else {
                            operator = customer + ' ' + v['id_customer'];
                            if( is_customer === 0 ) {
                                 $.ajax({
                                    type: 'POST',
                                    url: admin_module_ajax_url_ochat,
                                    dataType: 'html',
                                    data: {
                                        controller : admin_module_controller_ochat,
                                        action : 'GetUserName',
                                        ajax : true,
                                        id_customer : v['id_customer']
                                    },
                                    success : function(data) {
                                        $('#chat_'+thread+' .ochat-title').html( "ID "+thread+" | " + data );
                                        $('#chat_link_'+thread).html( "ID "+thread+" | " + data );
                                    }
                                });
                                is_customer++;
                            }
                        }
                        elm += createMessageBlock(1, v['message_content'], v['message_date'].substring(11), i, operator);
                    }
                    $('#chat_' + thread + ' .msg_container_base').append(elm);
                    $('#chat_' + thread + ' .msg_container_base').scrollTop($('#chat_' + thread + ' .msg_container_base')[0].scrollHeight);
                }
            }
        });
    }

    /**
     * Send the content to the json file
     */
    $(document).on('click', '.btn-chat', function(e) {
        var content = $(this).parents('.btn-send-message').siblings('.chat-input').val(),
            thread = $(this).parents('.ochat-chat').attr('data-thread');
        if (content.length > 0) {
            postMessage(thread, htmlEntities(content));
        }
        $(this).blur();
        e.preventDefault();
    });

    /**
     * Htmlentities fo js
     * @param str
     * @returns {string}
     */
    function htmlEntities(str) {
        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    /**
     * Post message
     * @param thread
     * @param content
     */
    function postMessage(thread, content) {
        var params = {thread: thread, message : {message_content : $.trim(content), id_employee: id_employee}};
        $.ajax({
            type: 'POST',
            url: json_handler_url,
            dataType: 'json',
            asynch : false,
            data: {
                ajax : true,
                action : 'postMessage',
                params : params
            },
            success : function(data) {
                if (data != null) {
                    var elm = createMessageBlock(0, params['message']['message_content'], data['date'].substring(11), data['position'], OCHAT_OPERATOR_NAME);
                    $('#chat_' + thread + ' .msg_container_base').append(elm);
                    $('#chat_' + thread + ' .chat-input').val(null);
                    $('#chat_' + thread + ' .msg_container_base').scrollTop($('#chat_' + thread + ' .msg_container_base')[0].scrollHeight);
                }
            }
        });
    }

    /**
     * remove strong when focus
     */
    $(document).on('focus', '.chat-input', function() {
        var thread = $(this).parents('.ochat-chat').attr('data-thread');
        readNewMessageClean(thread);
    });

    /**
     * Check if the content to send is not null
     */
     function getCaret(el) { 
        if (el.selectionStart) { 
            return el.selectionStart; 
        } else if (document.selection) { 
            el.focus();
            var r = document.selection.createRange(); 
            if (r == null) { 
                return 0;
            }
            var re = el.createTextRange(), rc = re.duplicate();
            re.moveToBookmark(r.getBookmark());
            rc.setEndPoint('EndToStart', re);
            return rc.text.length;
        }  
        return 0; 
    }
    $(document).on('keyup', '.chat-input', function(event) {
        var content = $(this).val(),
            thread = $(this).parents('.ochat-chat').attr('data-thread');
        if (event.keyCode == 13 && event.shiftKey) {
           var content = this.value;
           var caret = getCaret(this);
           this.value = content.substring(0,caret)+"\n"+content.substring(carent,content.length-1);
           event.stopPropagation();
        } else if(event.keyCode == 13) {
          postMessage(thread, htmlEntities(content));
        }


    });

});
