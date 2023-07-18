<?php /* Template Name: Partners */ get_header(); ?>

<div class="page becomeAPartner">
    <div class="pageHeader" style="background-image: url('<?php if (get_field('banner_footer_image')) {; $bg_image = get_field('banner_footer_image');
    $size = 'slider'; ?><?php echo wp_get_attachment_image_url( $bg_image, $size ); }; ?>')">
        <div class="container">
            <div class="t-heading--xlarge t-heading--white c-legend__title">Certified Partners</div>
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
                <div class="rem-group">
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
                    } ?>
                    <div class="single-page">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="sidebar">
                        <div class="promo partners">
                            <h3>Innasol Partners Gateway</h3>
                            <?php the_field('sidebar'); ?>
                            <a href="<?php echo site_url(); ?>/innasol-partner-gateway/" class="btn btnGrey" target="_self"> <span class="text">Access Partners Gateway</span> <span class="shard"></span> </a>
                        </div>
                        <div class="promo training"><a href="<?php echo site_url(); ?>/our-offering/biomass-boiler-training/"><img src="<?php echo get_template_directory_uri(); ?>/images/promo_small_unrivalled_training.jpg" height="240" width="480" title="Unrivalled Training" alt="Unrivalled Training" data-mask="whoWeArePromo" class="promoMask" />
                                <h4>Unrivalled<br />Training</h4>
                                <div class="btnText btnTextGreen">Learn more</div>
                            </a></div>
                    </div>
                </div>
                <div id="mapSearch" class="rem-group">
                    <h1>FIND A LOCAL INNASOL CERTIFIED PARTNER</h1>
                    <p>Search for your nearest Innasol Certified Partner to be connected with one of our elite installers.</p>
                    <style>
                        select#radiusSelect_1 {
                            display: block !important;
                            opacity: 1 !important;
                            appearance: inherit !important;
                            position: revert !important;
                            left: revert !important;
                            height: 28px !important;
                            width: auto !important;
                            margin: auto !important;
                            border-width: revert !important;
                        }
                    </style>

                    <div id="mapsSearchWrap">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                    </div>
                    <p style="text-align: center;">Can't find a suitable Innasol Certified Partner? <a href="<?php echo esc_url(home_url('/')); ?>contact-us/">Contact us</a> and we can find you a local Innasol Partner.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="becomePartnerMap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/pic1.jpg')">
        <div class="container">
            <div class="content">
                <h2 class="t-heading--white t-heading--thin becomePartnerMap-h2">The UK's Largest professional partner network</h2>
                <?php the_field('network'); ?>
                <p> <a class="btn btnGrey" href="<?php echo site_url(); ?>/become-a-certified-partner/"> <span class="text">Learn More</span> <span class="shard"></span></a></p>
            </div>
        </div>
        <div class="square square-left"></div>
        <div class="square square-right"></div>
    </div>

    <?php get_footer(); ?>s