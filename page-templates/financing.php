<?php /* Template Name: Financing */ get_header();?>

<div class="rhiFinancingPage">
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
                <?php if(is_page(array(7604))){;?>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="7609" title="Boiler Replacement"]' ); ?>
                </div>
                <?php } elseif(is_page(array(7601))){;?>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="7608" title="Free Survey"]' ); ?>
                </div>
                <?php } elseif(is_page(array(7532))){;?>
                <div class="promo"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_corporate_schemes.jpg" height="200" width="480" title="Financing, RHI &#038; ROC" alt="Financing, RHI &#038; ROC" data-mask="rhiFinancingPromo" class="promoMask" />
                    <div class="btn">Corporate Scheme</div>
                    <?php the_field('sidebar');?><a href="mailto:info@innasol.com" class="btnText btnTextGreen email">info@innasol.com</a>
                </div>
                <div class="promo"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_useful_links.jpg" height="200" width="480" title="Your feedback" alt="Your feedback" data-mask="rhiFinancingPromo" class="promoMask" />
                    <div class="btn">Useful Links</div>
                    <div class="linksWrap"><a target="_blank" href="https://www.ofgem.gov.uk/environmental-programmes/domestic-renewable-heat-incentive" class="btnText btnTextGreen">Renewable Heat Incentive (Domestic)</a><a target="_blank" href="https://www.ofgem.gov.uk/environmental-programmes/non-domestic-renewable-heat-incentive-rhi" class="btnText btnTextGreen">Renewable Heat Incentive (Business)</a><a target="_blank" href="https://www.ofgem.gov.uk/environmental-programmes/ro/about-ro" class="btnText btnTextGreen">Renewable Obligation Certificate</a></div>
                </div>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="7524" title="Contact Us - Products"]' ); ?>
                </div>
                <?php } else {;?>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="7608" title="Free Survey"]' ); ?>
                </div>
                <?php };?>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>

    <?php get_footer(); ?>