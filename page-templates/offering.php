<?php /* Template Name: Our offering */ get_header();?>

<div class="whatWeDoPage">
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
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="7524" title="Contact Us - Products"]' ); ?>
                </div>
            </div>
            <div class="productList">
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-offering/care-home-funding/"> <img src="<?php echo site_url();?>/wp-content/uploads/2017/06/shutterstock_135734753.jpg" height="280" width="400" title="Care Home Funding" alt="Care Home Funding" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Care Home Funding</h3>
                                <h4>FOR EASY ACCESS TO BIOMASS HEATING</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-offering/care-home-funding/">learn more</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-offering/innasol-energy-supply-contract/"> <img src="<?php echo get_template_directory_uri();?>/images/2015-01-HeatPod-3662.jpg" height="280" width="400" title="Energy Supply Contracts" alt="Energy Supply Contracts" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Energy Supply Contracts</h3>
                                <h4>FOR COMPLETE BESPOKE ENERGY SOLUTIONS</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-offering/innasol-energy-supply-contract/">learn more</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-offering/biomass-boiler-training/"> <img src="<?php echo get_template_directory_uri();?>/images/header_section_training.jpg" height="280" width="400" title="Specialist Training" alt="Specialist Training" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Specialist Training</h3>
                                <h4>FOR THE VERY BEST FOUNDATION</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-offering/biomass-boiler-training/">learn more</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-offering/rhi-financing/"> <img src="<?php echo get_template_directory_uri();?>/images/header_section_rhi2.jpg" height="280" width="400" title="Financing, RHI &#038; ROC" alt="Financing, RHI &#038; ROC" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Financing, RHI &#038; ROC</h3>
                                <h4>FOR MAKING YOUR INVESTMENT MORE AFFORDABLE</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-offering/rhi-financing/">learn more</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/certified-partners/"> <img src="<?php echo get_template_directory_uri();?>/images/header_section_partners-1.jpg" height="280" width="400" title="Certified Partners" alt="Certified Partners" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Certified Partners</h3>
                                <h4>FOR THE BEST KNOWLEDGE AND EXPERIENCE</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/certified-partners/">learn more</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/casestudies/"> <img src="<?php echo get_template_directory_uri();?>/images/header_section_case_studies-1.jpg" height="280" width="400" title="Case Studies" alt="Case Studies" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Case Studies</h3>
                                <h4>FOR EXAMPLES OF THE BEST QUALITY WORK</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/casestudies/">learn more</a></div>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>
    <div class="specialistTraining" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_section_training.jpg)">
        <div class="container">
            <div class="content">
                <h2 class="t-heading--thin t-heading--white becomePartnerMap-h2">Specialist Training</h2>
                <?php the_field('specialist_training');?>
                <a class="btn btnTrans" href="<?php echo site_url();?>/our-offering/biomass-boiler-training/"><span class="text">Learn more</span></a>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-right"></div>
        <div class="shard">
            <div class="angle"></div>
        </div>
    </div>

    <?php get_footer(); ?>