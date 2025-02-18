<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 Feb 19 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_GA4' => 'Google Analytics GA4',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_GA4' => 'Link to Google Analytics 4 for reporting',
// Admin configuration
    'CFGTITLE_GA4_ANALYTICS_VERSION' => 'Plugin Version',
    'CFGDESC_GA4_ANALYTICS_VERSION' => 'The <em>GA4 Analytics</em> installed version.',
    'CFGTITLE_GA4_ANALYTICS_TRACKING_ID' => 'GA4 Analytics Measuring ID',
    'CFGDESC_GA4_ANALYTICS_TRACKING_ID' => '<br>Enter either the GA4 Analytics <em>Measuring ID</em> or the Google Tag Manager <em>container ID</em> provided to you when you registered your site with google. The GA4 ID starts with <code>G-</code> while the GTM ID starts with <code>GTM-</code>.  Set this value to an empty string (the default) to disable the <em>GA4 Analytics</em> plugin.<br>',
    'CFGTITLE_GA4_ANALYTICS_VARIANT_SEPARATOR' => 'Product Variants\' Separator',
    'CFGDESC_GA4_ANALYTICS_VARIANT_SEPARATOR' => 'If your store has products with multiple attributes, identify the character-string to use as a separator for an attributed product\'s <code>item_variant</code> property.  Default: <code>|</code>.<br>',
    'CFGTITLE_GA4_ANALYTICS_DEBUG_MODE' => 'Enable Debug Mode?',
    'CFGDESC_GA4_ANALYTICS_DEBUG_MODE' => 'Should <b>all</b> GA4 events be sent in <code>debug_mode</code>?  This can be used to help you debug your GA4 installation.  Default: <b>false</b>.',
    'CFGTITLE_GA4_ANALYTICS_ITEM_ID_VALUE' => 'Choose <code>item_id</code> Parameter Value',
    'CFGDESC_GA4_ANALYTICS_ITEM_ID_VALUE' => '<br>When products are included in GA4 events, what value should be used for the <code>item_id</code> parameter?  If you choose <code>products_id</code>, the product\'s model (if that value is not empty) is placed into the field name you identify below. Default: <code>products_model</code>.',
    'CFGTITLE_GA4_ANALYTICS_DEBUG_IP_LIST' => 'Debug Mode, IP List',
    'CFGDESC_GA4_ANALYTICS_DEBUG_IP_LIST' => 'If you want to enable <em>Debug Mode</em> for only certain IP addresses, enter those IP addresses here, using a comma-separated list (intervening spaces are OK).  Leave this field empty (the default) and the <em>Debug Mode</em> applies to <b>all</b> IP addresses.<br>',
    'CFGTITLE_GA4_ANALYTICS_ITEM_MODEL_FIELD' => 'Choose <code>products_model</code> Field Name',
    'CFGDESC_GA4_ANALYTICS_ITEM_MODEL_FIELD' => 'If you choose <code>products_id</code> for the setting above, identify the name of the event field into which the <code>products_model</code> should be placed.  The default (<code>ep.item_model</code>) might be &quot;difficult&quot; to see in your Google Management Console.  Some alternate suggestions, reusing built-in GA4 fields are <code>item_list_id</code> and <code>item_list_name</code>.<br>',
];

return $define;
