<?php
$define = [
    'MODULE_ORDER_TOTAL_GV_TITLE' => TEXT_GV_NAMES,
    'MODULE_ORDER_TOTAL_GV_HEADER' => TEXT_GV_NAMES . '/Discount Coupons',
    'MODULE_ORDER_TOTAL_GV_DESCRIPTION' => TEXT_GV_NAMES,
    'MODULE_ORDER_TOTAL_GV_USER_PROMPT' => 'Apply Amount: ',
    'MODULE_ORDER_TOTAL_GV_TEXT_ENTER_CODE' => TEXT_GV_REDEEM,
    'TEXT_INVALID_REDEEM_AMOUNT' => 'It appears that the amount you have tried to apply and your Gift Certificate balance do not match. Please try again.',
    'MODULE_ORDER_TOTAL_GV_USER_BALANCE' => 'Available balance: ',
    'MODULE_ORDER_TOTAL_GV_REDEEM_INSTRUCTIONS' => '<p>To use Gift Certificate funds already in your account, type the amount you wish to apply in the box that says \'Apply Amount\'. You will need to choose a payment method,  then click the continue button to apply the funds to your shopping cart.</p><p>If you are redeeming a <em>new</em> Gift Certificate you should type the number into the box next to Redemption Code. The amount redeemed will be added to your account when you click the continue button.</p>',
    'MODULE_ORDER_TOTAL_GV_INCLUDE_ERROR' => ' Setting Include tax = true, should only happen when recalculate = None',
// Beginning of constant configuration titles and descriptions for order total module ot_gv
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_STATUS' => 'This module is installed',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_STATUS' => '',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SORT_ORDER' => 'Sort Order',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SORT_ORDER' => 'Sort order of display.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_QUEUE' => 'Queue Purchases',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_QUEUE' => 'Do you want to queue purchases of the Gift Voucher?',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SHOW_QUEUE_IN_ADMIN' => 'Show Queue in Admin header?',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SHOW_QUEUE_IN_ADMIN' => 'Show Queue button on all pages of Admin?<br>(Will auto-hide if nothing in queue, and will auto-display on \'Orders\' screen, regardless of this setting)',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_SHIPPING' => 'Include Shipping',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_INC_SHIPPING' => 'Include Shipping in calculation',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_TAX' => 'Include Tax',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_INC_TAX' => 'Include Tax in calculation.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_CALC_TAX' => 'Re-calculate Tax',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_CALC_TAX' => 'Re-Calculate Tax',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_TAX_CLASS' => 'Tax Class',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_TAX_CLASS' => 'Use the following tax class when treating Gift Voucher as Credit Note.',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_CREDIT_TAX' => 'Credit including Tax',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_CREDIT_TAX' => 'Add tax to purchased Gift Voucher when crediting to Account',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID' => 'Set Order Status',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID' => 'Set the status of orders made where GV covers full payment',
    'CFGTITLE_MODULE_ORDER_TOTAL_GV_SPECIAL' => 'Allow Gift Voucher Specials',
    'CFGDESC_MODULE_ORDER_TOTAL_GV_SPECIAL' => 'Do you want to allow Gift Voucher to be placed on Special?',
// End of constant configuration titles and descriptions for order total module ot_gv
];

return $define;
