<li>
    <a class="title" href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
    <p><?php $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' ); echo $textoCorto; ?></p>
    <div class="convpayout">
        <span class="conv">CONV. ACTION <span>12678</span></span>
        <span class="payout">PAYOUT<span>$16.21</span></span>
    </div>
    <a class="button" href="<?php echo get_permalink($post->ID) ?>">LEARN MORE</a>
</li>