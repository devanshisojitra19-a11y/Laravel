@extends('layouts.app')

@section('title', 'Appointment - MediNest Bootstrap Template')
@section('body-class', 'appointment-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Book Appointment</h1>
              <p class="mb-0">
                Schedule your appointment with our qualified healthcare professionals and get the care you deserve.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Appointment</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form action="#" method="post" class="appointment-form">
              @csrf
              <div class="row gy-3">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-6">
                  <input type="tel" class="form-control" name="phone" placeholder="Your Phone" required>
                </div>
                <div class="col-md-6">
                  <input type="date" class="form-control" name="date" required>
                </div>
                <div class="col-md-6">
                  <select class="form-select" name="department" required>
                    <option value="">Select Department</option>
                    <option value="cardiology">Cardiology</option>
                    <option value="neurology">Neurology</option>
                    <option value="orthopedics">Orthopedics</option>
                    <option value="pediatrics">Pediatrics</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <select class="form-select" name="doctor" required>
                    <option value="">Select Doctor</option>
                    <option value="dr-smith">Dr. Smith</option>
                    <option value="dr-johnson">Dr. Johnson</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Book Appointment</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- /Appointment Section -->
@endsection