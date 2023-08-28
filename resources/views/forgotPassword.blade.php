@extends('layouts.auth') @section('content')
<form
    class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
    novalidate="novalidate"
    id="kt_password_reset_form"
    data-kt-redirect-url="../../demo1/dist/authentication/layouts/corporate/new-password.html"
    action="#"
>
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-500 fw-semibold fs-6">
            Enter your email to reset your password.
        </div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group=-->
    <div class="mb-8 fv-plugins-icon-container">
        <!--begin::Email-->
        <div
            class="d-flex"
            style="display: flex; justify-content: center; align-items: center"
        >
            <div class="col-8">
                <input
                    type="text"
                    placeholder="Email"
                    name="email"
                    autocomplete="off"
                    class="form-control h-auto"
                />
                <!--end::Email-->
                <div
                    class="fv-plugins-message-container invalid-feedback"
                ></div>
            </div>
        </div>
    </div>

    <!--begin::Actions-->
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button
            type="button"
            id="kt_password_reset_submit"
            class="sign_In_button me-4"
            style="background-color: #004d2a; font-weight: 700"
        >
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress"
                >Please wait...
                <span
                    class="spinner-border spinner-border-sm align-middle ms-2"
                ></span
            ></span>
            <!--end::Indicator progress-->
        </button>
        <a href="" class="btn btn-light">Cancel</a>
    </div>
    <!--end::Actions-->
</form>
@endsection
