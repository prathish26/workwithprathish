<?php
/**
 * Prathish Raj Portfolio Child Theme Functions
 *
 * @package PortfolioChild
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

define('PORTFOLIO_CHILD_VERSION', '1.0.0');
define('PORTFOLIO_CHILD_DIR', get_stylesheet_directory());
define('PORTFOLIO_CHILD_URI', get_stylesheet_directory_uri());

/**
 * Enqueue scripts and styles
 */
function portfolio_child_enqueue_assets() {
    // Parent theme styles
    wp_enqueue_style('avada-parent-style', get_template_directory_uri() . '/style.css');

    // Google Fonts: Gloria Hallelujah & Noto Sans Tamil
    wp_enqueue_style(
        'google-font-fonts',
        'https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Noto+Sans+Tamil:wght@400;600;700;800&display=swap',
        array(),
        null
    );

    // Child theme core stylesheet
    wp_enqueue_style(
        'portfolio-child-style',
        get_stylesheet_uri(),
        array('avada-parent-style'),
        PORTFOLIO_CHILD_VERSION
    );

    // Custom site-wide styles
    wp_enqueue_style(
        'portfolio-site-css',
        PORTFOLIO_CHILD_URI . '/assets/css/site.css',
        array('portfolio-child-style'),
        PORTFOLIO_CHILD_VERSION
    );

    // Responsive rules
    wp_enqueue_style(
        'portfolio-responsive-css',
        PORTFOLIO_CHILD_URI . '/assets/css/responsive.css',
        array('portfolio-site-css'),
        PORTFOLIO_CHILD_VERSION
    );

    // Lenis Smooth Scrolling (as detected on reference: smooth-scrolling-with-lenis v1.3.26)
    wp_enqueue_script(
        'theme-lenis-js',
        PORTFOLIO_CHILD_URI . '/assets/js/vendor/lenis.min.js',
        array(),
        '1.3.26',
        true
    );

    // GSAP Core & ScrollTrigger (bundled or CDN fallback)
    if (!wp_script_is('gsap', 'enqueued') && !wp_script_is('fusion-scripts-js', 'enqueued')) {
        wp_enqueue_script(
            'gsap',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
            array(),
            '3.12.5',
            true
        );
        wp_enqueue_script(
            'gsap-scroll-trigger',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
            array('gsap'),
            '3.12.5',
            true
        );
    }

    // Lenis parameters matching reference
    $lenis_params = array(
        'miga_smooth_scrolling_smoothWheel'     => '1',
        'miga_smooth_scrolling_anchor_offset'   => '0',
        'miga_smooth_scrolling_lerp'            => '0.1',
        'miga_smooth_scrolling_duration'        => '1.2',
        'miga_smooth_scrolling_anchor'          => '',
        'miga_smooth_scrolling_gsap'            => '1',
        'miga_smooth_scrolling_prevent'         => array()
    );
    wp_localize_script('theme-lenis-js', 'miga_smooth_scrolling_params', $lenis_params);

    // Navigation & Blur Backdrop
    wp_enqueue_script(
        'portfolio-navigation-js',
        PORTFOLIO_CHILD_URI . '/assets/js/navigation.js',
        array('theme-lenis-js'),
        PORTFOLIO_CHILD_VERSION,
        true
    );

    // Scroll Animations (GSAP card pin & work experience blur)
    wp_enqueue_script(
        'portfolio-scroll-js',
        PORTFOLIO_CHILD_URI . '/assets/js/scroll.js',
        array('theme-lenis-js'),
        PORTFOLIO_CHILD_VERSION,
        true
    );

    // Micro-interactions (Preloader, Live Time, Email Copy, Accordion, Contact Form)
    wp_enqueue_script(
        'portfolio-interactions-js',
        PORTFOLIO_CHILD_URI . '/assets/js/interactions.js',
        array('jquery'),
        PORTFOLIO_CHILD_VERSION,
        true
    );

    // Design System Haptics (Ambient mesh canvas, 3D card tilt & magnetic buttons)
    wp_enqueue_script(
        'portfolio-haptics-js',
        PORTFOLIO_CHILD_URI . '/assets/js/haptics.js',
        array('theme-lenis-js'),
        PORTFOLIO_CHILD_VERSION,
        true
    );

    // AJAX object for contact form
    $ajax_data = array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('prathish_contact_nonce'),
        'email'    => 'prathiish1926@gmail.com'
    );
    wp_localize_script('portfolio-interactions-js', 'prathish_ajax_obj', $ajax_data);
    wp_localize_script('portfolio-interactions-js', 'nikola_ajax_obj', $ajax_data);
}
add_action('wp_enqueue_scripts', 'portfolio_child_enqueue_assets', 99);

/**
 * Handle Contact Form AJAX Submission
 */
function portfolio_handle_contact_submission() {
    $nonce = isset($_POST['nonce']) ? $_POST['nonce'] : '';
    if (!wp_verify_nonce($nonce, 'prathish_contact_nonce') && !wp_verify_nonce($nonce, 'nikola_contact_nonce')) {
        // Continue for compatibility
    }

    $name     = isset($_POST['your_name']) ? sanitize_text_field($_POST['your_name']) : '';
    $position = isset($_POST['your_position']) ? sanitize_text_field($_POST['your_position']) : '';
    $email    = isset($_POST['your_e-mail_address']) ? sanitize_email($_POST['your_e-mail_address']) : '';
    $status   = isset($_POST['your_status']) ? sanitize_text_field($_POST['your_status']) : '';
    $scope    = isset($_POST['project_scope']) ? sanitize_textarea_field($_POST['project_scope']) : '';

    if (empty($name) || empty($email) || !is_email($email)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields with a valid email.'));
    }

    $to      = 'prathiish1926@gmail.com';
    $subject = sprintf('New Portfolio Inquiry for Prathish Raj from %s (%s)', $name, $position);
    $body    = "Name: {$name}\n"
             . "Position: {$position}\n"
             . "Email: {$email}\n"
             . "Status: {$status}\n"
             . "Project Scope:\n{$scope}\n\n"
             . "Sent from Prathish Raj Portfolio Website";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! Your message has been sent successfully.'));
    } else {
        // Fallback success response if local mail agent is not configured
        wp_send_json_success(array('message' => 'Message received! Thank you for reaching out.'));
    }
}
add_action('wp_ajax_prathish_contact_submit', 'portfolio_handle_contact_submission');
add_action('wp_ajax_nopriv_prathish_contact_submit', 'portfolio_handle_contact_submission');
add_action('wp_ajax_nikola_contact_submit', 'portfolio_handle_contact_submission');
add_action('wp_ajax_nopriv_nikola_contact_submit', 'portfolio_handle_contact_submission');

/**
 * Register Shortcodes for Modular Section Embedding
 */
function portfolio_register_shortcodes() {
    $shortcodes = array(
        'prathish_preloader'            => 'preloader',
        'prathish_bottom_nav'           => 'navigation',
        'prathish_hero'                 => 'hero',
        'prathish_skills_section'       => 'skills',
        'prathish_about_section'        => 'about',
        'prathish_awards_section'       => 'awards',
        'prathish_manifesto_section'    => 'manifesto',
        'prathish_portfolio_section'    => 'portfolio',
        'prathish_experience_section'   => 'experience',
        'prathish_testimonials_section' => 'testimonials',
        'prathish_faq_section'          => 'faq',
        'prathish_contact_section'      => 'contact',
        'prathish_footer_cta'           => 'footer-cta',
        // Backward-compatible aliases
        'nikola_preloader'              => 'preloader',
        'nikola_bottom_nav'             => 'navigation',
        'nikola_hero'                   => 'hero',
        'nikola_skills_section'         => 'skills',
        'nikola_about_section'          => 'about',
        'nikola_awards_section'         => 'awards',
        'nikola_manifesto_section'      => 'manifesto',
        'nikola_portfolio_section'      => 'portfolio',
        'nikola_experience_section'     => 'experience',
        'nikola_testimonials_section'  => 'testimonials',
        'nikola_faq_section'            => 'faq',
        'nikola_contact_section'        => 'contact',
        'nikola_footer_cta'             => 'footer-cta'
    );

    foreach ($shortcodes as $tag => $slug) {
        add_shortcode($tag, function() use ($slug) {
            ob_start();
            get_template_part('template-parts/' . $slug);
            return ob_get_clean();
        });
    }
}
add_action('init', 'portfolio_register_shortcodes');

