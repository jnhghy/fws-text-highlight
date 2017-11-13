<?php

/**
 * Defines shortcodes registers and callbacks
 *
 *
 * @link       https://stackoverflow.com/users/1325730/jnhghy-jantea-alexandru
 * @since      1.0.0
 *
 * @package    Fws_Text_Highlight
 * @subpackage Fws_Text_Highlight/includes
 */

/**
 * Defines shortcodes registers and callbacks.
 *
 *
 * @since      1.0.0
 * @package    Fws_Text_Highlight
 * @subpackage Fws_Text_Highlight/includes
 * @author     Alexandru Jantea <jnhghy@gmail.com>
 */
class Fws_Text_Highlight_Shortcodes {

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
	 * The shortcode instance attributes.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      array    $args    The current shortcode instanc attributes.
	 */
	protected $args;

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
	 * Load the plugin shortcodes
	 *
	 * @since    1.0.0
	 */

	public function load_plugin_shortcodes() {
		add_shortcode( 'fwsth',  array( $this, 'fwsth_func' ) );
	}

	/**
	 * Registers and runs the code for the fwsth_func
	 *
	 * @since 1.0.0
	 */

	public function fwsth_func( $atts, $content = null ) {
	    $args = shortcode_atts( array(
	        'bg' => 'rgba(255,0,0,1)',
	        'delay' => '2000',
	    ), $atts );

	    return "<span class=\"fws-text-to-highlight\" data-bg=\"" . $args['bg'] . "\" data-delay=\"" . $args['delay'] . "\">" . do_shortcode($content) . "</span>";
	}

}