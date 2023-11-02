<?php
include('./conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se 'id_dizimista' está definido no array $_POST
    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $codigo = $_POST['codigo'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $coordenador = $_POST['coordenador'];
        $valor = $_POST['valor'];
        $dat = $_POST['dat'];

        // Use instruções preparadas para evitar injeção de SQL
        $sql = "UPDATE dizimista SET nome = '$nome', codigo = '$codigo', endereco = '$endereco', cpf = '$cpf',
                telefone = '$telefone', coordenador = '$coordenador', valor = '$valor', dat = '$dat' WHERE id_dizimista = '$id'";
       
       $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Vincule os parâmetros
            mysqli_stmt_bind_param($stmt, $nome, $codigo, $endereco, $cpf, $telefone, $coordenador, $valor, $dat, $id);

            // Execute a consulta
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Campo Alterado')</script>";
                header('Refresh: 0.5;url=../Telas/index.php?acao=ofertas');
            } else {
                echo "Erro na atualização do registro: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Erro na preparação da consulta: " . mysqli_error($conn);
        }
    } else {
        echo "ID de dizimista não definido no formulário.";
    }
  }

mysqli_close($conn);
?>