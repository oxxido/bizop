<?php //get_template_part('templates/banner_pages'); ?>
<div class="pageBanner" style="background-image: url('http://bizop.mcclainconcepts.net/wp-content/uploads/2015/09/home-banner.jpg')">
    <div class="wrapper">
        <div class="pageTitle">
            <div class="bnrContent">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="wrapper pageMiddle">
    <div id="content" class="site-content" role="main">

        <?php /* The loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('templates/content-single', get_post_type()); ?>
        <?php endwhile; ?>

    </div><!-- #content -->
</div><!-- #primary -->