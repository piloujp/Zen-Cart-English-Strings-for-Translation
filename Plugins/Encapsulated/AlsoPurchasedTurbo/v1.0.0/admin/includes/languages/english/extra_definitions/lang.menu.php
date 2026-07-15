<?php

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_ALSOPURCHASEDTURBO' => 'Also Purchased Turbo',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_ALSOPURCHASEDTURBO' => 'Replaces the stock "Customers who bought this product also purchased" engine with a precomputed product-pair table, eliminating the expensive orders_products self-join on every product page. Recommendations are ranked by real purchase affinity and kept current by a checkout observer. Requires no core-file or template changes; the store\'s existing also-purchased presentation is preserved.',
// Admin configuration
    'CFGTITLE_APT_ENABLED' => 'Enable Also Purchased Turbo?',
    'CFGDESC_APT_ENABLED' => 'When <b>true</b>, product pages read recommendations from the precomputed pair table and new orders update it at checkout. When <b>false</b>, the stock also-purchased query is used, exactly as if this plugin were not installed.<br><br>Display counts and column layout continue to honor the stock settings (<code>MIN_DISPLAY_ALSO_PURCHASED</code>, <code>MAX_DISPLAY_ALSO_PURCHASED</code>, columns) under Configuration &gt; Product Info.',
    'CFGTITLE_APT_RANKING' => 'Recommendation ranking',
    'CFGDESC_APT_RANKING' => '<b>Affinity:</b> products most often purchased together with this one, strongest first (recommended).<br><b>Recency:</b> most recently co-purchased first (closest to stock behavior).<br><b>Random:</b> a random selection of co-purchased products.',
    'CFGTITLE_APT_FALLBACK_STOCK' => 'Fall back to stock query when a product has no pair data?',
    'CFGDESC_APT_FALLBACK_STOCK' => 'When <b>true</b> and the pair table has no rows for the product being viewed (e.g. before the initial seed has completed), the stock also-purchased query is run for that product so the storefront display never regresses. Set to <b>false</b> on very large stores once seeding is complete, so an unpaired product costs nothing.',
    'CFGTITLE_APT_DEBUG_LOG' => 'Enable debug log',
    'CFGDESC_APT_DEBUG_LOG' => 'Write diagnostic info to <code>logs/also_purchased_turbo_debug.log</code>. Each storefront render logs one JSON line (product id, data source used, ranking mode, rows returned, query time); each checkout capture logs the order/product pair activity. ONLY enable while actively troubleshooting &mdash; the log grows with every product-page view. Safe to delete the log file at any time.',
    'CFGTITLE_APT_SEED_PROGRESS' => 'Seed progress (managed automatically)',
    'CFGDESC_APT_SEED_PROGRESS' => 'Internal bookkeeping for the historical seeding process. Managed by Tools &gt; Also Purchased Turbo &mdash; do not edit by hand. Empty = not yet seeded; a number = next orders_id to process; <code>done</code> = seeding complete.',
// Configuration_group
    'CFG_GRP_TITLE_ALSO_PURCHASED_TURBO' => 'Also Purchased Turbo',
    'CFG_GRP_DESC_ALSO_PURCHASED_TURBO' => 'Settings for the Also Purchased Turbo precomputed recommendation engine.',
];

return $define;
