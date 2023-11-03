<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php include ('./menu.php'); ?>

<main>

<div class="container3">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Missionário(a)</th>
      <th scope="col" class="text-center">Telefone</th>
      <th scope="col" class="text-center">Valor</th>
      <th scope="col" class="text-center">Código</th>
      <th scope="col" class="text-center">Data</th>
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
      <td class="ellipsis"><?php echo $dizimista['nome']; ?></td>
      <td><?php echo $dizimista['coordenador']; ?></td>
      <td><?php echo $dizimista['telefone']; ?></td>
      <td class="text-center"><?php echo $valores; ?></td>
      <td class="text-center"><?php echo $dizimista['codigo']; ?></td>
      <td class="text-center"><?php echo $dizimista['dat']; ?></td>
      <td><a class="btn btn-primary edit-button" 
             data-bs-toggle="modal" 
             data-bs-target="#exampleModal1_<?php echo $dizimista['id_dizimista']; ?>"
             data-dizimista='<?php echo json_encode($dizimista); ?>'>Editar</a>
      </td>
      <td><a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $dizimista['id_dizimista'];?>">Excluir</a></td>
    </tr>

<div class="modal fade" id="exampleModal_<?php echo $dizimista['id_dizimista'];?>" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <strong><p class="text-center">Deseja realmente excluir o(a) dizimista <?php echo $dizimista['nome']?>?</p></strong>
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <a class="btn btn-danger" href="../ações/deleta.php?id=<?php echo $dizimista['id_dizimista']; ?>">Excluir</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1_<?php echo $dizimista['id_dizimista'];?>" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
  <style>
    h1 {
    text-align: center;
    margin-top: 20px;
    margin-bottom: 40px;
    }

  </style>
   
<h1>Editar Dizimista</h1>
<form id="editForm_<?php echo $dizimista['id_dizimista'];?>" method="post" action="#">
  <div class="row g-3">
    <div class="col-10">
      <label for="inputAddress" style="display: block; margin-bottom: 10px; font-weight: bold;">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Jacinto Aberlado" required>
    </div>

      <div class="col-2">
        <label for="inputCEP" style="display: block; margin-bottom: 10px; font-weight: bold;">Cod. Dizimo</label>
        <input type="text" name="codigo" class="form-control" id="inputCEP" maxlength="4" minlength="4" placeholder="xxxx" required>
      </div>
    </div>
</br>
      <div class="col-12">
        <label for="inputCity" style="display: block; margin-bottom: 10px; font-weight: bold;">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="inputCity" placeholder="Rua dos Bobos, nº 0" required>
      </div>
</br>
    <div class="row g-3">
      <div class="col-6">
        <label for="inputCPF" style="display: block; margin-bottom: 10px; font-weight: bold;">CPF</label>
        <input type="text" name="cpf" class="form-control" id="inputEmail4" placeholder="xxx.xxx.xxx-xx" maxlength="14" onkeypress="formatar('###.###.###-##', this)" required> 
      </div>

      <script> 
      
      function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)
          if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
      }
     }
      </script>
      <div class="col-6">
        <label for="inputPassword4" style="display: block; margin-bottom: 10px; font-weight: bold;">Telefone</label>
        <input type="tel" name="telefone" class="form-control" id="inputPassword4" maxlength="15" placeholder="(xx) xxxxx-xxxx" oninput="handlePhone(event)" required>
        
    <script> 
      const handlePhone = (event) => {
      let input = event.target
      input.value = phoneMask(input.value)
    }
  
      const phoneMask = (value) => {
       if (!value) return ""
       value = value.replace(/\D/g,'')
       value = value.replace(/(\d{2})(\d)/,"($1) $2")
       value = value.replace(/(\d)(\d{4})$/,"$1-$2")
        return value
    }
      
      </script>
       
      </div>
    </div>
</br>
    <div class="row g-3">
      <div class="col-sm-5">
        <label for="inputCity" style="display: block; margin-bottom: 10px; font-weight: bold;">Missionário(a)</label>
        <input type="text" name="coordenador" class="form-control" id="inputCity" placeholder="Maria Aparecida" required>
      </div>
      <div class="col-sm-4">
        <label for="inputEstado" style="display: block; margin-bottom: 10px; font-weight: bold;">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputCEP" placeholder="R$0,00" maxlength="10" onInput="mascaraMoeda(event);" required>
      
      <script> 

const mascaraMoeda = (event) => {
  const onlyDigits = event.target.value
    .split("")
    .filter(s => /\d/.test(s))
    .join("")
    .padStart(3, "0")
  const digitsFloat = onlyDigits.slice(0, -2) + "." + onlyDigits.slice(-2)
  event.target.value = maskCurrency(digitsFloat)
}

const maskCurrency = (valor, locale = 'pt-BR', currency = 'BRL') => {
  return new Intl.NumberFormat(locale, {
    style: 'currency',
    currency
  }).format(valor)
}
    
      </script>
      
      </div>
      <div class="col-sm-3">
        <label for="inputCEP" style="display: block; margin-bottom: 10px; font-weight: bold;">Data</label>
        <input type="date" name="dat" class="form-control" id="inputCEP" required>
      </div>
    </div>
</br>
<button type="submit" class="btn btn-primary" style="text-align: center; font-size: 17px; width: 7%;" id="concluir-edicao">Salvar</button>
  </form>

      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" data-bs-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const editButtons = document.querySelectorAll('.edit-button');

  editButtons.forEach((button) => {
    button.addEventListener('click', function () {
      // Obtém os dados do dizimista da linha clicada
      const dizimistaData = JSON.parse(this.getAttribute('data-dizimista'));

      if (dizimistaData) {
      // Preenche o formulário com os dados do dizimista
      const formulario = document.querySelector(`#editForm_${dizimistaData.id_dizimista}`);
      formulario.nome.value = dizimistaData.nome;
      formulario.codigo.value = dizimistaData.codigo;
      formulario.endereco.value = dizimistaData.endereco;
      formulario.cpf.value = dizimistaData.cpf;
      formulario.telefone.value = dizimistaData.telefone;
      formulario.coordenador.value = dizimistaData.coordenador;
      formulario.valor.value = dizimistaData.valor;
      formulario.dat.value = dizimistaData.dat;

      // Adicione o ID do dizimista ao formulário para identificação
      formulario.setAttribute('id_dizimista', dizimistaData.id_dizimista);
      }
    });
  });

  // Manipule o envio do formulário para enviar os dados atualizados
  const concluirButton = document.getElementById('concluir-edicao');
  concluirButton.addEventListener('click', function () {
    // Obtenha o ID do dizimista a ser editado
    const formulario = document.querySelector('form');
    const dizimistaId = formulario.getAttribute('id_dizimista');

    // Use JavaScript ou jQuery para enviar os dados do formulário para o servidor
    // Aqui, você pode usar AJAX para enviar os dados para um arquivo PHP que lida com a edição do dizimista

    // Exemplo usando fetch para enviar os dados para um arquivo PHP:
    fetch('editar_dizimista.php?id=' + dizimistaId, {
      method: 'POST',
      body: new FormData(formulario)
    })
      .then(response => response.json())
      .then(data => {
        // Manipule a resposta do servidor, se necessário
      })
      .catch(error => {
        console.error('Erro ao enviar dados para o servidor:', error);
      });
  });
});

</script>


<?php } ?>

<?php include ('./Barra.php')?>

</br>

<?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); ?>

<!-- Inserir a linha de total após o loop -->
<tr>
  <th scope="col" style="font-size: larger;" class="text-center">Total</th>
  <td scope="col"></td>
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
<?php  
   $rota = "../Telas/index.php?acao=dizimistas";
   $rota2 = "../Telas/index.php?acao=registro";
?>
    <button onclick="window.location.href='<?php echo $rota2; ?>'" class="btn btn-success" style="padding-left: 5px; font-size: 17px; font-family: 'Arial';">Finalizar</button>
    <button onclick="window.location.href='<?php echo $rota; ?>'" class="btn btn-primary" style="font-size: 17px; padding-left: 4px;">+Novo</button>
</div>
</main>