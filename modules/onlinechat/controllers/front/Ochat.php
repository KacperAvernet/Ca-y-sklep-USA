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

class OnlineChatOchatModuleFrontController extends FrontController
{
    protected $module = null;

    /**
     * Redirect to home if trying to access to the front controller without ajax call
     */
    public function initContent()
    {
        $this->module = Module::getInstanceByName('onlinechat');

        if (Tools::getValue('ajax') != true) {
            parent::initContent();
            Tools::redirect('index.php?fc=PageNotFound');
        }
    }

    /**
     * Send offline mail
     */
    public function displayAjaxSendOfflineMessage()
    {
        $context = Context::getContext();
        $form = $this->module->formatForm((array)Tools::getValue('form'));
        $form_data = $this->module->formToDataTemplate($form);
        $from = null;

        if (isset($form['OCHAT_FORM_EMAIL'])) {
            $from = $form['OCHAT_FORM_EMAIL'];
        }
        echo $this->module->sendMail($from, $context->cart->id_lang, $form_data);
    }

    /**
     * Check if there is an employee connected employee
     */
    public function displayAjaxIsEmployeeConnected()
    {
        echo $this->module->isEmployeeConnected();
    }

    /**
     * Check if can create thread
     */
    public function displayAjaxCheckBeforeCreateThread()
    {
        $id_shop = (int)Tools::getValue('id_shop');
        echo $this->module->checkBeforeCreateThread($id_shop);
    }
}
