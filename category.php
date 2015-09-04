<!-- banner_sec -->
<section class="banner_sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <!-- Slider -->
                <div class="top_slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slider_caption">
                                    <div class="capson_text">
                                        <p>"Stop Wasting Money On ProgramsThatDont'tWork!"</p>
                                        <button class="capson_btn">Subscribe</button>
                                    </div>
                                </div>
                                <img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
                            </li>
                            <li>
                                <div class="slider_caption">
                                    <div class="capson_text">
                                        <p>"Learn FromtheBest.Over 200K Invested inCampaigns That  did Not Pan Out!"</p>
                                        <button class="capson_btn">Subscribe</button>
                                    </div>
                                </div>
                                <img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
                            </li>
                            <li>
                                <div class="slider_caption">
                                    <div class="capson_text">
                                        <p>"SubscribeTodayTo AvoidThePitfallsInOnlineMarketing!"</p>
                                        <button class="capson_btn">Subscribe</button>
                                    </div>
                                </div>
                                <img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Slider -->



            </div>
        </div>
        <div class="banner_text">

            <div class="col-sm-4"><P>SEARCH:</P></div>

            <div class="col-sm-8">
                <div class="search_sec">
                    <input class="search_box" name="search" id="search" value="Search" type="text">
                    <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/search_butt.jpg" alt="" title="" class="search_btn" /></a>
                </div></div>
        </div>


        <!-- mid_sec -->
        <?php if (is_category("video-reviews")){ ?>
        <div class="row">
            <div class="col-sm-6">	<h4>VIDEO REVIEWS</h4></div>
        </div>
        <div class="row">
            <?php if ( have_posts() ) : query_posts('&category_name=video-reviews');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/index-box_feature_text.php'));
                endwhile;
            endif; ?>
        </div>
        <?php }elseif (is_category("scams-to-avoid")){ ?>
            <div class="row">
                <div class="col-sm-6">	<h4>SCAMS TO AVOID</h4></div>
            </div>
            <div class="row">
                <?php if ( have_posts() ) : query_posts('&category_name=scams-to-avoid');
                    while ( have_posts() ) : the_post();
                        $post_id = get_the_ID();
                        include(locate_template('templates/index-box_feature_text.php'));
                    endwhile;
                endif; ?>
            </div>
        <?php }elseif (is_category("featured-blog-posts")){ ?>
            <div class="row">
                <div class="col-sm-6">	<h4>FEATURED BLOG POSTS</h4></div>
            </div>
            <div class="row">
                <?php if ( have_posts() ) : query_posts('&category_name=featured-blog-posts');
                    while ( have_posts() ) : the_post();
                        $post_id = get_the_ID();
                        include(locate_template('templates/index-box_feature_title.php'));
                    endwhile;
                endif; ?>
            </div>
        <?php }elseif (is_category("top-campaign-reviews")){ ?>
            <div class="row">
                <div class="col-sm-6">	<h4>TOP CAMPAIGN REVIEWS</h4></div>
            </div>
            <div class="row">
                <?php if ( have_posts() ) : query_posts('&category_name=top-campaign-reviews');
                    while ( have_posts() ) : the_post();
                        $post_id = get_the_ID();
                        include(locate_template('templates/index-box_title_text.php'));
                    endwhile;
                endif; ?>
            </div>
        <?php } ?>
    </div>
</section>

<!-- end of banner_sec -->