<?php
/**
 * Template Name: Account Payment Method
 *
 */
get_header(); ?>

<div class="pageBanner"> <img class="bnrImg" src="<?php the_field('page_banner'); ?>" alt="" />
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
				<li><a href="#">YOUR PROFILE</a></li>
				<li class="active"><a href="#">PAYMENT METHODS</a></li>
				<li><a href="#">ACCOUNT HISTORY</a></li>
				<li><a href="#">MEMBERSHIP PLAN</a></li>
			</ul>
		</div>
		<div class="accountRight">
			<h2 class="secTitle">Payment methods for John Doe</h2>
			<table width="100%" cellpadding="4" cellspacing="0" class="dataTable rwdTable payMethods">
				<thead>
					<tr>
						<th>Owner Name</th>
						<th width="33%">Account Number</th>
						<th width="30%">Activity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>JOHN SMITHSONIAN</td>
						<td>VISA **** **** **** 9683<a href="#" class="change"></a></td>
						<td><a href="#" class="edit">Edit</a> <a href="#" class="delete">Delete</a></td>
					</tr>
					<tr>
						<td>JOHN SMITHSONIAN</td>
						<td>AMEX **** **** **** 9683<a href="#" class="change"></a></td>
						<td><a href="#" class="edit">Edit</a> <a href="#" class="delete">Delete</a></td>
					</tr>
					<tr>
						<td>JOHN SMITHSONIAN</td>
						<td>VISA **** **** **** 9683<a href="#" class="change"></a></td>
						<td><a href="#" class="edit">Edit</a> <a href="#" class="delete">Delete</a> <a href="#" class="primery">Make Primary</a></td>
					</tr>
				</tbody>
			</table><br />
			<div class="a-right"><a class="button greenbut" href="#">+ ADD NEW PAYMENT METHOD</a></div>
		</div>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div>
<?php get_footer(); ?>
