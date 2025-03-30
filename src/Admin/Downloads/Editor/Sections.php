<?php
/**
 *
 */

namespace Daan\Branding\Admin\Downloads\Editor;

class Sections {
	public function __construct() {
		add_filter( 'edd_download_details_sections', [ $this, 'add_branding_section' ] );
	}

	public function add_branding_section( $sections ) {
		$sections[ 'branding' ] = Branding::class;

		return $sections;
	}
}
