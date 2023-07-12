jQuery(document).ready(function () {

    jQuery('#gateway-users').DataTable();

    jQuery('.gateway-media-cats a').click(function (e) {
        var $class = jQuery(this).attr('class');
        // e.preventDefault();
        // jQuery('.gateway-media-cats li').removeClass('active');
        // jQuery(this).parent('li').addClass('active');
        // jQuery('.gateway-media-list li').hide();
        // jQuery('.gateway-media-list li.' + $class).fadeIn(300);
    });

    jQuery('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });

});

jQuery(document).ready(function () {

    oTable = jQuery('#gateway-users-2').DataTable();

    jQuery('#new-table-holder').hide();

    jQuery('#myInputTextField').keyup(function () {
        jQuery('#category_1').prop('selectedIndex', 0);
        jQuery('#category_2').prop('selectedIndex', 0);
        jQuery('#category_3').prop('selectedIndex', 0);
        jQuery('#new-table-intro').hide();
        jQuery('#new-table-holder').fadeIn();
        oTable.search(jQuery(this).val()).draw();
    });

    jQuery("#category_2").chained("#category_1");
    jQuery("#category_3").chained("#category_2");

    var table = jQuery('#gateway-users-2').DataTable();

    jQuery('.category-search select').on('change', function () {
        var c1 = jQuery('#category_1').find(':selected').text();
        var c2 = jQuery('#category_2').find(':selected').text();
        var c3 = jQuery('#category_3').find(':selected').text();
        var all = c1 + ' ' + c2 + ' ' + c3;
        console.log(all);
        jQuery('#myInputTextField').val(all);
        jQuery('#new-table-intro').hide();
        jQuery('#new-table-holder').fadeIn();
        oTable.search(jQuery('#myInputTextField').val()).draw();
    });

});