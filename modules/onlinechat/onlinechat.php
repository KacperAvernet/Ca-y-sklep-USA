<?php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__).'/libraries/JsonHandler.php');
require_once(dirname(__FILE__).'/classes/Ochat.php');

class Onlinechat extends Module
{
    protected $sounds_path = null;
    protected $view_path = null;
    protected $js_path = null;
    protected $css_path = null;
    protected $controller_name;
    protected $tab_list = null;

    protected $offline_template = null;
    protected $default_template_iso = null;

    protected $front_controller = null;

    public function __construct()
    {
        $this->name = 'onlinechat';
        $this->tab = 'front_office_features';
        $this->version = '1.3.11';
        $this->author = 'Prestashop';
        $this->need_instance = 0;
        $this->module_key = '19a81dcc9775d09e032a0b0eaa1d57f0';
        $this->author_address = '0x64aa3c1e4034d07015f639b0e171b0d7b27d01aa';

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->sounds_path = $this->_path.'sounds/';
        $this->view_path = $this->_path.'views/';
        $this->js_path = $this->_path.'views/js/';
        $this->css_path = $this->_path.'views/css/';

        $ps_url = Tools::usingSecureMode() ? Tools::getShopDomainSsl(true) : Tools::getShopDomain(true);
        $ps_url .= __PS_BASE_URI__;
        $this->front_controller = $ps_url.'?fc=module&module='.$this->name.'&controller=Ochat';

        $this->controller_name = 'AdminOnlineChat';

        $this->displayName = $this->l('Online Chat');
        $this->description = $this->l('The module allows you to chat online with your customers, directly from the back office of your store');

        $this->offline_template = 'offline';
        $this->default_template_iso = 'fr';
        $this->ps17 = version_compare(_PS_VERSION_, '1.7.0.0', '>=');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->assignTabList();
        $this->logo_path = $this->_path.'logo.png';
        $this->ps_url = Tools::getCurrentUrlProtocolPrefix().htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8').__PS_BASE_URI__;
        
    }

    /**
     * Assign all sub menu on Admin tab variable
     */
    public function assignTabList()
    {
        $this->tab_list = array(
            array(
                'class' => 'AdminOChat',
                'active' => true,
                'position' => 0,
                'id_parent' => (($this->ps17 === true)? 114 : 0),
                'name' => $this->displayName
            ),
            array(
                'class' => 'AdminOnlineChatConversation',
                'active' => true,
                'position' => 1,
                'name' => $this->l('Conversations')
            ),
            array(
                'class' => 'AdminOnlineChatConfiguration',
                'active' => true,
                'position' => 3,
                'name' => $this->l('Configuration')
            ),
            array(
                'class' => $this->controller_name,
                'active' => true,
                'position' => 4,
                'id_parent' => -1,
                'name' => $this->displayName
            )
        );
    }

    /**
     * Update position of module POS
     * @param null $id_parent
     * @return bool
     */
    public function updatePositionParentTab($id_parent = null)
    {
        $flag = true;
        if (empty($id_parent)) {
            $id_parent = (int) Tab::getIdFromClassName($this->tab_list[0]['class']);
        }
        $tab = new Tab((int) $id_parent);
        if (Validate::isLoadedObject($tab)) {
            $flag = $flag && $tab->updatePosition(true, Tab::getNewLastPosition((int) $id_parent));
        }
        return $flag;
    }

    /**
     * Install all admin tab
     * @return boolean
     */
    public function installTabList()
    {
        $flag = true;
        $id_parent = (int) Tab::getIdFromClassName($this->displayName); // get id parent tab

        for ($i = 0; isset($this->tab_list[$i]); $i++) {
            if ($i == 0 && !$id_parent) {
                // install parent tab
                $this->installTab($this->tab_list[$i]);
                $id_parent = (int) Tab::getIdFromClassName($this->tab_list[0]['class']); // get id parent exit tab
                $this->updatePositionParentTab($id_parent);
            } else {
                $flag = $flag && (int) $this->installTab($this->tab_list[$i], $id_parent);
            }
        }
        return $flag;
    }

    /**
     * Install an Admin Tab (menu)
     * @param $tab_
     * @param $id_parent
     * @return mixed
     */
    public function installTab($tab_, $id_parent = 0)
    {
        $tab = new Tab();
        $name = array();
        foreach (Language::getLanguages(false) as $language) {
            $name[$language['id_lang']] = $tab_['name'];
        }
        $tab->name = $name;
        $tab->class_name = $tab_['class'];
        $tab->module = $this->name;
        $tab->active = (int)$tab_['active'];

        if (isset($tab_['id_parent'])) {
            $tab->id_parent = (int)$tab_['id_parent'];
        } else {
            $tab->id_parent = (int)$id_parent;
            $tab->position = (int)$tab_['position'];
        }

        return $tab->add(true);
    }

    /**
     * Uninstall all Admin Tabs (menu)
     * @return boolean
     */
    public function uninstallTabList()
    {
        $flag = true;
        $tabs = Tab::getCollectionFromModule($this->name);
        if (!empty($tabs)) {
            foreach ($tabs as $tab) {
                $flag = $flag && $tab->delete();
            }
        }
        return $flag;
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        $this->setDefaultConfig();

        include(dirname(__FILE__).'/sql/install.php');
        Ochat::initLog(Employee::getEmployees());

        $init_return = JsonHandler::init() && is_writable(dirname(__FILE__).'/mails/');
        Configuration::updateValue(
            'OCHAT_INSTALL',
            $init_return,
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        return parent::install() &&
            $this->installTabList() &&
            $this->registerHook('header') &&
            $this->registerHook('displayBackOfficeTop') &&
            $this->registerHook('registerGDPRConsent') &&
            $this->registerHook('actionDeleteGDPRCustomer') &&
            $this->registerHook('actionExportGDPRData');
    }

    /**
     * @return mixed
     */
    public function uninstall()
    {
        $config_vars = $this->getConfigFormValues();
        foreach (array_keys($config_vars) as $key) {
            Configuration::deleteByName($key);
        }

        include(dirname(__FILE__).'/sql/uninstall.php');

        return parent::uninstall()
            && $this->uninstallTabList();
    }

    /**
     * set default config at the installation
     */
    public function setDefaultConfig()
    {
        $config_vars = $this->getConfigFormValues();
        foreach (array_keys($config_vars) as $key) {
            Configuration::updateValue(
                $key,
                '',
                false,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
        }

        Configuration::updateValue(
            'OCHAT_IS_ONLINE',
            'no',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_OPERATOR_NAME',
            'Admin',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_POSITION',
            'right',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_BIP_VOLUME',
            '50',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_ONLINE_HEADER_BG_COLOR',
            '#008abd',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_ONLINE_HEADER_TEXT_COLOR',
            '#ffffff',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_OFFLINE_HEADER_BG_COLOR',
            '#008abd',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_OFFLINE_HEADER_TEXT_COLOR',
            '#ffffff',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_ONLINE_HEADER_TEXT',
            array(1 => 'Hello, can we help you ?'),
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_ONLINE_WELCOME_TEXT',
            array(1 => 'We are available to answer all of your questions'),
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_OFFLINE_HEADER_TEXT',
            array(1 => 'Leave us a message'),
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_OFFLINE_WELCOME_TEXT',
            array(1 => 'Sorry we are not available at the moment. Send us a message and we ll get back to you soon'),
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );


        Configuration::updateValue(
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR',
            '#e1e3e5',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR',
            '#2b2b2b',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR',
            '#cbcbd1',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
        Configuration::updateValue(
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR',
            '#2b2b2b',
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        Configuration::updateValue(
            'OCHAT_TIME_DELAY',
            3000,
            false,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );
    }

    /**
     * Set values for the inputs.
     * @return array
     */
    protected function getConfigFormValues()
    {
        $conf_vars = $conf_vars_text = array();
        $languages = Language::getLanguages();

        foreach ($languages as $lang) {
            $conf_vars_text['OCHAT_ONLINE_HEADER_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_ONLINE_HEADER_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_ONLINE_WELCOME_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_ONLINE_WELCOME_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_OFFLINE_HEADER_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_OFFLINE_HEADER_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_OFFLINE_WELCOME_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_OFFLINE_WELCOME_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
        }

        $conf_vars =  array(
            'OCHAT_INSTALL' => Configuration::get(
                'OCHAT_INSTALL',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_IS_ONLINE' => Configuration::get(
                'OCHAT_IS_ONLINE',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_OPERATOR_NAME' => Configuration::get(
                'OCHAT_OPERATOR_NAME',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_POSITION' => Configuration::get(
                'OCHAT_POSITION',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_BIP_SOUND' => Configuration::get(
                'OCHAT_BIP_SOUND',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_BIP_VOLUME' => Configuration::get(
                'OCHAT_BIP_VOLUME',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_EMAIL_TO_NOTIFY' => Configuration::get(
                'OCHAT_EMAIL_TO_NOTIFY',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_FORM_NAME' => Configuration::get(
                'OCHAT_FORM_NAME',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_FORM_EMAIL' => Configuration::get(
                'OCHAT_FORM_EMAIL',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_FORM_PHONE' => Configuration::get(
                'OCHAT_FORM_PHONE',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_FORM_MESSAGE' => Configuration::get(
                'OCHAT_FORM_MESSAGE',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_IF_OFFLINE_ACTIVATED' => Configuration::get(
                'OCHAT_IF_OFFLINE_ACTIVATED',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO' => Configuration::get(
                'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_TIME_DELAY' => Configuration::get(
                'OCHAT_TIME_DELAY',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_ONLINE_HEADER_BG_COLOR' => Configuration::get(
                'OCHAT_ONLINE_HEADER_BG_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_ONLINE_HEADER_TEXT_COLOR' => Configuration::get(
                'OCHAT_ONLINE_HEADER_TEXT_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_OFFLINE_HEADER_BG_COLOR' => Configuration::get(
                'OCHAT_OFFLINE_HEADER_BG_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_OFFLINE_HEADER_TEXT_COLOR' => Configuration::get(
                'OCHAT_OFFLINE_HEADER_TEXT_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR' => Configuration::get(
                'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR' => Configuration::get(
                'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR' => Configuration::get(
                'OCHAT_CLIENT_CHAT_BOX_BG_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            ),
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR' => Configuration::get(
                'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR',
                null,
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            )
        );

        return array_merge($conf_vars, $conf_vars_text);
    }

    /**
     * Get the config vars by id_lang && id_shop
     * @param null $id_shop
     * @param null $id_shop_group
     * @param null $id_lang
     * @return array
     */
    protected function getConfigFormValuesFiltered($id_shop, $id_shop_group, $id_lang)
    {
        return  array(
            'OCHAT_INSTALL' => Configuration::get('OCHAT_INSTALL', null, $id_shop_group, $id_shop),
            'OCHAT_IS_ONLINE' => Configuration::get('OCHAT_IS_ONLINE', null, $id_shop_group, $id_shop),
            'OCHAT_OPERATOR_NAME' => Configuration::get('OCHAT_OPERATOR_NAME', null, $id_shop_group, $id_shop),
            'OCHAT_POSITION' => Configuration::get('OCHAT_POSITION', null, $id_shop_group, $id_shop),
            'OCHAT_BIP_SOUND' => Configuration::get('OCHAT_BIP_SOUND', null, $id_shop_group, $id_shop),
            'OCHAT_BIP_VOLUME' => Configuration::get('OCHAT_BIP_VOLUME', null, $id_shop_group, $id_shop),
            'OCHAT_EMAIL_TO_NOTIFY' => Configuration::get('OCHAT_EMAIL_TO_NOTIFY', null, $id_shop_group, $id_shop),
            'OCHAT_ONLINE_HEADER_TEXT' => Configuration::get(
                'OCHAT_ONLINE_HEADER_TEXT',
                $id_lang,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_ONLINE_WELCOME_TEXT' => Configuration::get(
                'OCHAT_ONLINE_WELCOME_TEXT',
                $id_lang,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_OFFLINE_HEADER_TEXT' => Configuration::get(
                'OCHAT_OFFLINE_HEADER_TEXT',
                $id_lang,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_OFFLINE_WELCOME_TEXT' => Configuration::get(
                'OCHAT_OFFLINE_WELCOME_TEXT',
                $id_lang,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_FORM_NAME' => Configuration::get('OCHAT_FORM_NAME', null, $id_shop_group, $id_shop),
            'OCHAT_FORM_EMAIL' => Configuration::get('OCHAT_FORM_EMAIL', null, $id_shop_group, $id_shop),
            'OCHAT_FORM_PHONE' => Configuration::get('OCHAT_FORM_PHONE', null, $id_shop_group, $id_shop),
            'OCHAT_FORM_MESSAGE' => Configuration::get('OCHAT_FORM_MESSAGE', null, $id_shop_group, $id_shop),
            'OCHAT_IF_OFFLINE_ACTIVATED' => Configuration::get(
                'OCHAT_IF_OFFLINE_ACTIVATED',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO' => Configuration::get(
                'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_TIME_DELAY' => Configuration::get('OCHAT_TIME_DELAY', null, $id_shop_group, $id_shop),
            'OCHAT_OFFLINE_HEADER_BG_COLOR' => Configuration::get(
                'OCHAT_OFFLINE_HEADER_BG_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_OFFLINE_HEADER_TEXT_COLOR' => Configuration::get(
                'OCHAT_OFFLINE_HEADER_TEXT_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_ONLINE_HEADER_BG_COLOR' => Configuration::get(
                'OCHAT_ONLINE_HEADER_BG_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_ONLINE_HEADER_TEXT_COLOR' => Configuration::get(
                'OCHAT_ONLINE_HEADER_TEXT_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR' => Configuration::get(
                'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR' => Configuration::get(
                'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR' => Configuration::get(
                'OCHAT_CLIENT_CHAT_BOX_BG_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR' => Configuration::get(
                'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR',
                null,
                $id_shop_group,
                $id_shop
            ),
        );
    }


    /**
     * Load the configuration form
     */
    public function getContent()
    {
        $this->loadAsset();
        $lang = 'fr';
        $languages = Language::getLanguages();

        $admin_token = '&token='.Tools::getAdminTokenLite($this->controller_name);
        $controller_url = 'index.php?tab='.$this->controller_name.$admin_token;

        $config_vars = $this->getConfigFormValues();
        $type_date = str_replace('Y', 'yy', $this->context->language->date_format_lite);

        if (in_array($this->context->language->iso_code, array('en', 'fr', 'es'))) {
            $lang = $this->context->language->iso_code;
        }

        reset($config_vars['OCHAT_ONLINE_HEADER_TEXT']);
        $first_key = key($config_vars['OCHAT_ONLINE_HEADER_TEXT']);

        $sorry_message = $this->l('Sorry, your thread has been archived, this is a new chat');
        $utm = '?utm_source=back-office&utm_medium=module&utm_campaign=back-office-';
        $this->context->smarty->assign(array(
            'id_module' => $this->id,
            'apifaq' => $this->loadFaq(),
            'module_active' => (int)$this->active,
            'module_name' => $this->name,
            'module_version' => $this->version,
            'module_display_name' => $this->displayName,
            'type_date' => $type_date,
            'multishop' => (int)Shop::isFeatureActive(),
            'ps_version' => (bool)version_compare(_PS_VERSION_, '1.6', '>'),
            // 'guide_link' => 'docs/'.$this->name.'_doc_'.$lang.'.pdf',
            'guide_link' => $this->ps_url.'modules/'.$this->name.'/docs/onlinechat_doc_'.Context::getContext()->language->iso_code.'.pdf',
            'tracking_url' =>  $utm.$this->context->language->iso_code.'&utm_content='.$this->name,
            'config_vars' => $config_vars,

            'languages' => $languages,
            'nb_lang' => count($languages),
            'default_lang' => (int)$this->context->language->id,

            'controller_name' => $this->controller_name,
            'controller_url' => $controller_url,
            'json_handler_url' => $this->_path.'/libraries/JsonHandler.php',

            'online' => 1,
            'OCHAT_OPERATOR_NAME' => $config_vars['OCHAT_OPERATOR_NAME'],
            'OCHAT_TIME_DELAY' => $config_vars['OCHAT_TIME_DELAY'],
            'OCHAT_ONLINE_HEADER_TEXT' => $config_vars['OCHAT_ONLINE_HEADER_TEXT'][$first_key],
            'OCHAT_ONLINE_WELCOME_TEXT' => $config_vars['OCHAT_ONLINE_WELCOME_TEXT'][$first_key],
            'OCHAT_ONLINE_HEADER_BG_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_BG_COLOR'],
            'OCHAT_ONLINE_HEADER_TEXT_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_BIP_VOLUME' => $config_vars['OCHAT_BIP_VOLUME'],
            'OCHAT_ONLINE_INPUT_PLACEHOLDER' => $this->l('Write your message here...'),
            'OCHAT_ONLINE_DELETED_THREAD_MESSAGE' => $sorry_message,

            'OCHAT_FRONT_CONTROLLER_URL' => $this->front_controller,
            'OCHAT_OFFLINE_HEADER_TEXT' => $config_vars['OCHAT_OFFLINE_HEADER_TEXT'][$first_key],
            'OCHAT_OFFLINE_WELCOME_TEXT' => $config_vars['OCHAT_OFFLINE_WELCOME_TEXT'][$first_key],
            'OCHAT_FORM_NAME' => 1,
            'OCHAT_FORM_EMAIL' => 1,
            'OCHAT_FORM_PHONE' => 1,
            'OCHAT_FORM_MESSAGE' => 1,
            'OCHAT_OFFLINE_HEADER_BG_COLOR' => $config_vars['OCHAT_OFFLINE_HEADER_BG_COLOR'],
            'OCHAT_OFFLINE_HEADER_TEXT_COLOR' => $config_vars['OCHAT_OFFLINE_HEADER_TEXT_COLOR'],
            'OCHAT_OFFLINE_SEND_MESSAGE' => $this->l('Thank you for your message, we will contact you very soon !'),
            'OCHAT_RIGHT' => (int)$this->hasEditRight(),
            'employees_conected_list' => Ochat::getEmployeesConected(),
            'logo_path' => $this->logo_path
        ));

        return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
    }

    /**
     * FAQ API
     */
    public function loadFaq()
    {
        include_once('classes/APIFAQClass.php');
        $api = new APIFAQ();
        $faq = $api->getData($this->module_key, $this->version);

        return $faq;
    }

    /**
    * Add the CSS & JavaScript files you want to be loaded in the BO.
    */
    public function hookDisplayBackOfficeTop($params)
    {

        // fix Advanced Search 4 error
        if (Tools::getIsset('pm_js_callback')) return null;

        $config_vars = $this->getConfigFormValues();

        $is_bo_user_connected = Context::getContext()->cookie->profile;
        $is_connected = Ochat::isConnected($params['cookie']->id_employee);

        $admin_token = '&token='.Tools::getAdminTokenLite($this->controller_name);
        $controller_url = 'index.php?tab='.$this->controller_name.$admin_token;

        $this->context->smarty->assign(array(
            'ochat_uniqid' => md5(__PS_BASE_URI__),
            'is_connected' => $is_connected,
            'id_employee' => $params['cookie']->id_employee,
            'id_shop' => $this->context->shop->id,
            'OCHAT_IS_ONLINE' => $config_vars['OCHAT_IS_ONLINE'],
            'OCHAT_OPERATOR_NAME' => $config_vars['OCHAT_OPERATOR_NAME'],
            'OCHAT_TIME_DELAY' => $config_vars['OCHAT_TIME_DELAY'],
            'OCHAT_POSITION' => $config_vars['OCHAT_POSITION'],
            'OCHAT_BIP_SOUND' => $config_vars['OCHAT_BIP_SOUND'],
            'OCHAT_BIP_VOLUME' => $config_vars['OCHAT_BIP_VOLUME'],
            'OCHAT_ONLINE_HEADER_BG_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_BG_COLOR'],
            'OCHAT_ONLINE_HEADER_TEXT_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_ONLINE_INPUT_PLACEHOLDER' => $this->l('Write your message here...'),
            'json_handler_url' => $this->_path.'libraries/JsonHandler.php',

            'sounds' => $this->sounds_path,

            'controller_name' => $this->controller_name,
            'controller_url' => $controller_url,
        ));

    $aControlerToAvoid = array( "AdminLogin", "AdminCustomers", "AdminAddresses");
    if (!in_array(Tools::getValue('controller'), $aControlerToAvoid)) {
            $css = array(
                $this->css_path.'likehangoutchat.css',
                $this->css_path.'sweetalert.css',
                $this->css_path.'font-awesome.min.css',
                $this->css_path.'back.css'
            );

            $jss = array(
                $this->js_path.'sweetalert.min.js',
                $this->js_path.'ion.sound.min.js',
                $this->js_path.'back.js'
            );

            $js_list = implode(';', $this->context->controller->js_files);
            if (!strstr($js_list, '/js/jquery/jquery-')) {
                $this->context->controller->setMedia();
            }

            if( $is_bo_user_connected ) {
                $this->context->controller->addJS($jss);
                $this->context->controller->addCSS($css, 'all');
            }

            return $this->display(__FILE__, 'views/templates/admin/chat/chat_menu.tpl');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader($params)
    {
        if (Tools::getValue('content_only') != 1) {
            $customer = null;
            if (isset($params['cookie']->customer_lastname) && isset($params['cookie']->customer_firstname)
                && isset($params['cookie']->email) && isset($params['cookie']->id_customer)
                && isset($params['cookie']->id_guest)) {
                $username = Tools::strtoupper($params['cookie']->customer_lastname).' ';
                $username .= Tools::ucfirst($params['cookie']->customer_firstname);
                $customer = array(
                    "id_customer" => $params['cookie']->id_customer,
                    "id_guest" => $params['cookie']->id_guest,
                    "name" => $username,
                    "email" => $params['cookie']->email
                );
            }

            $config_vars = $this->getConfigFormValuesFiltered(
                $params['cart']->id_shop,
                $params['cart']->id_shop_group,
                $params['cart']->id_lang
            );

            // If employee connected
            if (Ochat::isEmployeeConnected()) {
                $max_window = Configuration::get(
                    'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO',
                    null,
                    $params['cart']->id_shop_group,
                    $params['cart']->id_shop
                );

                if (JsonHandler::hasOpenThread($params['cart']->id_customer, $params['cart']->id_guest) && $config_vars['OCHAT_IS_ONLINE'] === "yes") {
                    return $this->displayOnlineForm(
                        $config_vars,
                        $params['cart']->id_lang,
                        $params['cart']->id_shop,
                        $params['cart']->id_customer,
                        $params['cart']->id_guest,
                        $customer
                    );
                } elseif (JsonHandler::getNbOpenThread() < $max_window && $config_vars['OCHAT_IS_ONLINE'] === "yes") {
                    return $this->displayOnlineForm(
                        $config_vars,
                        $params['cart']->id_lang,
                        $params['cart']->id_shop,
                        $params['cart']->id_customer,
                        $params['cart']->id_guest,
                        $customer
                    );
                } else {
                    if ($config_vars['OCHAT_IF_OFFLINE_ACTIVATED']) {
                        return $this->displayOfflineForm($config_vars, $customer);
                    }
                }
            } else {
                if ($config_vars['OCHAT_IF_OFFLINE_ACTIVATED']) {
                    return $this->displayOfflineForm($config_vars, $customer);
                }
            }
            Media::addJsDef(array(
                'OCHAT_UNIQID' => md5(__PS_BASE_URI__)
            ));
            $this->context->controller->addJS($this->js_path.'clean.js');
        }
    }

    /**
     * Display online form
     * @param $config_vars
     * @param $id_lang
     * @param $id_shop
     * @param $id_customer
     * @param $id_guest
     * @param $customer
     * @return mixed
     */
    public function displayOnlineForm($config_vars, $id_lang, $id_shop, $id_customer, $id_guest, $customer)
    {
        $sorry_message = $this->l('Sorry, your thread has been archived, this is a new chat');
        $this->context->smarty->assign(array(
            'online' => 1,
            'id_lang' => $id_lang,
            'id_shop' => $id_shop,
            'id_customer' => Tools::getValue('id_customer', $id_customer),
            'id_guest' => $id_guest,
            'ochat_customer' => $customer,
            'OCHAT_OPERATOR_NAME' => $config_vars['OCHAT_OPERATOR_NAME'],
            'OCHAT_FRONT_CONTROLLER_URL' => $this->front_controller,
            'OCHAT_IS_ONLINE' => $config_vars['OCHAT_IS_ONLINE'],
            'OCHAT_TIME_DELAY' => $config_vars['OCHAT_TIME_DELAY'],
            'OCHAT_ONLINE_HEADER_TEXT' => $config_vars['OCHAT_ONLINE_HEADER_TEXT'],
            'OCHAT_ONLINE_WELCOME_TEXT' => $config_vars['OCHAT_ONLINE_WELCOME_TEXT'],
            'OCHAT_ONLINE_HEADER_BG_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_BG_COLOR'],
            'OCHAT_ONLINE_HEADER_TEXT_COLOR' => $config_vars['OCHAT_ONLINE_HEADER_TEXT_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_BG_COLOR'],
            'OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_CLIENT_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_BG_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_BG_COLOR'],
            'OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR' => $config_vars['OCHAT_OPERATOR_CHAT_BOX_TEXT_COLOR'],
            'OCHAT_ONLINE_INPUT_PLACEHOLDER' => $this->l('Write your message here...'),
            'OCHAT_ONLINE_DELETED_THREAD_MESSAGE' => $sorry_message,
            'json_handler_url' => $this->_path.'libraries/JsonHandler.php',
            'ochat_uniqid' => md5(__PS_BASE_URI__),
        ));

        Media::addJsDef(array(
            'OCHAT_FRONT_CONTROLLER_URL' => $this->front_controller
        ));

        $css = array(
            $this->css_path.'front.css',
            $this->css_path.'likehangoutchat.css',
            $this->css_path.'font-awesome.min.css',
        );

        $this->context->controller->addJS($this->js_path.'front.js');
        $this->context->controller->addCSS($css);

        return $this->display(__FILE__, 'views/templates/front/online.tpl');
    }

    /**
     * Display offline form
     * @param $config_vars
     * @param $customer
     * @return mixed
     */
    public function displayOfflineForm($config_vars, $customer)
    {
        $this->context->smarty->assign(array(
            'ochat_uniqid' => md5(__PS_BASE_URI__),
            'online' => 0,
            'ochat_customer' => $customer,
            'OCHAT_OFFLINE_HEADER_TEXT' => $config_vars['OCHAT_OFFLINE_HEADER_TEXT'],
            'OCHAT_OFFLINE_WELCOME_TEXT' => $config_vars['OCHAT_OFFLINE_WELCOME_TEXT'],
            'OCHAT_FORM_NAME' => $config_vars['OCHAT_FORM_NAME'],
            'OCHAT_FORM_EMAIL' => $config_vars['OCHAT_FORM_EMAIL'],
            'OCHAT_FORM_PHONE' => $config_vars['OCHAT_FORM_PHONE'],
            'OCHAT_FORM_MESSAGE' => $config_vars['OCHAT_FORM_MESSAGE'],
            'OCHAT_OFFLINE_HEADER_BG_COLOR' => $config_vars['OCHAT_OFFLINE_HEADER_BG_COLOR'],
            'OCHAT_OFFLINE_HEADER_TEXT_COLOR' => $config_vars['OCHAT_OFFLINE_HEADER_TEXT_COLOR'],
            'OCHAT_OFFLINE_SEND_MESSAGE' => $this->l('Thank you for your message, we ll contact you very soon !'),
            'id_module' => $this->id,
        ));

        Media::addJsDef(array(
            'OCHAT_FRONT_CONTROLLER_URL' => $this->front_controller
        ));

        $css = array(
            $this->css_path.'front.css',
            $this->css_path.'likehangoutchat.css',
            $this->css_path.'font-awesome.min.css',
        );

        $this->context->controller->addJS($this->js_path.'front.js');
        $this->context->controller->addCSS($css);

        return $this->display(__FILE__, 'views/templates/front/offline.tpl');
    }

    /**
     * Format the form with key=>value
     * @param $form
     * @return array
     */
    public function formatForm($form)
    {
        $formatted_form = array();

        foreach ($form as $f) {
            $formatted_form[$f['name']] = $f['value'];
        }
        return $formatted_form;
    }

    /**
     * Make form for data in template mail
     * @param $form
     * @return array
     */
    public function formToDataTemplate($form)
    {
        return array(
            '{OCHAT_FORM_NAME}' => (isset($form['OCHAT_FORM_NAME']) ? $form['OCHAT_FORM_NAME'] : null),
            '{OCHAT_FORM_EMAIL}' => (isset($form['OCHAT_FORM_EMAIL']) ? $form['OCHAT_FORM_EMAIL'] : null),
            '{OCHAT_FORM_PHONE}' => (isset($form['OCHAT_FORM_PHONE']) ? $form['OCHAT_FORM_PHONE'] : null),
            '{OCHAT_FORM_MESSAGE}' => (isset($form['OCHAT_FORM_MESSAGE']) ? $form['OCHAT_FORM_MESSAGE'] : null),
        );
    }

    /**
     * Copy folder and child files
     * @param $source
     * @param $dest
     */
    private function copyRecursive($source, $dest)
    {
        if (is_dir($source)) {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            );

            foreach ($iterator as $file) {
                if ($file->isDir()) {
                    mkdir($dest.DIRECTORY_SEPARATOR.$iterator->getSubPathName());
                } else {
                    copy($file, $dest.DIRECTORY_SEPARATOR.$iterator->getSubPathName());
                }
            }
        } else {
            copy($source, $dest);
        }
    }

    /**
     * Create folder mail
     * @param $iso_lang
     */
    private function createMailFolder($iso_lang)
    {
        $src = dirname(__FILE__).'/mails/en';
        $dir = opendir($src);
        $dst = dirname(__FILE__).'/mails/'.$iso_lang;
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . '/' . $file)) {
                    $this->copyRecursive($src . '/' . $file, $dst . '/' . $file);
                } else {
                    copy($src . '/' . $file, $dst . '/' . $file);
                }
            }
        }
        closedir($dir);
    }

    /**
     * Send the mail to notify a new question
     * @param $from
     * @param $id_lang
     * @param $template_vars
     * @return mixed
     */
    public function sendMail($from = null, $id_lang = 1, $template_vars = '')
    {
        $template_path = dirname(__FILE__).'/mails/';
        $iso_lang = Language::getIsoById($id_lang);
        $to = Configuration::get(
            'OCHAT_EMAIL_TO_NOTIFY',
            null,
            $this->context->shop->id_shop_group,
            $this->context->shop->id
        );

        if (!file_exists($template_path.'/'.$iso_lang.'/'.$this->offline_template.'.html')) {
            $this->createMailFolder($iso_lang);
        }

        return Mail::Send(
            $id_lang,
            $this->offline_template,
            $this->l('You have received a new message'),
            $template_vars,
            $to,
            null,
            $from,
            null,
            null,
            null,
            $template_path,
            null,
            Shop::getContextShopID()
        );
    }

    /**
     * Load ressources needed by the configuration panel
     */
    public function loadAsset()
    {
        // Load JS
        $jss = array(
            $this->js_path.'configuration.js',
            $this->js_path.'sweetalert.min.js',
            $this->js_path.'faq.js'
        );
        $css = array(
            $this->css_path.'configuration.css',
            $this->css_path.'sweetalert.css',
            $this->css_path.'faq.css'
        );

        $this->context->controller->addJS($jss);
        $this->context->controller->addCSS($css, 'all');
    }

    /**
    * check if the employee has the right to use this admin controller
    * @return bool
    */
    public function hasEditRight()
    {
        $result = Profile::getProfileAccess(
            (int)Context::getContext()->cookie->profile,
            (int)Tab::getIdFromClassName("AdminOChat")
        );
        return (bool)$result['edit'];
    }

    /**
     * Save form
     * @param $form
     */
    public function saveConfiguration($form)
    {
        $sReturn = "on";
        foreach ($form as $input) {
            if (strstr($input['name'], 'OCHAT_')) {
                if ($input['value'] == 'on') {
                    $input['value'] = 1;
                }
                if ($input['name'] === "OCHAT_IS_ONLINE" && $input['value'] === "no") {
                    $sReturn = "off";
                }
                if (preg_match('/^[A-Z_-]+[0-9]+$/', $input['name'])) {
                    $aInputName = array_reverse( explode("_", $input['name']));
                    $id_lang = (int)$aInputName[0];
                    $key = str_replace( "_$id_lang", "",$input['name'] );
                    $value = array($id_lang => $input['value']);
                    Configuration::updateValue(
                        $key,
                        $value,
                        false,
                        $this->context->shop->id_shop_group,
                        $this->context->shop->id
                    );
                } else {
                    Configuration::updateValue(
                        $input['name'],
                        $input['value'],
                        false,
                        $this->context->shop->id_shop_group,
                        $this->context->shop->id
                    );
                }
            }
        }
        return $sReturn;
    }

    /**
     * Login
     * @param $id_employee
     * @return mixed
     */
    public function login($id_employee)
    {
        return Ochat::login($id_employee);
    }

    /**
     * Logout
     * @param $id_employee
     * @return mixed
     */
    public function logout($id_employee)
    {
        return Ochat::logout($id_employee);
    }

    /**
     * Check if there is an employee connected
     * KISS
     * @return mixed
     */
    public function isEmployeeConnected()
    {
        return (int)Ochat::isEmployeeConnected();
    }

    /**
     * Check if can create thread
     * @param $id_shop
     * @return bool
     */
    public function checkBeforeCreateThread($id_shop)
    {
        $max_window = Configuration::get('OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO', null, null, $id_shop);
        if ($this->isEmployeeConnected() &&
          JsonHandler::getNbOpenThread() < $max_window
        ) {
            return true;
        }
        return false;
    }

    /**
     * Check if there is an employee connected
     * @return mixed
     */
    public function dumpDb()
    {
        return (int)JsonHandler::dumpDb();
    }

    /**
     * Format data for data table
     * @return array
     */
    public function getThreadList()
    {
        $list = $result = $response = array();
        $result =  Ochat::getAllThread($this->context->shop->id);
        foreach ($result as $res) {
            $list["id_thread"] = $res["id_thread"];

            if ($res["id_customer"] > 0) {
                $list["customer"] = Tools::strtolower($res["lastname"]). ' ' .Tools::ucfirst($res["firstname"]);
            } else {
                $list["customer"] = $this->l('Guest').' '.$res["id_guest"];
            }

            $list["message_date"] = $this->displayDate($res["message_date"]);
            $list["message_content"] = $res["message_content"];
            $list["email"] = $res["email"];
            $list["phone"] = $res["phone"];
            $list["actions"] = $this->loadActions($res["id_thread"]);
            $response[] = $list;
        }
        return array('data' => $response);
    }

    /**
     * Display DateTime according to current language
     * @param string $value
     * @return string
     */
    public function displayDate($value)
    {
        if (version_compare(_PS_VERSION_, '1.5.5.0', '>=')) {
            return (Tools::displayDate($value, null, true));
        } else {
            return (Tools::displayDate($value, $this->context->language->id, true));
        }
    }

    /**
     * Load action buttons that apply, modify or delete the rule
     * @param array id_thread
     * @return html
     */
    public function loadActions($id_thread)
    {
        $this->context->smarty->assign(array(
            'id_thread' => $id_thread
        ));
        return $this->display(__FILE__, 'views/templates/admin/online_chat_conversation/actions.tpl');
    }

    /**
     * Load needed librairy an file for dataTable controller
     */
    public function loadAdminAsset()
    {
        $this->context->controller->addCss('//cdn.datatables.net/1.10.7/css/jquery.dataTables.css');
        $jss = array(
            $this->js_path.'jquery.dataTables.min.js',
            $this->js_path.'fnReloadAjax.js',
            $this->js_path.'conversation.js'
        );
        $this->context->controller->addJS($jss);
    }


    /**
     * Delete Thread
     * @param $id_thread
     * @return mixed
     */
    public function deleteThread($id_thread)
    {
        return (int)Ochat::deleteThread($id_thread);
    }

    /**
     * Get all message with id_thread
     * @param $id_thread
     * @return mixed
     */
    public function getThreadHistory($id_thread)
    {
        $message_list = Ochat::getThreadHistory($id_thread);
        $this->context->smarty->assign(array(
            'message_list' => $message_list
        ));
        return $this->display(__FILE__, 'views/templates/admin/online_chat_conversation/details.tpl');
    }

    /**
     * Get the config vars by id_lang && id_shop
     * @return integer
     */
    public function getDefaultConfigurationToActiveChat()
    {
        $conf_vars = $conf_vars_text = $language_text_exists = array();
        $languages = Language::getLanguages();
        $iCanActivateChat = -1;

        $conf_vars = array(
            'OCHAT_INSTALL' => Configuration::get('OCHAT_INSTALL', null, $this->context->shop->id_shop_group, $this->context->shop->id),
            'OCHAT_OPERATOR_NAME' => Configuration::get('OCHAT_OPERATOR_NAME', null, $this->context->shop->id_shop_group, $this->context->shop->id),
            'OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO' => Configuration::get('OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO', null, $this->context->shop->id_shop_group, $this->context->shop->id),
            'OCHAT_EMAIL_TO_NOTIFY' => Configuration::get('OCHAT_EMAIL_TO_NOTIFY', null, $this->context->shop->id_shop_group, $this->context->shop->id),
            'OCHAT_IF_OFFLINE_ACTIVATED' => Configuration::get('OCHAT_IF_OFFLINE_ACTIVATED', null, $this->context->shop->id_shop_group, $this->context->shop->id),
        );

        foreach ($languages as $lang) {
            $language_text_exists[$lang['id_lang']] = 0;
            $conf_vars_text['OCHAT_ONLINE_HEADER_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_ONLINE_HEADER_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_ONLINE_WELCOME_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_ONLINE_WELCOME_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_OFFLINE_HEADER_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_OFFLINE_HEADER_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );
            $conf_vars_text['OCHAT_OFFLINE_WELCOME_TEXT'][$lang['id_lang']] = Configuration::get(
                'OCHAT_OFFLINE_WELCOME_TEXT',
                $lang['id_lang'],
                $this->context->shop->id_shop_group,
                $this->context->shop->id
            );

            if( !empty($conf_vars_text['OCHAT_ONLINE_HEADER_TEXT'][$lang['id_lang']]) &&
                !empty($conf_vars_text['OCHAT_ONLINE_WELCOME_TEXT'][$lang['id_lang']]) &&
                (!empty($conf_vars_text['OCHAT_OFFLINE_HEADER_TEXT'][$lang['id_lang']]) || $conf_vars['OCHAT_IF_OFFLINE_ACTIVATED'] == 0) &&
                (!empty($conf_vars_text['OCHAT_OFFLINE_WELCOME_TEXT'][$lang['id_lang']]) || $conf_vars['OCHAT_IF_OFFLINE_ACTIVATED'] == 0) )
            {
                $language_text_exists[$lang['id_lang']] = 1;
            }

        }

        if( $conf_vars['OCHAT_INSTALL'] == 1 &&
            !empty($conf_vars['OCHAT_OPERATOR_NAME']) &&
            $conf_vars['OCHAT_MAX_ONLINE_CHAT_WINDOW_IN_FO'] > 0 &&
            !in_array(0, $language_text_exists) )
        {
            $iCanActivateChat = 1;
        }

        return  (int)$iCanActivateChat;
    }

    public function hookActionDeleteGDPRCustomer ($customer)
    {
        if (!empty($customer['id']))
        {   
            $sql = "SELECT id_thread FROM "._DB_PREFIX_."ochat_message WHERE id_customer = ".(int)$customer['id'];
            $id_thread = (Db::getInstance()->getValue($sql));
            $sql = "DELETE FROM "._DB_PREFIX_."ochat_message WHERE id_thread = ".(int)$id_thread;
            if (Db::getInstance()->execute($sql))
            {
                return json_encode(true);
            }
            return json_encode($this->l('Online Chat: Unable to delete customer using id.'));
        }
    }

    public function hookActionExportGDPRData ($customer)
    {
        if (!empty($customer['id']))
        {
            $sql = "SELECT id_thread FROM "._DB_PREFIX_."ochat_message WHERE id_customer = ".(int)$customer['id'];
            $id_thread = (Db::getInstance()->getValue($sql));
            $sql = "SELECT message_content as Message, id_customer as Customer, id_employee as Employee, message_date as Date FROM "._DB_PREFIX_."ochat_message WHERE id_thread = ".(int)$id_thread;
            if ($res = Db::getInstance()->ExecuteS($sql))
            {
                return json_encode($res);
            }
            return json_encode($this->l('Online Chat: Unable to export customer using id.'));
        }
    }
}
