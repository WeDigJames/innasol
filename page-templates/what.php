<?php /* Template Name: CTA Page Template */ get_header(); ?>

<style>
    .swiper-container h1 {
        color: #fff !important;
        font-size: 48px !important;
    }

    .swiper .swiper-content .content {
        bottom: 198px;
    }

    .what-about {
        margin-top: 75px;
    }

    .tableCell.first,
    .tableCell.second {
        width: 50%;
    }

    .tableCell.second video {
        margin-left: 25px;
        max-width: 500px !important;
    }

    .greenStats {
        padding: 50px;
        background: #2c3d10;
        font-size: 20px;
        color: #fff;
    }

    .greenStats h1 {
        color: #8db63f;
    }

    .greenStats ul {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        color: #fff;
    }

    .greenStats ul li {
        color: #fff;
        max-width: 85%;
    }

    .what-info .tableCell.first,
    .what-info .tableCell.second {
        padding: 80px 0 0;
    }

    .what-info .tableCell.first>div,
    .what-info .tableCell.second>div {
        max-width: 80%;
    }

    .what-info hr {
        margin: 80px 0;
    }

    .what-info .tableCell {
        vertical-align: top;
    }

    .what-table * {
        vertical-align: top;
    }

    .what-table h1 {
        margin-bottom: 30px;
    }

    .what-table h2 {
        margin-top: 30px;
        font-size: 26px;
    }

    .what-table .tableCell.first,
    .what-table .tableCell.second {
        vertical-align: top;
    }

    .genericPromos {
        height: auto;
    } 
    
    .genericPromos .promos {
        margin: 0;
        padding: 0;
    }

    .what-table .tableCell.first>div {
        width: 85%;
    }

    .caseStudies {
        display: none;
    }
</style>

<div class="swiper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('<?php the_field('slide_image_-_1'); ?>')"></div>
        </div>
        <div class="swiper-content">
            <div class="container">
                <div id="swiperContent0" class="content show">
                    <?php the_field('slide_content_-_1'); ?>
                    <a href="<?php echo get_field('slide_link_-_1'); ?>" class="btn btnTrans" style="background: #fd912a;clip-path: polygon(0 0, 100% 0%, 78% 100%, 0% 100%);color:#fff!important;"> <span class="text">How does it work?</span> </a>
                </div>
            </div>
        </div>
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

<div class="what-about">
    <div id="about" style="position: relative;top:-250px;"></div>
    <div class="container" style="margin-bottom: 60px;">
        <div class="table">
            <div class="tableCell first">
                <div class="" style="">

                    <h1><?php echo get_field('section_1_title'); ?></h1>

                    <?php echo get_field('section_1_content'); ?>

                    <a href="<?php echo get_field('section_1_link'); ?>" class="btn btnGrey"> <span class="text">Talk To Us</span> <span class="shard"></span> </a>

                </div>

            </div>

            <div class="tableCell second">

                <video controls poster="<?php echo get_field('section_1_video_cover'); ?>" src="<?php echo get_field('section_1_video')['url']; ?>">
                    Your browser does not support the video tag.
                </video>

            </div>
        </div>
    </div>
</div>

<div class="greenStats">
    <div id="stats" style="position: relative;top:-250px;"></div>
    <div class="container">
        <h1><?php echo get_field('stats_title'); ?></h1>

        <ul>
            <li><?php echo get_field('stat_1'); ?></li>
            <li><?php echo get_field('stat_2'); ?></li>
            <li><?php echo get_field('stat_3'); ?></li>
        </ul>
    </div>
</div>

<div class="what-info">
    <div id="info" style="position: relative;top:-250px;"></div>

    <div class="container" style="margin-bottom: 60px;">

        <div class="table">

            <div class="tableCell first">

                <div class="" style="">

                    <h1><?php echo get_field('section_2_title'); ?></h1>

                    <?php echo get_field('section_2_content'); ?>

                    <div style="margin-top: 40px;">

                        <a href="<?php echo get_field('section_2_link'); ?>" class="btn btnGrey"> <span class="text">Talk To Us</span> <span class="shard"></span> </a>

                    </div>

                </div>

            </div>

            <div class="tableCell second">

                <div class="" style="">

                    <h1><?php echo get_field('section_3_title'); ?></h1>

                    <?php echo get_field('section_3_content'); ?>

                    <div style="margin-top: 40px;">

                        <a href="<?php echo get_field('section_3_link'); ?>" class="btn btnGrey"> <span class="text">Talk To Us</span> <span class="shard"></span> </a>

                    </div>

                </div>

            </div>

        </div>

        <hr />

    </div>

</div>

<div class="what-table">

    <div id="form" style="position: relative;top:-250px;"></div>

    <div class="container" style="margin-bottom: 60px;">

        <div class="table">

            <div class="tableCell first">

                <div class="" style="">

                    <h1><?php echo get_field('contact_title'); ?></h1>

                    <?php echo get_field('contact_content'); ?>
                </div>

            </div>

            <div class="tableCell second">

                <div class="" style="">

                    <div class="genericPromos">
                        <div class="promos">
                            <div class="promo promo2 form">
                                <?php echo get_field('contact_form'); ?>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<?php get_footer(); ?>