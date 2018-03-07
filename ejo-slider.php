<?php
/**
 * Plugin Name:         Ejo Slider
 * Plugin URI:          http://github.com/erikjoling/ejo-slider
 * Description:         A WordPress slider plugin
 * Version:             0.1.1
 * Author:              Erik Joling
 * Author URI:          https://www.ejoweb.nl/
 * Text Domain:         ejo-slider
 * Domain Path:         /languages
 *
 * GitHub Plugin URI:   https://github.com/erikjoling/ejo-slider
 * GitHub Branch:       master
 *
 * Minimum PHP version: 5.3.0
 */

/**
 * Singleton
 */
final class EJO_Slider {
    
    // Version number
    public $version = '0.1.1';

    // Store the slug
    public $slug = 'ejo-slider';

    /**
     * Framework directory path with trailing slash.
     *
     * @access public
     * @var    string
     */
    public $dir = '';

    /**
     * Framework directory URI with trailing slash.
     *
     * @access public
     * @var    string
     */
    public $uri = '';

    /**
     * Returns the instance.
     *
     * @access public
     * @return object
     */
    public static function get_instance() {

        static $instance = null;

        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup();
            $instance->includes();
            $instance->setup_actions();
        }

        return $instance;
    }

    /**
     * Clone method.
     *
     * @access private
     * @return void
     */
    private function __clone() {}
    
    /**
     * Constructor method.
     *
     * @access private
     * @return void
     */
    private function __construct() {}

    /**
     * Sets up the framework.
     *
     * @access private
     * @return void
     */
    private function setup() {

        $this->dir = plugin_dir_path( __FILE__ );
        $this->uri = plugin_dir_url( __FILE__ );

        /* Load the translation for the plugin */
        load_plugin_textdomain( 'ejo-slider', false, 'ejo-slider/languages' );
    }

    /**
     * Loads include and admin files for the plugin.
     */
    private function includes() {
        require_once( $this->dir . 'includes/register-post-type.php' );
    }

    /**
     * Sets up the framework.
     *
     * @access private
     * @return void
     */
    private function setup_actions() {
        
        
    }
}

/**
 * Gets the instance of the `EJO_Slider` class.  This function is useful for quickly grabbing data
 * used throughout the framework.
 *
 * @access public
 * @return object
 */
function ejo_slider() {
    return EJO_Slider::get_instance();
}

// Startup!
ejo_slider();