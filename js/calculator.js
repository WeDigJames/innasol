jQuery(document).ready(function () {

    jQuery('#calculate').prop('disabled', true);

    jQuery("#amount").change(function () {
        var max = parseInt(jQuery(this).attr('max'));
        var min = parseInt(jQuery(this).attr('min'));
        if (jQuery(this).val() > max) {
            jQuery(this).val(max);
        } else if (jQuery(this).val() < min) {
            jQuery(this).val(min);
        }
    });

    jQuery('#years').change(function () {

        if (jQuery(this).val() == 'under') {
            jQuery('#term #three').val('32.37');
            jQuery('#term #four').val('25.22');
            jQuery('#term #five').val('20.95');
        } else {
            jQuery('#term #three').val('31.04');
            jQuery('#term #four').val('23.85');
            jQuery('#term #five').val('19.54');
        }
    });

    jQuery('#finance-calculator').on('keyup change paste', 'input, select, textarea', function () {
        var selectIsValid = true;
        jQuery('.select').each(function () {
            if (jQuery(this).val() === '') {
                selectIsValid = false;
                return;
            }
        });
        if (selectIsValid == true) {
            jQuery('#calculate').prop('disabled', false);
        } else {
            jQuery('#calculate').prop('disabled', true);
        }
    });

    jQuery("#calculate").click(function (e) {
        e.preventDefault();
        var amount = jQuery('#amount').val();
        var term = jQuery('#term').val();
        var total = term / 1000 * amount;
        jQuery('#result').html(total.toFixed(2));
    });

});