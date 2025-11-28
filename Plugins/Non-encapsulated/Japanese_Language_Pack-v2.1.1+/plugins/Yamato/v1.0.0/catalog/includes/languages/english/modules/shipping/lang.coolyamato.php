<?php
$define = [
    'MODULE_SHIPPING_COOLYAMATO_TEXT_TITLE' => 'Yamato Express Refrigerated 1-4 days',
    'MODULE_SHIPPING_COOLYAMATO_TEXT_DESCRIPTION' => 'Yamato Express Refrigerated’ settings',
    'MODULE_SHIPPING_COOLYAMATO_TEXT_WAY_NORMAL' => 'Cool Takyubin (COD possible)',
    'MODULE_SHIPPING_COOLYAMATO_TEXT_NOTAVAILABLE' => 'Service is not available between the areas.',
    'MODULE_SHIPPING_COOLYAMATO_CHOOSE_TYPE' => '|&nbsp;&nbsp;Choose cooling type:',
    'MODULE_SHIPPING_COOLYAMATO_DEFAULT_COOLING' => 'Chilled',
//bof constant configuration titles and descriptions for Yamato Refrigerqted Shipping
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_STATUS' => 'Enable CoolYamato shipping method'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_STATUS' => 'Do you want to offer CoolYamato rate shipping?'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_CATEGORIES' => 'Enable or Disable CoolYamato shipping method for some categories'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_CATEGORIES' => 'Do you want to enable or disable CoolYamato shipping for some categories?'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_CAT_LIST' => 'Enable/Disable categories IDs list'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_CAT_LIST' => 'Comma separated list of categoies IDs to be enabled or disabled, depending on above option.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_PRODUCTS' => 'Enable or Disable CoolYamato shipping method for some products'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_PRODUCTS' => 'Do you want to enable or disable CoolYamato shipping for some products?'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_PROD_LIST' => 'Enable/Disable products IDs list'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_PROD_LIST' => 'Comma separated list of products IDs to be enables or disabled, depending on above option.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_HANDLING' => 'Handling Fee'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_HANDLING' => 'Handling fee for this shipping method.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_MAX_WEIGHT' => 'Max shipping weight'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_MAX_WEIGHT' => 'Maximum weight that can be ship with this method.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_MAX_GIRTH' => 'Max shipping girth'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_MAX_GIRTH' => 'Maximum size (girth) that can be ship with this method.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_FREE_SHIPPING' => 'Free shipping settings'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_FREE_SHIPPING' => 'Would you like to activate the free shipping setting? Select False to give priority to other modules [Shipping cost]-[Free options]...'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_OVER' => 'Minimum order for free shipping'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_OVER' => 'If you purchase more than the set amount, shipping will be free.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_TAX_CLASS' => 'Tax Class'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_TAX_CLASS' => 'Use the following tax class on the shipping fee.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_TAX_BASIS' => 'Tax Basis'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping - Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_ZONE' => 'Shipping Zone'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.'
    'CFGTITLE_MODULE_SHIPPING_COOLYAMATO_SORT_ORDER' => 'Sort Order'
    'CFGDESC_MODULE_SHIPPING_COOLYAMATO_SORT_ORDER' => 'Sort order of display.'
//eof constant configuration titles and descriptions for Yamato Refrigerqted Shipping
];
$GLOBALS['coolyamato_type'] = [['id'=>'Réfrigéré','text'=>'Réfrigéré'], ['id'=>'Congelé','text'=>'Congelé']];
return $define;