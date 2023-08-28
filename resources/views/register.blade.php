@extends('layouts.auth')

@section('content')
<form
              class="form d-flex flex-column w-100 fv-plugins-bootstrap5 fv-plugins-framework px-lg-10 px-1"
              novalidate="novalidate"
              id="kt_sign_up_form"
              data-kt-redirect-url="../../demo1/dist/authentication/layouts/corporate/sign-in.html"
              action="#"
            >
              <div class="text-center">
                <h1 class="text-dark fw-bolder mb-3 mt-3 mb-10">Sign Up</h1>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-md-row flex-column gap-1">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Full name"
                      name="email"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>

                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Email"
                      name="email"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-md-row flex-column gap-1">
                  <div
                    class="col-12 col-md-6 fv-plugins-icon-container"
                    data-kt-password-meter="true"
                  >
                    <input
                      class="form-control h-auto"
                      type="password"
                      placeholder="Password"
                      name="password"
                      autocomplete="off"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>

                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      placeholder="Confirm Password"
                      name="confirm-password"
                      type="password"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-column flex-md-row gap-1">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Organization Name"
                      name="organizationName"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Job title"
                      name="jobTitle"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-column flex-md-row gap-1">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <select
                      name="industry"
                      id="industry"
                      class="form-control form-value h-auto"
                    >
                      <option value="">Industry</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Construction/Real Estate">
                        Construction/Real Estate
                      </option>
                      <option value="Consumer Goods">Consumer Goods</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="ICT">ICT</option>
                      <option value="Natural resources">
                        Natural Resources
                      </option>
                      <option value="Oil and Gas">Oil and Gas</option>
                      <option value="Services">Services</option>
                      <option value="Others">Others</option>
                    </select>
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <select
                      name="organizationSize"
                      id="organizationSize"
                      class="form-control form-value h-auto"
                    >
                      <option value="">Organization Size</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Construction/Real Estate">
                        Construction/Real Estate
                      </option>
                      <option value="Consumer Goods">Consumer Goods</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="ICT">ICT</option>
                      <option value="Natural resources">
                        Natural Resources
                      </option>
                      <option value="Oil and Gas">Oil and Gas</option>
                      <option value="Services">Services</option>
                      <option value="Others">Others</option>
                    </select>
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-column flex-md-row gap-1">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <select
                      name="yourLocation"
                      id="yourLocation"
                      class="form-control form-value h-auto"
                    >
                      <option value="">Your Location</option>
                      <option value="Agriculture">Agriculture</option>
                      <option value="Construction/Real Estate">
                        Construction/Real Estate
                      </option>
                      <option value="Consumer Goods">Consumer Goods</option>
                      <option value="Healthcare">Healthcare</option>
                      <option value="ICT">ICT</option>
                      <option value="Natural resources">
                        Natural Resources
                      </option>
                      <option value="Oil and Gas">Oil and Gas</option>
                      <option value="Services">Services</option>
                      <option value="Others">Others</option>
                    </select>
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <select
                      name="gender"
                      id="gender"
                      class="form-control form-value h-auto"
                    >
                      <option value="">Gender</option>

                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="col-12 mb-md-5">
                <div class="d-flex flex-column flex-md-row gap-1">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Your age"
                      name="yourAge"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                    <input
                      type="text"
                      placeholder="Your occupation"
                      name="yourOccupation"
                      autocomplete="off"
                      class="form-control h-auto"
                    />
                    <div
                      class="fv-plugins-message-container invalid-feedback"
                    ></div>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column col-sm-12">
                <div
                  class="fv-row fv-plugins-icon-container fv-plugins-bootstrap5-row-valid"
                >
                  <label class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      name="toc"
                      value="1"
                      style="background-color: #004e2b"
                    />
                    <span
                      class="form-check-label fw-semibold text-gray-700 fs-base ms-1 fw-bold"
                      >I Accept the to the
                      <a href="#" class="ms-1 link-primary">Policy</a></span
                    >
                  </label>
                  <div
                    class="fv-plugins-message-container invalid-feedback"
                  ></div>
                </div>
              </div>
              <div class="d-grid mb-10">
                <button
                  type="submit"
                  id="kt_sign_in_submit"
                  class="sign_In_button"
                >
                  <span class="indicator-label">Sign Up</span>
                  <span class="indicator-progress"
                    >Please wait...
                    <span
                      class="spinner-border spinner-border-sm align-middle ms-2"
                    ></span
                  ></span>
                </button>
              </div>
              <div
                style="color: #004d2a; font-weight: 600"
                class="text-gray-500 text-center fw-semibold fs-6"
              >
                Already have an account?
                <a
                  href="login"
                  class=""
                  style="color: #004d2a; font-weight: 700"
                  >Sign in</a
                >
              </div>
            </form>
          @endsection