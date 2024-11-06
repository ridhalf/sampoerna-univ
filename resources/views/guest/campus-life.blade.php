@extends('guest.main')
@section('content')
<div class="container campus-life">
    <div class="campus-life-bg">
      <div class="box-img">
        <img src="assets/img/pages/campus-life/bg-campus-life.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Campus Life</h3>
      </div>
    </div>
    <div class="campus-life-content">
      <div class="box-student-affairs">
        <h6>Student Affairs</h6>
        <img
          src="assets/img/pages/campus-life/bg-student-affairs.webp"
          alt=""
        />
        <a href="{{ route('student-affairs') }}" class="link-button">
          <p class="desc">See More</p>
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
      <div class="box-government-clubs">
        <h6>Student Government and Clubs</h6>
        <p class="decs">
          Sampoerna University students play an active role in campus
          governance, with elected representatives in the Student Executive
          Board and Faculties. They develop proposals for clubs, events, and
          activities, and provide feedback on policies impacting student life.
          Through the Student Government, students gain leadership skills for
          professional and civic engagement.
        </p>
        <div class="box-clubs-img">
          <div class="slideshow">
            <img src="" alt="" srcset="" class="item-clubs club-1" />
            <img src="" alt="" srcset="" class="item-clubs club-2" />
            <img src="" alt="" srcset="" class="item-clubs club-3" />
          </div>
        </div>
        <a href="{{ route('student-goverment') }}" class="link-button">
          <p class="desc">Explore School Activities</p>
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
      <div class="box-inspiring-learning">
        <h6>Insping Learning environments</h6>
        <img src="assets/img/pages/campus-life/inspiring-img.webp" alt="" />
        <a href="{{ route('facilities') }}" class="link-button">
          <p class="desc">Discover More</p>
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
