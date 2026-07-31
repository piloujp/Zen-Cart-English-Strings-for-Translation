<?php
// -----
// Part of the VAT4EU plugin by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2024 Vinos de Frutas Tropicales
//
// Last updated: v3.2.0
//
$define = [
    'MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_TITLE_ADMIN' => 'Display VAT Reverse Charge Notification',
    'MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_TITLE' => 'Subject to reverse charge in the country of receipt.',

    'MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_DESCRIPTION' => 'Part of the <em>VAT4EU</em> plugin.  When enabled, displays a disclaimer within the order when that order qualifies for a VAT refund.',
// bof constant configuration titles and descriptions for ot_vat_reverse_charges
    'CFGTITLE_MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_STATUS' => 'This module is installed',
    'CFGDESC_MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_VAT_REVERSE_CHARGES_SORT_ORDER' => 'Sort order of display.<br /><br /><b>Note:</b> Make sure that the value is larger than the sort-order for the <em>Total</em> total\'s display!',
// eof constant configuration titles and descriptions for ot_vat_reverse_charges
];
return $define;
