/**
 * This is a stripped down version of easy-digital-downloads/assets/js/admin/settings/index.js
 */
const Daan_Branding_Admin = {
    init: function () {
        this.general();
    },

    general: function () {
        var file_frame;
        window.formfield = '';

        jQuery(document.body).on('click', '.edd_settings_upload_button', function (e) {
            e.preventDefault();

            const button = jQuery(this);
            window.formfield = jQuery(button.data('input'));

            // If the media frame already exists, reopen it.
            if (file_frame) {
                //file_frame.uploader.uploader.param( 'post_id', set_to_post_id );
                file_frame.open();
                return;
            }

            // Create the media frame.
            file_frame = wp.media.frames.file_frame = wp.media({
                title: button.data('uploader_title'),
                library: {type: 'image'},
                button: {text: button.data('uploader_button_text')},
                multiple: false,
            });

            file_frame.on('menu:render:default', function (view) {
                // Store our views in an object.
                const views = {};

                // Unset default menu items
                view.unset('library-separator');
                view.unset('gallery');
                view.unset('featured-image');
                view.unset('embed');
                view.unset('playlist');
                view.unset('video-playlist');

                // Initialize the views in our view object.
                view.set(views);
            });

            // When an image is selected, run a callback.
            file_frame.on('select', function () {
                const selection = file_frame.state().get('selection');
                selection.each(function (attachment, index) {
                    attachment = attachment.toJSON();
                    window.formfield.val(attachment.url);
                });
            });

            // Finally, open the modal
            file_frame.open();
        });
    },
};

jQuery(document).ready(function ($) {
    Daan_Branding_Admin.init();
});
