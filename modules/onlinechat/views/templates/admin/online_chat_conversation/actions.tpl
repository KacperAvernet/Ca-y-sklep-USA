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

<div class="btn-group-action">
    <div class="btn-group pull-right">
        <a data-id="{$id_thread|intval}" class="pointer ochat-btn-view btn btn-default" href="#">
            <i class="icon-eye-open"></i> {l s='View' mod='onlinechat'}
        </a>
        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <i class="icon-caret-down"></i>&nbsp;
        </button>
        <ul class="dropdown-menu" role="menu">
            <li class="pointer">
                <a data-id="{$id_thread|intval}" class="pointer ochat-btn-delete delete" href="#">
                    <i class="icon-trash"></i> {l s='Delete' mod='onlinechat'}
                </a>
            </li>
        </ul>
    </div>
</div>
