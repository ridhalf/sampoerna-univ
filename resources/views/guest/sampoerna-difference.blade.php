@extends('guest.main')
@section('content')
<div class="container difference">
    <div class="difference-bg">
      <div class="box-img">
        <img
          src="assets/img/pages/sampoerna-difference/bg/difference-bg.webp"
          alt=""
        />
      </div>
      <div class="box-title">
        <h3 class="title">The Sampoerna Advantage</h3>
        <p class="decs">
          University that offers the best option for those seeking a superior
          international education
        </p>
      </div>
    </div>
    <div class="difference-content">
      <div class="box-content">
        <div class="difference-credit">
          <img
            src="assets/img/pages/sampoerna-difference/degree/background-degree.webp"
            alt=""
          />
          <div class="credit-text">
            <h2 class="title">More Than Just a Degree</h2>
            <div class="box-text">
              <p class="text">
                Sampoerna University is a fully accredited Indonesian
                university that offers the best option for those seeking a
                superior international education. This is possible because
                Sampoerna University is the only American-style university in
                Indonesia that aligns with American standards for curriculum,
                faculty, facilities and operations.
              </p>
              <p class="text">
                In collaboration with the University of Arizona, we offer a
                two-degree program that allows you to study for 4 years in
                Jakarta and graduate with two degrees: an accredited Sarjana
                (Strata 1) degree from Sampoerna University and an accredited
                U.S. bachelor's degree from the University of Arizona. With
                our U.S. curriculum and international partnerships, you may
                also transfer seamlessly to a U.S. university after one or two
                years and graduate overseas as scheduled.
              </p>
            </div>
          </div>
        </div>
        <div class="difference-why">
          <h5 class="title">Why Sampoerna University?</h5>
          <div class="difference-grid">
            <div class="difference-path early">
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/1.higher-education.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">
                    U.S. Higher Education is One of the Best in the World
                  </h6>
                  <p class="decs">
                    Of the world's best 200 universities, 40% are located in
                    the U.S. Our partner university, the University of
                    Arizona, is ranked number 46 in the world according to
                    Council for World University Rankings (CWUR).
                  </p>
                </div>
              </div>
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/2.curriculum-attainable.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">
                    Top U.S. Curriculum Attainable Entirely in Indonesia
                  </h6>
                  <p class="decs">
                    The best part of our program is that you can earn your
                    credit from the University of Arizona at Sampoerna
                    University without ever leaving Indonesia.
                  </p>
                </div>
              </div>
            </div>
            <div class="difference-path middle">
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/3.best-value.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">
                    Best Value, Top U.S. Curriculum, Local Tuition Fee
                  </h6>
                  <p class="decs">
                    At Sampoerna University, you can save up to 75% of your
                    international education expenses.
                  </p>
                </div>
              </div>
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/4.academic-faculty.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">World Class Academic Faculty</h6>
                  <p class="decs">
                    Most of our faculty members hold doctoral degrees.
                  </p>
                </div>
              </div>
            </div>
            <div class="difference-path late">
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/5.future-ready.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">Future-Ready Curated Program</h6>
                  <p class="decs">
                    Our programs ensure that student have better skills and
                    credentials that will open the doors to both national and
                    international careers after they graduate.
                  </p>
                </div>
              </div>
              <div class="difference-part">
                <img
                  src="assets/img/pages/sampoerna-difference/university/6.get-employed.webp"
                  alt=""
                />
                <div class="part-text">
                  <h6 class="title">
                    94% of Graduates Get Employed within 3 Months
                  </h6>
                  <p class="decs">
                    Thanks to the international curriculum and relevant soft
                    skills taught at Sampoerna University, our alumni are
                    readily hired by both national and international
                    organizations.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shape-footer">
      <div class="box-shape">
        <div class="content-shape">
          <div class="text-shape">
            <h5 class="title">Ready to Shape Your Future?</h5>
            <p class="decs">
              Learn from world-class faculty, connect with a global network,
              and gain practical skills that prepare you for a successful
              career.
            </p>
          </div>
          <a class="btn-apply" href="{{ route('contact') }}">
            <p>Apply Now</p>
            <svg
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M6.66675 16.0007H25.3334"
                stroke="#292F78"
                stroke-width="2.66667"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M20 21.3333L25.3333 16"
                stroke="#292F78"
                stroke-width="2.66667"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              <path
                d="M20 10.666L25.3333 15.9993"
                stroke="#292F78"
                stroke-width="2.66667"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </a>
        </div>
        <img
          class="img-shape"
          src="assets/img/pages/faq/shape-img.webp"
          alt=""
        />
      </div>
    </div>
  </div>

@endsection
