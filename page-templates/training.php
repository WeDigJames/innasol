<?php /* Template Name: Training */ get_header();?>

<div class="specialistTrainingPage">
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
                <div class="promo promo1 courseEnquiry">
                    <h3>Course Enquiry</h3>
                    <?php the_field('course_enquiry');?>
                    <a class="phone">01621 892613</a><a class="email" href="mailto:training@innasol.com">training@innasol.com</a>
                </div>
                <div class="promo promo2 excellence"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_excellence_programme.jpg" height="280" width="673" title="Specialist Training" alt="Specialist Training" data-mask="trainingExcellencePromo" class="promoMask" />
                    <h4>Customer Excellence Programme</h4>
                    <?php the_field('customer_excellence_programme');?>
                </div>
                <div class="promo promo3 feedback"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_your_feedback.jpg" height="280" width="673" title="Your feedback" alt="Your feedback" data-mask="trainingReviewPromo" class="promoMask" />
                    <h4>Your Feedback</h4>
                    <?php the_field('your_feedback');?>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
    </div>


    <?php get_footer(); ?>