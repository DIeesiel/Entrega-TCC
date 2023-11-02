<?php
include('./conexao.php');

$id_exclusao = $_GET['id'];

$sql = "DELETE FROM dizimista WHERE id_dizimista = $id_exclusao";

$res = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
                alert('Dízimo Excluído')
             </script>";
             header('Refresh: 0.5;url=../Telas/index.php?acao=ofertas');
    } else {
        echo "<script>
                alert('DEU CAGADA!')
             </script>";
    }
mysqli_close($conn);
?>