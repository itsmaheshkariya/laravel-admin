@extends('layouts.app')


@section('content')

<div class="banner">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Vvisheshta -a concept</h3>
									<p>Welcome to event management provides one of the top solution for corporate; product launch, dealers/customer meets, press conference, meeting, seminar, wedding & relative events in all over India. We bring equal style and detail to every event consulting, designing & coordination everything from the venue to the theme from the beginning to the end</p>
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Our Mission</h3>
									<p>Our mission is to fulfill needs & aspiration of our clients in the most professional and effective manner.</p>
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_info">
									<h3>Our Vision</h3>
									<p>Our vision is to become a high quality, value leader in the event management service industry.</p>
									<!-- <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p> -->
									<!-- <div class="agileits_w3layouts_more">
										<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
									</div> -->
								</div>
							</li>
						</ul>
					</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
		</div>
	</div>
<!-- //banner -->	
<!-- services -->
	<div class="services">
		<div class="container">
		<h2 class="w3ls_head"><span>TYPES OF </span> EVENTS</h2>
			<div class="services-w3lsrow">
				<div class="col-md-4 services-grids top">  
					<i class="fa fa-database" aria-hidden="true"></i>
					<h4>Co-ordination Of event</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-1">
					<i class="fa fa-group icon" aria-hidden="true"></i> 
					<h4>Political Event </h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-2">
					<i class="fa fa-user" aria-hidden="true"></i>
					<h4>VIP & VVIP Visits</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div> 
				<div class="col-md-4 services-grids top-3">  
					<i class="fa fa-briefcase icon" aria-hidden="true"></i> 
					<h4>Corporate Events</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-4">
					<i class="fa fa-wpforms" aria-hidden="true"></i>
					<h4>Election campanian </h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-5">
					<i class="fa fa-bar-chart-o " aria-hidden="true"></i>
					<h4>Seminar & Conference</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div> 	
								
				<!-- <div class="clearfix"> </div>
			</div> 
			<div class="services-w3lsrow"> -->
				<hr>
				<div class="col-md-4 services-grids top">  
					<i class="fa fa-database" aria-hidden="true"></i>
					<h4>All Types Exhibitions</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-1">
					<i class="fa fa-group icon" aria-hidden="true"></i> 
					<h4>Spiritual Events						</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-2">
					<i class="fa fa-cubes" aria-hidden="true"></i>
					<h4>Product launching</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div> 
				<div class="col-md-4 services-grids top-3">  
					<i class="fa fa-gears icon" aria-hidden="true"></i> 
					<h4>Publicity & Marketing</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<div class="col-md-4 services-grids top-4">
					<i class="fa fa-film" aria-hidden="true"></i>
					<h4>Film Production </h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div>
				<!-- <div class="col-md-4 services-grids top-5">
					<i class="fa fa-briefcase icon" aria-hidden="true"></i>
					<h4>Seminar & Conference</h4>
					<!-- <p>To ensure the quality and effectiveness of every business activity, we support our every client by supporting them in all legislative issues.</p> -->
				</div> 	 
								
				<div class="clearfix"> </div>
			</div>			
		</div>
	</div>	
<!-- //services -->	
<!-- stats -->
	<div class="sta-agile">
		<div class="stat-agile-info">
			<div class="container">
				<div class="stats">
					<div class="col-md-3 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<p class="counter">965</p>
						<h3>TRUSTED CLIENTS</h3>
					</div>
					<div class="col-md-3 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<p class="counter">20</p>
						<h3>AWARDS</h3>
					</div>
					<div class="col-md-3 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-asterisk" aria-hidden="true"></i>
						</div>
						<p class="counter">15</p>
						<h3>YEARS OF EXPERIENCE</h3>
					</div>
					<div class="col-md-3 w3_counter_grid">
						<div class="w3_agileits_counter_grid">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</div>
						<p class="counter">24</p>
						<h3>EXPERTS</h3>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
<!-- //stats -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- about-team -->
	<!-- <div class="team">		
		<div class="container"> 
			<h2 class="w3ls_head"><span>Our </span>Team</h2> 
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t1.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Vaura Tegsner</h4>
							<p>Manager</p> 
							<div class="social-w3lsicon"> 
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-google-plus"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t2.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Jark Kohnson</h4>
							<p>Manager</p> 
							<div class="social-w3lsicon"> 
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-google-plus"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t3.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Chunk Erson</h4>
							<p>Manager</p> 						
							<div class="social-w3lsicon"> 
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-google-plus"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t4.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Goes Mehak</h4>
							<p>Manager</p> 						
							<div class="social-w3lsicon"> 
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-google-plus"></i></a>  
							</div>		
						</div> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
<!-- //about-team -->
<!-- testimonials -->
<div class="col-md-12 services-agile-info">
	
	<!--<table class="table">-->
	
		<div class="container">
		<h2 class="w3ls_head"><span>valuable</span> clients</h2>
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Maruti</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Prestige </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Ultra take Cement </h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>Airport Authority Of India </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>WCl </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Ambuja Cement</h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>NTPC  Ltd.</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>CPWD </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>NAHI</h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>BHEL</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>SAIL </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>PWD Maharashtra  </h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>PWD MP</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>ITC  Ltd. </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Arawali Power  Company Ltd.</h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Panjabrao Agricultutural 	university,Akola</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Amaravti University,Amaravti </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Sai 
	Sansthan,Sirdi</h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Cancer Foundation,Amaravti</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Rashtrasant 
	Tukdoji Maharaj Sansthan Mozri </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Indian Railway </h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>Lenchopower,Wardha</h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
							
						</div>
					</div>
					<h3>Adani Power Ltd,Tiroda </h3>
					
				</div>
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
						
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Monohar 
	bhai Patel </h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
			
			
			
			<div class="w3_services_grids">
				<div class="col-md-4 w3_services_grid">
					<div class="w3layouts_services_grid">
					
						<div class="w3layouts_services_grid_pos">
						
						</div>
					</div>
					<h3>Acadmey,Gondiya</h3>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>
	
			
			
			
	
	</div>
	<!--	<tbody>-->
	<!--		<tr>-->
	<!--			<td><h4>* Maruti </h4></td>-->
	<!--			<td><h4>* Prestige </h4></td>-->
	<!--			<td><h4>* Ultra take Cement </h4></td>-->
	<!--			<td><h4>* Airport Authority Of -->
	<!--				India</h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* WCl</h4></td>-->
	<!--			<td><h4>* Ambuja Cement </h4></td>-->
	<!--			<td><h4>* NTPC  Ltd.</h4></td>-->
	<!--			<td><h4>* CPWD</h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* NAHI</h4></td>-->
	<!--			<td><h4>* BHEL</h4></td>-->
	<!--			<td><h4>* SAIL</h4></td>-->
	<!--			<td><h4>* PWD Maharashtra </h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* PWD MP</h4></td>-->
	<!--			<td><h4>* ITC  Lt -->
	<!--			</h4></td>-->
	<!--			<td><h4>* Arawali Power  Company Ltd.</h4></td>-->
	<!--			<td><h4>* Panjabrao Agricultutural,Akola-->
	<!--			</h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* Amaravti University,Amaravti </h4></td>-->
	<!--			<td><h4>* Sai -->
	<!--				Sansthan,Sirdi</h4></td>-->
	<!--			<td><h4>* Cancer Foundation,Amaravti </h4></td>-->
	<!--			<td><h4>*Rastsant -->
	<!--				Tukdoji Maharaj Sansthan Mozri</h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* Indian Railway 					</h4></td>-->
	<!--			<td><h4>* Lenchopower,Wardha	</h4></td>-->
	<!--			<td><h4>* Adani Power Ltd,Tiroda</h4></td>-->
	<!--			<td><h4>* Monohar bhai Patel  </h4></td>-->
	<!--		</tr>-->
	<!--		<tr>-->
	<!--			<td><h4>* Acadmey,Gondiya</h4></td>-->
				
	<!--		</tr>-->
	<!--	</tbody>-->
	<!--</table>-->
	</div>
	
		
	
	<div class="clearfix"></div>
	<!-- //testimonials -->
<!-- news-letter -->
	<div class="news-letter">
		<div class="container">	
			<h3 class="w3ls_head"><span>Subscribe </span>Here </h3>
			<div class="agileinfo-subscribe">
				<form action="#" method="post">
					<input type="text" placeholder="Name" name="Name"  required="">
					<input type="email" placeholder="Email" name="Email"  required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div>
				</form>
			</div>
		</div>
	</div>
	<!-- //news-letter -->
	<!-- footer -->

	@endsection