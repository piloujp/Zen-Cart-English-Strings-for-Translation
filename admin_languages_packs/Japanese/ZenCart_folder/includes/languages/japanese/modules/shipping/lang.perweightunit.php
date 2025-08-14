<?php
$define = [
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_TITLE' => 'Per Unit',
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_DESCRIPTION' => 'Per Unit',
    'MODULE_SHIPPING_PERWEIGHTUNIT_TEXT_WAY' => 'Best Way',
// Beginning of constant configuration titles and descriptions for perweightunit Shipping
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_STATUS' => 'Enable Per Weight Unit Shipping',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_STATUS' => 'Do you want to offer per unit rate shipping?<br><br>Product Quantity * Units (products_weight) * Cost per Unit',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_COST' => 'Shipping Cost per Unit',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_COST' => 'NOTE: When using this Shipping Module be sure to check the Tare settings in the Shipping/Packaging and set the Largest Weight high enough to handle the price, such as 5000.00 and then adjust the settings on Small and Large packages which will add to the price as well.<br><br>The shipping cost will be used to determine shipping charges based on: Product Quantity * Units (products_weight) * Cost per Unit - in an order that uses this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING' => 'Handling Fee',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING' => 'Handling fee for this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD' => 'Handling Per Order or Per Box',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_HANDLING_METHOD' => 'Do you want to charge Handling Fee Per Order or Per Box?',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS' => 'Tax Basis',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_PERWEIGHTUNIT_SORT_ORDER' => 'Sort order of display.',
// End of constant configuration titles and descriptions for perweightunit Shipping
];

return $define;
