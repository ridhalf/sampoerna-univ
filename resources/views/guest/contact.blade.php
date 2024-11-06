@extends('guest.main')
@section('content')
<div class="container contact">
    <div class="contact-bg">
      <div class="box-img">
        <img src="assets/img/pages/contact/contact-bg.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">Contact Us</h3>
        <p class="decs">
          Thanks for choosing Sampoerna University and we look forward to
          hearing from you!
        </p>
      </div>
    </div>
    <div class="contact-feedback">
      <div class="box-feedback">
        <div class="contact-text">
          <h3 class="title">We Would Love to Hear From You</h3>
          <p class="decs">
            We're here to help and we value your feedback. Whether you have a
            question about our products or services, or just want to share
            some feedback, we're here to help
          </p>
        </div>
        <form action="#" class="contact-form">
          <div class="text-item">
            <label for="name" class="contact-labels">
              <p class="decs">Name</p>
              <span class="red">*</span>
            </label>
            <input type="text" id="name" class="label-input" />
          </div>
          <div class="twosided-item">
            <div class="text-item">
              <label for="number" class="contact-labels">
                <p class="decs">Phone Number</p>
                <span class="red">*</span>
              </label>
              <input type="number" id="number" class="label-input" />
            </div>
            <div class="text-item">
              <label for="email" class="contact-labels">
                <p class="decs">Email</p>
                <span class="red">*</span>
              </label>
              <input type="email" id="email" class="label-input" />
            </div>
          </div>
          <div class="dropdown-item">
            <label for="province" class="contact-labels">
              <p class="decs">Province</p>
              <span class="red">*</span>
            </label>
            <div class="dropdown-box">
              <select id="province" name="province" class="dropdown-select">
                <option value="">Choose One</option>
                <option value="aceh">Aceh</option>
                <option value="sumatera-utara">Sumatera Utara</option>
                <option value="sumatera-barat">Sumatera Barat</option>
                <option value="riau">Riau</option>
                <option value="jambi">Jambi</option>
                <option value="sumatera-selatan">Sumatera Selatan</option>
                <option value="bengkulu">Bengkulu</option>
                <option value="lampung">Lampung</option>
                <option value="kepulauan-bangka-belitung">
                  Kepulauan Bangka Belitung
                </option>
                <option value="kepulauan-riau">Kepulauan Riau</option>
                <option value="dki-jakarta">DKI Jakarta</option>
                <option value="jawa-barat">Jawa Barat</option>
                <option value="jawa-tengah">Jawa Tengah</option>
                <option value="di-yogyakarta">DI Yogyakarta</option>
                <option value="jawa-timur">Jawa Timur</option>
                <option value="banten">Banten</option>
                <option value="bali">Bali</option>
                <option value="nusa-tenggara-barat">
                  Nusa Tenggara Barat
                </option>
                <option value="nusa-tenggara-timur">
                  Nusa Tenggara Timur
                </option>
                <option value="kalimantan-barat">Kalimantan Barat</option>
                <option value="kalimantan-tengah">Kalimantan Tengah</option>
                <option value="kalimantan-selatan">Kalimantan Selatan</option>
                <option value="kalimantan-timur">Kalimantan Timur</option>
                <option value="kalimantan-utara">Kalimantan Utara</option>
                <option value="sulawesi-utara">Sulawesi Utara</option>
                <option value="sulawesi-tengah">Sulawesi Tengah</option>
                <option value="sulawesi-selatan">Sulawesi Selatan</option>
                <option value="sulawesi-tenggara">Sulawesi Tenggara</option>
                <option value="gorontalo">Gorontalo</option>
                <option value="sulawesi-barat">Sulawesi Barat</option>
                <option value="maluku">Maluku</option>
                <option value="maluku-utara">Maluku Utara</option>
                <option value="papua">Papua</option>
                <option value="papua-barat">Papua Barat</option>
                <option value="papua-selatan">Papua Selatan</option>
                <option value="papua-pegunungan">Papua Pegunungan</option>
                <option value="papua-tengah">Papua Tengah</option>
              </select>
            </div>
          </div>
          <div class="text-item">
            <label for="school" class="contact-labels">
              <p class="decs">School Origin</p>
              <span class="red">*</span>
            </label>
            <input type="text" id="school" class="label-input" />
          </div>
          <div class="dropdown-item">
            <label for="curriculum" class="contact-labels">
              <p class="decs">Curriculum</p>
              <span class="red">*</span>
            </label>
            <div class="dropdown-box">
              <select
                id="curriculum"
                name="curriculum"
                class="dropdown-select"
              >
                <option value="">Choose One</option>
                <!-- Add curriculum options here -->
              </select>
            </div>
          </div>

          <div class="dropdown-item">
            <label for="preferred" class="contact-labels">
              <p class="decs">Preferred Faculty</p>
              <span class="red">*</span>
            </label>
            <div class="dropdown-box">
              <select id="preferred" name="preferred" class="dropdown-select">
                <option value="">Choose One</option>
                <option value="business">Faculty of Business</option>
                <option value="engineering">
                  Faculty of Engineering & Technology
                </option>
                <option value="education">Faculty of Education</option>
                <option value="arts-science">
                  Faculty of Arts & Science
                </option>
              </select>
            </div>
          </div>

          <div class="dropdown-item">
            <label for="timeframe" class="contact-labels">
              <p class="decs">Timeframe Visit</p>
              <span class="red">*</span>
            </label>
            <div class="dropdown-box">
              <select id="timeframe" name="timeframe" class="dropdown-select">
                <option value="">Choose One</option>
                <option value="this-week">Within This Week</option>
                <option value="this-month">This Month</option>
                <option value="over-3-months">>3 Months</option>
              </select>
            </div>
          </div>

          <div class="box-button">
            <button type="submit" class="button-submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
