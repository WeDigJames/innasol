<?php if (is_page(array(2, 16, 18, 20, 22, 7530, 7526, 7528, 7532)) || is_single()) {; 
    $bg_image = get_field('banner_footer_image', 'option');
    $size = 'slider'; 
    ?>
    <div class="divider" style="background-image: url('<?php echo wp_get_attachment_image_url( $bg_image, $size ); ?>')">
        <div class="shard"></div>
        <div class="square square-left"></div>
        <div class="square square-right"></div>
    </div>
<?php }; ?>
<?php if (!is_page(array(8096, 8176, 8098, 8100, 7610, 8534, 8536, 8538, 8545, 7612, 8547, 8550, 8561, 8673))) {; ?>
    <div class="caseStudies">
        <div class="container">
            <div class="caseStudyGroup">
                <h2 class="caseStudyHeader hideOnMobile">Innasol Case Studies</h2>
                <h4 class="caseStudyHeader hideOnDesktop"><a href="#" class="btnText btnTextLightGreen">Innasol Case Studies</a></h4><a href="<?php echo site_url(); ?>/casestudies/" class="btnText btnTextLightGreen">View all Case Studies</a>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $i = 0;
                    $loop = new WP_Query(array('post_type' => 'casestudy', 'posts_per_page' => 4,));
                    while ($loop->have_posts()) : $loop->the_post();
                        $i++; ?>
                        <div class="swiper-slide slide<?php echo $i; ?>">
                            <a href="<?php echo get_permalink(); ?>" target="_self" class="caseStudy caseStudy1">
                                <div class="image no-lazy"> <img src="<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'square-ish');
                                                                echo $featured_img_url; ?>" height="240" width="280" title="Commercial Biomass" alt="Commercial Biomass" data-mask="caseStudySlidePromo" class="promoMask" />
                                    <div class="greenBar"></div>
                                    <div class="btn"> <span class="title"><?php the_title(); ?></span></div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="square square-left"></div>
        <div class="square square-top-right"></div>
        <div class="square square-bottom-right"></div>
    </div>
<?php }; ?>
<div class="footer" style="background-image: url('<?php if (get_field('banner_footer_image')) {; $bg_image = get_field('banner_footer_image');
    $size = 'slider'; ?><?php echo wp_get_attachment_image_url( $bg_image, $size ); ?><?php } else {; ?><?php $thumb_id = get_post_thumbnail_id();
                                                                                                                                                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'slider', true);
                                                                                                                                                                $thumb_url = $thumb_url_array[0];
                                                                                                                                                                echo $thumb_url; ?><?php }; ?>')">
    <div class="container">
        <div class="footerLinks">
            <?php if (is_page_template('page-templates/gateway.php') || is_page_template('page-templates/gateway-edit.php') || is_page_template('page-templates/gateway-media.php') || is_page_template('page-templates/gateway-media-edit.php') || is_page_template('page-templates/gateway-media-add.php') || is_page_template('page-templates/gateway-verify.php') || is_page_template('page-templates/gateway-registered.php')) {  ?>
                <?php wp_nav_menu(array('theme_location' => 'gateway-menu', 'container' => 'ul', 'container_id' => 'menu-footer-menu', 'container_class' => 'menu')); ?>
            <?php } else {; ?>
                <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => 'ul', 'container_id' => 'menu-footer-menu', 'container_class' => 'menu')); ?>
            <?php }; ?>
        </div>
    </div>
    <div class="shard">
        <div class="angle"></div>
        <div class="square square-right"></div>
    </div>
    <div class="square square-left"></div>
    <div class="square square-right"></div>
    <div class="square square-bottom"></div>
    <div class="greenLine"></div>
    <div class="copyright">
        <div class="container">
            <p>Copyright &copy; <?php echo date('Y'); ?> Innasol Group ltd. All rights reserved</p>
        </div>
    </div>
</div>
</div>
<a href="#" class="backToTop"></a>
<script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jcf.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jcf.select.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jcf.scrollable.js"></script>
<script>
    jQuery(function() {
        jcf.replace('#locationDD select, #caseStudiesFilter select');
        jcf.replace('#mapsSearchWrap select.wpgmza_sl_radius_select', 'Select', {
            wrapNative: false,
            wrapNativeOnMobile: false
        });
    });
</script>
<?php if (is_page_template('page-templates/gateway.php') || is_page_template('page-templates/gateway-edit.php') || is_page_template('page-templates/gateway-media.php') || is_page_template('page-templates/gateway-media-edit.php') || is_page_template('page-templates/gateway-verify.php') || is_page_template('page-templates/gateway-media-add.php') || is_page_template('page-templates/gateway-registered.php')) {  ?>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/featherlight.js"></script>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.js"></script>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/dropify.min.js"></script>
    <script type="text/javascript" defer src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/jquery.chained.min.js"></script>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/gateway-media.js"></script>
<?php } ?>
<script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/new.js"></script>
<?php if (is_page(7616)) {; ?>
    <script type="text/javascript" defer src="<?php echo get_template_directory_uri(); ?>/js/calculator.js"></script>
<?php } ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143089669-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-143089669-1');
</script>
<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        gtag('event', 'conversion', {

            'send_to': 'AW-11085414067/_qPgCNv57ZEYELP996Up',

        });
    }, false);

    function gtag_report_conversion(url) {

        var callback = function() {

            if (typeof(url) != 'undefined') {

                window.location = url;

            }

        };

        gtag('event', 'conversion', {

            'send_to': 'AW-11085414067/_qPgCNv57ZEYELP996Up',

            'event_callback': callback

        });

        return false;

    }
</script>
<?php wp_footer(); ?>
</body>

</html>