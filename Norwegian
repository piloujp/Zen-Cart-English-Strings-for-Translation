<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE' => 'Authorize.net (SIM)',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE' => 'Credit Card',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE' => 'Type:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER' => 'Card Owner:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER' => 'Card Number:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES' => 'Expiry Date:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV' => 'CVV Number:',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK' => 'What\'s this?',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER' => '* The owner\'s name of the credit card must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER' => '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV' => '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE' => 'There has been an error processing your credit card. Please try again.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE' => 'Your credit card was declined. Please try another card or contact your bank for more info.',
    'MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR' => 'Credit Card Error!',
// bof constant configuration titles and descriptions for payment module authorizenet
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_STATUS' => 'Enable Authorize.net Module',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_STATUS' => 'Do you want to accept Authorize.net payments?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_LOGIN' => 'Login ID',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_LOGIN' => 'The API Login ID used for your Authorize.net account.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_TXNKEY' => 'Transaction Key',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_TXNKEY' => 'Transaction Key used for sending transaction data.<br>See <a href=\"https://support.authorize.net/s/article/How-do-I-obtain-my-API-Login-ID-and-Transaction-Key\" rel=\"noopener\" target=\"_blank\">How-do-I-obtain-my-API-Login-ID-and-Transaction-Key</a>',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_SECURITYKEY' => 'Security Key',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_SECURITYKEY' => 'Security Key used for validating transactions (128 characters).<br>See <a href=\"https://support.authorize.net/s/article/What-is-a-Signature-Key\" rel=\"noopener\" target=\"_blank\">What-is-a-Signature-Key</a> for instructions.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_TESTMODE' => 'Transaction Mode',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_TESTMODE' => 'Transaction mode used for processing orders.<br><strong>Production</strong>=Live processing with real account credentials<br><strong>Test</strong>=Simulations with real account credentials<br><strong>Sandbox</strong>=use special sandbox transaction key to do special testing of success/fail transaction responses (obtain sandbox credentials via <a href=\"https://developer.authorize.net/hello_world/sandbox/\">developer.authorize.net</a>)',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_CURRENCY' => 'Currency Supported',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_CURRENCY' => 'Which currency is your Authnet Gateway Account configured to accept?<br>(Purchases in any other currency will be pre-converted to this currency before submission using the exchange rates in your store admin.)',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_METHOD' => 'Transaction Method',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_METHOD' => 'Transaction method used for processing orders',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_AUTHORIZATION_TYPE' => 'Authorization Type',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_AUTHORIZATION_TYPE' => 'Do you want submitted credit card transactions to be authorized only, or captured immediately?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_USE_CVV' => 'Request CVV Number',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_USE_CVV' => 'Do you want to ask the customer for the card\'s CVV number',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER' => 'Customer Notifications',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_EMAIL_CUSTOMER' => 'Should Authorize.Net email a receipt to the customer?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_ZONE' => 'Payment Zone',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_ZONE' => 'If a zone is selected, only enable this payment method for that zone.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID' => 'Set Order Status',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_ORDER_STATUS_ID' => 'Set the status of orders made with this payment module to this value',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER' => 'Sort order of display.',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_SORT_ORDER' => 'Sort order of displaying payment options to the customer. Lowest is displayed first.',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_GATEWAY_MODE' => 'Gateway Mode',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_GATEWAY_MODE' => 'Where should customer credit card info be collected?<br><b>onsite</b> = here (requires SSL)<br><b>offsite</b> = authorize.net site',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_STORE_DATA' => 'Enable Database Storage',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_STORE_DATA' => 'Do you want to save the gateway communications data to the database?',
    'CFGTITLE_MODULE_PAYMENT_AUTHORIZENET_DEBUGGING' => 'Debug Mode',
    'CFGDESC_MODULE_PAYMENT_AUTHORIZENET_DEBUGGING' => 'Would you like to enable debug mode?  A  detailed log of failed transactions may be emailed to the store owner.',
// eof constant configuration titles and descriptions for payment module authorizenet
];

if (defined('MODULE_PAYMENT_AUTHORIZENET_STATUS') && MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br><br>Testing Info:<br><b>Automatic Approval Credit Card Numbers:</b><br>Visa#: 4007000000027<br>MC#: 5424000000000015<br>Discover#: 6011000000000012<br>AMEX#: 370000000000002<br><br><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br><br><b>Automatic Decline Credit Card Number:</b><br><br>Card #: 4222222222222<br><br>This card number can be used to receive decline notices for testing purposes.' : '') . '<br><br><strong>SETTINGS</strong><br>Your "response" and "receipt" and "relay" URL settings in your Authorize.net Merchant Profile can be left BLANK, or if necessary you can set the "relay URL" to point to https://your_domain.com/foldername/index.php?main_page=checkout_process<br><br>If you are having problems with this, see <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.';
} else {
    $define['MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION'] = '<a rel="noreferrer noopener" target="_blank" href="https://reseller.authorize.net/application?resellerId=10023">Click Here to Sign Up for an Account</a><br><br><a rel="noreferrer noopener" target="_blank" href="https://account.authorize.net/">Click to Login to the Authorize.net Merchant Area</a><br><br><strong>Requirements:</strong><br><hr>*<strong>Authorize.net Account</strong> (see link above to signup)<br>*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="https://docs.zen-cart.com/user/payment/authorizenet_sim/" rel="noreferrer noopener" target="_blank">the SIM Setup FAQ article</a> for detailed setup instructions.';
}
return $define;
