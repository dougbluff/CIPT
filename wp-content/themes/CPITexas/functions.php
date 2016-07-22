<?php
/*
Theme Name: CPITexas
Theme URI: http://douglasbluff.com
Author: Douglas Bluff
Author URI: http://douglasbluff.com
Description: This theme is designed to showcase the many benefits of working with Consolidated Insurance Partners.
Template: twentyfifteen
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: Wood, Paper, Classic, Top-Nav
Text Domain: CPITexas

This theme, like WordPress, is licensed under the GPL.
*/
add_action( 'wp_enqueue_scripts', 'CPITexas_enqueue_styles' );

function CPITexas_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function webname()
{
	$fullsite = get_permalink();
	$find = array( 'http://', 'https://', 'www.', '/', '.com', '.org', '.net' );
	$replace = '';
	$output = str_replace( $find, $replace, $fullsite );
	echo ucfirst($output);
}

?>