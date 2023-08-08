<?php /* Template Name: Partners */ get_header(); ?>

<style>

/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
  margin-bottom: 10px;
  border: none;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.accordion.active, .accordion:hover,
button:focus {
  background-color: #ccc;
  background: #ccc;
  border: none;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;

}

.accordion:after {
  content: '\02795'; /* Unicode character for "plus" sign (+) */
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

.accordion.active:after {
  content: "\2796"; /* Unicode character for "minus" sign (-) */
}

 /* Style the tab */
 .tab {
  float: left;
  border-top: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-bottom: 1px solid #ccc;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

.tablinks:after {
  content: '\25BA';
  font-size: 13px;
  color: #777;
  float: right;
  margin-left: 5px;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0 1.5rem 3rem;
  width: 70%;
  border: none;
  height: 100%;
  background:transparent;
}

.card {
    padding:1.5rem;
    color: white
}
.card.bgLightGreen {
    background-color: #8DB528;
 
}
.panel.bgLightGreen li, .panel.bgGrey li, .panel.bgLightGreen h3, .panel.bgGrey h3 {
    color: white
}
.card.bgDarkGreen  {
    background-color: #1a2707;
}
.services-title {
    background-color: #fff;
    color: #1f1f1f;
    padding: 15px 20px;
    margin: 0 0 20px 0 !important;
    font-size: 16px;
    font-weight: bold;
}
.address {
  margin: 5px 0;
  color: #fff;
  font-size: 14px;
  word-break: break-word;
}

</style>

<div class="page becomeAPartner">
    <div class="pageHeader" style="background-image: url('<?php if (get_field('banner_footer_image')) {; $bg_image = get_field('banner_footer_image');
    $size = 'slider'; ?><?php echo wp_get_attachment_image_url( $bg_image, $size ); }; ?>')">
        <div class="container">
            <div class="t-heading--xlarge t-heading--white c-legend__title">Certified Partners</div>
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
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
                    } ?>
                    <div class="single-page">
                        
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <?php the_content(); ?>
                        <?php endwhile;
                        endif; ?>

                        <!-- FAQs -->               

                        <?php if( have_rows('questions') ): ?>

                            <div class="schema-faq-code" itemscope="" itemtype="https://schema.org/FAQPage">
                                
                                <?php // loop through the rows of data for the tab header
                                while ( have_rows('questions') ) : the_row();
                                    
                                    $header = get_sub_field('faq_question');
                                    $content = get_sub_field('faq_answer');

                                ?>  
                                    
                                <div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question" class="faq-question">
                                    <button class="accordion" itemprop="name"><?php echo $header; ?></button>
                                    <div class="panel" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                        <p itemprop="text"><?php echo $content; ?></p>
                                    </div>
                                </div>

                                <?php endwhile; ?>

                            <?php else :

                                echo 'Got any questions?';

                            endif; ?>

                            </div>
                        <!-- end FAQs -->  

                    </div>

                    <div class="sidebar">
                        <div class="promo partners">
                            <h3>Innasol Partners Gateway</h3>
                            <?php the_field('sidebar'); ?>
                            <a href="<?php echo site_url(); ?>/innasol-partner-gateway/" class="btn btnGrey" target="_self"> <span class="text">Access Partners Gateway</span> <span class="shard"></span> </a>
                        </div>
                        <div class="promo training">
                            <a href="<?php echo site_url(); ?>/our-offering/biomass-boiler-training/"><img src="<?php echo get_template_directory_uri(); ?>/images/promo_small_unrivalled_training.jpg" height="240" width="480" title="Unrivalled Training" alt="Unrivalled Training" data-mask="whoWeArePromo" class="promoMask" />
                                <h4>Unrivalled<br />Training</h4>
                                <div class="btnText btnTextGreen">Learn more</div>
                            </a>
                        </div>
                        <div class="training">
                            <p style="width:100%;float:left;"><a href="<?php //echo home_url(); ?>/contact-us/" target="_self" class="btn btnGrey" style="line-height:1.2;color:#fff;float:left;"><span class="text">CONTACT US</span> <span class="shard"></span></a></p>
                        </div>
                    </div>

                </div>

                <div id="mapSearch" class="rem-group">
                    <h1>FIND A LOCAL INNASOL CERTIFIED PARTNER</h1>
                    <p>Search for your nearest Innasol Certified Partner to be connected with one of our elite installers.</p>
                    <style>
                        select#radiusSelect_1 {
                            display: block !important;
                            opacity: 1 !important;
                            appearance: inherit !important;
                            position: revert !important;
                            left: revert !important;
                            height: 28px !important;
                            width: auto !important;
                            margin: auto !important;
                            border-width: revert !important;
                        }
                    </style>
                    
                    <?php 
                        $terms = get_terms('service'); 
                        $count = count($terms); 
                        if ( $count > 0 ) :
                    ?>
                        <div id="PartnerServices">
                            <!-- Tab links -->
                            <div class="tab">
                                <?php 
                                    //$terms = get_terms('service'); 
                                   // $count = count($terms); 
                                    //if ( $count > 0 ){  
                                        foreach ( $terms as $term ) {  
                                            echo '<button class="tablinks" onclick="openService(event, \''.$term->slug.'\')" >'.$term->name.'</button>';
                                        }
                                    //} 
                                ?>

                            </div>

                            <!-- Tab content -->

                            <?php 
                                //$terms = get_terms('service'); 
                                //$count = count($terms); 
                                //if ( $count > 0 ) {  
                                    foreach ( $terms as $term ) : ?>

                                    <div id="<?php echo $term->slug ?>" class="tabcontent">
                                        <h3><?php echo $term->name ?></h3>

                                        <?php // WP_Query arguments
                                            $args = array(
                                                //'name'                   => 'product',
                                                'post_type'              => array( 'certifiedpartners' ),
                                                'post_status'            => array( 'publish' ),
                                                'nopaging'               => true,
                                                'order'                  => 'ASC',
                                                'orderby'                => 'menu_order',
                                                'tax_query' => array(
                                                    array(
                                                    'taxonomy' => 'service',
                                                    'field' => 'slug',            
                                                    'terms' => $term->slug,
                                                    ),
                                                )
                                            );

                                            // The Query
                                            $query = new WP_Query( $args );
                                        ?>

                                        <div class="grid-wrapper grid-two-cols">


                                            <?php if ( $query->have_posts() ) : ?>
                                                <?php while ( $query->have_posts() ): $query->the_post(); $post_count++; ?>

                                                    <?php //get_template_part( 'loop-templates/content', 'product' ); ?>

                                                        <div class="card bgLightGreen">

                                                        
                                                            <p class="services-title"><?php the_title(); ?></p>
                                                            
                                                            <div class="address">
                                                                <?php the_field('partner_name'); ?><br>
                                                                <?php the_field('partner_phone_number'); ?></br>
                                                                <?php the_field('partner_email'); ?></br>
                                                                <?php the_field('partner_address'); ?>
                                                            </div>
                                                            
                                                            
                                                            
                                                        </div>
                                                    

                                                <?php endwhile; ?>
                                            <?php endif; wp_reset_query(); ?>

                                        </div>

                                        



                                    </div>

                                        
                                    <?php endforeach ; ?> 
                        </div>
                    <?php endif; ?>
                    <div class="mb-40">
                        <p style="text-align: center;">Can't find a suitable Innasol Certified Partner? <a href="<?php echo esc_url(home_url('/')); ?>contact-us/">Contact us</a> and we can find you a local Innasol Partner.</p>
                    </div>
                    <div id="mapsSearchWrap">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="becomePartnerMap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/pic1.jpg')">
        <div class="container">
            <div class="content">
                <h2 class="t-heading--white t-heading--thin becomePartnerMap-h2">The UK's Largest professional partner network</h2>
                <?php the_field('network'); ?>
                <p> <a class="btn btnGrey" href="<?php echo site_url(); ?>/become-a-certified-partner/"> <span class="text">Learn More</span> <span class="shard"></span></a></p>
            </div>
        </div>
        <div class="square square-left"></div>
        <div class="square square-right"></div>
    </div>

    <?php get_footer(); ?>

<script type='text/javascript'> 

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    jQuery(".tab button:first").attr("id","defaultOpen");

    function openService(evt, serviceSlug) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(serviceSlug).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();


</script>