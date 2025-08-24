<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Check/Money Order',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Customers can mail in their payment. Their order confirmation email will ask them to: <br><br>Please make your check or money order payable to:<br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>(your store name)') . '<br><br>Mail your payment to:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Your order will not ship until we receive payment.',
// bof constant configuration titles and descriptions for payment module moneyorder
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_STATUS' => 'Enable Check/Money Order Module',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_STATUS' => 'Do you want to accept Check/Money Order payments?',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_PAYTO' => 'Make Payable to:',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_PAYTO' => 'Who should payments be made payable to?',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_SORT_ORDER' => 'Sort order of display.',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_SORT_ORDER' => 'Sort order of display. Lowest is displayed first.',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_ZONE' => 'Payment Zone',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_ZONE' => 'If a zone is selected, only enable this payment method for that zone.',
    'CFGTITLE_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID' => 'Set Order Status',
    'CFGDESC_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID' => 'Set the status of orders made with this payment module to this value',
// eof constant configuration titles and descriptions for payment module moneyorder
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = 'Please make your check or money order payable to:' . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\n" . 'Mail your payment to:' . "\n" . STORE_NAME_ADDRESS . "\n\n" . 'Your order will not ship until we receive payment.';
}

return $define;
