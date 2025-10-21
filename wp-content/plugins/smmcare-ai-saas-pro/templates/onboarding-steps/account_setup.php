<?php
/**
 * Account Setup Step Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates/onboarding-steps
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="smmcare-account-setup-step">
    <p><?php echo esc_html__('Configure your account settings to personalize your experience.', 'smmcare-ai-saas-pro'); ?></p>

    <form class="smmcare-setup-form">
        <div class="form-group">
            <label for="business_name"><?php echo esc_html__('Business Name', 'smmcare-ai-saas-pro'); ?></label>
            <input type="text" id="business_name" name="business_name" class="regular-text" placeholder="<?php echo esc_attr__('Your Business Name', 'smmcare-ai-saas-pro'); ?>" />
        </div>

        <div class="form-group">
            <label for="industry"><?php echo esc_html__('Industry', 'smmcare-ai-saas-pro'); ?></label>
            <select id="industry" name="industry" class="regular-text">
                <option value=""><?php echo esc_html__('Select your industry', 'smmcare-ai-saas-pro'); ?></option>
                <option value="ecommerce"><?php echo esc_html__('E-commerce', 'smmcare-ai-saas-pro'); ?></option>
                <option value="technology"><?php echo esc_html__('Technology', 'smmcare-ai-saas-pro'); ?></option>
                <option value="healthcare"><?php echo esc_html__('Healthcare', 'smmcare-ai-saas-pro'); ?></option>
                <option value="education"><?php echo esc_html__('Education', 'smmcare-ai-saas-pro'); ?></option>
                <option value="finance"><?php echo esc_html__('Finance', 'smmcare-ai-saas-pro'); ?></option>
                <option value="retail"><?php echo esc_html__('Retail', 'smmcare-ai-saas-pro'); ?></option>
                <option value="other"><?php echo esc_html__('Other', 'smmcare-ai-saas-pro'); ?></option>
            </select>
        </div>

        <div class="form-group">
            <label for="timezone"><?php echo esc_html__('Timezone', 'smmcare-ai-saas-pro'); ?></label>
            <select id="timezone" name="timezone" class="regular-text">
                <option value=""><?php echo esc_html__('Use WordPress timezone', 'smmcare-ai-saas-pro'); ?></option>
                <option value="UTC"><?php echo esc_html__('UTC', 'smmcare-ai-saas-pro'); ?></option>
                <option value="America/New_York"><?php echo esc_html__('Eastern Time (US)', 'smmcare-ai-saas-pro'); ?></option>
                <option value="America/Chicago"><?php echo esc_html__('Central Time (US)', 'smmcare-ai-saas-pro'); ?></option>
                <option value="America/Denver"><?php echo esc_html__('Mountain Time (US)', 'smmcare-ai-saas-pro'); ?></option>
                <option value="America/Los_Angeles"><?php echo esc_html__('Pacific Time (US)', 'smmcare-ai-saas-pro'); ?></option>
                <option value="Europe/London"><?php echo esc_html__('London', 'smmcare-ai-saas-pro'); ?></option>
                <option value="Europe/Paris"><?php echo esc_html__('Paris', 'smmcare-ai-saas-pro'); ?></option>
                <option value="Asia/Tokyo"><?php echo esc_html__('Tokyo', 'smmcare-ai-saas-pro'); ?></option>
            </select>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="email_notifications" checked />
                <?php echo esc_html__('Receive email notifications for important updates', 'smmcare-ai-saas-pro'); ?>
            </label>
        </div>
    </form>
</div>
