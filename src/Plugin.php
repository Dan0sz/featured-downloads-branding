<?php
/**
 * @package   Daan\Branding
 * @author    Daan van den Bergh
 * @company   Daan.dev
 * @copyright 2025 Daan van den Bergh
 */

namespace Daan\Branding;

class Plugin {
	public function __construct() {
		$this->init();
	}

	private function init() {
		if ( is_admin() ) {
			new Admin\Assets();
			new Admin\Downloads\Metabox();
			new Admin\Downloads\Editor\Sections();
		}
	}
}
