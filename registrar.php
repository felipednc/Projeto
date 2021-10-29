<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Assets/Css/regi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header id="logo">
        <div class="logo">
            <img src="Assets/Imagen/Logo2.svg">
        </div>
    </header>
    <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nome" id="first_name" type="text" class="validate" required>
              <label for="first_name">Nome</label>
            </div>
            <div class="input-field col s6">
              <input placeholder="Sobrenome" id="Sobrenome" type="text" class="validate" required>
              <label for="Sobrenome">Sobrenome</label>
            </div>
          </div>
              <div class="row">
                <div class="input-field col s6"> 
                  <input placeholder="Telefone" id="telefone" type="text" class="validate" required>
                  <label for="Telefone">Telefone</label>
                </div>
                <div class="input-field col s6">
                  <input placeholder="Senha" id="Sobrenome" type="text" class="validate" required>
                  <label for="Sobrenome">Senha</label>
                </div>
              </div>
          <!--LOGIN-->
          <div class="row">
            <div class="input-field col s4">
              <input id="usuario" type="text" class="validate" required>
              <label for="usuario">Usuario</label>
            </div>
            <div class="input-field col s4">
              <input id="password" type="password" maxlength="15" class="validate" required>
              <label for="password">Senha</label>
            </div>
            <div class="input-field col s4">
              <input placeholder="Confirme sua Senha"id="Confirme" type="password" maxlength="15" class="validate" required>
              <label for="reepassword"></label>
            </div>
          </div>
          <!--///////-->
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" required>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s3">
              <input placeholder="Insira seu Endereço"id="Endereço" type="text" class="validate" required>
              <label for="Endereço">Endereço</label>
            </div>
            <div class="input-field col s3">
              <input placeholder="Cep"id="Cep" type="number" maxlength="9" class="validate" required>
              <label for="Cep">Cep</label>
            </div>
            <div class="input-field col s3">
              <input placeholder="Numero"id="Numerohouse" type="number" maxlength="5" class="validate" required>
              <label for="Numero">Numero</label>
            </div>
            <div class="input-field col s3">
              <input placeholder="Insira seu Complemento"id="Complemento" type="text" class="validate">
              <label for="Complemento">Complemento</label>
            </div>
          </div>
        </form>
        <button id="butto" class="btn waves-effect waves-light" type="submit" name="action">Evniar
            <a href="#"><i class="material-icons right">send</i></a>
          </button>
      </div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="Assets/JS/script.js"></script>   
</body>
</html>