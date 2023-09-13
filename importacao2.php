<?php
include('conexao.php');


$nome = $_POST['nome'];
$Ende = $_POST['endereco'];
$Cpf = $_POST['cpf'];
$tel = $_POST['telefone'];
$val = $_POST['valor'];
$Cord = $_POST['coordenador'];
$Cod = $_POST['codigo'];


$sql = "INSERT INTO dizimista (nome, cpf, telefone, valor, endereco, coordenador, codigo) 
        VALUES ('$nome', '$Cpf', '$tel', '$val', '$Ende', '$Cord', '$Cod')";

$res = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
            alert('Dizimo cadastrado')
         </script>";
}
mysqli_close($conn);

header ("Location: ./menuLateral/index.php?acao=dizimistas");

?>