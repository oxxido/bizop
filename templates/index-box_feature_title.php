<li>
    <a href="#" class="img"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" /></a>
    <a class="title" href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
    <a class="button" href="<?php echo get_permalink($post->ID) ?>">WATCH NOW</a>
</li>