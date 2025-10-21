<?php
/**
 * Welcome/Onboarding Page Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="wrap smmcare-welcome-wrap">
    <h1><?php echo esc_html__('Welcome to SMMCare AI SaaS Pro', 'smmcare-ai-saas-pro'); ?></h1>
    
    <div class="smmcare-onboarding-container">
        <?php if ($current_step === 'complete'): ?>
            <!-- Completion Screen -->
            <div class="smmcare-onboarding-complete">
                <div class="smmcare-completion-icon">✓</div>
                <h2><?php echo esc_html__('Setup Complete!', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('You\'re all set to start using SMMCare AI to manage your social media accounts.', 'smmcare-ai-saas-pro'); ?></p>
                <div class="smmcare-completion-actions">
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-dashboard')); ?>" class="button button-primary button-hero">
                        <?php echo esc_html__('Go to Dashboard', 'smmcare-ai-saas-pro'); ?>
                    </a>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-documentation')); ?>" class="button button-secondary">
                        <?php echo esc_html__('View Documentation', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>
        <?php else: ?>
            <!-- Progress Bar -->
            <div class="smmcare-progress-bar">
                <?php
                $total_steps = count($steps);
                $completed_count = 0;
                foreach ($steps as $step_key => $step_data) {
                    if (isset($progress[$step_key]) && $progress[$step_key]['status'] === 'completed') {
                        $completed_count++;
                    }
                }
                $progress_percentage = ($completed_count / $total_steps) * 100;
                ?>
                <div class="smmcare-progress-bar-track">
                    <div class="smmcare-progress-bar-fill" style="width: <?php echo esc_attr($progress_percentage); ?>%;"></div>
                </div>
                <p class="smmcare-progress-text">
                    <?php echo sprintf(
                        esc_html__('Step %d of %d', 'smmcare-ai-saas-pro'),
                        $completed_count + 1,
                        $total_steps
                    ); ?>
                </p>
            </div>

            <!-- Current Step Content -->
            <div class="smmcare-step-content" data-step="<?php echo esc_attr($current_step); ?>">
                <?php if (isset($steps[$current_step])): ?>
                    <?php $step = $steps[$current_step]; ?>
                    
                    <div class="smmcare-step-header">
                        <h2><?php echo esc_html($step['title']); ?></h2>
                        <p class="description"><?php echo esc_html($step['description']); ?></p>
                    </div>

                    <div class="smmcare-step-body">
                        <?php
                        // Include step-specific content
                        $step_template = SMMCARE_PLUGIN_DIR . 'templates/onboarding-steps/' . $current_step . '.php';
                        if (file_exists($step_template)) {
                            include $step_template;
                        } else {
                            // Default step content
                            ?>
                            <div class="smmcare-default-step-content">
                                <p><?php echo esc_html__('This step helps you configure an important aspect of SMMCare AI.', 'smmcare-ai-saas-pro'); ?></p>
                                <div class="smmcare-step-checklist">
                                    <label>
                                        <input type="checkbox" class="smmcare-step-checkbox" />
                                        <?php echo esc_html__('I understand this step', 'smmcare-ai-saas-pro'); ?>
                                    </label>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="smmcare-step-actions">
                        <button type="button" class="button button-primary button-large smmcare-complete-step" data-step="<?php echo esc_attr($current_step); ?>">
                            <?php echo esc_html__('Continue', 'smmcare-ai-saas-pro'); ?>
                        </button>
                        <button type="button" class="button button-link smmcare-skip-onboarding">
                            <?php echo esc_html__('Skip Setup', 'smmcare-ai-saas-pro'); ?>
                        </button>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Steps Navigation -->
            <div class="smmcare-steps-navigation">
                <ul class="smmcare-steps-list">
                    <?php foreach ($steps as $step_key => $step_data): ?>
                        <?php
                        $is_completed = isset($progress[$step_key]) && $progress[$step_key]['status'] === 'completed';
                        $is_current = $step_key === $current_step;
                        $class = 'smmcare-step-item';
                        if ($is_completed) {
                            $class .= ' completed';
                        }
                        if ($is_current) {
                            $class .= ' current';
                        }
                        ?>
                        <li class="<?php echo esc_attr($class); ?>">
                            <span class="step-number"><?php echo esc_html($step_data['order']); ?></span>
                            <span class="step-title"><?php echo esc_html($step_data['title']); ?></span>
                            <?php if ($is_completed): ?>
                                <span class="step-status">✓</span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <!-- Help Section -->
    <div class="smmcare-help-section">
        <h3><?php echo esc_html__('Need Help?', 'smmcare-ai-saas-pro'); ?></h3>
        <p><?php echo esc_html__('Check out our comprehensive documentation and guides.', 'smmcare-ai-saas-pro'); ?></p>
        <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-documentation')); ?>" class="button">
            <?php echo esc_html__('View Documentation', 'smmcare-ai-saas-pro'); ?>
        </a>
        <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-getting-started')); ?>" class="button">
            <?php echo esc_html__('Getting Started Guide', 'smmcare-ai-saas-pro'); ?>
        </a>
    </div>
</div>
