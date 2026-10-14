<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_POSTAUTO' => 'Postal Code Automatic',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_POSTAUTO' => 'This plugin autofill form fields state, city and street address (if data is available), when postal/zip code is provided.' .
    '<div class="buttons my-2">' .
    '<a class="btn btn-primary btn-sm" href="' . DIR_WS_CATALOG . 'zc_plugins/PostAuto/' . basename(dirname(__DIR__, 5)) . '/readme.html " target="_blank"><i class="fa fa-book"></i> Readme</a> ' .
    '<a class="btn btn-info btn-sm" href="https://github.com/piloujp/Postcode_auto" target="_blank"><i class="fa fa-github-square"></i> GitHub</a> ' .
    '<a class="btn btn-success btn-sm" href="https://www.zen-cart.com/threads/205577" target="_blank"><i class="fa fa-comments"></i> Forum</a>' .
    '</div>',
];

return $define;
