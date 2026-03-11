@extends('layouts.mercedes')

@section('title','A-Class Finance')

@section('content')

<div class="sub-nav">
    <div class="container">
        <a href="#">Overview</a>
        <a href="#" class="active">Finance</a>
    </div>
</div>

<section class="finance-hero">

    <div class="hero-overlay">

        <div class="container hero-content">

            <h1>
                Flexible and <br>
                Convenient <br>
                ownership plans for <br>
                A-Class Limousine.
            </h1>

            <p class="hero-sub">
                The best prices in the Mercedes-Benz Store.
            </p>

            <p class="price">
                Starting from ₹ 44,45,000.00
            </p>

            <div class="hero-buttons">
                <a href="#" class="btn btn-outline-light">
                    Request a callback
                </a>

                <a href="#" class="btn btn-primary">
                    Find Available Cars
                </a>
            </div>

        </div>

    </div>

</section>

<section class="finance-section">

<div class="container">

    <p class="small-text">Instalment calculator</p>

    <h2 class="finance-title">
        Finance your A-Class Saloon.
    </h2>

</div>

</section>

<section class="car-section">
    <div class="container">
        <div class="row shadow-lg">
            <div class="col-md-5 car-info p-5">
                <img src="{{ asset('images/carimage.avif') }}"
                     class="img-fluid mb-4"
                     alt="A200">
                <h2 class="mb-4">A 200</h2>
                <p class="mb-2">⚡ 120 kW</p>
                <p class="mb-4">⛽ Super &nbsp;&nbsp; ⚙ Automatic</p>
                <div class="price-box p-3 mb-4">
                    <small>Car Price</small>
                    <h4 class="mt-2">₹ 4,445,000.00</h4>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <a href="#" class="change-model">Change model</a>
                </div>
                 </div>
            <div class="col-md-7 bg-light">
            </div>
        </div>
    </div>
</section>

<section class="brochure-section">

<div class="container">

<h2 class="brochure-title">
Download the eBrochure of the A-Class Limousine here.
</h2>


<div class="brochure-cards">



<div class="brochure-card">

<div class="brochure-icon">
📄
</div>

<h4>eBrochure of the A-Class Limousine</h4>

<p>Download now.</p>

</div>



<div class="brochure-card">

<div class="brochure-icon">
📋
</div>

<h4>Check your eligibility</h4>

<p>Click here.</p>

</div>


</div>

</div>

</section>

<section class="finance-section">
    <div class="finance-container">

        <div class="finance-card">
            <img src="{{ asset('images/financing.avif') }}" alt="Financing">
            <h3>Financing</h3>
            <p>
                Many things can be paid off in instalments. What about your dream car?
                Of course, you can also finance the Mercedes-Maybach S-Class.
                Ask your Mercedes-Benz Franchise Partner for your personalised quote.
            </p>
            <a href="#" class="finance-btn">Check terms now</a>
        </div>

        <div class="finance-card">
            <img src="{{ asset('images/star.avif') }}" alt="Financing">
            <h3>STAR Agility+</h3>
            <p>
                Did you know you now have an assured buyback value for your dream car
                with an All in once EMI?
                Opt in for STAR Agility+ and have the option to Keep, Return or upgrade
                your dream star at the end of your tenure with up to 40% lower EMI.
            </p>
            <a href="#" class="finance-btn">Check EMI now</a>
        </div>

    </div>
</section>

<section class="service-section">

<div class="service-container">

    <div class="service-card">
        <div class="service-icon">🛒</div>
        <h3>Find Available Cars</h3>
        <p>Book online now.</p>
    </div>

    <div class="service-card">
        <div class="service-icon">🚗</div>
        <h3>Test drive</h3>
        <p>Arrange a test drive.</p>
    </div>

    <div class="service-card">
        <div class="service-icon">📄</div>
        <h3>All you need to know about the new A-Class Limousine.</h3>
        <p>Discover it now!</p>
    </div>

    <div class="service-card">
        <div class="service-icon">💶</div>
        <h3>Explore Offers</h3>
        <p>Enjoy limited-period ownership solutions with STAR Agility+</p>
    </div>

</div>

</section>

<footer class="main-footer">

    <div class="container">

        <div class="row footer-top">

            
            <div class="col-lg-2 col-md-4">
                <h6>Popular Models</h6>
                <ul>
                    <li>Electric Cars</li>
                    <li>SUV</li>
                    <li>Cabriolets & Roadsters</li>
                    <li>Coupé</li>
                    <li>Plug-in Hybrid</li>
                </ul>
            </div>

          
            <div class="col-lg-2 col-md-4">
                <h6>Buy a Vehicle</h6>
                <ul>
                    <li>Find a new car</li>
                    <li>Configure your car</li>
                    <li>All brochures</li>
                    <li>Model overview</li>
                    <li>Corporate Program</li>
                </ul>
            </div>

            
            <div class="col-lg-2 col-md-4">
                <h6>Shopping Guide</h6>
                <ul>
                    <li>Book a test drive</li>
                    <li>Nearest Showroom</li>
                    <li>Finance</li>
                    <li>Mercedes-Benz Collection</li>
                </ul>
            </div>

            
            <div class="col-lg-2 col-md-4">
                <h6>Owners</h6>
                <ul>
                    <li>Book a service appointment</li>
                    <li>Owner's Manuals</li>
                    <li>Service warranty terms and conditions</li>
                    <li>Grievance Redressal Mechanism</li>
                    <li>FAQ</li>
                    <li>How-To Videos</li>
                </ul>
            </div>

          
            <div class="col-lg-2 col-md-4">
                <h6>Technology</h6>
                <ul>
                    <li>Electric mobility</li>
                    <li>About Mercedes me</li>
                    <li>Connect services</li>
                    <li>MB.CHARGE Public</li>
                </ul>
            </div>

        
            <div class="col-lg-2 col-md-4">
                <h6>Discover Mercedes</h6>
                <ul>
                    <li>Contact</li>
                    <li>Secretarial Compliance Disclosure</li>
                    <li>Press Release</li>
                    <li>Careers</li>
                    <li>Privacy</li>
                    <li>Fair Practice Code</li>
                    <li>Corporate Governance Policy (MBFS)</li>
                    <li>Ombudsman Scheme for NBFS</li>
                </ul>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">

            <div class="footer-left">
                <p>
                    © 2026. Mercedes-Benz India Pvt. Ltd. All Rights Reserved (provider)
                    &nbsp;&nbsp; Cookies &nbsp;&nbsp; Data Protection
                </p>
                <p class="small-links">
                    Legal notices &nbsp;&nbsp; Caution - Fraudulent Job Offerings
                </p>
            </div>

            <div class="footer-social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-x-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>

        </div>

    </div>

</footer>
@endsection
