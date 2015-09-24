<li>
    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
    <p><?php $textoCorto =limitar_palabras(get_the_excerpt(), 20,'...' ); echo $textoCorto; ?></p>
    <?php if ( get_field('payout') != "" && get_field('payout') != "0"){ ?>
        <div class="convpayout">
            <span class="payout">PAYOUT<span><?php the_field('payout');?></span></span>
        </div>
    <?php } ?>
    <a href="<?php echo get_permalink($post->ID) ?>" class="read" >Read more...</a>
</li>