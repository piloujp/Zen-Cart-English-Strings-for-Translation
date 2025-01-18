<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 Jan 18 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_EDITORDERS' => 'Edit Orders',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_EDITORDERS' => 'Edit Orders (EO<sup>5</sup>) is a Zen Cart admin module that allows administrative users to edit a customer\'s order. See <em>Edit Orders</em>\' <a href="https://github.com/lat9/edit_orders/wiki" target="_blank" rel="noopener noreferrer">Wiki</a> for additional information.',
// Admin configuration
    'CFGTITLE_EO_ADDRESSES_DISPLAY_ORDER' => 'Addresses, Display Order',
    'CFGDESC_EO_ADDRESSES_DISPLAY_ORDER' => 'In what order, left-to-right, should <em>Edit Orders</em> display an order\'s addresses?  Choose <b>CSB</b> to display <em>Customer</em>, <em>Shipping</em> and then <em>Billing</em>; choose <b>CBS</b> to display <em>Customer</em>, <em>Billing</em> and then <em>Shipping</em>.',
    'CFGTITLE_EO_TOTAL_RESET_DEFAULT' => 'Reset Totals on Update &mdash; Default',
    'CFGDESC_EO_TOTAL_RESET_DEFAULT' => 'Choose the default value for the <em>Reset totals prior to update</em> checkbox.  If your store uses order-total modules that perform tax-related recalculations (like &quot;Group Pricing&quot;), set this value to <b>on</b>.',
    'CFGTITLE_EO_SHIPPING_DROPDOWN_STRIP_TAGS' => 'Strip tags from the shipping module name?',
    'CFGDESC_EO_SHIPPING_DROPDOWN_STRIP_TAGS' => 'When enabled, HTML and PHP tags present in the title of a shipping module are removed from the text displayed in the shipping dropdown menu.<br><br>If partial or broken tags are present in the title it may result in the removal of more text than expected. If this happens, you will need to update the affected shipping module(s) or disable this option.',
    'CFGTITLE_EO_PRODUCT_PRICE_CALC_METHOD' => 'Product Price Calculation &mdash; Method',
    'CFGDESC_EO_PRODUCT_PRICE_CALC_METHOD' => 'Choose the <em>method</em> that &quot;EO&quot; uses to calculate product prices when an order is updated, one of:<ol><li><b>AutoSpecials</b>: Each product-price is re-calculated as if placing the order on the storefront. If your products have attributes, this enables changes to a product\'s attributes to automatically update the associated product-price.</li><li><b>Manual</b>: Each product-price is based on the <b><i>admin-entered price</i></b> for the product.</li><li><b>Choose</b>: The product-price calculation method varies on an order-by-order basis, via the &quot;tick&quot; of a checkbox.  The default method used  is defined by the <em>Product Price Calculation &mdash; Default</em> setting.</li></ol>',
    'CFGTITLE_EO_PRODUCT_PRICE_CALC_DEFAULT' => 'Product Price Calculation &mdash; Default',
    'CFGDESC_EO_PRODUCT_PRICE_CALC_DEFAULT' => 'If the product price-calculation method is <b>Choose</b>, what method should be used as the <em>default</em> method?',
    'CFGTITLE_EO_STATUS_HISTORY_DISPLAY_ORDER' => 'Status-history Display Order',
    'CFGDESC_EO_STATUS_HISTORY_DISPLAY_ORDER' => 'Choose the way that <em>Edit Orders</em> displays an order\'s status-history records, either as-recorded (<b>Asc</b>) or most-recent first (<b>Desc</b>).',
    'CFGTITLE_EO_CUSTOMER_NOTIFICATION_DEFAULT' => 'Status-update: Customer Notification Default',
    'CFGDESC_EO_CUSTOMER_NOTIFICATION_DEFAULT' => 'Choose the default used for the radio-buttons that identify whether the customer receives notification when a  comment is added to the order.',
    'CFGTITLE_EO_SHOW_EDIT_ORDER_ICON' => 'Show Edit-Order Icon on Orders\' Listing?',
    'CFGDESC_EO_SHOW_EDIT_ORDER_ICON' => 'Should the edit-icon be shown for each order on the orders\' listing?  Default: <b>Yes</b>',
    'CFGTITLE_EO_SHOW_EDIT_ORDER_BUTTON' => 'Edit Button Location on Sidebox',
    'CFGDESC_EO_SHOW_EDIT_ORDER_BUTTON' => 'At which position(s) should the <em>Edit</em> button be displayed on the currently-selected order\'s sidebox display, relative to the order\'s information?  Default: <b>Both</b>',
    'CFGTITLE_EO_DEBUG_ACTION_LEVEL' => 'Debug Action Level',
    'CFGDESC_EO_DEBUG_ACTION_LEVEL' => 'When enabled when actions are performed by Edit Orders additional debugging information will be stored in a log file.<br><br>Enabling debugging will result in a large number of created log files and may adversely affect server performance. Only enable this if absolutely necessary!',
];

return $define;
