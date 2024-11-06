@extends('guest.main')
@section('content')
<div class="container admission">
    <div class="admission-bg">
      <div class="box-img">
        <img src="assets/img/pages/admission/admission-bg.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Admissions</h3>
      </div>
    </div>
    <div class="admission-content">
      <div class="box-content">
        <div class="box-apply">
          <h6 class="title">How to Apply</h6>
          <ul class="list-apply">
            <li>
              <img src="assets/img/pages/admission/1.webp" alt="" />
              <p class="decs">
                Fill out <br />
                the application form
              </p>
            </li>
            <li>
              <img src="assets/img/pages/admission/2.webp" alt="" />
              <p class="decs">Application fee</p>
            </li>
            <li>
              <img src="assets/img/pages/admission/3.webp" alt="" />
              <p class="decs">
                Take practice test to <br />
                prepare for Placement Test
              </p>
            </li>
            <li>
              <img src="assets/img/pages/admission/4.webp" alt="" />
              <p class="decs">
                Welcome to <br />
                Sampoerna University
              </p>
            </li>
          </ul>
          <div class="button-more">
            <a href="{{ route('university-admission') }}" class="read-more">
              <p class="decs">Read More</p>
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
        </div>
        <div class="box-requirements">
          <h6 class="title">Requirements</h6>
          <ul class="content-requirements">
            <li>
              <img
                src="assets/img/pages/admission/university-admission.webp"
                alt=""
              />
              <div class="box-text">
                <h6 class="title">University Admission</h6>
                <p class="decs">
                  Sampoerna University invites ambitious students with a
                  passion for international education to join our vibrant
                  campus. With a focus on American-style learning, we're
                  looking for individuals who possess strong English language
                  skills and are eager to excel in a globalized academic
                  environment.
                </p>
                <a href="{{ route('requirements') }}" class="boxx-more">
                  <p class="learn">Read More</p>
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
            </li>
            <li>
              <img
                src="assets/img/pages/admission/international-student.webp"
                alt=""
              />
              <div class="box-text">
                <h6 class="title">International Student</h6>
                <p class="decs">
                  Sampoerna University welcomes international students seeking
                  a world-class education in Indonesia. As an international
                  student, you'll have the opportunity to immerse yourself in
                  a diverse learning environment and gain valuable global
                  perspectives.
                </p>
                <a href="{{ route('international-student') }}" class="boxx-more">
                  <p class="learn">Read More</p>
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
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="content-explore">
      <div class="box-explore">
        <div class="explore-text">
          <h4 class="title">
            Don't Miss Out <br />
            and Explore Our Campus
          </h4>
          <p class="desc">
            Explore our campus and discover the endless possibilities that
            await you at Sampoerna University. Schedule a tour today and see
            why we're the ideal choice for your higher education journey.
          </p>
          <div class="box-button">
            <a href="https://panomatics.com/vr/id/545/index.html?startscene=0" class="virtual-button">
              <p class="text">Virtual Tour</p>
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
            <a href="{{ route('contact') }}" class="onsite-button">
              <p class="text">On-Site Tour</p>
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
          <div class="info-explore">
            <div class="data-box">
              <img src="assets/img/pages/admission/telphone.svg" alt="" />
              <p class="text">0812 343 67234</p>
            </div>
            <div class="data-box">
              <img src="assets/img/pages/admission/email.svg" alt="" />
              <p class="text">info@sampoernauniversity.sch.id</p>
            </div>
          </div>
        </div>
        <div class="explore-img">
          <img src="assets/img/pages/admission/explore-campus.webp" alt="" />
        </div>
      </div>
    </div>
    <div class="contact-step">
      <div class="box-step">
        <div class="step-take">
          <h4 class="title">Take the next step</h4>
          <p class="desc">
            Learn from world-class faculty, connect with a global network, and
            gain practical skills that prepare you for a successful career.
          </p>
        </div>
        <div class="step-button">
          <a href="{{ route('contact') }}" class="btn-contact">
            <p class="desc">Contact Us</p>
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
          <a href="{{ route('faq') }}" class="btn-faq">
            <p class="desc">See FAQ</p>
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
      </div>
    </div>
  </div>
@endsection
