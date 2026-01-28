@extends('layouts.app')

@section('title', 'Gallery - MediNest Bootstrap Template')
@section('body-class', 'gallery-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Gallery</h1>
              <p class="mb-0">Take a look at our modern facilities and medical equipment.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Gallery</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="{{ asset('assets/img/health/facilities-3.webp') }}" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="{{ asset('assets/img/health/facilities-6.webp') }}" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="{{ asset('assets/img/health/laboratory-3.webp') }}" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Gallery Section -->
@endsection