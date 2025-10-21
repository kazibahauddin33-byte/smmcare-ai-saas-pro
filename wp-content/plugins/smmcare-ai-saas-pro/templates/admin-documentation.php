<?php
/**
 * Documentation Page Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="wrap smmcare-documentation-wrap">
    <h1><?php echo esc_html__('SMMCare AI Documentation', 'smmcare-ai-saas-pro'); ?></h1>
    
    <div class="smmcare-documentation-content">
        <div class="smmcare-doc-sidebar">
            <h3><?php echo esc_html__('Contents', 'smmcare-ai-saas-pro'); ?></h3>
            <nav class="smmcare-doc-nav">
                <ul>
                    <li><a href="#overview"><?php echo esc_html__('Overview', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#installation"><?php echo esc_html__('Installation', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#getting-started"><?php echo esc_html__('Getting Started', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#features"><?php echo esc_html__('Features', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#ai-capabilities"><?php echo esc_html__('AI Capabilities', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#social-accounts"><?php echo esc_html__('Social Account Management', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#content-creation"><?php echo esc_html__('Content Creation', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#scheduling"><?php echo esc_html__('Scheduling', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#analytics"><?php echo esc_html__('Analytics & Reporting', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#troubleshooting"><?php echo esc_html__('Troubleshooting', 'smmcare-ai-saas-pro'); ?></a></li>
                    <li><a href="#faq"><?php echo esc_html__('FAQ', 'smmcare-ai-saas-pro'); ?></a></li>
                </ul>
            </nav>
        </div>

        <div class="smmcare-doc-main">
            <section id="overview" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Overview', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('SMMCare AI SaaS Pro is an advanced social media management platform powered by artificial intelligence. It helps you manage multiple social media accounts, create engaging content, schedule posts, and analyze performance - all from one unified dashboard.', 'smmcare-ai-saas-pro'); ?></p>
                <div class="smmcare-doc-highlight">
                    <h4><?php echo esc_html__('Key Benefits', 'smmcare-ai-saas-pro'); ?></h4>
                    <ul>
                        <li><?php echo esc_html__('AI-powered content suggestions and optimization', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Multi-platform social media management', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Advanced scheduling and automation', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Comprehensive analytics and insights', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Team collaboration features', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                </div>
            </section>

            <section id="installation" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Installation', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('Installing SMMCare AI is simple and straightforward:', 'smmcare-ai-saas-pro'); ?></p>
                <ol>
                    <li><?php echo esc_html__('Download the plugin from your account dashboard', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Navigate to WordPress Admin > Plugins > Add New', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Click "Upload Plugin" and select the downloaded ZIP file', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Click "Install Now" and then "Activate"', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Complete the onboarding wizard', 'smmcare-ai-saas-pro'); ?></li>
                </ol>
            </section>

            <section id="getting-started" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Getting Started', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('After installation, follow these steps to get started:', 'smmcare-ai-saas-pro'); ?></p>
                
                <h3><?php echo esc_html__('1. Complete the Onboarding Wizard', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('The onboarding wizard will guide you through the initial setup:', 'smmcare-ai-saas-pro'); ?></p>
                <ul>
                    <li><?php echo esc_html__('Configure your profile and preferences', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Connect your social media accounts', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Set up AI preferences', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Configure automation rules', 'smmcare-ai-saas-pro'); ?></li>
                </ul>

                <h3><?php echo esc_html__('2. Connect Social Accounts', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('Connect your social media accounts to start managing them:', 'smmcare-ai-saas-pro'); ?></p>
                <ul>
                    <li><?php echo esc_html__('Facebook Pages and Groups', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Twitter/X profiles', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Instagram accounts', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('LinkedIn profiles and pages', 'smmcare-ai-saas-pro'); ?></li>
                </ul>

                <h3><?php echo esc_html__('3. Create Your First Post', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('Use the AI-powered content creator to craft your first social media post.', 'smmcare-ai-saas-pro'); ?></p>
            </section>

            <section id="features" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Features', 'smmcare-ai-saas-pro'); ?></h2>
                
                <div class="smmcare-feature-grid">
                    <div class="smmcare-feature-item">
                        <h4><?php echo esc_html__('AI Content Generation', 'smmcare-ai-saas-pro'); ?></h4>
                        <p><?php echo esc_html__('Generate engaging content ideas and copy using advanced AI algorithms.', 'smmcare-ai-saas-pro'); ?></p>
                    </div>
                    
                    <div class="smmcare-feature-item">
                        <h4><?php echo esc_html__('Multi-Platform Publishing', 'smmcare-ai-saas-pro'); ?></h4>
                        <p><?php echo esc_html__('Publish to multiple social platforms simultaneously with platform-specific optimization.', 'smmcare-ai-saas-pro'); ?></p>
                    </div>
                    
                    <div class="smmcare-feature-item">
                        <h4><?php echo esc_html__('Smart Scheduling', 'smmcare-ai-saas-pro'); ?></h4>
                        <p><?php echo esc_html__('AI-powered optimal posting times based on your audience engagement patterns.', 'smmcare-ai-saas-pro'); ?></p>
                    </div>
                    
                    <div class="smmcare-feature-item">
                        <h4><?php echo esc_html__('Analytics Dashboard', 'smmcare-ai-saas-pro'); ?></h4>
                        <p><?php echo esc_html__('Comprehensive analytics with actionable insights across all platforms.', 'smmcare-ai-saas-pro'); ?></p>
                    </div>
                </div>
            </section>

            <section id="ai-capabilities" class="smmcare-doc-section">
                <h2><?php echo esc_html__('AI Capabilities', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('SMMCare AI leverages cutting-edge artificial intelligence to enhance your social media management:', 'smmcare-ai-saas-pro'); ?></p>
                
                <h3><?php echo esc_html__('Content Suggestions', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('Get AI-generated content ideas based on trending topics, your audience interests, and best practices.', 'smmcare-ai-saas-pro'); ?></p>
                
                <h3><?php echo esc_html__('Sentiment Analysis', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('Automatically analyze the sentiment of your posts and comments to maintain brand consistency.', 'smmcare-ai-saas-pro'); ?></p>
                
                <h3><?php echo esc_html__('Optimal Timing', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('AI analyzes your audience behavior to recommend the best times to post for maximum engagement.', 'smmcare-ai-saas-pro'); ?></p>
            </section>

            <section id="social-accounts" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Social Account Management', 'smmcare-ai-saas-pro'); ?></h2>
                <p><?php echo esc_html__('Learn how to connect and manage your social media accounts:', 'smmcare-ai-saas-pro'); ?></p>
                
                <h3><?php echo esc_html__('Connecting Accounts', 'smmcare-ai-saas-pro'); ?></h3>
                <ol>
                    <li><?php echo esc_html__('Navigate to the Social Accounts page', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Click "Connect New Account"', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Select the platform you want to connect', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Follow the authentication process', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Grant the necessary permissions', 'smmcare-ai-saas-pro'); ?></li>
                </ol>
                
                <h3><?php echo esc_html__('Managing Connected Accounts', 'smmcare-ai-saas-pro'); ?></h3>
                <p><?php echo esc_html__('Once connected, you can:', 'smmcare-ai-saas-pro'); ?></p>
                <ul>
                    <li><?php echo esc_html__('View account status and health', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Refresh authentication tokens', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Disconnect accounts', 'smmcare-ai-saas-pro'); ?></li>
                    <li><?php echo esc_html__('Configure account-specific settings', 'smmcare-ai-saas-pro'); ?></li>
                </ul>
            </section>

            <section id="troubleshooting" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Troubleshooting', 'smmcare-ai-saas-pro'); ?></h2>
                
                <h3><?php echo esc_html__('Common Issues', 'smmcare-ai-saas-pro'); ?></h3>
                
                <div class="smmcare-troubleshooting-item">
                    <h4><?php echo esc_html__('Unable to Connect Social Account', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('If you\'re having trouble connecting a social account:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><?php echo esc_html__('Ensure you have the necessary permissions on the social platform', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Check that your WordPress site is accessible from the internet', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Verify your site has a valid SSL certificate', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Try disconnecting and reconnecting the account', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                </div>
                
                <div class="smmcare-troubleshooting-item">
                    <h4><?php echo esc_html__('Posts Not Publishing', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('If scheduled posts aren\'t publishing:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><?php echo esc_html__('Check that WordPress cron is working properly', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Verify social account connections are active', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Review any error messages in the activity log', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                </div>
            </section>

            <section id="faq" class="smmcare-doc-section">
                <h2><?php echo esc_html__('Frequently Asked Questions', 'smmcare-ai-saas-pro'); ?></h2>
                
                <div class="smmcare-faq-item">
                    <h4><?php echo esc_html__('How many social accounts can I connect?', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('The number of accounts depends on your subscription plan. Check your plan details for specifics.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                
                <div class="smmcare-faq-item">
                    <h4><?php echo esc_html__('Does the AI feature require additional costs?', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('AI features are included in your subscription. Some advanced AI capabilities may require higher-tier plans.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                
                <div class="smmcare-faq-item">
                    <h4><?php echo esc_html__('Can I schedule posts in different timezones?', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('Yes! You can set timezone preferences for each social account or use your WordPress timezone setting.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                
                <div class="smmcare-faq-item">
                    <h4><?php echo esc_html__('Is my data secure?', 'smmcare-ai-saas-pro'); ?></h4>
                    <p><?php echo esc_html__('Yes, we use industry-standard encryption and security practices. Your social media credentials are encrypted and stored securely.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
            </section>
        </div>
    </div>
</div>
