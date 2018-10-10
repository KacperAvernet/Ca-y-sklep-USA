<?php

/* __string_template__9f799e3692da776f4fbc4246e359a223b713511605ad83d917e6a80a124f0656 */
class __TwigTemplate_f3fa7360cd4e9a04135cd31ab1805fed403adedd12e70664376d7de2e5b690a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Preferencje • All Real Meal LLC </title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPreferences';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '6d4fbff3b6f0f7b2db8e9c5fc8d3fc38';
    var token_admin_orders = '8e5be0fb1554104eed017cf1380e6956';
    var token_admin_customers = '9123e338addf6c9295a8656480aa8f7c';
    var token_admin_customer_threads = 'e8bd856d919fad9219810003aef0adef';
    var currentIndex = 'index.php?controller=AdminPreferences';
    var employee_token = '8b2eadfba93aa806d50ecd26cde07745';
    var choose_language_translate = 'Wybierz język';
    var default_language = '2';
    var admin_modules_link = '/admin300u137u0/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8';
    var tab_modules_list = 'mailalerts,feeder,ps_feeder';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin300u137u0/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/giftcard/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/onlinechat/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/onlinechat/views/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/onlinechat/views/css/sweetalert.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/onlinechat/views/css/likehangoutchat.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin300u137u0/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/prepayment/views/css/admin-design.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin300u137u0\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"dolar ameryka\\u0144ski\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/onlinechat/views/js/sweetalert.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/onlinechat/views/js/ion.sound.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/onlinechat/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/admin300u137u0/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/admin300u137u0/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin300u137u0/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminGamification&token=3322d9532253ff2984863d9834586460';
\t\t\t\tvar current_id_tab = 79;
\t\t\t</script>

";
        // line 91
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-pl adminpreferences\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminDashboard&amp;token=bcf3997072b9445d0c98b198a44afec7\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCategories&amp;addcategory&amp;token=68491cef210ced88d6e86c8e6514f260\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c538de201e1350c335e07be09c87def3\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php/product/new?token=83889b8b0c9dae02dc408cac4784163b\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=0964b684d060079c626f0052e6e780d9\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php/module/manage?token=83889b8b0c9dae02dc408cac4784163b\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminOrders&amp;token=8e5be0fb1554104eed017cf1380e6956\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"82\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences\"
        data-post-link=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminQuickAccesses&token=c2b5ec393d6c3f2b3f66003692bc3f2f\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Og&oacute;lny - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminQuickAccesses&token=c2b5ec393d6c3f2b3f66003692bc3f2f\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin300u137u0/index.php?controller=AdminSearch&amp;token=566a0b184ad901dacd7b0abd7a1741ab\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://ordernow.allrealmeal.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCarts&token=46275dd36c9b9f8a688e9e4943a34d26&action=filterOnlyAbandonedCarts\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              To więcej, czasu na coś innego!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/anita%40avernet.pl.jpg\" />
      <span>Anita Admin</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminEmployees&amp;token=8b2eadfba93aa806d50ecd26cde07745&amp;id_employee=2&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Twój profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminLogin&amp;token=08637f2f3d0f93f57c4a046daaf37672&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  <script>
    var id_shop = \"1\",
        admin_module_controller_ochat = \"AdminOnlineChat\",
        admin_module_ajax_url_ochat = \"index.php?tab=AdminOnlineChat&token=e0025149227e133fb65872f97e5e775f\",
        is_connected = \"0\",
        id_employee = \"2\",
        json_handler_url = \"/modules/onlinechat/libraries/JsonHandler.php\",
        OCHAT_TIME_DELAY = \"3000\",
        OCHAT_BIP_SOUND = \"1\",
        OCHAT_BIP_VOLUME = \"50\",
        OCHAT_POSITION = \"left\",
        OCHAT_OPERATOR_NAME = \"User\",
        OCHAT_ONLINE_HEADER_BG_COLOR = \"#7d7d7d\",
        OCHAT_ONLINE_HEADER_TEXT_COLOR = \"#ffffff\",
        OCHAT_CLIENT_CHAT_BOX_BG_COLOR = \"#cbcbd1\",
        OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR = \"#2b2b2b\",
        OCHAT_OPERATOR_CHAT_BOX_BG_COLOR = \"#e1e3e5\",
        OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR = \"#2b2b2b\",
        OCHAT_UNIQID = \"6666cd76f96956469e7be39d750cc7d9\",

        sounds = \"/modules/onlinechat/sounds/\",

        answer_message = 'Your answer',
        send_message = 'Wyślij',
        title = 'Online Chat',
        title_login = 'Chat switched to online',
        title_logout = 'Chat switched to offline',
        login_message = 'You are now connected!',
        logout_message = 'You are no longer connected! All your closed conversations will be saved into the database.',
        customer = 'Customer',
        guest = 'Guest',
        open_menu_title = 'Open conversations',
        closed_menu_title = 'Closed conversations',
        cancel_button = 'Anuluj',
        title_closed_thread = 'End this conversation ?',
        text_closed_thread = 'If you click ‘Close conversation’, your closed conversations will remain visible and available until you switch to offline',
        text_closed_thread_confirm_button = 'Close Conversation',
        text_closed_thread_success = 'Conversation closed',
        text_open_thread_success = 'Conversation re opened, please check the message in the open conversations menu',
        text_error = 'An error occured',
        text_error_configuration = 'Module configuration must be valid',
        close_conversation_link = 'Finish this conversation',
        open_conversation_link = 'Open this conversation';
</script>


<style>
    .msg_receive {
        background-color: #cbcbd1;
        color : #2b2b2b;
    }
    .msg_sent {
         background-color: #e1e3e5;
         color : #2b2b2b;
     }
</style>

<div class=\"panel panel-default\" id=\"ochat-menu\" style=\"left:10px;\">
    <div class=\"list-group ochat-list\">
        <div class=\"list-group-item ochat-login\">
            <div class=\"ochat-login_threads\" style=\"\"></div>
            <p class=\"text-center ochat-menu-title\">ONLINE CHAT <i class=\"ochat-resize-menu btn btn-default fa fa-lg fa-caret-down pull-right\"></i></p>
            <div class=\"btn-group ochat-connector ochat-is-online ochat-button-show\" data-toggle=\"buttons\" style=\"\">
                <label class=\"btn btn-default\" id=\"ochat-switch-online\">
                    <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\" />ONLINE
                </label>
                <label class=\"btn btn-danger active\" id=\"ochat-switch-offline\">
                    <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\" />OFFLINE
                </label>
            </div>
             <div class=\"btn-group ochat-connector ochat-is-offline \" style=\"display: none;\">
                <p class=\"text-center\">The chat is set offline by the administrator.</p>
            </div>
        </div>
    </div>
</div>
</header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminDashboard&amp;token=bcf3997072b9445d0c98b198a44afec7\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminOrders&amp;token=8e5be0fb1554104eed017cf1380e6956\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Zamówienia
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminOrders&amp;token=8e5be0fb1554104eed017cf1380e6956\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminInvoices&amp;token=aa304aca01e531c26d435c108062db6b\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminSlip&amp;token=76cc3df225e18f754de2048644e8379b\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminDeliverySlip&amp;token=1eca3dc7740bfc29d3788098152aa113\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCarts&amp;token=46275dd36c9b9f8a688e9e4943a34d26\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"148\" id=\"subtab-deleteorderstab\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=deleteorderstab&amp;token=7a46b9830fd1b7f723516a50643cd8a6\" class=\"link\"> Delete Orders Free
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin300u137u0/index.php/product/catalog?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin300u137u0/index.php/product/catalog?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCategories&amp;token=68491cef210ced88d6e86c8e6514f260\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminTracking&amp;token=7caf989963cf055c9a974014ff4afbf0\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminAttributesGroups&amp;token=f4420d607a5815686edfb96061fd3dce\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminManufacturers&amp;token=68431eafe50916263b48a9bc444d6465\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminAttachments&amp;token=4d9e899c503031b04a63e9f74168df47\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCartRules&amp;token=c538de201e1350c335e07be09c87def3\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin300u137u0/index.php/stock/?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCustomers&amp;token=9123e338addf6c9295a8656480aa8f7c\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Klienci
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCustomers&amp;token=9123e338addf6c9295a8656480aa8f7c\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminAddresses&amp;token=17d42aa629915f96bbd16b15131da09b\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"143\" id=\"subtab-AdminPrepaymentDashboard\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminPrepaymentDashboard&amp;token=9d26e44ef33d645668b8cc45bc473fdd\" class=\"link\"> Wallet
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCustomerThreads&amp;token=e8bd856d919fad9219810003aef0adef\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Obsługa klienta
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCustomerThreads&amp;token=e8bd856d919fad9219810003aef0adef\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminOrderMessage&amp;token=1db6d93fca50c043e1a16912d2e1bb20\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminReturn&amp;token=d4a69f51470f9df53ccafd4362a8b05d\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminStats&amp;token=0964b684d060079c626f0052e6e780d9\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statystyki
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-Hotinfo\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=Hotinfo&amp;token=6d3e1a09b9936d1577cb2339df860649\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    HotInfo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin300u137u0/index.php/module/manage?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Moduły
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin300u137u0/index.php/module/manage?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Wybrane
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin300u137u0/index.php/module/addons-store?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminThemes&amp;token=b228ba6488eb85f08f0e13c18daa863c\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Wygląd
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminThemes&amp;token=b228ba6488eb85f08f0e13c18daa863c\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminThemesCatalog&amp;token=8325505e55efacac38fd7b418fc46224\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCmsContent&amp;token=93d252997fd8e1d62a9b0e7790454dde\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminModulesPositions&amp;token=981dc3f08c0b7c29cbfa3d3e2c467322\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminImages&amp;token=ffe2c63629c5901e1a1426154994e6ec\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminLinkWidget&amp;token=cf2919d7769aa6287309f454eeae84d5\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCarriers&amp;token=1b1faacd9dd52abc2531a38eedd6fdc7\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Wysyłka
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCarriers&amp;token=1b1faacd9dd52abc2531a38eedd6fdc7\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminShipping&amp;token=5ba2ba33c1646e644be4ba7ccdd5ec10\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminPayment&amp;token=74d2a76481a0e10017e79df504ed7ec0\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Płatność
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminPayment&amp;token=74d2a76481a0e10017e79df504ed7ec0\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminPaymentPreferences&amp;token=98247e47e4f95e6627fb465a5419d55b\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminLocalization&amp;token=5228e560a64b6b1f0557f72d6104a48f\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Międzynarodowy
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminLocalization&amp;token=5228e560a64b6b1f0557f72d6104a48f\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminZones&amp;token=f82bbfcacbe560e3a063e55429584911\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminTaxes&amp;token=b756228dae8a37004c6535c16486a698\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminTranslations&amp;token=77b8aaf2862a2e27b91a4a1dc7e66188\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin300u137u0/index.php/configure/shop/preferences?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Preferencje
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin300u137u0/index.php/configure/shop/preferences?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminOrderPreferences&amp;token=c3badff75f2f696f3a805ae8e8fac014\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin300u137u0/index.php/configure/shop/product_preferences?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin300u137u0/index.php/configure/shop/customer_preferences?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminContacts&amp;token=b07952abe7ae72ee3de5de241056a48b\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminMeta&amp;token=6cdcce60bdb5e0575e0f129f966ab1d3\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminSearchConf&amp;token=2e696df9a4178fb0d17455c0d9a63593\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminGamification&amp;token=3322d9532253ff2984863d9834586460\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin300u137u0/index.php/configure/advanced/system_information?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Zaawansowane
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin300u137u0/index.php/configure/advanced/system_information?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin300u137u0/index.php/configure/advanced/performance?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin300u137u0/index.php/configure/advanced/administration?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminEmails&amp;token=3a49f05cdb7995e9e3f4c8dc72efecf0\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/admin300u137u0/index.php/configure/advanced/import?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminEmployees&amp;token=8b2eadfba93aa806d50ecd26cde07745\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminRequestSql&amp;token=ebc7fe18c75875b23738df2f58a132ba\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminLogs&amp;token=8de0f8b6d20914872a5199aff59191a8\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminWebservice&amp;token=28ee6b5d5daff7eafccfe366b90a1a6f\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"149\" id=\"tab-GiftCard\">
              <span class=\"title\">Gift Cards</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminCreateGift\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminCreateGift&amp;token=0a91f7a02b92a977e5cd96aa4c0af076\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Add Gift Card
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminGift\">
                  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminGift&amp;token=57520b32d8b9463c37767e5a356f73a5\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Zobacz
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Ogólny</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Preferencje          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin300u137u0/index.php/module/catalog?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\"                title=\"Rekomendowane moduły\"
                              >
                Rekomendowane moduły
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin300u137u0/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminPreferences%253Fversion%253D1.7.4.2%2526country%253Dpl/Pomoc?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class=\"nav-item\">
                    <a href=\"/admin300u137u0/index.php/configure/shop/preferences?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"79\">Ogólny</a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin300u137u0/index.php/configure/shop/maintenance?_token=qgDdAdNd4mWlZRm7SAP4bmfFJ4imjWzUv7Bc9rlYKs8\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"80\">Przerwa techniczna</a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </ul>
    </div>
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=anita%40avernet.pl&amp;firstname=Anita&amp;lastname=Admin&amp;website=http%3A%2F%2Fordernow.allrealmeal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin300u137u0/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=anita%40avernet.pl&amp;firstname=Anita&amp;lastname=Admin&amp;website=http%3A%2F%2Fordernow.allrealmeal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div  with-tabs\">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1282
        $this->displayBlock('content_header', $context, $blocks);
        // line 1283
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1284
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1285
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1286
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://ordernow.allrealmeal.com/admin300u137u0/index.php?controller=AdminDashboard&amp;token=bcf3997072b9445d0c98b198a44afec7\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=anita%40avernet.pl&amp;firstname=Anita&amp;lastname=Admin&amp;website=http%3A%2F%2Fordernow.allrealmeal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin300u137u0/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=anita%40avernet.pl&amp;firstname=Anita&amp;lastname=Admin&amp;website=http%3A%2F%2Fordernow.allrealmeal.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1395
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 91
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1282
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1283
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1284
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1285
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1395
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__9f799e3692da776f4fbc4246e359a223b713511605ad83d917e6a80a124f0656";
    }

    public function getDebugInfo()
    {
        return array (  1474 => 1395,  1469 => 1285,  1464 => 1284,  1459 => 1283,  1454 => 1282,  1445 => 91,  1437 => 1395,  1326 => 1286,  1323 => 1285,  1320 => 1284,  1317 => 1283,  1315 => 1282,  120 => 91,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9f799e3692da776f4fbc4246e359a223b713511605ad83d917e6a80a124f0656", "");
    }
}
