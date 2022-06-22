@extends('layout.temp_tellav') 
@section('title','Epicentrum - Commoviecator') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">Commoviecator</h1>
			<h2></h2>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center" id="overlay">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_comp_b">&emsp;&emsp; <b> Commoviecator </b> is a part of competition presented by Television & Film Student Union under Epicentrum event by the Faculty of Communication Sciences Universitas Padjadjaran. Commoviecator is held with goals to be the student’s forum to emerge their communication skills through short-movie. This competition is encouraging people to make a movie not only for a work of art, but also as a tool that has the ability to deliver such an impactful message.</p>
			<p class="desc_comp_b">&emsp;&emsp; In communication terms, an individual or a group of people that conveys messages is called a communicator. A Communicator is known as the main actor who plays an active role in building the communication process. Conveying messages in communication can be done through various media. Movie is one of its forms that conveys messages to mass audiences in audio visual form.</p>
			<p class="desc_comp_b">&emsp;&emsp; Hence, Commoviecator exists to maximize the role of communicator in public by promoting and expressing their messages in a film. </p>
		</div>
    </div>
</div>
</section>

<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div style="background: white; border-radius: 100%;">
					<img src="{{ url('assets/img/Commoviecator.png')}}" class="card-img-top" alt="...">
				</div>
			</div>
	</div>
</div>
</section>

<section class="d-flex align-items-center justify-content-center teas">
	<div class="container pr-ex-center" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-8">
				<h1 class="comp_title">Teaser</h1>
			</div>
			<div class="col-xl-6 col-lg-8">
				<h1 class="comp_title">More About Us</h1>
			</div>
			<div class="col-xl-6 col-lg-8">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px;" src="https://www.youtube.com/embed/xTRMB1ft0hM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
			</div>
			<div class="col-xl-6 col-lg-8">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px;" src="https://www.youtube.com/embed/QE8loubJ1zo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
			</div>
		</div>
</section>


<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
	<div class="row">
	<div>
				<h1 class="comp_title_li">The Competition</h1>
			</div>
				</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Theme_Desc.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Theme Description</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('tav_theme') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Registration.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Registration Competition</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('tav_registration') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/FAQ_and_TRIVIA.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">FAQ & Trivia</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('tav_faqtrivia') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
					</div>
				</div>
			</div>
	</div>
</div>
</section>
 <!-- Akhir Button -->

<!--AWAL TALKSHOW-->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
		<h1 class="comp_title_li">Our Talkshow</h1>
		</div>
    </div>
</div>

</section>

<!-- <section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section> -->
<!-- coming soon POSTER -->
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<img src="{{ url('assets/img/talkshow/commoviecator.png')}}" class="img-fluid" >
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_comp">
				<b>
					<center>
					Andibachtiar Yusuf Foster a Perspective that Movie can Impact on Social Climate Empowerment through a Webinar held by Commoviecator 2022
					</center>
				</b>
			</p>
			<p class="desc_comp">&emsp;&emsp; JATINANGOR, on Wednesday (18/5/2022) Commoviecator 2022 held a webinar titled “Movie Impact On Social Climate Empowerment”. This webinar was presented by an Indonesian film director, Andibachtiar Yusuf. As a speaker, he engaged Youngsters especially filmmakers to empower the society through films.</p>
			<p class="desc_comp">&emsp;&emsp; The session was led by Rayhan Renaldi as moderator, who is also a young director and alumnus from Fikom Unpad. Together with Rayhan, Andibachtiar Yusuf – known as Bang Ucup – discussed the film as a media that can be used as a forum to improve the socioeconomic condition in society for a better future. As the climate crisis impacts on society, a film can be the medium to advocate the current issue that happened because of the climate crisis. The speaker also mentioned step-by-step on how to raise a climate issue through the film production and distribution.</p>
			<p class="desc_comp">&emsp;&emsp; During the event, Bang Ucup delivered the lessons by answering a topic that was raised by the moderator. After that, some participants asked questions in the question and answer session through a platform called sli.do and through a comment section in Zoom. This event was also attended by Dr. Sri Seti Indriani, S.IP., M.Si. as the head of the Television and Film Study Program, Fikom Unpad, who supervised the activities held by Commoviecator 2022. She gave her remarks at the beginning of the event.</p>
			<p class="desc_comp">&emsp;&emsp; The purpose of this webinar is to provide information on social climate issues through film media and encourage the Youngsters, so that they can create films that can empower and bring awareness to their society. Moreover, through this webinar, Youngsters could build on their knowledge and get a deep understanding of the webinar’s themes from the perspective of a filmmaker. The webinar was closed by giving certificates to both the speaker and moderator with a photo session.</p>
		</div>
    </div>
</div>
</section>

<!-- Section Judges -->
<section class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
		<h1 class="comp_title_li">Judges</h1>
		</div>
    </div>
</div>
</section>
</section>

@if (count($judges) == 0)
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>
@else
<!-- list judges -->
<section class="judges">
	<div class="container">
		<div class="judges-section">
			<div class="row mt-3 justify-content-center">
			@foreach ($judges as $item)
				<div class="col-md-3 col-sm-4 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
					<div class="mt-3">
						<img src="{{ $item->picture }}" class="pic-judges">
						<div class="judges-name">
							{{ $item->name }}
						</div>
						<div class="judges-occ">
							{{ $item->occupation }}
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</section>
@endif
<!-- Akhir Section Judges -->

<!-- list finalist -->
<section class="d-flex align-items-center justify-content-center cont">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
		<h1 class="comp_title_li">Our Finalist</h1>
		</div>
    </div>
</div>
</section>

@if (count($finalists) == 0)

</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-12 col-lg-12">
			<p class="coming_soon"><b>Coming Soon</b></p>
		</div>
    </div>
</div>
</section>

@else

<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up" data-aos-delay="150">
	<div class="row justify-content-center text-center">
		@foreach ($finalists as $item)
			<div class="col-xl-4 col-sm-6 mb-5">
			    <div class="contact_person rounded shadow-sm py-5 px-4">
			        <h5 class="mb-0">{{ $item->title }}</h5><span class="small text-uppercase text-muted text-center">{{ $item->subtitle }}</span>
			            <ul class="social mb-0 list-inline mt-3">
			                <li class="list-inline-item"><a href="http://line.me/ti/p/~{{ $item->line_id }}" class="social-link"><i class="fa-2x fab fa-line"></i></a></li>
			                <li class="list-inline-item"><a href="mailto:{{ $item-> email}}" class="social-link"><i class="fa-2x fas fa-envelope"></i></a></li>
			            </ul>
			    </div>
			</div>
		@endforeach
	</div>
</div>
</section>

@endif
<!-- Akhir Section finalist -->
@endsection