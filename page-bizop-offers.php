<?php
/**
 * Template Name: Bizop Offers Page
 *
 */
?>

<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <p class="lead small">Not all of your opportunities lie in affiliate marketing; there are other business opportunities and MLMs to keep your eye out for. Below, you will find ours and other member’s approved recommendations for biz ops and MLMs. These include comparative reviews and in-depth analysis’ to support a decision to go or not to go with an opportunity, so you can make a decision on which opportunities might be worth investing in.</p>
  <h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/list-title-icon.jpg" alt="" /> ALL BIZ OP / MLM REVIEWS </h2>
  <ul class="reviewList clearfix">
      <?php
      $catIDs = get_category_by_slug('biz-op')->term_id;
      $catIDs .= ',' . get_category_by_slug('mlm')->term_id;
      //print_r($catIDs);
      $args_reviews = array(
          'cat'  => $catIDs,
          'posts_per_page'   => '12',
          'meta_key' => 'ratings_average'
          //'orderby' => 'meta_value_num date', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
          //'order' => 'DESC',
      );
      if ( have_posts() ) : query_posts($args_reviews);
          while ( have_posts() ) : the_post();
              $post_id = get_the_ID();
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      endif; ?>
  </ul>
</div>
