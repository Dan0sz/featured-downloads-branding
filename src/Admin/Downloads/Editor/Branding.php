<?php
/**
 *
 */

namespace Daan\Branding\Admin\Downloads\Editor;

use EDD\Admin\Downloads\Editor\Section;

class Branding extends Section {
	const BRAND                    = '_edd_featured_download_brand';

	const LOGO_NORMAL              = '_edd_featured_download_logo_normal';

	const LOGO_LIGHT               = '_edd_featured_download_logo_light';

	const ICON                     = '_edd_featured_download_icon';

	const TAGLINE                  = '_edd_featured_download_tagline';

	const BUTTON_TEXT              = '_edd_featured_download_button_text';

	const TESTIMONIAL_TITLE        = '_edd_featured_download_testimonial_title';

	const TESTIMONIAL              = '_edd_featured_download_testimonial';

	const TESTIMONIAL_AUTHOR       = '_edd_featured_download_testimonial_author';

	const TESTIMONIAL_AUTHOR_IMAGE = '_edd_featured_download_testimonial_author_image';

	/**
	 * Section ID.
	 *
	 * @since 3.3.6
	 * @var string
	 */
	protected $id = 'branding';

	/**
	 * Section priority.
	 *
	 * @since 3.3.6
	 * @var int
	 */
	protected $priority = 1;

	/**
	 * Section icon.
	 *
	 * @since 3.3.6
	 * @var string
	 */
	protected $icon = 'admin-appearance';

	/**
	 * Get the section label.
	 *
	 * @since 3.3.6
	 * @return string
	 */
	public function get_label() {
		return __( 'Branding', 'daan-featured-downloads-branding' );
	}

	/**
	 * Render the section.
	 *
	 * @since 3.3.6
	 * @return void
	 */
	public function render() {
		$download = $this->item;

		if ( ! current_user_can( 'edit_product', $download->ID ) ) {
			return;
		}
		?>
        <div class="edd-form-group">
            <label for="<?php echo self::BRAND; ?>" class="edd-form-group__label">
				<?php echo esc_html( __( 'Brand:', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$select = new \EDD\HTML\Select(
					[
						'options'          => $this->get_brands(),
						'name'             => self::BRAND,
						'id'               => self::BRAND,
						'selected'         => get_post_meta( $download->ID, self::BRAND, true ),
						'show_option_all'  => false,
						'show_option_none' => false,
						'class'            => 'edd-form-group__input',
						'data'             => [],
					]
				);
				$select->output();
				?>
            </div>
        </div>
        <div class="edd-form-group">
            <label for="<?php echo self::LOGO_NORMAL; ?>" class="edd-form-group__label">
				<?php echo esc_html( __( 'Logo (normal):', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$logo = new \EDD\HTML\Upload(
					[
						'id'    => self::LOGO_NORMAL,
						'name'  => self::LOGO_NORMAL,
						'value' => get_post_meta( $download->ID, self::LOGO_NORMAL, true ),
					]
				);
				$logo->output();
				?>
            </div>
            <label for="<?php echo self::LOGO_LIGHT; ?>" class="edd-form-group__label">
				<?php echo esc_html( __( 'Logo (light):', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$logo = new \EDD\HTML\Upload(
					[
						'id'    => self::LOGO_LIGHT,
						'name'  => self::LOGO_LIGHT,
						'value' => get_post_meta( $download->ID, self::LOGO_LIGHT, true ),
					]
				);
				$logo->output();
				?>
            </div>
            <label for="<?php echo self::ICON; ?>" class="edd-form-group__label">
				<?php echo esc_html( __( 'Icon:', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$logo = new \EDD\HTML\Upload(
					[
						'id'    => self::ICON,
						'name'  => self::ICON,
						'value' => get_post_meta( $download->ID, self::ICON, true ),
					]
				);
				$logo->output();
				?>
            </div>
        </div>
        <div class="edd-form-group">
            <label class="edd-form-group__label">
				<?php echo esc_html( __( 'Copy:', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$copy = new \EDD\HTML\Text(
					[
						'label' => __( 'Header Tagline', 'daan-featured-downloads-branding' ),
						'id'    => self::TAGLINE,
						'name'  => self::TAGLINE,
						'value' => get_post_meta( $download->ID, self::TAGLINE, true ),
					]
				);
				$copy->output();
				?>
            </div>
            <div class="edd-form-group__control">
				<?php
				$copy = new \EDD\HTML\Text(
					[
						'label' => __( 'Button Text', 'daan-featured-downloads-branding' ),
						'id'    => self::BUTTON_TEXT,
						'name'  => self::BUTTON_TEXT,
						'value' => get_post_meta( $download->ID, self::BUTTON_TEXT, true ),
					]
				);
				$copy->output();
				?>
            </div>
            <div class="edd-form-group__control">
				<?php
				$copy = new \EDD\HTML\Text(
					[
						'label' => __( 'Testimonial Title', 'daan-featured-downloads-branding' ),
						'id'    => self::TESTIMONIAL_TITLE,
						'name'  => self::TESTIMONIAL_TITLE,
						'value' => get_post_meta( $download->ID, self::TESTIMONIAL_TITLE, true ),
					]
				);
				$copy->output();
				?>
            </div>
            <div class="edd-form-group__control">
				<?php
				$copy = new \EDD\HTML\Textarea(
					[
						'label' => __( 'Testimonial Content', 'daan-featured-downloads-branding' ),
						'id'    => self::TESTIMONIAL,
						'name'  => self::TESTIMONIAL,
						'value' => get_post_meta( $download->ID, self::TESTIMONIAL, true ),
					]
				);
				$copy->output();
				?>
            </div>
            <div class="edd-form-group__control">
				<?php
				$copy = new \EDD\HTML\Text(
					[
						'label' => __( 'Testimonial Author', 'daan-featured-downloads-branding' ),
						'id'    => self::TESTIMONIAL_AUTHOR,
						'name'  => self::TESTIMONIAL_AUTHOR,
						'value' => get_post_meta( $download->ID, self::TESTIMONIAL_AUTHOR, true ),
					]
				);
				$copy->output();
				?>
            </div>
            <label for="<?php echo self::TESTIMONIAL_AUTHOR_IMAGE; ?>" class="edd-form-group__label">
				<?php echo esc_html( __( 'Author Image:', 'daan-featured-downloads-branding' ) ); ?>
            </label>
            <div class="edd-form-group__control">
				<?php
				$logo = new \EDD\HTML\Upload(
					[
						'id'    => self::TESTIMONIAL_AUTHOR_IMAGE,
						'name'  => self::TESTIMONIAL_AUTHOR_IMAGE,
						'value' => get_post_meta( $download->ID, self::TESTIMONIAL_AUTHOR_IMAGE, true ),
					]
				);
				$logo->output();
				?>
            </div>
        </div>
		<?php
	}

	/**
	 * Get the available brands for this site.
	 *
	 * @return string[]
	 */
	private function get_brands() {
		return apply_filters(
			'daan_featured_downloads_brands',
			[
				''        => 'Daan.dev (default)',
				'omgf'    => 'OMGF',
				'gdpress' => 'GDPRess',
				'caos'    => 'CAOS',
			]
		);
	}
}
