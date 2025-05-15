<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - Devîte</title>
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

  <style>
    .contact-section {
      background-color: #ee884d2c;
      padding: 40px 0;
    }
    
    .contact-header {
      margin-bottom: 40px;
    }
    
    .contact-header h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 15px;
    }
    
    .contact-header h2 {
      font-size: 1.5rem;
      font-weight: 400;
      color: #6c757d;
    }
    
    .contact-form {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    
    .form-group {
      margin-bottom: 25px;
    }

    .form-check:focus{
        box-shadow: none;
    }
    
    .form-label {
      font-weight: 500;
      margin-bottom: 8px;
      display: block;
    }
    
    .form-control {
      border: 1px solid #ced4da;
      border-radius: 5px;
      padding: 12px 15px;
    }
    
    .form-control:focus {
      border-color: #e87532;
      box-shadow: none;
    }
    
    .required-field::after {
      content: " *";
      color: red;
    }
    
    .services-checkbox {
      margin-bottom: 15px;
    }
    
    .file-upload {
      border: 2px dashed #dee2e6;
      border-radius: 5px;
      padding: 30px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .file-upload:hover {
      border-color: #adb5bd;
      background-color: #f8f9fa;
    }
    
    .submit-btn {
      background-color: #e87532;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 5px;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .submit-btn:hover {
      background-color: #0069d9;
    }
    
    .certification-badge {
      display: inline-block;
      background-color: #f1f1f1;
      padding: 5px 15px;
      border-radius: 20px;
      margin-right: 10px;
      margin-bottom: 10px;
      font-size: 0.9rem;
    }
    
    .recruitment-section {
      background-color: #f1f8ff;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 30px;
    }
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


.session-alert {
        position: fixed;
        bottom: 20px;
        right: 20px;
        max-width: 400px;
        width: 90%;
        z-index: 1000;
        animation: slideIn 0.5s forwards, fadeOut 0.5s 4.5s forwards;
        transform: translateX(150%);
        opacity: 0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }

    .success {
        background: #f0fdf4;
        border-left: 4px solid #10b981;
    }

    .alert-content {
        display: flex;
        align-items: center;
        padding: 16px;
    }

    .alert-icon {
        width: 24px;
        height: 24px;
        flex-shrink: 0;
        margin-right: 12px;
    }

    .success .alert-icon {
        color: #10b981;
    }

    .alert-text {
        flex-grow: 1;
    }

    .alert-message {
        margin: 0;
        font-weight: 500;
        color: #111827;
    }

    .alert-meta {
        margin: 4px 0 0;
        font-size: 0.875rem;
        color: #6b7280;
    }

    .alert-close {
        background: none;
        border: none;
        cursor: pointer;
        margin-left: 12px;
        color: #9ca3af;
        padding: 4px;
        border-radius: 4px;
        transition: background 0.2s;
    }

    .alert-close:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .alert-close svg {
        width: 20px;
        height: 20px;
        display: block;
    }

    @keyframes slideIn {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        to {
            opacity: 0;
            transform: translateX(150%);
        }
    }
    .text-red{
        color: red;
    }

  </style>
</head>

<body class="contact-page">

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
    

  <main class="main">
    <section class="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="contact-form">

              <form action="{{ route('create-demande-service') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="phone" class="form-label required-field">Téléphone</label>
                        @error('tel')
                            <small class="text-red">{{ $message }}</small>
                        @enderror
                        <input type="tel" value="{{ old("tel") }}" name="tel" class="form-control" id="phone" placeholder="+212 ---">
                    </div>

                <div class="form-group">
                  <label class="form-label required-field">Services souhaités</label>
                  @php
                        $firstError = collect($errors->get('serviceDemande.*'))->flatten()->first();
                      @endphp
                    @error('serviceDemande')
                        <small class="text-red">{{ $message }}</small>
                    @enderror
                    @if ($firstError)
                          <small class="text-danger">{{ $firstError }}</small><br>
                      @endif
                  <div class="services-checkbox row-auto grid-cols-2">
                    <div class="row">
                        <div class="form-check col-md-4 col-sm-6">
                            <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="businessCards" id="businessCards">
                            <label class="form-check-label" for="businessCards">@lang('Cartes de visite')</label>
                          </div>
                          
                          <div class="form-check col-md-4 col-sm-6">
                            <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="flyers" id="flyers">
                            <label class="form-check-label" for="flyers">@lang('Flyers & Tracts')</label>
                          </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="brochures" id="brochures">
                        <label class="form-check-label" for="brochures">@lang('Brochures & Catalogues')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="banners" id="banners">
                        <label class="form-check-label" for="banners">@lang('Bâches publicitaires')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="tshirts" id="tshirts">
                        <label class="form-check-label" for="tshirts">@lang('T-shirts & vêtements personnalisés')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="stickers" id="stickers">
                        <label class="form-check-label" for="stickers">@lang('Stickers personnalisés')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="envelopes" id="envelopes">
                        <label class="form-check-label" for="envelopes">@lang('Enveloppes personnalisées')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="invoices" id="invoices">
                        <label class="form-check-label" for="invoices">@lang('Facturiers / Carnets autocopiants')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="letterheads" id="letterheads">
                        <label class="form-check-label" for="letterheads">@lang('Papiers en-tête')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="calendars" id="calendars">
                        <label class="form-check-label" for="calendars">@lang('Calendriers personnalisés')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="paperBags" id="paperBags">
                        <label class="form-check-label" for="paperBags">@lang('Sacs en papier personnalisés')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="signboards" id="signboards">
                        <label class="form-check-label" for="signboards">@lang('Panneaux publicitaires')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="branding" id="branding">
                        <label class="form-check-label" for="branding">@lang('Logos & chartes graphiques')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="graphicDesign" id="graphicDesign">
                        <label class="form-check-label" for="graphicDesign">@lang('Design graphique sur mesure')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="laserCut" id="laserCut">
                        <label class="form-check-label" for="laserCut">@lang('Découpe laser & gravure')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="specialSurfaces" id="specialSurfaces">
                        <label class="form-check-label" for="specialSurfaces">@lang('Impression sur verre, bois et métal')</label>
                      </div>
                      
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="photoShoot" id="photoShoot">
                        <label class="form-check-label" for="photoShoot">@lang('Shooting photo & vidéo')</label>
                      </div>
                      <div class="form-check col-md-4 col-sm-6">
                        <input class="form-check-input" type="checkbox" name="serviceDemande[]" value="autre" id="autre">
                        <label class="form-check-label" for="autre">@lang('Autre')</label>
                      </div>
                    </div>               
                  </div>
                </div>

                <div class="form-group">
                  <label for="message" class="form-label">Comment pouvons-nous vous aider ?</label>
                  @error('descriptionDemande')
                      <small class="text-red">{{ $message }}</small>
                  @enderror
                  <textarea name="descriptionDemande" class="form-control" id="message" rows="5" placeholder="Expliquez-nous votre vision, vos objectifs et les besoins spécifiques de votre projet.">{{ old("descriptionDemande") }}</textarea>
                </div>

                <div class="form-group">
                  <label class="form-label">Fichiers joints</label>
                  @error('fileImages')
                      <small class="text-red">{{ $message }}</small><br>
                  @enderror
                @php
                  $firstErrorImage = collect($errors->get('fileImages.*'))->flatten()->first();
                @endphp
                @if ($firstErrorImage)
                    <small class="text-danger">{{ $firstErrorImage }}</small>
                @endif
                  <div class="file-upload">
                    <p>Glissez-déposez vos fichiers ici</p>
                    <p class="text-muted small">ou cliquez pour sélectionner des fichiers(.png,.jpeg...)</p>
                    <input type="file" name="fileImages[]" class="d-none" id="fileInput" accept="image/*" multiple>
                  </div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="submit-btn w-100">Envoyer</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  {{-- model de demande send success --}}
  @if (session('success'))
  <div id="session-alert" class="session-alert success">
      <div class="alert-content">
          <svg class="alert-icon" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" />
            </svg>
            <div class="alert-text">
                <p class="alert-message">{{ session('success') }}</p>
                <p class="alert-meta">{{ now()->format('d/m/Y H:i') }} - Nous vous contacterons bientôt</p>
        </div>
        <button class="alert-close" onclick="closeAlert()">
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
        </button>
    </div>
</div>

<script>
    function closeAlert() {
        const alert = document.getElementById('session-alert');
        alert.style.animation = 'fadeOut 0.5s forwards';
        setTimeout(() => alert.remove(), 500);
    }

    // Fermeture automatique après 5 secondes
    setTimeout(() => {
        const alert = document.getElementById('session-alert');
        if (alert) closeAlert();
    }, 5000);
</script>
@endif
  {{-- dd --}}

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
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script>
    // Handle file upload UI
    document.querySelector('.file-upload').addEventListener('click', function() {
      document.getElementById('fileInput').click();
    });
    
    document.getElementById('fileInput').addEventListener('change', function() {
      if (this.files.length > 0) {
        const fileNames = Array.from(this.files).map(file => file.name).join(', ');
        document.querySelector('.file-upload p:first-child').textContent = `${this.files.length} fichier(s) sélectionné(s)`;
        document.querySelector('.file-upload p.text-muted').textContent = fileNames;
      }
    });
    
    // Allow drag and drop
    const fileUpload = document.querySelector('.file-upload');
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      fileUpload.addEventListener(eventName, preventDefaults, false);
    });
    
    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }
    
    ['dragenter', 'dragover'].forEach(eventName => {
      fileUpload.addEventListener(eventName, highlight, false);
    });
    
    ['dragleave', 'drop'].forEach(eventName => {
      fileUpload.addEventListener(eventName, unhighlight, false);
    });
    
    function highlight() {
      fileUpload.classList.add('bg-light');
    }
    
    function unhighlight() {
      fileUpload.classList.remove('bg-light');
    }
    
    fileUpload.addEventListener('drop', handleDrop, false);
    
    function handleDrop(e) {
      const dt = e.dataTransfer;
      const files = dt.files;
      document.getElementById('fileInput').files = files;
      
      if (files.length > 0) {
        const fileNames = Array.from(files).map(file => file.name).join(', ');
        document.querySelector('.file-upload p:first-child').textContent = `${files.length} fichier(s) déposé(s)`;
        document.querySelector('.file-upload p.text-muted').textContent = fileNames;
      }
    }
  </script>

  
</body>

</html>