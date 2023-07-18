<?php /* Template Name: News */ get_header();?>

<div class="blogPage">
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
    <div id="viewPosts"></div>
    <div class="posts">
        <div class="container">
            <div class="postContent">
                <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); }?>
                <div class="pagination paginationRight">
                    <?php global $paged; $curpage = $paged ? $paged : 1; $loop = new WP_Query(array('post_type' => 'new','posts_per_page' => 20, 'paged' => $paged)); ?>
                    <div class="pagination">
                        <div class="shard"></div>
                        <div class="paginationContent">
                            <span class="showing">Showing 20 of <?php echo $loop->found_posts;?></span>

                            <?php echo '<div class="pages">'; for($i=1;$i<=$loop->max_num_pages;$i++) echo '<a class="'.($i == $curpage ? 'current ' : '').'inactive" href="'.get_pagenum_link($i).'">'.$i.'</a>'; echo '</div>';?>
                        </div>
                    </div>
                </div>
                <div class="allPosts">
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="post">
                        <a href="<?php echo get_permalink();?>" class="image" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'square', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>);"></a>
                        <div class="postContent">
                            <div class="line lineTop"></div>
                            <h3><a class="" href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                            <p class="date"><?php echo get_the_date();?></p>
                            <?php the_excerpt(); ?>
                            <div class="line lineBottom"></div>
                            <a href="<?php echo get_permalink();?>" class="btn btnGrey" target="_self"> <span class="text">Read full story</span> <span class="shard"></span> </a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <div class="pagination paginationLeft">
                        <div class="shard"></div>
                        <div class="paginationContent">
                            <span class="showing">Showing 20 of <?php echo $loop->found_posts;?></span>

                            <?php echo '<div class="pages">'; for($i=1;$i<=$loop->max_num_pages;$i++) echo '<a class="'.($i == $curpage ? 'current ' : '').'inactive" href="'.get_pagenum_link($i).'">'.$i.'</a>'; echo '</div>';?>

                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="square square-top-left"></div>
        <div class="square square-bottom-left"></div>
        <div class="square square-bottom-right"></div>
        <div class="square square-mid-left"></div>
    </div>

    <?php get_footer(); ?>