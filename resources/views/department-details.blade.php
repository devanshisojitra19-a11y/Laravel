@extends('layouts.app')

@section('title', 'Department Details - MediNest Bootstrap Template')
@section('body-class', 'department-details-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Department Details</h1>
              <p class="mb-0">Learn more about our specialized medical departments and services.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('departments') }}">Departments</a></li>
            <li class="current">Department Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Department Details Section -->
    <section id="department-details" class="department-details section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-8">
            <h2>Cardiology Department</h2>
            <p>Our Cardiology Department provides comprehensive heart care services with state-of-the-art technology and experienced cardiologists.</p>
            <img src="{{ asset('assets/img/health/cardiology-2.webp') }}" alt="Cardiology Department" class="img-fluid mb-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-lg-4">
            <div class="department-info">
              <h4>Department Info</h4>
              <ul class="list-unstyled">
                <li><strong>Head of Department:</strong> Dr. John Smith</li>
                <li><strong>Location:</strong> 3rd Floor, Wing A</li>
                <li><strong>Phone:</strong> +1 (555) 123-4567</li>
                <li><strong>Email:</strong> cardiology@medinest.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Department Details Section -->
@endsection