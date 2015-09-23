<?php
/**
 * Template Name:Newsletter Page
 *
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <p class="lead media">Featured Newsletters</p>
  <p class="leadBlack">Read our latest e-newsletters and dive through our archives to see what is new with Biz Op Reports as well as get access to general business insight that can help you get going and continue on the path to success!</p>
  <div class="clearfix">
    <div class="leftCol">
      <div class="listNewsLetter">
        <ul>
        <?php if ( have_posts() ) : query_posts('&category_name=newsletter&offset=0');
            while ( have_posts() ) : the_post();?>
                <li>
                    <a class="title" href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
                    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
                    <span class="date"><?php echo get_the_date("d/m/Y") ?></span>
                    <a href="<?php echo get_permalink($post->ID) ?>" class="read">Read Newsletter</a>
                </li>
            <?php endwhile;
        endif; ?>
        </ul>
      </div>
    </div>
    <div class="rightCol">
      <div class="listArchive">
        <h3>ARCHIVES</h3>
        <ul>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
          <li> <a href="#" class="title">Fusce imperdiet in los
            maximus sed acceran</a> <span class="date">04/08/2015</span> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
