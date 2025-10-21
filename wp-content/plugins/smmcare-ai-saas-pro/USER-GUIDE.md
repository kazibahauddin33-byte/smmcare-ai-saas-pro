# SMMCare AI SaaS Pro - User Guide

## Table of Contents
1. [Installation](#installation)
2. [First Time Setup](#first-time-setup)
3. [Using the Dashboard](#using-the-dashboard)
4. [Accessing Documentation](#accessing-documentation)
5. [Onboarding Steps Explained](#onboarding-steps-explained)
6. [Frequently Asked Questions](#frequently-asked-questions)
7. [Troubleshooting](#troubleshooting)

---

## Installation

### Prerequisites
- WordPress 5.8 or higher
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Administrator access to your WordPress site

### Installation Steps

1. **Download the Plugin**
   - Download the plugin ZIP file from your account

2. **Upload to WordPress**
   - Log in to your WordPress admin panel
   - Navigate to **Plugins > Add New**
   - Click the **Upload Plugin** button at the top
   - Click **Choose File** and select the downloaded ZIP file
   - Click **Install Now**

3. **Activate the Plugin**
   - After installation completes, click **Activate Plugin**
   - You will be automatically redirected to the Welcome page

---

## First Time Setup

When you activate the plugin for the first time, you'll be redirected to the Welcome page where the onboarding wizard will guide you through the setup process.

### What to Expect
- **5 Simple Steps**: The wizard contains 5 easy steps
- **Progress Tracking**: You'll see a progress bar showing your completion status
- **Skip Option**: You can skip the wizard if needed (but we recommend completing it!)
- **Resume Anytime**: If you skip, you can resume the wizard later

### Time Required
The entire onboarding process typically takes **5-10 minutes** to complete.

---

## Using the Dashboard

After completing onboarding (or skipping it), you'll have access to the main dashboard.

### Dashboard Features

#### Quick Stats
View important metrics at a glance:
- Connected social accounts
- Scheduled posts
- AI suggestions available

#### Quick Actions
Fast access to common tasks:
- **Create Post**: Start creating social media content
- **Connect Account**: Add new social media accounts
- **View Analytics**: Check your performance metrics

#### Recent Activity
See your latest actions and updates

#### Resources
Quick links to:
- Getting Started Guide
- Full Documentation
- Video Tutorials
- Support Forum

---

## Accessing Documentation

### Three Ways to Get Help

#### 1. Getting Started Guide
**Location**: SMMCare AI > Getting Started

Perfect for new users, this guide provides:
- Step-by-step setup instructions
- Feature highlights
- Quick tips for success
- Links to additional resources

**When to Use**: When you're just getting started or need a refresher

#### 2. Full Documentation
**Location**: SMMCare AI > Documentation

Comprehensive documentation covering:
- Overview and key benefits
- Installation instructions
- Feature documentation
- AI capabilities guide
- Social account management
- Content creation
- Scheduling
- Analytics & reporting
- Troubleshooting
- FAQ

**When to Use**: When you need detailed information about specific features

#### 3. In-App Help
**Location**: Throughout the interface

Contextual help available on most pages:
- Help sections with relevant information
- Tips and guidance where you need them
- Quick links to related documentation

**When to Use**: When you need help with what you're currently doing

---

## Onboarding Steps Explained

### Step 1: Welcome
**What it does**: Introduces you to SMMCare AI and its key features

**What you'll see**:
- Overview of the platform
- Key benefits and features
- What to expect in the next steps

**Action Required**: Click "Continue" to proceed

---

### Step 2: Account Setup
**What it does**: Configures your basic profile and preferences

**What you'll need to provide**:
- **Business Name**: Your company or brand name
- **Industry**: Select your business category
- **Timezone**: Choose your timezone (or use WordPress default)
- **Email Notifications**: Opt-in or out of updates

**Why it matters**: This information helps personalize your experience and ensures posts are scheduled in your timezone

**Tips**:
- Choose your industry carefully as it affects AI content suggestions
- Make sure timezone is correct for proper scheduling

---

### Step 3: Connect Accounts
**What it does**: Allows you to link your social media accounts

**Supported Platforms**:
- Facebook Pages and Groups
- Twitter/X profiles
- Instagram accounts
- LinkedIn profiles and pages

**How to Connect**:
1. Click the "Connect" button for your preferred platform
2. You'll be redirected to authorize the connection
3. Grant the necessary permissions
4. You'll be returned to the wizard

**Why it matters**: You need connected accounts to publish content through the platform

**Tips**:
- You can connect accounts later if you prefer
- You need admin access to the accounts you want to connect
- Make sure you're logged into the correct accounts

**Note**: In the current implementation, social account connection is a placeholder. Full OAuth integration will be available in future versions.

---

### Step 4: AI Configuration
**What it does**: Sets up your AI preferences and automation rules

**Settings to Configure**:

#### Content Tone
Choose the default tone for AI-generated content:
- **Professional**: Formal, business-appropriate
- **Casual**: Relaxed, conversational
- **Friendly**: Warm, personable
- **Humorous**: Light-hearted, entertaining

#### AI Features to Enable
- **Content Suggestions**: Get AI-generated post ideas
- **Optimal Posting Times**: AI recommends when to post
- **Sentiment Analysis**: Analyze tone of your content
- **Hashtag Suggestions**: Get relevant hashtag recommendations

#### Automation Level
- **Manual**: You control everything (recommended for beginners)
- **Assisted**: AI suggests, you decide (recommended)
- **Automated**: AI handles routine tasks automatically (for power users)

**Why it matters**: These settings determine how the AI assists you

**Tips**:
- Start with "Assisted" automation and adjust later
- You can always change these settings
- Enable all AI features to get the most value

---

### Step 5: Complete
**What it does**: Confirms your setup is complete and shows next steps

**What you'll see**:
- Success message
- Summary of what you've configured
- Buttons to access the dashboard or documentation

**Next Steps**:
- Click "Go to Dashboard" to start using the platform
- Or click "View Documentation" to learn more

---

## Frequently Asked Questions

### Can I change my onboarding settings later?
Yes! All settings configured during onboarding can be changed later in the plugin settings.

### What if I skip the onboarding?
No problem! You can access the onboarding wizard anytime from the "Welcome" menu. Your progress is saved if you return.

### Do I need to connect social accounts during onboarding?
No, this is optional. You can connect accounts later when you're ready.

### How is my data secured?
All data is stored securely in your WordPress database with industry-standard security practices. Social media credentials are never stored directly.

### Can I reset the onboarding?
Currently, there's no built-in reset function, but you can contact support if needed.

### Is there a limit to how many accounts I can connect?
This depends on your subscription plan. Check your plan details for specific limits.

### What happens if I encounter an error during onboarding?
If you see an error:
1. Check your internet connection
2. Refresh the page
3. Try again
4. If the problem persists, contact support

### Can multiple users complete onboarding?
Yes, each WordPress user with appropriate permissions can complete their own onboarding.

---

## Troubleshooting

### Problem: Plugin not activating
**Solution**:
- Ensure your WordPress and PHP versions meet the requirements
- Check for plugin conflicts by deactivating other plugins
- Verify file permissions are correct
- Check WordPress error logs for specific issues

### Problem: Not redirected to Welcome page after activation
**Solution**:
- Manually navigate to **SMMCare AI > Welcome**
- Clear your browser cache
- Try deactivating and reactivating the plugin

### Problem: Onboarding wizard not loading
**Solution**:
- Check browser console for JavaScript errors
- Ensure jQuery is loaded (required by the plugin)
- Try a different browser
- Disable browser extensions that might interfere

### Problem: Can't click "Continue" button
**Solution**:
- Ensure all required fields are filled in
- Check if JavaScript is enabled in your browser
- Wait a moment if you just filled in fields (validation may be processing)
- Check browser console for errors

### Problem: Progress not saving
**Solution**:
- Ensure your WordPress database is functioning properly
- Check database user permissions
- Verify tables were created during activation
- Check WordPress debug logs

### Problem: CSS/styling looks broken
**Solution**:
- Clear your browser cache
- Clear WordPress cache if using a caching plugin
- Check if CSS files are loading (check browser developer tools)
- Try a different theme to rule out conflicts

### Problem: AJAX requests failing
**Solution**:
- Check if WordPress AJAX is working (try other plugins)
- Verify admin-ajax.php is accessible
- Check for JavaScript errors in browser console
- Ensure nonce verification is not failing

---

## Getting Additional Help

### Documentation Resources
- **Getting Started Guide**: In-plugin comprehensive guide
- **Full Documentation**: Detailed feature documentation
- **Implementation Details**: Technical documentation for developers

### Support Channels
1. **In-App Help**: Context-sensitive help throughout the interface
2. **Documentation Search**: Search the documentation for specific topics
3. **Support Forum**: Community support and discussions
4. **Direct Support**: Contact support team through the dashboard

### Community
- Join our user community for tips and best practices
- Share your success stories
- Learn from other users' experiences
- Contribute to feature requests

---

## Tips for Success

1. **Complete the Onboarding**: It only takes a few minutes and ensures proper setup
2. **Explore the Documentation**: Familiarize yourself with available features
3. **Start Small**: Begin with one or two social accounts
4. **Use AI Features**: They're designed to save you time
5. **Check Analytics**: Monitor what's working and adjust your strategy
6. **Stay Updated**: Keep the plugin updated for latest features and security
7. **Engage with Community**: Learn from other users' experiences

---

## What's Next?

After completing onboarding and familiarizing yourself with the basics:

1. **Connect More Accounts**: Link all your social media profiles
2. **Create Your First Post**: Try the AI-powered content creator
3. **Set Up a Schedule**: Plan your content calendar
4. **Monitor Performance**: Check analytics and insights
5. **Optimize with AI**: Use AI suggestions to improve engagement

---

## Need More Help?

If you need additional assistance:
- Visit the **Documentation** page for detailed guides
- Check the **Getting Started** guide for tutorials
- Contact support through the dashboard
- Visit the support forum for community help

---

**Remember**: The goal of SMMCare AI is to make social media management easier and more effective. Take your time to explore the features and don't hesitate to refer back to this guide whenever needed!
