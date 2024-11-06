@extends('guest.main')
@section('content')
<div class="container faculties">
    <div class="faculties-bg">
      <div class="box-img">
        <img src="assets/img/pages/faculties/faculties-bg.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">List of Faculty</h3>
      </div>
    </div>
    <div class="list-faculty">
      <ul class="box-faculty">
        <li class="item">
          <img src="assets/img/pages/faculties/faculties-fob.webp" alt="" />
          <div class="box-text">
            <h2 class="title">Faculty of Business</h2>
            <div class="main-major">
              <div class="box-major">
                <p class="text">Accounting</p>
              </div>
              <div class="box-major">
                <p class="text">Management</p>
              </div>
            </div>
            <a href="{{ route('fob') }}" class="more-info">
              <p class="text">More Info</p>
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
        <li class="item">
          <img src="assets/img/pages/faculties/faculties-feot.webp" alt="" />
          <div class="box-text">
            <h2 class="title">Faculty of Engineering and Technology</h2>
            <div class="main-major">
              <div class="box-major">
                <p class="text">Industrial Engineering</p>
                <p class="text">Mechanical Engineering</p>
              </div>
              <div class="box-major">
                <p class="text">Computer Science</p>
                <p class="text">Visual Communication Design</p>
                <p class="text major">Information System</p>
              </div>
            </div>
            <a href="{{ route('fet') }}" class="more-info">
              <p class="text">More Info</p>
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
        <li class="item">
          <img src="assets/img/pages/faculties/faculties-foe.webp" alt="" />
          <div class="box-text">
            <h2 class="title">Faculty of Education</h2>
            <div class="main-major">
              <div class="box-major">
                <p class="text">English Language Education</p>
              </div>
            </div>
            <a href="{{ route('foe') }}" class="more-info">
              <p class="text">More Info</p>
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
        <li class="item">
          <img src="assets/img/pages/faculties/faculties-fas.webp" alt="" />
          <div class="box-text">
            <h2 class="title">Faculty of Arts & Science</h2>
            <div class="main-major">
              <div class="box-major">
                <p class="text">Psychology</p>
              </div>
            </div>
            <a href="{{ route('fas') }}" class="more-info">
              <p class="text">More Info</p>
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
@endsection
