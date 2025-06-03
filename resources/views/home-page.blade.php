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


/* style de model complete profile */
.modal-content {
    backdrop-filter: blur(10px);
    background-color: rgba(255, 255, 255, 0.85) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    padding: 2rem;
  }
  
  .form-control {
    border-radius: 0 !important;
    padding-left: 0 !important;
    box-shadow: none !important;
    background-color: transparent !important;
  }
  
  .form-control:focus {
    box-shadow: none !important;
  }
  
  .border-animation {
    height: 1px;
    background: linear-gradient(90deg, transparent, #000, transparent);
    width: 0;
    transition: width 0.3s ease;
  }
  
  .form-floating:focus-within .border-animation {
    width: 100%;
  }
  
  .form-floating>label {
    padding-left: 0 !important;
    color: #666;
    font-weight: 300;
  }
  
  .letter-spacing-1 {
    letter-spacing: 1px;
  }
  
  .fs-7 {
    font-size: 0.8rem;
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
          @if (auth()->user()->type_user == 'admin')
            <li class="dropdown"><a href="{{ route('home-page') }}#@lang("Catalogue")"><span>@lang("Catalogue")</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('catalogue.admin') }}">@lang('Cree Catalogue')</a></li>
            </ul>
          </li>
          <li><a href="{{ route("admin-demande-service") }}">@lang("Demandes")</a></li>
          @else
          <li><a href="{{ route('home-page') }}#@lang("Catalogue")">@lang("Catalogue")</a></li>
          @endif
          <li><a href="{{ route('home-page') }}#@lang("Services")">@lang("Services")</a></li>

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

  <main class="main">

    <!-- home Section -->
    <section id="@lang("Home")" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>@lang('welcome')</h2>
            <p class="lead">@lang('discription')</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="{{ route('demande-service') }}" class="btn btn-primary">@lang('Demander un service')</a>
              <a href="#contact" class="btn btn-outline">@lang('Voir nos réalisations')</a>
            </div>
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number">5+</span>
                <span class="stat-label">@lang("ans d'expérience")</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">100+</span>
                <span class="stat-label">@lang("projets réalisés")</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">50+</span>
                <span class="stat-label">@lang("clients satisfaits")</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/profile/profile-1.webp" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section  id="@lang("About")" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang('about')</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>@lang('discription de about')</p>
      </div><!-- End Section Title -->
      {{-- ghandir hna chi  --}}



      

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative" style="height: 600px;"> <!-- adjust height as needed -->
              <img data-aos="fade-up" data-aos-delay="300" src="{{ asset('assets/img/images areoua/image2.jpeg') }}"
                   alt="Profile Image"
                   class="img-fluid rounded-4 position-absolute"
                   style="width: 60%; top: 0; left: 0; z-index: 1; opacity: 0.9; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
              <img src="{{ asset('assets/img/images areoua/image3.webp') }}"
                   alt="Profile Image"
                   class="img-fluid rounded-4 position-absolute"
                   style="width: 70%; top: 40%; left: 35%; z-index: 2; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
          
            </div>
          </div>          

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <span class="subtitle">EspaceAreoua</span>

              <h2>@lang("Une agence de design & publicité qui façonne des identités mémorables")</h2>

              <p class="lead mb-4">@lang("disciption about after subtitle")</p>

              <div class="personal-info">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Expérience")</span>
                      <span class="value">@lang("Plus de 5 ans dans le design & la publicité")</span>
                    </div>
                  </div>
              
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Professionnalisme")</span>
                      <span class="value">@lang("Équipe créative et à l’écoute des tendances")</span>
                    </div>
                  </div>
              
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Qualité")</span>
                      <span class="value">@lang("Des designs soignés avec une attention aux détails")</span>
                    </div>
                  </div>
              
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Flexibilité")</span>
                      <span class="value">@lang("Des solutions sur mesure pour chaque projet")</span>
                    </div>
                  </div>
              
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Services complets")</span>
                      <span class="value">@lang("Branding, graphisme, impression & publicité")</span>
                    </div>
                  </div>
              
                  <div class="col-6">
                    <div class="info-item">
                      <span class="label">@lang("Clients satisfaits")</span>
                      <span class="value">@lang("Plus de 50 clients heureux de nous faire confiance")</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="@lang('Services')" class="skills section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 skills-animation">

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="skill-box">
              <h3>@lang("Logos & Identité Visuelle")</h3>
              <p>@lang("Nous créons des logos uniques et des identités visuelles fortes qui reflètent l’image de votre marque.")</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="skill-box">
              <h3>@lang("Affiches & Publicités")</h3>
              <p>@lang("Des visuels impactants pour vos campagnes d’affichage, en ligne ou imprimées, pour attirer l’attention efficacement.")</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="skill-box">
              <h3>@lang("Design Réseaux Sociaux")</h3>
              <p>@lang("Des contenus visuels engageants pour Instagram, Facebook, LinkedIn et plus, adaptés à votre image de marque.")</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="skill-box">
              <h3>@lang("Supports Imprimés")</h3>
              <p>@lang("Cartes de visite, flyers, brochures... tout est conçu avec soin pour donner une image professionnelle à votre activité.")</p>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Portfolio Section -->
    <section id="@lang("Catalogue")" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang("Catalogue de Produits")</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>@lang('Découvrez notre large gamme de produits professionnels : impression, textile, événementiel, décoration et bien plus encore. Qualité supérieure garantie.')</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              @if (count($categories) > 0)
                
                <li data-filter="*" class="filter-active">@lang('Tous les travaux')</li>
                @foreach ($categories as $key => $categorie)
                  <li data-filter=".filter-{{ \Illuminate\Support\Str::slug($categorie['categorie'], '-') }}">@lang($categorie['categorie'])</li>
                @endforeach
              @endif

            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            {{-- start --}}
            @if (count($catalogues) > 0)
              @foreach ($catalogues as $catalogue)
              <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-{{ \Illuminate\Support\Str::slug($catalogue['detail']['categorie'], '-') }}">
                <div class="portfolio-card">
                  <div class="portfolio-image">
                    <img src="{{ asset('storage/'.$catalogue['photo'][0]['photo_path']) }}" class="img-fluid" alt="" *loading="lazy">
                    <div class="portfolio-overlay">
                      <div class="portfolio-actions">
                        <a href="{{ asset('storage/'.$catalogue['photo'][0]['photo_path']) }}" class="glightbox preview-link" data-gallery="portfolio-gallery-{{ \Illuminate\Support\Str::slug($catalogue['detail']['categorie'], '-') }}"><i class="bi bi-eye"></i></a>
                        <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="portfolio-content">
                    <span class="category">{{ strtoupper(__($catalogue['detail']['categorie'])) }}</span>
                    <h3>{{ \Illuminate\Support\Str::words($catalogue['detail']['title'], 4) }}</h3>
                    <p>{{ \Illuminate\Support\Str::words($catalogue['detail']['disciption'], 12) }}</p>
                  </div>
                </div>
              </div>
              @endforeach
            @endif

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="@lang("services")" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>@lang("services")</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>@lang("Des supports imprimés captivants qui marquent les esprits.")</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h2 class="fw-bold mb-4 servies-title">@lang("Logos, identité, contenus et visuels qui captivent")</h2>
            <p class="mb-4">@lang("Nous sommes une agence de design et publicité qui transforme vos idées en une identité visuelle puissante. Logos sur mesure, contenus attractifs, supports imprimés — tout pour faire rayonner votre marque.")</p>
            <a href="#" class="btn btn-outline-primary">See all services</a>
          </div>
          <div class="col-lg-8">
            <div class="row g-4">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item">
                  <i class="bi bi-vector-pen icon"></i>
                  <h3><a href="service-details.html">@lang("Création de logos")</a></h3>
                  <p>@lang("Des logos uniques qui incarnent l’essence de votre marque.")</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item">
                  <i class="bi bi-palette icon"></i>
                  <h3><a href="service-details.html">@lang("Identité visuelle")</a></h3>
                  <p>@lang("Création de chartes graphiques cohérentes et esthétiques.")</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item">
                  <i class="bi bi-file-earmark-richtext icon"></i>
                  <h3><a href="service-details.html">@lang("Supports publicitaires")</a></h3>
                  <p>@lang("Flyers, affiches et brochures qui captivent l'attention.")</p>
                </div>
              </div><!-- End Service Item -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item">
                  <i class="bi bi-instagram icon"></i>
                  <h3><a href="service-details.html">@lang("Contenu pour réseaux sociaux")</a></h3>
                  <p>@lang("Des visuels engageants pour booster votre présence en ligne.")</p>
                </div>
              </div><!-- End Service Item -->

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    {{-- model de login --}}
    <div class="modal fade" id="loginModal" tabindex="-1" style="z-index: 1060;" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg rounded-4 border-0">
          <div dir="ltr" class="modal-header border-bottom-0">
            <h5 class="modal-title fw-bold text-primary">@lang("Connexion à votre compte")</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body px-4 pt-0 pb-4">
            <form method="POST" action="{{ route('user.login') }}">
              @csrf
              <div class="mb-3">
                <label for="loginEmail" class="form-label fw-semibold">@lang("Adresse e-mail")</label>
                <input type="email" name="email" class="form-control rounded-3" id="loginEmail" placeholder="exemple@mail.com" required>
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label fw-semibold">@lang("Mot de passe")</label>
                <input type="password" name="password" class="form-control rounded-3" id="loginPassword" placeholder="••••••••" required>
              </div>
              <button type="submit" class="btn btn-primary w-100 mt-2 rounded-3">@lang("Se connecter")</button>
            </form>
    
            <div class="text-center my-3 text-muted">@lang("ou")</div>
    
            <a href="{{ route('redirect.google') }}" class="btn btn-outline-danger w-100 rounded-3">
              <i class="bi bi-google me-2"></i> @lang("Se connecter avec Google")
            </a>
          </div>
        </div>
      </div>
    </div>
    @if (session('login'))
    <script>
      window.addEventListener('load', function () {
        var myModal1 = new bootstrap.Modal(document.getElementById('loginModal'));
        myModal1.show();
      });
  </script>
    @endif
    <script>
        window.addEventListener('load', function () {
          var myModal = new bootstrap.Modal(document.getElementById('loginModal-completer-profile'));
          myModal.show();
        });
    </script>
    <!-- Contact Section -->
    <section id="@lang("Contact")" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">@lang('Contactez-nous')</div>
              <h2 class="display-5 mb-4">@lang('Votre succès commence avec notre créativité')</h2>
              <p class="lead mb-4">@lang("Nous sommes une agence de design et de publicité innovante, dédiée à transformer vos idées en expériences visuelles uniques. Grâce à une approche créative, stratégique et sur-mesure, nous vous aidons à bâtir une image de marque forte et à captiver votre public. Ensemble, donnons vie à vos ambitions.")</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3 ms-3"></i>
                  <span> espaceareoua@gmail.com </span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3 ms-3"></i>
                  <a href="https://wa.me/212771449567">
                    <span dir="ltr"> +212771449567 </span>
                  </a>
                </div>
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3 ms-3"></i>
                  <a href="https://wa.me/212717895890">
                    <span dir="ltr"> +212717895890 </span>
                  </a>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3 ms-3"></i>
                  <span>@lang('Chichaoua,Hay El Mohammedi')</span>
                </div>

                <a href="https://maps.app.goo.gl/cKb9wgogEcfxrnr68" class="map-link d-inline-flex align-items-center">
                  @lang('Ouvrir la carte')
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                    </div>

                    <div class="col-12 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>

                      <button type="submit" class="btn btn-submit w-100">Submit Message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
  

  @if(session('first_login') || $errors->has('nameUpdate') || $errors->has('passwordUpdate'))
  <!-- Modal: Modifier le profil -->
  <div @if (app()->getLocale() == "ar")
    dir="rtl"
  @endif class="modal fade" id="loginModal-completer-profile" style="z-index: 1060;" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 bg-transparent">
        <form method="POST" action="{{ route('profile.update') }}" class="needs-validation" novalidate>
          @csrf
          <!-- En-tête minimaliste -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-light text-dark">@lang("Éditer profil")</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer" style="font-size: 0.75rem;"></button>
          </div>
          
          <!-- Corps du formulaire - style glassmorphism -->
          <div class="modal-body p-0">
            <!-- Champ Nom -->
            <div class="mb-3">
              <div class="form-floating">
                <input type="text" class="form-control bg-transparent border-0 border-bottom rounded-0 px-0" 
                       id="name" value="{{ old('nameUpdate')??auth()->user()->name }}" name="nameUpdate" required placeholder=" ">
                <label for="name" class="ps-0">@lang("Nom complet")</label>
                <div class="border-animation"></div>
                @error('nameUpdate')
                <small class="text-danger">{{ __($message) }}</small>
                @enderror
              </div>
            </div>
            
            <!-- Champ Mot de passe -->
            <div class="mb-4">
              <div class="form-floating position-relative">
                <input type="password" class="form-control bg-transparent border-0 border-bottom rounded-0 px-0" 
                       id="password" name="passwordUpdate" value="{{ old('passwordUpdate')??Illuminate\Support\Facades\Crypt::decrypt(auth()->user()->password) }}" placeholder=" ">
                <label for="password" class="ps-0">@lang("Nouveau mot de passe")</label>
                <div class="border-animation"></div>
                <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y p-0 text-muted" 
                        style="font-size: 0.8rem;" onclick="togglePassword()">
                  @lang("Afficher")
                </button>
              </div>
              @error('passwordUpdate')
                <small class="text-danger">{{ __($message) }}</small>
                @enderror
              <div class="form-text text-end" style="font-size: 0.7rem;">@lang("Optionnel")</div>
            </div>
          </div>
          
          <!-- Pied de page - boutons intégrés -->
          <div class="modal-footer d-flex justify-content-end px-0 pt-4 pb-0">
            <button type="submit" class="btn btn-dark rounded-0 px-4 py-2 text-uppercase fs-7 letter-spacing-1">
              @lang("Enregistrer")
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<script>
  window.addEventListener('load', function () {
    var myModal = new bootstrap.Modal(document.getElementById('loginModal-completer-profile'));
    myModal.show();
  });
  document.addEventListener('hidden.bs.modal', function () {
    document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
  })

  function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleBtn = document.querySelector('[onclick="togglePassword()"]');
    
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleBtn.textContent = '@lang("Masquer")';
    } else {
      passwordField.type = 'password';
      toggleBtn.textContent = '@lang("Afficher")';
    }
  }
</script>
@endif

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>{{ now()->year }} © <span>@lang('Copyright')</span> <strong class="px-1 sitename">EspaceAreoua</strong> <span>@lang('All Rights Reserved')</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.facebook.com/profile.php?id=100043306991268"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/espacareouaa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="bi bi-instagram"></i></a>
      </div>
    </div>

  </footer>
  {{-- model de lodin --}}
  
  <!-- Scroll Top -->
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