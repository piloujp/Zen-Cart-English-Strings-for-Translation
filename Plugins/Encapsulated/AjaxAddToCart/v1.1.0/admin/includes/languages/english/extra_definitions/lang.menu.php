<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_AJAXADDTOCART' => 'Ajax Add To Cart',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_AJAXADDTOCART' => 'Allows adding products to the cart via AJAX without page reloads. Configurable via Admin.' .
    '<div class="buttons my-2">' .
    '<a class="btn btn-primary btn-sm" href="' . DIR_WS_CATALOG . 'zc_plugins/AjaxAddToCart/' . basename(dirname(__DIR__, 5)) . '/readme.html " target="_blank"><i class="fa fa-book"></i> Readme</a> ' .
    '<a class="btn btn-info btn-sm" href="https://github.com/zenexpert/ajax-add-to-cart" target="_blank"><i class="fa-solid fa-code-branch"></i> GitHub</a> ' .
    '<a class="btn btn-success btn-sm" href="" target="_blank"><i class="fa fa-comments"></i> Forum</a>' .
    '</div>',
// AjaxAddToCart - configuration
    'CFGTITLE_AJAX_ADD_TO_CART_STATUS' => 'Enable Ajax Add To Cart',
    'CFGDESC_AJAX_ADD_TO_CART_STATUS' => 'Enable or disable the Ajax Add To Cart functionality?',
    'CFGTITLE_AJAX_ADD_TO_CART_FORM_SELECTOR' => 'Form Selector',
    'CFGDESC_AJAX_ADD_TO_CART_FORM_SELECTOR' => 'jQuery selector for the add to cart forms.',
    'CFGTITLE_AJAX_ADD_TO_CART_BUTTON_SELECTOR' => 'Button Selector',
    'CFGDESC_AJAX_ADD_TO_CART_BUTTON_SELECTOR' => 'jQuery selector for the submit buttons inside the forms.',
    'CFGTITLE_AJAX_ADD_TO_CART_LINK_SELECTOR' => 'Link Selector',
    'CFGDESC_AJAX_ADD_TO_CART_LINK_SELECTOR' => 'jQuery selector for direct buy now links.',
    'CFGTITLE_AJAX_ADD_TO_CART_CART_COUNT_SELECTOR' => 'Cart Count Selector',
    'CFGDESC_AJAX_ADD_TO_CART_CART_COUNT_SELECTOR' => 'jQuery selector for elements displaying the cart item count (leave empty if none).',
    'CFGTITLE_AJAX_ADD_TO_CART_CART_TOTAL_SELECTOR' => 'Cart Total Selector',
    'CFGDESC_AJAX_ADD_TO_CART_CART_TOTAL_SELECTOR' => 'jQuery selector for elements displaying the cart total amount (leave empty if none).',
    'CFGTITLE_AJAX_ADD_TO_CART_SIDEBOX_SELECTOR' => 'Sidebox Selector',
    'CFGDESC_AJAX_ADD_TO_CART_SIDEBOX_SELECTOR' => 'jQuery selector for the shopping cart sidebox wrapper.',
    'CFGTITLE_AJAX_ADD_TO_CART_IN_CART_SELECTOR' => 'In-Cart Selector',
    'CFGDESC_AJAX_ADD_TO_CART_IN_CART_SELECTOR' => 'jQuery selector for the Quantity in Cart element on the product info page.',
    'CFGTITLE_AJAX_ADD_TO_CART_IN_CART_PARENT' => 'In-Cart Parent',
    'CFGDESC_AJAX_ADD_TO_CART_IN_CART_PARENT' => 'jQuery selector for the parent wrapper where the Quantity in Cart element should be injected if it does not already exist.',
// AjaxAddToCart - configuration_group
    'CFG_GRP_TITLE_AJAX_ADD_TO_CART' => '%%BOX_CONFIGURATION_AJAX_ADD_TO_CART%%',
    'CFG_GRP_DESC_PAJAX_ADD_TO_CART' => 'Configuration du plugin %%BOX_CONFIGURATION_AJAX_ADD_TO_CART%%',
];

return $define;
