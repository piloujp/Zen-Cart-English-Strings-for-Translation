<?php

global $installedPlugins;
$aacButtonGap = '6px';

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_ADMINADDUSER' => 'Admin Add Customer',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_ADMINADDUSER' => 'Lets a store admin capture minimal customer details (name and email; phone is optional) one-by-one or via CSV bulk upload - e.g. at a public event - optionally assigning a pricing group and/or a wholesale level. Each new customer is emailed an activation link; their account stays pending until they click it and complete their own registration, including their address.' .
    '<div style="margin:10px 0 0;padding:0 0 0 ' . $aacButtonGap . '">' .
    '<a href="' . DIR_WS_CATALOG . 'zc_plugins/AdminAddUser/' . $installedPlugins['AdminAddUser']['version'] . '/readme.html " target="_blank" rel="noopener noreferrer"' .
    ' class="btn btn-primary" role="button"' .
    ' style="margin:0 ' . $aacButtonGap . ' 0 0">Readme</a> ' .
    '<a href="https://github.com/dbltoe/admin_add_customer" target="_blank" rel="noopener noreferrer"' .
    ' class="btn btn-primary" role="button"'.
    ' style="margin:0 ' . $aacButtonGap . ' 0 0">GitHub</a> ' .
    '</div>' .
    '<div style="margin:6px 0 0;padding:0 0 0 ' . $aacButtonGap . '">' .
    '<a href="https://www.zen-cart.com/showthread.php/231166-Admin-Add-Customer" target="_blank" rel="noopener noreferrer">Forum Support Thread</a>' .
    '</div>',
];

return $define;
