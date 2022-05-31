<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Formulário de Cadastro de Pessoas </title>

  <style>

    label, input {display:block;}

    legend {text-align: center;}

    button {background-color: red; color: white;}

  </style>

</head>

<body>
  
  <fieldset>

    <legend> Cadastro de Pessoas </legend>

    <form method="post" action="/pessoa/form/save">

      <input type="hidden" value="<?= $model->id ?>" name="id"/>

      <label for="nome"> Nome: </label>
      <input id="nome" name="nome" value="<?= $model->nome ?>" type="text"/>
      <br>

      <label for="cpf"> CPF: </label>
      <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number"/>
      <br>
      
      <label for="data_nascimento"> Data de Nascimento: </label>
      <input id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>" type="date"/>
      <br>
      
      <button type="submit"> Salvar </button>

    </form>

  </fieldset>

</body>

</html>