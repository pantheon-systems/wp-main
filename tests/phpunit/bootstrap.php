<?php
/**
 * Bootstrap PHPUnit
 *
 * @package Pantheon HUD
 */

$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

define( 'WP_TESTS_PHPUNIT_POLYFILLS_PATH', __DIR__ . '/../../vendor/yoast/phpunit-polyfills/phpunitpolyfills-autoload.php' );

require_once $_tests_dir . '/includes/functions.php';
/**
 * Manually Load Plugin.
 */
function _manually_load_plugin() {
	require dirname( __DIR__, 2 ) . '/pantheon.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';
