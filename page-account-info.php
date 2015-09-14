<?php
/**
 * Template Name: Account Information
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
				<li><a href="#">PAYMENT METHODS</a></li>
				<li class="active"><a href="#">ACCOUNT HISTORY</a></li>
				<li><a href="#">MEMBERSHIP PLAN</a></li>
			</ul>
		</div>
		<div class="accountRight">
			<h2 class="secTitle">Account History for John Doe</h2>
			<table width="100%" cellpadding="4" cellspacing="0" class="dataTable rwdTable accountHistory">
				<thead>
					<tr>
						<th>Date</th>
						<th>Subscription Type</th>
						<th width="15%">Charge</th>
						<th width="15%">Details</th>
						<th width="20%">Invoices</th>
					</tr>
				</thead>
				<tr>
					<td>10/10/2015</td>
					<td>PRO <a href="#" class="change">change</a></td>
					<td>$50.21</td>
					<td><a href="#">View</a></td>
					<td><a href="#">View Invoices</a></td>
				</tr>
				<tr>
					<td>10/10/2015</td>
					<td>PRO <a href="#" class="change">change</a></td>
					<td>$50.21</td>
					<td><a href="#">View</a></td>
					<td><a href="#">View Invoices</a></td>
				</tr>
				<tr>
					<td>10/10/2015</td>
					<td>PRO <a href="#" class="change">change</a></td>
					<td>$50.21</td>
					<td><a href="#">View</a></td>
					<td><a href="#">View Invoices</a></td>
				</tr>
				<tr>
					<td>10/10/2015</td>
					<td>PRO <a href="#" class="change">change</a></td>
					<td>$50.21</td>
					<td><a href="#">View</a></td>
					<td><a href="#">View Invoices</a></td>
				</tr>
				<tr>
					<td>10/10/2015</td>
					<td>PRO <a href="#" class="change">change</a></td>
					<td>$50.21</td>
					<td><a href="#">View</a></td>
					<td><a href="#">View Invoices</a></td>
				</tr>
			</table><br />
			<div class="a-right"><a class="button greenbut" href="#">DOWNLOAD ACCOUNT HISTORY</a></div>
		</div>
	</div>
	<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div>
<?php get_footer(); ?>
