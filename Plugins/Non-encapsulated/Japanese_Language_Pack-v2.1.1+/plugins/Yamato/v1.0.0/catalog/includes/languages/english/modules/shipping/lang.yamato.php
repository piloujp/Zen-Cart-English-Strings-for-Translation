<?php
$define = [
    'MODULE_SHIPPING_YAMATO_TEXT_TITLE' => 'Yamato Express 1-4 days',
    'MODULE_SHIPPING_YAMATO_TEXT_DESCRIPTION' => 'Yamato Express\' settings',
    'MODULE_SHIPPING_YAMATO_TEXT_WAY_NORMAL' => 'Standard (COD possible)',
    'MODULE_SHIPPING_YAMATO_TEXT_WAY_COOL' => 'Cool Express',
    'MODULE_SHIPPING_YAMATO_TEXT_WAY_TOP' => 'Top Express',
    'MODULE_SHIPPING_YAMATO_TEXT_NOTAVAILABLE' => 'Service is not available between the areas.',
    'MODULE_SHIPPING_YAMATO_TEXT_OVERSIZE' => 'Too large to delivery.',
    'MODULE_SHIPPING_YAMATO_TEXT_ILLEGAL_ZONE' => 'Illegal zone.',
    'MODULE_SHIPPING_YAMATO_TEXT_OUT_OF_AREA' => 'Out of delivery area.',
//bof constant configuration titles and descriptions for Yamato Shipping
    'CFGTITLE_MODULE_SHIPPING_YAMATO_STATUS' => 'Enable Yamato shipping method',
    'CFGDESC_MODULE_SHIPPING_YAMATO_STATUS' => 'Do you want to offer Yamato rate shipping?',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_HANDLING' => 'Handling Fee',
    'CFGDESC_MODULE_SHIPPING_YAMATO_HANDLING' => 'Handling fee for this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_MAX_WEIGHT' => 'Max shipping weight',
    'CFGDESC_MODULE_SHIPPING_YAMATO_MAX_WEIGHT' => 'Maximum weight that can be ship with this method.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_MAX_GIRTH' => 'Max shipping girth',
    'CFGDESC_MODULE_SHIPPING_YAMATO_MAX_GIRTH' => 'Maximum size (girth) that can be ship with this method.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_FREE_SHIPPING' => 'Free shipping settings',
    'CFGDESC_MODULE_SHIPPING_YAMATO_FREE_SHIPPING' => 'Would you like to activate the free shipping setting? Select False to give priority to other modules [Shipping cost]-[Free options]...',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_OVER' => 'Minimum order for free shipping',
    'CFGDESC_MODULE_SHIPPING_YAMATO_OVER' => 'If you purchase more than the set amount, shipping will be free.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_SHIPPING_YAMATO_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_TAX_BASIS' => 'Tax Basis',
    'CFGDESC_MODULE_SHIPPING_YAMATO_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping - Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_YAMATO_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_YAMATO_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_YAMATO_SORT_ORDER' => 'Sort order of display.',
//eof constant configuration titles and descriptions for Yamato Shipping
];
$GLOBALS['a_yamato_time']=array(
  array('id'=>'None','text'=>'None'),
  array('id'=>'Morning (until 12)','text'=>'Morning (until 12)'),
  array('id'=>'14h-16h','text'=>'14h-16h'),
  array('id'=>'16h-18h','text'=>'16h-18h'),
  array('id'=>'18h-20h','text'=>'18h-20h'),
  array('id'=>'19h-21h','text'=>'19h-21h'),
);
return $define;