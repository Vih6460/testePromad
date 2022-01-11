<?php

  require_once('./conecta.php');

  session_start();

  $idUser = $_GET['id'];

  $sql = "DELETE FROM `tbl_usuarios` WHERE `Id` = '$idUser'";
  if ($conn->query($sql) === TRUE) {
    header('Location: ../../usuarioDeletado.html');
  } else {
    // echo "Erro ao deletar usuario" . $conn->error;
    header('Location: ../../usuarioNaoDeletado.html');
  }
  
  $conn->close();
  ?>