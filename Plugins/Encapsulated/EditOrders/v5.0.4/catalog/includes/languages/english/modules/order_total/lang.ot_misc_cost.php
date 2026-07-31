<?php
// -----
// Gather any Miscellaneous Cost for an order, an order-total created by lat9 (https://vinosdefrutastropicales.com)
//
// Last updated: EO 5.0.0
//
$define = [
    'MODULE_ORDER_TOTAL_MISC_COST_TITLE' => 'Misc. Cost',
    'MODULE_ORDER_TOTAL_MISC_COST_DESCRIPTION' => 'A miscellaneous cost associated with the order.',
// bof constant configuration titles and descriptions for ot_misc_cost
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_STATUS' => 'This module is installed',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_SORT_ORDER' => 'Sort order of display.',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_CHANGE_TITLE' => 'Allow changing the title',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_CHANGE_TITLE' => 'Allow changing the title of the module while editing an order',
    'CFGTITLE_MODULE_ORDER_TOTAL_MISC_COST_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_ORDER_TOTAL_MISC_COST_TAX_CLASS' => 'Use the following tax class for any Miscellaneous Cost. If you are applying a tax to this order-total, remember to:<ol><li>Set its <em>Sort Order</em> to a value greater than that for <code>ot_coupon</code>.</li><li>Set its <em>Sort Order</em> to a value less than that for <code>ot_tax</code>.</li></ol>',
// eof constant configuration titles and descriptions for ot_misc_cost
];
return $define;
