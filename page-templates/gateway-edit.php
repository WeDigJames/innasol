<?php

$user_id = $_GET['id'];

if(isset($_POST['save_user'])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $verify = $_POST['verify'];
    $id = $_GET['id'];

    $new_user = array(
        'ID' => $user_id,
        'first_name' => $firstname,
        'last_name' => $lastname,
        'user_email' => $email,
        'description' => $company,
        'display_name' => $firstname . ' ' . $lastname,
        'nickname' => $firstname . ' ' . $lastname,
        'role' => $role
    );

    $uid = wp_update_user($new_user);
    
    update_user_meta( $uid, 'verified_partner', $verify );

}

$user_info = get_userdata($user_id);

/* Template Name: Gateway Edit User */ get_header();?>

<div class="gateway-details">
    <h2>Edit User</h2>
    <form action="" method="post" id="save_users">
        <input type="hidden" name="save_user" value="save_user" />
        <div class="row">
            <label>First Name <span>*</span></label>
            <input type="text" id="firstname" name="firstname" value="<?php echo $user_info->first_name;?>" />
        </div>
        <div class="row">
            <label>Last Name <span>*</span></label>
            <input type="text" id="lastname" name="lastname" value="<?php echo $user_info->last_name;?>" />
        </div>
        <div class="row">
            <label>Email <span>*</span></label>
            <input type="email" id="email" name="email" value="<?php echo $user_info->user_login;?>" />
        </div>
        <div class="row">
            <label>Role <span>*</span></label>
            <select id="role" name="role">
                <option value="partner" <?php $user_meta = get_userdata($user_id); $user_roles = $user_meta->roles; if ( in_array( 'partner', $user_roles, true ) ) { echo 'selected';}; ?>>Partner</option>
                <option value="superadmin" <?php $user_meta = get_userdata($user_id); $user_roles = $user_meta->roles; if ( in_array( 'superadmin', $user_roles, true ) ) { echo 'selected';}; ?>>Super Admin</option>
            </select>
        </div>
        <div class="row">
            <label>Company </label>
            <input type="text" id="company" name="company" value="<?php echo $user_info->description;?>" />
        </div>
        <div class="row">
            <label>Verified? <span>*</span></label>
            <select id="verify" name="verify">
                <option value="yes" <?php if(get_user_meta($user_id, 'verified_partner', true) == 'yes') echo 'selected'; ?>>Yes</option>
                <option value="no" <?php if(get_user_meta($user_id, 'verified_partner', true) == 'no') echo 'selected'; ?>>No</option>
            </select>
        </div>
        <div class="form bottom">
            <div class="submit-wrap">
                <div id="nf_submit_8"><input type="submit" value="SAVE" class="wpcf7-form-control wpcf7-submit" onclick="jQuery('#save_users').submit()" /></div>
            </div>
        </div>
    </form>

    <div class="clear"></div>
</div>

<?php get_footer(); ?>