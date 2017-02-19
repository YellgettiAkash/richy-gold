<div class="container">
			<div class="popular-heading information-heading">
				<h3 class="wow fadeInDown animated" data-wow-delay=".5s">Popular Products</h3>
			</div>
			<div class="popular-slide">
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider1").responsiveSlides({
								auto: true,
								pager: true,
								nav: false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							 });				
						});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider1">
						<li>
							<div class="popular-slide-info wow bounceIn animated" data-wow-delay=".5s">
								<h4>Product 1</h4>
								<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. Sed ultricies dignissim magna tristique interdum</p>
							</div>
						</li>
						<li>
							<div class="popular-slide-info popular-slide1">
								<h4>Product 2</h4>
								<p>Habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. Sed ultricies dignissim magna tristique interdum Pellentesque</p>
							</div>
						</li>
						<li>
							<div class="popular-slide-info popular-slide2">
								<h4>Product 3</h4>
								<p>Tristique senectus pellentesque habitant morbi et netus et malesuada fames ac turpis egestas. Maecenas volutpat lacus at enim aliquet, quis iaculis nisi bibendum. Nullam cursus arcu lobortis, pharetra augue et, dignissim nunc. Morbi vestibulum tempus orci at faucibus. dignissim magna tristique interdum Sed ultricies</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="popular-grids">
				<div class="col-md-4 popular-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h5>Product 4</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="col-md-4 popular-grid wow fadeInUp animated" data-wow-delay=".5s">
					<h5>Product 5</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="col-md-4 popular-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Product 6</h5>
					<p>Donec malesuada ultricies metus ac vehicula. Nullam convallis sagittis tellus ut dictum. Proin risus lacus, sollicitudin sit amet ante ac, dapibus convallis ipsum.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>