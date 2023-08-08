<?php /* Template Name: Blogs AJAX*/ get_header();?>

https://weichie.com/blog/wordpress-filter-posts-with-ajax/
https://weichie.com/blog/load-more-posts-ajax-wordpress/

<style>
.filter--wrapper {
  margin-bottom: 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}
.filter--wrapper a.active, .filter--wrapper a:hover {
  background: #216000;
  color: #fff;
}
.filter--wrapper a {
  margin-right: 10px;
  margin-bottom: 10px;
  padding: 10px 15px;
  color: #000;
  background: #f4f4f4;
  border-radius: 35px;
  font-size: 15px;
  font-weight: 700;
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
}

.allposts {
  border-top: 1px solid #e7e7e7;
  -webkit-transition: all .5s ease;
  -o-transition: all .5s ease;
  transition: all .5s ease;
}

.paginationLeft {
  height: 100%;
  width: 70%;
  padding-right: 40px !important;
}

.pagination.paginationRight {
  padding-left: 40px;
  padding-right: 44px;
  height: 80px;
  transform: translateY(50%);
  position: absolute;
  right: 0;
  width: 30%
}
</style>

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
                <div class="pagination paginationLeft">

                <?php $categories = get_categories(); ?>

                    <div class="filter--wrapper" id="pub-filter">
                        <a href="#!" class="active" data-slug="">All</a>
                        <?php foreach($categories as $category) : ?>
                                
                            <a class="cat-list_item" href="#!" data-slug="<?= $category->slug; ?>">
                                <?= $category->name; ?>
                            </a>
                                
                        <?php endforeach; ?>
                        
                    </div>

                    

                </div>
                <div class="pagination paginationRight">
                    <?php global $paged; $curpage = $paged ? $paged : 1; $loop = new WP_Query(array('post_type' => 'blogs','posts_per_page' => 20, 'paged' => $paged)); ?>
                    <div class="pagination">
                        <div class="shard"></div>
                        <div class="paginationContent">
                            <span class="showing">Showing 20 of <?php echo $loop->found_posts;?></span>

                            <?php echo '<div class="pages">'; for($i=1;$i<=$loop->max_num_pages;$i++) echo '<a class="'.($i == $curpage ? 'current ' : '').'inactive" href="'.get_pagenum_link($i).'">'.$i.'</a>'; echo '</div>';?>

                        </div>
                    </div>
                </div>

                <?php 
                    $blogs = new WP_Query([
                        'post_type' => 'blogs',
                        'posts_per_page' => 20,
                        'order_by' => 'date',
                        'order' => 'desc',
                    ]);
                ?>

                <?php if($blogs->have_posts()): ?>
                    <div class="allPosts">
                        <?php
                            while($blogs->have_posts()) : $blogs->the_post();      
                                get_template_part('partials/post-content');
                            endwhile;
                        ?>

                        <div class="pagination paginationLeft">
                            <div class="shard"></div>
                            <div class="paginationContent">
                                <span class="showing">Showing 20 of <?php echo $loop->found_posts;?></span>

                                <?php echo '<div class="pages">'; for($i=1;$i<=$loop->max_num_pages;$i++) echo '<a class="'.($i == $curpage ? 'current ' : '').'inactive" href="'.get_pagenum_link($i).'">'.$i.'</a>'; echo '</div>';?>

                            </div>
                        </div>
                    </div>

                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                
                <!--
                <div class="allPosts">
                    <?php //while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="post">

                        <a href="<?php //echo get_permalink();?>" class="image" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'square', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>);"></a>
                        <div class="postContent">
                            <div class="line lineTop"></div>
                            <h3><a class="" href="<?php //echo get_permalink();?>"><?php the_title();?></a></h3>
                            <p class="date"><?php //echo get_the_date('F j, Y');?></p>
                            <?php //the_excerpt(); ?>
                            <div class="line lineBottom"></div>
                            <a href="<?php //echo get_permalink();?>" class="btn btnGrey" target="_self"> <span class="text">Read full story</span> <span class="shard"></span> </a>
                        </div>
                    </div>
                    <?php //endwhile; ?>
                    
                    <?php //wp_reset_postdata(); ?>
                </div>
                -->
            </div>
            <div class="square square-top-left"></div>
            <div class="square square-bottom-left"></div>
            <div class="square square-bottom-right"></div>
            <div class="square square-mid-left"></div>
        </div>

        <?php get_footer(); ?>

<script>
jQuery('.cat-list_item').on('click', function() {
    jQuery('.cat-list_item').removeClass('active');
    jQuery(this).addClass('active');

  jQuery.ajax({
    type: 'POST',
    url: '/wp-admin/admin-ajax.php',
    dataType: 'html',
    data: {
      action: 'filter_posts',
      category: jQuery(this).data('slug'),
    },
    success: function(res) {
        jQuery('.allPosts').html(res);
    }
  })
});
</script>
