<?php $__env->startSection('title', 'FAQ - MediNest Bootstrap Template'); ?>
<?php $__env->startSection('body-class', 'faq-page'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Frequently Asked Questions</h1>
              <p class="mb-0">Find answers to common questions about our services and procedures.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <li class="current">FAQ</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- FAQ Section -->
    <section id="faq" class="faq section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What are your visiting hours?
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    Our visiting hours are from 9:00 AM to 8:00 PM daily. However, ICU visiting hours may be different.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    How do I book an appointment?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body">
                    You can book an appointment by calling us at +1 (555) 123-4567 or using our online booking system.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /FAQ Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/MediNest/laravel-implementation/resources/views/faq.blade.php ENDPATH**/ ?>