@extends('layout.temp_pprf')
@section('title','Epicentrum - The 10th Padjadjaran Public Relations Fair')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center ">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-7 col-lg-8">
				<h1 class="comp_title">PR Fair</h1>
				<h2></h2>
			</div>
		</div>
	</div>
</section>
<section class="d-flex align-items-center justify-content-center" id="overlay">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-xl-10 col-lg-8">
				<p class="desc_comp_b">&emsp;&emsp; <b> Padjadjaran Public Relations Fair </b> is a national and international level communication student competition organized by Hima Humas Fikom Unpad and has been held for 9 consecutive years. This year, PPRF is under the support of the Epicentrum of Padjadjaran University along with 6 other competitions. PPRF has 2 branches of competition, which are OlymPRday and PRSF (Public Relations Student Forum).</p>
				<p class="desc_comp_b">&emsp;&emsp; <b>OlymPRday</b> → OlymPRday is one of the two competitions based on Public Relations Strategic Planning. This competition requires participants to be able to solve the problem through research skills, teamwork, and also creativity. The output of OlymPRday is a Campaign Proposal as a systematic, planned, interesting, and creative solution strategy for the issues raised.</p>
				<p class="desc_comp_b">&emsp;&emsp; <b>PRSF</b> → Public Relations Student Forum (PRSF) is one of the two competitions in The 10th Padjadjaran Public Relations Fair (PPRF), where the competition takes form in a panel discussion forum that emphasizes on Public Relations perspective in order to create feasible solutions. The participants, which are called delegates, will undergo several formal sessions and informal sessions during PRSF with full English as the working language, in which they must propose their unique solutions based on Public Relations perspective and through their problem-solving ability, in-depth research, public speaking, lobbying, and negotiation. The final output of PRSF is to generate a Draft Resolution that contains recommendations related to the issue and gives significant contributions in solving the nation's problem to the relevant institutions.</p>
			</div>
		</div>
	</div>
</section>


<section class="competition-section">
	<div class="container">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div style="background: white; border-radius: 100%;">
					<img src="{{ url('assets/img/PPRF.png')}}" class="card-img-top" alt="...">
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
			<div class="frame_comp col-xl-6 col-lg-8">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://www.youtube.com/embed/wxGd_ZU8kZs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="frame_comp col-xl-6 col-lg-8">
				<iframe style="border:0; padding: 15px; margin-top: 30px; width: 100%; height: 360px" src="https://www.youtube.com/embed/qF0NF7ggcQs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
						<div class="card-title">
							<h4 class="theme_competition">Theme Description</h4>
						</div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_theme') }}" class="btn-block btn-read mt-2 py-2 mx-auto">
							<p>Read More</p>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/Registration.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title">
							<h4 class="theme_competition">Registration Competition</h4>
						</div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_registration') }}" class="btn-block btn-read mt-2 py-2 mx-auto">
							<p>Read More</p>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="200">
				<div class="card mx-auto">
					<img src="{{ url('assets/img/FAQ_and_TRIVIA.png')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<div class="card-title">
							<h4 class="theme_competition">FAQ & Trivia</h4>
						</div>
					</div>
					<div class="card-footer">
						<a href="{{ route('pprf_faqtrivia') }}" class="btn-block btn-read mt-2 py-2 mx-auto">
							<p>Read More</p>
						</a>
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
				<img src="{{ url('assets/img/talkshow/pprf.png')}}" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="d-flex align-items-center justify-content-center">
	<div class="container" data-aos="fade-up">
		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150" style="color: #fff;">
			<div class="col-xl-10 col-lg-8">
				<p class="desc_comp" style="color: #fff";><b>
						<center>
							The 10th Padjadjaran Public Relations Fair Ajak Mahasiswa Melawan Sampah Laut
						</center>
					</b>
				</p>

				<p class="desc_comp" style="color: #fff">&emsp;&emsp; Supported by Coordinating Ministry for Maritime Affairs and Investment of the Republic of Indonesia , The 10th Padjadjaran Public Relations Fair (PPRF) 2022 was held with the grand theme "Ocean Recovery: Reducing Marine Plastic Debris to Combat Climate Change." The main events were held on May 17-20 2022 through the Zoom Meeting platform.</p>
				<p class="desc_comp" style="color: #fff">&emsp;&emsp; The event started with the Opening Ceremony on Tuesday, May 17, 2022 which was filled with a warm welcome to the participants of the the 10th PPRF 2022 which was also attended by the deans of the Faculty of Communication and Public Relations Study Program, Universitas Padjadjaran. Then, the series continued with the PR Talk Talkshow with theme "Uncover The Reality of Indonesia's Marine Plastic Debris" which consisted of two segments. The first segment carries the theme “Indonesia’s Government’s Actions Against Marine Plastic Debris” which presents Rendra Kurnia Hasan (Coordinator for Waste Management, Coordinating Ministry for Maritime Affairs and Investment of the Republic of Indonesia) and the second segment carries the theme "The Importance of Waste Management on Decreasing Indonesia's Marine Plastic Debris” which presented three speakers from different backgrounds, namely Dandhy Dwi Laksono (Co-Founder WatchDoc Documentary), Silviana Chandra (Senior Campaign Executive at Waste4Change), and Noir Primadona Purba (Lecturer of Unpad Faculty of Fisheries and Marine) in the same day.</p>
				<p class="desc_comp" style="color: #fff">&emsp;&emsp; Furthermore, from Wednesday to Thursday, 18-19 May 2022, two competitions were held. The first competition is Public Relations Student Forum (PRSF), a competition in the form of a panel discussion from a public relations perspective. The participants who are referred to as delegates must use English language skills, situation analysis, public speaking, problem solving, as well as lobbying and negotiation during the series of competitions as an effort to answer the issues raised.</p>
				<p class="desc_comp" style="color: #fff">&emsp;&emsp; This year, the theme of PRSF is "Advancing Public's Awareness As a Solution on Reducing Marine Plastic Debris". PRSF is a competition in the form of a panel discussion that emphasizes the public relations perspective</p>
				<p class="desc_comp" style="color: #fff">&emsp;&emsp; In addition to PRSF, there is also an OlymPRDay in the form of a Public Relations Campaign. Participants are required to think critically to analyze the situations and cases given. The theme of this year's OlymPRDay is “Reducing Marine Plastic Debris by Optimizing Waste Management”. </p>
				<p class="desc_comp" style="color: #fff">&emsp;&emsp; The Padjadjaran Public Relations Fair will not stop here. With your support, we will be back next year of course with interesting themes and concepts and add insight. See you at the 11th Padjadjaran Public Relations Fair!</p>
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