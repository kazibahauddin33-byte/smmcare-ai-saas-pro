<?php
/**
 * Getting Started Page Template
 *
 * @package    SMMCARE_AI_SaaS_Pro
 * @subpackage SMMCARE_AI_SaaS_Pro/templates
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
?>

<div class="wrap smmcare-getting-started-wrap">
    <h1><?php echo esc_html__('Getting Started with SMMCare AI', 'smmcare-ai-saas-pro'); ?></h1>
    
    <div class="smmcare-getting-started-content">
        <div class="smmcare-intro-section">
            <p class="lead"><?php echo esc_html__('Welcome! This guide will help you get up and running with SMMCare AI in just a few minutes.', 'smmcare-ai-saas-pro'); ?></p>
        </div>

        <div class="smmcare-steps-guide">
            <div class="smmcare-guide-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h2><?php echo esc_html__('Complete the Setup Wizard', 'smmcare-ai-saas-pro'); ?></h2>
                    <p><?php echo esc_html__('If you haven\'t already, complete the onboarding wizard to configure your account and preferences. This will help us personalize your experience.', 'smmcare-ai-saas-pro'); ?></p>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-welcome')); ?>" class="button button-primary">
                        <?php echo esc_html__('Start Setup Wizard', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>

            <div class="smmcare-guide-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h2><?php echo esc_html__('Connect Your Social Accounts', 'smmcare-ai-saas-pro'); ?></h2>
                    <p><?php echo esc_html__('Link your social media accounts to start managing them from one place. We support:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><?php echo esc_html__('Facebook Pages and Groups', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Twitter/X profiles', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Instagram accounts', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('LinkedIn profiles and pages', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                    <a href="#" class="button">
                        <?php echo esc_html__('Connect Accounts', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>

            <div class="smmcare-guide-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h2><?php echo esc_html__('Create Your First Post', 'smmcare-ai-saas-pro'); ?></h2>
                    <p><?php echo esc_html__('Use our AI-powered content creator to craft engaging social media posts. The AI will help you:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><?php echo esc_html__('Generate content ideas', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Write compelling copy', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Optimize for each platform', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Suggest optimal posting times', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                    <a href="#" class="button">
                        <?php echo esc_html__('Create Post', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>

            <div class="smmcare-guide-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h2><?php echo esc_html__('Explore AI Features', 'smmcare-ai-saas-pro'); ?></h2>
                    <p><?php echo esc_html__('Take advantage of our advanced AI capabilities:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><strong><?php echo esc_html__('Content Suggestions:', 'smmcare-ai-saas-pro'); ?></strong> <?php echo esc_html__('Get AI-generated ideas based on trends and your audience', 'smmcare-ai-saas-pro'); ?></li>
                        <li><strong><?php echo esc_html__('Sentiment Analysis:', 'smmcare-ai-saas-pro'); ?></strong> <?php echo esc_html__('Ensure your content maintains the right tone', 'smmcare-ai-saas-pro'); ?></li>
                        <li><strong><?php echo esc_html__('Smart Scheduling:', 'smmcare-ai-saas-pro'); ?></strong> <?php echo esc_html__('Post at times when your audience is most active', 'smmcare-ai-saas-pro'); ?></li>
                        <li><strong><?php echo esc_html__('Performance Insights:', 'smmcare-ai-saas-pro'); ?></strong> <?php echo esc_html__('Get actionable recommendations to improve engagement', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                    <a href="#" class="button">
                        <?php echo esc_html__('Explore AI Features', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>

            <div class="smmcare-guide-step">
                <div class="step-number">5</div>
                <div class="step-content">
                    <h2><?php echo esc_html__('Monitor & Analyze', 'smmcare-ai-saas-pro'); ?></h2>
                    <p><?php echo esc_html__('Track your social media performance with comprehensive analytics:', 'smmcare-ai-saas-pro'); ?></p>
                    <ul>
                        <li><?php echo esc_html__('Engagement metrics across all platforms', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Audience growth and demographics', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Best performing content', 'smmcare-ai-saas-pro'); ?></li>
                        <li><?php echo esc_html__('Competitor analysis', 'smmcare-ai-saas-pro'); ?></li>
                    </ul>
                    <a href="#" class="button">
                        <?php echo esc_html__('View Analytics', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>
        </div>

        <div class="smmcare-quick-tips">
            <h2><?php echo esc_html__('Quick Tips for Success', 'smmcare-ai-saas-pro'); ?></h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h3><?php echo esc_html__('Plan Ahead', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Use the content calendar to plan your posts in advance. Consistency is key to social media success.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                <div class="tip-card">
                    <h3><?php echo esc_html__('Leverage AI', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Don\'t hesitate to use AI suggestions. They\'re based on proven best practices and data analysis.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                <div class="tip-card">
                    <h3><?php echo esc_html__('Engage Daily', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Monitor your social accounts daily for comments and messages. Quick responses improve customer satisfaction.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
                <div class="tip-card">
                    <h3><?php echo esc_html__('Test & Learn', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Experiment with different content types and posting times. Use analytics to see what works best for your audience.', 'smmcare-ai-saas-pro'); ?></p>
                </div>
            </div>
        </div>

        <div class="smmcare-help-resources">
            <h2><?php echo esc_html__('Need More Help?', 'smmcare-ai-saas-pro'); ?></h2>
            <div class="resources-grid">
                <div class="resource-card">
                    <h3><?php echo esc_html__('Full Documentation', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Comprehensive guides covering every feature in detail.', 'smmcare-ai-saas-pro'); ?></p>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=smmcare-documentation')); ?>" class="button">
                        <?php echo esc_html__('Read Documentation', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
                <div class="resource-card">
                    <h3><?php echo esc_html__('Video Tutorials', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Step-by-step video guides for visual learners.', 'smmcare-ai-saas-pro'); ?></p>
                    <a href="#" class="button" target="_blank">
                        <?php echo esc_html__('Watch Videos', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
                <div class="resource-card">
                    <h3><?php echo esc_html__('Support Forum', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Get help from our community and support team.', 'smmcare-ai-saas-pro'); ?></p>
                    <a href="#" class="button" target="_blank">
                        <?php echo esc_html__('Visit Forum', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
                <div class="resource-card">
                    <h3><?php echo esc_html__('Contact Support', 'smmcare-ai-saas-pro'); ?></h3>
                    <p><?php echo esc_html__('Need direct assistance? Our support team is here to help.', 'smmcare-ai-saas-pro'); ?></p>
                    <a href="#" class="button" target="_blank">
                        <?php echo esc_html__('Get Support', 'smmcare-ai-saas-pro'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
