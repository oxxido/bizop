<?php
/**
 * Template Name:Submit Review Form 
 *
 */
?>

<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">

<?php
$search = array(3,4);
$is_pro_platinum= Am_Lite::getInstance()->haveSubscriptions($search)   ;
if ($is_pro_platinum == 1){ ?>
  <p class="leadBlack">Selected reviews that are voted up will be included in Dave’s Picks on a weekly basis. 
    Check back frequently to see if your review is selected.
    </p>
  <div class="clearfix">
    <div class="leftReviewFrm">
        <form id="front_end" name="front_end" method="post" action="">
            <input type="hidden" name="action" value="my_action" />
      <div class="input clearfix">
        <label class="lbl">What is being reviewed?</label>
        <input type="text" required="required" id="title" name="title" maxlength="255" autofocus="autofocus">
      </div>
      <div class="input clearfix">
        <label class="lbl">What type of review is this?</label>
        <div class="radioGrup clearfix">
            <p><input type="radio" name="reviewtype" value="101" /> <label for="offer">Offer</label></p>
            <p><input type="radio" name="reviewtype" value="102" /> <label for="network">Network</label></p>
            <p><input type="radio" name="reviewtype" value="103" /> <label for="bizop">Biz Op</label></p>
            <p><input type="radio" name="reviewtype" value="104" /> <label for="mlm">MLM</label></p>
            <p><input type="radio" name="reviewtype" value="105" /> <label for="offercreative">Offer Creative</label></p>
        </div>
      </div>
      <div class="input clearfix">
        <label class="lbl">Please enter description of your review:</label>
        <textarea class="wp-editor-area" rows="20" cols="40" name="content" id="content"></textarea>
      </div>
      <div class="input clearfix displayStatus radioGrup">
          <p><input type="radio" name="reviewpublic" value="public" /> <label  for="public">Please make my review public</label></p>
          <p><input type="radio" name="reviewpublic" value="private" /> <label  for="private">Please make my review private</label></p>
      </div>
      <input type="submit" value="" class="btnSubReview" /><img src="<?php echo get_template_directory_uri(); ?>/dist/images/ajax-loader.gif" class="loadingForm"/>
        </form>
        <br/>
        <br/>
        <h2 class="status"></h2>
    </div>
    <div class="listReview">
      <h3 class="title"><a href="<?php echo home_url( '/' ); ?>recent-reviews"><img src="<?php bloginfo('template_url'); ?>/dist/images/list-title-icon.jpg" alt=""/>RECENT REVIEWS</a></h3>
        <ul class="listRecentReview">
            <?php
            if ( have_posts() ) : query_posts('&category_name=recent-reviews&offset=0&posts_per_page=5');
                while ( have_posts() ) : the_post();
                    $post_id = get_the_ID();
                    include(locate_template('templates/box_title_text_date_vote.php'));
                endwhile;
            endif; ?>
        </ul>
    </div>
  </div>
</div>

<script>
    $j=jQuery.noConflict();
    $j(document).ready(function($){
        $("#front_end").validate({
            submitHandler: function () {
                $('.btnSubReview').addClass('graystyle');
                $('.loadingForm').fadeIn();
                dataString = $j("#front_end").serialize();
                $('.status').fadeOut();
                $.ajax({
                    type: "POST",
                    url: "http://bizop.mcclainconcepts.net/wp-admin/admin-ajax.php",
                    data: dataString,
                    error: function(jqXHR, textStatus, errorThrown){
                        form_show_control('<i class="fa fa-close red"></i> An error has occurred. Try again.');
                    },
                    success: function(data) {
                        form_show_control('<i class="fa fa-check green"></i> Thanks you, your review was submitted successfully.');
                        $("#front_end").trigger("reset");
                    }
                });
            }
        })
    });
    function form_show_control($text){
        $j('.loadingForm').fadeOut();
        $j('.status').html($text);
        $j('.status').fadeIn();
        setTimeout(function(){
            $j('.status').fadeOut();
        },5000);
        $j('.btnSubReview').removeClass('graystyle');
    }
</script>

<?php }else{?>
    <p class="lead small">
        Only PRO and PLATINUM members can submit reviews for Biz Op Reports. If you have a free account and would like to upgrade to Pro or Platinum, you can do so <a href="<?php echo esc_url( home_url( '/' ) ); ?>amember/signup/">here</a>!
    </p>
</div>
<?php } ?>