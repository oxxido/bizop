<li>
    <a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/video-thumb.jpg" /></a>
    <a class="title" href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
    <p><?php $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' ); echo $textoCorto; ?>
    </p>
    <a class="button" href="<?php echo get_permalink($post->ID) ?>">WATCH NOW</a>
</li>