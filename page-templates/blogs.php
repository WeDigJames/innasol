<?php /* Template Name: Blogs */ get_header();?>

<div class="blogPage">
    <div class="pageHeader" style="background-image: url('<?php if (get_field('banner_footer_image')) {; $bg_image = get_field('banner_footer_image');
    $size = 'slider'; ?><?php echo wp_get_attachment_image_url( $bg_image, $size ); }; ?>')">
        <div class="container">
            <div class="t-heading--xlarge t-heading--white c-legend__title"><?php the_title();?></div>
            <div class="shard">
                <div class="angle"></div>
            </div>
            <div class="square square-left"></div>
            <div class="square square-top-right"></div>
        </div>
    </div>
    <div id="viewPosts"></div>
        <div class="posts">
            <div class="container">

                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>

                <?php echo do_shortcode('[wpv-view name="blogs"]'); ?>
                        
            </div>


            <div class="square square-top-left"></div>
            <div class="square square-bottom-left"></div>
            <div class="square square-bottom-right"></div>
            <div class="square square-mid-left"></div>
        </div>
</div>

<?php get_footer(); ?>