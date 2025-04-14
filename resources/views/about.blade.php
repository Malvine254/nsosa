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
        <h2 class="text-light">From Vision to Reality</h2>
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

<!-- core values Section -->
<!-- Core Values Section -->
<section id="featured-services" class="featured-services section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Core Values</h2>
    <p>Guided by purpose and united by experience, these values continue to shape the lives and impact of our alumni around the world.</p>
  </div>

  <div class="container">
    <div class="row gy-4">

      <!-- Value 1 -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-users icon"></i></div>
          <h4><a href="#" class="stretched-link">Community</a></h4>
          <p>We foster lifelong bonds, support networks, and shared purpose that extend far beyond campus.</p>
        </div>
      </div>

      <!-- Value 2 -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-lightbulb icon"></i></div>
          <h4><a href="#" class="stretched-link">Innovation</a></h4>
          <p>Our alumni challenge norms and pioneer solutions, driving change in every sector they touch.</p>
        </div>
      </div>

      <!-- Value 3 -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-handshake icon"></i></div>
          <h4><a href="#" class="stretched-link">Collaboration</a></h4>
          <p>We believe in the strength of unity—supporting each other to achieve shared goals and create impact.</p>
        </div>
      </div>

      <!-- Value 4 -->
      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="fas fa-globe icon"></i></div>
          <h4><a href="#" class="stretched-link">Global Impact</a></h4>
          <p>Our values inspire action that transcends borders, fueling a global movement of changemakers.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- core values Section -->
 
<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Who We Are</h2>
    <p>Rooted in excellence, united by tradition — shaping lives beyond the classroom since day one.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
    
      <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid" alt="Nyandarua High School">
        <a href="https://www.youtube.com/shorts/LJQFCstLgYw" class="glightbox pulsating-play-btn"></a>
      </div>

      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
        <h3>More Than a School — A Foundation for Life</h3>
        <p class="fst-italic">
          Nyandarua High School has nurtured generations of learners, leaders, and changemakers who continue to make a difference in Kenya and around the world.
        </p>
        <ul>
          <li><i class="bi bi-check2-all"></i> 
            <span>
              A legacy of academic excellence, integrity, and discipline — Nyandarua High School has consistently fostered an environment where performance is not only encouraged, but expected. Our students go on to become top scholars, respected professionals, and ethical leaders across Kenya and beyond.
            </span>
          </li>

          <li><i class="bi bi-check2-all"></i> 
            <span>
              Empowering students to grow intellectually, socially, and morally — we shape well-rounded individuals through strong academic programs, co-curricular activities, leadership development, and a values-based culture that stays with them for life.
            </span>
          </li>

          <li><i class="bi bi-check2-all"></i> 
            <span>
              Home to a vibrant alumni community committed to mentorship, service, and giving back — our alumni play an active role in shaping future generations through school mentorship programs, career guidance, scholarships, and community outreach initiatives.
            </span>
          </li>

          <li><i class="bi bi-check2-all"></i> 
            <span>
              A culture of unity and belonging — whether on campus or decades after graduation, Nyandarua High School fosters lifelong friendships and a deep sense of identity and pride among its students and alumni.
            </span>
          </li>
        </ul>

        <p>
          From the scenic hills of Nyandarua County to the halls of universities and boardrooms across the globe, our story is one of resilience, values, and shared identity. We are not just graduates — we are a family bound by shared experiences and a commitment to building a better future.
        </p>
      </div>

    </div>
  </div>

</section><!-- /About Section -->


@include('layouts.footer')

</body>

</html>