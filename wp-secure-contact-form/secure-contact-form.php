/*
Plugin Name: Secure Contact Form
Description: A secure contact form plugin with reCAPTCHA validation.
Version: 1.0
Author: Harshitha Madasu
*/

// File: wp-secure-contact-form/secure-contact-form.php

<?php
function scf_enqueue_scripts() {
    wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js');
}
add_action('wp_enqueue_scripts', 'scf_enqueue_scripts');

function scf_display_form() {
    $html = '<form action="" method="post">';
    $html .= '<input type="text" name="name" placeholder="Your Name" required><br>';
    $html .= '<input type="email" name="email" placeholder="Your Email" required><br>';
    $html .= '<textarea name="message" placeholder="Your Message" required></textarea><br>';
    $html .= '<div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>';
    $html .= '<input type="submit" name="submit_form" value="Send">';
    $html .= '</form>';
    return $html;
}
add_shortcode('secure_contact_form', 'scf_display_form');
?>
