<?php
$define = [
    'MODULE_SHIPPING_TABLE_TEXT_TITLE' => 'Table Rate',
    'MODULE_SHIPPING_TABLE_TEXT_DESCRIPTION' => 'Table Rate',
    'MODULE_SHIPPING_TABLE_TEXT_WAY' => 'Best Way',
// Beginning of constant configuration titles and descriptions for table Shipping
    'CFGTITLE_MODULE_SHIPPING_TABLE_STATUS' => 'Enable Table Method',
    'CFGDESC_MODULE_SHIPPING_TABLE_STATUS' => 'Do you want to offer table rate shipping?',
    'CFGTITLE_MODULE_SHIPPING_TABLE_COST' => 'Shipping Table',
    'CFGDESC_MODULE_SHIPPING_TABLE_COST' => 'The shipping cost is based on the total cost or weight of items or count of the items. Example: 25:8.50,50:5.50,etc.. Up to 25 charge 8.50, from there to 50 charge 5.50, etc<br>You can also use percentage amounts, such 25:8.50,35:5%,40:9.50,10000:7% to charge a percentage value of the Order Total',
    'CFGTITLE_MODULE_SHIPPING_TABLE_MODE' => 'Table Method',
    'CFGDESC_MODULE_SHIPPING_TABLE_MODE' => 'The shipping cost may be calculated based on the total weight of the items ordered, the total price of the items ordered, or the total number of items ordered.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_HANDLING' => 'Handling Fee',
    'CFGDESC_MODULE_SHIPPING_TABLE_HANDLING' => 'Handling fee for this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_HANDLING_METHOD' => 'Handling Per Order or Per Box',
    'CFGDESC_MODULE_SHIPPING_TABLE_HANDLING_METHOD' => 'Do you want to charge Handling Fee Per Order or Per Box?',
    'CFGTITLE_MODULE_SHIPPING_TABLE_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_SHIPPING_TABLE_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_TAX_BASIS' => 'Tax Basis',
    'CFGDESC_MODULE_SHIPPING_TABLE_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone',
    'CFGTITLE_MODULE_SHIPPING_TABLE_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_TABLE_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_TABLE_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_TABLE_SORT_ORDER' => 'Sort order of display.',
// End of constant configuration titles and descriptions for table Shipping
];

return $define;