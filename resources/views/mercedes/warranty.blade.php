@extends('layouts.mercedes')

@section('title', 'Mobilo and Warranty')

@section('content')

<section class="benz-hero">
    <div class="benz-overlay"></div>

    <div class="benz-hero-content">
        <h1>Mobilo and Warranty</h1>
        <p>Stay on the move...Always</p>
    </div>
</section>
<br><br>

<section class="benz-intro-section">
    <div class="container">

        <p class="benz-intro-text">
            With our Mobilo service, get fast assistance anytime, anywhere. Whether it's a breakdown or any other issue,
            we'll have your Mercedes-Benz back on the road in no time. Enjoy up to 8 years of assistance options, 
            with 3 years included as standard and extendable at minimal cost.
        </p>

        <p class="benz-intro-text">
            All new Mercedes-Benz vehicles in India come with a three-year warranty. It complements the statutory liability 
            for material defects and gives you peace of mind for the first three years. The warranty is valid from the date 
            of initial registration, and does not have mileage limit. And with our Advance Assurance Extended Warranty Program,
            you can extend your star's warranty for up to 6 years.
        </p>
    </div>
</section>

<br><br>

<section class="benz-card-section">
    <div class="container">
        <div class="row g-4">

            
            <div class="col-lg-4">
                <div class="benz-card">
                    <img src="{{ asset('images/mobilo.avif') }}" alt="Mobilo">
                    <div class="benz-card-body">
                        <h5>Mobilo</h5>
                        <p>Support.Any time, any place and any situation.</p>

                        <a href="#" class="benz-btn">Learn more</a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4">
                <div class="benz-card">
                    <img src="{{ asset('images/warranty.avif') }}" alt="Warranty">
                    <div class="benz-card-body">
                        <h5>Warranty</h5>
                        <p>Dependable warranty for reliable automobiles.</p>

                        <a href="#" class="benz-btn">Learn more</a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4">
                <div class="benz-card position-relative">
                    <img src="{{ asset('images/eq-warranty.avif') }}" alt="EQ Warranty">

                    <div class="arrow-circle">
                        →
                    </div>

                    <div class="benz-card-body">
                        <h5>EQ Warranty Terms and Conditions</h5>
                        <p>Warranty terms and conditions for your Mercedes-Benz EVs.</p>

                        <a href="#" class="benz-btn">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection