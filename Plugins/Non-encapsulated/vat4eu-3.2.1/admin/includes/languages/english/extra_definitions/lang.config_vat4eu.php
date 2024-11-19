<?php

$define = [
// Beginning of constant configuration titles and descriptions for plugin VAT4EU
    'CFG_GRP_TITLE_VAT4EU_PLUGIN' => 'VAT4EU　Plugin',
    'CFGTITLE_VAT4EU_MODULE_VERSION' => 'Plugin Version and Release Date',    'CFGDESC_VAT4EU_MODULE_VERSION' => 'The &quot;VAT for EU Countries (VAT4EU)&quot; current version and release date.',
    'CFGTITLE_VAT4EU_EU_COUNTRIES' => 'European Union Countries List',    'CFGDESC_VAT4EU_EU_COUNTRIES' => 'This comma-separated list identifies the countries that are in the EU by their 2-character ISO codes; intervening blanks are allowed. You normally will not need to change this list; it is provided as member countries move in and out of the EU.<br><br><b>Default</b>: AT, BE, BG, CY, CZ, DE, DK, EE, GR, ES, FI, FR, HR, HU, IE, IT, LT, LU, LV, MT, NL, PL, PT, RO, SE, SI, SK',
    'CFGTITLE_VAT4EU_ENABLED' => 'Enable storefront processing?',    'CFGDESC_VAT4EU_ENABLED' => 'The <em>VAT4EU</em> processing is enabled when this setting is &quot;true&quot; and you have also set <em>Configuration :: Customer Details :: Company</em> to <b>true</b>.',
    'CFGTITLE_VAT4EU_REQUIRED' => 'VAT Number Required?',    'CFGDESC_VAT4EU_REQUIRED' => 'Should the <em>VAT Number</em> be a <b>required</b> field?',
    'CFGTITLE_VAT4EU_MIN_LENGTH' => 'Minimum VAT Number Length',    'CFGDESC_VAT4EU_MIN_LENGTH' => 'Identify the minimum length of an entered VAT Number, used as a pre-check for any input value. Set the value to <em>0</em> to disable this check.',
    'CFGTITLE_VAT4EU_IN_COUNTRY_REFUND' => 'Enable <em>VAT Refund</em> for in-country purchases?',    'CFGDESC_VAT4EU_IN_COUNTRY_REFUND' => 'Should purchases by addresses in the store\'s country be granted a <em>VAT Refund</em>?',
    'CFGTITLE_VAT4EU_VALIDATION' => '<em>VAT Number</em> Validation',    'CFGDESC_VAT4EU_VALIDATION' => 'A <em>VAT Number</em> requires validation prior to granting the customer a VAT Refund. Choose the validation method to use for your store, one of:<br><br><b>Customer</b> ... validate on any customer update<br><b>Admin</b> ... only validated by admin action.<br>',
    'CFGTITLE_VAT4EU_UNVERIFIED' => 'VAT Number: Unvalidated Indicator',    'CFGDESC_VAT4EU_UNVERIFIED' => 'Identify the indicator that you want to give your customers who have entered a <em>VAT Number</em> when that number is not yet validated.<br><br>Default: <b>*</b>',
    'CFGTITLE_VAT4EU_DEBUG' => 'Enable debug?',    'CFGDESC_VAT4EU_DEBUG' => 'Should the plugin\'s <em>debug</em> mode be enabled?  When enabled, each VAT validation request and response is logged to /logs/VatValidate.log.',
// End of constant configuration titles and descriptions for plugin VAT4EU
];

return $define;