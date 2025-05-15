<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 - Page non trouvée</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

  <!-- CSS -->
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f0874a, #fc620a);
      font-family: 'Poppins', sans-serif;
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
    }

    .container {
      animation: float 3s ease-in-out infinite;
    }

    h1 {
      font-size: 10rem;
      margin: 0;
      letter-spacing: 10px;
    }

    h2 {
      font-size: 2rem;
      margin: 20px 0;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    a {
      display: inline-block;
      padding: 12px 25px;
      background: white;
      color: #764ba2;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    a:hover {
      background: #ffd369;
      color: #333;
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }

    .stars {
      position: absolute;
      width: 100%;
      height: 100%;
      background: url("{{ asset('assets/img/logo/logo.png') }}") repeat;
      animation: moveStars 50s linear infinite;
      z-index: -1;
      opacity: 0.5;
    }

    @keyframes moveStars {
      0% {background-position: 0 0;}
      100% {background-position: 10000px 5000px;}
    }
  </style>
</head>

<body>

<div class="stars"></div>

<div class="container">
  <h1>404</h1>
  <h2>@lang("Oops! Page introuvable")</h2>
  <p>@lang("La page que vous cherchez n'existe pas ou a été déplacée.")</p>
  <a href="{{ url('/') }}">@lang("Retour à l'accueil")</a>
</div>

</body>
</html>
