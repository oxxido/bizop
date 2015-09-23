<?php
/**
 * Template Name: Custom Page
 *
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle fontLarge">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>