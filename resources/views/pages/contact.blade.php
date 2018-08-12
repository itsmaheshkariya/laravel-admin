@extends('layouts.app')


@section('content')
<!-- contact -->
	<div class="contact agileits">
		<div class="container">  
			<div class="agileits-title">
				<h2 class="w3ls_head"><span>Contact </span>Us</h2>
			</div>  
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-form wthree">
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Name" required="">
						<input class="email" type="email" name="Email" placeholder="Email" required="">
						<textarea placeholder="Message" name="Message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
				<div class="col-md-4 contact-right wthree">
					<div class="contact-text w3-agileits">
						<h4>GET IN TOUCH :</h4>
						<p><i class="fa fa-map-marker"></i> Gajanan Nagar,Wathoda layout,<br>B/h Plazza Bar,Nagpur 99,<br>Wing No. 3 Rajat Sankul,<br>Nagpur-10. </p>
						<p><i class="fa fa-phone"></i> Telephone : 09823382184</p>
						<p><i class="fa fa-phone"></i> Telephone : 09823487272</p>
						<p><i class="fa fa-envelope-o"></i> Email : <a href="mailto: vvisheshta@rediffmail.com"> vvisheshta@rediffmail.com</a></p> 
					</div> 
				</div> 
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
<!-- //contact -->  
<!-- map -->
	<div class="map w3layouts">  
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.58514549601483!2d79.09475234213525!3d21.137974275423097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d36eb5bebed3580!2sRajat+Sankul+Appartment!5e0!3m2!1sen!2sin!4v1531433286921" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<!-- //map --> 
@endsection