<?php
/**
 * Template Name: Custom Template
 */
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <?php while (have_posts()) : the_post(); ?>
                  <?php get_template_part('templates/page', 'header'); ?>
                  <?php get_template_part('templates/content', 'page'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
