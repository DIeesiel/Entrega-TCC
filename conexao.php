<?php

$conn = mysqli_connect ('localhost','root','','tcc');

if (mysqli_connect_errno()){
    echo "Erro na conexão com o Banco de Dados: " . mysqli_connect_error();
    exit();
  }
?>