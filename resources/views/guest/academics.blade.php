@extends('guest.main')
@section('content')
<div class="container academic">
    <div class="academic-bg">
      <div class="box-img">
        <img src="assets/img/pages/academics/academics.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Academics</h3>
      </div>
    </div>
    <div class="academic-list">
      <div class="box-academic-uni">
        <div class="academic-part left">
          <img
            class="academic-img"
            src="assets/img/pages/academics/core.webp"
            alt=""
          />
          <div class="box-academic">
            <h6 class="title">Core Curriculum</h6>
            <p class="decs">
              Sampoerna University features a U.S.-style curriculum with
              English as the medium of instruction. During the first two
              years, students complete the Core Curriculum of
              interdisciplinary classes and essential prerequisites to build
              competencies in their chosen major.
            </p>
            <div class="more-info">
              <a href="{{ route('core-curriculum') }}" class="text-link">Read More</a>
              <img src="assets/img/pages/all/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="academic-part right">
          <img
            class="academic-img"
            src="assets/img/pages/academics/pathway.webp"
            alt=""
          />
          <div class="box-academic">
            <h6 class="title">Pathway to The World</h6>
            <p class="decs">
              Sampoerna University offers dual enrollment with its U.S.
              partner, providing students with opportunities to transfer to
              top universities worldwide. U.S. credits earned through the Core
              Curriculum are widely accepted by universities in the U.S.,
              Canada, Australia, and more.
            </p>
            <div class="more-info">
              <a href="{{ route('pathway') }}" class="text-link">Read More</a>
              <img src="assets/img/pages/all/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="academic-part left">
          <img
            class="academic-img"
            src="assets/img/pages/academics/CETL.webp"
            alt=""
          />
          <div class="box-academic">
            <h6 class="title">
              Center for Excellence in Teaching and Learning
            </h6>
            <p class="decs">
              The Center for Excellence in Teaching and Learning (CETL) at
              Sampoerna University is dedicated to enhancing faculty teaching
              practices to promote student success. CETL offers professional
              development programs focused on innovative pedagogy, technology,
              and 21st-century skills, recognizing and valuing excellence in
              teaching and learning.
            </p>
            <div class="more-info">
              <a href="{{ route('cetl') }}" class="text-link">Read More</a>
              <img src="assets/img/pages/all/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
        <div class="academic-part right">
          <img
            class="academic-img"
            src="assets/img/pages/academics/QAIR.webp"
            alt=""
          />
          <div class="box-academic">
            <h6 class="title">QAIR</h6>
            <p class="decs">
              The Quality Assurance and Institutional Research (QAIR) is the
              supervision and evaluation element within the University which
              functions to plan, implement, improve, and develop the quality
              assurance system in all units in Sampoerna University.
            </p>
            <div class="more-info">
              <a href="{{ route('qair') }}" class="text-link">Read More</a>
              <img src="assets/img/pages/all/arrow-right.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
