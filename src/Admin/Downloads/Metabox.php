<?php
/**
 * @package   Daan\Branding
 * @author    Daan van den Bergh
 * @company   Daan.dev
 * @copyright 2025 Daan van den Bergh
 */

namespace Daan\Branding\Admin\Downloads;

use Daan\Branding\Admin\Downloads\Editor\Branding;

class Metabox {
	/**
	 * Build class.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Action and filter hooks.
	 *
	 * @return void
	 */
	private function init() {
		add_filter( 'edd_metabox_fields_save', [ $this, 'add_fields' ] );
	}

	/**
	 * Add fields to POST for saving.
	 *
	 * @param $fields
	 *
	 * @return array
	 */
	public function add_fields( $fields ) {
		$to_save = [
			Branding::BRAND,
			Branding::LOGO_NORMAL,
			Branding::LOGO_LIGHT,
			Branding::ICON,
			Branding::TAGLINE,
			Branding::BUTTON_TEXT,
		];

		return array_merge( $fields, $to_save );
	}
}
