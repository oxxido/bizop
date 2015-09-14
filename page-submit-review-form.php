<?php
/**
 * Template Name:Submit Review Form 
 *
 */
?>
<?php get_template_part('templates/banner_pages'); ?>
<div class="wrapper pageMiddle">
  <p class="lead small">Only PRO and PLATINUM members can submit reviews for Biz Op Reports. If you have a free account and would like to upgrade to Pro or Platinum, you can do so here!</p>
  <p class="leadBlack">Selected reviews that are voted up will be included in Dave’s Picks on a weekly basis. 
    Check back frequently to see if your review is selected. </p>
  <div class="clearfix">
    <div class="leftReviewFrm">
      <div class="input clearfix">
        <label class="lbl">What is being reviewed?</label>
        <input type="text"/>
      </div>
      <div class="input clearfix">
        <label class="lbl">What type of review is this?</label>
        <div class="radioGrup clearfix">
          <input type="radio" name="reviewtype" id="offer" />
          <label for="offer">Offer</label>
          <input type="radio" name="reviewtype" id="network" />
          <label for="network">Network</label>
          <input type="radio" name="reviewtype" id="bizop" />
          <label for="bizop">Biz Op</label>
          <input type="radio" name="reviewtype" id="mlm" />
          <label for="mlm">MLM</label>
          <input type="radio" name="reviewtype" id="offercreative" />
          <label for="offercreative">Offer Creative</label>
        </div>
      </div>
      <div class="input clearfix">
        <label class="lbl">Please enter description of your review:</label>
        <textarea></textarea>
      </div>
      <div class="input clearfix displayStatus">
        <input type="radio" name="reviewStatus" id="public" />
        <label  for="public">Please make my review public</label>
        <br/>
        <input type="radio" name="reviewStatus" id="private" />
        <label  for="private">Please make my review private</label>
      </div>
      <input type="submit" value="" class="btnSubReview" />
    </div>
    <div class="listReview">
      <h3 class="title"><img src="<?php bloginfo('template_url'); ?>/dist/images/list-title-icon.jpg" alt=""/>RECENT REVIEWS</h3>
      <ul class="listRecentReview">
        <li> <a href="#" class="title">Fusce imperdiet in los
          maximus sed acceran</a>
          <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec.</p>
          <span class="dateAndName"> 04/08/2015 - John Doe </span>
          <div class="score"> <span class="up"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-up.jpg" alt=""/></span><span class="down"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-down.jpg" alt=""/></span> </div>
          <a href="#" class="button">VIEW NOW!</a> </li>
        <li> <a href="#" class="title">Fusce imperdiet in los
          maximus sed acceran</a>
          <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec.</p>
          <span class="dateAndName"> 04/08/2015 - John Doe </span>
          <div class="score"> <span class="up"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-up.jpg" alt=""/></span><span class="down"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-down.jpg" alt=""/></span> </div>
          <a href="#" class="button">VIEW NOW!</a> </li>
        <li> <a href="#" class="title">Fusce imperdiet in los
          maximus sed acceran</a>
          <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec.</p>
          <span class="dateAndName"> 04/08/2015 - John Doe </span>
          <div class="score"> <span class="up"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-up.jpg" alt=""/></span><span class="down"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-down.jpg" alt=""/></span> </div>
          <a href="#" class="button">VIEW NOW!</a> </li>
        <li> <a href="#" class="title">Fusce imperdiet in los
          maximus sed acceran</a>
          <p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec.</p>
          <span class="dateAndName"> 04/08/2015 - John Doe </span>
          <div class="score"> <span class="up"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-up.jpg" alt=""/></span><span class="down"><img src="<?php bloginfo('template_url'); ?>/dist/images/thumb-down.jpg" alt=""/></span> </div>
          <a href="#" class="button">VIEW NOW!</a> </li>
      </ul>
    </div>
  </div>
</div>
