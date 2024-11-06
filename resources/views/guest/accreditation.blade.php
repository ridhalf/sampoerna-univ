@extends('guest.main')
@section('content')
<div class="container accreditation">
    <div class="accreditation-bg">
      <div class="box-img">
        <img
          src="assets/img/pages/accreditation/bg-accreditation.webp"
          alt=""
        />
      </div>
      <div class="box-title">
        <h3 class="title">Accreditation</h3>
        <p class="decs">
          Sampoerna University is legally acknowledged by the Ministry of
          Education and Culture of the Republic of Indonesia.
        </p>
      </div>
    </div>
    <div class="accreditation-content">
      <div class="accreditation-text">
        <h3 class="title">Accreditation</h3>
        <p class="desc">
          Sampoerna University is accredited by the Ministry of Education and
          Culture of the Republic of Indonesia. The New England Commission of
          Higher Education has determined that Sampoerna University is
          eligible to proceed with an application for candidacy for
          accreditation within two years. A determination of eligibility is
          not candidacy or accreditation, nor does it indicate a likelihood of
          eventual accreditation. Questions about eligibility and the
          accreditation process should be directed to the President of the
          Commission.
        </p>
        <div class="text-articulation">
          <h6 class="title">Articulation Agreements</h6>
          <p class="desc">
            Sampoerna University has articulation agreements with Keiser
            University and the University of Arizona, both of which are
            accredited by American and international bodies
          </p>
        </div>
        <p class="desc">
          SU's lower division (Freshman and Sophomore) curriculum is
          co-developed with Keiser University, which is fully accredited by
          the Southern Association of Colleges and Schools Commission on
          Colleges (SACSCOC). The first two years of study at Sampoerna
          University can lead to academic credit from Keiser University toward
          an associate degree and is transferable to four-year programs in the
          U.S. and many other countries.
        </p>
        <p class="desc">
          At the upper division (years 3 and 4), Sampoerna University offers
          the opportunity to earn two degrees through its partnership with the
          University of Arizona. This collaboration allows students to
          complete both an Indonesian Sarjana 1 and a bachelor's degree from
          the University of Arizona without ever leaving Indonesia. The
          University of Arizona, a leading research institution in the U.S.,
          is accredited by the Higher Learning Commission, as well as the
          American Association of Colleges and Schools of Business (AACSB).
          Graduates of the two-degree programs available in Business and
          Engineering receive diplomas and transcripts from both institutions.
          In addition to that, Sampoerna University is legally acknowledged by
          the Ministry of Education and Culture of the Republic of Indonesia.
          For more information, please refer to the decree of Ministry of
          Education and Culture concerning our change of name and
          establishment.
        </p>
      </div>
      <div class="home-collaboration">
        <div class="box-collaboration">
          <div class="img-collaboration">
            <img
              class="layer-img"
              src="assets/img/pages/home/home-collaboration/layer-1.webp"
              alt=""
            />
            <img
              src="assets/img/pages/home/home-collaboration/layer-2.webp"
              alt=""
              class="linear-img"
            />
          </div>
          <div class="box-layer">
            <div class="content-layer">
              <div class="logo-layer">
                <img
                  class="logo-collaboration"
                  src="assets/img/pages/home/home-collaboration/logo-dark-blue-light-blue.webp"
                  alt=""
                />
                <div class="box-collaboration">
                  <p>In collaboration with</p>
                  <img
                    src="assets/img/pages/home/home-collaboration/university-arizona.webp"
                    alt=""
                  />
                </div>
              </div>
              <h4 class="title-layer">
                Sampoerna University has been granted candidate for
                accreditation status by the New England Commission of Higher
                Education.
              </h4>
              <p class="desc-layer">
                Candidacy is not accreditation nor does it assure eventual
                accreditation. Candidacy is a formal affiliation with the New
                England Commission of Higher Education. It indicates that the
                institution has achieved initial recognition and is
                progressing toward accreditation.
              </p>
              <div class="schedule-layer">
                <p class="text-blue">
                  Inquiries regarding an institution’s affiliation status with
                  the Commission should be directed to:
                </p>
                <div class="box-schedule">
                  <h6>The New England Commission of Higher Education</h6>
                  <p class="text">
                    301 Edgewater Place, Suite 210
                    <br />
                    Wakefield, MA 01880, U.S.A.
                  </p>
                  <p class="text">
                    Direct line to Commission offices: (781) 425-7785
                  </p>
                  <div class="web-box">
                    <div class="box-svg">
                      <img
                        class="img-svg"
                        src="assets/img/pages/home/home-collaboration/mail.svg"
                        alt=""
                      />
                      <p class="text-svg">info@neche.org</p>
                    </div>
                    <div class="box-svg">
                      <img
                        class="img-svg"
                        src="assets/img/pages/home/home-collaboration/web.svg"
                        alt=""
                      />
                      <p class="text-svg">www.neche.org</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
