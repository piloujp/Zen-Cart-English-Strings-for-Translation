<?php
$define = [
	'MODULE_SHIPPING_JPPARCELEMS_TEXT_TITLE' =>        'International Express mail',
	'MODULE_SHIPPING_JPPARCELEMS_TEXT_DESCRIPTION' =>  'International Express mail\' settings',
	'MODULE_SHIPPING_JPPARCELEMS_TEXT_WAY_NORMAL' =>   'EMS (4-10 days)',
//bof constant configuration titles and descriptions for jpParcelems Shipping
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_STATUS' => 'Enable EMS shipping method',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_STATUS' => 'Do you want to offer EMS rate shipping?',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_MULTIBOX' => 'Enable multi-boxing for this Method',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_MULTIBOX' => 'Do you want to add new parcels when limit is reached and on what basis? Options are:<br>None - No multi-boxing<br>Weight - New boxes based on weight limit',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_HANDLING' => 'Handling Fee',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_HANDLING' => 'Handling fee for this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_MAX_WEIGHT' => 'Max shipping weight',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_MAX_WEIGHT' => 'Maximum weight that can be ship with this method.',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_FREE_SHIPPING' => 'Free shipping settings',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_FREE_SHIPPING' => 'Would you like to activate the free shipping setting?Select False to give priority to other modules [Shipping cost]-[Free options]...',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_OVER' => 'Minimum order for free shipping',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_OVER' => 'If you purchase more than the set amount, shipping will be free.',
//    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_TAX_CLASS' => 'Tax Class',
//    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
//    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_TAX_BASIS' => 'Tax Basis',
//    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_JPPARCELEMS_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_JPPARCELEMS_SORT_ORDER' => 'Sort order of display.',
//eof constant configuration titles and descriptions for jpParcelems Shipping
];
return $define;