<?php

  require_once('./conecta.php');

  $idUser = $_POST['idUsuario'];
  $loginUser = $_POST['inputLogin'];
  $senhaUser = $_POST['inputSenha'];
        
  function encrypt_decrypt($action, $string) {
      $output = false;
      
      $encrypt_method = "AES-256-CBC";
      $secret_key = 'C583F8BEA66D57EF7032FDEFB9EEE945D38E8FFAED6D3362CB215BE0160F9C71';
      $secret_iv = 'C4361C6C83D5B5E8085550A6EE80F718'; 
      
      $key = hash('sha256', $secret_key);
      
      $iv = substr(hash('sha256', $secret_iv), 0, 16);
      
      if ( $action == 'encrypt' ) {
          $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
          $output = base64_encode($output);
      } else if( $action == 'decrypt' ) {
          $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
      }
      
      return $output;
  }

  $senha_criptografada = encrypt_decrypt('encrypt', $senhaUser);

  try{;
    // UPDATE `tbl_usuarios` SET `Login`='[value-2]',`Senha`='[value-3]' WHERE 1
    //   $query = "UPDATE `tbl_usuarios` SET Login = '$loginUser', Senha = '$senha_criptografada'  WHERE Id = '$idUser'";
      $query = "UPDATE `tbl_usuarios` SET `Login`='$loginUser',`Senha`='$senha_criptografada'  WHERE `Id` = '$idUser'";
      $salvounobanco = mysqli_query($conn, $query);  
      
      if ($salvounobanco) {
          mysqli_close($conn);
          $retorno["sucesso"] = true;
          
      
      } else {
          $retorno["sucesso"] = false;

      }
  } catch(Exception $e){
  $retorno["sucesso"] = false;
  }


  echo json_encode($retorno);