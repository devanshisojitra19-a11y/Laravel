@extends('layouts.app')

@section('title', 'Testimonials - MediNest Bootstrap Template')
@section('body-class', 'testimonials-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Testimonials</h1>
              <p class="mb-0">What our patients say about their experience with MediNest.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Testimonials</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <p>"Excellent care and professional staff. I highly recommend MediNest for all your healthcare needs."</p>
              </div>
              <div class="testimonial-author">
                <img src="{{ asset('assets/img/health/staff-1.webp') }}" alt="Patient" class="testimonial-img">
                <div class="author-info">
                  <h4>John Doe</h4>
                  <span>Patient</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <p>"The doctors and nurses were amazing. They took great care of me during my stay."</p>
              </div>
              <div class="testimonial-author">
                <img src="{{ asset('assets/img/health/staff-2.webp') }}" alt="Patient" class="testimonial-img">
                <div class="author-info">
                  <h4>Jane Smith</h4>
                  <span>Patient</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->
@endsection