<?php
/**
 * @package   Daan\Branding
 * @author    Daan van den Bergh
 * @company   Daan.dev
 * @copyright 2025 Daan van den Bergh
 */

namespace Daan\Branding\Admin;

class Assets {
	/**
	 * Build class.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * @return void
	 */
	private function init() {
		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
	}

	/**
	 * Enqueue the JS required for the upload fields. Only load on Post edit pages.
	 *
	 * @param $hook
	 *
	 * @return void
	 */
	public function enqueue_scripts( $hook ) {
		if ( ! defined( 'EDD_PLUGIN_URL' ) || $hook !== 'post.php' ) {
			return;
		}

		$filemtime = filemtime( DAAN_BRANDING_PLUGIN_DIR . 'assets/js/admin.min.js' );

		wp_enqueue_script( 'daan-featured-downloads-branding', DAAN_BRANDING_PLUGIN_URL . 'assets/js/admin.min.js', [ 'jquery' ], $filemtime );
	}
}
