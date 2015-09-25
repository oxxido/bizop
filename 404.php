<?php
$image =  esc_url( home_url( '/' ) )."wp-content/uploads/2015/09/home-banner.jpg";
if ( get_field('page_banner') == "" ){ ?>
<div class="pageBanner" style="background-image: url('<?php echo $image; ?>')">
<?php }else{ ?>
<div class="pageBanner" style="background-image: url('<?php the_field('page_banner') ?>')">
<?php } ?>
        <div class="wrapper">
            <div class="pageTitle">
                <div class="bnrContent">
                    <h1>
                        Page not Found - 404
                    </h1>
                </div>
            </div>
        </div>
    </div>
<div class="wrapper pageMiddle fontLarge">
    <p class="lead">Not Found</p>
    <p class="leadblack"><?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?></p>
    <?php get_search_form(); ?>
</div>
