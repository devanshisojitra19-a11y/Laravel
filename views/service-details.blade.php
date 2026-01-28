@extends('layouts.app')

@section('title', 'Service Details - MediNest Bootstrap Template')
@section('body-class', 'service-details-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Service Details</h1>
              <p class="mb-0">Detailed information about our medical services and treatments.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li class="current">Service Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h2>Cardiology Services</h2>
            <p>Our comprehensive cardiology services include advanced diagnostics, treatment, and rehabilitation programs.</p>
            <img src="{{ asset('assets/img/health/cardiology-2.webp') }}" alt="Cardiology Services" class="img-fluid mb-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-4">
            <div class="service-info">
              <h4>Service Info</h4>
              <ul class="list-unstyled">
                <li><strong>Duration:</strong> 30-60 minutes</li>
                <li><strong>Preparation:</strong> Fasting required</li>
                <li><strong>Recovery:</strong> Same day</li>
                <li><strong>Follow-up:</strong> 1 week</li>
              </ul>
              <a href="{{ route('appointment') }}" class="btn btn-primary">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Service Details Section -->
@endsection