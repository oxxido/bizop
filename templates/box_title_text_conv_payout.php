<li>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
    <?php if (get_field('conv_action') != "" 
           && get_field('conv_action') != "0"
           && get_field('payout') != ""
           && get_field('payout') != "0") { ?>
    <div class="convpayout">
        <?php if ( get_field('conv_action') != "" && get_field('conv_action') != "0"){ ?>
            <span class="conv">CONV. ACTION <span><?php the_field('conv_action');?></span></span>
        <?php } ?>
        <?php if ( get_field('payout') != "" && get_field('payout') != "0" ){ ?>
            <span class="payout">PAYOUT<span><?php the_field('payout');?></span></span>
        <?php } ?>
    </div>
    <?php } //end if !="0" ?>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">LEARN MORE</a>
    <?php
    //echo expand_ratings_template('%RATINGS_USERS% vote', get_the_ID());
    //the_date();
    //the_ratings();
    ?>
</li>