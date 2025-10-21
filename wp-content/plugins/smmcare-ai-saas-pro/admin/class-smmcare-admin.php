<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/admin
 */

class SMMCARE_Admin {

    /**
     * The ID of this plugin.
     *
     * @var      string    $plugin_name
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @var      string    $version
     */
    private $version;

    /**
     * Onboarding manager instance
     *
     * @var      SMMCARE_Onboarding_Manager    $onboarding_manager
     */
    private $onboarding_manager;

    /**
     * Initialize the class.
     */
    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->onboarding_manager = new SMMCARE_Onboarding_Manager();
    }

    /**
     * Register the stylesheets for the admin area.
     */
    public function enqueue_styles() {
        wp_enqueue_style(
            $this->plugin_name,
            SMMCARE_PLUGIN_URL . 'assets/css/admin.css',
            array(),
            $this->version,
            'all'
        );
    }

    /**
     * Register the JavaScript for the admin area.
     */
    public function enqueue_scripts() {
        wp_enqueue_script(
            $this->plugin_name,
            SMMCARE_PLUGIN_URL . 'assets/js/admin.js',
            array('jquery'),
            $this->version,
            false
        );

        // Localize script with data
        wp_localize_script(
            $this->plugin_name,
            'smmcareAdmin',
            array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('smmcare_admin_nonce'),
                'strings' => array(
                    'error' => __('An error occurred. Please try again.', 'smmcare-ai-saas-pro'),
                    'success' => __('Success!', 'smmcare-ai-saas-pro'),
                )
            )
        );
    }

    /**
     * Add plugin admin menu.
     */
    public function add_admin_menu() {
        // Main menu
        add_menu_page(
            __('SMMCare AI', 'smmcare-ai-saas-pro'),
            __('SMMCare AI', 'smmcare-ai-saas-pro'),
            'manage_options',
            'smmcare-dashboard',
            array($this, 'display_dashboard_page'),
            'dashicons-share',
            30
        );

        // Welcome/Onboarding page
        add_submenu_page(
            'smmcare-dashboard',
            __('Welcome', 'smmcare-ai-saas-pro'),
            __('Welcome', 'smmcare-ai-saas-pro'),
            'manage_options',
            'smmcare-welcome',
            array($this, 'display_welcome_page')
        );

        // Documentation page
        add_submenu_page(
            'smmcare-dashboard',
            __('Documentation', 'smmcare-ai-saas-pro'),
            __('Documentation', 'smmcare-ai-saas-pro'),
            'manage_options',
            'smmcare-documentation',
            array($this, 'display_documentation_page')
        );

        // Getting Started page
        add_submenu_page(
            'smmcare-dashboard',
            __('Getting Started', 'smmcare-ai-saas-pro'),
            __('Getting Started', 'smmcare-ai-saas-pro'),
            'manage_options',
            'smmcare-getting-started',
            array($this, 'display_getting_started_page')
        );
    }

    /**
     * Handle redirect to welcome page on first activation.
     */
    public function handle_welcome_redirect() {
        // Check if we should show the welcome page
        if (get_option('smmcare_show_welcome_page') === '1') {
            delete_option('smmcare_show_welcome_page');
            
            // Track analytics
            $this->onboarding_manager->track_event('plugin_activated');
            
            // Redirect to welcome page
            if (!isset($_GET['activate-multi'])) {
                wp_safe_redirect(admin_url('admin.php?page=smmcare-welcome'));
                exit;
            }
        }
    }

    /**
     * Display onboarding notice for users who haven't completed it.
     */
    public function display_onboarding_notice() {
        // Only show on our plugin pages
        if (!isset($_GET['page']) || strpos($_GET['page'], 'smmcare') === false) {
            return;
        }

        // Don't show on welcome page
        if (isset($_GET['page']) && $_GET['page'] === 'smmcare-welcome') {
            return;
        }

        // Check if onboarding is complete
        if (!$this->onboarding_manager->is_onboarding_complete()) {
            $current_step = $this->onboarding_manager->get_current_step();
            $steps = $this->onboarding_manager->get_steps();
            $step_data = isset($steps[$current_step]) ? $steps[$current_step] : null;
            
            if ($step_data) {
                echo '<div class="notice notice-info is-dismissible smmcare-onboarding-notice">';
                echo '<p><strong>' . esc_html__('Complete Your Setup', 'smmcare-ai-saas-pro') . '</strong></p>';
                echo '<p>' . sprintf(
                    esc_html__('You\'re on step %d of %d: %s', 'smmcare-ai-saas-pro'),
                    $step_data['order'],
                    count($steps),
                    esc_html($step_data['title'])
                ) . '</p>';
                echo '<p><a href="' . esc_url(admin_url('admin.php?page=smmcare-welcome')) . '" class="button button-primary">' . esc_html__('Continue Setup', 'smmcare-ai-saas-pro') . '</a></p>';
                echo '</div>';
            }
        }
    }

    /**
     * Display the dashboard page.
     */
    public function display_dashboard_page() {
        include SMMCARE_PLUGIN_DIR . 'templates/admin-dashboard.php';
    }

    /**
     * Display the welcome/onboarding page.
     */
    public function display_welcome_page() {
        $onboarding_manager = $this->onboarding_manager;
        $current_step = $onboarding_manager->get_current_step();
        $steps = $onboarding_manager->get_steps();
        $progress = $onboarding_manager->get_user_progress();
        
        include SMMCARE_PLUGIN_DIR . 'templates/admin-welcome.php';
    }

    /**
     * Display the documentation page.
     */
    public function display_documentation_page() {
        include SMMCARE_PLUGIN_DIR . 'templates/admin-documentation.php';
    }

    /**
     * Display the getting started page.
     */
    public function display_getting_started_page() {
        include SMMCARE_PLUGIN_DIR . 'templates/admin-getting-started.php';
    }

    /**
     * AJAX handler to complete an onboarding step.
     */
    public function ajax_complete_onboarding_step() {
        check_ajax_referer('smmcare_admin_nonce', 'nonce');

        if (!current_user_can('manage_options')) {
            wp_send_json_error(array('message' => __('Permission denied', 'smmcare-ai-saas-pro')));
        }

        $step = isset($_POST['step']) ? sanitize_text_field($_POST['step']) : '';

        if (empty($step)) {
            wp_send_json_error(array('message' => __('Invalid step', 'smmcare-ai-saas-pro')));
        }

        $result = $this->onboarding_manager->complete_step($step);

        if ($result) {
            $next_step = $this->onboarding_manager->get_current_step();
            wp_send_json_success(array(
                'message' => __('Step completed!', 'smmcare-ai-saas-pro'),
                'next_step' => $next_step,
                'is_complete' => $this->onboarding_manager->is_onboarding_complete()
            ));
        } else {
            wp_send_json_error(array('message' => __('Failed to complete step', 'smmcare-ai-saas-pro')));
        }
    }

    /**
     * AJAX handler to skip onboarding.
     */
    public function ajax_skip_onboarding() {
        check_ajax_referer('smmcare_admin_nonce', 'nonce');

        if (!current_user_can('manage_options')) {
            wp_send_json_error(array('message' => __('Permission denied', 'smmcare-ai-saas-pro')));
        }

        $result = $this->onboarding_manager->skip_onboarding();

        if ($result) {
            wp_send_json_success(array(
                'message' => __('Onboarding skipped', 'smmcare-ai-saas-pro'),
                'redirect_url' => admin_url('admin.php?page=smmcare-dashboard')
            ));
        } else {
            wp_send_json_error(array('message' => __('Failed to skip onboarding', 'smmcare-ai-saas-pro')));
        }
    }
}
