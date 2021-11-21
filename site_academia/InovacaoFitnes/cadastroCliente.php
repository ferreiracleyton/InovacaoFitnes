<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Inovação Fitnes - Cadastro Usuario</title>
    
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  </head>

  <body style="background-image: url(images/f.cadastro.jpg);">
    

    <?php include('menu.php') ?>

      <div class="container">
        
        <br /><br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h3 style="color: #D3D3D3; text-align: center;">Cadastro de Aluno</h3>
          <br />
        <form method="post" action="registra_usuario.php" id="formCadastrarse">
          <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" required="requiored">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">
          </div>


          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
          </div>

          <div class="form-group">
            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required="requiored">
          </div>

          <div class="form-group">
            <input type="date" class="form-control" id="data" name="data" placeholder="Data Cadastro" required="requiored">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="login" name="login" placeholder="login" required="requiored">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" required="requiored">
          </div>

          
          
          
          <button type="submit" class="btn btn-primary form-control" style="color: #D3D3D3;">Cadastrar</button>
        </form>
      </div>
      <div class="col-md-4"></div>

      <div class="clearfix"></div>
      <br />
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>

    </div>

    

      </div>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>