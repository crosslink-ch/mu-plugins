<?php
/**
 * Plugin Name: Remove Deprecation Errors
 * Author: Cross-Link
 */

if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
	error_reporting( E_ALL & ~E_DEPRECATED );
}
