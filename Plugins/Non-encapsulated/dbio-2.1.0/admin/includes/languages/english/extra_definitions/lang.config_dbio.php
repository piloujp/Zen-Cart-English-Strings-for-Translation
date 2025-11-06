<?php

$define = [
    'CFGTITLE_DBIO_MODULE_VERSION' => 'Version/Release Date',
    'CFGDESC_DBIO_MODULE_VERSION' => 'The Database I/O Manager (DbIo) version number and release date.',
    'CFGTITLE_DBIO_CSV_DELIMITER' => 'CSV: Delimiter',
    'CFGDESC_DBIO_CSV_DELIMITER' => 'Enter the single character that is used to separate columns within any DbIo CSV file.  To use the tab-character as the delimiter value, enter the word <b>TAB</b>.  (Default: <b>,</b>)',
    'CFGTITLE_DBIO_CSV_ENCLOSURE' => 'CSV: Enclosure',
    'CFGDESC_DBIO_CSV_ENCLOSURE' => 'Enter the single character used to <em>enclose</em> fields within any DbIo CSV file.  (Default: <b>\"</b>)',
    'CFGTITLE_DBIO_CSV_ESCAPE' => 'CSV: Escape',
    'CFGDESC_DBIO_CSV_ESCAPE' => 'Enter the single character used as the escape-character within any DbIo CSV file.  (Default: <b>backslash</b>)',
    'CFGTITLE_DBIO_CHARSET' => 'CSV: Encoding',
    'CFGDESC_DBIO_CHARSET' => 'Choose the type of encoding to be associated with DbIo CSV files.  If you use Microsoft&reg; Excel, choose <b>latin1</b>.  (Default: <b>utf8</b>).',
    'CFGTITLE_DBIO_IMPORT_DATE_FORMAT' => 'CSV: Import Date Format',
    'CFGDESC_DBIO_IMPORT_DATE_FORMAT' => 'Choose the format used for <em>date</em> and <em>datetime</em> fields in any DbIo CSV file.  (Default: <b>m-d-y</b>)',
    'CFGTITLE_DBIO_MAX_EXECUTION_TIME' => 'Maximum Execution Time (seconds)',
    'CFGDESC_DBIO_MAX_EXECUTION_TIME' => 'Enter the maximum execution time for a DbIo operation, in seconds (default: 60).',
    'CFGTITLE_DBIO_SPLIT_RECORD_COUNT' => 'Split File: Record Count',
    'CFGDESC_DBIO_SPLIT_RECORD_COUNT' => 'Sometimes, splitting a .csv file into multiple, smaller files can help if your server is timing out on an <em>import</em> operation or if an exported .csv is too large to download in a single chunk.  Enter the number of records (default: 2000) at which to split these files using the <em>Database I/O Manager</em>.',
    'CFGTITLE_DBIO_FILE_SORT_DEFAULT' => 'Default File Sort Order',
    'CFGDESC_DBIO_FILE_SORT_DEFAULT' => 'Choose the default sort-order that the <em>Database I/O Manager</em> uses when displaying the I/O files it has discovered, one of:<br /><br /><b>1a</b>: File Name, ascending<br /><b>1d</b>: File Name, descending<br /><b>2a</b>: File Size, ascending<br /><b>2d</b>: File Size, descending<br /><b>3a</b>: File Date, ascending<br /><b>3d</b>: File Date, descending (default)',
    'CFGTITLE_DBIO_DEBUG' => 'Enable Debug?',
    'CFGDESC_DBIO_DEBUG' => 'Identify whether (true) or not (false, the default) the DbIo debug is to be enabled.  When enabled, <b>all</b> I/O status is written to a <em>dbio-*.log</em> file in your store\'s /YOUR_ADMIN/dbio/logs folder.',
    'CFGTITLE_DBIO_DEBUG_DATE_FORMAT' => 'Debug Date Format',
    'CFGDESC_DBIO_DEBUG_DATE_FORMAT' => 'Enter the formatting string used to timestamp all DbIo log entries.',
    'CFGTITLE_DBIO_PRODUCTS_AUTO_CREATE_CATEGORIES' => '<em>Products</em>: Auto-Create Categories on Import?',
    'CFGDESC_DBIO_PRODUCTS_AUTO_CREATE_CATEGORIES' => 'How should the <em>DbIo</em> handle missing categories on a <em>Products</em> import?  Choose <b>Yes</b> to have any missing categories automatically generated; choose <b>No</b> (the default) to disallow any product imports when the categories don\'t previously exist.',
    'CFGTITLE_DBIO_PRODUCTS_INSERT_REQUIRES_COMMAND' => '<em>Products</em>: Product Creation Requires Command?',
    'CFGDESC_DBIO_PRODUCTS_INSERT_REQUIRES_COMMAND' => 'Does a <em>Products</em> import require a DbIo <code>ADD</code> command? Choose <b>No</b> (the default) to allow products to be created if no matching products_id and/or products_model is found.<br><br>Choose <b>Yes</b> to disallow any product-import that results in a new product unless the <code>ADD</code> command is present.',
];

return $define;