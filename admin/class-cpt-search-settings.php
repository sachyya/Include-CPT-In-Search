<?php

/**
 * The settings of the plugin.
 *
 * @link       http://devinvinson.com
 * @since      1.0.0
 *
 * @package    Cpt_Searcho_Plugin
 * @subpackage Cpt_Searcho_Plugin/admin
 */

/**
 * Class WordPress_Plugin_Template_Settings
 *
 */
class Cpt_Search_Admin_Settings {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * This function introduces the theme options into the 'Appearance' menu and into a top-level
	 * 'WPPB Demo' menu.
	 */
	public function setup_plugin_options_page() {

		//Add the menu to the Plugins set of menu items
		add_options_page(
			'Include CPT In Search', 					// The title to be displayed in the browser window for this page.
			'Include CPT In Search',					// The text to be displayed for this menu item
			'manage_options',					// Which type of users can see this menu item
			'cpt_search',			// The unique ID - that is, the slug - for this menu item
			array( $this, 'render_plugin_settings')				// The name of the function to call when rendering this menu's page
		);

	}

	/**
	 * Renders a simple page to display for the theme menu defined above.
	 */
	public function render_plugin_settings() {
		register_setting(
            'tp_education_option_group', // Option group
            'tp_education_setting_option', // Option name
            array( $this, 'tp_education_sanitize' ) // Sanitize
        );

        add_settings_section(
            'tp_education_settings_id', // ID
            __( 'TP Education Settings', 'tp-education' ), // Title
            array( $this, 'tp_education_print_section_info' ), // Callback
            'my-setting-admin' // Page
        );  
	}
}
		