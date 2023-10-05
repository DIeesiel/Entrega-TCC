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
        <label for="inputPassword4">Telefone</label>
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
      <div class="col-sm-6">
        <label for="inputCity">Coordenador</label>
        <input type="text" name="coordenador" class="form-control" id="inputCity" placeholder="Maria Aparecida" required>
      </div>
      <div class="col-sm-4">
        <label for="inputEstado">Valor</label>
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
