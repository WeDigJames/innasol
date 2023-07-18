<?php /* Template Name: Who we are */ get_header();?>

<div class="whoWeArePage">
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
                <div class="promo promo1"><a href="<?php echo site_url();?>/our-products/"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_unequalled_products.jpg" height="240" width="480" title="Unequalled<br/>Products" alt="Unequalled<br/>Products" data-mask="whoWeArePromo" class="promoMask" />
                        <h4>Unequalled<br />Products</h4>
                        <div class="btnText btnTextGreen">Heating Systems</div>
                    </a></div>
                <div class="promo promo2"><a href="<?php echo site_url();?>/certified-partners/"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_certified_partners.jpg" height="240" width="480" title="Certified<br/>Partners" alt="Certified<br/>Partners" data-mask="whoWeArePromo" class="promoMask" />
                        <h4>Certified<br />Partners</h4>
                        <div class="btnText btnTextGreen">Become a partner</div>
                    </a></div>
                <div class="promo promo3"><a href="<?php echo site_url();?>/our-offering/specialist-training/"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_unrivalled_training.jpg" height="240" width="480" title="Unrivalled Training" alt="Unrivalled Training" data-mask="whoWeArePromo" class="promoMask" />
                        <h4>Unrivalled<br />Training</h4>
                        <div class="btnText btnTextGreen">Learn more</div>
                    </a></div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>
    <div class="becomePartnerMap" style="background-image: url('<?php if (get_field('banner_footer_image')) {; $bg_image = get_field('banner_footer_image');
    $size = 'slider'; ?><?php echo wp_get_attachment_image_url( $bg_image, $size ); }; ?>')">
        <div class="mapWrap">
            <?php echo do_shortcode('[wpgmza id="13"]'); ?>
        </div>
        <div class="container">
            <div class="content">
                <h2 class="t-heading--white t-heading--thin becomePartnerMap-h2">The UK’s largest professional partner network</h2>
                <?php the_field('network');?>
                <p> <a class="btn btnGrey" href="<?php echo site_url();?>/certified-partners/"> <span class="text">Learn More</span><span class="shard2"></span> </a>
            </div>
        </div>
        <div class="square square-left"></div>
        <div class="square square-right"></div>
    </div>

    <?php get_footer(); ?>