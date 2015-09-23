<?php
/**
 * Template Name: Offer Reviews Page
 *
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <p class="lead small">Not all of your opportunities lie in affiliate marketing; there are other business opportunities and MLMs to keep your eye out for. Below, you will find ours and other member’s approved recommendations for biz ops and MLMs. These include comparative reviews and in-depth analysis’ to support a decision to go or not to go with an opportunity, so you can make a decision on which opportunities might be worth investing in.</p>
  <h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/mobile-icon.jpg" alt="" /> TOP MOBILE OFFERS </h2>
  <ul class="reviewList clearfix">
      <?php
      $args_mobile_offer = array(
          'cat'  => get_category_by_slug('mobile-offer')->term_id,
          'posts_per_page'   => '4',
          'meta_key' => 'ratings_average',
          'orderby' => 'meta_value_num', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
          'order' => 'DESC',
      );
      if ( have_posts() ) : query_posts($args_mobile_offer);
          while ( have_posts() ) : the_post();
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      endif; ?>
  </ul>
  <h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/desktop-icon.jpg" alt="" /> TOP DESKTOP OFFERS </h2>
  <ul class="reviewList clearfix">
      <?php
      $args_desktop_offer = array(
          'cat'  => get_category_by_slug('desktop-offer')->term_id,
          'posts_per_page'   => '4',
          'meta_key' => 'ratings_average',
          'orderby' => 'meta_value_num', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
          'order' => 'DESC',
      );
      if ( have_posts() ) : query_posts($args_desktop_offer);
          while ( have_posts() ) : the_post();
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      endif; ?>
  </ul>
  <h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/bulb-icon.jpg" alt="" /> TOP CREATIVE FOR OFFERS </h2>
  <ul class="reviewList clearfix">
      <?php
      $args_offer_creative = array(
          'cat'  => get_category_by_slug('offer-creative')->term_id,
          'posts_per_page'   => '4',
          'meta_key' => 'ratings_average',
          'orderby' => 'meta_value_num', //array( 'meta_value_num' => 'DESC', 'date' => 'ASC' )
          'order' => 'DESC',
      );
      if ( have_posts() ) : query_posts($args_offer_creative);
          while ( have_posts() ) : the_post();
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      endif; ?>
  </ul>
</div>
