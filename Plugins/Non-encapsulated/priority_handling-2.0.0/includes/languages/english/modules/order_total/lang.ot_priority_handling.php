<?php
$define = [
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TITLE' => 'Priority Handling',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_DESCRIPTION' => 'Priority Handling',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TEXT_DESCR' => 'Rush my order! Select this optional handling by clicking on the box below next to Add Priority Handling. A priority handling charge will be added to your total after you click continue.',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TEXT_ENTER_CODE' => 'Add Priority Handling:',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_YES' => 'Yes',
    'MODULE_ORDER_TOTAL_PRIORITY_HANDLING_NO' => 'No',
// Beginning of constant configuration titles and descriptions for order total module ot_priority_handling
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_STATUS' => 'Enable Priority Handling Module',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_STATUS' => 'Do you want to enable this module?',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_SORT_ORDER' => 'Sort order of display.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TYPE' => 'Priority Handling Charge Type',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TYPE' => 'Specify whether the handling charge should be a percentage of cart subtotal, or specified as tiers below',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_PER' => 'Handling Charge: Percentage',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_PER' => 'Enter the percentage of subtotal to charge as handling fee.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_FEE' => 'Handling Charge: Fee Tier',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_FEE' => 'Enter the fee tier increment. Handling charge will be:<br>(subtotal/price_tier) * fee_tier',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_INCREMENT' => 'Handling Charge: Price Tier ',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_INCREMENT' => 'Enter the price tier increment.  To setup a flat-fee structure, enter a large value here and your flat fee in the fee tier above. For example, if you want to always charge $10 and your orders are typically around $100, enter $5000 here and $10 in the Fee Tier box.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_OVER' => 'Handling Charge: Price Tier Ceiling',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_OVER' => 'Enter the price tier maximum.  For example, the default values setup a 50 cent charge for every $100 assessed up to $1000 of the cart subtotal or $5 maximum.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_CLASS' => 'If handling fees are taxable, then select the tax class that should apply.',
    'CFGTITLE_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_INLINE' => 'Tax Display',
    'CFGDESC_MODULE_ORDER_TOTAL_PRIORITY_HANDLING_TAX_INLINE' => 'Can have tax (see above) be added to the tax subtotal line for the class above or have it added to the handling fee line.  Which line should it be added to?',
// eof constant configuration titles and descriptions for order total module ot_priority_handling
];
return $define;
