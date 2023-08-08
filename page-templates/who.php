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