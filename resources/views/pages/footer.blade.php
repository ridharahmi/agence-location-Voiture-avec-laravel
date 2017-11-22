<footer id="footer" class="clearfix">
	<div id="footer-widgets">
		<div class="container">
			<div id="footer-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div id="meta-3" class="widget widgetFooter widget_meta">
							<h4 class="widgettitle">Importent Page :</h4>
							<ul>
								<li>
									<a href="{{ url('/') }}"><i class="fa fa-home fa-fw"></i> Home</a>
								</li>
								<li>
									<a href="login"><i class="fa fa-link"></i>   Voitures</a>
								</li>
								<li>
									<a href="Contact"><i class="fa fa-envelope fa-fw"></i> Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div id="recent-posts-3" class="widget widgetFooter widget_recent_entries">
							<h4 class="widgettitle">Our social media :</h4>
							<ul>
								<li>
									<a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i> Facebook</a>
								</li>
								<li>
									<a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i> Twitter</a>
								</li>
								<li>
									<a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube"></i> Youtube</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div id="search-3" class="widget widgetFooter widget_search">
							<h4 class="widgettitle">Search LOcation :</h4>

							<div class="form-group">
								<label class="control-label">Write what you want to search for it  :</label>
								<div class="input-group">
									<span class="input-group-addon"> <i class="fa fa-search"></i></span>
									<input class="form-control" placeholder="search ..." type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button">
											Search !
										</button> </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-floor">
		<div class="container">
			<div class="row">
				<div class="col-md-4 copyright">
					 © 2017
				</div>
				<div class="col-md-4 col-md-offset-4 attribution">
					Developer by <a target="_blank" href="#">Nom</a> .
				</div>
			</div>
		</div>
	</div>
</footer>
@include('pages.js')
