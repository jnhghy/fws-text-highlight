<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://stackoverflow.com/users/1325730/jnhghy-jantea-alexandru
 * @since      1.0.0
 *
 * @package    Fws_Text_Highlight
 * @subpackage Fws_Text_Highlight/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fws_Text_Highlight
 * @subpackage Fws_Text_Highlight/includes
 * @author     Alexandru Jantea <jnhghy@gmail.com>
 */
class Fws_Text_Highlight_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fws-text-highlight',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
