<?php
/**
 * Manages the onboarding flow and tracks user progress
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/includes
 */

class SMMCARE_Onboarding_Manager {

    /**
     * The onboarding steps
     *
     * @var array
     */
    private $steps;

    /**
     * Initialize the class
     */
    public function __construct() {
        $this->define_steps();
    }

    /**
     * Define the onboarding steps
     */
    private function define_steps() {
        $this->steps = array(
            'welcome' => array(
                'title' => __('Welcome to SMMCare AI', 'smmcare-ai-saas-pro'),
                'description' => __('Let\'s get you started with our AI-powered social media management platform', 'smmcare-ai-saas-pro'),
                'order' => 1
            ),
            'account_setup' => array(
                'title' => __('Account Setup', 'smmcare-ai-saas-pro'),
                'description' => __('Configure your profile and preferences', 'smmcare-ai-saas-pro'),
                'order' => 2
            ),
            'connect_accounts' => array(
                'title' => __('Connect Social Accounts', 'smmcare-ai-saas-pro'),
                'description' => __('Link your social media accounts for management', 'smmcare-ai-saas-pro'),
                'order' => 3
            ),
            'ai_setup' => array(
                'title' => __('AI Configuration', 'smmcare-ai-saas-pro'),
                'description' => __('Set up AI preferences and automation rules', 'smmcare-ai-saas-pro'),
                'order' => 4
            ),
            'complete' => array(
                'title' => __('All Set!', 'smmcare-ai-saas-pro'),
                'description' => __('You\'re ready to start managing your social media with AI', 'smmcare-ai-saas-pro'),
                'order' => 5
            )
        );
    }

    /**
     * Get all onboarding steps
     *
     * @return array
     */
    public function get_steps() {
        return $this->steps;
    }

    /**
     * Get user's onboarding progress
     *
     * @param int $user_id
     * @return array
     */
    public function get_user_progress($user_id = null) {
        global $wpdb;
        
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        $table_name = $wpdb->prefix . 'smmcare_onboarding';
        
        $results = $wpdb->get_results($wpdb->prepare(
            "SELECT step, status, completed_at FROM $table_name WHERE user_id = %d ORDER BY created_at ASC",
            $user_id
        ), ARRAY_A);
        
        $progress = array();
        foreach ($results as $row) {
            $progress[$row['step']] = array(
                'status' => $row['status'],
                'completed_at' => $row['completed_at']
            );
        }
        
        return $progress;
    }

    /**
     * Get current onboarding step for user
     *
     * @param int $user_id
     * @return string|null
     */
    public function get_current_step($user_id = null) {
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        $progress = $this->get_user_progress($user_id);
        
        // Find the first incomplete step
        foreach ($this->steps as $step_key => $step_data) {
            if (!isset($progress[$step_key]) || $progress[$step_key]['status'] !== 'completed') {
                return $step_key;
            }
        }
        
        return 'complete';
    }

    /**
     * Check if user has completed onboarding
     *
     * @param int $user_id
     * @return bool
     */
    public function is_onboarding_complete($user_id = null) {
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        $current_step = $this->get_current_step($user_id);
        return $current_step === 'complete';
    }

    /**
     * Complete an onboarding step
     *
     * @param string $step
     * @param int $user_id
     * @return bool
     */
    public function complete_step($step, $user_id = null) {
        global $wpdb;
        
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        if (!isset($this->steps[$step])) {
            return false;
        }
        
        $table_name = $wpdb->prefix . 'smmcare_onboarding';
        
        // Check if step already exists
        $existing = $wpdb->get_var($wpdb->prepare(
            "SELECT id FROM $table_name WHERE user_id = %d AND step = %s",
            $user_id,
            $step
        ));
        
        if ($existing) {
            // Update existing record
            $result = $wpdb->update(
                $table_name,
                array(
                    'status' => 'completed',
                    'completed_at' => current_time('mysql')
                ),
                array(
                    'user_id' => $user_id,
                    'step' => $step
                ),
                array('%s', '%s'),
                array('%d', '%s')
            );
        } else {
            // Insert new record
            $result = $wpdb->insert(
                $table_name,
                array(
                    'user_id' => $user_id,
                    'step' => $step,
                    'status' => 'completed',
                    'completed_at' => current_time('mysql')
                ),
                array('%d', '%s', '%s', '%s')
            );
        }
        
        // Track analytics
        $this->track_event('step_completed', array(
            'step' => $step,
            'user_id' => $user_id
        ));
        
        return $result !== false;
    }

    /**
     * Skip onboarding for user
     *
     * @param int $user_id
     * @return bool
     */
    public function skip_onboarding($user_id = null) {
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        // Mark all steps as skipped
        foreach ($this->steps as $step_key => $step_data) {
            $this->complete_step($step_key, $user_id);
        }
        
        // Track analytics
        $this->track_event('onboarding_skipped', array(
            'user_id' => $user_id
        ));
        
        return true;
    }

    /**
     * Track onboarding analytics event
     *
     * @param string $event_type
     * @param array $event_data
     * @param int $user_id
     * @return bool
     */
    public function track_event($event_type, $event_data = array(), $user_id = null) {
        global $wpdb;
        
        if ($user_id === null) {
            $user_id = get_current_user_id();
        }
        
        $table_name = $wpdb->prefix . 'smmcare_onboarding_analytics';
        
        $result = $wpdb->insert(
            $table_name,
            array(
                'user_id' => $user_id,
                'event_type' => $event_type,
                'event_data' => json_encode($event_data)
            ),
            array('%d', '%s', '%s')
        );
        
        return $result !== false;
    }

    /**
     * Get onboarding analytics
     *
     * @param int $user_id
     * @param int $limit
     * @return array
     */
    public function get_analytics($user_id = null, $limit = 100) {
        global $wpdb;
        
        $table_name = $wpdb->prefix . 'smmcare_onboarding_analytics';
        
        if ($user_id === null) {
            $results = $wpdb->get_results($wpdb->prepare(
                "SELECT * FROM $table_name ORDER BY created_at DESC LIMIT %d",
                $limit
            ), ARRAY_A);
        } else {
            $results = $wpdb->get_results($wpdb->prepare(
                "SELECT * FROM $table_name WHERE user_id = %d ORDER BY created_at DESC LIMIT %d",
                $user_id,
                $limit
            ), ARRAY_A);
        }
        
        return $results;
    }

    /**
     * Get onboarding completion rate
     *
     * @return float
     */
    public function get_completion_rate() {
        global $wpdb;
        
        $table_name = $wpdb->prefix . 'smmcare_onboarding';
        
        // Get total unique users who started onboarding
        $total_users = $wpdb->get_var(
            "SELECT COUNT(DISTINCT user_id) FROM $table_name"
        );
        
        if ($total_users == 0) {
            return 0;
        }
        
        // Get users who completed all steps
        $step_count = count($this->steps);
        $completed_users = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(DISTINCT user_id) FROM $table_name WHERE status = 'completed' GROUP BY user_id HAVING COUNT(*) >= %d",
            $step_count
        ));
        
        return ($completed_users / $total_users) * 100;
    }
}
