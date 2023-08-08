<div class="post">
    <a href="<?php echo get_permalink();?>" class="image" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'square', true); $thumb_url = $thumb_url_array[0]; echo $thumb_url; ?>);"></a>
    <div class="postContent">
        <div class="line lineTop"></div>
        <h3><a class="" href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
        <p class="date"><?php echo get_the_date('F j, Y');?></p>
        <?php the_excerpt(); ?>
        <div class="line lineBottom"></div>
        <a href="<?php echo get_permalink();?>" class="btn btnGrey" target="_self"> <span class="text">Read full story</span> <span class="shard"></span> </a>
    </div>
</div>