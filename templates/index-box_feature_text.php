<div class="col-sm-3">
    <div class="mid_sec">

        <p><?php the_title(); ?></p>
        <?php //the_post_thumbnail( array(350,350), $attr ); ?>
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" />
        <!--<img src="<?php //asset_path('images/about.png');?>>-->

        <span>
            <?php
            $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' );
            echo $textoCorto;
            ?>
        </span>
        <button class="r_more_g" onclick="location.href='<?php echo get_permalink($post->ID) ?>'">Watch Now!</button>

    </div>

</div>