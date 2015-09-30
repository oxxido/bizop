<?php
if(1 == 2 ){ // ( get_field('video_embedded') != "" ){
    $video_code = str_replace("www.youtube.com/watch?v=", "i1.ytimg.com/vi/", get_field('video_embedded') );
    $img = $video_code.'/default.jpg';
}else{
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'video-thumbnail' ); 
    $img = $img[0];
} ?>
<li>
    <a href="<?php echo get_permalink($post->ID) ?>" class="img bgfull" style="background-image: url('<?php echo $img;?>')"></a>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">READ NOW</a>
</li>