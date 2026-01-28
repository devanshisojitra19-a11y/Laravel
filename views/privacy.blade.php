@extends('layouts.app')

@section('title', 'Privacy Policy - MediNest Bootstrap Template')
@section('body-class', 'privacy-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Privacy Policy</h1>
              <p class="mb-0">Learn how we protect and handle your personal information.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Privacy</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Privacy Section -->
    <section id="privacy" class="privacy section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Privacy Policy</h2>
            <p>Last updated: [Date]</p>
            <h3>1. Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make an appointment, or contact us.</p>
            <h3>2. How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services and communicate with you.</p>
            <h3>3. Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent.</p>
            <h3>4. Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
          </div>
        </div>
      </div>
    </section><!-- /Privacy Section -->
@endsection