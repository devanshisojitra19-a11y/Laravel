<?php $__env->startSection('title', 'Gallery - MediNest Bootstrap Template'); ?>
<?php $__env->startSection('body-class', 'gallery-page'); ?>

<?php $__env->startSection('content'); ?>
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
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
              <img src="<?php echo e(asset('assets/img/health/facilities-3.webp')); ?>" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="<?php echo e(asset('assets/img/health/facilities-6.webp')); ?>" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="gallery-item">
              <img src="<?php echo e(asset('assets/img/health/laboratory-3.webp')); ?>" alt="Gallery Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Gallery Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL I7\Documents\laravel-implementation\resources\views/gallery.blade.php ENDPATH**/ ?>