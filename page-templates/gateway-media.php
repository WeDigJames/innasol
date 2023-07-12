<?php /* Template Name: Gateway Media */ get_header();?>

<div class="gateway-details">
    <h2>Media Library <a class="add-new" href="<?php echo site_url();?>/innasol-partner-gateway/media-library-add/">Add New Media</a></h2>

    <div class="col-1">

        <div class="category-search">

            <label>Search</label>

            <input type="text" id="myInputTextField">

        </div>

        <div class="category-search">

            <label>Filter by Category</label>

            <?php $conn = new mysqli('shareddb-s.hosting.stackcp.net', 'innasol_db-3132354bdf', '658eebeedccf1b6e81ad1f4d3e78ace6', 'innasol_db-3132354bdf') or die('Cannot connect to db'); $result = $conn->query("SELECT DISTINCT category_1 FROM partneruploads ORDER BY category_1 ASC"); echo '<select name="category_1" id="category_1" required >'; echo '<option value="" selected></option>'; while ($row = $result->fetch_assoc()) { if($row['category_1'] != '' || $row['category_1'] != NULL) { $id = $row['category_1']; $name = $row['category_1']; echo '<option value="'.strtolower(str_replace(" ", "",$id)).'" class="">'.$name.'</option>';}; }; echo "</select>"; ?>

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
                        <td><a class="button" target="_blank" href="<?php echo get_template_directory_uri();?>/gateway-media/<?php echo $result->path; ?>">View</a><a class="button" href="<?php echo site_url();?>/innasol-partner-gateway/media-library-edit/?media=<?php echo $result->id; ?>">Edit</a></td>
                    </tr>

                    <?php };?>

                </tbody>
            </table>

        </div>

    </div>

    <div class="clear"></div>
</div>

<?php get_footer(); ?>