<?php
/**
 Template Name: Dave’s Picks Page
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
	<div class="lead small">You may have a great offer or campaign in mind, but the network you run offers or advertise on can make all the difference in your success. We will find the networks that have the fastest payouts, highest EPCs, and pre-approved offers that actually convert! Additionally, we will let you know of the networks you probably should avoid, so you feel confident in your affiliate network choice(s). Below, you will find ours and member's approved recommendations for
		networks. These include comparative reviews as well as in-depth dives into what works and what doesn’t for many popular or niche networks.
    </div>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> ALL DAVE’S PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        $cat_futuredReview_IDs = get_category_by_slug('daves-picks')->term_id;
        print_r($cat_futuredReview_IDs);
        $args_reviews = array(
            'cat'  => $cat_futuredReview_IDs,
            'posts_per_page'   => '4',
            'meta_key' => 'ratings_average',
            'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
            'order' => 'DESC',
        );
        if ( have_posts() ) : query_posts($args_reviews);
            while ( have_posts() ) : the_post();
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S OFFER PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        $cat_futuredReview_IDs = get_category_by_slug('daves-offer-picks')->term_id;
        print_r($cat_futuredReview_IDs);
        $args_reviews = array(
            'cat'  => $cat_futuredReview_IDs,
            'posts_per_page'   => '4',
            'meta_key' => 'ratings_average',
            'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
            'order' => 'DESC',
        );
        if ( have_posts() ) : query_posts($args_reviews);
            while ( have_posts() ) : the_post();
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S NETWORK PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        $cat_futuredReview_IDs = get_category_by_slug('daves-network-picks')->term_id;
        print_r($cat_futuredReview_IDs);
        $args_reviews = array(
            'cat'  => $cat_futuredReview_IDs,
            'posts_per_page'   => '4',
            'meta_key' => 'ratings_average',
            'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
            'order' => 'DESC',
        );
        if ( have_posts() ) : query_posts($args_reviews);
            while ( have_posts() ) : the_post();
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S BIZ OP/MLM PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        $cat_futuredReview_IDs = get_category_by_slug('daves-biz-op-mlm-picks')->term_id;
        print_r($cat_futuredReview_IDs);
        $args_reviews = array(
            'cat'  => $cat_futuredReview_IDs,
            'posts_per_page'   => '4',
            'meta_key' => 'ratings_average',
            'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
            'order' => 'DESC',
        );
        if ( have_posts() ) : query_posts($args_reviews);
            while ( have_posts() ) : the_post();
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
</div>
