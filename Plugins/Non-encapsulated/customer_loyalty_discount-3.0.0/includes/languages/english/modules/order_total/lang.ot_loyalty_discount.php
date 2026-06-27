<?php
// -----
// Part of the "Customer Loyalty Discount", a Zen Cart order-total module.
//
// Last updated: v3.0.0 (renamed from ot_loyalty_discount.php)
//
$define = [
    'MODULE_LOYALTY_DISCOUNT_TITLE' => 'Loyalty Discount',
    'MODULE_LOYALTY_DISCOUNT_DESCRIPTION' => 'Customer Loyalty Discount',

    // -----
    // %1$s is replaced by the discount percentage.
    // %2$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT or MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT, based on configuration
    // %3$s is *conditionally* replaced by MODULE_LOYALTY_DISCOUNT_TAX_TEXT, based on configuration
    //
    'MODULE_LOYALTY_DISCOUNT_INFO' => 'Because of your previous purchases with us, this order qualifies for a discount of %1$s on its products%2$s%3$s.',
        'MODULE_LOYALTY_DISCOUNT_SHIPPING_TEXT' => ' and shipping-cost',
        'MODULE_LOYALTY_DISCOUNT_SHIPPING_WITH_TAX_TEXT' => ', shipping-cost',
        'MODULE_LOYALTY_DISCOUNT_TAX_TEXT' => ' and associated taxes',
// bof constant configuration titles and descriptions for order total module ot_loyalty_discount
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_STATUS' => 'Enable Discount?'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_STATUS' => 'Do you want to enable the Loyalty Discount?'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_SORT_ORDER' => 'Sort Order'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_SORT_ORDER' => 'Sort order of display.'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_SHIPPING' => 'Include Shipping?'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_SHIPPING' => 'Should an order\'s shipping cost be included in the discount calculation?'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_TAX' => 'Include Tax?'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_INC_TAX' => 'Should an order\'s tax, product and <em>optionally</em> shipping, be included in the discount calculation?'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CALC_TAX' => 'Recalculate Tax?'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CALC_TAX' => 'Recalculate the order\'s tax based on the discounted amount. <b>Note:</b> This setting is used only if you\'ve also indicated that the discount should apply to an order\'s tax.'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CUMORDER_PERIOD' => 'Cumulative Order Period'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_CUMORDER_PERIOD' => 'Set the period over which to calculate the cumulative order total.'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_TABLE' => 'Discount Percentage'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_TABLE' => 'Set the cumulative order total breaks for the period set above and discount percentages.<br><br>The default value (<code>1000:5,1500:7.5,2000:10</code>) gives the customer:<ol><li>A 5% discount for a total &gt; 1000.</li><li>A 7.5% discount for a total &gt; 1500.</li><li>A 10% discount for a total &gt; 2000.</li></ol>'
    'CFGTITLE_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_ORDER_STATUS' => 'Qualifying Order Status'
    'CFGDESC_MODULE_ORDER_TOTAL_LOYALTY_DISCOUNT_ORDER_STATUS' => 'Identify the order-status id(s) for a previously-placed order to be part of the cumulative orders\' totals used to determine the discount percentage.<ol><li>If the entry is empty, then <b>all</b> previously-placed orders are summed.</li><li>If the entry is a <em>single</em> id, than any order with an order-status greater than or equal to that value is included.</li><li>Otherwise, the entry is a comma-separated list of order-status ids and any order with a <em>current</em> order-status in that list is included.</li></ol>'
// eof constant configuration titles and descriptions for order total module ot_loyalty_discount
];
return $define;
