<?php
$define = [
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE' => 'Free Shipping Options',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION' => '
Free Options is used to display a Free Shipping option when other Shipping Modules are displayed.
It can be based on: Always show, Order Total, Order Weight or Order Item Count.
The Free Options module does not show when Free Shipper is displayed.<br><br>
Setting Total to >= 0.00 and <= nothing (leave blank) will activate this module to show with all shipping modules, except for Free Shipping - freeshipper.<br><br>
NOTE: Leaving all settings for Total, Weight and Item count blank will deactivate this module.<br><br>
NOTE: Free Shipping Options does not display if Free Shipping is used based on 0 weight is Free Shipping.
See: freeshipper',
    'MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY' => 'Free Shipping',
// Beginning of constant configuration titles and descriptions for freeoptions Shipping
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_STATUS' => 'Enable Free Options Shipping',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_STATUS' => 'Free Options is used to display a Free Shipping option when other Shipping Modules are displayed. It can be based on: Always show, Order Total, Order Weight or Order Item Count. The Free Options module does not show when Free Shipper is displayed.<br><br>Setting Total to >= 0.00 and <= nothing (leave blank) will activate this module to show with all shipping modules, except for Free Shipping - freeshipper.<br><br>NOTE: Leaving all settings for Total, Weight and Item count blank will deactivate this module.<br><br>NOTE: Free Shipping Options does not display if Free Shipping is used based on 0 weight is Free Shipping. See: freeshipper<br><br>Do you want to offer per freeoptions rate shipping?',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_COST' => 'Shipping Cost',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_COST' => 'The shipping cost will be $0.00',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_HANDLING' => 'Handling Fee',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_HANDLING' => 'Handling fee for this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN' => 'Total >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MIN' => 'Free Shipping when Total >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX' => 'Total <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TOTAL_MAX' => 'Free Shipping when Total <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN' => 'Weight >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MIN' => 'Free Shipping when Weight >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX' => 'Weight <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_WEIGHT_MAX' => 'Free Shipping when Weight <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN' => 'Item Count >=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MIN' => 'Free Shipping when Item Count >=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX' => 'Item Count <=',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ITEMS_MAX' => 'Free Shipping when Item Count <=',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS' => 'Tax Basis',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_FREEOPTIONS_SORT_ORDER' => 'Sort order of display.',
// End of constant configuration titles and descriptions for freeoptions Shipping
];

return $define;