<!DOCTYPE html>
<html lang="en"></html>
  @include('layouts.header')

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
          <div class="container">
            <h2>Legacy Reunited: NHS Alumni Day</h2>
            <p>The Nyandarua High School Alumni Event brings together former students for a meaningful day of connection, reflection, and inspiration. As we revisit the grounds that shaped our journey, we reconnect with old friends and teachers, share valuable life experiences with current students, and celebrate the legacy of NHS. This event is not only about looking back but also about building bridges to the future—fostering unity, mentorship, and a strong, supportive alumni community.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
        <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
          <div class="container">
            <h2>Legacy Reunited: NHS Alumni Day</h2>
            <p>The Nyahururu High School Alumni Event brings together former students for a meaningful day of connection, reflection, and inspiration. As we revisit the grounds that shaped our journey, we reconnect with old friends and teachers, share valuable life experiences with current students, and celebrate the legacy of NHS. This event is not only about looking back but also about building bridges to the future—fostering unity, mentorship, and a strong, supportive alumni community.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
        <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
          <div class="container">
           <h2>Legacy Reunited: NHS Alumni Day</h2>
            <p>The Nyahururu High School Alumni Event brings together former students for a meaningful day of connection, reflection, and inspiration. As we revisit the grounds that shaped our journey, we reconnect with old friends and teachers, share valuable life experiences with current students, and celebrate the legacy of NHS. This event is not only about looking back but also about building bridges to the future—fostering unity, mentorship, and a strong, supportive alumni community.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
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

    

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Wanna Contact Us?</h3>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="#appointment">Contact Us Now</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

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
            <a href="#register" class="btn btn-primary btn-sm default-back-color p-2">Register Now</a>
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
            <a href="#register" class="btn btn-primary btn-sm default-back-color p-2">Register Now</a>
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
            <a href="#register" class="btn btn-primary btn-sm default-back-color p-2">Register Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
    
    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fas fa-user flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                <p>Alumni</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fas fa-list flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Events</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fas fa-money-check-dollar flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                <p>Contributions</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fas fa-users flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p>Founders</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

 
    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

          <!-- Testimonial 1 -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Nyandarua High instilled in me the values of discipline and purpose. To this day, I carry those lessons into my leadership role.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="{{ asset('https://marvel-b1-cdn.bc0a.com/f00000000297652/eloncdn.blob.core.windows.net/eu3/sites/793/2018/05/avatar-1577909_640.png') }}" class="testimonial-img" alt="Alumni Image">
              <h3>Saul Mwangi</h3>
              <h4>CEO & Alumni Class of 2006</h4>
            </div>
          </div>

          <!-- Testimonial 2 -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Being part of this school shaped my confidence and career path. I owe much of my journey to the community here.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="{{ asset('https://marvel-b1-cdn.bc0a.com/f00000000297652/eloncdn.blob.core.windows.net/eu3/sites/793/2018/05/avatar-1577909_640.png') }}" class="testimonial-img" alt="Alumni Image">
              <h3>Sara Wanjiru</h3>
              <h4>UX Designer & Class of 2011</h4>
            </div>
          </div>

          <!-- Testimonial 3 -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>The friendships I made at Nyandarua have lasted a lifetime. It's more than a school — it's a family.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="{{ asset('https://marvel-b1-cdn.bc0a.com/f00000000297652/eloncdn.blob.core.windows.net/eu3/sites/793/2018/05/avatar-1577909_640.png') }}" class="testimonial-img" alt="Alumni Image">
              <h3>Jena Kariuki</h3>
              <h4>Store Owner & Class of 2013</h4>
            </div>
          </div>

          <!-- Testimonial 4 -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>I always look forward to alumni events. Reconnecting and giving back is the least I can do for a school that gave me so much.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img src="{{ asset('https://marvel-b1-cdn.bc0a.com/f00000000297652/eloncdn.blob.core.windows.net/eu3/sites/793/2018/05/avatar-1577909_640.png') }}" class="testimonial-img" alt="Alumni Image">
              <h3>Matt Njuguna</h3>
              <h4>Freelancer & Class of 2009</h4>
            </div>
          </div>

          <!-- Testimonial 5 -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Every time I walk through those gates, I'm reminded of where it all began. This school laid the foundation for my success.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
              <img width="100" height="100" src="{{ asset('https://marvel-b1-cdn.bc0a.com/f00000000297652/eloncdn.blob.core.windows.net/eu3/sites/793/2018/05/avatar-1577909_640.png') }}" class="testimonial-img" alt="Alumni Image">
              <h3>John Mwangi</h3>
              <h4>Entrepreneur & Class of 2004</h4>
            </div>
          </div>

        </div>



         <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

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

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Articles</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-3">
        <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <img class="img-fluid" src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
              <div class="default-back-color mt-2 text-light col-md-6">
               <p class="text-start text-light">23rd Dec 2024</p>
               
              </div>
              <div class="text-start">
                <p><h5>Annual General Meeting - AGM Minutes</h5></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy col-md-12">Read More</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <img class="img-fluid" src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
              <div class="default-back-color mt-2 text-light col-md-6">
               <p class="text-start text-light">23rd Dec 2024</p>
               
              </div>
              <div class="text-start">
                <p><h5>Annual General Meeting - AGM Minutes</h5></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy col-md-12">Read More</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <img class="img-fluid" src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
              <div class="default-back-color mt-2 text-light col-md-6">
               <p class="text-start text-light">23rd Dec 2024</p>
               
              </div>
              <div class="text-start">
                <p><h5>Annual General Meeting - AGM Minutes</h5></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy col-md-12">Read More</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

         <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <img class="img-fluid" src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
              <div class="default-back-color mt-2 text-light col-md-6">
               <p class="text-start text-light">23rd Dec 2024</p>
               
              </div>
              <div class="text-start">
                <p><h5>Annual General Meeting - AGM Minutes</h5></p>
              </div>
              <div class="btn-wrap">
                <a href="#" class="btn-buy col-md-12">Read More</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Where Are They Now?</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item">
                <h3>John Doe  – Software Engineer @ Google</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>John Doe  -Policy Analyst @ UN</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>John Doe -Entrepreneur @ GreenAgriTech</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>John Doe -Data Analyst @ Microsoft</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>John Doe -AI and ML @ OpenAI</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>John Doe - Data Scientis @ Oracle</h3>
                <div class="faq-content">
                  <p>An accomplished professional who continues to uphold the values of our institution by driving innovation, fostering positive change, and making a meaningful impact within their community and beyond.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

   

  </main>

  @include('layouts.footer')

  </body>

</html>