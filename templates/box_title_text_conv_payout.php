<?php
if(1 == 2 ){ // ( get_field('video_embedded') != "" ){
    $video_code = str_replace("www.youtube.com/watch?v=", "i1.ytimg.com/vi/", get_field('video_embedded') );
    $img = $video_code.'/default.jpg';
}else{
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'video-thumbnail' ); 
    $img = $img[0];
}
//$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<li>
    <a href="<?php echo permalink_url($post->ID) ?>" class="video img bgfull" style="background-image: url('<?php echo $img;?>')"></a>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">LEARN MORE</a>

    
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
    <?php
    //echo expand_ratings_template('%RATINGS_USERS% vote', get_the_ID());
    //the_date();
    //the_ratings();
    ?>
</li>