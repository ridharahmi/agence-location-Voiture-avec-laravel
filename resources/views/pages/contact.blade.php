@extends('layouts.app')

@section('content')
<header id="head" class="secondary">
	<div class="container">
		<h1><i class="fa fa-comment fa-fw"></i> Contact Us</h1>
	</div>
</header>
<div class="container animated fadeIn contact">
	@include('pages.message') 
	<div class="row">
		<div class="col-sm-12" id="parent">
			<div class="col-sm-6">
				<form class="contact-form"  method="post" action="Contact" >
					{{ csrf_field() }}
					<div class="form-group">
						<input type="text" class="form-control"  name="name" placeholder="Name" required="required" >
					</div>

					<div class="form-group form_left">
						<input type="email" class="form-control"  name="email" placeholder="Email" required="required">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="subject"   placeholder="Subject" required="required">
					</div>
					<div class="form-group">
						<textarea class="form-control textarea-contact" rows="5"  name="message" placeholder="Your Message ..." required=""></textarea>
						<br>
						<button class="btn btn-default btn-send">
							<span class="fa fa-send"></span> Contact Us
						</button>
					</div>
				</form>
			</div>
			<div class="col-sm-6">
				<iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
			</div>

		</div>
	</div>
	<div class="container second-portion">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">MAIL & WEBSITE</h3>
							<p>
								<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
								<br>
								<br>
								<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
							</p>

						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">CONTACT</h3>
							<p>
								<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
								<br>
								<br>
								<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-7567065254
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-lg-4">
				<div class="box">
					<div class="icon">
						<div class="image">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="info">
							<h3 class="title">ADDRESS</h3>
							<p>
								<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot
								"Shree Krishna Krupa", Rajkot - 360001.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection
