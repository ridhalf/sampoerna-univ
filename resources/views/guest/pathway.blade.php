@extends('guest.main')
@section('content')
<div class="container pathway">
    <div class="pathway-bg">
      <div class="box-img">
        <img src="assets/img/pages/pathway/pathway.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Pathway to The World</h3>
      </div>
    </div>
    <div class="pathway-content">
      <div class="box-content">
        <div class="pathway-bridge">
          <img src="assets/img/pages/pathway/bridge-bg.webp" alt="" />
          <div class="bridge-text">
            <h6 class="title">Your Bridge to International Success</h6>
            <div class="box-decs">
              <p class="decs">
                Sampoerna University program offers unprecedented
                opportunities to transfer to some of the top universities in
                the world and to receive recognition of the degree at
                international graduate schools.
              </p>
              <p class="decs">
                Sampoerna University students are dually enrolled at our
                campus in Jakarta as well as at our U.S. partner, and receive
                a transcript from each. All students are eligible to complete
                an Associate Degree after two years from Keiser University.
              </p>
              <p class="decs">
                For those seeking to transfer to institutions in the U.S.,
                Canada, Australia and elsewhere, most universities will accept
                the U.S. credits of the Core Curriculum.
              </p>
            </div>
          </div>
        </div>
        <img src="assets/img/pages/pathway/bridge-full-bg.webp" alt="" />
        <div class="pathway-years">
          <h6 class="title">Access U.S. Education in Indonesia</h6>
          <div class="img-years">
            <img
              class="years-1"
              src="assets/img/pages/pathway/years-1-2.webp"
              alt=""
            />
            <img
              class="years-3"
              src="assets/img/pages/pathway/years-3-4.webp"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <div class="shape-schedule">
      <div class="box-schedule">
        <div class="shape-text">
          <h6 class="title">Ready to Shape Your Future?</h6>
          <p class="decs">
            Learn from world-class faculty, connect with a global network,
            <br />
            and gain practical skills that prepare you for a successful
            career.
          </p>
        </div>
        <div class="shape-btn">
          <button class="schedule" style="cursor: pointer" onclick="window.location.href='{{ route('contact') }}'">
            <p class="text">Schedule a Consultation</p>
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
          </button>
          <button class="apply" style="cursor: pointer" onclick="window.location.href='{{ route('university-admission') }}'">
            <p class="text">How to Apply</p>
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
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection
