<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Nitda</title>
        <meta name="description" content="Multipurpose HTML template." />
        <script src="assets/scripts/jquery.min.js"></script>
        <link
            rel="stylesheet"
            href="/assets/scripts/bootstrap/css/bootstrap.css"
        />
        <script src="/assets/scripts/script.js"></script>
        <link rel="stylesheet" href="/assets/style.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200;300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="/assets/css/content-box.css" />
        <link rel="stylesheet" href="/assets/css/image-box.css" />
        <link rel="stylesheet" href="/assets/css/animations.css" />
        <link rel="stylesheet" href="/assets/css/components.css" />
        <link
            rel="stylesheet"
            href="/assets/scripts/flexslider/flexslider.css"
        />
        <link rel="stylesheet" href="/assets/scripts/magnific-popup.css" />
        <link rel="stylesheet" href="/assets/scripts/php/contact-form.css" />
        <link rel="stylesheet" href="/assets/scripts/social.stream.css" />
        <link
            rel="icon"
            href="/assets/images/cropped-NITDA-logo-180x180-removebg-preview.png"
        />
        <link rel="stylesheet" href="/assets/skin.css" />

        <style>
            .footer_box {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: max-content;
            }
            .footer_container {
                display: flex;
                flex-direction: column;
                gap: 30px;
                justify-content: space-between;
                align-items: center;
                justify-items: center;
            }
            .footer_list li {
                display: flex;
                justify-items: start;
                align-content: start;
                gap: 10px;
                justify-content: flex-start;
                align-items: start;
            }
            .quick_links {
                display: flex;
                flex-direction: column;
                gap: 2px;
                padding-left: 28px;
            }
            .quick_links li {
                color: #484848;
            }

            .footer_list li p {
                color: #484848;
                width: 290px;
                font-family: Mukta Vaani;
                font-size: 15px;
                font-weight: 400;
                line-height: 150%;
                letter-spacing: -0.3px;
            }

            .footer_container h5 {
                text-align: left;
                color: #737373;
                font-size: 18px;
                font-style: normal;
                font-weight: 500;
                letter-spacing: -0.36px;
            }
            @media only screen and (min-width: 901px) {
                .footer_container {
                    gap: 90px;
                    align-items: start;
                    justify-content: center;
                    flex-direction: row;
                }
                .footer_container h5 {
                    text-align: left;
                }
            }
        </style>
    </head>
    <body style="font-family: Mukta Vaani">
        <div id="preloader"></div>
        <header class="fixed-top scroll-change" data-menu-anima="fade-in">
            <div
                class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top"
                role="navigation"
            >
                <div class="navbar navbar-main">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="">
                                <img
                                    width="100"
                                    class="logo-default"
                                    src="assets/images/cropped-cropped-NITDA-Logo-new-03.png"
                                    alt="logo"
                                />
                                <img
                                    width="100"
                                    class="logo-retina"
                                    src="images/cropped-cropped-NITDA-Logo-new-03.png"
                                    alt="logo"
                                />
                            </a>
                        </div>
                        <div class="collapse navbar-collapse mt-3">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="/">Home </a>
                                </li>

                                <li class="dropdown">
                                    <a
                                        class="dropdown-toggle"
                                        href="/documents"
                                        data-toggle="dropdown"
                                        role="button"
                                        >Documents <span class="caret"></span
                                    ></a>
                                    <ul class="dropdown-menu multi-level">
                                        <li class="dropdown dropdown-submenu">
                                            <a
                                                href="approve_policy_documents"
                                                class="dropdown-toggle"
                                                data-toggle="dropdown"
                                                >Approve policy documents</a
                                            >
                                        </li>
                                        <li class="dropdown dropdown-submenu">
                                            <a
                                                href="rule_making_process"
                                                class="dropdown-toggle"
                                                data-toggle="dropdown"
                                                >Rule making process</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/faq">FAQ </a>
                                </li>
                                <li>
                                    <a href="/search">Search </a>
                                </li>
                                <li>
                                    <a href="/contact">Contact </a>
                                </li>
                            </ul>
                            <div
                                class="nav navbar-nav navbar-right"
                                style="padding: 10px; display: flex; gap: 4px"
                            >
                                <a
                                    href="/login"
                                    style="
                                        background-color: #014e2c;
                                        color: #fff;
                                    "
                                    class="btn anima anima-fade-right"
                                >
                                    Login
                                </a>
                                <a
                                    href="/register"
                                    class="btn btn-border anima anima-fade-right"
                                >
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="section-bg-color section-item">
            <div class="container content">
                <div class="row" id="FAQ">
                    <div class="col-12 text-center my-10">
                        <h3>FAQ</h3>
                    </div>
                </div>
                <div class="row" id="FAQ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="list-group accordion-list">
                                    <div class="list-group-item">
                                        <a href="#">How much is plan cost?</a>
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="#"
                                            >How long is warranty period?</a
                                        >
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="#">Moneyback guaranted ?</a>
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <hr class="space m visible-xs" />
                                <div class="list-group accordion-list">
                                    <div class="list-group-item">
                                        <a href="#"
                                            >What's included in the warranty?</a
                                        >
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="#"
                                            >What's not included in the
                                            warranty?</a
                                        >
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <a href="#"
                                            >How much time require the fixing
                                            work?</a
                                        >
                                        <div class="panel">
                                            <div class="inner">
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit, sed
                                                do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                Ut enim ad minim veniam.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <i class="scroll-top scroll-top-mobile fa fa-sort-asc"></i>
        <footer class="footer-base">
            <div class="content">
                <div class="container">
                    <div class="row footer_container">
                        <div class="footer_box footer-left">
                            <img
                                width="120"
                                src="assets/images/cropped-cropped-NITDA-Logo-new-03.png"
                                alt=""
                            />
                            <hr class="space m" />
                            <p
                                style="
                                    width: 283px;
                                    height: 60px;
                                    color: #484848;
                                "
                            >
                                Lorem ipsum dolor sit amet consectetur. Viverra
                                quis cursus ornare lectus. Tempor quisque sem
                                urna vulputate hac non.
                            </p>
                            <hr />
                            <div class="tag-row">
                                <svg
                                    width="120"
                                    height="18"
                                    viewBox="0 0 120 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M18.5375 9C18.5375 13.6684 14.5265 17.5 9.51877 17.5C4.51107 17.5 0.5 13.6684 0.5 9C0.5 4.33161 4.51107 0.5 9.51877 0.5C14.5265 0.5 18.5375 4.33161 18.5375 9Z"
                                        stroke="#004F2B"
                                    />
                                    <path
                                        d="M13.7389 7.06064C13.454 7.18036 13.1533 7.25518 12.8367 7.30008C13.1533 7.1205 13.4065 6.83616 13.5173 6.49196C13.2166 6.65658 12.8842 6.7763 12.5202 6.85112C12.2353 6.56679 11.8237 6.38721 11.3806 6.38721C10.5259 6.38721 9.82945 7.04567 9.82945 7.85379C9.82945 7.97351 9.84528 8.07826 9.87694 8.18302C8.59489 8.12316 7.43947 7.53952 6.66392 6.64161C6.53729 6.86609 6.45816 7.10553 6.45816 7.3749C6.45816 7.88372 6.72723 8.33267 7.15457 8.60204C6.90133 8.58707 6.66392 8.52721 6.44233 8.42246V8.43742C6.44233 9.15575 6.98047 9.75435 7.69271 9.88904C7.56609 9.91897 7.42364 9.93393 7.2812 9.93393C7.18623 9.93393 7.07544 9.91897 6.98047 9.904C7.18623 10.4876 7.75603 10.9216 8.43662 10.9216C7.89847 11.3107 7.23371 11.5502 6.50564 11.5502C6.37902 11.5502 6.2524 11.5502 6.1416 11.5352C6.83802 11.9542 7.64523 12.1937 8.53158 12.1937C11.3964 12.1937 12.9633 9.9489 12.9633 8.00344C12.9633 7.94358 12.9633 7.86875 12.9633 7.80889C13.2641 7.61434 13.5331 7.35994 13.7389 7.06064Z"
                                        fill="#004F2B"
                                    />
                                    <path
                                        d="M49.3916 2.624C47.6416 0.883 45.5036 0 43.0376 0C40.5486 0 38.4046 0.884 36.6646 2.625C34.9216 4.366 34.0376 6.512 34.0376 9C34.0376 11.465 34.9206 13.603 36.6616 15.354C38.4026 17.11 40.5476 18 43.0376 18C45.5046 18 47.6426 17.11 49.3936 15.357C51.1486 13.604 52.0376 11.465 52.0376 9C52.0376 6.512 51.1476 4.366 49.3916 2.624ZM47.9796 13.943C46.8426 15.082 45.5436 15.731 44.0376 15.928V11H46.0376V9H44.0376V7.6C44.0376 7.52112 44.0532 7.44302 44.0834 7.37016C44.1136 7.2973 44.1579 7.23111 44.2137 7.17538C44.2695 7.11965 44.3358 7.07548 44.4087 7.04539C44.4816 7.01529 44.5597 6.99987 44.6386 7H46.0376V5H44.6406C43.8986 5 43.2796 5.273 42.7836 5.822C42.2876 6.369 42.0376 7.037 42.0376 7.83V9H40.0376V11H42.0376V15.93C40.5156 15.735 39.2116 15.085 38.0806 13.946C36.7056 12.562 36.0376 10.944 36.0376 9C36.0376 7.034 36.7046 5.412 38.0796 4.04C39.4496 2.667 41.0716 2 43.0376 2C44.9826 2 46.5996 2.668 47.9826 4.043C49.3656 5.415 50.0376 7.037 50.0376 9C50.0376 10.941 49.3646 12.559 47.9796 13.943Z"
                                        fill="#004F2B"
                                    />
                                    <path
                                        d="M85.5751 9C85.5751 13.6684 81.5641 17.5 76.5564 17.5C71.5487 17.5 67.5376 13.6684 67.5376 9C67.5376 4.33161 71.5487 0.5 76.5564 0.5C81.5641 0.5 85.5751 4.33161 85.5751 9Z"
                                        stroke="#004F2B"
                                    />
                                    <path
                                        d="M76.557 5.43033C77.7868 5.43033 77.9324 5.43469 78.4182 5.45563C78.7103 5.45901 78.9996 5.50972 79.2736 5.60556C79.4723 5.678 79.6527 5.78898 79.8033 5.93134C79.9539 6.07371 80.0712 6.2443 80.1478 6.43215C80.2492 6.69118 80.3028 6.96473 80.3064 7.24091C80.3283 7.70024 80.3332 7.83793 80.3332 9.00068C80.3332 10.1634 80.3286 10.3011 80.3064 10.7604C80.3028 11.0366 80.2492 11.3102 80.1478 11.5692C80.0712 11.757 79.9539 11.9276 79.8033 12.07C79.6527 12.2124 79.4723 12.3233 79.2736 12.3958C78.9996 12.4916 78.7103 12.5423 78.4182 12.5457C77.9326 12.5665 77.787 12.571 76.557 12.571C75.327 12.571 75.1814 12.5667 74.6958 12.5457C74.4037 12.5423 74.1144 12.4916 73.8405 12.3958C73.6418 12.3233 73.4613 12.2124 73.3108 12.07C73.1602 11.9276 73.0428 11.757 72.9662 11.5692C72.8649 11.3102 72.8112 11.0366 72.8076 10.7604C72.7857 10.3011 72.7809 10.1634 72.7809 9.00068C72.7809 7.83793 72.7855 7.70024 72.8076 7.24091C72.8112 6.96473 72.8649 6.69118 72.9662 6.43215C73.0428 6.2443 73.1602 6.07371 73.3108 5.93134C73.4613 5.78898 73.6418 5.678 73.8405 5.60556C74.1144 5.50972 74.4037 5.45901 74.6958 5.45563C75.1816 5.43489 75.3273 5.43033 76.557 5.43033ZM76.557 4.64563C75.3069 4.64563 75.1494 4.65061 74.6581 4.67176C74.2758 4.67895 73.8976 4.74738 73.5395 4.87416C73.2324 4.98358 72.9542 5.15506 72.7243 5.37662C72.4898 5.59403 72.3082 5.85723 72.1924 6.14784C72.0584 6.4864 71.986 6.844 71.9784 7.20545C71.9564 7.66955 71.9512 7.81844 71.9512 9.00047C71.9512 10.1825 71.9564 10.3314 71.9788 10.7959C71.9864 11.1573 72.0588 11.515 72.1929 11.8535C72.3085 12.1441 72.4899 12.4073 72.7243 12.6247C72.9543 12.8463 73.2326 13.0178 73.54 13.1272C73.898 13.254 74.2763 13.3224 74.6585 13.3296C75.1498 13.3503 75.3066 13.3557 76.5575 13.3557C77.8083 13.3557 77.9651 13.3507 78.4564 13.3296C78.8387 13.3224 79.2169 13.254 79.575 13.1272C79.8808 13.0151 80.1586 12.8439 80.3905 12.6245C80.6224 12.4051 80.8033 12.1424 80.9216 11.8531C81.0557 11.5145 81.1281 11.1569 81.1357 10.7955C81.1576 10.3314 81.1629 10.1825 81.1629 9.00047C81.1629 7.81844 81.1576 7.66955 81.1353 7.20503C81.1276 6.84359 81.0553 6.48598 80.9212 6.14743C80.8055 5.85685 80.6241 5.59365 80.3898 5.37621C80.1598 5.15459 79.8814 4.98311 79.5741 4.87374C79.216 4.74697 78.8378 4.67853 78.4555 4.67134C77.9647 4.65061 77.8072 4.64563 76.557 4.64563Z"
                                        fill="#004F2B"
                                    />
                                    <path
                                        d="M76.5581 6.76511C76.0903 6.76511 75.633 6.89626 75.244 7.14199C74.8551 7.38772 74.5519 7.73699 74.3729 8.14562C74.1939 8.55425 74.1471 9.0039 74.2383 9.4377C74.3296 9.8715 74.5548 10.27 74.8856 10.5827C75.2164 10.8955 75.6379 11.1085 76.0967 11.1948C76.5555 11.2811 77.031 11.2368 77.4632 11.0675C77.8954 10.8982 78.2648 10.6116 78.5247 10.2438C78.7846 9.87609 78.9233 9.44372 78.9233 9.00142C78.9233 8.40831 78.6741 7.8395 78.2306 7.42011C77.787 7.00072 77.1854 6.76511 76.5581 6.76511ZM76.5581 10.453C76.2544 10.453 75.9576 10.3679 75.7051 10.2084C75.4527 10.0489 75.2559 9.82218 75.1397 9.55693C75.0235 9.29168 74.9931 8.99981 75.0523 8.71822C75.1115 8.43664 75.2578 8.17799 75.4725 7.97497C75.6872 7.77196 75.9608 7.63371 76.2586 7.5777C76.5564 7.52169 76.8651 7.55043 77.1456 7.6603C77.4262 7.77017 77.6659 7.95623 77.8346 8.19495C78.0033 8.43366 78.0934 8.71432 78.0934 9.00142C78.0934 9.38641 77.9316 9.75563 77.6437 10.0279C77.3558 10.3001 76.9653 10.453 76.5581 10.453Z"
                                        fill="#004F2B"
                                    />
                                    <path
                                        d="M79.0161 7.19873C79.3213 7.19873 79.5688 6.96476 79.5688 6.67615C79.5688 6.38753 79.3213 6.15356 79.0161 6.15356C78.7108 6.15356 78.4634 6.38753 78.4634 6.67615C78.4634 6.96476 78.7108 7.19873 79.0161 7.19873Z"
                                        fill="#004F2B"
                                    />
                                    <path
                                        d="M108.108 12.3H106.508V7.101H108.108V12.3ZM107.308 6.434C106.731 6.434 106.442 6.167 106.442 5.634C106.44 5.52704 106.462 5.42096 106.505 5.32307C106.548 5.22519 106.612 5.13782 106.692 5.067C106.859 4.91143 107.08 4.82773 107.308 4.834C107.885 4.834 108.174 5.102 108.174 5.635C108.174 6.168 107.886 6.434 107.308 6.434ZM114.042 12.3H112.409V9.4C112.409 8.645 112.141 8.267 111.608 8.267C111.186 8.267 110.909 8.478 110.774 8.9C110.731 8.967 110.708 9.101 110.708 9.3V12.3H109.075V8.767C109.075 7.967 109.063 7.412 109.042 7.101H110.442L110.542 7.8C110.909 7.244 111.442 6.967 112.175 6.967C112.732 6.967 113.181 7.161 113.525 7.55C113.871 7.939 114.043 8.5 114.043 9.234V12.3H114.042ZM110.075 18C105.112 18 101.075 13.963 101.075 9C101.075 4.037 105.112 0 110.075 0C115.038 0 119.075 4.037 119.075 9C119.075 13.963 115.038 18 110.075 18ZM110.075 2C106.216 2 103.075 5.141 103.075 9C103.075 12.859 106.216 16 110.075 16C113.934 16 117.075 12.859 117.075 9C117.075 5.141 113.934 2 110.075 2Z"
                                        fill="#004F2B"
                                    />
                                </svg>
                            </div>
                        </div>
                        <div class="footer_box text-left">
                            <span
                                style="
                                    color: #737373;
                                    text-align: justify;
                                    font-size: 18px;
                                    font-style: normal;
                                    font-weight: 500;
                                    letter-spacing: -0.36px;
                                "
                                >Quick Links</span
                            >
                            <ul class="quick_links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Documents</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Search</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer_box text-left">
                            <h5>Contacts</h5>
                            <ul
                                class="footer_list"
                                style="padding: 0; list-style: none"
                            >
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            clip-rule="evenodd"
                                            d="M12 21.1886L12.7211 20.376C13.5394 19.4389 14.2754 18.5497 14.9303 17.704L15.4709 16.9909C17.728 13.9497 18.8571 11.536 18.8571 9.75203C18.8571 5.94403 15.7874 2.85718 12 2.85718C8.21257 2.85718 5.14286 5.94403 5.14286 9.75203C5.14286 11.536 6.272 13.9497 8.52915 16.9909L9.06972 17.704C10.0039 18.9011 10.9813 20.0626 12 21.1886Z"
                                            stroke="#004F2B"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M12 12.5715C13.578 12.5715 14.8571 11.2923 14.8571 9.71432C14.8571 8.13636 13.578 6.85718 12 6.85718C10.422 6.85718 9.14286 8.13636 9.14286 9.71432C9.14286 11.2923 10.422 12.5715 12 12.5715Z"
                                            stroke="#004F2B"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                    <p>
                                        No. 28, Port Harcourt Crescent, Off
                                        Gimbiya Street, P.M.B 564, Area 11
                                        Garki, Abuja, Nigeria.
                                    </p>
                                </li>
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M19.95 21C17.8667 21 15.8043 20.55 13.763 19.65C11.7217 18.75 9.86733 17.4667 8.2 15.8C6.53333 14.1333 5.25 12.2833 4.35 10.25C3.45 8.21667 3 6.15 3 4.05V3H8.9L9.825 8.025L6.975 10.9C7.34167 11.55 7.75 12.1667 8.2 12.75C8.65 13.3333 9.13333 13.875 9.65 14.375C10.1333 14.8583 10.6627 15.321 11.238 15.763C11.8133 16.205 12.434 16.6173 13.1 17L16 14.1L21 15.125V21H19.95Z"
                                            fill="#004F2B"
                                        />
                                    </svg>
                                    <p>
                                        +234 92 920 263, +2348168401851,
                                        +2340752420189
                                    </p>
                                </li>
                                <li>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >
                                        <path
                                            d="M20 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6C22 4.9 21.1 4 20 4ZM19.6 8.25L12.53 12.67C12.21 12.87 11.79 12.87 11.47 12.67L4.4 8.25C4.29973 8.19371 4.21192 8.11766 4.14189 8.02645C4.07186 7.93525 4.02106 7.83078 3.99258 7.71937C3.96409 7.60796 3.9585 7.49194 3.97616 7.37831C3.99381 7.26468 4.03434 7.15581 4.09528 7.0583C4.15623 6.96079 4.23632 6.87666 4.33073 6.811C4.42513 6.74533 4.53187 6.69951 4.6445 6.6763C4.75712 6.65309 4.87328 6.65297 4.98595 6.67595C5.09863 6.69893 5.20546 6.74453 5.3 6.81L12 11L18.7 6.81C18.7945 6.74453 18.9014 6.69893 19.014 6.67595C19.1267 6.65297 19.2429 6.65309 19.3555 6.6763C19.4681 6.69951 19.5749 6.74533 19.6693 6.811C19.7637 6.87666 19.8438 6.96079 19.9047 7.0583C19.9657 7.15581 20.0062 7.26468 20.0238 7.37831C20.0415 7.49194 20.0359 7.60796 20.0074 7.71937C19.9789 7.83078 19.9281 7.93525 19.8581 8.02645C19.7881 8.11766 19.7003 8.19371 19.6 8.25Z"
                                            fill="#004F2B"
                                        />
                                    </svg>
                                    <p>info@nitda.gov.ng</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row copy-row" style="padding: 30px 0">
                    <div class="col-md-12 copy-text" style="font-size: 14px">
                        Copyright @2023 NITDA. All Rights Reserved | Developed
                        By: Bariansystems Limited
                    </div>
                </div>
            </div>
            <link
                rel="stylesheet"
                href="assets/scripts/iconsmind/line-icons.min.css"
            />
            <script
                async
                src="assets/scripts/bootstrap/js/bootstrap.min.js"
            ></script>
            <script
                type="text/javascript"
                src="assets/scripts/imagesloaded.min.js"
            ></script>
            <script
                type="text/javascript"
                src="assets/scripts/parallax.min.js"
            ></script>
            <script
                type="text/javascript"
                src="assets/scripts/flexslider/jquery.flexslider-min.js"
            ></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/isotope.min.js"
            ></script>
            <script
                type="text/javascript"
                src="assets/scripts/google.maps.min.js"
            ></script>
            <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/php/contact-form.js"
            ></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/jquery.progress-counter.js"
            ></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/jquery.tab-accordion.js"
            ></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/bootstrap/js/bootstrap.popover.min.js"
            ></script>
            <script
                type="text/javascript"
                async
                src="assets/scripts/jquery.magnific-popup.min.js"
            ></script>
            <script src="assets/scripts/social.stream.min.js"></script>
            <script src="assets/scripts/smooth.scroll.min.js"></script>
        </footer>
    </body>

    <!-- Mirrored from templates.framework-y.com/techline/demo-main/index-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 13:32:26 GMT -->
</html>
