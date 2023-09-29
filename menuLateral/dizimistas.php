<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    <div class="form-group">
      <label for="inputAddress">Nome</label>
      <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Jacinto Aberlado" required>
    </div>
      <div class="form-group">
        <label for="inputCity">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="inputCity" placeholder="Rua dos Bobos, nº 0" required>
      </div>
    <div class="form-row">
      <div class="form-group col-6">
        <label for="inputCPF">CPF</label>
        <input type="text" name="cpf" class="form-control" id="inputEmail4" placeholder="xxx.xxx.xxx-xx" maxlength="14" required>
      </div>
      <div class="form-group col-6">
        <label for="inputPassword4">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="inputPassword4" placeholder="(xx) xxxxx-xxxx" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-6">
        <label for="inputCity">Coordenador</label>
        <input type="text" name="coordenador" class="form-control" id="inputCity" placeholder="Maria Aparecida" required>
      </div>
      <div class="form-group col-4">
        <label for="inputEstado">Valor</label>
        <input type="text" name="valor" class="form-control" id="inputCEP" placeholder="R$" required>
      </div>
      <div class="form-group col-2">
        <label for="inputCEP">Cod. Dizimo</label>
        <input type="text" name="codigo" class="form-control" id="inputCEP" maxlength="4" placeholder="xxxx" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" class="butao">Marcar</button>
  </form>
</div>
</main>