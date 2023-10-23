<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<main>

<div class="container3">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Coordenador</th>
      <th scope="col">Telefone</th>
      <th scope="col">Valor</th>
      <th scope="col">Cod. Dízimo</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
include('../ações/conexao.php');

$sql = "SELECT * FROM dizimista";
$res = mysqli_query($conn, $sql);
$i = 0;
$total = 0; // Variável para armazenar o total

while ($dizimista = mysqli_fetch_array($res)) {
  $i++;

 // Extrair apenas os números e a vírgula do valor
 preg_match_all("/[0-9,]+/", $dizimista['valor'], $matches);
 $valores = implode("", $matches[0]);
 
 // Substituir vírgulas por pontos
 $valores = str_replace(',', '.', $valores);
 
 if (is_numeric($valores)) {
   $total += floatval($valores); // Somar apenas se for um valor numérico
 }
  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $dizimista['nome']; ?></td>
      <td><?php echo $dizimista['coordenador']; ?></td>
      <td><?php echo $dizimista['telefone']; ?></td>
      <td><?php echo $valores; ?></td>
      <td><?php echo $dizimista['codigo']; ?></td>
      <td><a class="btn btn-primary" href="../ações/update.php?id=<?php echo $dizimista['id_dizimista'];?>">Editar</a></td>
      <td><a class="btn btn-danger" href="../ações/importacao3.php?id=<?php echo $dizimista['id_dizimista']; ?>">Excluir</a></td>
    </tr>
<?php } ?>

</br>

<?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>

<!-- Inserir a linha de total após o loop -->
<tr>
  <th scope="col" style="font-size: larger;">Total</th>
  <td scope="col"></td>
  <td scope="col"></td>
  <td scope="col"></td>
  <td scope="col"></td>
  <td scope="col"></td>
  <td scope="col"></td>
  <th scope="col" style="font-size: larger;"><?php echo 'R$ ' . number_format($total, 2, ',', '.'); ?></th>
</tr>
</tbody>
</table>
<?php  $rota = "../Telas/index.php?acao=dizimistas"?>
    <button onclick="window.location.href='<?php echo $rota; ?>'" class="btn btn-secondary">Voltar</button>
</div>
</main>