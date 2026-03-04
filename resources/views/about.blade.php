@extends('layouts.app')

@section('title', 'About | Poornima')

@section('content')


<section class="about-hero py-5 mt-5">
  <div class="container">
    <div class="row align-items-center">

     
      <div class="col-lg-5 text-center mb-4 mb-lg-0">
        <img src="{{ asset('images/profilepic.avif') }}" 
             class="img-fluid rounded-4 shadow-lg about-main-img" 
             alt="Poornima">
      </div>

      <div class="col-lg-7">
        <h1 class="fw-bold mb-3">About Me</h1>

        <p class="lead">
          Hi, I'm <strong>Poornima</strong> — a passionate 
          <span class="highlight">Web Engineer</span> who loves blending 
          <span class="highlight">design + technology</span>.
        </p>

        <p>
          I specialize in building modern, responsive applications using 
          Laravel, JavaScript, and Bootstrap. My passion lies in creating
          visually captivating interfaces that enhance user experience.
        </p>

        <a href="#" class="btn btn-dark mt-3 px-4 py-2 rounded-pill">
          Download CV
        </a>
      </div>

    </div>
  </div>
</section>


<section class="about-skills py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Technical Skills</h2>

    <div class="row">

      <div class="col-md-6 mb-4">
        <h6>Laravel</h6>
        <div class="progress rounded-pill">
          <div class="progress-bar bg-dark" style="width: 70%"></div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <h6>JavaScript</h6>
        <div class="progress rounded-pill">
          <div class="progress-bar bg-dark" style="width: 75%"></div>
        </div>
      </div>

      <div class="col-md-6 mb-4">
        <h6>HTML & CSS</h6>
        <div class="progress rounded-pill">
          <div class="progress-bar bg-dark" style="width: 90%"></div>
        </div>
      </div>

      

    </div>
  </div>
</section>



<section class="about-passion py-5">
  <div class="container text-center">
    <h2 class="mb-5">What Drives Me</h2>

    <div class="row">

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow rounded-4 h-100">
          <h5>Creative Design</h5>
          <p>
            I enjoy crafting visually beautiful interfaces
            that feel intuitive and elegant.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow rounded-4 h-100">
          <h5>Coding</h5>
          <p>
            Writing maintainable, scalable and structured code
            is something I truly value.
          </p>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="p-4 shadow rounded-4 h-100">
          <h5>Growth</h5>
          <p>
            I continuously learn new technologies to stay ahead
            in the evolving web industry.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection