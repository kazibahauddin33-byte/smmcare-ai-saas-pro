<?php
/**
 * Fired during plugin deactivation.
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/includes
 */

class SMMCARE_Deactivator {

    /**
     * Deactivate the plugin.
     *
     * @since    1.0.0
     */
    public static function deactivate() {
        // Clean up temporary data if needed
        delete_option('smmcare_show_welcome_page');
    }
}
