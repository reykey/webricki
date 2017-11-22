@extends('layouts.project')

@section('isi')

<div class="fh5co-overlay-mobile"></div>
		<div id="fh5co-home" class="js-fullheight" data-section="home">

			<div class="flexslider">
				
				<div class="fh5co-overlay"></div>
				<div class="fh5co-text">
					<div class="container">
						<div class="row text-center">
							<h1 class="animate-box">Freysha &amp; Nanda Wedding</h1>
							<h2 class="animate-box">Courtesy of Kanva Pictura</h2>
							<div class="fh5co-go animate-box">
								<a href="#" class="js-fh5co-next">
									View Images
									<span><i class="icon-arrow-down2"></i></span>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			  	<ul class="slides">
			   	<li style="background-image: url({{URL::to('/')}}/images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
			  	</ul>

			</div>
		</div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h2 class="fh5co-section-title animate-box">Intro Text</h2>
						<p class="fh5co-lead animate-box">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
				</div>

				<div class="row">
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_1.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_2.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_3.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_4.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_5.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_6.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_7.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_8.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/images_freyshaxnanda/RIP_9.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					
					<!-- <figure class="animate-box">
						<img src="{{URL::to('/')}}/images/slide_2.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/slide_1.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/pic_13.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure>
					<figure class="animate-box">
						<img src="{{URL::to('/')}}/images/pic_14.jpg" alt="Free HTML5 Template by FREEHTML5.co" class="img-responsive center-block">
					</figure> -->
				</div>
	
			</div>
		</div>
@endsection		