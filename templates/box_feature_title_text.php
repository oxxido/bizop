<?php
if ( get_field('video_embedded') != "" ){
    $video_code = str_replace("www.youtube.com/watch?v=", "i1.ytimg.com/vi/", get_field('video_embedded') );
    $img = $video_code.'/default.jpg';
}else{
    $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 }
//$img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<li>

    <a href="<?php echo permalink_url($post->ID) ?>" class="video img bgfull" style="background-image: url('<?php echo $img;?>')"></a>
    <a class="title" href="<?php echo permalink_url($post->ID) ?>"><?php the_title(); ?></a>
    <p class="limitWord"><?php echo get_the_excerpt() ?></p>
    <a class="button" href="<?php echo permalink_url($post->ID) ?>">WATCH NOW</a>
</li>
