<?php /* Template Name: Contact */ get_header();?>

<div class="contactUsPage">
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
            <div class="pageContent pageContentLeft postStyles">
                <?php if(is_page(8673)){;?>
                <h1>Register</h1>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="8672" title="Register"]' ); ?>
                </div>
                <?php } else {;?>
                <h1>Email Us</h1>
                <div class="form">
                    <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact Us"]' ); ?>
                </div>
                <?php };?>
            </div>

            <?php if(is_page(8673)){;?>
            <div class="pageContent pageContentRight postStyles">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
            </div>
            <?php } else {;?>

            <div class="pageContent pageContentRight postStyles">
                <h3>Call Us</h3>
                <h4>General Enquiries</h4>
                <p><span class="phone"><a href="tel:01621 892613" style="color:#000">01621 892613</a></span></p>

                <?php if( have_rows('promo') ): ?>
                    <?php while( have_rows('promo') ): the_row(); 
                        $image = get_sub_field('image');
                            $image_size = 'promo';
                            $image_src = wp_get_attachment_image_src( $image, $image_size );
                            $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                            $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                            $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                        $title = get_sub_field('title');
                        ?>
                        <?php 
                            $link = get_sub_field('link');
                            //if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <?php //endif; ?>

                                <div class="promo">
                                    <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">  
                                        <img data-mask="whoWeArePromo" 
                                        height="240" width="480" 
                                        class="promoMask" 
                                            src="<?php echo esc_url( $image_src[0] ); ?>"
                                            srcset="<?php echo esc_attr( $image_srcset ); ?>"
                                            sizes="<?php echo esc_attr( $image_srcset_sizes ); ?>" 
                                            alt="<?php echo $image_alt ?>"
                                        />
                                        <h4><?php echo $title ?></h4>
                                        <div class="btnText btnTextGreen"><?php echo esc_html( $link_title ); ?></div>
                                    </a>
                                </div><!--.promo-->
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
            <?php };?>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>
    <?php if(!is_page(8673)){;?>
    <div class="map" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_section_contact_us.jpg.jpeg)">
        <div class="mapWrap">
            <?php echo do_shortcode('[wpgmza id="3"]'); ?>
        </div>
        <div class="container">
            <div class="content">
                <h2 class="t-heading--white t-heading--thin becomePartnerMap-h2">Find The Academy</h2>
                <?php the_field('find_the_academy');?>
                <p><a class="btn btnGrey" href="https://www.google.co.uk/maps/place/Hatfield+Peverel,+Chelmsford+CM3+2AG/@51.7927652,0.5881249,15.75z/data=!4m5!3m4!1s0x47d8e5921da0bcb5:0xaef8baf710a33b51!8m2!3d51.7933791!4d0.5877699" target="&quot;_blank/"><span class="text">View on Google Maps</span><span class="shard2"></span></a></p>
            </div>
        </div>
        <div class="square square-left"></div>
        <div class="square square-top-right"></div>
        <div class="square square-bottom-right"></div>
        <div class="shard">
            <div class="angle"></div>
            <div class="square square-right"></div>
        </div>
    </div>
    <div class="mapAngleWrap">
        <div class="mapAngle">
            <div class="mapAngleImg" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_section_contact_us.jpg.jpeg)"></div>
            <div class="square square-right"></div>
        </div>
    </div>
    <?php };?>

    <?php get_footer();?>