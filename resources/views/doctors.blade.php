@extends('layouts.app')

@section('title', 'Doctors - MediNest Bootstrap Template')
@section('body-class', 'doctors-page')

@section('content')
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Doctors</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Doctors</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Filterable Doctor Directory -->
        <div class="doctor-directory mb-5">
          <div class="directory-bar p-3 p-md-4 rounded-3">
            <div class="row g-3 align-items-center">
              <div class="col-lg-4">
                <label for="doctor-search" class="form-label mb-1">Search Doctors</label>
                <div class="position-relative">
                  <i class="bi bi-search search-icon"></i>
                  <input id="doctor-search" type="text" class="form-control search-input" placeholder="Type a name or keyword">
                </div>
              </div>
              <div class="col-lg-3">
                <label class="form-label mb-1">Department</label>
                <select class="form-select">
                  <option value="*">All Departments</option>
                  <option value=".filter-cardiology">Cardiology</option>
                  <option value=".filter-pediatrics">Pediatrics</option>
                  <option value=".filter-dermatology">Dermatology</option>
                  <option value=".filter-orthopedics">Orthopedics</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label class="form-label mb-1">Location</label>
                <select class="form-select">
                  <option>All Locations</option>
                  <option>Downtown Clinic</option>
                  <option>Westside Center</option>
                  <option>Riverside Campus</option>
                </select>
              </div>
              <div class="col-lg-2 d-grid">
                <button class="btn btn-appointment">Apply Filters</button>
              </div>
            </div>
          </div>

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="directory-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-cardiology">Cardiology</li>
              <li data-filter=".filter-pediatrics">Pediatrics</li>
              <li data-filter=".filter-dermatology">Dermatology</li>
              <li data-filter=".filter-orthopedics">Orthopedics</li>
            </ul><!-- End Directory Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-cardiology">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-3.webp') }}" class="img-fluid" alt="Dr. Amelia Brooks" loading="lazy">
                    <span class="tag">Senior Consultant</span>
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Amelia Brooks</h3>
                    <p class="doctor-title">Cardiologist • MD, FACC</p>
                    <p class="doctor-desc">Nostrud tempor magna minim excepteur, id cillum laboris aute proident.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Cardiology</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-pediatrics">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-7.webp') }}" class="img-fluid" alt="Dr. Noah Turner" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Noah Turner</h3>
                    <p class="doctor-title">Pediatrician • DO</p>
                    <p class="doctor-desc">Quis irure pariatur sed eiusmod, elit laboris consequat cupidatat.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Pediatrics</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-dermatology">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-12.webp') }}" class="img-fluid" alt="Dr. Sofia Bennett" loading="lazy">
                    <span class="tag alt">New</span>
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Sofia Bennett</h3>
                    <p class="doctor-title">Dermatologist • MBBS, MD</p>
                    <p class="doctor-desc">Dolor commodo laboris lorem ad, amet consequat mollit deserunt.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Dermatology</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-orthopedics">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-5.webp') }}" class="img-fluid" alt="Dr. Ethan Cole" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Ethan Cole</h3>
                    <p class="doctor-title">Orthopedic Surgeon • MS, FRCS</p>
                    <p class="doctor-desc">Velit laborum minim laboris, eiusmod elit irure in exercitation.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Orthopedics</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-cardiology">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-10.webp') }}" class="img-fluid" alt="Dr. Maya Patel" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Maya Patel</h3>
                    <p class="doctor-title">Interventional Cardiologist • MD</p>
                    <p class="doctor-desc">Cupidatat fugiat sint enim laboris, sed do ut aliquip dolor.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Cardiology</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-pediatrics">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-2.webp') }}" class="img-fluid" alt="Dr. Oliver Hayes" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Oliver Hayes</h3>
                    <p class="doctor-title">Pediatric Specialist • MD</p>
                    <p class="doctor-desc">Exercitation id ea nisi fugiat, ullamco veniam cillum nostrud.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Pediatrics</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-dermatology">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-9.webp') }}" class="img-fluid" alt="Dr. Harper Lane" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Harper Lane</h3>
                    <p class="doctor-title">Cosmetic Dermatologist • MD</p>
                    <p class="doctor-desc">Aliquip laboris anim minim, irure commodo qui occaecat velit.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Dermatology</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

              <div class="col-lg-3 col-md-6 doctor-item isotope-item filter-orthopedics">
                <article class="doctor-card h-100">
                  <figure class="doctor-media">
                    <img src="{{ asset('assets/img/health/staff-6.webp') }}" class="img-fluid" alt="Dr. Liam Carter" loading="lazy">
                  </figure>
                  <div class="doctor-content">
                    <h3 class="doctor-name">Dr. Liam Carter</h3>
                    <p class="doctor-title">Sports Medicine • MD</p>
                    <p class="doctor-desc">Deserunt pariatur eiusmod duis, officia aute laboris consectetur.</p>
                    <div class="doctor-meta">
                      <span class="badge dept">Orthopedics</span>
                    </div>
                    <div class="doctor-actions">
                      <a href="#" class="btn btn-sm btn-appointment">Book Appointment</a>
                      <a href="#" class="btn btn-sm btn-soft">View Profile</a>
                    </div>
                  </div>
                </article>
              </div><!-- End Directory Item -->

            </div><!-- End Directory Items Container -->
          </div>
        </div><!-- End Filterable Doctor Directory -->

      </div>

    </section><!-- /Doctors Section -->
@endsection