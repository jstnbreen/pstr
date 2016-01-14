<?php
$thisPage = "Home";
include ("include/global.php");
include ("include/header.php");
?>

<div class="row">
	<div class="col-md-7">
		<ul class="slider">
			<div><img src="img/slides/slide_1.jpg"/></div>
			<div><img src="img/slides/slide_2.jpg"/></div>
			<div><img src="img/slides/slide_3.jpg"/></div>
			<div><img src="img/slides/slide_4.jpg"/></div>
			<div><img src="img/slides/slide_5.jpg"/></div>
			<div><img src="img/slides/slide_6.jpg"/></div>
		</ul>
	</div>

	<div class="col-md-5">
		<div class="left clearfix">
			<h3>Welcome to PSTR</h3>
			<hr>
			<p>
				We are a non-profit organization with nearly 300 members.  We host several events each year including hare scrambles, enduros, and recreational rides.  See the latest news and results below.
			</p>
			<!-- <a class="btn btn-warning btn-lg" href="page/club-info.php#join">Join PSTR</a> -->
		</div>
	</div>
</div>
<!-- Slick Slideshow -->
<script type="text/javascript">
$('.slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 3000,
	arrows: false,
});
</script>

<div class="row">
	<div class="col-sm-12">
		<h1>Latest News</h1>

		<img class="m-auto block" src="img/flyer_awards-banquet.jpg" style="width:66%;">
		<!-- <img class="m1-auto block" src="img/flyer_CabinFeverTurkeyRun.jpg"> -->

		<h3>What's new for Pilgrim Sands in 2016?</h3>
		<p>
			The Pilgrim Sands Trail Riders will again have a full schedule of events, including our Short Course Series, but there are some important changes this year. In an attempt to reduce the overall cost for our racers, we’ve made the following updates for our Short Course series:
		</p>
		<ul style="list-style:disc;">
			<li>
				Pilgrim Sands membership is still required, but the cost of that membership has gone up from $25 to $40 per year. There will no longer be one-day memberships available.
			</li>
			<li>
				Your PSTR racing number and transponder is covered under the membership fee, there is no separate charge. We will no longer be issuing physical numbers to the riders, you are responsible for putting numbers on your front number plate.
			</li>
			<li>
				AMA membership is no longer required, representing a significant cost savings to the racer. We still are an AMA-affiliated club and encourage everyone to join, but it’s not required to race.
			</li>
			<li>
				Entry fees are increased to $45 for the A/B and C classes, $35 for Kids/Women/Vintage classes.
			</li>
			<li>
				Overall cost for a typical first-time racer goes from $140 to $95.
			</li>
			<li>
				If you already have a PSTR racing number, you can keep that number by re-joining the club by the end of February. After that, your number goes back in the available pool to be given out to new racers.
			</li>
		</ul>
	</div>
</div>

<!--<div class="row">
	<div class="col-sm-12">
		<h4>The following riders have been promoted from C to B for 2015:</h4>
		<ul class="clearfix">
			<div class="col-sm-6">
				<li>Noah Jesse</li>
				<li>Paul Dumontier</li>
				<li>Graham Medas</li>
				<li>Dylan Renell</li>
				<li>Jean Claude Bernier</li>
				<li>Adam Holmes</li>
				<li>Josimar Santos</li>
				<li>Andre Nunes</li>
			</div>
			<div class="col-sm-6">
				<li>Jake Peaquita</li>
				<li>Sanderson Carmo</li>
				<li>Ricelio Ferrcia</li>
				<li>Chris Batchelor</li>
				<li>Jeff Samways</li>
				<li>Jason Bassett</li>
				<li>Jim Frisbee</li>
				<li>Anderson Torres</li>
			</div>
		</ul>
		<p>
			Congratulations!
		</p>
		<hr>
	</div>
</div>-->

<!--<div class="row">
	<div class="col-sm-12">
		<img class="right plg" src="img/pstr_logo-sm.png">
		<h4>Annual Awards Night</h4>
		<p>
			After forty years of doing it in the dirt, Pilgrim Sands Trail Riders presents its Annual Awards Night Banquet on <span class="bold">Saturday, January 17, 2015 at the Fireside Grille, 30 Bedford Street, Middleboro, MA.</span>
		</p>
		<p>
			Please join us for an evening of fun and food.  This is an opportunity for both new and old members to meet the crew and do a little bench racing.  It is also our way to repay the movers, shakers, sponsors, supporters and champions.  Without them there would not be a Pilgrim Sands Trail Riders Club.
		</p>
		<p>
			To celebrate our 40th banquet we will be rocking the 70’s theme. Come dressed in your favorite 70’s garb…or not! 70’s music and dirt bike movies will be playing on the big screen! Beer, wine and h’orderves 6:00pm-7:00pm. Dinner buffet at 7:00pm followed by the awards presentation.
		</p>
		<p>
			The dinner buffet consists of sliced roast beef w/ mushroom gravy, chicken picatta, oven roasted red potatoes, Caesar salad, vegetable and desert.
		</p>
		<p class="bold">
			Tickets are $40.00 per person.
		</p>
		<p>
			<strong>If you have not received an invitation and would like to join us please contact Jay at</strong><br>
			774-218-8067
		</p>
		<p>
			Hope to see you there!
		</p>
		<hr>
	</div>
</div>-->

<div class="row">
	<div class="col-sm-12">
		<img class="widthQtr3 m1-auto block" src="img/pstr_short-course-champs.jpg">

		<!-- <table class="table table-responsive table-striped table-hover widthFull display-table clearfix">
			<legend>Short Course Championship</legend>
			<thead>
				<tr>
					<th>Round #</th>
					<th>Date</th>
					<th>Sponsor</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<td>March 15<sup>th</sup></td>
					<td>Wareham MX</td>
					<td>Wareham, MA</td>
				</tr>
				<tr>
					<th>2</th>
					<td>April 12<sup>th</sup></td>
					<td>Wareham MX</td>
					<td>Wareham, MA</td>
				</tr>
				<tr>
					<th>3</th>
					<td>May 3<sup>rd</sup></td>
					<td>Clarkies Farm</td>
					<td>Freetown, MA</td>
				</tr>
				<tr>
					<th>4</th>
					<td>May 31<sup>st</sup></td>
					<td>Recycling Center</td>
					<td>Mattapoisett, MA</td>
				</tr>
				<tr>
					<th>5</th>
					<td>August 30<sup>th</sup></td>
					<td>Wareham MX</td>
					<td>Wareham, MA</td>
				</tr>
				<tr>
					<th>6</th>
					<td>September 20<sup>th</sup></td>
					<td>Clarkies Farm</td>
					<td>Freetown, MA</td>
				</tr>
			</tbody>
		</table> -->

		<table class="table table-responsive table-striped table-hover widthFull display-table clearfix">
			<legend>2016 Short Course Series Schedule</legend>
			<thead>
				<tr>
					<th>Date</th>
					<th>Event</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>March 13 - Wareham, MA</th>
					<td>Sand Dune Short Course</td>
					<td>Wareham MX</td>
				</tr>
				<tr>
					<th>March 27 - Swansea, MA</th>
					<td>Wendy's Ride</td>
					<td>Simcock Farm</td>
				</tr>
				<tr>
					<th>May 22</th>
					<td>Junkyard Jam Short Course</td>
					<td>Mattapoisett, MA</td>
				</tr>
				<tr>
					<th>July 10 - Assonet, MA</th>
					<td>Swill Hole Short Course</td>
					<td>Clarkie's Farm</td>
				</tr>
				<tr>
					<th>August 7</th>
					<td>Landfill Lapper Short Course</td>
					<td>Mattapoisett, MA</td>
				</tr>
				<tr>
					<th>Nov 6 - Swansea, MA</th>
					<td>Hay Ride Short Course</td>
					<td>Simcock Farm</td>
				</tr>
			</tbody>
		</table>

		<table class="table table-responsive table-striped table-hover widthFull display-table clearfix">
			<legend>2016 PSTR NETRA Events</legend>
			<thead>
				<tr>
					<th>Date</th>
					<th>Event</th>
					<th>Location</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>May 28 - Assonet, MA</th>
					<td>Clarkie’s PeeWee</td>
					<td>Clarkie's Farm</td>
				</tr>
				<tr>
					<th>May 28 - Assonet, MA</th>
					<td>Clarkie’s Vintage</td>
					<td>Clarkie's Farm</td>
				</tr>
				<tr>
					<th>May 29 - Assonet, MA</th>
					<td>Clarkie’s Enduro</td>
					<td>Clarkie's Farm</td>
				</tr>
				<tr>
					<th>Nov 13 - Assonet, MA</th>
					<td>PSTR Toy Run</td>
					<td>Clarkie's Farm</td>
				</tr>
			</tbody>
		</table>

		<p class="txt-center italic">
			Presented in cooperation with
		</p>
		<img class="widthHalf block m1-auto" src="img/hutch_logo.jpg">
		<hr>
		<h2>Attention Racers</h2>
		<p>
			We encourage you to join the AMA.
		</p>
		<p>
			<a class="btn btn-primary btn-lg" href="http://www.amajoin.com/PISATR" target="_blank">Sign up here</a>
		</p>
		<!-- <p>
			If you need to <a class="" href="http://www.amajoin.com/PISATR" target="_blank">Renew your AMA</a> be sure to do it ahead of time and avoid the extra paperwork in the sign up line.
		</p>
		<p>
			Our events are <a class="" href="http://www.amajoin.com/PISATR">AMA sanctioned</a>. For more information, or to join the AMA <a class="" href="http://www.amajoin.com/PISATR">please click here</a>.
		</p> -->
		<img class="widthHalf block m1-auto" src="img/logo_ama.png">
		<hr>
		<p class="bold">
			Any question or comments please forward to <a class="" href="">pstrinfo@gmail.com</a>
		</p>
	</div>
</div>