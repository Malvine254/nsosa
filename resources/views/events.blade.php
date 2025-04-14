<!DOCTYPE html>
<html lang="en"></html>

@include('layouts.header')
<!-- Hero Section -->
<section id="hero" class="hero section">
  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" class="d-block w-100" alt="">
      <div class="carousel-caption top-caption d-none d-md-block">
        <h2 class="text-light">Moments That Matter</h2>
        <p>Explore treasured memories, milestones, and everyday moments that tell the story of Nyandarua High School’s vibrant legacy.</p>

      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="d-block w-100" alt="">
      <div class="carousel-caption top-caption d-none d-md-block">
        <h2 class="text-light">Our Story. Our Strength.</h2>
        <p>From classrooms to global impact — a legacy built on excellence, resilience, and shared experiences that live on through our alumni.</p>

      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="d-block w-100" alt="">
      <div class="carousel-caption top-caption d-none d-md-block">
        <h2 class="text-light">Stronger Together</h2>
        <p>Celebrating the bond that goes beyond graduation — where friendships flourish, values endure, and purpose unites us across generations.</p>

      </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </div>
</section><!-- /Hero Section -->

 <!-- Upcoming Events Section -->
<section id="events" class="section py-5">
  <div class="container section-title" data-aos="fade-up">
    <h2>Upcoming Events</h2>
    <p>Stay connected and be part of our upcoming alumni gatherings, mentorship forums, and celebrations.</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Event 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="card-img-top" alt="Alumni Reunion">
          <div class="card-body">
            <h5 class="card-title">Alumni Homecoming Reunion</h5>
            <p class="text-muted mb-1"><i class="bi bi-calendar-event me-1"></i> March 15, 2025</p>
            <p class="text-muted"><i class="bi bi-geo-alt me-1"></i> Nyandarua High School Grounds</p>
            <p class="card-text">Reconnect with old friends, share memories, and celebrate the Nyandarua spirit.</p>
            <a href="#register" class="btn btn-primary btn-sm default-back-color">Register Now</a>
          </div>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="card-img-top" alt="Mentorship Forum">
          <div class="card-body">
            <h5 class="card-title">Alumni Mentorship Forum</h5>
            <p class="text-muted mb-1"><i class="bi bi-calendar-event me-1"></i> April 6, 2025</p>
            <p class="text-muted"><i class="bi bi-geo-alt me-1"></i> School Hall, Nyandarua High</p>
            <p class="card-text">Inspire the next generation by sharing your journey and professional experience.</p>
            <a href="#register" class="btn btn-outline-primary btn-sm">Sign Up</a>
          </div>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="card-img-top" alt="Virtual Career Talk">
          <div class="card-body">
            <h5 class="card-title">Virtual Career Talk Series</h5>
            <p class="text-muted mb-1"><i class="bi bi-calendar-event me-1"></i> May 10, 2025</p>
            <p class="text-muted"><i class="bi bi-geo-alt me-1"></i> Online (Zoom)</p>
            <p class="card-text">Join alumni experts in tech, law, and health as they offer practical career insights.</p>
            <a href="#register" class="btn btn-success btn-sm">Join Webinar</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



@include('layouts.footer')

</body>

</html>
