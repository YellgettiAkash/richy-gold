<div class="slider">
				<h2 class="wow shake animated" data-wow-delay=".5s">Our Concern</h2>
				<div class="border"></div>
				<script src="<?= url('/') ?>/assets/web-assets/js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 2000,
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
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info">
								<h3 class="wow fadeInRight animated" data-wow-delay=".5s">Our products are trusted and reliable</h3>
								<div class="more-button wow fadeInRight animated" data-wow-delay=".5s">
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>Our drugs are endorsed by NAFDAC and various drug monitoring agencies</h3>
								
								<div class="more-button">
									
								</div>
							</div>
						</li>
						<li>
							<div class="slider-info">
								<h3>Life is precious to you... And precious to us.	</h3>
								<div class="more-button">
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>