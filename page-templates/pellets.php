<?php /* Template Name: Product - Pellets */ get_header();?>

<div class="whatWeDoSubPage">
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
    <div class="eta " style="border-top-color: #E50005;">
        <div class="etaContent">
            <p style="background-color: #E50005; color: #ffffff"><?php the_field('strapline');?></p> <!--<span class="etaLogo" style="border-top-color: #283c0a;"><img src="<?php //echo get_template_directory_uri();?>/images/logo-innasol.png" /></span>-->
        </div>
    </div>
    <div class="page">
        <div class="container">
            <div class="postContent"> 
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
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-right"></div>
    </div>
    <div class="whatWeDoRange">
        <div class="divider" style="background-image: url(<?php echo get_template_directory_uri();?>/images/header_section_what_we_do_heat_pods.jpg)">
            <div class="shard">
                <div class="angle"></div>
                <div class="square square-right"></div>
            </div>
            <div class="shard shardBottom"></div>
            <div class="square square-left"></div>
            <div class="square square-right"></div>
        </div>
        <div class="productsList">
            <div class="container">
                <?php $loop = new WP_Query(array('post_type' => 'product','posts_per_page' => -1,'tax_query' => array(array ('taxonomy' => 'range','field' => 'slug','terms' => 'innosal-heat-pods',)),)); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="productItem">
                    <h3><strong><?php the_title();?></strong> <?php the_field('power');?></h3>
                    <div class="image">
                        <img src="<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url; ?>" height="320" width="400" title="<?php the_title();?>" alt="<?php the_title();?>" data-mask="whatWeDoRangeProduct" data-product="true" class="promoMask" />
                        <a href="<?php the_field('pdf');?>" target="_blank" class="btnText btnTextGreen">Product Brochure</a></div>
                    <div class="content">
                        <div class="contentSide">
                            <h4>Typical applications:</h4>
                            <?php the_field('applications');?>
                        </div>
                        <div class="contentSide">
                            <h4>Main Features:</h4>
                            <?php the_content();?>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
            <div class="square-right"></div>
            <div class="square-left"></div>
            <div class="square-bottom-left"></div>
        </div>
    </div>
    <div class="mayAlsoLike">
        <div class="container">

            <h1>YOU MAY ALSO BE INTERESTED IN...</h1>

            <?php $i = 0; $post_objects = get_field('also_interested_in'); if( $post_objects ): ?>
            <?php foreach( $post_objects as $post): $i++;  ?>
            <?php setup_postdata($post); ?>
            <a href="<?php echo get_permalink();?>" class="promo promo<?php echo $i;?>"><img src="<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); echo $featured_img_url; ?>" height="280" width="673" title="<?php the_title();?>" alt="<?php the_title();?>" data-mask="whatWeDoSubpageAlsoLike" class="promoMask" />
                <h3><?php the_title();?></h3>
                <div class="btnText btnTextGreen">Find out more</div>
            </a>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <div class="square square-left"></div>
        <div class="square square-right"></div>
    </div>

    <?php get_footer(); ?>