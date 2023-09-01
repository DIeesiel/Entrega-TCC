<?php
include('conexao.php');

$email = $_POST['email'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (email, nome, sobrenome, senha) 
        VALUES ('$email', '$nome', '$sobrenome', '$senha')";

$res = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
            alert('Usuário inserido com sucesso!')
         </script>";
}
mysqli_close($conn);

header ("Refresh: 0.5, url=index.php");

?>