<?php get_header(); ?>

<div class="blogSinglePost">
    <div class="pageHeader" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>)">
        <div class="container">
            <div class="titles">
                <h2><?php the_title();?></h2>
                <p class="date"><?php echo get_the_date();?></p>
            </div>
            <div class="shard">
                <div class="angle"></div>
            </div>
            <div class="square square-left"></div>
            <div class="square square-top-right"></div>
        </div>
    </div>
    <div class="posts">
        <div class="container">
            <div class="postContent">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>
                <div class="single-post postStyles">
                    <div class="single-post-content">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>

                </div>

                <div class="pageSidebar">
                    <div class="form">
                        <?php echo do_shortcode( '[contact-form-7 id="7525" title="Contact Us - Posts"]' ); ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>

    <?php get_footer(); ?>