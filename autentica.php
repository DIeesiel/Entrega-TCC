<?php
@session_start();
include('conexao.php');

if (isset($_POST['enviado'])) {
  $verifica1 = $_POST['email'];
  $verifica2 = $_POST['senha'];

  $Q = "SELECT * FROM usuarios WHERE email = '$verifica1' AND senha = '$verifica2'";
  $result = mysqli_query($conn, $Q);
  $usuario = mysqli_fetch_array($result);

  if (mysqli_num_rows($result) > 0 && ($result) < 2) {
      $_SESSION['id_agente'] = 1;
    $_SESSION['nome_agente'] = $usuario['nome'];
    header('location: menuLateral/index.php ');
    exit();
  } else {  
    echo ("<script>
    <alert> Usuário ou senha incorretos </alert>
       </script>");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
  }
}
?>