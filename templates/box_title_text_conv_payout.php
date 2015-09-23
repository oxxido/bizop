<li>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
    <div class="convpayout">
        <?php if ( get_field('conv_action') == "" ){ ?>
            <span class="conv">CONV. ACTION <span>0</span></span>
        <?php }else{ ?>
            <span class="conv">CONV. ACTION <span><?php the_field('conv_action');?></span></span>
        <?php } ?>
        <?php if ( get_field('payout') == "" ){ ?>
            <span class="payout">PAYOUT<span>$0</span></span>
        <?php }else{ ?>
            <span class="payout">PAYOUT<span><?php the_field('payout');?></span></span>
        <?php } ?>
    </div>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">LEARN MORE</a>
    <?php
    //echo expand_ratings_template('%RATINGS_USERS% vote', get_the_ID());
    //the_date();
    //the_ratings();
    ?>
</li>