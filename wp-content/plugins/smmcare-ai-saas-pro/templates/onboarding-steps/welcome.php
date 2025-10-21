<?php
/**
 * Welcome Step Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates/onboarding-steps
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="smmcare-welcome-step">
    <div class="welcome-hero">
        <div class="welcome-icon">🚀</div>
        <h3><?php echo esc_html__('Welcome to the Future of Social Media Management', 'smmcare-ai-saas-pro'); ?></h3>
        <p class="lead"><?php echo esc_html__('SMMCare AI combines powerful automation with intelligent AI to help you manage your social media presence effortlessly.', 'smmcare-ai-saas-pro'); ?></p>
    </div>

    <div class="welcome-features">
        <div class="feature-item">
            <span class="feature-icon">🤖</span>
            <h4><?php echo esc_html__('AI-Powered Content', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Generate engaging posts with intelligent content suggestions', 'smmcare-ai-saas-pro'); ?></p>
        </div>
        <div class="feature-item">
            <span class="feature-icon">📊</span>
            <h4><?php echo esc_html__('Analytics & Insights', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Track performance and get actionable recommendations', 'smmcare-ai-saas-pro'); ?></p>
        </div>
        <div class="feature-item">
            <span class="feature-icon">⏰</span>
            <h4><?php echo esc_html__('Smart Scheduling', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Post at optimal times for maximum engagement', 'smmcare-ai-saas-pro'); ?></p>
        </div>
        <div class="feature-item">
            <span class="feature-icon">🔗</span>
            <h4><?php echo esc_html__('Multi-Platform', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Manage all your social accounts from one place', 'smmcare-ai-saas-pro'); ?></p>
        </div>
    </div>

    <div class="welcome-cta">
        <p><?php echo esc_html__('Let\'s get you set up in just a few steps!', 'smmcare-ai-saas-pro'); ?></p>
    </div>
</div>
