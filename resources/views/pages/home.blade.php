@extends('layout.temp') 
@section('title','Epicentrum - Home') 
@section('content') 



<div id="myModal" class="modal fade" role="dialog" data-aos="fade-up">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			<span aria-hidden="true">×</span>
        		</button>
				<img src="{{ url('assets/img/lightbox2.png')}}" class="card-img-top" alt="...">
			</div>
		</div>
	</div>
</div>

<script>
	$("#myModal").modal('show');
</script>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
<div class="container pr-ex-center" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">About Epicentrum</h1></br></br>
			<p class="desc_comp_b">Epicentrum is the largest annual international-scale communication festival in Indonesia held by the Faculty of Communication Science, Universitas Padjadjaran (Fikom Unpad). This festival is a forum for the younger generation, especially students, to contribute and realize their role as agents of change in solving various problems in society through a communication point of view.</p>
			<p class="desc_comp_b">Youngsters are expected to create the best works and innovations as solutions to real problems by integrating Pentahelix, which includes ABCGM (Academician, Business, Community, Government, and Media) to achieve Epicentrum's goals. In collaboration with the seven competitions from each study program at Fikom Unpad, Epicentrum held a series of competitions, webinars, talk shows, and online workshops. All competition subjects consist of Research Mindedness, Ideation, Liblicious, Parade Jurnalistik, The 10th Padjadjaran Public Relations Fair (Public Relations Student Forum (PRSF) and OlymPRday), Tell A Vision, and Mediation. The seven competitions focus on solving national to global problems which will be linked to their respective scientific focus. This year, Public Relations Student Forum (PRSF) from The 10th Padjadjaran Public Relations Fair, Research Mindedness, Commoviecator, and Ideation can be competed internationally all around Asia.</p>
			<p class="desc_comp_b">We hope that Epicentrum can be used as an activity that can unite all departments in the Faculty of Communication Sciences in Asia to strengthen a sense of togetherness. Thus, Epicentrum is not only realized as a festival and competition, but also as a concrete manifestation of the contribution of all students and communication personnel in Asia to problems in the country.</p>
		</div>
	</div>
	</section>
	<!-- End Hero -->
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center justify-content-center teas">
	<div class="container pr-ex-center" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-8">
				<h1 class="comp_title">Teaser</h1>
			</div>
			<div class="">
				<iframe  style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://youtube.com/embed/GwEtF0MXrdU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen controls></iframe>
			</div>
		</div>
		</section>
		<!-- End Hero -->

<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<h1 class="comp_title text-center">Events</h1>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/pre_event.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Pre Event</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pre_event')}}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Main_Event.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Main Event</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('main_event')}}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Closing.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Closing</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('closing')}}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
 <!-- Akhir Button -->


		<!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex align-items-center justify-content-center comp">
		<div class="container pr-ex-center" data-aos="fade-up">
			<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
				<div class="col-xl-6 col-lg-8">
					<h1 class="comp_title_li">Competition</h1>
				</div>
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/Remind.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/ide.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/Commoviecator.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="3" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/Mediation.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="4" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/lib.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="5" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/Parjur.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
							<li data-target="#carouselExampleIndicators" data-slide-to="6" style="width:100px;">
								<img class="d-block w-100" src="{{ url('assets/img/PPRF.png')}}" style="margin-top: 8px" alt="First slide">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="list-compe" style="margin-bottom: 300px">
								<div class="carousel-item active">
									<a href="{{ route('remind') }}"><img class="ch" src="{{ url('assets/img/Remind.png')}}" alt="First slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('ideation') }}"><img class="ch" src="{{ url('assets/img/ide.png')}}" alt="Second slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('tav') }}"><img class="ch" src="{{ url('assets/img/Commoviecator.png')}}" alt="Third slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('mediation')}}"><img class="ch" src="{{ url('assets/img/Mediation.png')}}" alt="Third slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('liblicious')}}"><img class="ch" src="{{ url('assets/img/lib.png')}}" alt="Third slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('parjur')}}"><img class="ch" src="{{ url('assets/img/Parjur.png')}}" alt="Third slide"></a>
								</div>
								<div class="carousel-item">
									<a href="{{ route('pprf')}}"><img class="ch" src="{{ url('assets/img/PPRF.png')}}" alt="Third slide"></a>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
			</section>
			<!-- End Hero -->

			<!-- ======= Hero Section ======= -->
			<section id="hero" class="d-flex align-items-center justify-content-center cont">
			<div class="container pr-ex-center" data-aos="fade-up">
				<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
					<div class="col-xl-6 col-lg-8">
						<h1 class="comp_title_li">Contact Us</h1>
					</div>
					<div>
						<div class="row mt-5">
							<div class="col-lg-4">
								<form action="{{ route('contact.send') }}" method="post" role="form">
									{{ csrf_field() }}
									<div>
										<div class="address">
											<h3>Enter Your Name</h3>
											<input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
										</div>
										<div class="email">
											<h3>Enter Your Email*</h3>
											<input type="email" name="email" class="form-control" id="name" value="{{ old('email') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>

											@if($errors->has('email'))
                                			    <div class="text-danger">
                                			        {{ $errors->first('email')}}
                                			    </div>
                                			@endif
										</div>
										<div class="phone">
											<h3>Enter Your Subject</h3>
											<input type="text" name="subject" class="form-control" id="name" value="{{ old('subject') }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
										</div>
									</div>
								</div>
								<div class="col-lg-8 mt-5 mt-lg-0">
									<div class="phone">
										<h3>Enter Your Message</h3>
										<textarea class="form-control" name="message" rows="7" data-rule="required" data-msg="Please write something for us">{{ old('message') }}</textarea>
									</div>
									<button style="margin-top:10px;" type="submit" class="btn subm">Submit</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				</section>
				<!-- End Hero -->
@endsection