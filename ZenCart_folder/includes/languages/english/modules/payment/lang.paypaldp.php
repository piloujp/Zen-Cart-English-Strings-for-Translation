<?php
$define = [
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP' => 'PayPal Payments Pro',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_NONUSA' => 'PayPal Website Payments Pro',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20' => 'PayPal Website Payments Pro Payflow Edition (UK)',
    'MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION' => 'Credit Card',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TITLE' => 'Credit Card',
    'MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE' => 'Credit Card (WPP)',
    'MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE' => 'Credit Card (PF)',
    'MODULE_PAYMENT_PAYPALDP_ERROR_HEADING' => 'We\'re sorry, but we were unable to process your credit card.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR' => 'The credit card information you entered contains an error.  Please check it and try again.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME' => 'First Name:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME' => 'Last Name:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER' => 'Card Owner:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE' => 'Card Type:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER' => 'Card Number:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES' => 'Expiry Date:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE' => 'Issue Date:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER' => 'Maestro Issue No.:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER' => 'CVV Number:',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION' => '(on back of the credit card)',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRANSACTION_FOR' => 'Transaction for',
    'MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED' => 'Your credit card was declined. Please try another card or contact your bank for more information.',
    'MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED' => 'We were not able to process your order. Please select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE' => 'We were not able to process your order. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR' => 'An error occurred when we tried to contact the payment processor. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE' => 'Dear store owner,' . "\n" . 'An error occurred when attempting to initiate the payment-validation transaction. As a courtesy, only the error "number" was shown to your customer.  The details of the error are shown below.' . "\n\n",
    'MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT' => 'ALERT: PayPal Direct Payment Error',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR' => 'The address information you entered does not appear to be valid or cannot be matched. Please select or add a different address and try again.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR' => 'PayPal was unable to successfully fund this transaction. Please choose another payment option or review funding options in your PayPal account before proceeding.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_ERROR' => 'An error occurred when we tried to process your credit card. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD' => 'We apologize for the inconvenience, but the credit card you entered is not one that we accept. Please use a different credit card or verify that the details you entered are correct, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN' => 'There was a problem validating your account. Please try again.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER' => '* The cardholder\'s name must be at least ' . CC_OWNER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER' => '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n',
    'MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV' => '* The 3 or 4 digit CVV number must be entered from the back of the credit card.\n',
    'MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT' => 'ALERT: Address Verification Failure. ',
    'MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT' => 'ALERT: Card CVV Code Verification Failure. ',
    'MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT' => ' Order is on hold pending review by Store Owner.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR' => 'The state assigned to your account is not valid.  Please go into your account settings and change it.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR' => 'We are sorry for the inconvenience. The payment could not be initiated because the PayPal account configured by the store owner is not a PayPal Payments Pro account or PayPal gateway services have not been purchased. Or you have attempted to pay with an AmEx card and the merchant has not enabled AmEx support. Please select an alternate method of payment for your order or perhaps another type of credit card.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR' => 'We are sorry for the inconvenience. The payment could not be initiated because the PayPal account configured by the store owner is not a US PayPal Payments Pro account or PayPal gateway services have not been purchased (or have not been activated by accepting the Billing Agreement on the PayPal website).  Please select an alternate method of payment for your order.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR' => 'We are sorry for the inconvenience. The payment could not be initiated because the PayPal account configured by the store owner is not a PayPal Website Payments Pro 2.0 (UK) account or PayPal gateway services have not been purchased or not properly activated.  Please select an alternate method of payment for your order.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR' => 'We are sorry for the inconvenience. The PayPal account authentication settings are not yet set up, or the API security information is incorrect. We are unable to complete your transaction. Please notify the store owner so they can correct this problem.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR' => 'We are sorry -- the PayPal account configured by the store administrator is based in a country that is not supported for Website Payments Pro at the present time. Please choose another payment method to complete your order.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CANNOT_USE_THIS_CURRENCY_ERROR' => 'We are sorry -- the credit card you are using is not compatible with the currency you selected for checkout. Please change your currency selection or choose another payment method to complete your order.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED' => '<span class="alert">&nbsp;(NOTE: Module is not configured yet)</span>',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CARD_TYPE_NOT_SUPPORTED' => 'You have attempted to pay for your purchase using a credit card that is not accepted by this merchant. We are sorry for the inconvenience and invite you to try again using a different type of card, or contact the store owner for alternate payment choices.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRY_OTHER_PAYMENT_METHOD' => 'PayPal has declined the funding-source you selected. Please try another payment type in your PayPal account, or try an alternate payment method. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR' => 'There was a problem retrieving transaction details. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR' => 'There was a problem locating transactions matching the criteria you specified. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR' => 'There was a problem voiding the transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR' => 'There was a problem refunding the transaction amount specified. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR' => 'There was a problem authorizing the transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR' => 'There was a problem capturing the transaction. ',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR' => 'Your Refund Request was rejected by PayPal.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT' => 'You requested a partial refund but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR' => 'You requested a full refund but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT' => 'You requested an authorization but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT' => 'You requested a capture but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR' => 'You requested funds-Capture but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED' => 'PayPal refund for %1$s initiated. Transaction ID: %2$s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED' => 'PayPal Authorization for %s initiated. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED' => 'PayPal Capture for %1$s initiated. Receipt ID: %2$s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED' => 'PayPal Void request initiated. Transaction ID: %s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR' => 'There was an error in the attempted transaction. Please see the API Reference guide or transaction logs for detailed information.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR' => 'We are sorry for the inconvenience; however, at the present time we are unable to use this method to process orders from the geographic region you selected as your account address.  Please continue using normal checkout and select from the available payment methods to complete your order.',
    'CENTINEL_AUTHENTICATION_ERROR' => 'Authentication Failed - Your financial institution has indicated that it could not successfully authenticate this transaction. To protect against unauthorized use, this card cannot be used to complete your purchase. You may complete the purchase by selecting another form of payment.',
    'CENTINEL_PROCESSING_ERROR' => 'There was a problem obtaining authorization for your transaction. Please re-enter your payment information, and/or choose an alternate form of payment.',
    'CENTINEL_ERROR_CODE_8000' => '8000',
    'CENTINEL_ERROR_CODE_8000_DESC' => 'Protocol Not Recognized, must be http:// or https://',
    'CENTINEL_ERROR_CODE_8010' => '8010',
    'CENTINEL_ERROR_CODE_8010_DESC' => 'Unable to Communicate with MAPS Server',
    'CENTINEL_ERROR_CODE_8020' => '8020',
    'CENTINEL_ERROR_CODE_8020_DESC' => 'Error Parsing XML Response',
    'CENTINEL_ERROR_CODE_8030' => '8030',
    'CENTINEL_ERROR_CODE_8030_DESC' => 'Communication Timeout Encountered',
    'CENTINEL_ERROR_CODE_1001' => '1001',
    'CENTINEL_ERROR_CODE_1001_DESC' => "Account Configuration Problem with Cardinal Centinel. Please contact your Cardinal representative immediately on implement@cardinalcommerce.com. Your transactions will not be protected by chargeback liability until this problem is resolved.\n\n" . 'There are 3 steps to configuring your Cardinal 3D-Secure service properly: ' . "\n1-Login to the Cardinal Merchant Admin URL supplied in your welcome package (NOT the test URL), and accept the license agreement.\2-Set a transaction password.\n3-Copy your Cardinal Merchant ID and Cardinal Transaction Password into your ZC PayPal module.",
    'CENTINEL_ERROR_CODE_4243' => '4243',
    'CENTINEL_ERROR_CODE_4243_DESC' => 'Account Configuration Problem with Cardinal Centinel. Please contact your Cardinal representative immediately on implement@cardinalcommerce.com and inform them that you are getting Error Number 4243 when attempting to use 3D Secure with your Zen Cart site and PayPal account and that you need to have the Processor Module enabled in your account. Your transactions will not be protected by chargeback liability until this problem is resolved.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK' => 'Confirm',
    'MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR' => 'You requested to void a transaction but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK' => 'Confirm',
    'MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR' => 'You requested an authorization but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'First Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Last Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Business Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Address Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Address Street:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Address City:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Address State:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Address Zip:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Address Country:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Payer Email:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'Ebay ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'Payer ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Payer Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Address Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Payment Type:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Payment Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Pending Reason:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Invoice:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Payment Date:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Currency:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Gross Amount:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Payment Fee:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Exchange Rate:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Cart items:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Trans. Type:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'Trans. ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'Parent Trans. ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE' => '<strong>Order Refunds</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL' => 'If you wish to refund this order in its entirety, click here:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL' => 'Do Full Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL' => 'Do Partial Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR' => '<br>... or enter the partial ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT' => 'Enter the ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT' => 'refund amount here and click on Partial Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX' => '*A Full refund may not be issued after a Partial refund has been applied.<br>*Multiple Partial refunds are permitted up to the remaining unrefunded balance.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Refunded by store administrator.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK' => 'Confirm: ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE' => '<strong>Order Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT' => 'If you wish to authorize part of this order, enter the amount  here:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL' => 'Do Authorization',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE' => '<strong>Capturing Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL' => 'If you wish to capture all or part of the outstanding authorized amounts for this order, enter the Capture Amount and select whether this is the final capture for this order.  Check the confirm box before submitting your Capture request.<br>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL' => 'Do Capture',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Amount to Capture:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT' => 'Is this the final capture?',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Thank you for your order.',
    'MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK' => 'Confirm: ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE' => '<strong>Voiding Order Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID' => 'If you wish to void an authorization, enter the authorization ID here, and confirm:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE' => 'Thank you for your patronage. Please come again.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL' => 'Do Void',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE' => 'Trans. State:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE' => 'Auth. Code:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR' => 'AVS Address match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP' => 'AVS ZIP match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH' => 'CVV2 match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE' => 'Days to Settle:',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'One-Time Charges related to ',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surcharges',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG' => 'Handling charges and other applicable fees',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Discounts',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Credits applied, including discount coupons, gift certificates, etc',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT' => 'Payment in Fraud Review Status: ',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO' => 'This is an automated notification to advise you that PayPal flagged the payment for a new order as Requiring Payment Review by their Fraud team. Normally the review is completed within 36 hours. It is STRONGLY ADVISED that you DO NOT SHIP the order until payment review is completed. You can see the latest review status of the order by logging into your PayPal account and reviewing recent transactions.',
    'MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS' => 'All the items in your shopping basket (see details in the store and on your store receipt).',
// Beginning of constant configuration titles and descriptions for payment module paypaldp
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_STATUS' => 'Enable this Payment Module',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_STATUS' => 'Do you want to enable this payment module?',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_SERVER' => 'Live or Sandbox',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_SERVER' => '<strong>Live: </strong> Used to process Live transactions<br><strong>Sandbox: </strong>For developers and testing',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_SORT_ORDER' => 'Sort order of display.',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_SORT_ORDER' => 'Sort order of display. Lowest is displayed first.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ZONE' => 'Payment Zone',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ZONE' => 'If a zone is selected, only enable this payment method for that zone.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ORDER_STATUS_ID' => 'Set Order Status',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ORDER_STATUS_ID' => 'Set the status of orders paid with this payment module to this value. <br><strong>Recommended: Processing[2]</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_ORDER_PENDING_STATUS_ID' => 'Set Unpaid Order Status',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_ORDER_PENDING_STATUS_ID' => 'Set the status of unpaid orders made with this payment module to this value. <br><strong>Recommended: Pending[1]</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_REFUNDED_STATUS_ID' => 'Set Refund Order Status',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_REFUNDED_STATUS_ID' => 'Set the status of refunded orders to this value. <br><strong>Recommended: Pending[1]</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_TRANSACTION_MODE' => 'Payment Action',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_TRANSACTION_MODE' => 'How do you want to obtain payment?<br><strong>Default: Final Sale</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CURRENCY' => 'Transaction Currency',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CURRENCY' => 'Which currency should the order be sent to PayPal as? <br>NOTE: if an unsupported currency is sent to PayPal, it will be auto-converted to USD (or GBP if using UK account)<br><strong>Default: Selected Currency</strong>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_EC_RETURN_FMF_DETAILS' => 'Fraud Mgmt Filters - FMF',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_EC_RETURN_FMF_DETAILS' => 'If you have enabled FMF support in your PayPal account and wish to utilize it in your transactions, set this to yes. Otherwise, leave it at No.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_MERCHANT_COUNTRY' => 'Merchant Country',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_MERCHANT_COUNTRY' => 'Which country is your PayPal Account registered to? <br><u>Choices:</u><br><font color=green>You will need to supply <strong>API Settings</strong> in the Express Checkout module.</font><br><strong>USA and Canada merchants</strong> need PayPal API credentials and a PayPal Payments Pro account.<br><strong>UK merchants</strong> need to supply <strong>PAYFLOW settings</strong> (and have a Payflow account)<br><strong>Australia merchants</strong> choose Canada<br><em>(This setting is really about the internal PayPal API specification, and not so much about country: US=1.5, UK=2.0, Canada/Australia=3.0)</em>',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_DEBUGGING' => 'Debug Mode',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_DEBUGGING' => 'Would you like to enable debug mode?  A complete detailed log of failed transactions will be emailed to the store owner.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CARDINAL_PROCESSOR' => 'Cardinal Processor ID',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CARDINAL_PROCESSOR' => 'The processor ID for the Cardinal Centinel service. ',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CARDINAL_MERCHANT' => 'Cardinal Merchant ID',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CARDINAL_MERCHANT' => 'The merchant ID for the Cardinal Centinel service. ',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CARDINAL_PASSWORD' => 'Cardinal Transaction Password',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CARDINAL_PASSWORD' => 'Enter your Cardinal Transaction Password from your Cardinal Merchant Admin console. This is used to secure and verify that the transaction originated from your store legitimately.',
    'CFGTITLE_MODULE_PAYMENT_PAYPALDP_CARDINAL_AUTHENTICATE_REQ' => 'Only Accept Chargeback-Protected Orders via Cardinal?',
    'CFGDESC_MODULE_PAYMENT_PAYPALDP_CARDINAL_AUTHENTICATE_REQ' => 'Only proceed with authorization when the Cardinal authentication result provides chargeback protection? ',
// End of constant configuration titles and descriptions for payment module paypaldp
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION'] = '<strong>PayPal Payments Pro</strong>%s<br>' . '<a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Manage your PayPal account.</a>' . '<br><br><font color="green">Configuration Instructions:</font><br><span class="alert">1. </span><a href="https://www.zen-cart.com/partners/paypal-pro" rel="noopener" target="_blank">Sign up for your PayPal account - click here.</a><br>' .
        (isset($define['MODULE_PAYMENT_PAYPALDP_STATUS']) ? '' : '... and click "install" above to enable PayPal Payments Pro.<br><a href="https://www.zen-cart.com/getpaypal" rel="noopener" target="_blank">For additional detailed help, see this FAQ article</a><br>') .
        (!isset($define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE']) || $define['MODULE_PAYMENT_PAYPALWPP_APISIGNATURE'] === '' ? '<span class="alert">2. </span><strong>API credentials</strong> from the API Credentials option in your PayPal Profile Settings area. This module uses the <strong>API Signature</strong> option -- you will need the username, password and signature to enter in the fields below.' : '<span class="alert">2. </span>Ensure you have entered the appropriate security data for username/pwd etc, below.') .
        '<font color="green"><hr><strong>Requirements:</strong></font><br><hr>*<strong>Express Checkout</strong> must be installed and activated in order to use PayPal Payments Pro, according to PayPal Terms of Service. <br>*Also requires CURL over SSL for outbound communications. CURL should be enabled for ports 80 and 443.<hr>';
}

return $define;
