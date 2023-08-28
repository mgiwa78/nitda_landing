@extends('layouts.auth')

@section('content')
          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            <form
              class="form w-lg-500px w-md-400px px-4 w-100 fv-plugins-bootstrap5 fv-plugins-framework"
              novalidate="novalidate"
              id="kt_sign_in_form"
              data-kt-redirect-url="index.html"
              action="#"
            >
              <div class="text-center mb-11">
                <h1 class="text-dark fw-bolder mb-3">Login</h1>
              </div>

              <div class="d-flex flex-column gap-3">
                <div class="col-12 mb-md-5">
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
                <div class="col-12 mb-md-5">
                  <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    autocomplete="off"
                    class="form-control h-auto"
                  />
                  <div
                    class="fv-plugins-message-container invalid-feedback"
                  ></div>
                </div>
              </div>
              <div
                class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8"
              >
                <div></div>
                <a
                  href="forgotPassword"
                  style="color: #004d2a; font-weight: 600"
                  >Forgot Password ?</a
                >
              </div>
              <div class="d-grid mb-10">
                <button
                  type="submit"
                  id="kt_sign_in_submit"
                  class="sign_In_button"
                >
                  <span class="indicator-label">Sign In</span>
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
                Not a Member yet?
                <a
                  href="register"
                  class=""
                  style="color: #004d2a; font-weight: 700"
                  >Sign up</a
                >
              </div>
            </form>
          </div>
@endsection