<?php
/**
 * Template Name: Home Page
 *
 */
$video_reviews = get_category_by_slug( 'video-reviews' );
$scams_to_avoid = get_category_by_slug( 'scams-to-avoid' );
$feature_blog_posts = get_category_by_slug( 'featured-blog-posts' );
$top_campaign_reviews = get_category_by_slug( 'top-campaign-reviews' );
?>

<div class="pageBanner <?php if ( !$au->isLoggedIn() ) { echo 'homeBanner'; }?>" style="background-image: url('<?php the_field('page_banner'); ?>')">
    <div class="wrapper">
        <div class="pageTitle">
            <div class="bnrContent">
            <?php if ( $au->isLoggedIn() ) {?>
                <h1>Member Dashboard</h1>
                <h3>Registered User: <span><?= $au->getName()?></span></h3>
            <?php }else{ ?>
                <h1>Stop Wasting Money on Programs That Don’t Work!</h1>
                <h4>Subscribe Today To Avoid The Pitfalls In Online Marketing!</h4>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>amember/signup"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/subscribe-today-but.png" alt="" /></a>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="wrapper pageMiddle">
    <div id="businessTips" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/business-tips-ico.png" alt="" /> TOP BUSINESS TIPS</h2>
        <ul class="reviewList clearfix">
            <?php
            //$cat_businessTips_IDs = get_category_by_slug('business-tips')->term_id;
            //$cat_businessTips_IDs .= ',' . get_category_by_slug('personal-development-tips')->term_id;
            $cat_businessTips_IDs = "2";
            //print_r($cat_businessTips_IDs);+
            $args_video = array(
                'cat'  => $cat_businessTips_IDs,
                'posts_per_page'   => '4'
            );
            if ( have_posts() ) : query_posts($args_video);
                while ( have_posts() ) : the_post();
                    include(locate_template('templates/box_feature_title_text.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>

    <!-- <div id="scamsAvoid" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/scams-ico.png" alt="" /> SCAMS TO AVOID</h2>
        <ul class="reviewList clearfix">
            <?php
            $args_scams = array(
                'category_name'  => get_category_by_slug('scams-to-avoid')->term_id,
                'posts_per_page'   => '4',
                'meta_key' => 'ratings_average',
                'orderby' => array( 'meta_value_num' => 'ASC', 'date' => 'DESC' ),
                //'order' => 'DESC',
            );
            if ( have_posts() ) : query_posts($args_scams);
                while ( have_posts() ) : the_post();
                    //include(locate_template('templates/box_feature_title_text.php'));
                endwhile;
            endif; ?>
        </ul>
    </div> -->

    <div id="futuredPost" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/featured-ico.png" alt="" /> FEATURED BLOG POSTS</h2>
        <ul class="reviewList clearfix">
            <?php if ( have_posts() ) : query_posts('&category_name=featured-blog-posts&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    include(locate_template('templates/box_feature_title.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>

    <div id="futuredReview">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/featured-review-ico.png" alt="" /> FEATURED REVIEWS</h2>
        <ul class="reviewList clearfix">
            <?php
            $cat_futuredReview_IDs = get_category_by_slug('network')->term_id;
            $cat_futuredReview_IDs .= ',' . get_category_by_slug('biz-op')->term_id;
            $cat_futuredReview_IDs .= ',' . get_category_by_slug('offer')->term_id;
            $cat_futuredReview_IDs .= ',' . get_category_by_slug('mlm')->term_id;
            //print_r($cat_futuredReview_IDs);
            $args_reviews = array(
                'cat'  => $cat_futuredReview_IDs,
                'posts_per_page'   => '4',
                'meta_key' => 'ratings_average',
                'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
                'order' => 'DESC',
            );
            if ( have_posts() ) : query_posts($args_reviews);
                while ( have_posts() ) : the_post();
                    include(locate_template('templates/box_title_text_conv_payout.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>
</div>