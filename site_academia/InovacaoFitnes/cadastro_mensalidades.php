<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Inovação Fitnes - Recebimento de Mensalidades</title>
    
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
          <h3 style="color: #D3D3D3; text-align: center;">Recebimento Mensalidade</h3>
          <br />
        <form method="post" action="registra_mensalidades.php" id="formCadastrarse">
          <div class="form-group">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Aluno" required="requiored">
          </div>

          <div class="form-group">
            <input type="" class="form-control" id="valor" name="valor" placeholder="R$ 0,00" required="requiored">
          </div>

          <div class="form-group">
            <input type="date" class="form-control" id="data" name="data" placeholder="Data" required="requiored">
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