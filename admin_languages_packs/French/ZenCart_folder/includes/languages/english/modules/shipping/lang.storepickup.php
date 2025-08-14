<?php
$define = [
    'MODULE_SHIPPING_STOREPICKUP_TEXT_TITLE' => 'Store Pickup',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_DESCRIPTION' => 'Customer In Store Pick-up',
    'MODULE_SHIPPING_STOREPICKUP_TEXT_WAY' => 'Walk In',
    'MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS' => '',
// Beginning of constant configuration titles and descriptions for Storepickup Shipping
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_STATUS' => 'Enable Store Pickup Shipping',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_STATUS' => 'Do you want to offer In Store rate shipping?',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST' => 'Pickup Locations',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST' => 'Enter a list of locations, separated by semicolons (;).<br>Optionally you may specify a fee/surcharge for each location by adding a comma and an amount. If no amount is specified, then the generic Shipping Cost amount from the next setting will be applied.<br><br>Examples:<br>121 Main Street;20 Church Street<br>Sunnyside,4.00;Lee Park,5.00;High Street,0.00<br>Dallas;Tulsa,5.00;Phoenix,0.00<br>For multilanguage use, see the define-statement in the language file for this module.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_COST' => 'Shipping Cost',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_COST' => 'The shipping cost for all orders using this shipping method.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS' => 'Use the following tax class on the shipping fee.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS' => 'Tax Basis',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS' => 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on Store Pickup Address <br>Billing - Based on customers Billing address',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_ZONE' => 'Shipping Zone',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_ZONE' => 'If a zone is selected, only enable this shipping method for that zone.',
    'CFGTITLE_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER' => 'Sort order of display.',
// End of constant configuration titles and descriptions for Storepickup Shipping
];

// MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS is for defining multiple locations/methods on a per-language basis. It is only used if the shopper has selected a language other than the store's default.
// The content of the MODULE_SHIPPING_STOREPICKUP_MULTIPLE_WAYS definition should be the same as the multiple locations in the shipping module's settings in your admin, just with names changed.
// Typical formats are:
// "Location One, 5.00; Location Two, 3.50; Location Three, 0.00"
// "Location One, Location Two, Location Three"
// or leave it blank to simply use the same text as defined in the Admin, regardless of language
// TIP: This should really be left blank for the default language, otherwise the Admin settings field is never used.

return $define;
