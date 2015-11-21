jQuery(function ($) {
    $("a.set-img").click(function (e) {
        var $t = $(this),
            $target = $t.data('target');
        e.preventDefault();
        var pm_custom_uploader = wp.media.frames.file_frame = wp.media({
                title: "Select Image",
                button: {text: "Select"},
                multiple: false
            }
        );
        pm_custom_uploader.on('select', function () {
                var attachment = pm_custom_uploader.state().get('selection').first().toJSON();
                jQuery('#' + $target).val(attachment.id);
                jQuery('#' + $target + '_preview').attr('src', attachment.url);
            }
        );
        pm_custom_uploader.open();
    });
});