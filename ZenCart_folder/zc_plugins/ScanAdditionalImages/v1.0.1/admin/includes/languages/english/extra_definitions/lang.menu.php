<?php
$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_SCANADDITIONALIMAGES' => 'Scan For Additional Product Image Files for Database',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_SCANADDITIONALIMAGES' => 'Tool to link a product with its additional images found on server and matching legacy filename patterns.',
// Additional Images - configuration
    'CFGTITLE_ADDITIONAL_IMAGES_HANDLING' => 'Additional Images Handling',
    'CFGDESC_ADDITIONAL_IMAGES_HANDLING' => 'Product Images can be handled in two ways: &quot;Database&quot; or &quot;Filename-Matching&quot;.<br> Use &quot;Database&quot; to allow additional images (any filename/filetype) to be added via the Admin Product Edit page.<br> Use &quot;Filename-Matching&quot; to autodetect additional images based on filename matching (legacy method) where we scan your images directory for files with names that <a href="https://docs.zen-cart.com/user/images/additional_images/" target="_blank">match the primary image filename plus suffixes</a>. This requires manually uploading images to your server via FTP or other methods, but avoids needing to assign images to products via the Admin page. <br> NOTE: a &quot;Scan Product Images To Database&quot; tool is available for installation via the Plugins module and then accessible via the Tools menu.<br>The scanner creates database entries for all additional images that match legacy naming conventions, subsequently allowing all image management from the Product Edit page. The scanner does not modify the images, and can be run periodically to sync new images to the database as needed.',
    'CFGTITLE_ADDITIONAL_IMAGES_MODE' => 'Additional Images filename matching pattern',
    'CFGDESC_ADDITIONAL_IMAGES_MODE' => 'In Filename-Matching mode, you can use an &quot;_&quot; suffix in two formats:<br>&quot;strict&quot; = always use &quot;_&quot; suffix<br>&quot;legacy&quot; = only use &quot;_&quot; suffix in subdirectories<br>(Before v210 legacy was the default)<br>Default = strict',
];

return $define;
