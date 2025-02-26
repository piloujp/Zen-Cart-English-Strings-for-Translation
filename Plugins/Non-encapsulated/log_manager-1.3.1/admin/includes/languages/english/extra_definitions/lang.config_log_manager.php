<?php

$define = [
    'CFGTITLE_LOG_MANAGER_KEEP_DAYS' => 'Log Manager: Days to Keep',
    'CFGDESC_LOG_MANAGER_KEEP_DAYS' => 'Enter the maximum number of <em>days</em> to keep any file with a <code>.log</code> file extension in your store\'s <b>logs</b> directory.<br><br>If the value you enter is non-zero, then any files created prior to that relative date will be <b>permanently removed</b> from your store\'s file-system.<br>',
    'CFGTITLE_LOG_MANAGER_KEEP_THESE' => 'Log Manager: Logs to Keep',
    'CFGDESC_LOG_MANAGER_KEEP_THESE' => 'Enter a comma-separated list of name-prefixes for any log-files that you want to <b><i>keep</i></b>, regardless of their age.<br><br>The values you enter are <em>case-sensitive</em>, i.e. <em>zcInstall</em> is different than <em>zcinstall</em>.  The default setting (<code>zcInstall</code>) results in any file matching <code>/logs/zcInstall*.log</code> being kept regardless of its creation date.<br>',
];

return $define;