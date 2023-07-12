<?php get_header(); ?>

<div class="blogSinglePost">
    <div class="pageHeader" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>)">
        <div class="container">
            <div class="titles">
                <h3>Certified Partners:</h3>
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
                    <div class="partnerDetails">

                        <?php if ( get_field('partner_logo') ) {;?>
                        <div class="image" style="background-image: url(<?php the_field('partner_logo'); ?>);"></div>
                        <?php };?>

                        <div class="partnerDetailsContent">

                            <h4><?php the_field('partner_name'); ?></h4>

                            <?php if ( get_field('partner_address') ) {echo "<p class='address'>".get_field('partner_address')."</p>";} if ( get_field('partner_phone_number') ) {echo "<p class='phone'>".get_field('partner_phone_number')."</p>";} if ( get_field('partner_email') ) {echo "<p class='email'><a href='mailto:".get_field('partner_email')."' target='_blank'>".get_field('partner_email')."</a></p>"; } if ( get_field('partner_website') ) {echo "<p class='website'><a href='".get_field('partner_website')."' target='_blank'>".get_field('partner_website')."</a></p>";};?>

                            <div class="follow">
                                <span class="followVisitUs">Visit us on</span>

                                <?php if ( get_field('partner_twitter') ) {echo "<a class='twitter' target='_blank' href='http://www.twitter.com/".get_field('partner_twitter')."'></a>"; } if ( get_field('partner_facebook') ) {echo "<a class='facebook' target='_blank' href='http://www.facebook.com/".get_field('partner_facebook')."'></a>"; } ?>
                            </div>

                            <?php if ( get_field('partner_google_location') ) { echo "<a href='".get_field('partner_google_location')."' target='_blank' class='btn btnGreen'><span class='text'>Find us on Google Maps</span> <span class='shard'></span></a>"; }; ?>

                        </div>

                    </div>
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