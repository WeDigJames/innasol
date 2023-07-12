<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Language" content="en_GB" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/531c0213ef.js" crossorigin="anonymous"></script>
    <?php $user = wp_get_current_user();
    $allowed_roles = array('partner', 'superadmin', 'administrator');
    if (array_intersect($allowed_roles, $user->roles)) {  ?>
        <link href="<?php echo get_template_directory_uri(); ?>/css/featherlight.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/featherlight.gallery.css" rel="stylesheet" />
        <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
        <link href="<?php echo get_template_directory_uri(); ?>/css/dropify.min.css" rel="stylesheet" />
    <?php } ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" rel="stylesheet" />

</head>

<body <?php body_class(); ?>>
    <div style="display:none !important; height: 0px !important; width: 0px !important; overflow:hidden !important">
        <img src="<?php echo get_template_directory_uri(); ?>/images/btn-angle-green.png" style="display:none !important; height: 0px !important; width: 0px !important; overflow:hidden !important" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/btn-trans-hover.png" style="display:none !important; height: 0px !important; width: 0px !important; overflow:hidden !important" />
    </div>

    <div id="backToTop"></div>
    <div id="container">
        <div class="topBar"></div>
        <nav class="mainNav" id="myHeader">

            <?php if (current_user_can('superadmin') || current_user_can('administrator') || current_user_can('editor')) {;  ?>

                <div class="super">
                    <button id="super">Enable Editing</button>
                    <ul>
                        <li><a href="<?php echo site_url(); ?>/innasol-partner-gateway/media-library/">Media Library</a></li>
                        <li><a href="<?php echo site_url(); ?>/innasol-partner-gateway/verify-users/">Verify Users</a></li>
                        <li><a href="<?php echo site_url(); ?>/innasol-partner-gateway/registered-users/">Registered Users</a></li>
                    </ul>
                </div>
            <?php } ?>

            <div class="container">

                <?php if (is_page_template('page-templates/gateway.php') || is_page_template('page-templates/gateway-media-add.php') || is_page_template('page-templates/gateway-edit.php') || is_page_template('page-templates/gateway-media-edit.php') || is_page_template('page-templates/gateway-media.php') || is_page_template('page-templates/gateway-verify.php') || is_page_template('page-templates/gateway-registered.php')) {  ?>
                    <div class="logo"> <a class='active' href="<?php echo site_url(); ?>/innasol-partner-gateway/"> <span class="hidden">Innasol - Super Power</span> </a></div>
                <?php } else {; ?>
                    <div class="logo"> <a class='active' href="<?php echo site_url(); ?>"> <span class="hidden">Innasol - Super Power</span> </a></div>
                <?php } ?>

                <div class="partnersBg"></div>
                <div class="navToggle open"></div>
                <div class="menu-main-menu-container">
                    <?php if (is_page_template('page-templates/gateway.php') || is_page_template('page-templates/gateway-media-add.php') || is_page_template('page-templates/gateway-edit.php') || is_page_template('page-templates/gateway-media.php') || is_page_template('page-templates/gateway-media-edit.php') || is_page_template('page-templates/gateway-verify.php') || is_page_template('page-templates/gateway-registered.php')) {  ?>
                        <?php wp_nav_menu(array('theme_location' => 'gateway-menu', 'walker' => new innasol_walker_nav_menu(), 'container' => 'ul', 'container_id' => 'menu-main-menu', 'container_class' => 'menu')); ?>
                    <?php } else {; ?>
                        <?php wp_nav_menu(array('theme_location' => 'main-menu', 'walker' => new innasol_walker_nav_menu(), 'container' => 'ul', 'container_id' => 'menu-main-menu', 'container_class' => 'menu')); ?>
                    <?php } ?>
                </div>
            </div>
        </nav>