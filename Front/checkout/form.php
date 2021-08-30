<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Front/checkout/imagens/360_F_402161358_LxtAMGUicBPdLkZOICowd2lFJm8iSZ6d.jpg">

    <title>Checkout example for Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="imagens/360_F_402161358_LxtAMGUicBPdLkZOICowd2lFJm8iSZ6d.jpg" alt="" width="300">
        <h2>Cadastre-se</h2>
        <p class="lead">Aqui temos os melhores veterinarios e tratamos o seu pet como ele merece.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4" style="margin-top: 10%;">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Our pets</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="imagens/1b82a5_503c2f4782ee416b8d65b75b3b9bea42_mv2.jpg" style="height: 300px; width: 600px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagens/caoideal2-1.png"  style="height: 300px; width: 600px;" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagens/gato-gato-fofo-gato-filhote-1585841507191_v2_450x337.jpg" style="height: 300px; width: 600px;" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-8 order-md-1 mb-3">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate action="../../Back/registrarCliente.php" method="POST">
            <div class="row">
              <div class="col-md-6 fullName">
                <label for="firstName">Full name</label>
                <input type="text" class="form-control" placeholder="Name" name="nome" value="" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Valid first name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="usuario" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="senha">Password</label>
              <input type="password" class="form-control" name='senha' id="senha" placeholder="********" required>
              <div class="invalid-feedback">
                Please enter your shipping CPF.
              </div>
            </div>


            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">CPF</label>
              <input type="text" class="form-control" name='cpf' id="address" placeholder="XXX.XXX.XXX-XX" required>
              <div class="invalid-feedback">
                Please enter your shipping CPF.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address</label>
              <input type="text" class="form-control" id="address2" name="endereco" placeholder="Rua, Bairro e Nº" required>
            </div>

            <div class="mb-3">
              <label for="telefone">Phone</label>
              <input type="text" class="form-control" id="phone" name="telefone" placeholder="(xx) x.xxxx-xxxx" required>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>Brasil</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Alagoas</option>
                  <option>Pernambuco</option>
                  <option>Sergipe</option>
                  <option>Ceará</option>
                  <option>Paraíba</option>
                  <option>Bahia</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <a href="../cover/home.css">
              <input class="btn btn-primary btn-lg btn-block" type="submit" value='Registre-se'>
            </a>
          </form>
        </div>
      </div>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 IFAL</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
