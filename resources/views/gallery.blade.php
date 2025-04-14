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
        <h2 class="text-light">Gallery</h2>
        <p>Discover how our global alumni community is shaping the future with purpose, integrity, and innovation.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="d-block w-100" alt="">
      <div class="carousel-caption top-caption d-none d-md-block">
        <h2 class="text-light">Our Story. Our Legacy.</h2>
        <p>Rooted in excellence, driven by values — learn how our journey continues through the impact of our alumni.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="d-block w-100" alt="">
      <div class="carousel-caption top-caption d-none d-md-block">
        <h2 class="text-light">Connected Beyond Campus</h2>
        <p>Building a lifelong network of changemakers, leaders, and collaborators across the world.</p>
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

 <!-- Gallery Section -->
 <section id="gallery" class="gallery section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Gallery</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper">
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "centeredSlides": true,
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 0
          },
          "768": {
            "slidesPerView": 3,
            "spaceBetween": 20
          },
          "1200": {
            "slidesPerView": 5,
            "spaceBetween": 20
          }
        }
      }
    </script>
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('iimg/hero-carousel/hero-carousel-1.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('iimg/hero-carousel/hero-carousel-3.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" class="img-fluid" alt=""></a></div>
      <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}"><img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid" alt=""></a></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- /Gallery Section -->


<!-- Alumni Spotlight Section -->
<section id="alumni-spotlight" class="gallery section bg-light">
  <div class="container section-title" data-aos="fade-up">
    <h2>Alumni Spotlight</h2>
    <p>Celebrating the accomplishments and stories of our proud alumni.</p>
  </div>
  <div class="container">
  <div class="row gy-4">

    <!-- Alumni 1 -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
    <div class="card p-3 h-100">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3" alt="Jane Mugo">
        <h5>Jane Mugo</h5>
        <p>Class of 2010 — Founder of STEM4Girls Kenya, empowering young women in tech.</p>
    </div>
    </div>

    <!-- Alumni 2 -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
    <div class="card p-3 h-100">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3" alt="Peter Njoroge">
        <h5>Peter Njoroge</h5>
        <p>Class of 2005 — Award-winning author and education advocate transforming rural schools.</p>
    </div>
    </div>

    <!-- Alumni 3 -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
    <div class="card p-3 h-100">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3" alt="Linda Wanjiku">
        <h5>Linda Wanjiku</h5>
        <p>Class of 2012 — Global health researcher at WHO, tackling public health challenges.</p>
    </div>
    </div>

    <!-- Alumni 4 -->
    <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
    <div class="card p-3 h-100">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3" alt="Brian Otieno">
        <h5>Brian Otieno</h5>
        <p>Class of 2011 — Tech entrepreneur and founder of EduConnect Africa, bridging digital gaps in education.</p>
    </div>
    </div>

    </div>


  </div>
</section><!-- /Alumni Spotlight Section -->

<!-- Video Highlights Section -->
<section id="videos" class="section gallery bg-light py-5">
  <div class="container section-title" data-aos="fade-up">
    <h2>Video Highlights</h2>
    <p>Relive the unforgettable moments — reunions, events, and stories that define the Nyandarua High School experience.</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Video 1 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/Y7f98aduVJ8" title="Alumni Reunion 2023" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Alumni Reunion 2023</h5>
            <p class="card-text">A celebration of unity, shared memories, and renewed connections among Nyandarua High School alumni.</p>
          </div>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/R5X7HKQ34Zo" title="Cultural Day Highlights" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">Cultural Day Highlights</h5>
            <p class="card-text">A vibrant display of talent, culture, and creativity from current students and alumni presenters.</p>
          </div>
        </div>
      </div>

      <!-- Video 3 -->
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card shadow-sm h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/nmC9iF6JZ0g" title="A Message from Our Alumni" allowfullscreen></iframe>
          </div>
          <div class="card-body">
            <h5 class="card-title">A Message from Our Alumni</h5>
            <p class="card-text">Hear inspiring reflections from former students who are making a difference around the world.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



@include('layouts.footer')

</body>

</html>