<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE' => 'Authorize.net (AIM)',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND' => 'CURL functions not found - required for Authorize.net AIM payment module',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE' => 'Credit Card',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE' => 'Card Type:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER' => 'Card Owner:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER' => 'Card Number:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES' => 'Expiry Date:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV' => 'CVV Number:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK' => 'What\'s this?',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER' => '* The owner\'s name of the credit card must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER' => '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV' => '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE' => 'Your credit card could not be authorized for this reason. Please correct the information and try again or contact us for further assistance.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR' => 'Credit Card Error!',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_COMM_ERROR' => 'Unable to process payment due to a communications error. You may try again or contact us for assistance.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT' => 'Do Refund',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR' => 'Error: You requested to do a refund but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT' => 'Error: You requested a refund but entered an invalid amount.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR' => 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED' => 'Refund Initiated. Transaction ID: %1$s - Auth Code: %2$s',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR' => 'Error: You requested to do a capture but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT' => 'Do Capture',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT' => 'Error: You requested a capture but need to enter an amount.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Error: You need to specify a Transaction ID.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED' => 'Funds Capture initiated. Amount: %1$s.  Transaction ID: %2$s - Auth Code: %3$s',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT' => 'Do Void',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR' => 'Error: You requested a Void but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED' => 'Void Initiated. Transaction ID: %1$s - Auth Code: %2$s ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE' => '<strong>Refund Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND' => 'You may refund money to the customer\'s credit card here:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK' => 'Check this box to confirm your intent: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT' => 'Enter the amount you wish to refund',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT' => 'Enter the last 4 digits of the Credit Card you are refunding.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID' => 'Enter the original Transaction ID:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Refund Issued',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX' => 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br>Refunds must be issued within 120 days of the original transaction date.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE' => '<strong>Capture Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE' => 'You may capture previously-authorized funds here:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Enter the amount to Capture: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK' => 'Check this box to confirm your intent: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID' => 'Enter the original Transaction ID: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Settled previously-authorized funds.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX' => 'Captures must be performed within 30 days of the original authorization. You may only capture an order ONCE. <br>Please be sure the amount specified is correct.<br>If you leave the amount blank, the original amount will be used instead.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE' => '<strong>Voiding Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID' => 'You may void a transaction which has not yet been settled, or an authorization which has not been captured.<br>Enter the unsettled Trans ID or the uncaptured Auth ID:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK' => 'Check this box to confirm your intent:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaction Cancelled',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX' => 'Voids must be completed before the original transaction is settled in the daily batch.',
// Beginning of constant configuration titles and descriptions for payment module authorizenet_aim
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS' => 'Enable Authorize.net (AIM) Module',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS' => 'Do you want to accept Authorize.net payments via the AIM Method?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_LOGIN' => 'Login ID',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_LOGIN' => 'The API Login ID used for the Authorize.net service',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_TXNKEY' => 'Transaction Key',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_TXNKEY' => 'Transaction Key from Authorize.net account<br>See <a href=\"https://support.authorize.net/s/article/How-do-I-obtain-my-API-Login-ID-and-Transaction-Key\" rel=\"noopener\" target=\"_blank\">How-do-I-obtain-my-API-Login-ID-and-Transaction-Key</a>',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE' => 'Transaction Mode',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE' => 'Transaction mode used for processing orders.<br><strong>Production</strong>=Live processing with real account credentials<br><strong>Test</strong>=Simulations with real account credentials<br><strong>Sandbox</strong>=use special sandbox transaction key to do special testing of success/fail transaction responses (obtain sandbox credentials via <a href=\"https://developer.authorize.net/hello_world/sandbox/\">developer.authorize.net</a>)',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_AUTHORIZATION_TYPE' => 'Authorization Type',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_AUTHORIZATION_TYPE' => 'Do you want submitted credit card transactions to be authorized only, or authorized and captured?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_STORE_DATA' => 'Enable Database Storage',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_STORE_DATA' => 'Do you want to save the gateway communications data to the database?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_EMAIL_CUSTOMER' => 'Customer Notifications',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_EMAIL_CUSTOMER' => 'Should Authorize.Net email a receipt to the customer?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_EMAIL_MERCHANT' => 'Merchant Notifications',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_EMAIL_MERCHANT' => 'Should Authorize.Net email a receipt to the merchant?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_USE_CVV' => 'Request CVV Number',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_USE_CVV' => 'Do you want to ask the customer for the card\'s CVV number',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_SORT_ORDER' => 'Sort order of display.',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_SORT_ORDER' => 'Sort order of display of payment modules to the customer. Lowest is displayed first.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_ZONE' => 'Payment Zone',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_ZONE' => 'If a zone is selected, only enable this payment method for that zone.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_ORDER_STATUS_ID' => 'Set Completed Order Status',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_ORDER_STATUS_ID' => 'Set the status of orders made with this payment module to this value',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_REFUNDED_ORDER_STATUS_ID' => 'Set Refunded Order Status',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_REFUNDED_ORDER_STATUS_ID' => 'Set the status of refunded orders to this value',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_REVIEW_ORDER_STATUS_ID' => 'Set Held-For-Review Order Status',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_REVIEW_ORDER_STATUS_ID' => 'Set the status of orders made with this payment module, BUT are needing to be reviewed for processing',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_DEBUGGING' => 'Debug Mode',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_DEBUGGING' => 'Would you like to enable debug mode?  A complete detailed log of failed transactions may be emailed to the store owner.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AIM_CURRENCY' => 'Currency Supported',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AIM_CURRENCY' => 'Which currency is your Authnet Gateway Account configured to accept?<br>(Purchases in any other currency will be pre-converted to this currency before submission using the exchange rates in your store admin.)',
// End of constant configuration titles and descriptions for payment module authorizenet_aim
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS') && MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br><br>Testing Info:<br><b>Automatic Approval Credit Card Numbers:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br><br><b>Automatic Decline Credit Card Number:</b><br><br>Card #: 4222222222222<br><br>This card number can be used to receive decline notices for testing purposes.<br><br>' : '') . '<br><br>See <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Click Here to Sign Up for an Account</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br><br><strong>Requirements:</strong><br><hr>*<strong>Authorize.net Account</strong> (see link above to signup)<br>*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br>*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="https://docs.zen-cart.com/user/payment/authorizenet_aim/" rel="noreferrer noopener" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.';
}

return $define;