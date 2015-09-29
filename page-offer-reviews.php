<?php
/**
 * Template Name: Offer Reviews Page
 *
 */
?>
<?php get_template_part('templates/banner_pages');
$search = array(1,2,3,4);
$is_pro_platinum = Am_Lite::getInstance()->haveSubscriptions($search);
if ($is_pro_platinum == 1) {
?>
<div class="wrapper pageMiddle">
  <p class="lead small">Not all offers are created equal. It might come in handy to have the segmentation of mobile vs. desktop offers, and even further knowledge of what creative
performs best for each offer. We look for clicks, conversions, and payouts to make sure you don’t waste time and money running offers that don’t convert!
We hope you find these approved reviews from ourselves and others useful, and look forward to hearing of your success with these offers.</p>
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
              $payout = 1;
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      $payout = 0;
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
              $payout = 1;
              include(locate_template('templates/box_title_text.php'));
          endwhile;
          $payout = 0;
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
              $payout = 1;
              include(locate_template('templates/box_title_text.php'));
          endwhile;
          $payout = 0;
      endif; ?>
  </ul>
</div>
<?php }else{ ?>
    <script>
        //jQuery(document).ready(function(){
            window.location.href = "<?php echo esc_url( home_url( '/' ) )."amember/login/"; ?>";
        //})
    </script>
<?php } ?>