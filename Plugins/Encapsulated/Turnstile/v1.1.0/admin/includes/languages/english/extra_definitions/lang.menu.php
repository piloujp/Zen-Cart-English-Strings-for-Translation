<?php

/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2026 Oct 14 Modified in v3.3.0-dev $
*/

$pluginForumUrl = 'https://www.zen-cart.com/threads/207429';
$pluginGithubUrl = 'https://github.com/dbltoe/Cloudflare_Turnstile';

$ButtonGap = '4px';
$ButtonStyle = ' target="_blank" rel="noopener noreferrer" class="btn btn-primary" role="button" style="margin:0 ' . $ButtonGap . ' 0 0;padding-left:8px;padding-right:8px"';

$ButtonsLinks =
    '<div style="margin:10px 0 0;padding:0 0 0 ' . $ButtonGap . '">'
    . '<a href="' . (defined('DIR_WS_CATALOG') ? DIR_WS_CATALOG : '/') . 'zc_plugins' . str_replace(dirname(__DIR__, 7), '', dirname(__DIR__, 5)) . '/readme.html"' . $ButtonStyle . '>Read Me</a>'
    . '<a href="' . $pluginForumUrl . '"' . $ButtonStyle . '>Forum Support Thread</a>'
    . '<a href="' . $pluginGithubUrl . '"' . $ButtonStyle . '>GitHub</a>'
    . '</div>';

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_TURNSTILE' => 'Cloudflare Turnstile',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_TURNSTILE' => 'Adds Cloudflare\'s free Turnstile bot check to every create-account form (the Create Account page, '
        . 'the Login page\'s new-customer form and One Page Checkout\'s registration form) and to Contact Us, '
        . 'and refuses a submission whose check is missing or fails. No template file is changed. Stays dormant '
        . 'until a Site Key and Secret Key are entered under Configuration &gt; Cloudflare Turnstile.'
    . $ButtonsLinks,
// Turnstile - configuration
    'CFGTITLE_TURNSTILE_STATUS' => 'Enable Cloudflare Turnstile?',
    'CFGDESC_TURNSTILE_STATUS' => 'Master switch. <strong>true</strong> shows the Turnstile check on the forms chosen below and refuses a submission whose check is missing or fails. Nothing happens until both keys below are filled in. <strong>false</strong> turns it off without uninstalling.',
    'CFGTITLE_TURNSTILE_SITE_KEY' => 'Site Key:',
    'CFGDESC_TURNSTILE_SITE_KEY' => 'The <strong>Site Key</strong> from the Cloudflare dashboard, Turnstile, for a widget whose hostnames include this store\'s domain. It is public: it appears in the page.',
    'CFGTITLE_TURNSTILE_SECRET_KEY' => 'Secret Key:',
    'CFGDESC_TURNSTILE_SECRET_KEY' => 'The <strong>Secret Key</strong> for the same widget. It is only ever sent to Cloudflare, from the server, to check each submission.',
    'CFGTITLE_TURNSTILE_CREATE_ACCOUNT' => 'Protect Create Account',
    'CFGDESC_TURNSTILE_CREATE_ACCOUNT' => 'Check every form that creates an account: the Create Account page, the Login page\'s new-customer form and One Page Checkout\'s registration form.',
    'CFGTITLE_TURNSTILE_CONTACT_US' => 'Protect Contact Us',
    'CFGDESC_TURNSTILE_CONTACT_US' => 'Check the Contact Us form before its email is sent.',
// Turnstile - configuration_group
    'CFG_GRP_TITLE_CLOUDFLARE_TURNSTILE' => '%%BOX_CONFIGURATION_TURNSTILE%%',
    'CFG_GRP_DESC_CLOUDFLARE_TURNSTILE' => '%%BOX_CONFIGURATION_TURNSTILE%% configuration',
];

return $define;
