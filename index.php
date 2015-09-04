<!-- banner_sec -->
<section class="banner_sec">

    <div class="row banner_hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?
                    if ( $au->isLoggedIn() ) {?>
                        <!-- Slider -->
                        <div class="top_slider">
                            <ul class="slides">
                                <li>
                                    <div class="slider_caption">
                                        <div class="capson_text">
                                            <h1>Member Dashboard</h1>
                                            <p>Registered User: <span><?= $au->getName()?></span></p>
                                        </div>
                                    </div>
                                    <img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                        <!-- Slider -->
                    <?php } else {?>
                        <!-- Slider -->
                        <div class="top_slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="slider_caption">
                                            <div class="capson_text">
                                                <h1>Stop Wasting Money On Programs That Dont't Work!</h1>
                                                <p>Subscribe today to avoid the pitfalls in online marketing</p>
                                                <button class="capson_btn">Subscribe today</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider_caption">
                                            <div class="capson_text">
                                                <p>"Learn FromtheBest.Over 200K Invested inCampaigns That  did Not Pan Out!"</p>
                                                <button class="capson_btn">Subscribe</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider_caption">
                                            <div class="capson_text">
                                                <p>"SubscribeTodayTo AvoidThePitfallsInOnlineMarketing!"</p>
                                                <button class="capson_btn">Subscribe</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Slider -->
                    <?php }?>
                </div>
            </div>
        </div>
        <img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
    </div>

    <div class="container">

        <?php
        $video_reviews = get_category_by_slug( 'video-reviews' );
        $scams_to_avoid = get_category_by_slug( 'scams-to-avoid' );
        $feature_blog_posts = get_category_by_slug( 'featured-blog-posts' );
        $top_campaign_reviews = get_category_by_slug( 'top-campaign-reviews' );
        ?>
        <!-- mid_sec -->
        <div class="row">
            <div class="col-sm-6">	<h4><a href="<?php echo get_category_link( $video_reviews->term_id );?>">VIDEO REVIEWS</a></h4></div>
        </div>
        <div class="row">
            <?php if ( have_posts() ) : query_posts('&category_name=video-reviews&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_text.php'));
                endwhile;
            endif; ?>
        </div>
        <!-- mid_sec -->
        <div class="row">
            <div class="col-sm-6">	<h4><a href="<?php echo get_category_link( $scams_to_avoid->term_id );?>">SCAMS TO AVOID</a></h4></div>
        </div>
        <div class="row">
            <?php if ( have_posts() ) : query_posts('&category_name=scams-to-avoid&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_text.php'));
                endwhile;
            endif; ?>
        </div>
        <!-- mid_sec -->
        <div class="row">
            <div class="col-sm-6">	<h4><a href="<?php echo get_category_link( $feature_blog_posts->term_id );?>">FEATURED BLOG POSTS</a></h4></div>
        </div>
        <div class="row">
            <?php if ( have_posts() ) : query_posts('&category_name=featured-blog-posts&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_title.php'));
                endwhile;
            endif; ?>
        </div>
        <div class="row">
            <div class="col-sm-6">	<h4><a href="<?php echo get_category_link( $top_campaign_reviews->term_id );?>">TOP CAMPAIGN REVIEWS</a></h4></div>
        </div>
        <div class="row">
            <?php if ( have_posts() ) : query_posts('&category_name=top-campaign-reviews&offset=0&posts_per_page=4');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_title_text.php'));
                endwhile;
            endif; ?>
        </div>
        <!-- end of mid_sec -->
    </div>
</section>

<!-- end of banner_sec -->

<script>
    $(document).ready(function(){
        $('.flexslider').flexslider({
            directionNav: false,
            direction: "horizontal",
            animation: "slide"
        });
    });
</script>