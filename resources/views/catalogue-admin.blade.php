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

  #model-catalogue-create .form-control {
    border-radius: 0 !important;
    padding-left: 0 !important;
    box-shadow: 0 0 1px #000000a9 !important;
    background-color: rgba(255, 255, 255, 0.349) !important;
    border-radius:5px !important; 
  }
  
  #model-catalogue-create .form-control:focus {
    box-shadow: none !important;
    border: 1px solid #e87532;
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
  .gallery-card {
            transition: all 0.3s ease;
            overflow: hidden;
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .gallery-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .admin-actions {
            position: absolute;
            top: 10px;
            right: 10px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .gallery-card:hover .admin-actions {
            opacity: 1;
        }
        
        .action-btn {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            margin-left: 5px;
        }
        
        /* Dropzone style */
        .dropzone {
            border: 2px dashed #000000;
            border-radius: 8px;
            background: rgb(255, 255, 255);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .dropzone.active {
            border-color: #0d6efd;
            background: rgba(13, 110, 253, 0.05);
        }
        
        .preview-thumb {
            position: relative;
            margin-bottom: 1rem;
        }
        
        .preview-thumb img {
            border-radius: 5px;
            height: 80px;
            object-fit: cover;
        }
        
        .remove-preview {
            position: absolute;
            top: 5px;
            right: 5px;
            width: 20px;
            height: 20px;
            background: rgba(220, 53, 69, 0.8);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            cursor: pointer;
        }
        
        /* Custom modal */

        
        .modal-upload .modal-content {
            border: none;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }


        /* style de notification */

        .toast-error {
          position: fixed;
          bottom: 20px;
          right: 20px;
          background: #e74c3c;
          color: white;
          padding: 1rem 1.5rem;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
          display: flex;
          align-items: center;
          gap: 1rem;
          animation: slideIn 0.5s ease, fadeOut 0.5s ease 4.5s forwards;
          z-index: 9999;
          min-width: 250px;
          font-family: 'Arial', sans-serif;
        }

.toast-content {
  display: flex;
  align-items: center;
  flex: 1;
}

.toast-error .icon {
  font-size: 1.5rem;
}

.toast-error .close-btn {
  background: none;
  border: none;
  color: white;
  font-size: 1.2rem;
  cursor: pointer;
  transition: transform 0.3s;
}

.toast-error .close-btn:hover {
  transform: scale(1.2);
}

@keyframes slideIn {
  from {
    transform: translateX(-100%);
    opacity: 0;
  }
  to {
    transform: translateX(0%);
    opacity: 1;
  }
}

@keyframes fadeOut {
  to {
    opacity: 0;
    transform: translateX(-30px);
  }
}

.toast-success {
          position: fixed;
          bottom: 20px;
          right: 20px;
          background: #00c00a;
          color: white;
          padding: 1rem 1.5rem;
          border-radius: 10px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
          display: flex;
          align-items: center;
          gap: 1rem;
          animation: slideIn 0.5s ease, fadeOut 0.5s ease 4.5s forwards;
          z-index: 9999;
          min-width: 250px;
          font-family: 'Arial', sans-serif;
        }

.toast-content {
  display: flex;
  align-items: center;
  flex: 1;
}

.toast-success .icon {
  font-size: 1.5rem;
}

.toast-success .close-btn {
  background: none;
  border: none;
  color: white;
  font-size: 1.2rem;
  cursor: pointer;
  transition: transform 0.3s;
}

.toast-success .close-btn:hover {
  transform: scale(1.2);
}

.navbar .btn-primary{
  background: #e87532 !important;
  border: #e87532;
}
#galleryContainer .btn-primary{
  border: none;
}

/* style de animation de data vide */

.empty-catalogue {
    text-align: center;
    padding: 40px;
    border-radius: 20px;
    background: #ffffff;
    animation: fadeInUp 0.6s ease-in-out;
    max-width: 600px;
    margin: 80px auto;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.08);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



  </style>
</head>

<body @if (app()->getLocale() == "ar")
  dir="rtl"
@endif class="index-page">

@if(session('error'))
<div id="error-notification" class="toast-error">
    <div class="toast-content">
        <span class="message">{{ session('error') }}</span>
    </div>
    <button class="close-btn" onclick="closeToast()">×</button>
</div>
<script>
  function closeToast() {
    const toast = document.getElementById('error-notification');
    if (toast) toast.remove();
  }

 
  setTimeout(() => closeToast(), 10000);
</script>
@endif

@if(session('success'))
<div id="success-notification" class="toast-success">
    <div class="toast-content">
        <span class="message">{{ session('success') }}</span>
    </div>
    <button class="close-btn" onclick="closeToast()">×</button>
</div>
<script>
  function closeToast() {
    const toast = document.getElementById('success-notification');
    if (toast) toast.remove();
  }

 
  setTimeout(() => closeToast(), 10000);
</script>
@endif


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



  <nav dir="ltr" class="navbar navbar-expand-lg mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">@lang("Gallery")</a>
        <button class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#model-catalogue-create">
            <i class="fas fa-plus me-2"></i>@lang("Ajouter")
        </button>
    </div>
</nav>

<!-- Gallery Container -->
<div class="container mb-5">
    <div class="row g-4" id="galleryContainer">
        <!-- Sample Item -->

        @if (count($catalogues) == 0)
        <div class="empty-catalogue">
          <lottie-player 
              src="https://assets10.lottiefiles.com/packages/lf20_HpFqiS.json" 
              background="transparent" 
              speed="1" 
              loop 
              autoplay 
              style="width: 250px; height: 250px ; justify-self:center">
          </lottie-player>
          <h4 class="mt-3">@lang('Catalogue vide')</h4>
          <p class="text-muted">@lang('Aucune donnée disponible pour le moment.')</p>
          <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#model-catalogue-create">
              <i class="fas fa-plus"></i> @lang("Ajouter un catalogue")
          </button>
      </div>
      @else
          @foreach ($catalogues as $catalogue)
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="card gallery-card h-100">
                  <img src="{{ asset('storage/' .$catalogue['photos'][0]["photo_path"]) }}" class="gallery-img card-img-top" alt="Sample">
                  <div class="card-body">
                      <h5 class="card-title">{{ $catalogue['detail']['title'] }}</h5>
                      <p class="card-text text-muted">{{ $catalogue['detail']['disciption'] }}</p>
                  </div>
                  <div class="admin-actions">
                      <button class="action-btn btn btn-outline-primary" title="Éditer" data-bs-toggle="modal" data-bs-target="#model-catalogue-modifie-{{ $catalogue['detail']['id'] }}">
                          <i class="bi bi-pencil"></i>
                      </button>
                      <button class="action-btn btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-catalogue-{{ $catalogue['detail']['id'] }}" title="Supprimer">
                          <i class="bi bi-trash"></i>
                      </button>
                  </div>
              </div>
          </div>


          {{-- model de delete --}}
          <div class="modal fade" id="delete-catalogue-{{ $catalogue['detail']['id'] }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div @if (app()->getLocale() == "ar")
                      dir="ltr"
                      @endif class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteModalLabel">@lang('Êtes-vous sûr ?')</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="suppreme-{{ $catalogue['detail']['id'] }}" action="{{ route('delete-catalogue',['catalogue_id'=>$catalogue['detail']['id']]) }}" method="post">
                      @csrf
                      @method('DELETE')
                    </form>
                    <div class="modal-body">
                        <p class="mb-0">@lang('Cette action est irréversible !')</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Annuler')</button>
                        <button type="submit" form="suppreme-{{ $catalogue['detail']['id'] }}" class="btn btn-danger">@lang('Oui, supprimer!')</button>
                    </div>
                </div>
            </div>
        </div>

          {{-- model de modifie --}}

          <div class="modal fade modal-upload" id="model-catalogue-modifie-{{ $catalogue['detail']['id'] }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div @if (app()->getLocale() == "ar")
                      dir="ltr"
                    @endif class="modal-header">
                        <h5 class="modal-title">@lang("Modifier un catalogue")</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="uploadForm-{{ $catalogue['detail']['id'] }}" method="POST" action="{{ route('update-catalogue',['catalogue_id' => $catalogue['detail']['id']]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">@lang("Titre en Français")</label>
                                @error('titreCatalogueUpdateFr'.$catalogue['detail']['id'])
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="text" value="{{ old('titreCatalogueUpdateFr'.$catalogue['detail']['id'])??$catalogue['detail']['title'] }}" name="titreCatalogueUpdateFr{{ $catalogue['detail']['id'] }}" class="form-control" placeholder="@lang('Description du catalogue en Français')">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">@lang("Titre en Arabe")</label>
                              @error('titreCatalogueUpdateAr'.$catalogue['detail']['id'])
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                              <input type="text" value="{{ old('titreCatalogueUpdateAr'.$catalogue['detail']['id'])??$catalogue['detail']['title'] }}" name="titreCatalogueUpdateAr{{ $catalogue['detail']['id'] }}" class="form-control" placeholder="@lang('Description du catalogue en Arabe')">
                          </div>
                            <div class="mb-3">
                              <label class="form-label">@lang("Catégorie")</label>
                              @error('categorieUpdate-'.$catalogue['detail']['id'])
                              <small class="text-danger">{{ $message }}</small>
                              @enderror

                              @php
                                $categories = [
                                  'Impression Professionnelle'=>"Cartes de visite, Flyers, En-têtes",
                                  "Communication d'Entreprise" => "PLV, Kakémonos, Documents corporatifs",
                                  "Événementiel"=> "Invitations, Badges, Roll-up",
                                  "Textile"=>"T-shirts, Casquettes, Sweats",
                                  "Décoration"=>"Posters, Toiles, Autocollants muraux",
                                  "Packaging"=>"Boîtes, Étiquettes, Emballages",
                                  "Produits Promotionnels"=>"Stylos, Clés USB, Mugs",
                                  "Grand Format"=>"Bâches, Panneaux, Adhésifs véhicules",
                                  "Services Graphiques"=>"Création de logo, Maquettes, Charte graphique",
                                  "Produits Spéciaux"=>"Calendriers, Livres, Cartes de vœux"
                                ];
                              @endphp

                              <select class="form-select" name="categorieUpdate-{{ $catalogue['detail']['id'] }}" id="">
                                {{-- categorie --}}
                                <option value="" selected hidden></option>
                                @foreach ($categories as $key=>$categorie)
                                  <option @if ((old("categorieUpdate-". $catalogue['detail']['id'])??$catalogue['detail']['categorie']) == $key) selected @endif value="{{ $key }}"> @lang($categorie) </option>
                                @endforeach
                              </select>
                          </div>
                            @error("photoCatalogueReste" . $catalogue['detail']['id'])
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @error('photoCatalogueUpdate'.$catalogue['detail']['id'])
                                <small class="text-danger">{{ $message }}</small>
                              @enderror
                              @php
                                $firstPhotoError = collect($errors->get('photoCatalogueUpdate'.$catalogue['detail']['id'].'.*'))->flatten()->first();
                              @endphp
                              
                              @if ($firstPhotoError)
                                  <small class="text-danger">{{ $firstPhotoError }}</small><br>
                              @endif
                          
                            <div class="dropzone p-5 text-center mb-3" id="dropzone-{{ $catalogue['detail']['id'] }}">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <h5>@lang("Glissez-déposez vos fichiers ici")</h5>
                                <p class="text-muted small">@lang("Ou cliquez pour sélectionner des fichiers")</p>
                                <p class="text-muted small">@lang("Formats supportés: JPG, PNG, GIF (Max 5MB par fichier)")</p>
                                <small class="text-danger" id="error-taill-{{ $catalogue['detail']['id'] }}"></small>
                                <input type="file" name="photos" id="fileInput{{ $catalogue['detail']['id'] }}" class="d-none" multiple accept="image/*">
                            </div>
                            <input type="file" name="photoCatalogueUpdate{{ $catalogue['detail']['id'] }}[]" id="photoCatalogueUpdate{{ $catalogue['detail']['id'] }}" class="d-none" value="{{ old('photoCatalogueUpdate'.$catalogue['detail']['id']) }}" multiple accept="image/*">
                            <input type="hidden" value="{{ old("photoCatalogueReste" . $catalogue['detail']['id']) }}" name="photoCatalogueReste{{ $catalogue['detail']['id'] }}" id="photoCatalogueReste{{ $catalogue['detail']['id'] }}">
                            <div class="row g-2 mb-3" id="previewContainer-{{ $catalogue['detail']['id'] }}">   
                                <!-- Preview thumbs will appear here -->
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">@lang("Description du catalogue en Français")</label>
                                @error('descriptionCatalogueUpdateFr'.$catalogue['detail']['id'])
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <textarea class="form-control" name="descriptionCatalogueUpdateFr{{ $catalogue['detail']['id'] }}" rows="3">{{ old('descriptionCatalogueUpdateFr'.$catalogue['detail']['id'])??$catalogue['detail']['disciption'] }}</textarea>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">@lang("Description du catalogue en Arabe")</label>
                              @error('descriptionCatalogueUpdateAr'.$catalogue['detail']['id'])
                              <small class="text-danger">{{ $message }}</small>
                              @enderror
                              <textarea class="form-control" name="descriptionCatalogueUpdateAr{{ $catalogue['detail']['id'] }}" rows="3">{{ old('descriptionCatalogueUpdateAr'.$catalogue['detail']['id'])??$catalogue['detail']['disciption'] }}</textarea>
                          </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang("Annuler")</button>
                        <button type="submit" form="uploadForm-{{ $catalogue['detail']['id'] }}" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>@lang("Enregistrer")
                        </button>
                    </div>
                </div>
            </div>
        </div>

        @if ($errors->has('descriptionCatalogueUpdateFr'.$catalogue['detail']['id']) || 
        $errors->has('descriptionCatalogueUpdateAr'.$catalogue['detail']['id']) || 
        $errors->has('categorieUpdate-'.$catalogue['detail']['id']) || 
        $errors->has('photoCatalogueUpdate'.$catalogue['detail']['id']) || 
        $errors->has('titreCatalogueUpdateFr'.$catalogue['detail']['id']) || 
        $errors->has('titreCatalogueUpdateAr'.$catalogue['detail']['id']) || 
        $errors->get('photoCatalogueUpdate'.$catalogue['detail']['id'].'.*') || 
        $errors->get('photoCatalogueReste'.$catalogue['detail']['id'].'.*'))
              <script>
                  window.addEventListener('load', function () {
                  var myModal = new bootstrap.Modal(document.getElementById('model-catalogue-modifie-{{ $catalogue["detail"]["id"] }}'));
                  myModal.show();
                });
              </script>
          @endif
              
          <script>
            document.addEventListener('DOMContentLoaded', function() {
                initCatalogueEditor(@json($catalogue));
            });
        
            function initCatalogueEditor(catalogue) {
                const editorId = catalogue.detail.id;
                const state = {
                    files: [],
                    existingPhotos: catalogue.photos.map(photo => photo.photo_path)
                };
        
                // Éléments DOM
                const elements = {
                    dropzone: document.getElementById(`dropzone-${editorId}`),
                    fileInput: document.getElementById(`fileInput${editorId}`),
                    previewContainer: document.getElementById(`previewContainer-${editorId}`),
                    form: document.getElementById(`uploadForm-${editorId}`),
                    hiddenInput: document.getElementById(`photoCatalogueUpdate${editorId}`),
                    errorDisplay: document.getElementById(`error-taill-${editorId}`),
                    photoCatalogueReste:document.getElementById(`photoCatalogueReste${editorId}`)
                };
        
                // Événements
                elements.dropzone.addEventListener('click', () => elements.fileInput.click());
                elements.fileInput.addEventListener('change', handleFileSelect);
                
                ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
                    elements.dropzone.addEventListener(event, preventDefaults);
                });
        
                elements.dropzone.addEventListener('drop', handleDrop);
                elements.form.addEventListener('submit', handleSubmit);
        
                // Initialiser l'affichage des photos existantes
                initExistingPhotos();
        
                // Fonctions
                function preventDefaults(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
        
                function handleDrop(e) {
                    const files = e.dataTransfer.files;
                    handleFileSelect({ target: { files } });
                }
        
                function handleFileSelect(e) {
                    const newFiles = Array.from(e.target.files);
                    
                    if (state.files.length + state.existingPhotos.length + newFiles.length > 10) {
                        elements.errorDisplay.textContent = '@lang("Maximum 10 fichiers autorisés")';
                        return;
                    }
        
                    newFiles.forEach(file => {
                        if (!file.type.match('image.*')) return;
                        state.files.push(file);
                    });
        
                    updatePreview();
                    elements.fileInput.value = '';
                }
        
                function initExistingPhotos() {
                    state.existingPhotos.forEach((photoPath, index) => {
                        const col = document.createElement('div');
                        col.className = 'col-6 col-md-4 col-lg-3';
                        
                        const thumb = document.createElement('div');
                        thumb.className = 'preview-thumb position-relative';
                        
                        const img = document.createElement('img');
                        img.src = `{{ asset('storage/') }}/${photoPath}`;
                        img.className = 'img-fluid w-100';
                        img.style.height = '100px';
                        img.style.objectFit = 'cover';
                        
                        const removeBtn = document.createElement('button');
                        removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-1';
                        removeBtn.innerHTML = '<i class="bi bi-trash"></i>';
                        removeBtn.type = 'button';
                        removeBtn.addEventListener('click', () => {
                            // Ajouter un champ caché pour indiquer la suppression
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = `removed_photos[${editorId}][]`;
                            input.value = photoPath;
                            elements.form.appendChild(input);
                            
                            // Supprimer de l'affichage
                            state.existingPhotos.splice(index, 1);
                            updatePreview();
                        });
                        
                        thumb.appendChild(img);
                        thumb.appendChild(removeBtn);
                        col.appendChild(thumb);
                        elements.previewContainer.appendChild(col);
                    });
                }
        
                function updatePreview() {
                    elements.previewContainer.innerHTML = '';
                    initExistingPhotos();
                    
                    state.files.forEach((file, index) => {
                        const reader = new FileReader();
                        
                        reader.onload = function(e) {
                            const col = document.createElement('div');
                            col.className = 'col-6 col-md-4 col-lg-3';
                            
                            const thumb = document.createElement('div');
                            thumb.className = 'preview-thumb position-relative';
                            
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.className = 'img-fluid w-100';
                            img.style.height = '100px';
                            img.style.objectFit = 'cover';
                            
                            const removeBtn = document.createElement('button');
                            removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-1';
                            removeBtn.innerHTML = '<i class="bi bi-trash"></i>';
                            removeBtn.type = 'button';
                            removeBtn.addEventListener('click', () => {
                                state.files.splice(index, 1);
                                updatePreview();
                            });
                            
                            thumb.appendChild(img);
                            thumb.appendChild(removeBtn);
                            col.appendChild(thumb);
                            elements.previewContainer.appendChild(col);
                        };
                        
                        reader.readAsDataURL(file);
                    });
                }
        
                function handleSubmit(e) {
                    const dataTransfer = new DataTransfer();
                    state.files.forEach(file => {
                        dataTransfer.items.add(file);
                    });
                    elements.photoCatalogueReste.value = state.existingPhotos;
                    elements.hiddenInput.files = dataTransfer.files;
                    
                    // Validation supplémentaire si nécessaire
                    if (state.files.length === 0 && state.existingPhotos.length === 0) {
                        e.preventDefault();
                        elements.errorDisplay.textContent = '@lang("Veuillez ajouter au moins une photo")';
                        return;
                    }
                }
            }
        </script>
        
          @endforeach
        @endif
        

        
        <!-- More items would be loaded here dynamically -->
    </div>
</div>
  
<!-- Upload Modal -->
<div class="modal fade modal-upload" id="model-catalogue-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div @if (app()->getLocale() == "ar")
              dir="ltr"
            @endif class="modal-header">
                <h5 class="modal-title">@lang("Ajouter un catalogue")</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" method="POST" action="{{ route('create-catalogue') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">@lang("Titre en Français")</label>
                        @error('titreCatalogueFr')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <input type="text" value="{{ old('titreCatalogueFr') }}" name="titreCatalogueFr" class="form-control" placeholder="@lang('Entrez le titre du catalogue en Français')">
                    </div>

                    <div class="mb-3">
                      <label class="form-label">@lang("Titre en Arabe")</label>
                      @error('titreCatalogueAr')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                      <input type="text" value="{{ old('titreCatalogueAr') }}" name="titreCatalogueAr" class="form-control" placeholder="@lang('Entrez le titre du catalogue en Arabe')">
                  </div>
                    <div class="mb-3">
                      <label class="form-label">@lang("Catégorie")</label>
                      @error('categorieCatalogue')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror

                      @php
                        $categories = [
                          'Impression Professionnelle'=>"Cartes de visite, Flyers, En-têtes",
                          "Communication d'Entreprise" => "PLV, Kakémonos, Documents corporatifs",
                          "Événementiel"=> "Invitations, Badges, Roll-up",
                          "Textile"=>"T-shirts, Casquettes, Sweats",
                          "Décoration"=>"Posters, Toiles, Autocollants muraux",
                          "Packaging"=>"Boîtes, Étiquettes, Emballages",
                          "Produits Promotionnels"=>"Stylos, Clés USB, Mugs",
                          "Grand Format"=>"Bâches, Panneaux, Adhésifs véhicules",
                          "Services Graphiques"=>"Création de logo, Maquettes, Charte graphique",
                          "Produits Spéciaux"=>"Calendriers, Livres, Cartes de vœux"
                        ];
                      @endphp

                      <select class="form-select" name="categorieCatalogue" id="">
                        {{-- categorie --}}
                        <option value="" selected hidden></option>
                        @foreach ($categories as $key=>$categorie)
                        
                          <option @if (old("categorieCatalogue") == $key) selected @endif value="{{ $key }}"> @lang($categorie)</option>
                        @endforeach
                      </select>
                  </div>
                    @error('photoCatalogue')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                      @php
                        $firstPhotoError = collect($errors->get('photoCatalogue.*'))->flatten()->first();
                      @endphp
                      
                      @if ($firstPhotoError)
                          <small class="text-danger">{{ $firstPhotoError }}</small><br>
                      @endif
                  
                    <div class="dropzone p-5 text-center mb-3" id="dropzone">
                        <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                        <h5>@lang("Glissez-déposez vos fichiers ici")</h5>
                        <p class="text-muted small">@lang("Ou cliquez pour sélectionner des fichiers")</p>
                        <p class="text-muted small">@lang("Formats supportés: JPG, PNG, GIF (Max 5MB par fichier)")</p>
                        <small class="text-danger" id="error-taill"></small>
                        <input type="file" name="photos" id="fileInput" class="d-none" multiple accept="image/*">
                    </div>
                    <input type="file" name="photoCatalogue[]" id="photoCatalogue" class="d-none" multiple accept="image/*">
                    
                    <div class="row g-2 mb-3" id="previewContainer">
                        <!-- Preview thumbs will appear here -->
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">@lang("Description du catalogue en Français")</label>
                        @error('descriptionCatalogueFr')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <textarea class="form-control" name="descriptionCatalogueFr" rows="3">{{ old('descriptionCatalogueFr') }}</textarea>
                    </div>

                    <div class="mb-3">
                      <label class="form-label">@lang("Description du catalogue en Arabe")</label>
                      @error('descriptionCatalogueAr')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                      <textarea class="form-control" name="descriptionCatalogueAr" rows="3">{{ old('descriptionCatalogueAr') }}</textarea>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang("Annuler")</button>
                <button type="submit" form="uploadForm" class="btn btn-primary">
                    <i class="fas fa-save me-2"></i>@lang("Enregistrer")
                </button>
            </div>
        </div>
    </div>
</div>
@if ( $errors->has('descriptionCatalogueFr') || 
      $errors->has('descriptionCatalogueAr') ||
      $errors->has('categorieCatalogue') || 
      $errors->has('photoCatalogue') || 
      $errors->has('titreCatalogueFr') || 
      $errors->has('titreCatalogueAr') || 
      $errors->get('photoCatalogue.*'))
 <script>
    window.addEventListener('load', function () {
    var myModal = new bootstrap.Modal(document.getElementById('model-catalogue-create'));
    myModal.show();
  });
 </script>
@endif
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Tableau global pour stocker les fichiers
    let selectedFiles = [];
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('fileInput');
    const previewContainer = document.getElementById('previewContainer');
    const form = document.getElementById('uploadForm');
    const error = document.getElementById('error-taill')
    
    // Créer un input file caché pour la soumission finale
    const hiddenFileInput = document.getElementById('photoCatalogue');
    
    dropzone.addEventListener('click', () => fileInput.click());
    
    fileInput.addEventListener('change', handleFiles);
    
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
        dropzone.addEventListener(event, preventDefaults);
    });
    
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }
    
    ['dragenter', 'dragover'].forEach(event => {
        dropzone.addEventListener(event, () => dropzone.classList.add('active'));
    });
    
    ['dragleave', 'drop'].forEach(event => {
        dropzone.addEventListener(event, () => dropzone.classList.remove('active'));
    });
    
    dropzone.addEventListener('drop', handleDrop);
    
    function handleDrop(e) {
        const files = e.dataTransfer.files;
        handleFiles({ target: { files } });
    }
    
    function handleFiles(e) {
        const newFiles = Array.from(e.target.files);
        
        // Vérifier si le total dépasse 10 fichiers
        if (selectedFiles.length + newFiles.length > 10) {
            error.innerHTML="Maximum 10 fichiers autorisés"
            return;
        }
        
        // Ajouter les nouveaux fichiers au tableau
        newFiles.forEach(file => {
            if (!file.type.match('image.*')) return;
            selectedFiles.push(file);
        });
        
        // Mettre à jour l'affichage
        updatePreview();
        
        // Réinitialiser l'input file pour permettre de nouveaux ajouts
        fileInput.value = '';
    }
    
    function updatePreview() {
        previewContainer.innerHTML = '';
        
        selectedFiles.forEach((file, index) => {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                const col = document.createElement('div');
                col.className = 'col-6 col-md-4 col-lg-3';
                
                const thumb = document.createElement('div');
                thumb.className = 'preview-thumb';
                
                const img = document.createElement('img');
                img.src = e.target.result;
                img.className = 'img-fluid w-100';
                
                const removeBtn = document.createElement('div');
                removeBtn.className = 'remove-preview';
                removeBtn.innerHTML = '×';
                removeBtn.addEventListener('click', () => {
                    // Supprimer le fichier du tableau
                    selectedFiles.splice(index, 1);
                    // Mettre à jour l'affichage
                    updatePreview();
                });
                
                thumb.appendChild(img);
                thumb.appendChild(removeBtn);
                col.appendChild(thumb);
                previewContainer.appendChild(col);
            };
            
            reader.readAsDataURL(file);
        });
    }
    
    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Créer un DataTransfer pour l'input file caché
        const dataTransfer = new DataTransfer();
        
        // Ajouter tous les fichiers sélectionnés
        selectedFiles.forEach(file => {
            dataTransfer.items.add(file);
        });
        
        // Assigner les fichiers à l'input caché
        hiddenFileInput.files = dataTransfer.files;
        
        // Soumettre le formulaire
        form.submit();
    });
</script>



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
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>