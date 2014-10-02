<?php

// https://api.wordpress.org/secret-key/1.1/salt/

if ( ! isset( $_SERVER['HTTP_HOST'] ) ) {
	$_SERVER['HTTP_HOST'] = 'wpgwinnett.dev';
}

if ( preg_match( '#\.dev$#', $_SERVER['HTTP_HOST'] ) ) {
	define( 'APP_ENV', 'dev' );
} else {
	define( 'APP_ENV', 'production' );
}

require( dirname( __DIR__ ) . '/wp-config-' . APP_ENV . '.php' );

if ( ! defined( 'APP_DOMAIN' ) ) {
	define( 'APP_DOMAIN', 'wpgwinnett.com' );
}

define( 'WP_HOME', 'http://' . APP_DOMAIN );
define( 'WP_SITEURL', 'http://' . APP_DOMAIN . '/cms' );

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . APP_DOMAIN . '/content' );

if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'localhost' );
}

if ( ! defined( 'DB_CHARSET' ) ) {
	define( 'DB_CHARSET', 'utf8' );
}

if ( ! defined( 'DB_COLLATE' ) ) {
	define( 'DB_COLLATE', '' );
}

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
	define( 'DISALLOW_FILE_EDIT', true );
}

if ( ! isset( $table_prefix ) ) {
	$table_prefix = 'wp_';
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/cms/' );
}

require_once( ABSPATH . 'wp-settings.php' );