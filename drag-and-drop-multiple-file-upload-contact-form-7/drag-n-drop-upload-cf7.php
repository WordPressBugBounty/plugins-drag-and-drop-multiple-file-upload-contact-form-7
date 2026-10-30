<?php

	/**
	* Plugin Name: Drag and Drop Multiple File Upload for Contact Form 7
	* Plugin URI: http://codedropz.com/
	* Description: This simple plugin create Drag & Drop or choose Multiple File upload in your Confact Form 7 Forms.
	* Text Domain: drag-and-drop-multiple-file-upload-contact-form-7
	* Domain Path: /languages
	* Version: 1.4.1
	* Author: Glen Don L. Mongaya
	* Author URI: http://codedropz.com
	* License: GPL2
	**/

	/**  This protect the plugin file from direct access */
	if ( ! defined( 'WPINC' ) ) {
		die;
	}

	/** Set plugin constant to true **/
	define( 'dnd_upload_cf7', true );

	/**  Define plugin Version */
	define( 'dnd_upload_cf7_version', '1.4.1' );

	/**  Define constant Plugin Directories  */
	define( 'dnd_upload_cf7_directory', untrailingslashit( dirname( __FILE__ ) ) );

	/* Define Custom Upload Directory */
	if ( ! defined('wpcf7_dnd_dir') ) {
		define( 'wpcf7_dnd_dir', 'wp_dndcf7_uploads' );
	}

	// Activation setup cron.
	register_activation_hook( __FILE__, function () {
		if ( ! wp_next_scheduled( 'dnd_cf7_daily_event' ) ) {
			wp_schedule_event( time(), 'hourly', 'dnd_cf7_daily_event' );
		}
	});

	// Deactivate clear cron.
	register_deactivation_hook( __FILE__, function () {
		wp_clear_scheduled_hook( 'dnd_cf7_daily_event' );
	});

	// require plugin core file
	require_once( dnd_upload_cf7_directory .'/inc/dnd-upload-cf7.php' );

	// Run this script on early action hook - check if cron is scheduled.
	add_action( 'init', 'dnd_upload_cf7_cron' );

	function dnd_upload_cf7_cron() {
		if ( ! wp_next_scheduled( 'dnd_cf7_daily_event' ) ) {
			wp_schedule_event( time(), 'hourly', 'dnd_cf7_daily_event' );
		}
	}

	// Migrate old settings
	add_action( 'admin_init', 'dnd_upload_cf7_migrate' );

	function dnd_upload_cf7_migrate() {
		if ( 'yes' !== get_option( 'drag_n_drop_disable_auto_delete' ) ) {
			return;
		}

		// Get current/new settings
		$settings = get_option( 'dndmfu_settings', array() );

		// Update auto delete settings and set to yes.
		$settings['drag_n_drop_disable_auto_delete'] = 'yes';

		// Update new settings and delete old one.
		update_option( 'dndmfu_settings', $settings );
		delete_option( 'drag_n_drop_disable_auto_delete' );
	}