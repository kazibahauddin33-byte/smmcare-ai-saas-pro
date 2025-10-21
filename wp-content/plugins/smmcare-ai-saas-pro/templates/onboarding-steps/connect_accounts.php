<?php
/**
 * Connect Accounts Step Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates/onboarding-steps
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="smmcare-connect-accounts-step">
    <p><?php echo esc_html__('Connect your social media accounts to start managing them from one place.', 'smmcare-ai-saas-pro'); ?></p>

    <div class="social-platforms">
        <div class="platform-card">
            <div class="platform-icon facebook-icon">f</div>
            <h4><?php echo esc_html__('Facebook', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Connect your Facebook Pages and Groups', 'smmcare-ai-saas-pro'); ?></p>
            <button type="button" class="button connect-platform" data-platform="facebook">
                <?php echo esc_html__('Connect Facebook', 'smmcare-ai-saas-pro'); ?>
            </button>
        </div>

        <div class="platform-card">
            <div class="platform-icon twitter-icon">𝕏</div>
            <h4><?php echo esc_html__('Twitter/X', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Connect your Twitter/X profile', 'smmcare-ai-saas-pro'); ?></p>
            <button type="button" class="button connect-platform" data-platform="twitter">
                <?php echo esc_html__('Connect Twitter', 'smmcare-ai-saas-pro'); ?>
            </button>
        </div>

        <div class="platform-card">
            <div class="platform-icon instagram-icon">📷</div>
            <h4><?php echo esc_html__('Instagram', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Connect your Instagram account', 'smmcare-ai-saas-pro'); ?></p>
            <button type="button" class="button connect-platform" data-platform="instagram">
                <?php echo esc_html__('Connect Instagram', 'smmcare-ai-saas-pro'); ?>
            </button>
        </div>

        <div class="platform-card">
            <div class="platform-icon linkedin-icon">in</div>
            <h4><?php echo esc_html__('LinkedIn', 'smmcare-ai-saas-pro'); ?></h4>
            <p><?php echo esc_html__('Connect your LinkedIn profile or page', 'smmcare-ai-saas-pro'); ?></p>
            <button type="button" class="button connect-platform" data-platform="linkedin">
                <?php echo esc_html__('Connect LinkedIn', 'smmcare-ai-saas-pro'); ?>
            </button>
        </div>
    </div>

    <p class="help-text">
        <?php echo esc_html__('Note: You can connect accounts later from the dashboard if you prefer to skip this step for now.', 'smmcare-ai-saas-pro'); ?>
    </p>
</div>
