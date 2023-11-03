<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php include ('./menu.php'); ?>

<main>

<div class="container3">

<table class="table table-hover">
  <thead>
    <tr>
        <h1 class="text-center">Arquivos</h1>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
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
 }
?>

  <tr>
   <th scope="row"></th>
   <td class="text-center"></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td>
     <a class="btn btn-primary edit-button">Visualizar</a>
     <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal3_<?php echo $dizimista['id_dizimista'];?>">Excluir</a>
   </td>
  </tr>

  <div class="modal fade" id="exampleModal3_<?php echo $dizimista['id_dizimista'];?>" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Confirmação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <strong><p class="text-center">Deseja realmente excluir este registro?</p></strong>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <a class="btn btn-danger" href="../ações/deleta.php?id=<?php echo $dizimista['id_dizimista']; ?>">Excluir</a>
      </div>
    </div>
  </div>
</div>


</tbody>
</table>
</div>
</main>