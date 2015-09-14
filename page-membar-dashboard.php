<?php
/**
 * Template Name: Membar Dashboard Page
 *
 */?>
<div class="pageBanner"> <img src="<?php the_field('page_banner'); ?>" alt="" />
  <div class="wrapper">
    <div class="pageTitle">
      <div class="bnrContent">
        <h1>
          <?php the_title(); ?>
        </h1>
        <p class="userName">Registered User: <span>John Doe</span></p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper pageMiddle">
	<div id="businessTips" class="listinhome">
		<h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/images/business-tips-ico.png" alt="" /> TOP BUSINESS TIPS</h2>
		<ul class="reviewList clearfix">
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">WATCH NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">WATCH NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">WATCH NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">WATCH NOW</a>
			</li>
		</ul>
	</div>
	
	<div id="scamsAvoid" class="listinhome">
		<h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/images/scams-ico.png" alt="" /> SCAMS TO AVOID</h2>
		<ul class="reviewList clearfix">
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">VIEW NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">VIEW NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">VIEW NOW</a>
			</li>
			<li>
				<a href="#" class="video"><img src="<?php echo get_template_directory_uri(); ?>/images/video-thumb.jpg" /></a>
				<a class="title" href="#">Vestibulum odio elit, feugiat id lectus ac odio elit</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<a class="button" href="#">VIEW NOW</a>
			</li>
		</ul>
	</div>
	
	<div id="futuredPost" class="listinhome">
		<h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/images/featured-ico.png" alt="" /> FEATURED BLOG POSTS</h2>
		<ul class="reviewList clearfix">
			<li>
				<a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-img.jpg" /></a>
				<a class="title" href="#">Nulla elementum odio in maximus sodales. Donec eu.</a>
				<a class="button" href="#">READ MORE</a>
			</li>
			<li>
				<a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-img.jpg" /></a>
				<a class="title" href="#">Nulla elementum odio in maximus sodales. Donec eu.</a>
				<a class="button" href="#">READ MORE</a>
			</li>
			<li>
				<a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-img.jpg" /></a>
				<a class="title" href="#">Nulla elementum odio in maximus sodales. Donec eu.</a>
				<a class="button" href="#">READ MORE</a>
			</li>
			<li>
				<a href="#" class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/featured-img.jpg" /></a>
				<a class="title" href="#">Nulla elementum odio in maximus sodales. Donec eu.</a>
				<a class="button" href="#">READ MORE</a>
			</li>
		</ul>
	</div>
	
	<div id="futuredReview">
		<h2 class="listTitle"><img class="btn" src="<?php echo get_template_directory_uri(); ?>/images/featured-review-ico.png" alt="" /> FEATURED REVIEWS</h2>
		<ul class="reviewList clearfix">
			<li>
				<a class="title" href="#">Fusce imperdiet</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<div class="convpayout">
					<span class="conv">CONV. ACTION <span>12678</span></span>
					<span class="payout">PAYOUT<span>$16.21</span></span>
				</div>
				<a class="button" href="#">LEARN MORE</a>
			</li>
			<li>
				<a class="title" href="#">Fusce imperdiet</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<div class="convpayout">
					<span class="conv">CONV. ACTION <span>12678</span></span>
					<span class="payout">PAYOUT<span>$16.21</span></span>
				</div>
				<a class="button" href="#">LEARN MORE</a>
			</li>
			<li>
				<a class="title" href="#">Fusce imperdiet</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<div class="convpayout">
					<span class="conv">CONV. ACTION <span>12678</span></span>
					<span class="payout">PAYOUT<span>$16.21</span></span>
				</div>
				<a class="button" href="#">LEARN MORE</a>
			</li>
			<li>
				<a class="title" href="#">Fusce imperdiet</a>
				<p>Nulla elementum odio in maximus sodales. Donec eu purus varius, accumsan tellus nec, feugiat justo. Sed accumsan pellentesque est, ac placerat sapien.</p>
				<div class="convpayout">
					<span class="conv">CONV. ACTION <span>12678</span></span>
					<span class="payout">PAYOUT<span>$16.21</span></span>
				</div>
				<a class="button" href="#">LEARN MORE</a>
			</li>
		</ul>
	</div>
</div>
