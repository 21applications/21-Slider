<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://21applications.com
 * @since      1.0.0
 *
 * @package    A21_Slider
 * @subpackage A21_Slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    A21_Slider
 * @subpackage A21_Slider/public
 * @author     Roger Coathup <roger@21applications.com>
 */
class A21_Slider_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
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
		 * defined in A21_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The A21_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'flickity-css', plugin_dir_url( __FILE__ ) . '../../bower_components/flickity/dist/flickity.css' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/a21-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * Enqueue Flickity and initialise
		 * @todo Move to solution where script is registered but only enqueued as necessary
		 */

		wp_enqueue_script( 'flickity-js', plugin_dir_url( __FILE__ ) . '../../bower_components/flickity/dist/flickity.pkgd.js', array( 'jquery'), '2.0', true );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/a21-slider-public.js', array( 'flickity-js' ), $this->version, true );

	}

}
