<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DASH | @yield('title')</title>
  <!-- Icon Fontawesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css" />
  <!-- Bootstrap 5 style -->
  <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('website/assets/css/bootstrap-rtl.css')}}">
  <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('website/assets/css/main.css')}}" />
  <link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css')}}" />

  <!-- cdn bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- bootstrap Icon v 1.9.1 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <!-- swiper css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

  <script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  @yield('styles')

</head>

<body>
  <!-- Start Loading -->
  <div class="page-loader js-page-loader fade-out" >
    <div></div>
  </div>
  <!-- End Loading -->

  <!-- start offCanves -->
  <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel">
        <img src="{{ asset('website/assets/img/logo.png')}}" alt="logoOff" loading="lazy">
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="  ">
        <div class="menu">


          <div class="inside_menu">
            <div class="row">
                <div class="col-2">
                  <i class="fa-light fa-circle-user pt-2"></i>
                </div>
                <div class="col-6">
                  <span class="name">
                    خديجة محمد
                    <p class="order">طلب تمويل</p>
                  </span>
                </div>

                <div class="dropdown d-inline-block col-2">
                  <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-angle-down pt-2"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">INR</a></li>
                    <li><a class="dropdown-item" href="#">GBP</a></li>
                  </ul>
                </div>
              </div>

            <a href="#" class=" link">
              <img src="{{ asset('website/assets/img/Icons/logoIcon.png')}}" class="ms-3" alt="logoIcon" loading="lazy" />
              موّل مشترياتك
            </a>

            <a href="#" class="navLink active">
              <i class="bi bi-cart"></i>
              المشتريات
            </a>

            <a href="#" class="navLink">
              <i class="fa-regular fa-credit-card"></i>
              معلومات الدفع
            </a>

            <a href="#" class="navLink">
              <i class="fa-regular fa-house-chimney-user"></i>
              الموردين
            </a>

            <a href="#" class="navLink">
              <i class="fa-sharp fa-light fa-id-card"></i>
              معلوماتي
            </a>

            <a href="#" class="navLink">
              <i class="fa-light fa-comment-dots"></i>
              الشكاوي
            </a>
          </div>

          <div class="inform">
            <div class="tabs">
                <div class="tab">
                  <label class="tab-label mt-4" for="chck1">
                    <p href="" class="link ">
                      <i class="fa-regular fa-circle-info ms-2"></i>
                      ثمار
                      <i class="fa-solid fa-chevron-left me-4 "></i>
                    </p>
                  </label>
                  <div class="tab-content d-none">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                  </div>
                </div>
            </div>

          </div>





          <div class="logout">
            <a href="" class="link pt-4">
              <i class="fa-light fa-arrow-up-left-from-circle"></i>
              تسجيل خروج
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End offCanves -->

  <!-- Start Nav -->
  <nav class="navbar navbar-expand-lg py-3 fixed-top bg-white" id="navbar-example2">
    <div class="container-fluid px-md-5 px-1">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('website/assets/img/logo.png')}}" alt="LOGO" loading="lazy" />
      </a>
      <button class="navbar-toggler order-last ms-3" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <i class="bi bi-grid text-dark"></i>
      </button>

      <div class="collapse navbar-collapse nav  px-5" id="navbarSupportedContent">
        <div class="row">
          <div class="col-2">
            <i class="fa-light fa-circle-user"></i>
          </div>
          <div class="col-6">
            <span class="name">
              خديجة محمد
              <p class="order">طلب تمويل</p>
            </span>
          </div>

          <div class="dropdown d-inline-block col-2">
            <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-regular fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">USD</a></li>
              <li><a class="dropdown-item" href="#">INR</a></li>
              <li><a class="dropdown-item" href="#">GBP</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="nav end ms-lg-auto flex-grow-0 " id="navbarSupportedContent">
        <a class="nav-link cartt pt-2" href="#">
          <i class="fa-regular fa-bell"><span class="num"></span></i>
        </a>
        <div class="dropdown d-inline-block col-2 w-25">
          <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <a class="nav-link Lang" href="">
              <span>En</span>
            </a>
          </button>
          <ul class="dropdown-menu w-50">
            <li><a class="dropdown-item" href="#">En</a></li>
            <li><a class="dropdown-item" href="#">Ar</a></li>
            <li><a class="dropdown-item" href="#">Tr</a></li>
          </ul>
        </div>

      </div>
    </div>
  </nav>
  <!-- End Nav -->


  <!-- Start Hero -->
  <section class="hero ">


    <div class="row p-0">
      <div class="col-2 LefSide LResponsive">
        <div class="menu">
          <div class="inside_menu">
            <a href="#" class="link">
              <img src="{{asset('website/assets/img/Icons/logoIcon.png')}}" class="ms-3" alt="logoIcon" loading="lazy" />
              موّل مشترياتك
            </a>

            <a href="#" class="link active">
              <i class="bi bi-cart"></i>
              المشتريات
            </a>

            <a href="#" class="link">
              <i class="fa-regular fa-credit-card"></i>
              معلومات الدفع
            </a>

            <a href="#" class="link">
              <i class="fa-regular fa-house-chimney-user"></i>
              الموردين
            </a>

            <a href="#" class="link">
              <i class="fa-sharp fa-light fa-id-card"></i>
              معلوماتي
            </a>

            <a href="#" class="link">
              <i class="fa-light fa-comment-dots"></i>
              الشكاوي
            </a>
          </div>

          <div class="inform">

            <div class="tabs">
              <div class="tab">
                <label class="tab-label mt-4" for="chck1">
                  <p href="" class="link ">
                    <i class="fa-regular fa-circle-info ms-2"></i>
                    ثمار
                    <i class="fa-solid fa-chevron-left me-4 "></i>
                  </p>
                </label>
                <div class="tab-content d-none">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
                </div>
              </div>





            </div>


          </div>





          <div class="logout">
            <a href="" class="link pt-4">
              <i class="fa-light fa-arrow-up-left-from-circle"></i>
              تسجيل خروج
            </a>
          </div>
        </div>
      </div>

      <div class="col-10 rightSide  ">
        @yield('content')


        <footer>
          <div class="container allcontent pb-4 pt-5">
            <div class="upperside row row-cols-2">
              <div class="info  col-8">
                <a href="" class="contctUs">اتصل بنا</a>
                <a href="" class="email">info@themar.sa</a>
                <p class="d-inline-block">
                  <a href="" class="number">850-015-5418</a>
                </p>
              </div>

              <div class="ContactUs  col-4">
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
              </div>
            </div>
            <div class="downSide">

              <p class="bigText">
              <p>تنويه المسؤولية</p>
              <p>طورت لوا أحد أفضل فرق وتقنيات التحليل الإئتماني في المنطقة،
                ونستخدم هذه التقنيات من أجل مساعدة المستثمرين على اتخاذ
                القرارات الاستثمارية التي تناسبهم عبر العلامات الائتمانية
                المفصلة لكل قرض. ورت لوا أحد أفضل فرق وتقنيات التحليل
                الإئتماني في المنطقة، ونستخدم هذه التقنيات من التحليل
                الإئتماني في المنطقة، ونستخدم هذه التقنيات من أجل مساعدة
                المستثمرين على اتخاذ القرارات الاستثمارية التي تناسبهم عبر
                العلامات الائتمانية أجل مساعدة المستثمرين على اتخاذ القرارات
                الاستثمارية التي تناسبهم عبر العلامات الائتمانية المفصلة لكل
                قرض. ورت لوا أحد أفضل فرق وتقنيات المفصلة لكل قرض.
              </p>
              <p class="mt-4">
                <span class="">© حقوق الطبع والنشر 2020. - جميع الحقوق محفوظة لشركة ثمار طور بواسطة EDESIGN.</span>
                <span class="policy">الأسئلة الشائعة سياسة الخصوصية</span>
              </p>

              </p>

            </div>
          </div>
        </footer>
      </div>
    </div>
  </section>
  <!-- End Hero -->






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="{{ asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('website/assets/js/custom.js')}}"></script>

  @yield('scripts')


</body>

</html>
