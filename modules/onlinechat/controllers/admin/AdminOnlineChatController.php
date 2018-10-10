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

class AdminOnlineChatController extends ModuleAdminController
{
    /**
     * Save the form data
     */
    public function ajaxProcessSaveConfiguration()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        $form = Tools::getValue('form');
        exit($this->module->saveConfiguration($form));
    }

    /**
     * Login employee
     */
    public function ajaxProcessLogin()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        $id_employee = (int)Tools::getValue('id_employee');
        exit(Tools::jsonEncode((int)$this->module->login($id_employee)));
    }

    /**
     * Logout employee
     */
    public function ajaxProcessLogout()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        $id_employee = (int)Tools::getValue('id_employee');
        exit(Tools::jsonEncode((int)$this->module->logout($id_employee)));
    }

    /**
     * Dump into DB
     */
    public function ajaxProcessDumpDb()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        exit(Tools::jsonEncode($this->module->dumpDb()));
    }

    /**
     * Activate Online Chat BO
     */
    public function ajaxProcessActivateChat()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        $id_employee = (int)Tools::getValue('id_employee');
        $iLoggedEmployee = (int) $this->module->login($id_employee);
        $iConfigurationToActiveChat = (int)$this->module->getDefaultConfigurationToActiveChat();
        exit(Tools::jsonEncode((($iLoggedEmployee === 1 && $iConfigurationToActiveChat === 1)? 1 : 0)));
    }

    /**
     * Get Customer First Name and Last Name
     */
    public function ajaxProcessGetUserName()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }
        $oCustomerName = new Customer((int)Tools::getValue('id_customer'));
        if( $oCustomerName->id === null ) {
            echo "";
        } else {
            echo $oCustomerName->lastname." ".$oCustomerName->firstname;
        }
        
    }
}
