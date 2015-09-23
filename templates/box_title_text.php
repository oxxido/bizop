<li>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
<?php if (isset($payout) && $payout == 1){ ?>
    <?php if ( get_field('payout') == "" ){ ?>
        <span class="payout">PAYOUT<span>$0</span></span>
    <?php }else{ ?>
        <span class="payout">PAYOUT<span><?php the_field('payout');?></span></span>
    <?php } ?>
<?php }?>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">VIEW NOW!</a>
    <?php
    //echo expand_ratings_template('%RATINGS_USERS% vote', get_the_ID());
    //the_date();
    //the_ratings();
    ?>
</li>