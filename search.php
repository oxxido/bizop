<?php //get_template_part('templates/banner_pages'); ?>
<div class="pageBanner" style="background-image: url('http://bizop.mcclainconcepts.net/wp-content/uploads/2015/09/home-banner.jpg')">
    <div class="wrapper">
        <div class="pageTitle">
            <div class="bnrContent">
                <h1>Search Results</h1>
            </div>
        </div>
    </div>
</div>
<div class="wrapper pageMiddle">
    <div class="clearfix">
        <div class="leftCol">
            <div class="listNewsLetter">
            <?php if ( have_posts() ) : ?>
                        <ul>
                <?php //get_template_part('templates/page', 'header'); ?>
                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('templates/content', 'search'); ?>
                <?php endwhile; ?>
                        </ul>
                <?php the_posts_navigation(); ?>

            <?php else : ?>
                <div class="alert alert-warning">
                    <?php _e('Sorry, no results were found.', 'sage'); ?>
                </div>
                <?php get_search_form(); ?>
            <?php endif; ?>
            </div>
        </div>
        <div class="rightCol">
            <div class="listArchive">
                <h3>REFINE YOUR SEARCH</h3>
                <form>
                    <div class="input clearfix">
                        <label class="lbl">You Search Query</label>
                        <input type="text"/>
                    </div>
                    <div class="input clearfix">
                        <p>Order of results</p>
                        <div class="radioGrup clearfix">
                            <input type="radio" name="reviewtype" id="best" />
                            <label for="offer">Best</label>
                            <input type="radio" name="reviewtype" id="worst" />
                            <label for="network">Worst</label>
                        </div>
                    </div>
                    <div class="input clearfix">
                        <p>Type:</p>
                        <div class="radioGrup clearfix">
                            <input type="radio" name="reviewtype" id="offer" />
                            <label for="offer">Offer</label>
                            <input type="radio" name="reviewtype" id="network" />
                            <label for="network">Network</label>
                            <input type="radio" name="reviewtype" id="bizop" />
                            <label for="bizop">BizOp</label>
                            <input type="radio" name="reviewtype" id="mlm" />
                            <label for="mlm">MLM</label>
                            <input type="radio" name="reviewtype" id="offercreative" />
                            <label for="offercreative">Creative</label>
                            <input type="radio" name="reviewtype" id="davepicks" />
                            <label for="offercreative">Dave's Picks</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


