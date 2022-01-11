<?php

$conn = new mysqli("localhost", "root", "senha1234", "testePromad");
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');