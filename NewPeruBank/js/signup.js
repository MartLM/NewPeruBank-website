jQuery("document").ready(function ($) {
    jQuery(".dni").on("input", function (evt) {
        jQuery(this).val(
            jQuery(this)
                .val()
                .replace(/[^0-9]/g, "")
        );
    });
});