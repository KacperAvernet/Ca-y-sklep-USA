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

class AdminOnlineChatConversationController extends ModuleAdminController
{

    /**
     * Construct
     */
    public function __construct()
    {
        if (!Module::getInstanceByName('onlinechat')->hasEditRight()) {
            exit(-1);
        }

        $this->bootstrap = true;
        parent::__construct();
    }

    public function setMedia()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }

        parent::setMedia();
        $this->module->loadAdminAsset();
    }

    /**
     * Display of Module Admin Controller
     */
    public function display()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }

        $admin_controller_name = 'AdminOnlineChatConversation';
        $admin_token = Tools::getAdminTokenLite($admin_controller_name);
        $admin_controller_url = 'index.php?controller='.$admin_controller_name.'&token='.$admin_token;

        $this->context->smarty->assign(array(
          'token' => $admin_token,
          'admin_controller_name' => $admin_controller_name,
          'admin_controller_url' => $admin_controller_url
        ));
        parent::display();
    }

    /**
     * Fetch thread list for DataTable
     */
    public function ajaxProcessGetThreadList()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }

        exit(Tools::jsonEncode($this->module->getThreadList()));
    }

    /**
     * Delete thread and message
     */
    public function ajaxProcessDeleteThread()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }

        $thread = (int)Tools::getValue('thread');
        exit($this->module->deleteThread($thread));
    }

    /**
     * View thread and message
     */
    public function ajaxProcessGetThreadHistory()
    {
        if (!$this->module->hasEditRight()) {
            exit(-1);
        }

        $id_thread = (int)Tools::getValue('id_thread');
        exit($this->module->GetThreadHistory($id_thread));
    }
}
