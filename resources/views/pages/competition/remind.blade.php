@extends('layout.temp_remind') 
@section('title','Epicentrum - Research Mindedness') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="comp_title">Research Mindedness</h1>
			<h2></h2>
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center" id="overlay">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-10">
			<p class="desc_comp_b">&emsp;&emsp; <span style="font-weight: bold;">Research Mindedness</span> is an international competition oriented towards research development and the formulation of strategic solutions. Research Mindedness itself is one of the competitions under the auspices of the largest communication festival in Indonesia, namely Epicentrum Unpad. The issues raised in the Epicentrum Unpad Communication Festival are international standard issues, and the theme raised by the Research Mindedness competition is the result of developing the main issues that have been determined by Epicentrum Unpad.</p>
		</div>
    </div>
</div>
</section>


<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div style="background: white; border-radius: 100%;">
					<img src="{{ url('assets/img/Remind.png')}}" class="card-img-top" alt="...">
				</div>
			</div>
	</div>
</div>
</section>


<section class="d-flex align-items-center justify-content-center teas">
	<div class="container pr-ex-center" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-6 col-lg-6">
				<h1 class="comp_title">Teaser</h1>
			</div>
			<div class="col-xl-6 col-lg-6">
				<h1 class="comp_title">More About Us</h1>
			</div>
			<div class="frame_comp col-xl-6 col-lg-6">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://youtube.com/embed/eKoO8ez1i_s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="frame_comp col-xl-6 col-lg-6">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://youtube.com/embed/c03MrTYI7qI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
</section>

<!-- Awal Button -->
<section class="competition-section">
<div class="container">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="row">
	<div>
				<h1 class="comp_title">The Competition</h1>
			</div>
				</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Theme_Desc.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title"><h4 class="theme_competition">Theme Description</h4></div>
					</div>
					<div class="card-footer">
						<a href="{{ route('remind_theme') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
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
						<a href="{{ route('remind_registration') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
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
						<a href="{{ route('remind_faqtrivia') }}" class="btn-block btn-read mt-2 py-2 mx-auto"><p>Read More</p></a>
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
		<h1 class="comp_title">Our Talkshow</h1>
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
			<img src="{{ url('assets/img/talkshow/remind.png')}}" class="img-fluid" >
		</div>
    </div>
</div>
</section>
<section class="d-flex align-items-center justify-content-center">
<div class="container" data-aos="fade-up">
	<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-10 col-lg-8">
			<p class="desc_comp">&emsp;&emsp; The 6th Annual Research Mindedness Seminar has been held at 9 A.M, on May 18, 2022, via Zoom Meeting and moderated by Aliya Saajida. This seminar is called by the title of "Fast Fashion 101: The New Era of Sustainable Fashion" which is one of the programs under the Research Mindedness competition at Epicentrum Padjdjaran Communication Festival. The title was given from the theme that is arisen by Research Mindedness for the competition which is "Persuasive Communication by Media to Reduce Fast Fashion Waste" which is developed from the main issue, namely climate action. There are several speakers in this seminar that are experts in their field and are relevant to the discussed topic such as Indita Karina, a Senior Lecturer in Fashion Design at Binus International, Nada Zharfania, a Sustainability Behavior and Marketing Analyst at WRI Indonesia, and Intan Anggita, Co-Founder of Setali Indonesia. These 3 speakers are intended to raise people's awareness about the impact of the fast fashion industry on the environment leading to a new era of sustainable fashion.</p>
			<p class="desc_comp">&emsp;&emsp; In this seminar, the speakers mainly discuss the fast fashion industry which is one of the most interesting issues in our life. To comprehend, Fast fashion is a word used to characterize the clothing industry's business model of copying recent catwalk trends and high-fashion designs, mass-producing them at minimal costs, and releasing them to retail stores quickly while demand is high. However, the fact is that this industry has a serious impact on our environment. This seminar is expected to provide the participants with new knowledge so that it can help participants to have a bigger picture and scope in studying problems in more depth to be poured into the Research Mindedness competition. Besides that, by acknowledging the impacts of fast fashion, the participants could actually implement the steps to reduce the impacts of fast fashion in real life.</p>
			<p class="desc_comp">&emsp;&emsp; The 6th Annual Research Mindedness Seminar participants were more than 100 participants which includes the Research Mindedness crew, the participants of the competition, and other Padjadjaran University students. The seminar was also live-streamed on YouTube. The seminar was opened by the MC, Aliya, then followed by the remarks of the project officer, the Faculty of Communication Science Padjadjaran University's dean, the head of the Communication Science study program, and the head of Communication Science Hima.</p>
			<p class="desc_comp">&emsp;&emsp; After all those remarks, the discussion of the topic is finally started. The first speaker is Indita Karlina. She discussed fast fashion itself, like what is fast fashion? how can it spread massively? and so on. Followed by the second speaker, which is Nada Zharfania, discussed the correlation between apparel and the environment. Lastly, the third speaker, Intan Anggita mainly discussed the impacts of fast fashion. The participants were allowed to ask questions about fast fashion to the speakers during the Q&A session after the 3 speakers finished their presentations. The seminar was close to the end, before that, there are certifications for the 3 speakers, Indita Karline, Nada Zharfania, and Intan Anggita for their participation to be speakers in the Research Mindedness seminar. Then, the moderator, Aliya Saajida, was also given a certificate of appreciation. The seminar has finally ended and is expected to be held again next year as The 7th Annual Research Mindedness Seminar.</p>
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
			            <!-- <ul class="social mb-0 list-inline mt-3">
			                <li class="list-inline-item"><a href="http://line.me/ti/p/~{{ $item->line_id }}" class="social-link"><i class="fa-2x fab fa-line"></i></a></li>
			                <li class="list-inline-item"><a href="mailto:{{ $item-> email}}" class="social-link"><i class="fa-2x fas fa-envelope"></i></a></li>
			            </ul> -->
			    </div>
			</div>
		@endforeach
	</div>
</div>
</section>

@endif
<!-- Akhir Section finalist -->

@endsection