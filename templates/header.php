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
                <?php if(get_field('google_plus_url','options')){ ?>
                    <li><a href="<?php the_field('google_plus_url','options');?>"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
                <?php if(get_field('pin_terest_url','options')){ ?>
                    <li><a href="<?php the_field('pin_terest_url','options');?>"><i class="fa fa-pinterest-p"></i></a></li>
                <?php } ?>
                <?php if(get_field('facebook_url','options')){ ?>
                    <li><a href="<?php the_field('facebook_url','options');?>"><i class="fa fa-facebook-f"></i></a></li>
                <?php } ?>
                <?php if(get_field('youtube_url','options')){ ?>
                    <li><a href="<?php the_field('youtube_url','options');?>"><i class="fa fa-youtube"></i></a></li>
                <?php } ?>
            </ul>
            <?php
            session_start();
            $au = Am_Lite::getInstance();
            if ( $au->isLoggedIn() ) {?>
                <ul id="menu-toplinks" class="topLinks">
                    <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84">Welcome back, <?= $au->getName()?> <a href='/amember/profile'>My Account</a> <a href='/amember/logout'>Logout</a></li>
                </ul>
            <?php } else {?>
                <?php wp_nav_menu( array( 'menu_class' => 'topLinks', 'menu' => 'Toplinks','container'=>'false' ) ); ?>
            <?php }?>
            <div class="searchWrap">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                <button class="button">Go</button>
                <a class="advanceSearch" href="#" onclick="jQuery('#advance-cnt').show();">Advanced Search</a>
                <div class="advance-cnt" id="advance-cnt">
                    <p class="close-btn"><a role="button" onclick="jQuery('#advance-cnt').hide();">X</a></p>
                    <div class="searchfrmInput">
                        <label class="lbl">Order of results</label>
                        <input type="radio" value="best" name="order" />
                        <label for="best">Best</label>
                        <input type="radio" value="worst" name="order"  />
                        <label for="worst">Worst</label>
                    </div>
                    <div class="searchfrmInput">
                        <label class="lbl">Type:</label>
                        <input type="radio" value="offer"  name="type" />
                        <label for="Offer">Offer</label>
                        <br/>
                        <input type="radio" value="network" name="type"  />
                        <label for="Network">Network</label>
                        <br/>
                        <input type="radio" value="biz-op" name="type"  />
                        <label for="BizOp">BizOp</label>
                        <br/>
                        <input type="radio" value="mlm" name="type"  />
                        <label for="MLM">MLM</label>
                        <br/>
                        <input type="radio" value="offer-creative" name="type"  />
                        <label for="Creative">Creative</label>
                        <br/>
                        <input type="radio" value="daves-picks" name="type" />
                        <label for="Dave’s Picks">Dave’s Picks</label>
                    </div>
                    <p class="bottom-btn"> <button class="button">Go</button></p>
                </div>
                </form>
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