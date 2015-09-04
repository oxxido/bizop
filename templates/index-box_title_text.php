<div class="col-sm-3">
    <div class="mid_sec">

        <p><?php the_title(); ?></p>
        <span><?php
            $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' );
            echo $textoCorto;
            ?></span>
        <span>Number Of Conversion (? - revisar)</span>
        <span>Campaign Payout (? - revisar)</span>
        <button class="r_more_g" onclick="location.href='<?php echo get_permalink($post->ID) ?>'">Learn More!</button>

    </div>

</div>