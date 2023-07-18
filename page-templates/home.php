<?php /* Template Name: Home */ get_header();?>

<?php
    $slide_image_1 = get_field('slide_image_-_1');
    $slide_image_2 = get_field('slide_image_-_2');
    $slide_image_3 = get_field('slide_image_-_3');
    $slide_image_4 = get_field('slide_image_-_4');
    $slide_image_5 = get_field('slide_image_-_5');
?>

<div class="swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_1['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_2['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_3['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_4['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_5['sizes']['slider']; ?>')"></div>
        </div>
        <div class="swiper-content">
            <div class="container">
                <div id="swiperContent0" class="content show">
                    <?php the_field('slide_content_-_1');?>
                    <a href="<?php the_field('slide_link_-_1');?>" class="btn btnTrans"> <span class="text">Learn More</span> </a>
                    <a href="<?php the_field('slide_link_-_1b');?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">FREE SURVEY</span> </a>
                </div>
                <div id="swiperContent1" class="content hide">
                    <?php the_field('slide_content_-_2');?>
                    <a href="<?php the_field('slide_link_-_2');?>" class="btn btnTrans"> <span class="text">Learn more</span> </a>
                    <a href="<?php the_field('slide_link_-_1b');?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">FREE SURVEY</span> </a>
                </div>
                <div id="swiperContent2" class="content hide">
                    <?php the_field('slide_content_-_3');?>
                    <a href="<?php the_field('slide_link_-_3');?>" class="btn btnTrans"> <span class="text">Learn more</span> </a>
                    <a href="<?php the_field('slide_link_-_1b');?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">FREE SURVEY</span> </a>
                </div>
                <div id="swiperContent3" class="content hide">
                    <?php the_field('slide_content_-_4');?>
                    <a href="<?php the_field('slide_link_-_4');?>" class="btn btnTrans"> <span class="text">Learn more</span> </a>
                    <a href="<?php the_field('slide_link_-_1b');?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">FREE SURVEY</span> </a>
                </div>
                <div id="swiperContent4" class="content hide">
                    <?php the_field('slide_content_-_5');?>
                    <a href="<?php the_field('slide_link_-_5');?>" class="btn btnTrans"> <span class="text">Learn more</span> </a>
                    <a href="<?php the_field('slide_link_-_1b');?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">FREE SURVEY</span> </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-shard">
            <div class="angle"></div>
            <div class="square square-right"></div>
        </div>
        <div class="square swiper-square-left"></div>
        <div class="square swiper-square-top-right"></div>
        <div class="square swiper-square-center-right"></div>
        <div class="square swiper-square-bottom-right"></div>
    </div>
</div>
<div class="home-whatWeDo" style="height: auto; padding: 100px 0;">
    <div class="container" style="margin-bottom: 60px;">
        <div class="table">
            <div class="tableCell first">
                <div class="" style="padding: 0 40px;">
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>

                    <a href="https://innasol.com/contact-us/" class="btn btnGrey"> <span class="text">Find Out More</span> <span class="shard"></span> </a>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="table">
            <div class="tableCell first">
                <div class="content" style="padding: 0 40px;">
                <?php if( have_rows('secondary') ): ?>
                    <?php while( have_rows('secondary') ): the_row(); ?>
                
                        <?php the_sub_field('our_story');?>

                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="btn btnGrey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                        <?php endif; ?>
                    <?php endwhile; ?>

                <?php endif; ?>

                </div>
                <div class="promos">
                    <div class="promo promo1 findPartner">
                        <div class="image"></div>
                        <h3>Get Expert advice</h3>
                        <p>Contact an Innasol Certified Installer from the list below, or <a href="<?php echo site_url();?>/contact-us/">contact us</a> for more info and other local installers.</p>
                        <div class="dropdownWrap" id="locationDD">
                            <select id="partners" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
                                <option value="0" selected="selected">Certified Installers</option>
                                <?php $loop = new WP_Query(array('post_type' => 'certifiedpartners','posts_per_page' => -1,'orderby' => 'name', 'order' => 'ASC')); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <option value="<?php echo site_url();?>/certified-partners/<?php echo $post->post_name;?>"><?php the_title();?></option>
                                <?php endwhile; wp_reset_postdata();?>
                            </select>
                            <script>
                                jQuery(function() {
                                    jQuery('#partners').on('change', function() {
                                        var url = jQuery(this).val();
                                        if (url) {
                                            window.location = url;
                                        }
                                        return false;
                                    });
                                });
                            </script>
                        </div>
                    </div><a href="<?php echo site_url();?>/our-products/" class="promo promo2"> <img src="<?php echo get_template_directory_uri();?>/images/promo_small_unequalled_products.jpg" height="240" width="480" title="Unequalled Products" alt="Unequalled Products" data-mask="homeWhatWeDoPromo" class="promoMask" />
                        <h4 class="promos-title">Unequalled Products</h4>
                        <div class="btn">learn more</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="square square-left"></div>
    <div class="square square-right"></div>

</div><!-- end .home-whatWeDo -->

<!-- BIOMASS SECTION -->
<div class="home-whatWeDo h-100">
    <div class="container" style="margin-bottom: 60px;">
        <div class="table">
            <div class="tableCell first">
                <div class="" style="padding: 0 40px;">
                    <?php if( have_rows('biomass_group') ): ?>
                        <?php while( have_rows('biomass_group') ): the_row(); ?>

                                <?php if( have_rows('intro_content') ): ?>
                                    <?php while( have_rows('intro_content') ): the_row(); 

                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $orange_link = get_sub_field('orange_button');
                                    $grey_link = get_sub_field('grey_button');
                                    ?>

                                    <div class="grid-wrapper grid-two-cols mb-40">
                                        <div class="forty d-flex flex-column h-100">
                                            <h1 class="green"><?php echo $title;?></h1>
                                            <div class="pr-40">
                                                <p class="mt-0"><?php echo $text;?></p> 
                                            </div>
                                                        
                                            <div class="h-100 mt-auto">
                                                <?php 
                                                    if( $orange_link ): 
                                                        $link_url = $orange_link['url'];
                                                        $link_title = $orange_link['title'];
                                                        $link_target = $orange_link['target'] ? $orange_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnTrans btnOrange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                                <?php 
                                
                                                    if( $grey_link ): 
                                                        $link_url = $grey_link['url'];
                                                        $link_title = $grey_link['title'];
                                                        $link_target = $grey_link['target'] ? $grey_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnGrey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                            </div>
                                            
                                            </div><!-- end .forty -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                                            <div class="sixty">
                                                <?php if( get_sub_field('image') ): 
                                                    $image = get_sub_field('image');
                                                        // ACF IMAGE (ID) - MAKE SURE FIELD IS SET TO 'Image ID'
                                                        $image_size = 'six-four';
                                                        $image_src = wp_get_attachment_image_src( $image, $image_size );
                                                        $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                                                        $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                                                        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                                                        //$image_caption = get_the_excerpt( $image );
                                                ?>
                                                    <img class="w-100 h-100" 
                                                        src="<?php echo esc_url( $image_src[0] ); ?>"
                                                        srcset="<?php echo esc_attr( $image_srcset ); ?>"
                                                        sizes="<?php echo esc_attr( $image_srcset_sizes ); ?>" 
                                                        alt="<?php echo $image_alt ?>"
                                                    />
                                                <?php endif; ?>
                                            </div><!-- end .sixty -->

                                    </div><!-- end .grid-wrapper -->

                                    <?php if( get_sub_field('full_width_content') ):
                                        the_sub_field('full_width_content');
                                    endif; ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- end .home-whatWeDo -->
<!-- end BIOMASS SECTION -->

<!-- SOLAR SECTION -->
<?php if( have_rows('solar_group') ): ?>
    <?php while( have_rows('solar_group') ): the_row(); ?>

        <?php if( get_sub_field('image') ): 
            $image = get_sub_field('image');
                // ACF IMAGE (ID) - MAKE SURE FIELD IS SET TO 'Image ID'
                $image_size = 'slider';
                $image_src = wp_get_attachment_image_src( $image, $image_size );
                $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                //$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                //$image_caption = get_the_excerpt( $image );
        ?>

            <div class="home-paidForGreen mb-40" style="background-image: url('<?php echo esc_url( $image_src[0] ); ?>')">
        <?php endif; ?>
        <div class="container">
            <div class="content">
                <?php if( have_rows('intro_content') ): ?>
                    <?php while( have_rows('intro_content') ): the_row(); 

                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $orange_link = get_sub_field('orange_button');
                    $grey_link = get_sub_field('grey_button');
                    ?>
                <h2><?php echo $title;?></h2>
                <p><?php echo $text;?><p> 
                    <?php 
                        if( $orange_link ): 
                            $link_url = $orange_link['url'];
                            $link_title = $orange_link['title'];
                            $link_target = $orange_link['target'] ? $orange_link['target'] : '_self';
                            ?>
                            <a class="btn btnTrans btnOrange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="shard"></div>
    </div>
                        
    <div class="home-whatWeDo h-100">
        <div class="container" style="margin-bottom: 60px;">
            <div class="" style="padding: 0 40px;">
                <?php if( get_sub_field('full_width_content') ):
                    the_sub_field('full_width_content');
                endif; ?>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<!-- end SOLAR SECTION -->


<!-- WHY SWITCH SECTION -->

<div class="home-whatWeDo h-100">
    <div class="container" style="margin-bottom: 20px;">
        <div class="table">
            <div class="tableCell first">
                <div class="" style="padding: 0 40px;">
                    <?php if( have_rows('why_switch_group') ): ?>
                        <?php while( have_rows('why_switch_group') ): the_row(); ?>

                                <?php if( have_rows('intro_content') ): ?>
                                    <?php while( have_rows('intro_content') ): the_row(); 

                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $orange_link = get_sub_field('orange_button');
                                    $grey_link = get_sub_field('grey_button');
                                    ?>

                                    <div class="grid-wrapper grid-two-cols mb-40">
                                        <div class="forty d-flex flex-column h-100">
                                            <h1 class="green"><?php echo $title;?></h1>
                                            <div class="pr-40">
                                                <?php echo $text;?> 
                                            </div>
                                                        
                                            <div class="h-100 mt-auto align-end">
                                                <?php 
                                                    if( $orange_link ): 
                                                        $link_url = $orange_link['url'];
                                                        $link_title = $orange_link['title'];
                                                        $link_target = $orange_link['target'] ? $orange_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnTrans btnOrange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                                <?php 
                                
                                                    if( $grey_link ): 
                                                        $link_url = $grey_link['url'];
                                                        $link_title = $grey_link['title'];
                                                        $link_target = $grey_link['target'] ? $grey_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnGrey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                            </div>
                                            
                                            </div><!-- end .forty -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                                            <div class="sixty">
                                                <?php if( get_sub_field('image') ): 
                                                    $image = get_sub_field('image');
                                                        // ACF IMAGE (ID) - MAKE SURE FIELD IS SET TO 'Image ID'
                                                        $image_size = 'six-four';
                                                        $image_src = wp_get_attachment_image_src( $image, $image_size );
                                                        $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                                                        $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                                                        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                                                        //$image_caption = get_the_excerpt( $image );
                                                ?>
                                                    <img class="w-100 h-100" 
                                                        src="<?php echo esc_url( $image_src[0] ); ?>"
                                                        srcset="<?php echo esc_attr( $image_srcset ); ?>"
                                                        sizes="<?php echo esc_attr( $image_srcset_sizes ); ?>" 
                                                        alt="<?php echo $image_alt ?>"
                                                    />
                                                <?php endif; ?>
                                            </div><!-- end .sixty -->

                                    </div><!-- end .grid-wrapper -->

                                    <?php if( get_sub_field('full_width_content') ):
                                        the_sub_field('full_width_content');
                                    endif; ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- end .home-whatWeDo -->

<!-- end WHY SWITCH SECTION -->

<!-- COMPARISONS SECTION -->

<div class="home-whatWeDo h-100">
    <div class="container" style="margin-bottom: 60px;">
        <div class="" style="padding: 0 40px;">
            <?php if( have_rows('comparisons') ): ?>
                <?php while( have_rows('comparisons') ): the_row(); ?>
                    <div class="mb-40">
                        <?php if( get_sub_field('full_width_content') ):
                            the_sub_field('full_width_content');
                        endif; ?>
                    </div>

                    <div class="grid-wrapper grid-four-cols mb-40">

                        <?php if( have_rows('tech_one') ): ?>
                            <?php while( have_rows('tech_one') ): the_row(); ?>
                                <div class="panel bgLightGreen">
                                    <?php if( get_sub_field('title') ): ?>
                                        <h3><?php the_sub_field('title'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('pros_cons') ):
                                        the_sub_field('pros_cons');
                                    endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('tech_two') ): ?>
                            <?php while( have_rows('tech_two') ): the_row(); ?>
                                <div class="panel bgLightGreen">
                                    <?php if( get_sub_field('title') ): ?>
                                        <h3><?php the_sub_field('title'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('pros_cons') ):
                                        the_sub_field('pros_cons');
                                    endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('tech_three') ): ?>
                            <?php while( have_rows('tech_three') ): the_row(); ?>
                                <div class="panel bgGrey">
                                    <?php if( get_sub_field('title') ): ?>
                                        <h3><?php the_sub_field('title'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('pros_cons') ):
                                        the_sub_field('pros_cons');
                                    endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if( have_rows('tech_four') ): ?>
                            <?php while( have_rows('tech_four') ): the_row(); ?>
                                <div class="panel bgGrey">
                                    <?php if( get_sub_field('title') ): ?>
                                        <h3><?php the_sub_field('title'); ?></h3>
                                    <?php endif; ?>
                                    <?php if( get_sub_field('pros_cons') ):
                                        the_sub_field('pros_cons');
                                    endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div><!-- end .home-whatWeDo -->

<!-- end COMPARISONS SECTION -->

<!-- SAVE MONEY SECTION -->

<?php if( have_rows('save_money_group') ): ?>
    <?php while( have_rows('save_money_group') ): the_row(); ?>

        <?php if( get_sub_field('image') ): 
            $image = get_sub_field('image');
                // ACF IMAGE (ID) - MAKE SURE FIELD IS SET TO 'Image ID'
                $image_size = 'slider';
                $image_src = wp_get_attachment_image_src( $image, $image_size );
                $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                //$image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                //$image_caption = get_the_excerpt( $image );
        ?>

            <div class="home-paidForGreen mb-40" style="background-image: url('<?php echo esc_url( $image_src[0] ); ?>')">
        <?php endif; ?>
        <div class="container">
            <div class="content">
                <?php if( have_rows('intro_content') ): ?>
                    <?php while( have_rows('intro_content') ): the_row(); 

                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $orange_link = get_sub_field('orange_button');
                    $grey_link = get_sub_field('grey_button');
                    ?>
                <h2><?php echo $title;?></h2>
                <p><?php echo $text;?><p> 
                    <?php 
                        if( $orange_link ): 
                            $link_url = $orange_link['url'];
                            $link_title = $orange_link['title'];
                            $link_target = $orange_link['target'] ? $orange_link['target'] : '_self';
                            ?>
                            <a class="btn btnTrans" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="shard"></div>
    </div>
                        
    <div class="home-whatWeDo h-100">
        <div class="container" style="margin-bottom: 60px;">
            <div class="" style="padding: 0 40px;">
                <?php if( get_sub_field('full_width_content') ):
                    the_sub_field('full_width_content');
                endif; ?>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<!-- end PAID FOR SECTION -->

<!-- VIENNA SECTION -->

<div class="home-whatWeDo h-100">
    <div class="container" style="margin-bottom: 60px;">
        <div class="table">
            <div class="tableCell first">
                <div class="" style="padding: 0 40px;">
                    <?php if( have_rows('vienna_group') ): ?>
                        <?php while( have_rows('vienna_group') ): the_row(); ?>

                                <?php if( have_rows('intro_content') ): ?>
                                    <?php while( have_rows('intro_content') ): the_row(); 

                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    $orange_link = get_sub_field('orange_button');
                                    $grey_link = get_sub_field('grey_button');
                                    ?>

                                    <div class="grid-wrapper grid-two-cols mb-40">
                                        <div class="forty d-flex flex-column h-100">
                                            <h1 class="green"><?php echo $title;?></h1>
                                            <div class="pr-40">
                                                <p class="mt-0"><?php echo $text;?></p> 
                                            </div>
                                                        
                                            <div class="h-100 mt-auto">
                                                <?php 
                                                    if( $orange_link ): 
                                                        $link_url = $orange_link['url'];
                                                        $link_title = $orange_link['title'];
                                                        $link_target = $orange_link['target'] ? $orange_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnTrans btnOrange" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                                <?php 
                                
                                                    if( $grey_link ): 
                                                        $link_url = $grey_link['url'];
                                                        $link_title = $grey_link['title'];
                                                        $link_target = $grey_link['target'] ? $grey_link['target'] : '_self';
                                                        ?>
                                                        <a class="btn btnGrey" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="text"><?php echo esc_html( $link_title ); ?></span> <span class="shard"></span> </a>
                                                    <?php endif; ?>
                                            </div>
                                            
                                            </div><!-- end .forty -->

                                    <?php endwhile; ?>
                                <?php endif; ?>

                                            <div class="sixty">
                                                <?php if( get_sub_field('image') ): 
                                                    $image = get_sub_field('image');
                                                        // ACF IMAGE (ID) - MAKE SURE FIELD IS SET TO 'Image ID'
                                                        $image_size = 'six-four';
                                                        $image_src = wp_get_attachment_image_src( $image, $image_size );
                                                        $image_srcset = wp_get_attachment_image_srcset( $image, $image_size );
                                                        $image_srcset_sizes = wp_get_attachment_image_sizes( $image, $image_size );
                                                        $image_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
                                                        //$image_caption = get_the_excerpt( $image );
                                                ?>
                                                    <img class="w-100 h-100" 
                                                        src="<?php echo esc_url( $image_src[0] ); ?>"
                                                        srcset="<?php echo esc_attr( $image_srcset ); ?>"
                                                        sizes="<?php echo esc_attr( $image_srcset_sizes ); ?>" 
                                                        alt="<?php echo $image_alt ?>"
                                                    />
                                                <?php endif; ?>
                                            </div><!-- end .sixty -->

                                    </div><!-- end .grid-wrapper -->

                                    <?php if( get_sub_field('full_width_content') ):
                                        the_sub_field('full_width_content');
                                    endif; ?>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- end .home-whatWeDo -->

<!-- end VIENNA SECTION -->


<!-- HAPPENING SECTION -->

<div class="genericPromos">
    <div class="container">
        <div class="promos">
            <?php $loop = new WP_Query(array('post_type' => 'new','posts_per_page' => 1)); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="tableCell first">
                <a href="<?php echo get_permalink();?>" class="promo promo1 latestNews">
                    <img src="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'six-four', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>" height="240" width="400" title="What's Happening" alt="What's Happening" class="promoMask" />
                    <h3 class="lightGreen"> <span class="text">What's Happening</span> <span class="shard"></span></h3>
                    <div class="btn"><?php the_title();?></div>
                    <p class="date"><?php echo get_the_date();?></p>
                    <p><?php echo strip_tags( get_the_excerpt() ); ?></p>
                    <div class="btnText btnTextGreen">Read full story</div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <div class="promo promo2 form">
                <h3>Free heating assessment</h3>
                <p>Request a free heating assessment from one of our partners.</p>
                <?php echo do_shortcode( '[contact-form-7 id="7539" title="Heating Assessment"]' ); ?>
            </div>
            <div class="tableCell last"><a href="<?php echo site_url();?>/our-offering/specialist-training/" class="promo promo3 promoSmall training"><img src="<?php echo get_template_directory_uri();?>/images/promo_small_unrivalled_training.jpg" height="240" width="320" title="Unrivalled Training" alt="Unrivalled Training" class="promoMask" />
                    <h3 class="darkGreen"> <span class="text">Training</span> <span class="shard"></span></h3>
                    <div class="btn">Unrivalled training</div>
                    <?php the_field('training');?>
                    <div class="btnText btnTextGreen">Learn more</div>
                </a></div>
        </div>
    </div>
    <div class="square square-left"></div>
    <div class="square square-right"></div>
</div>

<!-- end HAPPENING SECTION -->

<?php get_footer();?>