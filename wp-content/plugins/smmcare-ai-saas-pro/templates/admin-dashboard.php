<?php
/**
 * Dashboard Page Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

$onboarding_manager = new SMMCARE_Onboarding_Manager();
$is_onboarding_complete = $onboarding_manager->is_onboarding_complete();
?>

<div class="wrap smmcare-dashboard-wrap">
    <h1><?php echo esc_html__('SMMCare AI Dashboard', 'smmcare-ai-saas-pro'); ?></h1>
    
    <?php if (!$is_onboarding_complete): ?>
        <div class="notice notice-warning">
            <p>
                <strong><?php echo esc_html__('Setup Incomplete', 'smmcare-ai-saas-pro'); ?></strong> - 
                <?php echo esc_html__('Complete the setup wizard to unlock all features.', 'smmcare-ai-saas-pro'); ?>
                <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-welcome')); ?>" class="button button-small">
                    <?php echo esc_html__('Complete Setup', 'smmcare-ai-saas-pro'); ?>
                </a>
            </p>
        </div>
    <?php endif; ?>

    <div class="smmcare-dashboard-grid">
        <!-- Quick Stats -->
        <div class="smmcare-dashboard-card">
            <h2><?php echo esc_html__('Quick Stats', 'smmcare-ai-saas-pro'); ?></h2>
            <div class="smmcare-stats">
                <div class="stat-item">
                    <span class="stat-value">0</span>
                    <span class="stat-label"><?php echo esc_html__('Connected Accounts', 'smmcare-ai-saas-pro'); ?></span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">0</span>
                    <span class="stat-label"><?php echo esc_html__('Scheduled Posts', 'smmcare-ai-saas-pro'); ?></span>
                </div>
                <div class="stat-item">
                    <span class="stat-value">0</span>
                    <span class="stat-label"><?php echo esc_html__('AI Suggestions', 'smmcare-ai-saas-pro'); ?></span>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="smmcare-dashboard-card">
            <h2><?php echo esc_html__('Quick Actions', 'smmcare-ai-saas-pro'); ?></h2>
            <div class="smmcare-quick-actions">
                <a href="#" class="button button-primary">
                    <?php echo esc_html__('Create Post', 'smmcare-ai-saas-pro'); ?>
                </a>
                <a href="#" class="button">
                    <?php echo esc_html__('Connect Account', 'smmcare-ai-saas-pro'); ?>
                </a>
                <a href="#" class="button">
                    <?php echo esc_html__('View Analytics', 'smmcare-ai-saas-pro'); ?>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="smmcare-dashboard-card">
            <h2><?php echo esc_html__('Recent Activity', 'smmcare-ai-saas-pro'); ?></h2>
            <div class="smmcare-recent-activity">
                <p class="no-activity"><?php echo esc_html__('No recent activity to display.', 'smmcare-ai-saas-pro'); ?></p>
            </div>
        </div>

        <!-- Resources -->
        <div class="smmcare-dashboard-card">
            <h2><?php echo esc_html__('Resources', 'smmcare-ai-saas-pro'); ?></h2>
            <ul class="smmcare-resources-list">
                <li>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-getting-started')); ?>">
                        <?php echo esc_html__('Getting Started Guide', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-documentation')); ?>">
                        <?php echo esc_html__('Full Documentation', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <?php echo esc_html__('Video Tutorials', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <?php echo esc_html__('Support Forum', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
