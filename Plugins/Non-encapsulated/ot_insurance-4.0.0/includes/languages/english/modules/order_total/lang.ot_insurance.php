<?php
/**
 * Order Total Module
 *
 * @package - Optional Insurance
 * @copyright Copyright 2007 Numinix Technology http://www.numinix.com
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: ot_insurance.php 2 2008-05-13 01:39:19Z numinix $
 */
$define = [
    'MODULE_ORDER_TOTAL_INSURANCE_TITLE' => 'Shipping Insurance',
    'MODULE_ORDER_TOTAL_INSURANCE_DESCRIPTION' => 'Shipping Insurance',
    'MODULE_ORDER_TOTAL_INSURANCE_TEXT_ENTER_CODE' => 'Do you want to insure this order?',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD' => 'Add insurance (%s)?',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD_YES' => 'Yes',
    'MODULE_ORDER_TOTAL_INSURANCE_ADD_NO' => 'No',
// Beginning of constant configuration titles and descriptions for order total module ot_insurance
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_STATUS' => 'Enable Insurance Module',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_STATUS' => 'Do you want to enable this module? To fully turn this off, both this option and the one below should be set to false.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_SORT_ORDER' => 'Sort order of display. Note: Must be higher than the sub-total.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TABLE' => 'Use Table Rates?',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TABLE' => 'Do you want to use Table Rates?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TYPE' => 'Alternate Insurance Type',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TYPE' => 'If not using <b>Table Rates</b>, would you like to charge by percentage of the cart sub-total or by a specific amount?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_PER' => 'Insurance Percentage',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_PER' => 'Used with <code>percent</code> calculations. What percentage should be applied to the cart sub-total to calculate the insurance amount?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_FEE' => 'Insurance Rate',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_FEE' => 'Used with <code>amount</code> and <b>Table Rates</b> calculations. What amount do you want to charge per <b>Increment Amount</b>?',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_INCREMENT' => 'Increment Amount',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_INCREMENT' => 'Used with <code>amount</code> and <b>Table Rates</b> calculations. Identify the amount-increment for which the <b>Insurance Rate</b> is applied. If, for example, the increment-amount is <var>100</var> and the rate is <var>.50</var>, the insurance is calculated as \$0.50 for each \$100.00 of the total.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_OVER' => 'Amount Exempt From Fee',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_OVER' => 'Used with <code>amount</code> calculations. Set this to the amount of the total that is exempt from the insurance calculations, i.e. set to 100 for all orders under 100 to be exempt, already insured, etc.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_TAX_CLASS' => 'Use the following tax class on the insurance fee.',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_VIRTUAL' => 'No Insurance Fee on Virtual Products',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_VIRTUAL' => 'Do not charge insurance fee when cart is Virtual Products Only',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_GV' => 'No Insurance Fee on Gift Vouchers',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_GV' => 'Do not charge insurance fee when cart is Gift Vouchers only',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_FREE_SHIPPING' => 'No Insurance Fee on Free Shipping',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_FREE_SHIPPING' => 'Do not calculate insurance for products that have free shipping (includes gv and virtual products)',
    'CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_REQUIRED' => 'Required Insurance Amount',
    'CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_REQUIRED' => 'Automatically charge shipping insurance for amounts over X dollars',
];

global $db;
$geozones = $db->Execute("SELECT * FROM " . TABLE_GEO_ZONES);
$num_zones = $geozones->RecordCount();

for ($i = 1; $i <= $num_zones; $i++) {
    if ($i === 1) {
        $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Insurance Zone ' . $i;
        $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'If a zone is selected, only enable this insurance for that zone (Note: use this field for non-table rates as well).';
    } else {
        $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'Insurance Zone ' . $i;
        $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_ZONE_' . $i] = 'If a zone is selected, only enable this insurance for that zone.';
    }
    $define['CFGTITLE_MODULE_ORDER_TOTAL_INSURANCE_COST_' . $i] = 'Zone ' . $i . ' Insurance Table';
    $define['CFGDESC_MODULE_ORDER_TOTAL_INSURANCE_COST_' . $i] = 'The insurance cost is based on the total cost of the items. Example: 25:8.50,50:5.50,etc.. Up to 25 charge 8.50, from there to 50 charge 5.50, etc';
}
// eof constant configuration titles and descriptions for order total module ot_insurance

return $define;
