<?php
/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2026 Aug 27 Modified in v2.2.2 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_PASSKEYLOGIN' => 'Passkey Login',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_PASSKEYLOGIN' => 'Lets customers sign in with a passkey (Face ID, fingerprint, Windows Hello, or a security key) instead of typing a password. Uses the WebAuthn standard. Passkeys appear in the browser autofill on the login page, so no extra buttons are added for customers who do not use them.',
// Admin configuration
    'CFGTITLE_PKL_ENABLED' => 'Enable Passkey Login',
    'CFGDESC_PKL_ENABLED' => 'Master switch. When false the plugin contributes nothing to any page.',
    'CFGTITLE_PKL_NUDGE_ENABLED' => 'Show Enrollment Nudge',
    'CFGDESC_PKL_NUDGE_ENABLED' => 'Show a one time banner on the My Account page inviting customers without a passkey to add one. Customers can dismiss it permanently.',
    'CFGTITLE_PKL_MAX_KEYS_PER_CUSTOMER' => 'Maximum Passkeys per Customer',
    'CFGDESC_PKL_MAX_KEYS_PER_CUSTOMER' => 'How many passkeys one account may hold. Typical customers register one or two devices.',
    'CFGTITLE_PKL_RATE_IP_HOUR' => 'Hourly Rate Cap per IP',
    'CFGDESC_PKL_RATE_IP_HOUR' => 'Maximum passkey challenge requests per IP address per hour. Set 0 to disable the cap.',
    'CFGTITLE_PKL_RP_ID' => 'Relying Party ID Override',
    'CFGDESC_PKL_RP_ID' => 'Normally leave blank: the registrable domain is derived automatically, which also lets a staging subdomain share production passkeys. Set explicitly only for multi part TLDs such as .co.uk.',
    'CFGTITLE_PKL_RP_NAME' => 'Relying Party Display Name',
    'CFGDESC_PKL_RP_NAME' => 'Shown by the browser in passkey prompts. Leave blank to use the store name.',
    'CFGTITLE_PKL_DEBUG_LOG' => 'Debug Logging',
    'CFGDESC_PKL_DEBUG_LOG' => 'When true, writes JSON lines to logs/passkey_login_debug.log. Leave off in normal operation.',
    'CFGTITLE_PKL_VERSION' => 'Passkey Login Version',
    'CFGDESC_PKL_VERSION' => 'Installed plugin version. Managed automatically.',
// Configuration_group
    'CFG_GRP_TITLE_PASSKEY_LOGIN' => 'Passkey Login',
    'CFG_GRP_DESC_PASSKEY_LOGIN' => 'Passkey (WebAuthn) sign in settings',
];

return $define;
