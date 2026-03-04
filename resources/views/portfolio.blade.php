@extends('layouts.app')
@section('title', 'Poornima | Portfolio')

@section('content')


<section class="main d-flex align-items-center" id="home">
  <div class="container">
    <div class="row align-items-center"> 
      <div class="col-lg-6">
        <h3>
          <small>Hello, I'm</small><br>
          Poornima
        </h3>

        <h6 class="pt-3">
          <span id="typing"></span>
        </h6>

        <div class="mt-4">
          <a href="#about" class="btn1">About Me</a>
          <a href="{{ route('work') }}" class="btn2">My Projects</a>
        </div>
      </div>     

      <div class="col-lg-6 text-center">
        <img src="{{ asset('images/profilepic.avif') }}" 
             class="img-fluid profile-img" 
             alt="Poornima">
      </div>
    </div>
  </div>
</section>



<section class="about py-5" id="about">
  <div class="container py-5">
    <div class="row align-items-center">

      <div class="col-lg-4 text-center mb-4 mb-lg-0">
        <img src="{{ asset('images/profilepic.avif') }}" 
             class="img-fluid about-img" 
             alt="Poornima">
      </div>

      <div class="col-lg-5">
        <h1>A small intro about me</h1>
        <p class="py-3">
          I am a passionate Web Engineer focused on building responsive,
          modern web applications using HTML, Laravel, JavaScript, and Bootstrap.I started to do designing when I was in college and I developed a great 
        passion for it.My passion lies in the intersection of art and technology, creating visually captivating interfaces and elevating overall user digital experiences.


        </p>
      </div>

      <div class="col-lg-3 text-center">
        <img src="{{ asset('images/cutedoodle.jpg') }}" 
             class="img-fluid doodle-animation" 
             alt="Cute Doodle">
      </div>

    </div>
  </div>
</section>



<section class="skills py-5" id="skills">
  <div class="container text-center">
    <h1 class="mb-5">My Skills</h1>

    <div class="row">
      <div class="col-md-4">
        <h5>HTML & CSS</h5>
        <div class="skill-bar">
          <div class="skill-fill" style="width: 90%"></div>
        </div>
      </div>

      <div class="col-md-4">
        <h5>Laravel</h5>
        <div class="skill-bar">
          <div class="skill-fill" style="width: 50%"></div>
        </div>
      </div>

      <div class="col-md-4">
        <h5>JavaScript</h5>
        <div class="skill-bar">
          <div class="skill-fill" style="width: 75%"></div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="projects py-5">
  <div class="container text-center">
    <h1 class="mb-5">Featured Projects</h1>

    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="project-card p-4 shadow rounded">
          <h5>Mercedes Benz Website</h5>
          <p>Luxury finance landing page built with Laravel & Bootstrap.</p>
          <a href="{{ route('work') }}" class="btn1">View</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="coffee-playground py-5">
  <div class="container text-center">
    <h1 class="mb-3">Tired? Have a cup of coffee ☕</h1>
    <p class="mb-5">Click a coffee and watch it being made ✨</p>

    <div class="coffee-wrapper">

      <div class="cup">
        <div class="steam"></div>
        <div id="coffeeLayer" class="coffee-layer"></div>
        <div id="milkLayer" class="milk-layer"></div>
        <div id="sugarLayer" class="sugar-layer"></div>
      </div>

      <div class="coffee-buttons mt-4">
        <button class="coffee-btn" data-type="espresso">Espresso</button>
        <button class="coffee-btn" data-type="latte">Latte</button>
        <button class="coffee-btn" data-type="cappuccino">Cappuccino</button>
      </div>

    </div>
  </div>
</section>


<div class="cursor-dot"></div>




<script>

document.addEventListener("mousemove", (e) => {
  const dot = document.querySelector(".cursor-dot");
  dot.style.left = e.clientX + "px";
  dot.style.top = e.clientY + "px";
});
</script>


<script>

const words = ["Web Engineer", "Laravel Developer", "Creative Designer"];
let wordIndex = 0;
let charIndex = 0;
let currentWord = "";
let isDeleting = false;

function typeEffect() {
  const typing = document.getElementById("typing");
  currentWord = words[wordIndex];

  if (!isDeleting) {
    typing.innerHTML = currentWord.substring(0, charIndex++);
    if (charIndex > currentWord.length) {
      isDeleting = true;
      setTimeout(typeEffect, 1000);
      return;
    }
  } else {
    typing.innerHTML = currentWord.substring(0, charIndex--);
    if (charIndex === 0) {
      isDeleting = false;
      wordIndex = (wordIndex + 1) % words.length;
    }
  }

  setTimeout(typeEffect, isDeleting ? 50 : 100);
}

document.addEventListener("DOMContentLoaded", typeEffect);
</script>


<script>

window.addEventListener("scroll", function() {
  document.querySelectorAll("section").forEach(section => {
    if (section.getBoundingClientRect().top < window.innerHeight - 100) {
      section.style.opacity = "1";
      section.style.transform = "translateY(0)";
    }
  });
});
</script>


<script>
document.querySelectorAll(".coffee-btn").forEach(btn => {
  btn.addEventListener("click", function() {

    const type = this.dataset.type;

    const coffee = document.getElementById("coffeeLayer");
    const milk = document.getElementById("milkLayer");
    const sugar = document.getElementById("sugarLayer");
    const steam = document.querySelector(".steam");

    
    coffee.style.height = "0%";
    milk.style.height = "0%";
    sugar.style.height = "0%";
    steam.style.opacity = "0";

    setTimeout(() => {
      coffee.style.height = "40%";
    }, 500);

    if(type === "latte" || type === "cappuccino") {
      setTimeout(() => {
        milk.style.height = "30%";
      }, 1800);
    }

    
    if(type === "cappuccino") {
      setTimeout(() => {
        sugar.style.height = "10%";
      }, 3000);
    }

  
    setTimeout(() => {
      steam.style.opacity = "1";
    }, 3500);

  });
});
</script>
@endsection