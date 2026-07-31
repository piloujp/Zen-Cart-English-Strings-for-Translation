<?php
/**
 * @copyright Copyright 2003-2026 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: piloujp 2026 Mar 29 Modified in v2.2.1 $
*/

$define = [
    'ADMIN_PLUGIN_MANAGER_NAME_FOR_GDPR_DSAR' => 'GDPR / DSAR Manager',
    'ADMIN_PLUGIN_MANAGER_DESCRIPTION_FOR_GDPR_DSAR' => 'Account-only DSAR request intake with admin-reviewed processing, export delivery, erasure workflows, and consent logging.',
// Admin configuration
    'CFGTITLE_GDPR_DSAR_ENABLE' => 'Enable GDPR/DSAR plugin?',
    'CFGDESC_GDPR_DSAR_ENABLE' => 'Enable customer-side DSAR requests and admin processing tools.',
    'CFGTITLE_GDPR_DSAR_EXPORT_EXPIRY_DAYS' => 'Export Link Expiry (days)',
    'CFGDESC_GDPR_DSAR_EXPORT_EXPIRY_DAYS' => 'Number of days before export download links expire.',
    'CFGTITLE_GDPR_DSAR_MAX_ACTIVE_REQUESTS_PER_TYPE' => 'Max Active Requests Per Type',
    'CFGDESC_GDPR_DSAR_MAX_ACTIVE_REQUESTS_PER_TYPE' => 'Maximum active requests a customer can have per DSAR type.',
    'CFGTITLE_GDPR_DSAR_EXPORT_STORAGE_RELATIVE' => 'Export Storage Folder',
    'CFGDESC_GDPR_DSAR_EXPORT_STORAGE_RELATIVE' => 'Relative path from catalog root used to store generated export ZIP files.',
    'CFGTITLE_GDPR_DSAR_SEND_CUSTOMER_EMAILS' => 'Send customer DSAR lifecycle emails?',
    'CFGDESC_GDPR_DSAR_SEND_CUSTOMER_EMAILS' => 'Send customer notifications when DSAR requests are submitted, approved, rejected, and completed.',
    'CFGTITLE_GDPR_DSAR_NOTIFY_ADMIN_NEW_REQUEST' => 'Notify admin on new DSAR requests?',
    'CFGDESC_GDPR_DSAR_NOTIFY_ADMIN_NEW_REQUEST' => 'Send notification email to store owner when a customer submits a new DSAR request.',
    'CFGTITLE_GDPR_DSAR_SLA_DAYS' => 'DSAR SLA Target (days)',
    'CFGDESC_GDPR_DSAR_SLA_DAYS' => 'Target number of days to complete a DSAR request before it is considered overdue in admin monitoring.',
];

return $define;
