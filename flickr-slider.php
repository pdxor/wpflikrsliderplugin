<?php

/**
 * flickr CNL slider
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mirandacreative.com
 * @since             1.0.0
 * @package           flickr-slider
 *
 * @wordpress-plugin
 * Plugin Name:       flickr Slider
 * Plugin URI:        http://mirandacreative.com
 * Description:       This plugin slides flickr galleries
 * Version:           1.0.0
 * Author:            Kahlil Calavas
 * Author URI:        http://mirandacreative.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       flickr-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'flickr_slider_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-flickr-slider-activator.php
 */
function activate_flickr_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flickr-slider-activator.php';
	flickr_slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented
 * in includes/class-flickr-slider-deactivator.php
 */
function deactivate_flickr_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flickr-slider-deactivator.php';
	flickr_slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_flickr_slider' );
register_deactivation_hook( __FILE__, 'deactivate_flickr_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-flickr-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_flickr_slider() {

	$plugin = new flickr_slider();
	$plugin->run();

}
//modal for the flickr slider
// function et_header_top_hook_example() {
//
//  echo '<div style="display: none;" class="kcmodal"><div class="loadedcontent"></div><img class="loading" src="http://mcstageridge.wpengine.com/wp-content/themes/Divi-Child/img/ball-load.gif"><span>X</span></div></li>';
// }
//
// add_action( 'et_header_top', 'et_header_top_hook_example' );
//

//shortcode for creating a CNL flickr driven slider ie [include slug="new-titles" list="CNL4"] or any other CNL ID
function flickr_include_file($atts) {
				$a = shortcode_atts( array(
				  'flickrid' => 'NULL',
				  'photosetid' => 'NULL'
				 ), $atts );

				$flickrid = $a['flickrid'];
				$photosetid = $a['photosetid'];
				set_query_var('flickrid', $flickrid);
				set_query_var('photosetid', $photosetid);
				ob_start();
				include( 'public/flickr-gallery.php');
				$output = ob_get_contents();
				ob_end_clean();
				return $output;
 }
 add_shortcode('flickr', 'flickr_include_file');

run_flickr_slider();
