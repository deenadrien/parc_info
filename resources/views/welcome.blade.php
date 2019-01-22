@extends('layouts.complete')

@section('content')
<div class="container-fluid">
      <div class="row" id="firstrow">
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/desktop.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Unités centrales</h5>
                      <p class="card-text">Afficher toutes les unités centrales</p>
                      <a href="{{ url('unites')}}" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/computer.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Ordinateurs</h5>
                      <p class="card-text">Afficher tous les ordinateurs</p>
                      <a href="ordinateurs.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/monitor.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Moniteurs</h5>
                      <p class="card-text">Afficher tous les moniteurs</p>
                      <a href="moniteurs.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/form.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Ajouter du matériel</h5>
                      <p class="card-text">Ajouter tout type de matériel</p>
                      <a href="add.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/tablette.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Tablettes</h5>
                      <p class="card-text">Afficher toutes les tablettes</p>
                      <a href="tablettes.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/laptop.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Ordinateurs portables</h5>
                      <p class="card-text">Afficher tous les portables</p>
                      <a href="laptops.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/phone.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Mobiles</h5>
                      <p class="card-text">Afficher tous les mobiles</p>
                      <a href="mobiles.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="{{ asset('img/printer.jpg') }}" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title">Imprimantes</h5>
                      <p class="card-text">Afficher toutes les imprimantes</p>
                      <a href="printers.php" class="btn btn-primary">Cliquez ici</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @stop
