<?php
/*
Plugin Name:  Disallow Indexing
Plugin URI:   https://koombea.com/
Description:  Disallow indexing of your site on non-production environments.
Version:      1.0.0
Author:       Koombea
Author URI:   https://koombea.com/
License:      MIT License
*/

if (WP_ENV !== 'production' && !is_admin()) {
    add_action('pre_option_blog_public', '__return_zero');
}
