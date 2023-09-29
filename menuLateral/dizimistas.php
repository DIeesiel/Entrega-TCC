<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
h1 {
text-align: center;
margin-top: 20px;
margin-bottom: 40px;
}
label {
display: block;
margin-bottom: 10px;
font-weight: bold;
}

</style>

<main>

<div class="container2">

<h1>Cadastro do Dizimista</h1>
<form method="post" action="../importacao2.php">
    <div class="col-12">
      <label for="inputAddress">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Jacinto Aberlado" required>
    </div>
</br>
      <div class="col-12">
        <label for="inputCity">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="inputCity" placeholder="Rua dos Bobos, nº 0" required>
      </div>
</br>
    <div class="row g-3">
      <div class="col-6">
        <label for="inputCPF">CPF</label>
        <input type="text" name="cpf" class="form-control" id="inputEmail4" placeholder="xxx.xxx.xxx-xx" maxlength="14" required>
      </div>
      <div class="col-6">
        <label for="inputPassword4">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="inputPassword4" placeholder="(xx) xxxxx-xxxx" required>
      </div>
    </div>
</br>
    <div class="row g-3">
      <div class="col-sm-6">
        <label for="inputCity">Coordenador</label>
        <input type="text" name="coordenador" class="form-control" id="inputCity" placeholder="Maria Aparecida" required>
      </div>
      <div class="col-sm-4">
        <label for="inputEstado">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputCEP" placeholder="R$" required>
      </div>
      <div class="col-sm-2">
        <label for="inputCEP">Cod. Dizimo</label>
        <input type="text" name="codigo" class="form-control" id="inputCEP" maxlength="4" placeholder="xxxx" required>
      </div>
    </div>
</br>
    <button type="submit" class="btn btn-primary">Marcar</button>
  </form>
</div>
</main>