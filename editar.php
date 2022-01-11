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
          <h2>Editar Usuário</h2>
      </div>
      <form id="formEditarUser">
      <!-- <form action="./src/backend/editarUsuario.php?id=" method="POST"> -->
        <div class="mb-3">
          <label for="inputLogin" class="form-label">Email</label>
          <input type="email" class="form-control" name="inputLogin" id="inputLogin" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="inputSenha" class="form-label">Senha</label>
          <input type="password" class="form-control" name="inputSenha" id="inputSenha">
          <input type="text" value="<?php echo $_GET['id'] ?>" name="idUsuario" hidden>
        </div>
        <div class="d-flex justify-content-around">
          <button type="submit" class="btn btn-primary">Editar</button>
          <button type="button" id="btnSair" class="btn btn-primary">Sair</button>
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

    <script>
        document.getElementById("btnSair").onclick = function () {
            location.href = "./index.php";
        };

        function editarUsuario(e) {
            $.ajax({ type: "POST", data: e.serialize(), url: "./src/backend/editarUsuario.php"}).then(
                function (e) {
                    ($sucesso = $.parseJSON(e).sucesso),
                    // console.log($msgErro),
                        $sucesso
                            ? (Swal.fire({ title: "Dados atualizados com sucesso!", icon: "success", confirmButtonText: "Entendi", position: "center", showConfirmButton: "false"}))
                                
                            : (Swal.fire({ title: "Falha ao atualizar cadastro.", text: "Verifique os campos e tente novamente", icon: "error", confirmButtonText: "Voltar", position: "center" }));
                },
                function () {
                    Swal.fire({ title: "Erro ao atualizar cadastro.", text: "Contate nosso suporte.", icon: "error", confirmButtonText: "Voltar", position: "center" });
                }
            );
        }

        $("#formEditarUser").submit(function (e) {
            e.preventDefault(),
            
            Swal.fire({
                title: "Aguarde...",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
            });
            editarUsuario($(this));
        });
    </script>
  </body>
</html>