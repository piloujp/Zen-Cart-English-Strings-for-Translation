<?php
/**
 * @copyright Copyright 2003-2025 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2025 June 25 Modified in v2.1.0 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_ACCESSBLOCKER' => 'Access Blocker',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_ACCESSBLOCKER' => 'This drop-in plugin provides your store with admin-level controls to block (or limit) actions provided by the ask_a_question, contact_us, create_account, login and OPC guest-checkout pages.',
// Admin configuration
    'CFGTITLE_ACCESSBLOCK_ENABLED' => 'Enable Access Blocker?',
    'CFGDESC_ACCESSBLOCK_ENABLED' => 'When enabled, the plugin blocks unwanted accesses to your store\'s <code>ask_a_question</code>, <code>contact_us</code>, <code>create_account</code> and <code>login</code> pages, based on &quot;threats&quot; identified by the ipdata.co service and/or additional elements identified below.<br><br>Default: <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_IPDATA_API_KEY' => 'ipData Service: API Key',
    'CFGDESC_ACCESSBLOCK_IPDATA_API_KEY' => 'Enter the API key you received from the <a href=\"https://ipdata.co/registration.html\" target=\"_blank\" rel=\"noreferrer\">ipData</a> service.  Leave the setting empty if no ipdata.co information should be used.<br>',
    'CFGTITLE_ACCESSBLOCK_USE_EU_ENDPOINT' => 'Use ipdata.co EU Endpoint?',
    'CFGDESC_ACCESSBLOCK_USE_EU_ENDPOINT' => '<br>Indicate whether or not the ipdata.co EU endpoint should be used for threat requests.  If set to <em>true</em>, a dedicated EU endpoint is used to ensure that the end user data you send us stays in the EU.<br><br>Default: <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_RESTRICT_THREAT_ACCESS' => 'Totally restrict access on threats?',
    'CFGDESC_ACCESSBLOCK_RESTRICT_THREAT_ACCESS' => '<br>Indicate whether or not <em>Access Blocker</em> should <b>totally</b> restrict access by forcing an &quot;HTTP 410 (Gone)&quot; if a threat is detected.<br><br>Default: <b>false</b>',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_COUNTRIES' => 'Block by: Country',
    'CFGDESC_ACCESSBLOCK_BLOCKED_COUNTRIES' => 'Enter, using a comma-separated list, the 2-character ISO country-codes for any countries to be blocked.  All IP addresses originating in these countries will be blocked.<br><br><b>Note:</b> This setting does not apply if the <em>ipData Service: API Key</em> is not set.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_ORGS' => 'Block by: Organization',
    'CFGDESC_ACCESSBLOCK_BLOCKED_ORGS' => 'Enter, using a comma-separated list, any &quot;organizations&quot; (based on the <code>ipData</code> response) to be blocked.  If the organization associated with an IP address <em>contains</em> any of the strings entered here, the access will be blocked.<br><br><b>Note:</b> This setting does not apply if the <em>ipData Service: API Key</em> is not set.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_IPS' => 'Block by: IP Address',
    'CFGDESC_ACCESSBLOCK_BLOCKED_IPS' => 'Enter, using a comma-separated list, any <em>specific</em> IP addresses to block.  If you enter only the upper segments of an IP address, e.g. <code>192.168.1.</code>, all matching IP addresses, e.g. <code>192.168.1.0-192.168.1.255</code> will be blocked.',
    'CFGTITLE_ACCESSBLOCK_WHITELISTED_IPS' => 'IP Address: Whitelist',
    'CFGDESC_ACCESSBLOCK_WHITELISTED_IPS' => 'Enter, using a comma-separated list, any <em>specific</em> IP addresses to <em>unconditionally enable</em>.  If you enter only the upper segments of an IP address, e.g. <code>192.168.1.</code>, all matching IP addresses, e.g. <code>192.168.1.0-192.168.1.255</code> will be not be blocked, even if they are identified as a thread by ipdata.co.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_HOSTS' => 'Block by: Host Address',
    'CFGDESC_ACCESSBLOCK_BLOCKED_HOSTS' => 'Enter, using a comma-separated list, any &quot;host addresses&quot; to block.  If the host-address that originates the IP address <em>contains</em> any of the strings entered here, the access will be blocked.',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_EMAILS' => 'Block by: Email Address',
    'CFGDESC_ACCESSBLOCK_BLOCKED_EMAILS' => 'Enter, using a comma-separated list, any &quot;email addresses&quot; to block.  If the email-address entered <em>contains</em> any of the strings entered here, the access will be blocked.<br><br>You can block accesses for a specific email address (<code>joe@example.com</code>) or for an entire email domain (<code>@example.com</code>).',
    'CFGTITLE_ACCESSBLOCK_WHITELISTED_EMAILS' => 'Email Address: Whitelist',
    'CFGDESC_ACCESSBLOCK_WHITELISTED_EMAILS' => 'Enter, using a comma-separated list, any &quot;email addresses&quot; to <em>unconditionally enable</em>.  If the email-address entered <em>contains</em> any of the strings entered here, the access will be <em>not be</em> blocked.<br><br>You can enable accesses for a specific email address (<code>joe@example.com</code>) or for an entire email domain (<code>@example.com</code>).',
    'CFGTITLE_ACCESSBLOCK_BLOCKED_PHRASES' => 'Block by: Message Keywords',
    'CFGDESC_ACCESSBLOCK_BLOCKED_PHRASES' => 'Enter, using a comma-separated list, any words in a <code>contact_us</code> message that should result in a block.  If the message contains any of the words entered here, the associated <em>contact-us</em> email will not be sent.',
    'CFGTITLE_ACCESSBLOCK_DEBUG' => 'Enable Debug?',
    'CFGDESC_ACCESSBLOCK_DEBUG' => 'When enabled, the plugin creates a monthly log, <code>/logs/accesses_blocked_YYYY_mm.log</code>, of the accesses denied by the plugin.',
];

return $define;
