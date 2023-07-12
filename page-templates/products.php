<?php /* Template Name: Our products */ get_header();?>

<div class="whatWeDoPage">
    <div class="pageHeader" style="background-image: url(<?php the_field('banner_footer_image');?>)">
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
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-products/biomass-boilers/"> <img src="<?php echo get_template_directory_uri();?>/images/promo_small_what_we_do_boilers.jpg" height="280" width="400" title="ETA Biomass Boilers" alt="ETA Biomass Boilers" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>ETA Biomass Boilers</h3>
                                <h4>For domestic & commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-products/biomass-boilers/">Product Range</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/free-biomass-boiler-survey/"> <img src="<?php echo get_template_directory_uri();?>/images/promo_small_what_we_do_boilers.jpg" height="280" width="400" title="Free Biomass Boiler Survey" alt="Free Biomass Boiler Survey" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Free Biomass Boiler Survey</h3>
                                <h4>For domestic & commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/free-biomass-boiler-survey/">Product Range</a></div>
                </div>
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/brand-new-boiler-great-tariff/"> <img src="<?php echo get_template_directory_uri();?>/images/promo_small_what_we_do_boilers.jpg" height="280" width="400" title="Brand NEW BOILER, same GREAT TARIFF!" alt="Brand NEW BOILER, same GREAT TARIFF!" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Brand NEW BOILER, same GREAT TARIFF!</h3>
                                <h4>For domestic & commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/brand-new-boiler-great-tariff/">Product Range</a></div>
                </div>
                <!--<div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-products/kohlbach-biomass-boilers/"> <img src="<?php echo get_template_directory_uri();?>/images/Factory-in-A-9150-Bleiburg_1-1.jpg" height="280" width="400" title="Kohlbach Biomass Boilers" alt="Kohlbach Biomass Boilers" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Kohlbach Biomass Boilers</h3>
                                <h4>For commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-products/kohlbach-biomass-boilers/">Product Range</a></div>
                </div>-->
                <!--<div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-products/sokratherm-gas-chp/"> <img src="<?php echo get_template_directory_uri();?>/images/Sokratherm-Manufacturing-plant-1000x476.jpg" height="280" width="400" title="Sokratherm CHP Units" alt="Sokratherm CHP Units" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Sokratherm CHP Units</h3>
                                <h4>For commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-products/sokratherm-gas-chp/">Product Range</a></div>
                </div>-->
                <div class="product">
                    <div class="imageWrap"> <a href="<?php echo site_url();?>/our-products/innasol-heat-pods/"> <img src="<?php echo get_template_directory_uri();?>/images/promo_small_what_we_do_heat_pods1.jpg" height="280" width="400" title="Innasol Heat Pods" alt="Innasol Heat Pods" data-mask="whatWeDoProduct" class="promoMask" />
                            <div class="titles">
                                <h3>Innasol Heat Pods</h3>
                                <h4>For domestic & commercial properties</h4>
                            </div>
                        </a> <a class="btnText btnTextGreen" href="<?php echo site_url();?>/our-products/innasol-heat-pods/">Product Range</a></div>
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
                <a class="btn btnGrey" href="<?php echo site_url();?>/our-offering/biomass-boiler-training/"><span class="text">Learn more</span> <span class="shard2"></span></a>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-right"></div>
        <div class="shard">
            <div class="angle"></div>
        </div>
    </div>

    <?php get_footer(); ?>