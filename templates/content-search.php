<li>
    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
    <p><?php $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' ); echo $textoCorto; ?></p>
    <div class="priceWrap">
        <p>PAYOUT<span>$16.21</span></p>
    </div>
    <a href="<?php echo get_permalink($post->ID) ?>" class="read" >Read more...</a>
</li>