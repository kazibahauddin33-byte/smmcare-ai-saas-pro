<?php
/**
 * AI Setup Step Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates/onboarding-steps
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="smmcare-ai-setup-step">
    <p><?php echo esc_html__('Configure AI preferences to get personalized content suggestions and automation.', 'smmcare-ai-saas-pro'); ?></p>

    <form class="smmcare-ai-form">
        <div class="form-group">
            <label><?php echo esc_html__('Content Tone', 'smmcare-ai-saas-pro'); ?></label>
            <p class="description"><?php echo esc_html__('Choose the default tone for AI-generated content', 'smmcare-ai-saas-pro'); ?></p>
            <div class="tone-options">
                <label class="tone-option">
                    <input type="radio" name="content_tone" value="professional" checked />
                    <span><?php echo esc_html__('Professional', 'smmcare-ai-saas-pro'); ?></span>
                </label>
                <label class="tone-option">
                    <input type="radio" name="content_tone" value="casual" />
                    <span><?php echo esc_html__('Casual', 'smmcare-ai-saas-pro'); ?></span>
                </label>
                <label class="tone-option">
                    <input type="radio" name="content_tone" value="friendly" />
                    <span><?php echo esc_html__('Friendly', 'smmcare-ai-saas-pro'); ?></span>
                </label>
                <label class="tone-option">
                    <input type="radio" name="content_tone" value="humorous" />
                    <span><?php echo esc_html__('Humorous', 'smmcare-ai-saas-pro'); ?></span>
                </label>
            </div>
        </div>

        <div class="form-group">
            <label><?php echo esc_html__('AI Features', 'smmcare-ai-saas-pro'); ?></label>
            <p class="description"><?php echo esc_html__('Select which AI features you want to enable', 'smmcare-ai-saas-pro'); ?></p>
            
            <label class="feature-checkbox">
                <input type="checkbox" name="ai_content_suggestions" checked />
                <strong><?php echo esc_html__('Content Suggestions', 'smmcare-ai-saas-pro'); ?></strong>
                <span class="feature-desc"><?php echo esc_html__('Get AI-powered content ideas and topics', 'smmcare-ai-saas-pro'); ?></span>
            </label>

            <label class="feature-checkbox">
                <input type="checkbox" name="ai_optimal_timing" checked />
                <strong><?php echo esc_html__('Optimal Posting Times', 'smmcare-ai-saas-pro'); ?></strong>
                <span class="feature-desc"><?php echo esc_html__('AI recommends best times to post', 'smmcare-ai-saas-pro'); ?></span>
            </label>

            <label class="feature-checkbox">
                <input type="checkbox" name="ai_sentiment_analysis" checked />
                <strong><?php echo esc_html__('Sentiment Analysis', 'smmcare-ai-saas-pro'); ?></strong>
                <span class="feature-desc"><?php echo esc_html__('Analyze tone and sentiment of your content', 'smmcare-ai-saas-pro'); ?></span>
            </label>

            <label class="feature-checkbox">
                <input type="checkbox" name="ai_hashtag_suggestions" checked />
                <strong><?php echo esc_html__('Hashtag Suggestions', 'smmcare-ai-saas-pro'); ?></strong>
                <span class="feature-desc"><?php echo esc_html__('Get relevant hashtag recommendations', 'smmcare-ai-saas-pro'); ?></span>
            </label>
        </div>

        <div class="form-group">
            <label><?php echo esc_html__('Automation Level', 'smmcare-ai-saas-pro'); ?></label>
            <p class="description"><?php echo esc_html__('How much should AI automate for you?', 'smmcare-ai-saas-pro'); ?></p>
            <select name="automation_level" class="regular-text">
                <option value="manual"><?php echo esc_html__('Manual - I want full control', 'smmcare-ai-saas-pro'); ?></option>
                <option value="assisted" selected><?php echo esc_html__('Assisted - Suggest but let me decide', 'smmcare-ai-saas-pro'); ?></option>
                <option value="automated"><?php echo esc_html__('Automated - Handle routine tasks automatically', 'smmcare-ai-saas-pro'); ?></option>
            </select>
        </div>
    </form>
</div>
