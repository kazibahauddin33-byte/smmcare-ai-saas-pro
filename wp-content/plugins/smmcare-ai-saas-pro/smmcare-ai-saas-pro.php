<?php
/**
 * Plugin Name: SMMCare AI SaaS Pro
 * Plugin URI: https://github.com/kazibahauddin33-byte/smmcare-ai-saas-pro
 * Description: AI-powered social media management SaaS platform with intelligent onboarding and comprehensive documentation
 * Version: 1.0.0
 * Author: Kazi Bahauddin
 * Author URI: https://github.com/kazibahauddin33-byte
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: smmcare-ai-saas-pro
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

// Define plugin constants
define('SMMCARE_VERSION', '1.0.0');
define('SMMCARE_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('SMMCARE_PLUGIN_URL', plugin_dir_url(__FILE__));
define('SMMCARE_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * The code that runs during plugin activation.
 */
function activate_smmcare_ai_saas_pro() {
    require_once SMMCARE_PLUGIN_DIR . 'includes/class-smmcare-activator.php';
    SMMCARE_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_smmcare_ai_saas_pro() {
    require_once SMMCARE_PLUGIN_DIR . 'includes/class-smmcare-deactivator.php';
    SMMCARE_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_smmcare_ai_saas_pro');
register_deactivation_hook(__FILE__, 'deactivate_smmcare_ai_saas_pro');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require SMMCARE_PLUGIN_DIR . 'includes/class-smmcare-ai-saas-pro.php';

/**
 * Begins execution of the plugin.
 */
function run_smmcare_ai_saas_pro() {
    $plugin = new SMMCARE_AI_SaaS_Pro();
    $plugin->run();
}
run_smmcare_ai_saas_pro();
