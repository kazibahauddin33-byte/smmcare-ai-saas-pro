<?php
/**
 * Fired during plugin activation.
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/includes
 */

class SMMCARE_Activator {

    /**
     * Activate the plugin.
     *
     * Creates necessary database tables and sets default options.
     *
     * @since    1.0.0
     */
    public static function activate() {
        global $wpdb;
        
        $charset_collate = $wpdb->get_charset_collate();
        
        // Table for tracking user onboarding progress
        $table_name = $wpdb->prefix . 'smmcare_onboarding';
        
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            user_id bigint(20) NOT NULL,
            step varchar(50) NOT NULL,
            status varchar(20) NOT NULL DEFAULT 'pending',
            completed_at datetime DEFAULT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY user_id (user_id),
            KEY step (step)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        
        // Table for tracking onboarding analytics
        $analytics_table = $wpdb->prefix . 'smmcare_onboarding_analytics';
        
        $sql_analytics = "CREATE TABLE IF NOT EXISTS $analytics_table (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            user_id bigint(20) NOT NULL,
            event_type varchar(50) NOT NULL,
            event_data text DEFAULT NULL,
            created_at datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY user_id (user_id),
            KEY event_type (event_type),
            KEY created_at (created_at)
        ) $charset_collate;";
        
        dbDelta($sql_analytics);
        
        // Set default options
        add_option('smmcare_onboarding_enabled', '1');
        add_option('smmcare_version', SMMCARE_VERSION);
        add_option('smmcare_activation_time', current_time('mysql'));
        
        // Flag to show welcome page on first activation
        add_option('smmcare_show_welcome_page', '1');
    }
}
