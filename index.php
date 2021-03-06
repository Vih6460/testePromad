<?php

// session_start();

// unset($_SESSION['conta']);

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login | Promad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="cardLogin">
      <div class="d-flex justify-content-center">
          <h2>Área de Login</h2>
      </div>
      <form id="formLogin">
        <div class="mb-3">
          <label for="inputLogin" class="form-label">Email</label>
          <input type="email" class="form-control" name="inputLogin" id="inputLogin" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="inputSenha" class="form-label">Senha</label>
          <input type="password" class="form-control" name="inputSenha" id="inputSenha">
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
      </form>
    </div>
      
    <!-- jQuery -->
    <script src="./src/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./src/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Personal Script -->
    <script src="./src/js/login.js"></script>
  </body>
</html>