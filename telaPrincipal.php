<?php

  require_once('./src/backend/conecta.php');

  $idUser = $_GET['id'];

  $sql = "SELECT * FROM `tbl_usuarios` WHERE `Id` = '$idUser'";
  $result = $conn->query($sql);
  if ($result->num_rows >= 0) {
    while ($row = $result->fetch_array()) {
      $loginUser = $row['Login'];      
    }
  }

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
      <div class="d-flex flex-column justify-content-center align-items-center">
        <h4>Usuario</h4>
        <h5><?php echo $loginUser ?></h5>
      </div>
      <div class="p-2" style="display: flex; flex-direction: column;">
        <button type="button" id="btnCadastrarUsuario" class="btn btn-primary m-2">Cadastrar Usuario</button>
        <button type="button" id="btnEditarUsuario" class="btn btn-primary m-2">Editar Usuario</button>
        <button type="button" id="btnDeletarUsuario" class="btn btn-primary m-2">Deletar Usuario</button>
        <button type="button" id="btnSair" class="btn btn-primary m-2">Sair</button>
      </div>
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

    <script>
      document.getElementById("btnCadastrarUsuario").onclick = function () {
          location.href = "./cadastrarUsuario.html";
      };

      document.getElementById("btnEditarUsuario").onclick = function () {
          location.href = "./editar.php?id=" + <?php echo $idUser ?>;
      };

      document.getElementById("btnDeletarUsuario").onclick = function () {
          location.href = "./src/backend/deletarUsuario.php?id=" + <?php echo $idUser ?>;
      };

      document.getElementById("btnSair").onclick = function () {
          location.href = "./index.php";
      };
    </script>
  </body>
</html>