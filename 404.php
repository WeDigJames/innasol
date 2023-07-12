<?php get_header(); ?>

<div class="page">
    <div class="pageHeader" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_homepage_forest_1.jpg)">
        <div class="container">
            <div class="t-heading--xlarge t-heading--white c-legend__title">Sorry ...</div>
            <div class="shard">
                <div class="angle"></div>
            </div>
            <div class="square square-left"></div>
            <div class="square square-top-right"></div>
        </div>
    </div>
    <div class="posts">
        <div class="container">
            <div class="postContent postStyles">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>
                <div class="single-page">
                    <p>Sorry, you've got lost in the renewable forest.</p>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>
    <?php get_footer(); ?>