<?php
/*
Plugin Name:  Register Theme Directory
Plugin URI:   https://koombea.com/
Description:  Register default theme directory
Version:      1.0.0
Author:       Koombea
Author URI:   https://koombea.com/
License:      MIT License
*/

if (!defined('WP_DEFAULT_THEME')) {
    register_theme_directory(ABSPATH . 'wp-content/themes');
}
