@extends('guest.main')
@section('content')
<div class="container qair">
    <div class="qair-bg">
      <div class="box-img">
        <img src="assets/img/pages/qair/QAIR.webp" alt="" />
      </div>
      <div class="box-title">
        <h3 class="title">QAIR</h3>
        <p class="decs">
          QAIR conducts a process of assessing performance against the
          institutional mission for all programs, services, and constituencies
        </p>
      </div>
    </div>
    <div class="qair-container">
      <div class="box-content">
        <ul class="qair-list">
          <li class="active">Overview</li>
          <li>Fact Book</li>
          <li>Survey Research</li>
          <li>Quality Assurance</li>
          <li>Regulation</li>
          <li>Request Data</li>
        </ul>
        <div class="qair-data">
          <div class="data-list active">
            <p class="text-normal">
              The Quality Assurance and Institutional Research (QAIR) is the
              supervision and evaluation element within the University which
              functions to plan, implement, improve, and develop the quality
              assurance system in all units in Sampoerna University. QAIR is
              lead by a Director.
            </p>
            <p class="text-normal">
              QAIR conducts a process of assessing performance against the
              institutional mission for all programs, services, and
              constituencies. It is a responsive process that linked to the
              decision-making process at all levels. This process offers
              ongoing guidance for planning and budgeting, provides objective
              evidence for accreditation purposes, and collects useful
              information on what and how students are learning.
            </p>
            <p class="text-bold">
              QAIR Process <br />
              QAIR leads the institutional research by requiring all academic
              and administrative units to complete assessment procedures on an
              annual basis. Multiple measures are used to assess each unit
              program outcome.
            </p>
            <p class="text-bold">
              Continuous improvement is the primary goal of assessment. All
              units are expected to use the assessment results to improve its
              programs and services. Improvement is the true measure of
              success of an assessment eﬀort. The use of assessment results
              after the assessment process ends is the most important
              component of the institutional research process.
            </p>
          </div>
          <div class="data-list book-table">
            <div class="box-table">
              <p class="text-table">
                Students <br />
                The Student portion of the Fact Book contains data on four
                areas including, Admission, Enrollment, Retention Rate, and
                Graduation Rate. Each section offers current and historical
                views of data across the institution.
              </p>
              <p class="text-table">
                QAIR leads the institutional research by requiring all
                academic and administrative units to complete assessment
                procedures on an annual basis. Multiple measures are used to
                assess each unit program outcome.
              </p>
              <p class="text-table">
                Continuous improvement is the primary goal of assessment. All
                units are expected to use the assessment results to improve
                its programs and services. Improvement is the true measure of
                success of an assessment eﬀort. The use of assessment results
                after the assessment process ends is the most important
                component of the institutional research process.
              </p>
              <div class="box-overflow">
                <table class="table-data main-table">
                  <thead>
                    <tr>
                      <th>Admission Fall 2023</th>
                      <th class="box-th">Freshmen</th>
                      <th class="box-th">Transfer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Completed Applications</td>
                      <td>1.198</td>
                      <td>4</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>Application Accepted</td>
                      <td>586</td>
                      <td>3</td>
                      <td>Accepted</td>
                      <td>49%</td>
                    </tr>
                    <tr>
                      <td>Applicants Enrolled</td>
                      <td>139</td>
                      <td>3</td>
                      <td>Enrolled</td>
                      <td>24%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <table class="table-data">
                <thead>
                  <tr>
                    <th class="box-first">Fall-to-Fall Retention Rate</th>
                    <th>Fall 2022 to Fall 2023</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>FTIC Students</td>
                    <td>86%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th class="box-first">Graduation Rate (150%)</th>
                    <th>Year 2023</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Undergraduate Cohort 2017</td>
                    <td>57%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th class="box-first">Enrollment</th>
                    <th>Fall 2023</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>FTIC</td>
                    <td>562</td>
                  </tr>
                  <tr>
                    <td>Transfer</td>
                    <td>12</td>
                  </tr>
                  <tr>
                    <td>Total Undergraduate Student</td>
                    <td>574</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>Student Diversity Based on Gender (Fall 2023)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Female</td>
                    <td>43%</td>
                  </tr>
                  <tr>
                    <td>Male</td>
                    <td>57%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>
                      Student Diversity Based on Citizenship (Fall 2023)
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Indonesian Citizen</td>
                    <td>98%</td>
                  </tr>
                  <tr>
                    <td>International Student</td>
                    <td>2%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>Employability (Class of 2023)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Graduates employed within 3 months</td>
                    <td>98%</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="box-table">
              <p class="bold-table">
                Faculty <br />
                The Faculty section provides current and historical faculty
                data with breakouts by the school, gender, and status (FT/PT).
              </p>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>Faculty diversity based on gender (Fall 2023)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Female</td>
                    <td>31</td>
                    <td>41%</td>
                  </tr>
                  <tr>
                    <td>Male</td>
                    <td>44</td>
                    <td>59%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>
                      Faculty diversity based on assignment status (Fall 2023)
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Full-time</td>
                    <td>38</td>
                    <td>51%</td>
                  </tr>
                  <tr>
                    <td>Part-time</td>
                    <td>37</td>
                    <td>49%</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="box-table">
              <p class="bold-table">
                Staff <br />
                The Staff section presents an Annual Summary with breakouts by
                administrative division, gender, and status (FT/PT).
              </p>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>
                      Administration and Staff diversity based on gender (Fall
                      2023)
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Female</td>
                    <td>60</td>
                    <td>63%</td>
                  </tr>
                  <tr>
                    <td>Male</td>
                    <td>35</td>
                    <td>37%</td>
                  </tr>
                </tbody>
              </table>
              <table class="table-data">
                <thead>
                  <tr>
                    <th>
                      Administration and Staff diversity based on assignment
                      status (Fall 2023)
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Full-time</td>
                    <td>82</td>
                    <td>86%</td>
                  </tr>
                  <tr>
                    <td>Part-time</td>
                    <td>13</td>
                    <td>14%</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="box-table">
              <p class="bold-table">
                Other Institutional Data <br />
                The Other Institutional Data section includes several areas of
                Sampoerna University administration information such as
                library and tutoring service, alumni data, and development.
              </p>
              <p class="bold-table">
                Common Data Set <br />
                Basic information about Sampoerna University is provided in
                Common Data Set.
              </p>
            </div>
          </div>
          <div class="data-list">
            <div class="survey course">
              <h5>Course Evaluation Tools</h5>
              <div class="box-survey">
                <a href="#" class="button-survey">
                  <svg
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25.061 5.79297V26.376H9.62366C8.2027 26.376 7.05078 25.2241 7.05078 23.8031V8.36585C7.05078 6.94489 8.2027 5.79297 9.62366 5.79297H25.061Z"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M25.061 21.2305H9.62366C8.2027 21.2305 7.05078 22.3824 7.05078 23.8034"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12.1973 10.9381H19.9159"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>

                  <p class="years">Fall 2021</p>
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
                <a href="#" class="button-survey">
                  <svg
                    width="32"
                    height="32"
                    viewBox="0 0 32 32"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M25.061 5.79297V26.376H9.62366C8.2027 26.376 7.05078 25.2241 7.05078 23.8031V8.36585C7.05078 6.94489 8.2027 5.79297 9.62366 5.79297H25.061Z"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M25.061 21.2305H9.62366C8.2027 21.2305 7.05078 22.3824 7.05078 23.8034"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12.1973 10.9381H19.9159"
                      stroke="white"
                      stroke-width="2.57288"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>

                  <p class="years">Spring 2022</p>
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
              <p class="text-normal">
                Course evaluation is conducted at every semester. This
                evaluation tool aims to collect information on what each
                students liked and disliked most about the class with the
                goals of improving teaching learning practices.
              </p>
            </div>
            <div class="survey student">
              <h5>Students Satisfaction Survey</h5>
              <a href="#" class="button-survey">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M25.061 5.79297V26.376H9.62366C8.2027 26.376 7.05078 25.2241 7.05078 23.8031V8.36585C7.05078 6.94489 8.2027 5.79297 9.62366 5.79297H25.061Z"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M25.061 21.2305H9.62366C8.2027 21.2305 7.05078 22.3824 7.05078 23.8034"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M12.1973 10.9381H19.9159"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
                <p class="years">Fall 2021 - Spring 2021</p>
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
              <p class="text-normal">
                Student Satisfaction Survey is conducted at every semester.
                This survey aims to measure the satisfaction level of student
                toward facilities and services provided, as well as seeks
                student’s feedback and their suggestion for improvement.
              </p>
            </div>
            <div class="survey faculty">
              <h5>Faculty and Staff Satisfaction Survey</h5>
              <a href="#" class="button-survey">
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 32 32"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M25.061 5.79297V26.376H9.62366C8.2027 26.376 7.05078 25.2241 7.05078 23.8031V8.36585C7.05078 6.94489 8.2027 5.79297 9.62366 5.79297H25.061Z"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M25.061 21.2305H9.62366C8.2027 21.2305 7.05078 22.3824 7.05078 23.8034"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M12.1973 10.9381H19.9159"
                    stroke="white"
                    stroke-width="2.57288"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>

                <p class="years">Fall 2021 - Spring 2022</p>
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
              <p class="text-normal">
                Satisfaction Survey for Faculty and Staff is conducted
                annually. This survey aims to collect the information on
                faculty and staff satisfaction level toward facilities and
                services provided and seeks their feedback and suggestion for
                improvement.
              </p>
            </div>
          </div>
          <div class="data-list quality-list">
            <div class="program-box">
              <p class="text-list">Quality Assurance Documents (SPMI)</p>
              <ul>
                <li class="text-list">QA Policies</li>
                <li class="text-list">Standard</li>
                <li class="text-list">Manuals</li>
                <li class="text-list">SOP</li>
                <li class="text-list">Form</li>
                <li class="text-list">Report</li>
              </ul>
            </div>

            <div class="program-box">
              <p class="text-list">Academic Program View</p>
              <ul>
                <li class="text-list">Internal Audit Guideline</li>
                <li class="text-list">Internal Auditors</li>
                <li class="text-list">Internal Audit Implementation</li>
                <li class="text-list">Management Review Meeting</li>
              </ul>
            </div>
          </div>
          <div class="data-list quality-list">
            <div class="program-box">
              <p class="text-list">Kemendikbud-Ristek</p>
              <p class="text-list">
                The Ministry of Education, Culture, Research, and Technology
              </p>
            </div>
            <div class="program-box">
              <p class="text-list">BAN-PT</p>
              <p class="text-list">
                The National Accreditation Board of Higher Education
              </p>
            </div>
            <div class="program-box">
              <p class="text-list">LAM</p>
              <p class="text-list">
                Independent Accreditation Institution for Indonesian Higher
                Education
              </p>
              <ul>
                <li class="text-list">LAM-TEKNIK</li>
                <li class="text-list">LAM-INFOKOM</li>
                <li class="text-list">LAM-EMBA</li>
                <li class="text-list">LAM-PENDIDIKAN</li>
              </ul>
            </div>
          </div>
          <div class="data-list quality-list">
            <div class="program-box">
              <p class="text-list">Information Request Form</p>
              <p class="text-list">
                Before submitting a request, please review the data already
                available on our website. The information you are looking for
                maybe available through the Fact Book. If you can not find the
                data you need, please complete this form as much detail as
                possible.
              </p>
              <div class="box-form">
                <form action="">
                  <div class="form-content">
                    <div class="box-required box-label">
                      <label for="email">Email <span>*</span></label>
                      <input type="email" name="email" id="email" />
                      <p class="desc">example@example.com</p>
                    </div>
                    <div class="box-required box-name">
                      <label for="first">Name <span>*</span></label>
                      <div class="box-label">
                        <div class="box-input">
                          <input type="text" name="first" id="first" />
                          <p class="desc">First Name</p>
                        </div>
                        <div class="box-input">
                          <input type="text" name="last" id="last" />
                          <p class="desc">Last Name</p>
                        </div>
                      </div>
                    </div>
                    <div class="box-required box-department">
                      <label for="department">
                        Your Department <span>*</span>
                      </label>
                      <input type="text" name="department" id="department" />
                    </div>
                    <div class="box-required box-subject">
                      <p class="text">Subject Area(s) <span>*</span></p>
                      <div class="content-radio">
                        <div class="box-radio">
                          <input type="radio" id="student" name="radio" />
                          <label for="student">Student</label>
                        </div>

                        <div class="box-radio">
                          <input type="radio" id="faculty" name="radio" />
                          <label for="faculty">Faculty</label>
                        </div>

                        <div class="box-radio">
                          <input type="radio" id="staff" name="radio" />
                          <label for="staff">Staff</label>
                        </div>

                        <div class="box-radio">
                          <input type="radio" id="other" name="radio" />
                          <label for="other">Other</label>
                        </div>
                      </div>
                    </div>
                    <div class="box-required box-specify">
                      <label for="specify">
                        Please specify your need concisely? <span>*</span>
                      </label>
                      <input type="text" name="specify" id="specify" />
                    </div>
                    <div class="box-required box-date">
                      <label for="date">
                        When do you need it? <span>*</span>
                      </label>
                      <input type="date" name="date" id="date" />
                    </div>
                    <div class="box-required box-date">
                      <label for="date">
                        Please verify that you are human <span>*</span>
                      </label>
                    </div>
                  </div>
                  <div class="form-footer">
                    <button class="submit">Submit</button>
                  </div>
                </form>
              </div>
            </div>
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
