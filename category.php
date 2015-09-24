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
                        <?php echo single_cat_title("", false); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
<div class="wrapper pageMiddle">
    <p class="lead media"><?php echo single_cat_title("", false); ?></p>
    <p class="leadBlack"></p>
    <div class="clearfix">
        <div class="leftCol">
            <div class="listNewsLetter">
                <ul>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <li>
                            <a class="title" href="<?php echo get_permalink($post->ID) ?>"><?php the_title(); ?></a>
                            <p class="limitWord"><?php echo get_the_excerpt() ?></p>
                            <span class="date"><?php echo get_the_date("d/m/Y") ?></span>
                            <a href="<?php echo get_permalink($post->ID) ?>" class="read">Watch Now</a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php the_posts_navigation(); ?>
            </div>
        </div>
    </div>
</div>