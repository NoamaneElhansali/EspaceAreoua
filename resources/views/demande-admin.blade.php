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
    .text-red{
        color: red;
    }

    /* style de affichage */
    .demandes-container {
    font-family: Arial, sans-serif;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

.demandes-container h2 {
    color: #333;
    margin-bottom: 20px;
}

.filtres {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.filtres select, .filtres input {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.liste-demandes {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.demande-card {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.demande-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.demande-nom {
    font-weight: bold;
    font-size: 18px;
}

.demande-statut {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: bold;
}

.statut-en_attente {
    background-color: #fff3cd;
    color: #856404;
}

.statut-en-cours {
    background-color: #d4edda;
    color: #155724;
}

.statut-termine {
    background-color: #f8d7da;
    color: #e87532;
}

.demande-description {
    color: #555;
    margin-bottom: 8px;
}

.demande-telephone {
    color: #666;
    font-style: italic;
}

.demande-actions {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 15px;
}

.btn-voir, .btn-supprimer {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
}

.btn-voir {
    background-color: #007bff;
    color: white;
}

.btn-voir:hover {
    background-color: #0069d9;
}

.btn-supprimer {
    background-color: #dc3545;
    color: white;
}

.btn-supprimer:hover {
    background-color: #c82333;
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



      <div class="demandes-container">
        <h2>Liste des demandes envoyées</h2>
        
        <!-- Filtres éventuels -->
        <div class="filtres">
            <select id="filtre-statut">
                <option value="all">Tous les statuts</option>
                <option value="en_attente">En attente</option>
                <option value="traitee">Traitée</option>
                <option value="rejetee">Rejetée</option>
            </select>
            <input type="text" id="recherche-nom" placeholder="Rechercher par nom...">
        </div>
        
        <!-- Liste des demandes -->
        <div class="liste-demandes">
            @if (count($demandes) >0)
                @foreach ($demandes as $demande)
                <div class="demande-card">
                    <div class="demande-header">
                        <span class="demande-nom">{{ $demande['nomCompletUser'] }}</span>
                        <span class="demande-statut {{ $demande['statusDemande'] == 'en attente'? 'statut-en_attente': ($demande['statusDemande'] == 'en cours' ? 'statut-en-cours' : 'statut-termine') }}">{{ $demande['statusDemande'] }}</span>
                    </div>
                    <div class="demande-content">
                        <p class="demande-description">{{ $demande['descriptionDemande'] }}</p>
                        <p class="demande-telephone">Tél: {{ $demande['telDemande'] }}</p>
                    </div>
                    <div class="demande-actions">
                        <button class="btn-voir">Voir détails</button>
                        <button class="btn-supprimer">Supprimer</button>
                    </div>
                </div>
                @endforeach
            @endif
            <!-- Exemple de demande -->
            <div class="demande-card">
                <div class="demande-header">
                    <span class="demande-nom">Dupont Jean</span>
                    <span class="demande-statut statut-en_attente">En attente</span>
                </div>
                <div class="demande-content">
                    <p class="demande-description">Je souhaite obtenir des informations sur les modalités de paiement pour le service premium.</p>
                    <p class="demande-telephone">Tél: 06 12 34 56 78</p>
                </div>
                <div class="demande-actions">
                    <button class="btn-voir">Voir détails</button>
                    <button class="btn-supprimer">Supprimer</button>
                </div>
            </div>
            
            <!-- Autre exemple de demande -->
            <div class="demande-card">
                <div class="demande-header">
                    <span class="demande-nom">Martin Sophie</span>
                    <span class="demande-statut statut-traitee">Traitée</span>
                </div>
                <div class="demande-content">
                    <p class="demande-description">Problème de connexion à mon compte depuis hier soir.</p>
                    <p class="demande-telephone">Tél: 07 89 12 34 56</p>
                </div>
                <div class="demande-actions">
                    <button class="btn-voir">Voir détails</button>
                    <button class="btn-supprimer">Supprimer</button>
                </div>
            </div>
        </div>
    </div>




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

  
</body>

</html>