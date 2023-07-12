<?php /* Template Name: Gateway Media Add */ get_header();?>

<div class="gateway-details">
    <h2>Media Library</h2>
    <div class="media-holder">

        <form id='' action='<?php echo get_template_directory_uri();?>/js/gateway-media-add.php' method='post' enctype='multipart/form-data'>
            <div class="row">
                <label>Upload <span>*</span></label>
                <input type="file" id="media" name="media" class="dropify" />
            </div>
            <div class="row">
                <label>Title <span>*</span></label>
                <input type="text" name="title" id="title" placeholder="" />
            </div>
            <div class="row">
                <label>Category <span>*</span></label>
                <select name="category_1">
                    <option value=""></option>
                    <?php $loop = new WP_Query(array('post_type' => 'media_cats','orderby' => 'name','order' => 'ASC','posts_per_page' => -1,'meta_query' => array(array('key' => 'category','value' => '1')),)); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <option value="<?php the_title();?>" class="" <?php $db = $result->category_1; if($db == get_the_title()){ echo 'selected'; };?>><?php the_title();?></option>
                    <?php endwhile; wp_reset_postdata(); ?>
                </select>
            </div>
            <div class="row">
                <label>Sub-Category <span>*</span></label>
                <select name="category_2">
                    <option value=""></option>
                    <?php $loop = new WP_Query(array('post_type' => 'media_cats','orderby' => 'name','order' => 'ASC','posts_per_page' => -1,'meta_query' => array(array('key' => 'category','value' => '2')),)); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <option value="<?php the_title();?>" class="" <?php $db = $result->category_2; if($db == get_the_title()){ echo 'selected'; };?>><?php the_title();?></option>
                    <?php endwhile; wp_reset_postdata(); ?>
                </select>
            </div>
            <div class="row">
                <label>Sub-Sub-Category</label>
                <select name="category_3">
                    <option value=""></option>
                    <?php $loop = new WP_Query(array('post_type' => 'media_cats','orderby' => 'name','order' => 'ASC','posts_per_page' => -1,'meta_query' => array(array('key' => 'category','value' => '3')),)); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <option value="<?php the_title();?>" class="" <?php $db = $result->category_3; if($db == get_the_title()){ echo 'selected'; };?>><?php the_title();?></option>
                    <?php endwhile; wp_reset_postdata(); ?>
                </select>
            </div>
            <div class="form bottom">
                <div class="submit-wrap">
                    <div id="nf_submit_8"><input type="submit" value="SUBMIT" id="" class="wpcf7-form-control wpcf7-submit" /></div>
                </div>
            </div>
        </form>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>