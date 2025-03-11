<?php

$define = [
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_MESSAGING' => 'Download Already Purchased: Messaging',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_MESSAGING' => '<br>Choose the method with which to communicate the prior purchase of a product-download to the customer, one of:<ol><li><strong>Disabled:</strong> No special handling; the download can always be re-purchased without message.</li><li><strong>Call on Expiration:</strong> Regardless the status of a product-download\'s expiration, the item cannot be re-purchased.  If the download has not expired, the customer is directed to the order-information page where the active download link is displayed.  Otherwise, a message is displayed indicating that the customer has previously purchased the product and should contact the store to get the download <em>reset</em></li><li><strong>Enforce Expiration:</strong> If the download has not expired, the item cannot be re-purchased.  The customer is, instead, directed to the order-information page where the active download link is displayed.  Otherwise, the customer can re-purchase the product.</li></ol>',
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_PRODUCTS' => 'Download Already Purchased: Product Exclusions',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_PRODUCTS' => '<br>Enter the comma-separated list of product ID values to be excluded from the &quot;already purchased&quot; handling.',
    'CFGTITLE_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_CATEGORIES' => 'Download Already Purchased: Category Exclusions',
    'CFGDESC_DOWNLOAD_ALREADY_PURCHASED_EXCLUDE_CATEGORIES' => '<br>Enter the comma-separated list of category ID values for which the associated products are to be excluded from the &quot;already purchased&quot; handling.',
];

return $define;