=== Block domain email addresses for Contact Form 7 ===
Contributors: apasionados
Donate link: https://apasionados.es/
Author URI: https://apasionados.es/
Tags: contact, contact form, email, form, block email
Requires at least: 4.0.1
Tested up to: 6.3
Requires PHP: 7.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Blocks spammers sending contact forms using an email address from the domain of the WordPress installation in Contact Form 7.

== Description ==

This plugin blocks spammers that try to send a contact form with an email address from the domain of the WordPress installation in Contact Form 7.

We have found more and more spammers that use an email address from the domain where the WordPress site is hosted in the form. We don't want to receive contact forms with email addresses hosted on the domain. **For example if the Contact Form is hosted on domain.com they use info@domain.com as the email address in the form to try to pass spam validations.**

> The plugin filters the email address in the Contact Form 7 field: `your-email`. If you are giving the email address another name it will not work correctly, so please use the standard `your-email` name.

**Please only activate this plugin if you know what you're doing**.

= What ideas is this plugin based on? =

None. We needed a fast solution to block contact form submissions using dummy email address on the domain where the form is hosted.

= System requirements =

PHP version 7.1 or greater.
We require 7.1 or higher because we believe that everybody should be running a modern PHP version. When releasing this plugin [Wordpress recommends PHP 7.4 or higher](https://wordpress.org/about/requirements/).

= How to get this plugin in your Language! =
The first release is avaliable in English and Spanish. In the "languages" folder we have included the necessary files to translate this plugin.

If you would like the plugin in your language and you're good at translating, please use the [native WordPress Translation](https://translate.wordpress.org/projects/wp-plugins/block-domain-email-addresses-for-contact-form-7/) functionality.

New to Translating a plugin? First read through the [Translator Handbook](https://make.wordpress.org/polyglots/handbook/tools/glotpress-translate-wordpress-org/), then select your locale at [Translating WordPress](https://translate.wordpress.org/) and finally go to the [translation page for this plugin](https://translate.wordpress.org/projects/wp-plugins/block-domain-email-addresses-for-contact-form-7/) to translate it.

= Further Reading =
You can access the description of the plugin in Spanish at: [Block domain email addresses for Contact Form 7 en espa&ntilde;ol](https://apasionados.es/blog/).

== Screenshots ==

1. Example of a blocked contact form.

== Installation ==

1. First you will have to upload the plugin to the `/wp-content/plugins/` folder.
2. Then activate the plugin in the plugin panel. There are no settings.

== Frequently Asked Questions ==

= Why did you make this plugin?  =
We created this plugin to be able to stop spammers from using a email address from the domain where the WordPress site is hosted.

= Does Block domain email addresses for Contact Form 7 make changes to the database? =
No. The plugin doesn't write any options or settings to the database.

= How can I check out if the plugin works for me? =
Install and activate. Try to submit a Contact Form filling in an email address of the domain.

= How can I remove Block domain email addresses for Contact Form 7? =
You can simply activate, deactivate or delete it in your plugin management section. There are no options stored in the database so you can delete it also via FTP and everything will be removed.

= Are there any known incompatibilities? =
Please don't use it with *WordPress MultiSite*, as it has not been tested.

= Are there any server requirements? =
Yes. The plugin requires a PHP version 7.1 or higher and we recommend using PHP version 7.4 or higher. The plugin has been tested with PHP up to 7.4. When releasing this plugin [Wordpress recommends PHP 7.4 or higher](https://wordpress.org/about/requirements/).

= Do you make use of Block domain email addresses for Contact Form 7 yourself? = 
Of course we do. That's why we created it. ;-)

== Changelog ==

= 1.0.1 (01/09/2020) =
* Sanitize email address

= 1.0.0 (27/08/2020) =
* First official release.

== Upgrade Notice ==

= 1.0.0 =

* First official release.

== Contact ==

For further information please send us an [email](https://apasionados.es/contacto/index.php?desde=wordpress-org-block-domain-email-addresses-for-cf7).