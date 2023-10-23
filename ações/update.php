<?php
include('./conexao.php');

$id_edicao = $_GET['id'];

$sql = "UPDATE INTO dizimista WHERE id_dizimista = $id_edicao";

$res = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
                alert('Edição concluída')
             </script>";
             header('Refresh: 0.5;url=./Telas/index.php?acao=ofertas');
    } else {
        echo "<script>
                alert('Falha ao Editar')
             </script>";
    }
mysqli_close($conn);
?>