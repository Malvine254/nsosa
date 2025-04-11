
@include('layouts.header')
<!-- Hero Section -->
<section id="hero" class="hero section">
<div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="carousel-item active">
    <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
    
  </div><!-- End Carousel Item -->

  <div class="carousel-item">
  <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
    
  </div><!-- End Carousel Item -->

  <div class="carousel-item">
  <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
  
  </div><!-- End Carousel Item -->

  <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
  </a>

  <ol class="carousel-indicators"></ol>

</div>

</section><!-- /Hero Section -->
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section ">
       <div class="container section-title" data-aos="fade-up">
        <h2>Our Core Values<br></h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div>
      <div class="container ">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
              <h4><a href="" class="stretched-link">First Event</a></h4>
               <p>Feb 24th 2025</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <a href="#about" class="btn-get-started">Read More</a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="" class="stretched-link">Second Event</a></h4>
               <h6>Feb 24th 2025</h6>
               <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                <a class="cta-btn" href="#appointment">Register Now</a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-thermometer icon"></i></div>
              <h4><a href="" class="stretched-link">Third Event</a></h4>
               <p>Feb 24th 2025</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <a class="cta-btn" href="#appointment">Register Now</a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-dna icon"></i></div>
              <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
               <p>Feb 24th 2025</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                <a class="cta-btn" href="#appointment">Register Now</a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->
<!-- Features Section -->
 <section id="features" class="features section">

<div class="container">

  <div class="row justify-content-around gy-4">
    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="{{ asset('img/features.jpg') }}" alt=""></div>

    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
      <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
        <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
        <div>
          <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div><!-- End Icon Box -->

      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
        <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
        <div>
          <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div><!-- End Icon Box -->

      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
        <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
        <div>
          <h4><a href="" class="stretched-link">Dine Pad</a></h4>
          <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
        </div>
      </div><!-- End Icon Box -->

      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
        <i class="fa-solid fa-lungs flex-shrink-0"></i>
        <div>
          <h4><a href="" class="stretched-link">Tride clov</a></h4>
          <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
        </div>
      </div><!-- End Icon Box -->

    </div>
  </div>

</div>

</section><!-- /Features Section -->


<!-- About Section -->
<section id="about" class="about section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>About Us<br></h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">
    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
      <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
      <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
    </div>
    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
      <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
      <p class="fst-italic">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <ul>
        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
      </ul>
      <p>
        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
      </p>
    </div>
  </div>

</div>

</section><!-- /About Section -->

@include('layouts.footer')