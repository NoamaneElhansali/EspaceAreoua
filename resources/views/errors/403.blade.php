<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - EasyFolio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
.language-selector {
  position: relative;
  width: auto;
}


.language-selector select {
  appearance: none;
  padding: 8px 15px 8px 40px;
  background: white;
  border-radius: 6px;
  cursor: pointer;
}

.selected-flag {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  width: 20px;
  height: 15px;
  background-size: cover;
}

.flag-fr {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 9 6'%3E%3Crect width='3' height='6' fill='%23002395'/%3E%3Crect x='3' width='3' height='6' fill='white'/%3E%3Crect x='6' width='3' height='6' fill='%23ED2939'/%3E%3C/svg%3E");
  background-size: cover;
}

.flag-ma {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 60 40'%3E%3Crect width='60' height='40' fill='%23C1272D'/%3E%3Cpath d='M30 12l3.5 10.8h11.3l-9.1 6.6 3.5 10.8-9.2-6.6-9.1 6.6 3.5-10.8-9.1-6.6h11.3z' fill='%23006633'/%3E%3C/svg%3E");
}
/* Style pour l'icône de login */
.login-icon {
  position: relative;
  display: flex;
  align-items: center;
}

.login-circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: linear-gradient(135deg, #e87532 0%, #f3945c 100%);
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  cursor: pointer;
}

.login-circle:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.login-circle i {
  font-size: 1.2rem;
}

.login-tooltip {
  position: absolute;
  top: 100%;
  right: 0;
  background: #333;
  color: white;
  padding: 5px 10px;
  border-radius: 4px;
  font-size: 0.8rem;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s;
  transform: translateY(10px);
}

.login-btn:hover .login-tooltip {
  opacity: 1;
  visibility: visible;
  transform: translateY(5px);
}

/* Responsive */
@media (max-width: 768px) {
  .login-circle {
    width: 36px;
    height: 36px;
  }
}


/* style erorr */

      /* body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          background: #f8f9fa;
          font-family: 'Roboto', sans-serif;
          margin: 0;
      } */
      .error-container {
          text-align: center;
          padding: 30px;
      }
      .error-code {
          font-size: 120px;
          font-weight: 700;
          color: #e87532;
      }
      .error-message {
          font-size: 24px;
          margin-bottom: 20px;
          color: #333;
      }
      .error-description {
          font-size: 16px;
          margin-bottom: 30px;
          color: #666;
      }
      .btn-home {
          background: linear-gradient(135deg, #e87532 0%, #f3945c 100%);
          border: none;
          padding: 10px 30px;
          font-size: 16px;
          border-radius: 30px;
          color: white;
          transition: background 0.3s ease;
      }
      .btn-home:hover {
          background: linear-gradient(135deg, #d45c21 0%, #f08045 100%);
      }
  </style>
</head>

<body @if (app()->getLocale() == "ar")
  dir="rtl"
@endif class="index-page">

<header dir="ltr" id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home-page') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">EspaceAreoua</h1>
      </a>

      <nav @if (app()->getLocale() == "ar")
        dir="rtl"
      @endif id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ route('home-page') }}#@lang("Home")" class="active">@lang("Home")</a></li>
            <li><a href="{{ route('home-page') }}#@lang("About")">@lang("About")</a></li>
            <li><a href="{{ route('home-page') }}#@lang("Catalogue")">@lang("Catalogue")</a></li>
            <li><a href="{{ route('home-page') }}#@lang("Services")">@lang("Services")</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="{{ route('home-page') }}#@lang("Contact")">@lang("Contact")</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <div class="language-selector">
        <select class="form-select ps-5 border-0 shadow-sm" 
                aria-label="Select language"
                onchange="window.location.href = this.value">
          @foreach([
            'fr' => ['fr', 'Français'],
            'ar' => ['sa', 'العربية']
          ] as $code => $data)
            <option value="{{ route('lang.switch', $code) }}"
                    {{ app()->getLocale() === $code ? 'selected' : '' }}
                    data-icon="flag-{{ $data[0] }}">
              {{ $code == 'ar' ? 'العربية' : 'Français' }}
            </option>
          @endforeach
        </select>
        <div class="selected-flag flag-{{ app()->getLocale() == 'ar' ? 'ma' : 'fr' }}"></div>
      </div>
          <!-- Nouveau bouton de login -->
          <div class="login-icon ms-3">
            <a href="#" class="login-btn" data-bs-toggle="modal" data-bs-target="#loginModal" aria-label="Login">
              <div class="login-circle">
                <i class="bi bi-person-fill"></i>
                <span class="login-tooltip">Se connecter</span>
              </div>
            </a>
          </div>



    </div>
  </header>




  <div class="error-container">
    <div class="error-code">403</div>
    <div class="error-message">@lang("Accès interdit")</div>
    <div class="error-description">@lang("Désolé, vous n'avez pas l'autorisation d'accéder à cette page.")</div>
    <a href="{{ url('/') }}" class="btn btn-home">@lang("Retour à l'accueil")</a>
</div>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>