<!DOCTYPE html>
<html lang="en"></html>

@include('layouts.header')

</section><!-- /Hero Section -->

 <!-- Articles Section -->
<section id="articles" class="section py-5">
  <div class="container">
    <div class="row">

      <!-- Sidebar: Article List -->
      <div class="col-md-4 mb-4">
        <div class="list-group" id="articleList" role="tablist">
          <a class="list-group-item list-group-item-action active" id="article1-tab" data-bs-toggle="list" href="#article1" role="tab">Why Alumni Networks Matter</a>
          <a class="list-group-item list-group-item-action" id="article2-tab" data-bs-toggle="list" href="#article2" role="tab">Nyandarua High Through the Years</a>
          <a class="list-group-item list-group-item-action" id="article3-tab" data-bs-toggle="list" href="#article3" role="tab">Giving Back: Impact Stories</a>
          <a class="list-group-item list-group-item-action" id="article4-tab" data-bs-toggle="list" href="#article4" role="tab">Career Talks and Future Paths</a>
          <a class="list-group-item list-group-item-action" id="article5-tab" data-bs-toggle="list" href="#article5" role="tab">Student Achievements and Awards</a>
        </div>
      </div>

      <!-- Content Display -->
      <div class="col-md-8">
        <div class="tab-content" id="articleContent">

          <!-- Article 1 -->
          <div class="tab-pane fade show active" id="article1" role="tabpanel">
           <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Preview">
           <p class="text-muted mb-1"><small>Posted on March 10, 2025 by <strong>Admin</strong></small></p>
            <h4>Why Alumni Networks Matter</h4>
            <p>Alumni communities play a crucial role in mentorship, opportunity creation, and preserving a shared legacy. At Nyandarua High, our alumni serve as mentors, donors, role models, and advocates of excellence.</p>
            <p>From professional networking to social impact, staying connected with your school has never been more meaningful.</p>
          </div>

          <!-- Article 2 -->
          <div class="tab-pane fade" id="article2" role="tabpanel">
          <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Preview">
          <p class="text-muted mb-1"><small>Posted on March 10, 2025 by <strong>Admin</strong></small></p>
            <h4>Nyandarua High Through the Years</h4>
            <p>Founded on values of discipline and academic excellence, Nyandarua High School has grown from a small rural school to a respected institution shaping future leaders across Kenya and beyond.</p>
            <p>Take a look at our milestones, achievements, and the legacy we continue to build.</p>
          </div>

          <!-- Article 3 -->
          <div class="tab-pane fade" id="article3" role="tabpanel">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Preview">
          <p class="text-muted mb-1"><small>Posted on March 10, 2025 by <strong>Admin</strong></small></p>
            <h4>Giving Back: Impact Stories</h4>
            <p>Our alumni don’t just remember — they return and give back. Read stories of former students who’ve contributed to scholarships, mentorship, and infrastructure that are transforming the lives of current learners.</p>
            <p>These inspiring efforts showcase the power of community and commitment to uplift the next generation.</p>
          </div>

          <!-- Article 4 -->
          <div class="tab-pane fade" id="article4" role="tabpanel">
          <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Preview">
          <p class="text-muted mb-1"><small>Posted on March 10, 2025 by <strong>Admin</strong></small></p>
            <h4>Career Talks and Future Paths</h4>
            <p>Alumni-hosted career sessions are helping current students navigate their academic and professional journeys. These talks inspire confidence and introduce real-world insights early on.</p>
            <p>Sessions feature speakers from various industries, including technology, healthcare, law, and entrepreneurship.</p>
          </div>

          <!-- Article 5 -->
          <div class="tab-pane fade" id="article5" role="tabpanel">
          <img src="{{ asset('img/hero-carousel/hero-carousel-3.jpg') }}" class="img-fluid mb-3 rounded" alt="Blog Preview">
          <p class="text-muted mb-1"><small>Posted on March 10, 2025 by <strong>Admin</strong></small></p>
            <h4>Student Achievements and Awards</h4>
            <p>From national science fairs to essay competitions and sports championships, Nyandarua High students continue to shine in every arena. Their stories inspire pride and set new benchmarks for excellence.</p>
            <p>This article highlights recent recognitions and the students behind them.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- /Articles Section -->



@include('layouts.footer')

</body>

</html>
