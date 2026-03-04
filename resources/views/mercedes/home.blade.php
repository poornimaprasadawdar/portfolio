@extends('layouts.mercedes')

@section('title', 'Mercedes-Benz')

@section('content')

<section class="hero"
    style="background: url('{{ asset('images/image1.jpg') }}') no-repeat center center / cover;">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>Ownership is<br>Effortless!</h1>
        <p>Discover our wide range of financing products.</p>
        <button class="btn btn-outline-light mt-3">
            Request a call back
        </button>
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


<section class="financing-section py-5">
    <div class="container">
        <div class="mb-5">
            <p class="text-muted small">Financing Products</p>
            <h1 class="financing-title mb-3">
                Discover our financing products
            </h1>
            <p class="text-muted">
                Discover our wide range of financing options with all-in-one EMI inclusive
                of maintenance and extended warranty.
                <br>
                With us you will certainly find the offer that best suits your life situation.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="finance-card">
                    <img src="{{ asset('images/person1.avif') }}"
                         class="img-fluid"
                         alt="Standard financing">
                    <div class="finance-content p-4">
                        <h5 class="mb-3">Standard financing</h5>
                        <p class="finance-text">
                            The classic among financing. A variable down payment,
                            a fixed interest rate and the term result in a constant rate.
                            The result: transparent and predictable financing over the entire purchase price.
                        </p>
                        <button class="btn btn-outline-secondary">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="finance-card">
                    <img src="{{ asset('images/person2.jpg') }}"
                         class="img-fluid"
                         alt="STAR Agility+">
                    <div class="finance-content p-4">
                        <h5 class="mb-3">STAR Agility+</h5>
                        <p class="finance-text">
                            Wouldn't you like to keep all options open?
                            With STAR Agility+, you can decide at the end of the contract
                            period whether you want to buy the vehicle at the residual value,
                            continue to finance it or return it.
                        </p>
                        <button class="btn btn-outline-secondary">
                            Contact Us
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="action-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="action-card text-center p-5">
                    <div class="action-icon mb-3">
                        📄
                    </div>
                    <h5 class="mb-2">e-Brochure for STAR Agility+</h5>
                    <p class="text-muted mb-0">Download now</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="action-card text-center p-5">
                    <div class="action-icon mb-3">
                        💬
                    </div>
                    <h5 class="mb-0">Chat live with us on WhatsApp</h5>
                     <br>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="star-finance-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('images/person3.jpg') }}"
                     class="img-fluid"
                     alt="STAR Finance">
            </div>
            <div class="col-md-6">
                <h1 class="star-title mb-4">STAR Finance</h1>
                <p class="star-text">
                    Every Mercedes-Benz customer is different, so our finance is as flexible
                    as you need it to be to suit your requirements. STAR Finance provides
                    you advanced funds to purchase the STAR of your choice.
                    You simply take ownership at the time of purchase and repay fixed
                    monthly instalments to Mercedes-Benz Financial Services over the agreed terms.
                </p>
                <p class="star-text mt-4">
                    <strong>Benefits of STAR Finance:</strong>
                </p>
                <ol class="star-list">
                    <li>Flexible contract terms ranging from 12 to 72 months.</li>
                    <li>Ownership of the vehicle from the start of the contract term.</li>
                    <li>Fixed interest rate so you always know your repayments.</li>
                </ol>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="star-agility-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h1 class="agility-title mb-4">STAR Agility+</h1>
                <p class="agility-text">
                    Put yourself in control of your Mercedes-Benz experience with STAR Agility+, 
                    and free yourself from confinement tomorrow.
                </p>
                <p class="agility-text mt-3">
                    Design your STAR Agility+ finance contract to suit your needs in two easy steps:
                </p>
                <ol class="agility-list mt-3">
                    <li>
                        <strong>Confidence to begin:</strong>
                        Choose the Mercedes-Benz Car of your dream, select your loan term from 12–60 months,
                        and the annual kilometer allowance, based on the estimated kilometers you expect
                        to drive per year.
                    </li>

                    <li class="mt-3">
                        <strong>Freedom to the end:</strong>
                        As your needs change, our flexible end of contract options allows you
                        to choose the option to suit your needs:
                    </li>
                </ol>
                <div class="agility-options mt-4">
                    <p><strong>Upgrade:</strong> By choosing to upgrade, this gives you the ability
                        to upgrade your current vehicle for a new one, and always have the latest
                        in technology, safety and efficiency.</p>

                    <p><strong>Keep:</strong> By choosing to keep your vehicle, you have the flexibility
                        to refinance or payout your Guaranteed Future Value*.</p>

                    <p><strong>Return:</strong> By choosing to return your vehicle, simply hand back
                        the vehicle and walk away, subject to meeting the Fair Wear and Tear conditions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="finance-video-section">
    <div class="video-wrapper">
        <img src="{{ asset('images/videobg.png') }}" 
             class="video-bg" 
             alt="Finance Video">
        <div class="video-overlay"></div>
        <div class="video-content text-center">
            <button class="play-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
                ▶
            </button>
        </div>
    </div>
</section>

<div class="modal fade" id="videoModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HEwK3DUOmlA?si=ffOWVodt9u6q6BPa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="own-star-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="own-star-title mb-4">Own your Star</h1>
                <a href="#" class="emi-btn">
                    Calculate your EMI
                </a>
            </div>
        </div>
    </div>
</section>

<section class="vehicle-finance-section py-5">
    <div class="container">
        <div id="carFinanceCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">

                       
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide1.avif') }}" alt="A-Class">
                                <div class="car-card-body">
                                    <h4>A-Class</h4>
                                    <p class="price">Starting from 45,95,000/-</p>
                                    <ul>
                                        <li>EMI starting from INR 50,696 with Down Payment of 13 Lakhs</li>
                                        <li>Service Package & Extended Warranty for 4 years</li>
                                    </ul>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide2.jpg') }}" alt="C-Class">
                                <div class="car-card-body">
                                    <h4>C-Class</h4>
                                    <p class="price">Starting from 59,90,000/-</p>
                                    <ul>
                                        <li>ROI starting from 6.99%</li>
                                        <li>EMI starting from INR 50,927 with Down Payment of 15 Lakhs</li>
                                    </ul>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide3.webp') }}" alt="E-Class">
                                <div class="car-card-body">
                                    <h4>E-Class LWB</h4>
                                    <p class="price">Starting from 82,00,000/-</p>
                                    <ul>
                                        <li>Get Flexible Plans</li>
                                        <li>EMI starting from INR 80,318</li>
                                        <li>Assured Buy Back Value up to 67%</li>
                                    </ul>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

               
                <div class="carousel-item active">
                    <div class="row g-4">

                        
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide4.avif') }}" alt="A-Class">
                                <div class="car-card-body">
                                    <h4>A-Class</h4>
                                    <p class="price">Starting from 45,95,000/-</p>
                                    <ul>
                                        <li>EMI starting from INR 50,696 with Down Payment of 13 Lakhs</li>
                                        <li>Service Package & Extended Warranty for 4 years</li>
                                    </ul>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                       
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide5.avif') }}" alt="C-Class">
                                <div class="car-card-body">
                                    <h4>C-Class</h4>
                                    <p class="price">Starting from 59,90,000/-</p>
                                    <ul>
                                        <li>ROI starting from 6.99%</li>
                                        <li>EMI starting from INR 50,927 with Down Payment of 15 Lakhs</li>
                                    </ul>
                                    <br>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                       
                        <div class="col-lg-4">
                            <div class="car-card">
                                <img src="{{ asset('images/slide6.avif') }}" alt="E-Class">
                                <div class="car-card-body">
                                    <h4>E-Class LWB</h4>
                                    <p class="price">Starting from 82,00,000/-</p>
                                    <ul>
                                        <li>Get Flexible Plans</li>
                                        <li>EMI starting from INR 80,318</li>
                                        <li>Assured Buy Back Value up to 67%</li>
                                    </ul>
                                    <br>
                                    <a href="#" class="own-car-btn">Own a S-Class</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

           
            <button class="carousel-control-prev" type="button" data-bs-target="#carFinanceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carFinanceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

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