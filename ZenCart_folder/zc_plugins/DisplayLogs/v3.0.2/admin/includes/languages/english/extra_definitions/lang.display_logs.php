<?php
$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_DISPLAYLOGS' => 'Display logs',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_DISPLAYLOGS' => 'Display and manage Zen Cart log files.',
// Display Logs - configuration
    'CFGTITLE_DISPLAY_LOGS_MAX_DISPLAY' => 'Display Logs: Display Maximum',
    'CFGDESC_DISPLAY_LOGS_MAX_DISPLAY' => 'Identify the maximum number of logs to display.  (Default: <b>20</b>)',
    'CFGTITLE_DISPLAY_LOGS_MAX_FILE_SIZE' => 'Display Logs: Maximum File Size',
    'CFGDESC_DISPLAY_LOGS_MAX_FILE_SIZE' => 'Identify the maximum size of any file to display.  (Default: <b>80000</b>)',
    'CFGTITLE_DISPLAY_LOGS_INCLUDED_FILES' => 'Display Logs: Included File Prefixes',
    'CFGDESC_DISPLAY_LOGS_INCLUDED_FILES' => 'Identify the log-file <em>prefixes</em> to include in the display, separated by the pipe character (|).  Any intervening spaces are removed by the processing code.',
    'CFGTITLE_DISPLAY_LOGS_EXCLUDED_FILES' => 'Display Logs: Excluded File Prefixes',
    'CFGDESC_DISPLAY_LOGS_EXCLUDED_FILES' => 'Identify the log-file prefixes to <em>exclude</em> from the display, separated by the pipe character (|). Any intervening spaces are removed by the processing code.',
];

return $define;
