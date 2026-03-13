@extends('layouts.mercedes')

@section('title', $product->name)

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
{{ $product->name }}.
</h1>

<p class="hero-sub">
The best prices in the Mercedes-Benz Store.
</p>

<p class="price">
Starting from ₹ {{ number_format($product->price) }}
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
Finance your {{ $product->name }}.
</h2>

</div>

</section>



<section class="car-section">

<div class="container">

<div class="row shadow-lg">

<div class="col-md-5 car-info p-5">

{{-- Product Images --}}

@if($product->images->count() > 0)

@foreach($product->images as $img)

<img src="{{ asset('product_images/'.$img->name) }}"
class="img-fluid mb-3">

@endforeach

@else

<img src="{{ asset('uploads/car.png') }}"
class="img-fluid mb-4">

@endif


<h2 class="mb-4">{{ $product->name }}</h2>

<p class="mb-2">⚡ 120 kW</p>

<p class="mb-4">⛽ Super &nbsp;&nbsp; ⚙ Automatic</p>

<div class="price-box p-3 mb-4">

<small>Car Price</small>

<h4 class="mt-2">
₹ {{ number_format($product->price) }}
</h4>

</div>

<hr class="my-4">

<div class="text-center">

<a href="/" class="change-model">
Change model
</a>

</div>

</div>


<div class="col-md-7 bg-light">

<p class="p-4">
{{ $product->description }}
</p>

</div>

</div>

</div>

</section>



<section class="brochure-section">

<div class="container">

<h2 class="brochure-title">
Download the eBrochure of the {{ $product->name }} here.
</h2>

<div class="brochure-cards">

<div class="brochure-card">

<div class="brochure-icon">📄</div>

<h4>eBrochure of {{ $product->name }}</h4>

<p>Download now.</p>

</div>


<div class="brochure-card">

<div class="brochure-icon">📋</div>

<h4>Check your eligibility</h4>

<p>Click here.</p>

</div>

</div>

</div>

</section>

@endsection