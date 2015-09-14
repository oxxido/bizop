<header id="header" class="clearfix">
    <div class="headerTopBar clearfix">
        <div class="wrapper">
            <ul class="socialIcons">
                <?php if(get_field('linkedin_url','options')){ ?>
                    <li><a href="<?php the_field('linkedin_url','options');?>"><i class="fa fa-linkedin-square"></i></a></li>
                <?php } ?>
                <?php if(get_field('twitter_url','options')){ ?>
                    <li><a href="<?php the_field('twitter_url','options');?>"><i class="fa fa-twitter"></i></a></li>
                <?php } ?>
                <?php if(get_field('pin_terest_url','options')){ ?>
                    <li><a href="<?php the_field('pin_terest_url','options');?>"><i class="fa fa-pinterest-p"></i></a></li>
                <?php } ?>
                <?php if(get_field('facebook_url','options')){ ?>
                    <li><a href="<?php the_field('facebook_url','options');?>"><i class="fa fa-facebook-f"></i></a></li>
                <?php } ?>
            </ul>
            <?php
            session_start();
            $au = Am_Lite::getInstance();
            if ( $au->isLoggedIn() ) {?>
                <ul id="menu-toplinks" class="topLinks">
                    <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84">Welcome back, <?= $au->getName()?><a href='/amember/logout'>Logout</a></li>
                </ul>
            <?php } else {?>
                <?php wp_nav_menu( array( 'menu_class' => 'topLinks', 'menu' => 'Toplinks','container'=>'false' ) ); ?>
            <?php }?>
            <div class="searchWrap">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                </form>
                <a class="advanceSearch" href="#">Advanced Search</a>
            </div>
        </div>
    </div>
    <div class="wrapper headerIn clearfix">
        <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <img src="<?php bloginfo('template_url');?>/dist/images/logo.png" alt="" />
        </a>
        <a href="<?php the_field('submit_a_review','options'); ?>" class="btnReview">SUBMIT A REVIEW</a>
        <div id="navbar" class="navbar">
            <button class="menu-toggle"><i class="fa fa-navicon"></i> <?php _e( 'MENU', 'twentythirteen' ); ?></button>
            <?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu','container'=>'false' ) );
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-menu']);
            endif;
            ?>

        </div>
    </div>
</header>