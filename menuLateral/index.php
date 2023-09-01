<?php
@session_start();
if(!isset($_SESSION['id_agente'])) {
  header('location: ../index.php ');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Tela Principal</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" href="Maisuma2.0.png" type="image/x-icon">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<nav class="menu">

			<a href="../sair.php" id="btn-sair">Sair</a>
				
			</nav>
		</div>
	</header>
	<div class="capa"></div>


  <?php
if (isset($_GET['acao'])) {
  $acao = $_GET['acao'];

  if ($acao == 'dizimistas') {
    include('dizimistas.php');
  } elseif ($acao == 'ofertas') {
    include ('dizimo.php');
  }
  elseif ($acao == 'registro') {
    include ('registro.php');
  }
} else {
  include ('home.php');
}

  ?>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="index.php">Início</a>
            <a href='index.php?acao=dizimistas'>Dizimistas</a>
			<a href="index.php?acao=ofertas">Dízimo</a>
			<a href="index.php?acao=registro">Registro</a>
		</nav>

		<label for="btn-menu">✖️</label>
    
	</div>
</div>
</body>
</html>