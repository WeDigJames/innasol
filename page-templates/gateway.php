<?php if (!is_user_logged_in()) {
wp_redirect( home_url( '/innasol-partner-gateway/register/' ) );
exit;
} /* Template Name: Gateway */ get_header();?>

<div class="page becomeAPartner">
    <div class="pageHeader" style="background-image: url(<?php the_field('banner_footer_image');?>)">
        <div class="container">
            <div class="t-heading--xlarge t-heading--white c-legend__title"><?php the_title();?></div>
            <div class="shard">
                <div class="angle"></div>
            </div>
            <div class="square square-left"></div>
            <div class="square square-top-right"></div>
        </div>
    </div>
    <div class="posts">
        <div class="container">
            <div class="postContent postStyles">
                <div class="rem-group">
                    <div class="breadcrumbs"><span><span><a href="<?php echo site_url();?>/innasol-partner-gateway/">Innasol Partner Gateway</a></span></span></div>
                    <div class="single-page">
                        <?php if(is_page(7610)){;?>
                        <div class="promos">
                            <a href="<?php echo site_url();?>/innasol-partner-gateway/downloads/" class="promo promo2"> <img src="<?php echo site_url();?>/wp-content/uploads/2019/12/ETA-Biomass-Boiler-Maintenance-Contracts.jpg" height="240" width="480" title="Unequalled Products" alt="Unequalled Products" data-mask="homeWhatWeDoPromo" class="promoMask" />
                                <h4 class="promos-title">Downloads</h4>
                                <div class="btn">View</div>
                            </a>
                            <a href="<?php echo site_url();?>/innasol-partner-gateway/webinars/" class="promo promo2"> <img src="<?php echo site_url();?>/wp-content/uploads/2019/12/ETA-Biomass-Boiler-Servicing.jpg" height="240" width="480" title="Unequalled Products" alt="Unequalled Products" data-mask="homeWhatWeDoPromo" class="promoMask" />
                                <h4 class="promos-title">Webinars</h4>
                                <div class="btn">View</div>
                            </a>
                            <a href="<?php echo site_url();?>/innasol-partner-gateway/finance-calculator/" class="promo promo2"> <img src="<?php echo site_url();?>/wp-content/uploads/2019/12/header_homepage_forest_2.jpg" height="240" width="480" title="Unequalled Products" alt="Unequalled Products" data-mask="homeWhatWeDoPromo" class="promoMask" />
                                <h4 class="promos-title">Innosal Finance Calculator</h4>
                                <div class="btn">View</div>
                            </a>
                        </div>
                        <?php } elseif(is_page(7616)){;?>
                        <form id="finance-calculator">
                            <div class="square-right"></div>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                            <div class="space"></div>
                            <div class="row">
                                <div class="half">
                                    <label for="years">Years Trading</label>
                                    <select class="select" id="years" name="years">
                                        <option value="" selected>Please Select ...</option>
                                        <option value="over">Over 3 Years</option>
                                        <option value="under">Under 3 Years</option>
                                    </select>
                                </div>
                                <div class="half">
                                    <label for="term">Term</label>
                                    <select class="select" id="term" name="term">
                                        <option value="" selected>Please Select ...</option>
                                        <option id="three" value="31.04">3 Years</option>
                                        <option id="four" value="23.85">4 Years</option>
                                        <option id="five" value="19.54">5 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="half">
                                    <label for="amount">Amount</label>
                                    <input type="number" id="amount" name="amount" min="10000" max="1000000" />
                                    <small>Min £10,000, Max £1,000,000</small>
                                </div>
                                <div class="half">
                                    <label for="">&nbsp;</label>
                                    <div class="form">
                                        <div class="submit-wrap">
                                            <div id="nf_submit_8"><input id="calculate" type="submit" value="Calculate" class="wpcf7-form-control wpcf7-submit" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space"></div>
                            <h3>Monthly Rental: <span>£<span id="result">0.00</span></span> ex VAT</h3>
                            <div class="clear"></div>
                        </form>

                        <?php } elseif(is_page(8561)){;?>

                        <h2>Downloads</h2>

                        <div class="col-1">

        <div class="category-search">

            <label>Search</label>

            <input type="text" id="myInputTextField">

        </div>

        <div class="category-search">

            <label>Filter by Category</label>

            <?php 
            
            $conn = new mysqli('shareddb-s.hosting.stackcp.net', 'innasol_db-3132354bdf', '658eebeedccf1b6e81ad1f4d3e78ace6', 'innasol_db-3132354bdf') or die('Cannot connect to db'); 
            
            $result = $conn->query("SELECT DISTINCT category_1 FROM partneruploads ORDER BY category_1 ASC"); 
            
            echo '<select name="category_1" id="category_1" required >'; echo '<option value="" selected></option>'; while ($row = $result->fetch_assoc()) { if($row['category_1'] != '' || $row['category_1'] != NULL) { $id = $row['category_1']; $name = $row['category_1']; echo '<option value="'.strtolower(str_replace(" ", "",$id)).'" class="">'.$name.'</option>';}; }; echo "</select>"; ?>
            
            <label>Filter by Sub-Category</label>

            <?php $conn = new mysqli('shareddb-s.hosting.stackcp.net', 'innasol_db-3132354bdf', '658eebeedccf1b6e81ad1f4d3e78ace6', 'innasol_db-3132354bdf') or die('Cannot connect to db'); $result = $conn->query("SELECT DISTINCT category_1, category_2 FROM partneruploads ORDER BY category_1, category_2 ASC"); echo '<select name="category_2" id="category_2" required >'; echo '<option value="" selected></option>'; while ($row = $result->fetch_assoc()) { if($row['category_2'] != '' || $row['category_2'] != NULL) { $cat2id = $row['category_2']; $cat1id = $row['category_1']; $cat2name = $row['category_2']; echo '<option value="'.strtolower(str_replace(" ", "",$cat2id)).'" class="'.strtolower(str_replace(" ", "",$cat1id)).'">'.$cat2name.'</option>';}}; echo "</select>";?>
            
            <label>Filter by Sub-Sub-Category</label>

            <?php $conn = new mysqli('shareddb-s.hosting.stackcp.net', 'innasol_db-3132354bdf', '658eebeedccf1b6e81ad1f4d3e78ace6', 'innasol_db-3132354bdf') or die('Cannot connect to db'); $result = $conn->query("SELECT DISTINCT category_1, category_2, category_3 FROM partneruploads ORDER BY category_1, category_2, category_3 ASC"); echo '<select name="category_3" id="category_3" required >'; echo '<option value="" selected></option>'; while ($row = $result->fetch_assoc()) { if($row['category_3'] != '' || $row['category_3'] != NULL) { $cat1id = $row['category_1']; $cat2id = $row['category_2']; $cat3name = $row['category_3']; echo '<option class="'.strtolower(str_replace(" ", "",$cat2id)).'">'.$cat3name.'</option>'; }}; echo "</select>";?>


        </div>

    </div>

    <div class="col-4">

        <p id="new-table-intro">Please choose a search term or category ...</p>

        <div id="new-table-holder">

            <table id="gateway-users-2" width="100%" style="width:100%">

                <thead width="100%">
                    <tr width="100%">
                        <th width="5%">File</th>
                        <th width="15%">Name</th>
                        <th width="25%">Category 1</th>
                        <th width="25%">Category 2</th>
                        <th width="25%">Category 3</th>
                        <th width="5%" class="no-sort">&nbsp;</th>
                    </tr>
                </thead>

                <tbody width="100%">

                    <?php $query = 'SELECT * FROM partneruploads'; $total_query = "SELECT COUNT(1) FROM (${query}) AS combined_table"; $total = $wpdb->get_var( $total_query ); $results = $wpdb->get_results( $query.' ORDER BY title ASC ', OBJECT ); ?>

                    <?php foreach ($results as $result) {; ?>

                    <tr width="100%">

                        <td><?php if(preg_match('(jpg|jpeg|png)', $result->path) === 1) {;?><img height="20" src="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>" /><?php } elseif(preg_match('(tif)', $result->path) === 1) {;?><img height="30" src="<?php echo get_template_directory_uri();?>/images/gateway-tif.png" /><?php } else {;?><img height="30" src="<?php echo get_template_directory_uri();?>/images/gateway-pdf.png" /><?php };?></td>
                        <td><?php echo $result->title; ?></td>
                        <td><?php echo $result->category_1; ?></td>
                        <td><?php echo $result->category_2; ?></td>
                        <td><?php echo $result->category_3; ?></td>
                        <td><a class="button" target="_blank" href="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>">View</a></td>
                    </tr>

                    <?php };?>

                </tbody>
            </table>

        </div>

    </div>

                        <div class="clear"></div>

                        <?php } else {;?>

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                        <?php };?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>