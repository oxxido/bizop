<li>

    <a href="<?php echo get_permalink($post->ID) ?>" class="img bgfull" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>')"></a>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">READ NOW</a>
</li>