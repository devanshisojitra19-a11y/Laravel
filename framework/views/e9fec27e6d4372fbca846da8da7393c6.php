<?php $__env->startSection('title', 'Terms of Service - MediNest Bootstrap Template'); ?>
<?php $__env->startSection('body-class', 'terms-page'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Terms of Service</h1>
              <p class="mb-0">Please read our terms and conditions carefully.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="current">Terms</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Terms Section -->
    <section id="terms" class="terms section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Terms and Conditions</h2>
            <p>Last updated: [Date]</p>
            <h3>1. Acceptance of Terms</h3>
            <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>
            <h3>2. Medical Disclaimer</h3>
            <p>The information provided on this website is for general informational purposes only and should not be considered as medical advice.</p>
            <h3>3. Privacy Policy</h3>
            <p>Your privacy is important to us. Please review our Privacy Policy, which also governs your use of the website.</p>
          </div>
        </div>
      </div>
    </section><!-- /Terms Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL I7\Documents\laravel-implementation\resources\views/terms.blade.php ENDPATH**/ ?>