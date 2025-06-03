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


    :root {
            --primary-color: #e87532;
            --secondary-color: #2980b9;
            --success-color: #2ecc71;
            --warning-color: #f39c12;
            --danger-color: #e74c3c;
            --light-gray: #f5f5f5;
            --dark-gray: #333;
            --medium-gray: #95a5a6;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            color: white;
            padding: 15px 20px;
            margin-bottom: 30px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        
        .back-btn {
            background-color: var(--secondary-color);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        
        .back-btn:hover {
            background-color: #1a6ea0;
        }
        
        .demande-container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 25px;
            margin-bottom: 30px;
        }
        
        .demande-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }
        
        .demande-title {
            font-size: 20px;
            color: var(--dark-gray);
            margin: 0;
        }
        
        .demande-id {
            color: var(--medium-gray);
            font-size: 14px;
        }
        
        .demande-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .detail-group {
            margin-bottom: 15px;
        }
        
        .detail-label {
            font-weight: bold;
            color: var(--dark-gray);
            display: block;
            margin-bottom: 5px;
        }
        
        .detail-value {
            padding: 10px;
            background-color: var(--light-gray);
            border-radius: 4px;
            min-height: 20px;
        }
        
        .description-value {
            min-height: 100px;
            white-space: pre-wrap;
        }
        
        .status-section {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .status-form {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .status-select {
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 14px;
            min-width: 200px;
        }
        
        .status-comment {
            flex-grow: 1;
            padding: 8px 12px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 14px;
        }
        
        .btn {
            padding: 8px 15px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.3s;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
        }
        
        .btn-success {
            background-color: var(--success-color);
            color: white;
        }
        
        .btn-success:hover {
            background-color: #27ae60;
        }
        
        .factures-section {
            margin-top: 40px;
        }
        
        .section-title {
            font-size: 18px;
            color: var(--dark-gray);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        
        .facture-list {
            display: grid;
            gap: 15px;
        }
        
        .facture-card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .facture-info {
            flex-grow: 1;
        }
        
        .facture-number {
            font-weight: bold;
            color: var(--dark-gray);
            margin-bottom: 5px;
        }
        
        .facture-date {
            color: var(--medium-gray);
            font-size: 13px;
        }
        
        .facture-actions {
            display: flex;
            gap: 10px;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 13px;
        }
        
        .no-factures {
            text-align: center;
            padding: 20px;
            color: var(--medium-gray);
            background-color: var(--light-gray);
            border-radius: 5px;
        }
        
        .status-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            color: white;
        }
        
        .status-pending {
            background-color: var(--warning-color);
        }
        
        .status-approved {
            background-color: var(--success-color);
        }
        
        .status-rejected {
            background-color: var(--danger-color);
        }
        
        .status-processing {
            background-color: var(--primary-color);
        }
  </style>
</head>

<body @if (app()->getLocale() == "ar")
    dir="rtl"
@endif class="contact-page">

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




      <div class="container">
        <div class="header shadow-lg">
            <h1>@lang('Détails de la Demande')</h1>
            <a href="#" class="btn btn-primary">@lang('Retour à la liste')</a>
        </div>
        
        <div class="demande-container">
            <div class="demande-header">
                <h2 class="demande-title">@lang('Demande de service')</h2>
                <span class="demande-id">15 mars 2023, 14:30</span>
            </div>
            
            <div class="demande-details">
                <div>
                    <div class="detail-group">
                        <span class="detail-label">@lang('Client')</span>
                        <div class="detail-value">Jean Dupont</div>
                    </div>
                    
                    <div class="detail-group">
                        <span class="detail-label">@lang('Téléphone')</span>
                        <div class="detail-value">+1 514 555 1234</div>
                    </div>
                    
                    <div class="detail-group">
                        <span class="detail-label">@lang('Email')</span>
                        <div class="detail-value">jean.dupont@example.com</div>
                    </div>
                </div>
                
                <div>
                    <div class="detail-group">
                        <span class="detail-label">@lang('Date de création')</span>
                        <div class="detail-value">15 mars 2023, 14:30</div>
                    </div>
                    
                    <div class="detail-group">
                        <span class="detail-label">@lang('Type de service')</span>
                        <div class="detail-value">Réparation électrique</div>
                    </div>
                    
                    <div class="detail-group">
                        <span class="detail-label">@lang('Statut actuel')</span>
                        <div class="detail-value">
                            <span class="status-badge status-processing">En traitement</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="detail-group">
                <span class="detail-label">@lang('Description')</span>
                <div class="detail-value description-value">
                    Le circuit électrique de la cuisine ne fonctionne plus depuis hier soir. 
                    Plusieurs prises et l'éclairage ne marchent plus. 
                    J'ai essayé de réinitialiser le disjoncteur mais sans succès.
                    Une intervention rapide serait appréciée.
                </div>
            </div>
            
            <div class="status-section">
                <h3 class="section-title">@lang('Mettre à jour le statut')</h3>
                <form class="status-form">
                    <select class="status-select">
                        <option value="pending">@lang('En attente')</option>
                        <option value="processing" selected>@lang('En Cours')</option>
                        <option value="completed">@lang('Terminé')</option>
                    </select>
                    
                    <button type="submit" class="btn btn-primary">@lang('Mettre à jour')</button>
                </form>
            </div>
            
            <div class="actions-section mt-2">
                <button class="btn btn-success w-25">@lang('Créer une facture')</button>
            </div>
        </div>
        
        <div class="factures-section">
            <h3 class="section-title">Factures associées</h3>
            
            <div class="facture-list">
                <div class="facture-card">
                    <div class="facture-info">
                        <div class="facture-number">Facture #FAC-2023-0128</div>
                        <div class="facture-date">Créée le 10 mars 2023</div>
                    </div>
                    <div class="facture-actions">
                        <button class="btn btn-primary btn-sm">Voir</button>
                        <button class="btn btn-sm">Télécharger</button>
                    </div>
                </div>
                
                <div class="facture-card">
                    <div class="facture-info">
                        <div class="facture-number">Facture #FAC-2023-0085</div>
                        <div class="facture-date">Créée le 5 février 2023</div>
                    </div>
                    <div class="facture-actions">
                        <button class="btn btn-primary btn-sm">Voir</button>
                        <button class="btn btn-sm">Télécharger</button>
                    </div>
                </div>
            </div>
            
            <!-- Cas où il n'y a pas de factures -->
            <!-- <div class="no-factures">
                Aucune facture associée à cette demande
            </div> -->
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