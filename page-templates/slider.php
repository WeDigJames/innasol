

    <?php
    $slide_image_1 = get_field('slide_image_-_1');
    $slide_image_2 = get_field('slide_image_-_2');
    $slide_image_3 = get_field('slide_image_-_3');
    $slide_image_4 = get_field('slide_image_-_4');
    $slide_image_5 = get_field('slide_image_-_5');
    $slide_image_5 = get_field('slide_image_-_6');
?>
<div class="swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_1['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_2['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_3['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_4['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_5['sizes']['slider']; ?>')"></div>
            <div class="swiper-slide" style="background-image: url('<?php echo $slide_image_6['sizes']['slider']; ?>')"></div>
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
                <div id="swiperContent5" class="content hide">
                    <?php the_field('slide_content_-_6');?>
                    <a href="<?php the_field('slide_link_-_6');?>" class="btn btnTrans"> <span class="text">Learn more</span> </a>
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