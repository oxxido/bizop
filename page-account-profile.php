<?php
/**
 * Template Name: Account Profile
 *
 */
?>

<div class="pageBanner">
	<img class="bnrImg" src="<?php the_field('page_banner'); ?>" alt="" />
	<div class="wrapper">
		<div class="pageTitle">
			<div class="bnrContent">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</div>
<div class="wrapper pageMiddle">
	<div class="accountPage clearfix">
		<div class="accountLeft">
			<ul>
				<li class="active"><a href="#">YOUR PROFILE</a></li>
				<li><a href="#">PAYMENT METHODS</a></li>
				<li><a href="#">ACCOUNT HISTORY</a></li>
				<li><a href="#">MEMBERSHIP PLAN</a></li>
			</ul>
		</div>
		<div class="accountRight profile">
			<ul class="fieldSet">
				<li><h2 class="secTitle">Profile Information for John Doe</h2></li>
				<li class="fields">
					<div class="field">
						<label>First Name</label>
						<input name="fname" type="text" class="inputbox" />
					</div>
					<div class="field">
						<label>Last Name</label>
						<input name="lname" type="text" class="inputbox" />
					</div>
				</li>
				<li class="fields">
					<div class="field">
						<label>Email</label>
						<input name="Email" type="text" class="inputbox" />
					</div>
					<div class="field">
						<label>Phone Number</label>
						<input name="phone" type="text" class="inputbox" />
					</div>
				</li>
			</ul>
			
			<ul class="fieldSet">
				<li class="fields">
					<div class="field">
						<label>Address</label>
						<input name="fname" type="text" class="inputbox" />
					</div>
					<div class="field">
						<label>City</label>
						<input name="lname" type="text" class="inputbox" />
					</div>
				</li>
				<li class="fields">
					<div class="field">
						<label>State</label>
						<input name="state" type="text" class="inputbox state" />
					</div>
					<div class="field">
						<label>Zip Code</label>
						<input name="zip" type="text" class="inputbox zip" />
					</div>
				</li>
				<li class="fields">
					<div class="field">
						<label>Country</label>
						<input name="Country" type="text" class="inputbox" />
					</div>
					<div class="field"></div>
				</li>
			</ul>
			<ul class="fieldSet">
				<li class="fields">
					<div class="field">
						<label>Occupation</label>
						<input name="fname" type="text" class="inputbox" />
					</div>
					<div class="field">
						<label>Profession</label>
						<input name="lname" type="text" class="inputbox" />
					</div>
				</li>
				<li class="fields">
					<div class="field">
						<label>Income</label>
						<input name="state" type="text" class="inputbox" />
					</div>
					<div class="field">
						<label>Highest Level of Education</label>
						<input name="zip" type="text" class="inputbox" />
					</div>
				</li>
			</ul>
			<ul class="fieldSet">
				<li class="set2call clearfix">
					<div class="call-1">
						<div class="field">
							<label>Old Password</label>
							<input name="fname" type="text" class="inputbox" />
						</div>
						<div class="field">
							<label>New Password</label>
							<input name="lname" type="text" class="inputbox" />
						</div>
						<div class="field">
							<label>Confirm Password</label>
							<input name="state" type="text" class="inputbox" />
						</div>
					</div>
					<div class="call-2 a-center photoCal">
						<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/user-photo.jpg" alt="Name" /></div>
						<a class="removePhoto" href="#">Remove Photo</a>
						<div class="action">
							<input type="button" class="button graybut" value="BROWSE..." />
							<input type="button" class="button greenbut" value="UPLOAD" />
						</div>
					</div>
				</li>
			</ul>
			<br />
			<div class="a-center"><a class="button orgBigBut" href="#">SAVE CHANGES</a></div>
		</div>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div>
