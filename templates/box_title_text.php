<li>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
    <?php if ( isset($payout) && $payout == 1 && get_field('payout') != "" && get_field('payout') != "0"){ ?>
        <div class="convpayout">
            <span class="payout">PAYOUT<span><?php the_field('payout');?></span></span>
        </div>
    <?php } ?>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">VIEW NOW!</a>
    <?php
    //echo expand_ratings_template('%RATINGS_USERS% vote', get_the_ID());
    //the_date();
    //the_ratings();
    ?>
</li>