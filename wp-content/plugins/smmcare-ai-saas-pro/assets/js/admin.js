/**
 * Admin JavaScript for SMMCare AI SaaS Pro
 *
 * @package SMMCARE_AI_SaaS_Pro
 */

(function($) {
    'use strict';

    /**
     * Onboarding functionality
     */
    var Onboarding = {
        init: function() {
            this.bindEvents();
        },

        bindEvents: function() {
            // Complete step button
            $('.smmcare-complete-step').on('click', this.completeStep);
            
            // Skip onboarding button
            $('.smmcare-skip-onboarding').on('click', this.skipOnboarding);
            
            // Connect platform buttons
            $('.connect-platform').on('click', this.connectPlatform);
        },

        completeStep: function(e) {
            e.preventDefault();
            
            var $button = $(this);
            var step = $button.data('step');
            
            // Disable button to prevent double clicks
            $button.prop('disabled', true).text(smmcareAdmin.strings.processing || 'Processing...');
            
            $.ajax({
                url: smmcareAdmin.ajax_url,
                type: 'POST',
                data: {
                    action: 'smmcare_complete_onboarding_step',
                    nonce: smmcareAdmin.nonce,
                    step: step
                },
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        Onboarding.showNotice('success', response.data.message);
                        
                        // Reload page to show next step
                        setTimeout(function() {
                            window.location.reload();
                        }, 500);
                    } else {
                        Onboarding.showNotice('error', response.data.message);
                        $button.prop('disabled', false).text(smmcareAdmin.strings.continue || 'Continue');
                    }
                },
                error: function() {
                    Onboarding.showNotice('error', smmcareAdmin.strings.error);
                    $button.prop('disabled', false).text(smmcareAdmin.strings.continue || 'Continue');
                }
            });
        },

        skipOnboarding: function(e) {
            e.preventDefault();
            
            if (!confirm('Are you sure you want to skip the onboarding? You can always access it later from the Welcome menu.')) {
                return;
            }
            
            var $button = $(this);
            $button.prop('disabled', true);
            
            $.ajax({
                url: smmcareAdmin.ajax_url,
                type: 'POST',
                data: {
                    action: 'smmcare_skip_onboarding',
                    nonce: smmcareAdmin.nonce
                },
                success: function(response) {
                    if (response.success) {
                        Onboarding.showNotice('success', response.data.message);
                        
                        // Redirect to dashboard
                        if (response.data.redirect_url) {
                            setTimeout(function() {
                                window.location.href = response.data.redirect_url;
                            }, 500);
                        }
                    } else {
                        Onboarding.showNotice('error', response.data.message);
                        $button.prop('disabled', false);
                    }
                },
                error: function() {
                    Onboarding.showNotice('error', smmcareAdmin.strings.error);
                    $button.prop('disabled', false);
                }
            });
        },

        connectPlatform: function(e) {
            e.preventDefault();
            
            var platform = $(this).data('platform');
            
            // This is a placeholder - actual implementation would redirect to OAuth flow
            Onboarding.showNotice('info', 'Social account connection will be implemented in the full version. For now, you can proceed to the next step.');
        },

        showNotice: function(type, message) {
            var $notice = $('<div class="notice notice-' + type + ' is-dismissible"><p>' + message + '</p></div>');
            
            // Remove existing notices
            $('.smmcare-onboarding-container .notice').remove();
            
            // Add new notice
            $('.smmcare-onboarding-container').prepend($notice);
            
            // Initialize dismissible notices
            if (typeof wp !== 'undefined' && wp.notices) {
                wp.notices.init();
            }
            
            // Auto-remove after 5 seconds for success notices
            if (type === 'success') {
                setTimeout(function() {
                    $notice.fadeOut(function() {
                        $(this).remove();
                    });
                }, 5000);
            }
        }
    };

    /**
     * Documentation functionality
     */
    var Documentation = {
        init: function() {
            this.setupSmoothScrolling();
        },

        setupSmoothScrolling: function() {
            // Smooth scrolling for documentation links
            $('.smmcare-doc-nav a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                
                var target = $(this.hash);
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 50
                    }, 500);
                }
            });
        }
    };

    /**
     * Dashboard functionality
     */
    var Dashboard = {
        init: function() {
            // Dashboard specific initialization
            this.updateStats();
        },

        updateStats: function() {
            // Placeholder for dynamic stats updates
            // In a full implementation, this would fetch real data via AJAX
        }
    };

    /**
     * Analytics tracking
     */
    var Analytics = {
        init: function() {
            this.trackPageView();
            this.trackInteractions();
        },

        trackPageView: function() {
            // Track which onboarding page/step was viewed
            var page = $('.smmcare-step-content').data('step');
            if (page) {
                this.sendEvent('page_view', {
                    page: page,
                    timestamp: new Date().toISOString()
                });
            }
        },

        trackInteractions: function() {
            // Track button clicks
            $('.smmcare-complete-step, .smmcare-skip-onboarding, .connect-platform').on('click', function() {
                var action = $(this).data('action') || 'button_click';
                var label = $(this).text().trim();
                
                Analytics.sendEvent('interaction', {
                    action: action,
                    label: label,
                    timestamp: new Date().toISOString()
                });
            });
        },

        sendEvent: function(eventType, eventData) {
            // Send analytics event to server
            // This is a placeholder - in production, this could send to Google Analytics,
            // Mixpanel, or your own analytics system
            
            // For now, just log to console in debug mode
            if (window.console && window.console.log) {
                console.log('Analytics Event:', eventType, eventData);
            }
            
            // Store in our database for onboarding analytics
            $.ajax({
                url: smmcareAdmin.ajax_url,
                type: 'POST',
                data: {
                    action: 'smmcare_track_analytics',
                    nonce: smmcareAdmin.nonce,
                    event_type: eventType,
                    event_data: JSON.stringify(eventData)
                },
                // Silent failure - we don't want analytics to disrupt user experience
                error: function() {}
            });
        }
    };

    /**
     * Initialize on document ready
     */
    $(document).ready(function() {
        // Initialize appropriate module based on current page
        if ($('.smmcare-onboarding-container').length) {
            Onboarding.init();
            Analytics.init();
        }
        
        if ($('.smmcare-documentation-content').length) {
            Documentation.init();
        }
        
        if ($('.smmcare-dashboard-wrap').length) {
            Dashboard.init();
        }
    });

})(jQuery);
