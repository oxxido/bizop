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
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</div>