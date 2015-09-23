<?php
/**
 * Template Name: Network Page
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <p class="lead small">You may have a great offer or campaign in mind, but the network you run offers or advertise on can make all the difference in your success. We will find the networks that have the fastest payouts, highest EPCs, and pre-approved offers that actually convert! Additionally, we will let you know of the networks you probably should avoid, so you feel confident in your affiliate network choice(s). Below, you will find ours and member's approved recommendations for
    networks. These include comparative reviews as well as in-depth dives into what works and what doesn’t for many popular or niche networks.</p>
  <h2 class="listTitle"> <img src="<?php bloginfo('template_url');?>/dist/images/list-title-icon.jpg" alt="" /> ALL NETWORK REVIEWS </h2>
  <ul class="reviewList clearfix">
      <?php if ( have_posts() ) : query_posts('&category_name=network&offset=0&posts_per_page=12');
          while ( have_posts() ) : the_post();
              $post_id = get_the_ID();
              include(locate_template('templates/box_title_text.php'));
          endwhile;
      endif; ?>
  </ul>
</div>
