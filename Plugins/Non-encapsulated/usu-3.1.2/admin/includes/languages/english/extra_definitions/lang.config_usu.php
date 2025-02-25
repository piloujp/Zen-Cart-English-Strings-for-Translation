<?php

$define = [
    'CFG_GRP_TITLE_USU' => 'Ultimate URLs',
// Ultimate URLs configuration settings
    'CFGTITLE_USU_ENABLED' => 'Enable alternate URLs?',
    'CFGDESC_USU_ENABLED' => 'This is a global setting that enables (<b>true</b>) or disables (<b>false</b>) the alternate URLs\' generation.',
    'CFGTITLE_USU_DEBUG' => 'Enable debug log?',
    'CFGDESC_USU_DEBUG' => 'When enabled, additional debugging information is saved to log files (<code>/logs/usu-{adm-}yyyymmmdd-hhmmss.log</code>.<br><br>Enabling debugging may result in the creation of numerous log files and may adversely affect server performance. Only enable this if absolutely necessary!',
    'CFGTITLE_USU_CPATH' => 'Generate cPath parameters',
    'CFGDESC_USU_CPATH' => 'By default Zen Cart generates a cPath parameter for product pages. These are used to keep linked products in the correct category. In automatic mode the cPath will only be added if needed.',
    'CFGTITLE_USU_END' => 'Alternate URLs end with',
    'CFGDESC_USU_END' => 'If you want your URLs to end with a certain suffix add one here. Common suffixes are \'.html\', \'.htm\'. Leave this field blank to have no suffix added to generated URLs.',
    'CFGTITLE_USU_FORMAT' => 'Format of alternate URLs',
    'CFGDESC_USU_FORMAT' => 'You can select from a list of commonly generated formats.<br><br><b>Original:</b><ul><li><i>Categories:</i> category-name-c-34</li><li><i>Products:</i> product-name-p-54</li></ul><b>Category Parent:</b><ul><li><i>Categories:</i> parent-category-name-c-34</li><li><i>Products:</i> parent-product-name-p-54</li></ul>',
    'CFGTITLE_USU_CATEGORY_DIR' => 'Display categories as directories',
    'CFGDESC_USU_CATEGORY_DIR' => 'You can select from a list of commonly generated formats.<br><b>Off:</b> disables displaying categories as directories<br><br><b>Short:</b> use the settings from \'Format of alternate URLs\'<br><br><b>Full:</b> uses full category paths<br><br>',
    'CFGTITLE_USU_REMOVE_CHARS' => 'Remove problematic characters',
    'CFGDESC_USU_REMOVE_CHARS' => 'This allows you remove certain problematic characters from the generated URLs.<br><br><i>non-alphanumerical:</i> removes all non-alphanumerical characters<br><i>punctuation:</i> removes all punctuation characters',
    'CFGTITLE_USU_FILTER_PCRE' => 'Enter PCRE filter rules',
    'CFGDESC_USU_FILTER_PCRE' => 'This setting uses PCRE rules to filter URLs.<br><br>This filter is run before character conversions and stripping of special characters. If you want a dash - in your URLS, use a single space. To escape a character in the regular expression use \\\\ instead of a single \\.<br><br>The format <b>MUST</b> be in the form: <b>find1=>replace1,find2=>replace2</b>. ',
    'CFGTITLE_USU_FILTER_SHORT_WORDS' => 'Filter short words',
    'CFGDESC_USU_FILTER_SHORT_WORDS' => 'This setting will filter &quot;short&quot; words, i.e. those with length less than or equal to the value specified, from any generated URLs.  Use the value <b>0</b> to include <em>all</em> words.',
    'CFGTITLE_USU_FILTER_PAGES' => 'Limit alternate URLS to the following pages',
    'CFGDESC_USU_FILTER_PAGES' => 'You can limit the pages which will be rewritten by specifying them here. If no pages are specified all pages will be rewritten.<br><br>The format is a comma-delimited list (intervening spaces are OK) and <b>must</b> be in the form: <b>page1,page2,page3</b> or <b>page1, page2, page3</b>',
    'CFGTITLE_USU_ENGINE' => 'Choose URL Engine',
    'CFGDESC_USU_ENGINE' => 'Choose which URL Engine to use.',
    'CFGTITLE_USU_REDIRECT' => 'Enable automatic redirects?',
    'CFGDESC_USU_REDIRECT' => 'This will activate the automatic redirect code and send 301 headers for old to new URLs.',
    'CFGTITLE_USU_VERSION' => 'Plugin Version',
    'CFGDESC_USU_VERSION' => 'The currently-installed version of <em>USU</em>.'
,];

return $define;
