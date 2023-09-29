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
    </tr>
  </thead>
  <tbody>
  <?php
include('../conexao.php');

$sql = "SELECT * FROM dizimista";
$res = mysqli_query($conn, $sql);
$i = 0;
while ($dizimista = mysqli_fetch_array($res)) {
  $i++;
  ?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $dizimista['nome']; ?></td>
      <td><?php echo $dizimista['coordenador']; ?></td>
      <td><?php echo $dizimista['telefone']; ?></td>
      <td><?php echo $dizimista['valor']; ?></td>
      <td><?php echo $dizimista['codigo']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</main>