<div class="container">
    <div class="row ">
        <div class="col-sm-7">
            <div class="search_sec">
                <form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
                    <div class="input-group col-sm-12 text-right">
                        <input class="search_box" name="s" id="search" value="<?= get_search_query(); ?>" value="" placeholder="Search our site" type="text">
                        <button type="submit" class="search-submit"><img src="<?php bloginfo('template_url');?>/assets/images/search_butt.jpg" alt="" title="" class="search_btn" /></button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        session_start();
        $au = Am_Lite::getInstance();
        if ( $au->isLoggedIn() ) {?>

            <div class="col-sm-3 text-right">Welcome back, <?= $au->getName()?></div>
            <div class="col-sm-2 text-right"><a href='/amember/logout'>Logout</a></div>
        <?php } else {?>
            <form method=post action='/amember/login'>
                <div class="col-sm-1">Username:</div>
                <div class="col-sm-1"><input type='text' name='amember_login' size='5'></div>
                <div class="col-sm-1">Password:</div>
                <div class="col-sm-1"><input type='password' name='amember_pass' size='5'></div>
                <input type='hidden' value='<?php bloginfo('url');?>' name='amember_redirect_url' />
                <div class="col-sm-1"><input type=submit value='Login'></div>
            </form>
        <?php } ?>
    </div>
    <div class="row">
        <section class="menu_bg">
            <nav class="menu_sec">
                <header class="navbar navbar-inverse" role="banner">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                            <ul class="nav navbar-nav">
                                <?php
                                if (has_nav_menu('primary_navigation')) :
                                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
                                endif;
                                ?>
                            </ul>
                        </nav>
                    </div>
                </header>
            </nav>
        </section>
    </div>
</div>
<!-- end of menu_sec -->
