<?php
/**
 * Cash on Pickup: storefront and Modules > Payment text.
 *
 * @package  CashOnPickup
 * @license  https://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License V2.0
 */

$define = [
    'MODULE_PAYMENT_COP_TEXT_TITLE' => 'Cash on Pickup',
    'MODULE_PAYMENT_COP_TEXT_DESCRIPTION' => 'Customers pay cash when they pick up their order. It shows at checkout only when they choose Store Pickup shipping.',
    'MODULE_PAYMENT_COP_TEXT_NEEDS_STOREPICKUP' => '<br><br><strong>Store Pickup isn\'t enabled under Modules &gt; Shipping, so customers won\'t see this payment method.</strong>',
    'MODULE_PAYMENT_COP_TEXT_ALREADY_INSTALLED' => 'Cash on Pickup is already installed.',
// bof constant configuration titles and descriptions for payment module cop
    'CFGTITLE_MODULE_PAYMENT_COP_STATUS' => 'Enable Cash on Pickup Module',
    'CFGDESC_MODULE_PAYMENT_COP_STATUS' => 'Do you want to accept cash when customers pick up their orders? It shows at checkout only when Store Pickup is the chosen shipping method.',
    'CFGTITLE_MODULE_PAYMENT_COP_ZONE' => 'Payment Zone',
    'CFGDESC_MODULE_PAYMENT_COP_ZONE' => 'If a zone is selected, only enable this payment method for that zone.',
    'CFGTITLE_MODULE_PAYMENT_COP_GUEST' => 'Allow Guest Checkout',
    'CFGDESC_MODULE_PAYMENT_COP_GUEST' => 'Do you want One Page Checkout guests to be able to use Cash on Pickup? They have no account with you, so it is off unless you turn it on.',
    'CFGTITLE_MODULE_PAYMENT_COP_ORDER_STATUS_ID' => 'Set Order Status',
    'CFGDESC_MODULE_PAYMENT_COP_ORDER_STATUS_ID' => 'Set the status of orders made with this payment module to this value',
    'CFGTITLE_MODULE_PAYMENT_COP_SORT_ORDER' => 'Sort order of display.',
    'CFGDESC_MODULE_PAYMENT_COP_SORT_ORDER' => 'Sort order of display. Lowest is displayed first.',
// eof constant configuration titles and descriptions for payment module cop
];

return $define;
