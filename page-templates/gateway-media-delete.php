<?php /* Template Name: Gateway Media Delete */ get_header();?>

<div class="gateway-details">
    <h2>Media Library</h2>
    <div class="media-holder">

        <form id='auto-form' action='<?php echo get_template_directory_uri();?>/js/gateway-media-delete.php' method='post' enctype='multipart/form-data'>
            <input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>" />
        </form>
    </div>
    <div class="clear"></div>
</div>

<script>
    jQuery(function() {
        jQuery('#auto-form').submit();
    });
</script>

<?php get_footer(); ?>