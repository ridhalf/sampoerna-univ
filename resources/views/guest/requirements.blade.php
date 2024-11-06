@extends('guest.main')
@section('content')
<div class="container requirements">
    <ul class="list-req">
      <li class="req-bg {{ request()->is('requirements') ? 'active' : '' }}">
        <div class="box-img">
          <img
            src="assets/img/pages/requirements/university-admission/university-bg.webp"
            alt=""
          />
        </div>
        <div class="box-title">
          <h3 class="title">University Admissions</h3>
          <p class="decs">
            Sampoerna University is Indonesia’s only American-style university
            that offers a unique and rewarding learning experience
          </p>
        </div>
      </li>
      <li class="req-bg {{ request()->is('international-student') ? 'active' : '' }}">
        <div class="box-img">
          <img
            src="assets/img/pages/requirements/international-student/international-bg.webp"
            alt=""
          />
        </div>
        <div class="box-title">
          <h3 class="title">International Student</h3>
          <p class="decs">
            Sampoerna University is the only university in Indonesia to offer
            a Double Degree program with a US Curriculum.
          </p>
        </div>
      </li>
    </ul>
    <ul class="tab-req">
      <li class="{{ request()->is('requirements') ? 'active' : '' }}">University Admission</li>
      <li class="{{ request()->is('international-student') ? 'active' : '' }}">International Student</li>
    </ul>
    <div class="content-req">
      <div class="box-content">
        <div class="content-tab {{ request()->is('requirements') ? 'active' : '' }}">
          <div class="content-main">
            <div class="box-settle">
              <h2 class="title">Why Settle for the Ordinary?</h2>
              <div class="box-decs">
                <p class="decs">
                  Sampoerna University is Indonesia’s only American-style
                  university that offers a unique and rewarding learning
                  experience. All our degrees include an American-style
                  general education core – just like that offered in the best
                  universities in the United States. We even offer students an
                  opportunity to earn U.S. academic credits and degrees
                  through our partnerships with American institutions.
                </p>
                <p class="decs">
                  Sampoerna University believes in technology-driven learning,
                  creativity, and innovation so you can do things smarter and
                  better and challenge the conventional norms.
                </p>
                <p class="decs">
                  Never settle – choose what’s best, not just what’s
                  available. By admitting yourself into Sampoerna University,
                  you can be work ready, world ready, and ready to lead.
                </p>
              </div>
              <img
                src="assets/img/pages/requirements/university-admission/university-settle.webp"
                alt=""
                class="img-settle"
              />
            </div>
            <div class="box-admission">
              <h6 class="title">Admission Requirements</h6>
              <p class="decs">
                Sampoerna University seeks to admit students who are
                interested in an international-standard higher education and
                have the basic skills to succeed in an American-style
                university environment. As a university that teaches all its
                programs in English, successful applicants should have at
                least a working knowledge of Academic English.
              </p>
              <div class="requirements-tab">
                <div class="tab-criteria">
                  <div class="item active">Academic Requirements</div>
                  <div class="item">Placement Test Requirements</div>
                </div>
                <div class="content-criteria">
                  <div class="item active">
                    <div class="box-text">
                      <ul>
                        <li>
                          Satisfactory completion of final year secondary
                          school, or equivalent from a recognized high school.
                          Applicants need to submit their previous year or
                          latest high school transcripts to be reviewed by
                          Admissions. Proof of High School completion must be
                          provided as part of enrollment eligibility.
                        </li>
                        <li>
                          On a case-by-case basis, a certified high school
                          completion equivalency may be required.
                        </li>
                        <li>
                          If you are a transferring student from another
                          college or university, additional requirements may
                          apply. Please contact the admissions office for more
                          information.
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="item">
                    <p class="decs">
                      Our Admissions Policies identify the minimum necessary
                      qualifications for acceptance. A placement test is not
                      only required for admission but is also designed to
                      measure applicants’ College Readiness in English and
                      Mathematics for course placement. A student is
                      admissible if they can meet Sampoerna University’s
                      admission standards.
                    </p>
                    <p class="decs">
                      Applicants can bypass the Placement Tests and may be
                      offered Direct Acceptance by submitting standardized
                      assessment test scores from TOEFL or IELTS (for Basic
                      Skills Test equivalency) and SAT or ACT (for Advanced
                      Skill Test equivalency).
                    </p>
                    <p class="decs">
                      More information about the Sampoerna University’s
                      Placement Test see testing center
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-tab {{ request()->is('international-student') ? 'active' : '' }}">
          <div class="content-main">
            <img
              src="assets/img/pages/requirements/international-student/international-info.webp"
              alt=""
              class="inter-img"
            />
            <div class="list-inter">
              <div class="inter-box">
                <h6 class="info-title">
                  Visa <br />
                  Information
                </h6>
                <div class="box-decs">
                  <p class="decs">
                    As an international student you are obliged to have a
                    valid study permit & student visa during your study in
                    Indonesia
                  </p>
                  <p class="decs">
                    The total time to process your study permit & student visa
                    may take up to 3 months. Therefore, it is highly
                    recommended to submit your university application before
                    the deadline as stated in the
                    <a
                      href="https://www.sampoernauniversity.ac.id/wp-content/uploads/2024/03/Admission-Website-Update-2024-Intake.pdf"
                      class="blue"
                      >Admissions Calendar</a
                    >
                    to give you sufficient time to submit your study permit &
                    student visa application
                  </p>
                  <p class="decs">
                    <a
                      href="https://www.sampoernauniversity.ac.id/wp-content/uploads/2024/07/webonly_Poster-Indonesian-Study-Permit-size-A4.pdf"
                      class="blue"
                      >CLICK HERE</a
                    >
                    to see the Indonesian Study Permit & Student Visa
                    guideline for your reference.
                  </p>
                  <p class="decs">
                    Any inquiry regarding student visa & study permit, please
                    send an email to admissions@sampoernauniversity.ac.id.
                  </p>
                </div>
              </div>
              <div class="inter-box">
                <h6 class="info-title">
                  Arranging your <br />
                  accommodation
                </h6>
                <div class="box-decs">
                  <p class="decs">
                    Sampoerna University does not own or operate on-campus
                    housing. This means that we are unable to guarantee
                    housing for students. It is your responsibility to find
                    suitable accommodation after being accepted to Sampoerna
                    University.
                  </p>
                  <p class="decs">
                    We recommend that you start your search for accommodation
                    early, as options in the area can fill up quickly. Our
                    Student Affairs can provide guidance and support
                    throughout the accommodation search process. Contact us by
                    email at student.affairs@sampoernauniversity.ac.id for
                    further information.
                  </p>
                </div>
              </div>
            </div>
          </div>
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
            <a href="#" class="virtual-button">
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
            <a href="#" class="onsite-button">
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
  </div>
@endsection
