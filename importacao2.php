<?php
include('conexao.php');


$nome = $_POST['nome'];
$Cpf = $_POST['cpf'];
$tel = $_POST['telefone'];
$Ende = $_POST['endereco'];
$Cord = $_POST['coordenador'];
$Cod = $_POST['codigo'];


$sql = "INSERT INTO dizimista (nome, cpf, telefone, endereco, coordenador, codigo) 
        VALUES ('$nome', '$Cpf', '$tel', '$Ende', '$Cord', '$Cod')";

$res = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
            alert('Dizimo cadastrado')
         </script>";
}
mysqli_close($conn);

header ("Refresh: 0.5, url=index.php?acao=dizimistas");

?>