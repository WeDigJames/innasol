<?php /* Template Name: Gateway Media Edit */ $mediaID = $_GET['media']; get_header();?>

<?php global $wpdb;

$results = $wpdb->get_results("SELECT * FROM partneruploads WHERE id='$mediaID'");

if ( $results ) { 
    
foreach ($results as $result) {; ?>

<div class="gateway-details">
    <h2>Media Library</h2>
    <div class="media-holder">
        <div class="img-holder">

            <?php if(preg_match('(jpg|jpeg|png)', $result->path) === 1) {;?>
            <img src="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" />
            <?php } else {;?>
            <object class="pdf-holder" data="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" type="application/pdf">
                <embed src="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" type="application/pdf" />
            </object>
            <?php };?>

            <div class="form bottom">
                <div class="submit-wrap">
                    <form id='auto-form' action='<?php echo get_template_directory_uri();?>/js/gateway-media-delete.php' method='post' enctype='multipart/form-data'>
                        <input type="hidden" name="id" id="id" value="<?php echo $_GET['media'];?>" />
                        <div id="nf_submit_8"><input type="submit" value="DELETE" class="wpcf7-form-control wpcf7-submit" /></div>
                    </form>
                </div>
            </div>
        </div>

        <form id='' action='<?php echo get_template_directory_uri();?>/js/gateway-media-edit.php' method='post' enctype='multipart/form-data'>
            <input type="hidden" name="id" id="id" value="<?php echo $result->id; ?>" />
            <div class="row">
                <label>Upload <span>*</span></label>
                <input type="file" id="media" name="media" class="dropify" data-default-file="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" value="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" />
            </div>
            <div class="row">
                <label>Title <span>*</span></label>
                <input type="text" name="title" id="title" value="<?php echo $result->title; ?>" />
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

<?php };?>


<?php } else {;?>

<div class="gateway-details">
    <h2>There was a problem.</h2>
</div>

<?php };?>

<?php get_footer(); ?>