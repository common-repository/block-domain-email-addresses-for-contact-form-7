<?php
/*
Plugin Name:	Block domain email addresses for Contact Form 7
Plugin URI:		https://apasionados.es/#utm_source=wpadmin&utm_medium=plugin&utm_campaign=block-domain-email-addresses-for-contact-form-7
Description:	Blocks spammers sending contact forms using an email address from the domain of the WordPress installation in Contact Form 7.
Version:		1.0.1
Author:			Apasionados, Apasionados del Marketing
Author URI:		https://apasionados.es
Text Domain:    block-domain-email-addresses-for-contact-form-7
Domain Path:    /languages
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt
This plugin is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.
This plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with This plugin. If not, see {URI to Plugin License}.
*/

function apa_blockemaildomaincf7_f_init() {
	load_plugin_textdomain( 'block-domain-email-addresses-for-contact-form-7', FALSE, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action('plugins_loaded', 'apa_blockemaildomaincf7_f_init');

function apa_blocked_email_domain($email) {
	$url_parts = parse_url( home_url() );
	if ( $url_parts && isset( $url_parts['host'] ) ) {
		$current_domain = '@' . $url_parts['host'];
	}
	$blocked = array($current_domain); // You can add more blocked domain in the array. For example: "@gmail.com", "@hotmail.com", "@yahoo.com", "@msn.com", "@live.com", "@outlook.com", "@microsoft.com"
	$email = strstr($email, '@');
	if(in_array($email, $blocked))
		return false;
	else
		return true;
}
function apa_custom_email_validation_filter($result, $tag) {
	$name = $tag['name'];
		if($name == 'your-email') { // Only apply to fields with the form field name of "your-email"
			$the_value = sanitize_email( $_POST[$name] );
			if(!apa_blocked_email_domain($the_value)){
				$result['valid'] = false;
				$result->invalidate( $tag, __('Please use an email address that isn\'t hosted on this domain.', 'block-domain-email-addresses-for-contact-form-7' ) );
			};
		};
    return $result;
}
add_filter('wpcf7_validate_email','apa_custom_email_validation_filter', 10, 2); // Email field
add_filter('wpcf7_validate_email*', 'apa_custom_email_validation_filter', 10, 2); // Required Email field
