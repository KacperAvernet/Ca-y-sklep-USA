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

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ochat_message` (
  `id_message` INT(5) NOT NULL AUTO_INCREMENT,
  `message_content` LONGTEXT NOT NULL,
  `message_date` DATETIME NOT NULL,
  `id_thread` INT(5) NOT NULL,
  `id_employee` INT NULL,
  `id_customer` INT NULL,
  `id_guest` INT NULL,
  PRIMARY KEY (`id_message`),
  KEY id_thread_index (id_thread),
  KEY id_employee_index (id_employee),
  KEY id_customer_index (id_customer),
  KEY id_guest_index (id_guest)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ochat_thread` (
  `id_thread` INT(5) NOT NULL AUTO_INCREMENT,
  `id_shop` INT(11) NOT NULL,
  `create_date` DATETIME NOT NULL,
  `id_lang` INT NOT NULL,
  PRIMARY KEY (`id_thread`),
  KEY id_lang_index (id_lang)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ochat_log` (
  `id_log` INT(2) NOT NULL AUTO_INCREMENT,
  `is_connected` INT(1) NOT NULL,
  `last_log_in` DATETIME NULL,
  `last_log_out` DATETIME NULL,
  `id_employee` INT(11) NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY id_lemployee_index (id_employee)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
