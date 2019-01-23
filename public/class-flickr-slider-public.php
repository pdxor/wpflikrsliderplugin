<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    flickr_slider
 * @subpackage flickr_slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    flickr_slider
 * @subpackage flickr_slider/public
 * @author     Your Name <email@example.com>
 */
class flickr_slider_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $flickr_slider    The ID of this plugin.
	 */
	private $flickr_slider;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $flickr_slider       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $flickr_slider, $version ) {

		$this->flickr_slider = $flickr_slider;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in flickr_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The flickr_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_style( 'lightslider', plugin_dir_url( __FILE__ ) .  '/css/lightslider.css' );
     wp_enqueue_style( 'flickr', plugin_dir_url( __FILE__ ) .  '/css/flickr.css' );

		 // wp_enqueue_style( 'lightslider', get_stylesheet_directory_uri() . '/css/lightslider.css' );
		 // wp_enqueue_style( 'flickr', get_stylesheet_directory_uri() . '/css/flickr.css' );
		//wp_enqueue_style( $this->flickr_slider, plugin_dir_url( __FILE__ ) . 'css/flickr-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in flickr_slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The flickr_slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		 wp_enqueue_script( 'sliderjs', plugin_dir_url( __FILE__ ) . 'js/lightslider.js', array ( 'jquery' ), 1.1, true);
		 wp_enqueue_script( 'flickrjs', plugin_dir_url( __FILE__ ) . 'js/flickr.js', array ( 'jquery' ), 1.1, true);

	}

}
