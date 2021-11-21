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

  <body style="background-color: #000; background-image: url(images/f.cadastro.jpg);">

    <!-- Static navbar -->

  


      <div class="container">
        
        <br /><br />

        <div class="col-md-4"></div>
        <div class="col-md-4">
          
        <form method="post" action="validar_acesso.php" id="formCadastrarse" class="form-control" style="width:400px; height: 320px; background-color: rgba(255, 255, 255, 0.3);">
          <h3 style ="color: #fff; text-align: center;">Login</h3>
          <br />
          <div class="form-group">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" id="senha" name="senha" placeholder="senha" required="requiored">
          </div>

          <br /><br />        
          
          <button type="submit" class="btn btn-primary form-control" style="color: #D3D3D3;">Entrar</button>
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