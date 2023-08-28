<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <meta name="description" content="Multipurpose HTML template." />
    <script src="assets/scripts/jquery.min.js"></script>
    <link rel="icon" href="assets/images/cropped-NITDA-logo-180x180-removebg-preview.png" />

    <link rel="stylesheet" href="assets/scripts/bootstrap/css/bootstrap.css" />
    <script src="assets/scripts/script.js"></script>
    <script src="assets/scripts.bundle.js"></script>
    <script src="assets/plugins.bundle.css"></script>
    <script src="assets/style.bundle.css"></script>

    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/css/content-box.css" />
    <link rel="stylesheet" href="assets/css/image-box.css" />
    <link rel="stylesheet" href="assets/css/animations.css" />
    <link rel="stylesheet" href="assets/css/components.css" />

    <link rel="stylesheet" href="assets/scripts/flexslider/flexslider.css" />
    <link rel="stylesheet" href="assets/scripts/magnific-popup.css" />
    <link rel="stylesheet" href="assets/scripts/php/contact-form.css" />
    <link rel="stylesheet" href="assets/scripts/social.stream.css" />
    <link rel="stylesheet" href="assets/skin.css" />
    <link href="assets/plugins.bundle.css" rel="stylesheet" type="text/css" />
    
    <link href="assets/style.bundle.css" rel="stylesheet" type="text/css" />
    <style>
      .sign_In_button {
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        font-weight: 500;
        color: #fff;
        font-size: 17px;
        transition: ease-in;
        background-color: #004d2a !important;
      }
      .sign_In_button:hover {
        background-color: #009a55 !important;
      }
    </style>
  </head>
  <body>
    <div id="preloader"></div>

    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <div
          class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1"
        >
          <div class="w-lg-700px d-flex flex-stack px-10 mx-auto">
            <div class="d-flex fw-semibold text-primary fs-base gap-5">
              <a
                href="/"
                class="fw-bold"
                target="_blank"
                style="color: #00733e; font-size: 16px"
                target="_blank"
                >Back Home</a
              >
            </div>
          </div>

          <div class="d-flex flex-center flex-column flex-lg-row-fluid">
            @yield('content')
          </div>
          <div
            class="d-flex fixed-bottom px-3 py-4 fw-semibold text-primary fs-base gap-5 absolute"
          >
            <a href="#" style="color: #00733e; font-weight: 500" target="_blank"
              >Terms</a
            >
            <a href="#" style="color: #00733e; font-weight: 500" target="_blank"
              >Plans</a
            >
            <a href="#" style="color: #00733e; font-weight: 500" target="_blank"
              >Contact Us</a
            >
          </div>
        </div>
        <div
          class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
          style="background-color: #f2f2f2"
        >
          <div
            class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100"
          >
            <img
              class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
              src="assets/images/cropped-cropped-NITDA-Logo-new-03.png"
              alt=""
            />
            <img
              class="d-lg-none d-lg-block mx-auto w-150px w-md-50 w-xl-500px mb-10 mb-lg-20"
              src="assets/images/cropped-cropped-NITDA-Logo-new-03.png"
              alt=""
            />
            <h3 style="color: #004d2a; font-size: 26px; text-align: center">
              National Information Technology Development Agency (NITDA) Policy
              review portal
            </h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
