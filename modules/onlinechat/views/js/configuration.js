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

$(window).on('load',function() {
    /**
     * Handle menu tab changement
     */
    $('.menu_tab').click(function(){
        $('.menu_tab').removeClass('active');
    $(this).addClass('active');
    });

    /**
     * Handle faq animations
     */
    $('.faq-item a').click(
        function(e){
            e.stopPropagation();
        }
    );

    $('.faq-item').click(
        function(){
            if($(this).find('.faq-content').is(':visible'))
            {
                $(this).find('.faq-content').slideUp('fast');
                $(this).find('.expand').html('+');
            }
            else
            {
                $('.faq-content').hide('fast');
                $(this).find('.faq-content').slideDown('fast');
                $('.expand').html('+');
                $(this).find('.expand').html('-');
            }
        }
    );

    if( $( "#OCHAT_FORM_NAME.OCHAT_CHECKBOX").is(':not(:checked)') ) {
        $('#OCHAT_FORM_NAME.ochat-form-control').parent().parent().hide();
    }
    if( $( "#OCHAT_FORM_PHONE.OCHAT_CHECKBOX").is(':not(:checked)') ) {
        $('#OCHAT_FORM_PHONE.ochat-form-control').parent().parent().hide();
    }

    /**
     * Online header text area
     */
    $('.OCHAT_ONLINE_HEADER_TEXT_BUTTON').click(function(e){
        e.preventDefault();
        $('.OCHAT_ONLINE_HEADER_TEXT').hide();
        $('.OCHAT_ONLINE_HEADER_TEXT').removeClass('hidden');
        $('#OCHAT_ONLINE_HEADER_TEXT_' + $(this).data('id-lang')).show();
    });

    /**
     * Online welcome text area
     */
    $('.OCHAT_ONLINE_WELCOME_TEXT_BUTTON').click(function(e){
        e.preventDefault();
        $('.OCHAT_ONLINE_WELCOME_TEXT').hide();
        $('.OCHAT_ONLINE_WELCOME_TEXT').removeClass('hidden');
        $('#OCHAT_ONLINE_WELCOME_TEXT_' + $(this).data('id-lang')).show();
    });

    /**
     * Offline header text area
     */
    $('.OCHAT_OFFLINE_HEADER_TEXT_BUTTON').click(function(e){
        e.preventDefault();
        $('.OCHAT_OFFLINE_HEADER_TEXT').hide();
        $('.OCHAT_OFFLINE_HEADER_TEXT').removeClass('hidden');
        $('#OCHAT_OFFLINE_HEADER_TEXT_' + $(this).data('id-lang')).show();
    });

    /**
     * Offline welcome text area
     */
    $('.OCHAT_OFFLINE_WELCOME_TEXT_BUTTON').click(function(e){
        e.preventDefault();
        $('.OCHAT_OFFLINE_WELCOME_TEXT').hide();
        $('.OCHAT_OFFLINE_WELCOME_TEXT').removeClass('hidden');
        $('#OCHAT_OFFLINE_WELCOME_TEXT_' + $(this).data('id-lang')).show();
    });

    /**
     * Check if it's email
     * @param email
     * @returns {boolean}
     */
    function isEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    /**
     * Check the form before saving changes
     */
    $("#submitConfiguration").click(function(e){
        var form = $('#onlineChatForm').serializeArray(),
            email = {},
            email_index = null,
            if_offline = {},
            test = 0;

        $('.OCHAT_CHECKBOX').each(function(k, v){
            if (!$(this).is(':checked')) {
                form.push({name:$(this).attr('name'), value: 0});
            }
        });

        // Get Email and if_offline object && check if empty
        $.each(form, function(i, v) {
            if (v['name'] == 'OCHAT_IF_OFFLINE_ACTIVATED') {
                if_offline = v;
            } else if(v['name'] == 'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO' && v['value'].length == 0) {
                test = 2;
            } else if(v['name'] == 'OCHAT_OPERATOR_NAME' && v['value'].length == 0) {
                test = 3;
            } else if(v['name'] == 'OCHAT_EMAIL_TO_NOTIFY') {
                email = v;
                email_index = i;
            } else if ((v['name'].indexOf('HEADER_TEXT') != -1 || v['name'].indexOf('WELCOME_TEXT') != -1)
                && v['name'].indexOf('COLOR') == -1) {
                if (if_offline['value'] == 1 && v['name'].indexOf('OFFLINE') != -1 && v['value'].length == 0) {
                    test = 1;
                } else if (v['name'].indexOf('ONLINE') != -1 && v['value'].length == 0) {
                    test = 1;
                }
            }
        });

        displayErrorForm(test);
        if (test == 0 ) {
            if (if_offline['value'] == 1) {
                if (isEmail(email['value'])) {
                    saveForm(form);
                } else {
                    swal({
                        title: error_title,
                        text: error_email,
                        type: "error",
                        timer: 1500,
                        showConfirmButton: false
                    });
                }
            } else {
                form.splice(email_index, 1);
                saveForm(form);
            }
        }
        e.preventDefault();
        $(this).blur();
    });

    /**
     * Display error in form
     * @param test
     */
    function displayErrorForm(test) {
        if (test == 3) {
            swal({
                title: error_title,
                text: error_empty_operator,
                type: "error",
                timer: 1500,
                showConfirmButton: false
            });
        } else if (test == 2) {
            swal({
                title: error_title,
                text: error_empty_max_window,
                type: "error",
                timer: 1500,
                showConfirmButton: false
            });
        } else if (test == 1) {
            swal({
                title: error_title,
                text: error_empty_text,
                type: "error",
                timer: 1500,
                showConfirmButton: false
            });
        }
    }

    /**
     * Save the formular into configuration table
     * @param form
     */
    var saveForm = function (form) {
        $.ajax({
            type: 'POST',
            url: admin_module_ajax_url_ochat,
            dataType: 'html',
            data: {
                controller : admin_module_controller_ochat,
                action : 'SaveConfiguration',
                ajax : true,
                form : form
            },
            success : function(data) {
                if( data === "off") {
                    $('.panel .ochat-is-offline').show();
                    $('.panel .ochat-is-online').hide();
                    $('.panel .ochat-login_threads').hide();
                    $('.ochat-chat .icon-hide').each( function(index) {
                        $(this).trigger("click");
                    });
                } else if (data == "on") {
                    $('.panel .ochat-is-offline').hide();
                    $('.panel .ochat-is-online').show();
                    $('.panel .ochat-login_threads').show();
                }
                swal({
                    title: success_title,
                    text: success_message,
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });
            }
        });
    };

    /**
     * Show form step 3
     */
    $(document).on('click', '#OCHAT_IF_OFFLINE_ACTIVATED_YES', function(){
        $('.pannel-offline').show();
        if( $( "#OCHAT_FORM_NAME.OCHAT_CHECKBOX").is(':not(:checked)') )
            $('#OCHAT_FORM_NAME.ochat-form-control').parent().parent().hide();
        if( $( "#OCHAT_FORM_PHONE.OCHAT_CHECKBOX").is(':not(:checked)') )
            $('#OCHAT_FORM_PHONE.ochat-form-control').parent().parent().hide();

    });

    $(document).on('change', '#OCHAT_FORM_NAME.OCHAT_CHECKBOX', function(){
        $('#OCHAT_FORM_NAME.ochat-form-control').parent().parent().toggle();
    });

    $(document).on('change', '#OCHAT_FORM_PHONE.OCHAT_CHECKBOX', function(){
        $('#OCHAT_FORM_PHONE.ochat-form-control').parent().parent().toggle();
    });

    /**
     * Hide form step 3
     */
    $(document).on('click', '#OCHAT_IF_OFFLINE_ACTIVATED_NO', function(){
        $('.pannel-offline').hide();
    });

    function preparePreview() {

        $('#chat_window_1 .icon-minus').trigger('click');
        $('#chat_window_1 #btn-input').attr('disabled', 'disabled');
        $('#chat_window_1 #btn-chat').attr('disabled', 'disabled');

        createMessageBlock('#chat_window_1', 'true', 'Hello', '14:45:21', 0, 'Client 1');
        createMessageBlock('#chat_window_1', 'false', 'Hello, how can I help you ?', '14:46:05', 1, 'Operator');
        createMessageBlock('#chat_window_1', 'true', 'I have a question about your products', '14:47:09', 2, 'Client');

        $('#chat_window_2 .icon-minus').trigger('click');
        $('#chat_window_2 input').attr('disabled', 'disabled');
        $('#chat_window_2 textarea').attr('disabled', 'disabled');
        $('#chat_window_2 #send-offline-form').attr('disabled', 'disabled');
    }

    preparePreview();

    /**
     * Create the message bleck then append it
     * @param chat
     * @param is_send 1 == send message | 0 == recieve message
     * @param content
     * @param date
     * @param position
     * @param operator
     * @returns {*|jQuery}
     */
    function createMessageBlock(chat, is_send, content, date, position, operator)
    {
        var elm = '';

        // Send message
        if (is_send == 'true') {
            elm += '<div class="row msg_container base_sent" id="' + position + '">';
            elm += '<div class="col-md-2 col-xs-2"></div><div class="col-md-10 col-xs-10"><div class="messages msg_sent">';
            elm += '<p>' + content + '</p><time datetime="2009-11-13T20:00">'+ operator + ' ' + date + '</time></div></div></div>';
        }
        // Recieve message
        else {
            elm += '<div class="row msg_container base_receive" id="' + position + '">';
            elm += '<div class="col-md-10 col-xs-10"><div class="messages msg_receive">';
            elm += '<p>' + content + '</p><time datetime="2009-11-13T20:00">'+ operator + ' ' + date + '</time></div></div>';
            elm += '<div class="col-md-2 col-xs-2"></div></div>';
        }

        $(chat + ' .msg_container_base').append(elm);
    }

    /**
     * Online Preview switcher
     */
    $(document).on('keyup', '.OCHAT_ONLINE_HEADER_TEXT input', function(){
        var t = $(this).val();
        $('#chat_window_1 .ochat-title').html('<i class="fa fa-comments-o fa-lg"></i>&nbsp;&nbsp;' + t);
    });

    $(document).on('keyup', '.OCHAT_ONLINE_WELCOME_TEXT input', function(){
        var t = $(this).val();
        $('#chat_window_1 .OCHAT_ONLINE_WELCOME_TEXT').show();
        $('#chat_window_1 .OCHAT_ONLINE_WELCOME_TEXT').html(t);
    });

    $(document).on('change', '#OCHAT_ONLINE_HEADER_BG_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .ochat-panel-heading').css('background-color', color);
    });

    $(document).on('change', '#OCHAT_ONLINE_HEADER_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .ochat-title').css('color', color);
    });

    $(document).on('change', '#OCHAT_ONLINE_HEADER_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .icon-minus').css('color', color);
    });

    $(document).on('change', '#OCHAT_OPERATOR_CHAT_BOX_BG_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .msg_receive').css('background-color', color);
    });

    $(document).on('change', '#OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .msg_receive').css('color', color);
    });

    $(document).on('change', '#OCHAT_CLIENT_CHAT_BOX_BG_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .msg_sent').css('background-color', color);
    });

    $(document).on('change', '#OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_1 .msg_sent').css('color', color);
    });

    /**
     * Offline Preview switcher
     */

    $(document).on('keyup', '.OCHAT_OFFLINE_HEADER_TEXT input', function(){
        var t = $(this).val();
        $('#chat_window_2 .ochat-title').html('<i class="fa fa-comments-o fa-lg"></i>&nbsp;&nbsp;' + t);
    });

    $(document).on('keyup', '.OCHAT_OFFLINE_WELCOME_TEXT input', function(){
        var t = $(this).val();
        $('#chat_window_2 .OCHAT_OFFLINE_WELCOME_TEXT').show();
        $('#chat_window_2 .OCHAT_OFFLINE_WELCOME_TEXT').html(t);
    });

    $(document).on('change', '#OCHAT_OFFLINE_HEADER_BG_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_2 .ochat-panel-heading').css('background-color', color);
    });

    $(document).on('change', '#OCHAT_OFFLINE_HEADER_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_2 .ochat-title').css('color', color);
    });

    $(document).on('change', '#OCHAT_OFFLINE_HEADER_TEXT_COLOR', function(){
        var color = $(this).val();
        $('#chat_window_2 .icon-minus').css('color', color);
    });


    $(document).on('change', '#OCHAT_BIP_SOUND', function(){
        $('.sound-control').fadeToggle();
    });

});
