<?php
/*
Template Name: Search Page
*/
?>

<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);


$args_scams = array('s' => $_GET['s']);

if (isset($_GET['type'])) {
    $order = 'ASC';

    if (isset($_GET['order']) && $_GET['order'] == "best") {
        $order = 'DESC';
    }

    $args_scams = array(
        'category_name' => $_GET['type'],
        'meta_key' => 'ratings_average',
        'orderby' => 'meta_value_num',
        'order' => $order,
        's' => $_GET['s']
    );
}
?>

<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <div class="clearfix">
      <div class="leftCol">
          <div class="listNewsLetter">
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
        <h3>REFINE YOUR SEARCH</h3>
        <div class="searchfrmInput">
            <label class="lbl">Your Search Query</label>
            <input type="text" />
        </div>
        <div class="searchfrmInput">
            <label class="lbl">Order of results</label>
            <input type="radio" id="best" name="order"  />
            <label for="best">Best</label>
            <input type="radio" id="worst" name="order"  />
            <label for="worst">Worst</label>
        </div>
        <div class="searchfrmInput">
            <label class="lbl">Type:</label>
            <input type="radio" id="Offer"  name="type" />
            <label for="Offer">Offer</label>
            <br/>
            <input type="radio" id="Network" name="type"  />
            <label for="Network">Network</label>
            <br/>
            <input type="radio" id="BizOp" name="type"  />
            <label for="BizOp">BizOp</label>
            <br/>
            <input type="radio" id="MLM" name="type"  />
            <label for="MLM">MLM</label>
            <br/>
            <input type="radio" id="Creative" name="type"  />
            <label for="Creative">Creative</label>
            <br/>
            <input type="radio" id="Dave’s Picks" name="type" />
            <label for="Dave’s Picks">Dave’s Picks</label>
        </div>
    </div>
  </div>
</div>
