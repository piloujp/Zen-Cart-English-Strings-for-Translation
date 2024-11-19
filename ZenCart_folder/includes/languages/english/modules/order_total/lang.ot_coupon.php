<?php
$define = [
    'MODULE_ORDER_TOTAL_COUPON_TITLE' => 'Discount Coupon',
    'MODULE_ORDER_TOTAL_COUPON_HEADER' => TEXT_GV_NAMES . '/Discount Coupon',
    'MODULE_ORDER_TOTAL_COUPON_DESCRIPTION' => 'Discount Coupon',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'MODULE_ORDER_TOTAL_COUPON_REDEEM_INSTRUCTIONS' => '<p>Please type your coupon code into the box next to  Redemption Code. Your coupon will be applied to the total and reflected in your cart after you click continue.</p><p>Please note: you may only use one coupon per order.</p>',
    'MODULE_ORDER_TOTAL_COUPON_TEXT_CURRENT_CODE' => 'Your Current Redemption Code: ',
    'TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER' => 'REMOVE',
    'TEXT_REMOVE_REDEEM_COUPON' => 'Discount Coupon Removed by Request!',
    'MODULE_ORDER_TOTAL_COUPON_INCLUDE_ERROR' => ' Setting Include tax = true, should only happen when recalculate = None',
// Beginning of constant configuration titles and descriptions for order total module ot_coupon
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_STATUS' => 'This module is installed',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER' => 'Sort order of display.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING' => 'Include Shipping',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING' => 'Include Shipping in calculation',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_TAX' => 'Include Tax',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_TAX' => 'Include Tax in calculation.',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_CALC_TAX' => 'Re-calculate Tax',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_CALC_TAX' => 'Re-Calculate Tax',
    'CFGTITLE_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS' => 'Use the following tax class when treating Discount Coupon as Credit Note.',
// End of constant configuration titles and descriptions for order total module ot_coupon
];

$define['MODULE_ORDER_TOTAL_COUPON_REMOVE_INSTRUCTIONS'] = '<p>To remove a Discount Coupon from this order replace the coupon code with: ' . $define['TEXT_COMMAND_TO_DELETE_CURRENT_COUPON_FROM_ORDER'] . '</p>';

return $define;
