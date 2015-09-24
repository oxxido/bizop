<?php //get_template_part('templates/banner_pages'); ?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);


$args_scams = array('s' => $_GET['s'], 'post_type' => 'post');

if (isset($_GET['type'])) {
    $order = 'ASC';

    if (isset($_GET['order']) && $_GET['order'] == "best") {
        $order = 'DESC';
    }

    $args_scams = array(
        'post_type' => 'post',
        'category_name' => $_GET['type'],
        'meta_key' => 'ratings_average',
        'orderby' => 'meta_value_num',
        'order' => $order,
        's' => $_GET['s']
    );
}
?>
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
            <div class="listNewsLetter listResult">
                <?php if ( have_posts() ) : ?>
                    <ul>
                        <?php
                        if ( have_posts() ) : query_posts($args_scams);
                            while ( have_posts() ) : the_post();
                                get_template_part('templates/content', 'search');
                            endwhile;
                        endif; ?>
                    </ul>
                    <?php the_posts_navigation(); ?>

                <?php else : ?>
                    <h3><?php _e('Sorry, no results were found.', 'sage'); ?></h3>
                    <div class="searchfrmInput">
                        <label class="lbl">Your Search Query</label>
                        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                        </form>
                        <a class="advanceSearch" href="#">Advanced Search</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="rightCol">
            <div>
                <h3>REFINE YOUR SEARCH</h3>
                <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                    <div class="searchfrmInput">
                        <label class="lbl">Your Search Query</label>
                        <input type="text" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                    </div>
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
                </form>
            </div>
        </div>
    </div>
</div>

<?php if (isset($_GET['order'])) { ?>
    <script>
        jQuery(document).ready(function($){
            $('input[value="<?php echo $_GET['order'] ?>"]').prop("checked", true)
        })
    </script>
<?php } ?>

<?php if (isset($_GET['type'])) { ?>
    <script>
        jQuery(document).ready(function($){
            $('input[value="<?php echo $_GET['type'] ?>"]').prop("checked", true)
        })
    </script>
<?php } ?>