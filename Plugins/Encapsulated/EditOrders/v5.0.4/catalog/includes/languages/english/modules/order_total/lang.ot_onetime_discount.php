<?php
/*
 * This file is part of the "Onetime Discount" order total module for Zen Cart.
 *
 * "Onetime Discount" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation version 2 of the License.
 *
 * "Onetime Discount" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with "Onetime Discount". If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU GPL V2.0
 * @author Andrew Ballanger
 */
$define = [
    'MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_TITLE' => 'Onetime Discount',
    'MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DESCRIPTION' => 'Onetime Discount applied to the order',
// bof constant configuration titles and descriptions for ot_onetime_discount
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_STATUS' => 'This module is installed',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_SORT_ORDER' => 'Sort order of display.',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_CHANGE_TITLE' => 'Allow changing the title',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_CHANGE_TITLE' => 'Allow changing the title of the module while editing an order',
    'CFGTITLE_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DEDUCTION_ONLY' => 'Enable deductions only?',
    'CFGDESC_MODULE_ORDER_TOTAL_ONETIME_DISCOUNT_DEDUCTION_ONLY' => 'Should the order-total enable <em>only</em> deductions from the order\'s value? If set to <b>true</b>, then any value entered (whether positive or negative) deducts from the order; otherwise, you can use the order-total to both add to and deduct from an order\'s value. Default: <em>true</em>.',
// eof constant configuration titles and descriptions for ot_onetime_discount
];

return $define;
