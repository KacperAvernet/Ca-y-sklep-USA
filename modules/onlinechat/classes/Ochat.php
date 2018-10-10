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

class Ochat
{
    /**
     * Insert employee list in log table
     * @param $users
     * @return mixed
     */
    public static function initLog($users)
    {
        $query = 'REPLACE INTO `'._DB_PREFIX_.'ochat_log` (`is_connected`, `id_employee`) VALUES ';
        foreach ($users as $u) {
            $query .= ' (0, '. (int)$u['id_employee'] .'),';
        }
        return Db::getInstance()->Execute(Tools::substr($query, 0, -1));
    }

    /**
     * Set the employee as connected
     * @param $id_employee
     * @return mixed
     */
    public static function login($id_employee)
    {
        $queryExists = 'SELECT id_employee FROM  `'._DB_PREFIX_.'ochat_log` WHERE id_employee = '.(int)$id_employee;
        if (Db::getInstance()->ExecuteS($queryExists)) {
            $query = 'UPDATE `'._DB_PREFIX_.'ochat_log`
            SET is_connected = 1,
            last_log_in = "'.date("Y-m-d H:i:s").'" 
            WHERE id_employee = '.(int)$id_employee;
        } else {
            $query = 'INSERT INTO `'._DB_PREFIX_.'ochat_log` (`is_connected`, `last_log_in`, `id_employee`) VALUES
            (1, "'.date("Y-m-d H:i:s").'", '.(int)$id_employee.')';
        }
        return Db::getInstance()->Execute($query);
    }

    /**
     * Set the employee as not connected
     * @param $id_employee
     * @return mixed
     */
    public static function logout($id_employee)
    {
        $query = 'UPDATE `'._DB_PREFIX_.'ochat_log`
            SET is_connected = 0,
            last_log_out = "'.date("Y-m-d H:i:s").'"
            WHERE id_employee = '.(int)$id_employee;
        return Db::getInstance()->Execute($query);
    }

    /**
     * Check if there is at least 1 employee connected
     * @return mixed
     */
    public static function isEmployeeConnected()
    {
        $query = 'SELECT 1
            FROM `'._DB_PREFIX_.'ochat_log`
            WHERE is_connected = 1';
        return Db::getInstance()->getValue($query);
    }

    /**
     * Check if employee is connected
     * @return mixed
     */
    public static function isConnected($id_employee)
    {
        $query = 'SELECT 1
            FROM `'._DB_PREFIX_.'ochat_log`
            WHERE is_connected = 1
            AND id_employee = '. (int)$id_employee;
        return Db::getInstance()->getValue($query);
    }

    /**
     * Set the employee as not connected
     * @return mixed
     */
    public static function getEmployeesConected()
    {
        $query = '  SELECT o.id_employee, e.lastname, e.firstname 
                    FROM  `'._DB_PREFIX_.'ochat_log` o 
                    INNER JOIN  `'._DB_PREFIX_.'employee` e ON (e.id_employee = o.id_employee)
                    WHERE o.is_connected = 1';
        $returnedlist = Db::getInstance()->ExecuteS($query);
        return $returnedlist;
    }

    /**
     * Get thread list
     * @param int $id_shop
     * @return bool
     */
    public static function getAllThread($id_shop = 1)
    {
        $query = 'SELECT t.id_thread, t.id_shop, t.create_date, t.id_lang, l.iso_code,
            m.id_message, m.message_content, m.id_thread, m.message_date, m.id_employee, m.id_guest, m.id_customer,
            c.firstname, c.lastname, c.email, IFNULL(a.phone, a.phone_mobile) as phone
            FROM (SELECT MAX(m.id_message) as max_id, m.message_content, m.id_thread
                    FROM `'._DB_PREFIX_.'ochat_message` as m
                    RIGHT JOIN `'._DB_PREFIX_.'ochat_thread` as t ON m.id_thread = t.id_thread
                    WHERE t.id_shop = '.(int)$id_shop.'
                    AND m.id_employee IS NULL
                    GROUP BY m.id_thread
            ) as x
            INNER JOIN `'._DB_PREFIX_.'ochat_message` as m ON m.id_thread = x.id_thread and m.id_message = x.max_id
            RIGHT JOIN `'._DB_PREFIX_.'ochat_thread` as t ON m.id_thread = t.id_thread
            RIGHT JOIN `'._DB_PREFIX_.'lang` as l ON l.id_lang = t.id_lang
            LEFT JOIN `'._DB_PREFIX_.'customer` as c ON c.id_customer = m.id_customer
            LEFT JOIN `'._DB_PREFIX_.'address` as a ON a.id_customer = c.id_customer
            WHERE t.id_shop = '.(int)$id_shop.'
            AND m.id_employee IS NULL
            GROUP BY t.id_thread
            ORDER BY message_date DESC';
        return Db::getInstance()->ExecuteS($query);
    }

    /**
     * Delete thread
     * @param $id_thread
     * @return bool
     */
    public static function deleteThread($id_thread)
    {
        $query = 'DELETE t,m
                FROM `'._DB_PREFIX_.'ochat_thread` as t
                JOIN `'._DB_PREFIX_.'ochat_message` as m ON t.id_thread = m.id_thread
                WHERE t.id_thread = '.(int)$id_thread;
        return Db::getInstance()->Execute($query);
    }

    /**
     * Check if employee is connected
     * @param $id_thread
     * @return mixed
     */
    public static function getThreadHistory($id_thread)
    {
        $query = 'SELECT m.id_message, m.message_content, m.message_date,
        m.id_thread, m.id_employee, m.id_customer, m.id_guest,
        t.id_thread as t_id_thread, t.id_shop, t.create_date, t.id_lang
        FROM `'._DB_PREFIX_.'ochat_message` as m
        RIGHT JOIN `'._DB_PREFIX_.'ochat_thread` as t ON m.id_thread = t.id_thread
        WHERE m.id_thread = ' .(int)$id_thread. '
        ORDER BY m.message_date ASC';
        return Db::getInstance()->ExecuteS($query);
    }
}
