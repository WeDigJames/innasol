<?php /* Template Name: Energy Supply Contracts */ get_header();?>

<div class="specialistTrainingPage">
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
    <div class="page">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>
            <div class="pageContent postStyles">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
            <div class="pageSidebar">
                <div class="promo promo1 courseEnquiry">
                    <?php the_field('sidebar');?>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>

    <?php get_footer(); ?>