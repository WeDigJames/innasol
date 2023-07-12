<?php get_header(); ?>

<div class="blogPage">
    <div class="pageHeader" style="background-image: url(<?php echo get_template_directory_uri();?>/images/campaign-image.jpg)">
        <div class="container">
            <h2><?php single_term_title(); ?></h2>
            <div class="shard">
                <div class="angle"></div>
            </div>
            <div class="square square-left"></div>
            <div class="square square-top-right"></div>
        </div>
    </div>
    <div id="viewPosts"></div>
    <div class="posts">
        <div class="container">
            <div class="postContent">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>
                <div class="pagination paginationRight">
                    <div class="shard"></div>
                    <div class="paginationContent"> <span class="showing">Showing 7 of 99</span>
                        <div class="pages"><span class="current">1</span><a href='https://innasol.com/blog/page/2/#viewPosts' class="inactive">2</a><a href='https://innasol.com/blog/page/3/#viewPosts' class="inactive">3</a><a href='https://innasol.com/blog/page/4/#viewPosts' class="inactive">4</a><a href='https://innasol.com/blog/page/5/#viewPosts' class="inactive">5</a><a class="arrow arrowNext" href="https://innasol.com/blog/page/2/#viewPosts"></a></div>
                    </div>
                </div>
                <div class="allPosts">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <a href="<?php echo get_permalink();?>" class="image" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>);"></a>
                        <div class="postContent">
                            <div class="line lineTop"></div>
                            <h3><a class="" href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                            <p class="date"><?php echo get_the_date();?></p>
                            <?php the_excerpt(); ?>
                            <div class="line lineBottom"></div>
                        </div><a class="btnText btnTextGreen" href="<?php echo get_permalink();?>">Read full story</a>
                    </div>
                    <?php endwhile; endif; ?>

                </div>
                <div class="pagination paginationLeft">
                    <div class="shard"></div>
                    <div class="paginationContent"> <span class="showing">Showing 7 of 99</span>
                        <div class="pages"><span class="current">1</span><a href='https://innasol.com/blog/page/2/#viewPosts' class="inactive">2</a><a href='https://innasol.com/blog/page/3/#viewPosts' class="inactive">3</a><a href='https://innasol.com/blog/page/4/#viewPosts' class="inactive">4</a><a href='https://innasol.com/blog/page/5/#viewPosts' class="inactive">5</a><a class="arrow arrowNext" href="https://innasol.com/blog/page/2/#viewPosts"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
        <div class="square square-mid-left"></div>
    </div>

    <?php get_footer(); ?>