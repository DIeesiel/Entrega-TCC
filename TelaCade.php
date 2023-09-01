<?php include ('conexao.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Maisuma2.0.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="TelaCade.css">
   <title>System PTMS</title>
    </head>
  <body>
    <div class="capa"></div>
    <div id="main-container">
       <h1>Cadastre-se</h1>
        <form id="register-form" method="post" action="Importacao.php">
          <div class="full-box">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required> 
          </div>
          <div class="half-box spacing">
            <label for="name">Nome</label>
            <input type="text" name="nome" id="name" placeholder="Digite seu nome" required>
          </div>
          <div class="half-box">
            <label for="lastname">Sobrenome</label>
            <input type="text" name="sobrenome" id="lastname" placeholder="Digite seu sobrenome" required>
          </div>
          <div class="half-box spacing">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="password" placeholder="Digite sua senha" required>
          </div>
          <div class="full-box">
            <input type="submit" id="btn-submit" value="Cadastrar"> 
          </div>
        </form>
    </div>
    <p class="error-validation template"></p>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>