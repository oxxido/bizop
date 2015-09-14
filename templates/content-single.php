<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <p><?php the_content(); ?></p>
    <a href="<?php echo get_permalink($post->ID) ?>" class="read" >Read more...</a>
</article><!-- #post -->