<?php $__env->startSection('title', 'Appointment - MediNest Bootstrap Template'); ?>
<?php $__env->startSection('body-class', 'appointment-page'); ?>

<?php $__env->startSection('content'); ?>
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
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
              <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/MediNest/laravel-implementation/resources/views/appointment.blade.php ENDPATH**/ ?>