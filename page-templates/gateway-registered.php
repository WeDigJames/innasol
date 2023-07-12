<?php /* Template Name: Gateway Registered */ get_header();?>

<?php 

if(isset($_POST['add_user'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $role = $_POST['role'];

    $new_user = array(
        'first_name' => $firstname,
        'last_name' => $lastname,
        'user_login' => $email,
        'user_email' => $email,
        'description' => $company,
        'display_name' => $firstname . ' ' . $lastname,
        'nickname' => $firstname . ' ' . $lastname,
        'role' => $role
    );

    $user_id = wp_insert_user($new_user);
    
    update_user_meta( $user_id, 'verified_partner', 'no' );

}

?>

<div class="gateway-details">
    <h2>Add User</h2>
    <form action="" method="post">
        <input type="hidden" name="add_user" value="add_user" />
        <div class="row">
            <label>First Name <span>*</span></label>
            <input type="text" id="firstname" name="firstname" required />
        </div>
        <div class="row">
            <label>Last Name <span>*</span></label>
            <input type="text" id="lastname" name="lastname" required />
        </div>
        <div class="row">
            <label>Email <span>*</span></label>
            <input type="email" id="email" name="email" required />
        </div>
        <div class="row">
            <label>Role <span>*</span></label>
            <select id="role" name="role">
                <option value="partner" selected>Partner</option>
                <option value="superadmin">Super Admin</option>
            </select>
        </div>
        <div class="row">
            <label>Company </label>
            <input type="text" id="company" name="company" />
        </div>
        <div class="form bottom">
            <div class="submit-wrap">
                <div id="nf_submit_8"><input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit" /></div>
            </div>
        </div>
    </form>
    <div class="clear-100"></div>
    <h2>Registered Users</h2>
    <table id="gateway-users" width="100%" style="width:100%">
        <thead width="100%" style="width:100%">
            <tr width="100%" style="width:100%">
                <th width="20%">First Name</th>
                <th width="20%">Last Name</th>
                <th width="20%">Email</th>
                <th width="20%">Company</th>
                <th width="20%" class="no-sort">&nbsp;</th>
            </tr>
        </thead>
        <tbody width="100%" style="width:100%">
            <?php $args = array('meta_query' => array(array('key' => 'verified_partner','compare' => '==','value'   => 'yes',),'orderby'   => 'nicename','order'   => 'DESC',  ) ); $blogusers = get_users( $args ); foreach ( $blogusers as  $user ) {;?>
            
            <tr width="100%" style="width:100%">
                <td width="20%"><?php echo $user->first_name;?></td>
                <td width="20%"><?php echo $user->last_name;?></td>
                <td width="20%"><?php echo $user->user_email;?></td>
                <td width="20%"><?php echo $user->description;?></td>
                <td width="20%"><button onclick="location.href='<?php echo site_url();?>/innasol-partner-gateway/edit-user/?id=<?php echo $user->ID;?>';" class="user-view" id="<?php echo $user->ID;?>">Edit</button> <button class="delete_user" delete-user-id="<?php echo $user->ID;?>">Delete</button></td>

            </tr>
            <?php };?>
        </tbody>
    </table>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>