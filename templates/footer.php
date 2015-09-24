<div class="newsltOuter">
    <script type="text/javascript">
        //<![CDATA[
        if (typeof newsletter_check !== "function") {
            window.newsletter_check = function (f) {
                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                if (!re.test(f.elements["ne"].value)) {
                    alert("The email is not correct");
                    return false;
                }
                for (var i=1; i<20; i++) {
                    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
                        alert("");
                        return false;
                    }
                }
                if (f.elements["ny"] && !f.elements["ny"].checked) {
                    alert("You must accept the privacy statement");
                    return false;
                }
                return true;
            }
        }
        //]]>
    </script>
    <div class="wrapper newsletter newsletter-subscription">
        <form method="post" action="/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)">
            <span class="label">Subscribe to our FREE e-newsletter and learn how you can make money today</span>
            <input class="inputBox" type="email" name="ne" size="30" placeholder="Email Address" required >
            <input class="button orgbut" type="submit" value="GO"/>
        </form>
    </div>
</div>
<footer id="footer" role="contentinfo">
    <div class="wrapper clearfix">
        <?php if(get_field('about_us_text','options')): ?>
            <div class="ftBox about">
                <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a></h3>
                <?php the_field('about_us_text','options'); ?>
            </div>
        <?php endif; ?>

        <?php wp_reset_query(); ?>
        <div class="ftBox latestBlog">
            <h3>Latest Blog Posts</h3>
            <?php query_posts(array('category_name'=>'featured-blog-posts', 'showposts' => '4', 'order' => 'DESC') ); ?>
            <?php if (have_posts()) { ?>
                <ul class="links">
                    <?php  while (have_posts()){ the_post(); ?>
                    <li><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                        <?php } ?>
                </ul>
            <?php } ?>
        </div>

        <div class="ftBox conctUs">
            <h3>Contact Us</h3>
            <?php the_field('address','options'); ?>
        </div>
        <ul class="ftBox footSocials">
            <li class="title">Follow<br />Us</li>
            <?php if(get_field('facebook_url','options')){ ?>
                <li><a href="<?php the_field('facebook_url','options');?>" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
            <?php } ?>
            <?php if(get_field('twitter_url','options')){ ?>
                <li><a href="<?php the_field('twitter_url','options');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <?php } ?>
            <?php if(get_field('pin_terest_url','options')){ ?>
                <li><a href="<?php the_field('pin_terest_url','options');?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
            <?php } ?>
            <?php if(get_field('linkedin_url','options')){ ?>
                <li><a href="<?php the_field('linkedin_url','options');?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
            <?php } ?>
            <?php if(get_field('google_plus_url','options')){ ?>
                <li><a href="<?php the_field('google_plus_url','options');?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
            <?php } ?>
            <?php if(get_field('youtube_url','options')){ ?>
                <li><a href="<?php the_field('youtube_url','options');?>" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
            <?php } ?>
        </ul>
    </div>
</footer>
<div class="copyright">
    <div class="wrapper">
        <?php wp_nav_menu( array( 'menu_class' => 'policyLinks', 'menu' => 'policy','container'=>'false' ) ); ?>
        <?php the_field('copyright_text','options');?>
    </div>
</div><!-- .site-info -->


