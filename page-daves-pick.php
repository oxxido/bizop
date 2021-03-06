<?php
/**
 Template Name: Dave’s Picks Page
 */
?>
<?php get_template_part('templates/banner_pages');
$search = array(1,2,3,4);
$is_pro_platinum = Am_Lite::getInstance()->haveSubscriptions($search);
if ($is_pro_platinum == 1) {
?>
<div class="wrapper pageMiddle">
	<div class="lead small">
    </div>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> ALL DAVE’S PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        $cat_futuredReview_IDs = get_category_by_slug('network')->term_id;
        $cat_futuredReview_IDs .= ',' . get_category_by_slug('biz-op')->term_id;
        $cat_futuredReview_IDs .= ',' . get_category_by_slug('offer')->term_id;
        //$cat_futuredReview_IDs = get_category_by_slug('daves-picks')->term_id;
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
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S OFFER PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        //$cat_futuredReview_IDs = get_category_by_slug('daves-offer-picks')->term_id;
        $cat_futuredReview_IDs = get_category_by_slug('offer')->term_id;
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
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S NETWORK PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        //$cat_futuredReview_IDs = get_category_by_slug('daves-network-picks')->term_id;
        $cat_futuredReview_IDs = get_category_by_slug('network')->term_id;
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
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
	<h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/yellow-star.jpg" alt="" /> DAVE’S BIZ OP/MLM PICKS </h2>
	<ul class="reviewList clearfix">
        <?php
        //$cat_futuredReview_IDs = get_category_by_slug('daves-biz-op-mlm-picks')->term_id;
        $cat_futuredReview_IDs = get_category_by_slug('biz-op')->term_id;
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
                include(locate_template('templates/box_title_text.php'));
            endwhile;
        endif; ?>
	</ul>
</div>
<?php }else{ ?>
    <script>
        window.location.href = "<?php echo esc_url( home_url( '/' ) )."amember/login/"; ?>";
    </script>
<?php } ?>