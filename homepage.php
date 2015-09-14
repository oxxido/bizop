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
                <h1>Member Dasboard</h1>
                <h4>Registered User: <span><?= $au->getName()?></span></h4>
            <?php }else{ ?>
                <h1>Stop Wasting Money on Programs That Don’t Work!</h1>
                <h4>Subscribe Today To Avoid The Pitfalls In Online Marketing!</h4>
                <a href="#"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/subscribe-today-but.png" alt="" /></a>
            <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="wrapper pageMiddle">
    <div id="businessTips" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/business-tips-ico.png" alt="" /> TOP BUSINESS TIPS</h2>
        <ul class="reviewList clearfix">
            <?php if ( have_posts() ) : query_posts('&category_name=video-reviews&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_text.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>

    <div id="scamsAvoid" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/scams-ico.png" alt="" /> SCAMS TO AVOID</h2>
        <ul class="reviewList clearfix">
            <?php if ( have_posts() ) : query_posts('&category_name=scams-to-avoid&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_text.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>

    <div id="futuredPost" class="listinhome">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/featured-ico.png" alt="" /> FEATURED BLOG POSTS</h2>
        <ul class="reviewList clearfix">
            <?php if ( have_posts() ) : query_posts('&category_name=featured-blog-posts&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_title.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>

    <div id="futuredReview">
        <h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/dist/images/featured-review-ico.png" alt="" /> FEATURED REVIEWS</h2>
        <ul class="reviewList clearfix">
            <li>
                <a class="title" href="#">Fusce imperdiet</a>
                <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
                <div class="convpayout">
                    <span class="conv">CONV. ACTION <span>12678</span></span>
                    <span class="payout">PAYOUT<span>$16.21</span></span>
                </div>
                <a class="button" href="#">LEARN MORE</a>
            </li>
            <li>
                <a class="title" href="#">Fusce imperdiet</a>
                <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
                <div class="convpayout">
                    <span class="conv">CONV. ACTION <span>12678</span></span>
                    <span class="payout">PAYOUT<span>$16.21</span></span>
                </div>
                <a class="button" href="#">LEARN MORE</a>
            </li>
            <li>
                <a class="title" href="#">Fusce imperdiet</a>
                <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
                <div class="convpayout">
                    <span class="conv">CONV. ACTION <span>12678</span></span>
                    <span class="payout">PAYOUT<span>$16.21</span></span>
                </div>
                <a class="button" href="#">LEARN MORE</a>
            </li>
            <li>
                <a class="title" href="#">Fusce imperdiet</a>
                <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
                <div class="convpayout">
                    <span class="conv">CONV. ACTION <span>12678</span></span>
                    <span class="payout">PAYOUT<span>$16.21</span></span>
                </div>
                <a class="button" href="#">LEARN MORE</a>
            </li>
        </ul>
    </div>
</div>