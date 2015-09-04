<div class="col-sm-3">
    <div class="mid_sec">

        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" />
        <p><?php the_title(); ?></p>
        <!-- <span>Short discription of text </span> -->
        <button class="r_more_g" onclick="location.href='<?php echo get_permalink($post->ID) ?>'">Read More!</button>

    </div>

</div>