<?php
/**
 * The file that defines the core plugin class
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/includes
 */

class SMMCARE_AI_SaaS_Pro {

    /**
     * The loader that's responsible for maintaining and registering all hooks.
     *
     * @var      SMMCARE_Loader    $loader
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @var      string    $plugin_name
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @var      string    $version
     */
    protected $version;

    /**
     * Initialize the plugin.
     */
    public function __construct() {
        $this->version = SMMCARE_VERSION;
        $this->plugin_name = 'smmcare-ai-saas-pro';

        $this->load_dependencies();
        $this->define_admin_hooks();
    }

    /**
     * Load the required dependencies for this plugin.
     */
    private function load_dependencies() {
        require_once SMMCARE_PLUGIN_DIR . 'includes/class-smmcare-loader.php';
        require_once SMMCARE_PLUGIN_DIR . 'includes/class-smmcare-onboarding-manager.php';
        require_once SMMCARE_PLUGIN_DIR . 'admin/class-smmcare-admin.php';

        $this->loader = new SMMCARE_Loader();
    }

    /**
     * Register all of the hooks related to the admin area functionality.
     */
    private function define_admin_hooks() {
        $admin = new SMMCARE_Admin($this->get_plugin_name(), $this->get_version());
        
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_scripts');
        $this->loader->add_action('admin_menu', $admin, 'add_admin_menu');
        $this->loader->add_action('admin_init', $admin, 'handle_welcome_redirect');
        $this->loader->add_action('admin_notices', $admin, 'display_onboarding_notice');
        
        // AJAX handlers for onboarding
        $this->loader->add_action('wp_ajax_smmcare_complete_onboarding_step', $admin, 'ajax_complete_onboarding_step');
        $this->loader->add_action('wp_ajax_smmcare_skip_onboarding', $admin, 'ajax_skip_onboarding');
    }

    /**
     * Run the loader to execute all of the hooks.
     */
    public function run() {
        $this->loader->run();
    }

    /**
     * The name of the plugin.
     */
    public function get_plugin_name() {
        return $this->plugin_name;
    }

    /**
     * The reference to the loader class.
     */
    public function get_loader() {
        return $this->loader;
    }

    /**
     * Retrieve the version number of the plugin.
     */
    public function get_version() {
        return $this->version;
    }
}
