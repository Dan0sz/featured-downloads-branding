<?php
/**
 * Plugin Name: Daan - Featured Downloads Branding
 * Description: Extends EDD Featured Downloads with a feature to define a Download branding for use in other tools, e.g. auto-generated featured images.
 * Version: 1.0.0
 * Author: Daan from Daan.dev
 * Author URI: https://daan.dev
 * GitHub Plugin URI: Dan0sz/featured-downloads
 * Primary Branch: master
 * License: MIT
 */

define( 'DAAN_BRANDING_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'DAAN_BRANDING_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once __DIR__ . '/vendor/autoload.php';

$daan_branding = new \Daan\Branding\Plugin();