<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Adapter\Group;

use Group;

/**
 * This class will provide data from DB / ORM about Group
 */
class GroupDataProvider
{
    /**
     * Return available groups
     *
     * @param int $id_lang
     * @param bool $id_shop
     *
     * @return array Groups
     */
    public function getGroups($id_lang, $id_shop = false)
    {
        return Group::getGroups($id_lang, $id_shop);
    }

    /**
     * Return current group object
     * Use context
     *
     * @return Group Group object
     */
    public static function getCurrent()
    {
        return Group::getCurrent();
    }
}
