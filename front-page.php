<?php
/**
 * Template Name: Homepage
 */
?>
<!-- header_sec -->

<!-- <header class="top_bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-5"><a href="#" class="logo"><img src="<?php bloginfo('template_url');?>/images//logo.png" alt=""></a></div>
			<div class="col-sm-3"><p>Call Us Today On<br/><span>(07) 5502 9217</span></p></div>
			<div class="col-sm-4">
			 <div class="search_sec">
				 <input class="search_box" name="search" id="search" value="Search" type="text">
				 <a href="#"><img src="<?php bloginfo('template_url');?>/images//search_butt.jpg" alt="" title="" class="search_btn" /></a>
			 </div>
		   </div>
		</div>
	</div>
</header> -->

<!-- end of header_sec -->
<!-- menu_sec -->

<div class="container">
		<div class="row ">
		<?php if ($au=$_SESSION['_amember_user']) { ?>
			<div class="col-sm-7"></div>
			<div class="col-sm-3">Hello <?=$au[name_f].$au[name_l]?>!</div>
			<div class="col-sm-2"><a href='/amember/logout.php'>Logout</a></div>
		<?php } else { ?>
			<form method=post action='/amember/login'>
			<div class="col-sm-7"></div>
			<div class="col-sm-1">Username:</div>
			<div class="col-sm-1"><input type='text' name='amember_login' size='5'></div>
			<div class="col-sm-1">Password:</div>
			<div class="col-sm-1"><input type='password' name='amember_pass' size='5'></div>
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
			<li><a href="#">OFFERS</a></li>            
			<li><a href="#">NETWORKS</a></li>              
			<li><a href="#">BIZOP</a></li>                
			<li><a href="#">NEWSLETTER ARCHIVE</a></li>               
			<li><a href="#">DAVE'SPICKS</a></li>              
			<li><a href="#">ABOUT US</a></li>              
		   
		  </ul>
		</nav>
	  </div>
	</header>
  </nav>
</section>
</div>
</div>
<!-- end of menu_sec -->
<!-- banner_sec -->

<section class="banner_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			
			   <!-- Slider -->
				<div class="top_slider">
				<div class="flexslider">
					<ul class="slides">
					   <li>   
								<div class="slider_caption">
								  <div class="capson_text">
									<p>"Stop Wasting Money On ProgramsThatDont'tWork!"</p>
									<button class="capson_btn">Subscribe</button>
								  </div>
								</div>
								<img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
						</li>
						<li>
								<div class="slider_caption">
								  <div class="capson_text">
									<p>"Learn FromtheBest.Over 200K Invested inCampaigns That  did Not Pan Out!"</p>
									<button class="capson_btn">Subscribe</button>
								  </div>
								</div>
								<img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
						</li>
						<li>
								<div class="slider_caption">
								  <div class="capson_text">
									<p>"SubscribeTodayTo AvoidThePitfallsInOnlineMarketing!"</p>
									<button class="capson_btn">Subscribe</button>
								  </div>
								</div>
								<img src="<?php bloginfo('template_url');?>/assets/images/banner_img.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
			<!-- Slider -->
			
			
			
			</div>
		</div>
			<div class="banner_text">
			   
			<div class="col-sm-4"><P>SEARCH:</P></div>
			
			   <div class="col-sm-8">  
				<div class="search_sec">
				 <input class="search_box" name="search" id="search" value="Search" type="text">
				 <a href="#"><img src="<?php bloginfo('template_url');?>/assets/images/search_butt.jpg" alt="" title="" class="search_btn" /></a>
			 </div></div>
			</div>
		  
				 
		<!-- mid_sec -->
		 <div class="row">
		  <div class="col-sm-6">	<h4>VIDEO REVIEWS</h4></div>
		 </div>
		<div class="row">
		  <div class="col-sm-3">
				<div class="mid_sec">
					
						<p>Heading Text</p> 
					<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
				   
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
				   
				</div>
				
			</div>
			<div class="col-sm-3">
				<div class="mid_sec">
					
				   
						<p>Heading Text</p>
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png"> 
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
					
				</div>
				
			</div>
			 <div class="col-sm-3">
				<div class="mid_sec">
				  
				
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
					
				</div>
				
			</div>
			  <div class="col-sm-3">
				<div class="mid_sec">
				 
				   
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
				   
				</div>
				
			</div>
		   
		</div>  
		<!-- mid_sec -->
			   
		<!-- mid_sec -->
		 <div class="row">
		  <div class="col-sm-6">	<h4>SCAMS TO AVOID</h4></div>
		 </div>
		<div class="row">
		  <div class="col-sm-3">
				<div class="mid_sec">
					
				   
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
				   
				</div>
				
			</div>
			<div class="col-sm-3">
				<div class="mid_sec">
					
				   
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
					
				</div>
				
			</div>
			 <div class="col-sm-3">
				<div class="mid_sec">
				  
				
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
					
				</div>
				
			</div>
			  <div class="col-sm-3">
				<div class="mid_sec">
				 
				   
						<p>Heading Text</p> 
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<span>Short discription of text </span>
						<button class="r_more_g">Watch Now!</button>
				   
				</div>
				
			</div>
		   
		</div>
			   
		<!-- mid_sec -->
		 <div class="row">
		  <div class="col-sm-6">	<h4>FEATURED BLOG POSTS</h4></div>
		 </div>
		<div class="row">
		  <div class="col-sm-3">
				<div class="mid_sec">
					
					   <img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<p>Blog Text</p> 
						<!-- <span>Short discription of text </span> -->
						<button class="r_more_g">Read More!</button>
				   
				</div>
				
			</div>
			<div class="col-sm-3">
				<div class="mid_sec">
					
				 <img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<p>Blog Text</p> 
						<!-- <span>Short discription of text </span> -->
						<button class="r_more_g">Read More!</button>    
				</div>
				
			</div>
			 <div class="col-sm-3">
				<div class="mid_sec">
				  
				
						 <img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<p>Blog Text</p> 
						<!-- <span>Short discription of text </span> -->
						<button class="r_more_g">Read More!</button>
				</div>
				
			</div>
			  <div class="col-sm-3">
				<div class="mid_sec">
				 
				   
						<img src="<?php bloginfo('template_url');?>/assets/images/about.png">
						<p>Blog Text</p> 
						<!-- <span>Short discription of text </span> -->
						<button class="r_more_g">Read More!</button>
				</div>
				
			</div>
		   
		</div>
		 <div class="row">
		  <div class="col-sm-6">	<h4>TOP CAMPAIGN REVIEWS</h4></div>
		 </div>
		<div class="row">
		  <div class="col-sm-3">
				<div class="mid_sec">
					
						<p>Campaign Name</p> 
						<span>Campaign discription of text </span>
						<span>Number Of Conversion </span>
						<span>Campaign Payout </span>
						<button class="r_more_g">Learn More!</button>
				   
				</div>
				
			</div>
			<div class="col-sm-3">
				<div class="mid_sec">
					
					 <p>Campaign Name</p> 
						<span>Campaign discription of text </span>
						<span>Number Of Conversion </span>
						<span>Campaign Payout </span>
						<button class="r_more_g">Learn More!</button> 
				</div>
				
			</div>
			 <div class="col-sm-3">
				<div class="mid_sec">
				  
				  <p>Campaign Name</p> 
						<span>Campaign discription of text </span>
						<span>Number Of Conversion </span>
						<span>Campaign Payout </span>
						<button class="r_more_g">Learn More!</button></div>
				
			</div>
			  <div class="col-sm-3">
				<div class="mid_sec">
				 
					 <p>Campaign Name</p> 
						<span>Campaign discription of text </span>
						<span>Number Of Conversion </span>
						<span>Campaign Payout </span>
						<button class="r_more_g">Learn More!</button>
				</div>
				
			</div>
		   
		</div>
		
		<!-- end of mid_sec -->
	</div>
</section>

<!-- end of banner_sec -->



<!-- footer_sec -->

<footer class="footer_sec">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
			  <div class="footer_sec_inner">
			<div class="footer_text"><p><a href="#">PRIVACY POLICY</a>&nbsp;&nbsp;&nbsp;<a href="#">TERM AND CONDITIONS</a>&nbsp;&nbsp;&nbsp;<a href="#">BLOG</a>&nbsp;&nbsp;&nbsp;Copyright McClain Concept Inc.</p></div>
				 </div>
			</div>
		</div>
	</div>
</footer>

<!-- end of footer_sec -->
<script src="<?php bloginfo('template_url');?>/assets/scripts/jquery-1.10.2.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url');?>/assets/scripts/jquery.flexslider-min.js"></script>

<script>
  $(document).ready(function(){
	 $('.flexslider').flexslider({
		directionNav: false, 
		direction: "horizontal",
		animation: "slide"
	});
  });
</script>