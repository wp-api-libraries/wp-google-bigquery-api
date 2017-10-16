<?php
/**
 * WP Google BigQuery API
 *
 * @link https://cloud.google.com/bigquery/docs/reference/rest/v2/
 * @package WP-API-Libraries\WP-BigQuery-API
 */
/*
* Plugin Name: WP Google BigQuery API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-bigquery-api
* Description: Perform API requests to Google BigQuery in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-bigquery-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleBigQueryAPI' ) ) {
	
	/**
	 * GoogleBigQueryAPI Class.
	 */
	class GoogleBigQueryAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://www.googleapis.com/discovery/v1/apis/bigquery/v2/rest';

		/* DATASETS. */
		
		public function delete_dataset() {
			
		}
		
		public function get_dataset() {
			
		}
		
		public function insert_dataset() {
			
		}
		
		public function list_dataset() {
			
		}
		
		public function patch_dataset() {
			
		}
		
		public function update_dataset() {
			
		}
		
		/* JOBS. */
		
		/* PROJECTS. */
		
		/* TABLEDATA. */
		
		/* TABLES. */

	}
	
}