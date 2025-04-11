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


    <!-- Featured Services Section -->
<section id="featured-services" class="featured-services section ">
       <div class="container section-title" data-aos="fade-up">
        <h2>Events<br></h2>
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

            <div class="swiper-slide">
              <div class="testimonial-item" "="">
            <p>
              <i class=" bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="{{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

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
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-1.jpg') }}"><img src="{{ asset('img/gallery/gallery-1.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-2.jpg') }}"><img src="{{ asset('img/gallery/gallery-2.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-3.jpg') }}"><img src="{{ asset('img/gallery/gallery-3.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-4.jpg') }}"><img src="{{ asset('img/gallery/gallery-4.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-5.jpg') }}"><img src="{{ asset('img/gallery/gallery-5.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-6.jpg') }}"><img src="{{ asset('img/gallery/gallery-6.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-7.jpg') }}"><img src="{{ asset('img/gallery/gallery-7.jpg') }}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="{{ asset('img/gallery/gallery-8.jpg') }}"><img src="{{ asset('img/gallery/gallery-8.jpg') }}" class="img-fluid" alt=""></a></div>
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
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
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