<?php
/**
 * Plugin Name:     Dbvv Vk Reviews Optimizer
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     dbvv-vk-reviews-optimizer
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Dbvv_Vk_Reviews_Optimizer
 */

require plugin_dir_path(__FILE__) . 'inc/cpt.php';
require plugin_dir_path(__FILE__) . 'inc/api.php';
require plugin_dir_path(__FILE__) . 'inc/shortcode.php';

add_action('wp_enqueue_scripts', 'dbvv_vk_reviews_optimizer_enqueue');
function dbvv_vk_reviews_optimizer_enqueue() {
	wp_enqueue_script('vk_r', plugin_dir_url(__FILE__) . 'assets/frontend.js', ['jquery']);
	wp_localize_script('vk_r', 'vk_r', [
		'url' => get_rest_url(0, 'vk-r/v1/get_code'),
	]);
}
