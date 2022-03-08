@extends('layout.temp') 
@section('title','Epicentrum - Competition') 
@section('content') 
<!-- ======= Hero Section ======= -->
<section id="hero" class="oc">
<div class="container-fluid">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
		<div class="col-xl-7 col-lg-8">
			<h1 class="about">OUR COMPETITIONS</h1>
		</div>
    </div>
</div>
</section>

<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('remind') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Remind.png')}}" alt="Image" style="width: 87%; padding-top:15px;">
    </a>
    <h3 class="sub-title-comp">RESEARCH MINDEDNESS</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('ideation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/ide.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">IDEATION</h3>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('tav') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Commoviecator.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">COMMOVIECATOR</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('mediation') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Mediation.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">MEDIATION</h3>
  </div>
</div>
</section>
<section class="card_our_competition">
<div class="card-de" data-aos="fade-up" data-aos-delay="150">
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('liblicious') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/lib.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">LIBLICIOUS</h3>
  </div>
  <div class="card bg-tran" style="border:none;">
    <a href="{{ route('parjur') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/Parjur.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">PARADE JURNALISTIK</h3>
  </div>
</div>
</section>
<section class="card_our_competition center" class="card-de" data-aos="fade-up" data-aos-delay="150">
<div class="card bg-tran" style="width: 34rem; border:none;">
    <a href="{{ route('pprf') }}" class="unit-1 text-center">
        <img src="{{ url('assets/img/PPRF.png')}}" alt="Image" style="width: 80%; padding-top:20px;">
    </a>
    <h3 class="sub-title-comp">THE 9TH PADJADJARAN PUBLIC RELATIONS FAIR</h3>
  </div>
</section>
@endsection