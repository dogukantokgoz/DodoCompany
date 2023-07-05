@extends('front.layouts.master')
@section('content')
<!-- ======= Heroes Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <h1>{{$heroes->title}}</h1>
                <h2>{{$heroes->content}}</h2>
                <a href="{{$heroes->video}}" target="_blank" class="glightbox play-btn mb-4"></a>
            </div>
        </div>
    </div>
</section>

<!-- End Heroes -->
<main id="main">
            @include('front.pages.about')
            @include('front.pages.services')
            @include('front.pages.portfolio')
            @include('front.pages.pricing')
            @include('front.pages.faq')
            @include('front.pages.contact')
</main><!-- End #main -->
@endsection
