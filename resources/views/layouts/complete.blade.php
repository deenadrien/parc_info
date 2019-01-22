<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Gestion de parc - @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation">
      <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('img/configuration.png') }}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Supports fixes
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('unites') }}">Unités centrales</a>
                          <a class="dropdown-item" href="{{ url('ecrans') }}">Moniteurs</a>
                          <a class="dropdown-item" href="{{ url('pc') }}">Ordinateurs fixes</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Supports mobiles
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('laptops') }}">Laptops</a>
                          <a class="dropdown-item" href="{{ url('tablettes') }}">Tablettes</a>
                      </div>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Accessoires
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('printers') }}">Imprimantes</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('all') }}">Parc complet</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('add') }}">Ajouter du matériel</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Gestion administrative
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="{{ url('users') }}">Listes des utilisateurs</a>
                          <a class="dropdown-item" href="{{ url('add_user') }}">Ajouter un utilisateur</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('services') }}">Listes des services</a>
                          <a class="dropdown-item" href="{{ url('add_service') }}">Ajouter un service</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('bureaux') }}">Listes des bureaux</a>
                          <a class="dropdown-item" href="{{ url('add_bureau') }}">Ajouter un bureau</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('softwares') }}">Listes des groupes logiciels</a>
                          <a class="dropdown-item" href="{{ url('add_soft') }}">Ajouter un groupe logiciels</a>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>

      @yield('content')

    </body>
</html>
