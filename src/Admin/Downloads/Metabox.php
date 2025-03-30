<?php
/**
 * @package   Daan\Branding
 * @author    Daan van den Bergh
 * @company   Daan.dev
 * @copyright 2025 Daan van den Bergh
 */

namespace Daan\Branding\Admin\Downloads;

class Metabox {
	const BRAND       = 'edd_featured_download_brand';

	const LOGO_NORMAL = 'edd_featured_download_logo_normal';

	const LOGO_LIGHT  = 'edd_featured_download_logo_light';

	const ICON        = 'edd_featured_download_icon';

	const TAGLINE     = 'edd_featured_download_tagline';

	const BUTTON_TEXT = 'edd_featured_download_button_text';

	public function __construct() {
		$this->init();
	}

	private function init() {
		add_filter( 'edd_metabox_fields_save', [ $this, 'add_fields' ] );
		add_action( 'edd_meta_box_settings_fields', [ $this, 'render_row' ], 1 );
	}

	public function add_fields( $fields ) {
		$to_save = [];

		return array_merge( $fields, $to_save );
	}

	public function render_row( $post_id ) {
		if ( ! current_user_can( 'manage_shop_settings' ) ) {
			return;
		}

		$brand       = get_post_meta( $post_id, self::BRAND, true );
		$logo_normal = get_post_meta( $post_id, self::LOGO_NORMAL, true );
		$logo_light  = get_post_meta( $post_id, self::LOGO_LIGHT, true );
		$icon        = get_post_meta( $post_id, self::ICON, true );
		$tagline     = get_post_meta( $post_id, self::TAGLINE, true );
		$button_text = get_post_meta( $post_id, self::BUTTON_TEXT, true );
		?>
        <div class="edd-metabox__featured-downloads-branding">
            <h3><?php _e( 'Branding' ); ?></h3>
        </div>
		<?php
	}
}
