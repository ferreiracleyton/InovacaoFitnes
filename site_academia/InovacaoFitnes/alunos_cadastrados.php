<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Inovação Fitnes - Alunos</title>
    
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
  </head>

  <body style="background-image: url(images/f.cadastro.jpg);">


    <?php include('menu.php') ?>

      <div class="container">

        <table class="table table-striped table-dark" >
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">data</th>
      <th scope="col">email</th>
      <th scope="col">Editar | Excluir</th>
    </tr>
  </thead>
  <tbody>

    <?php

            require_once('consultar_cadastros.php');

            foreach($dados_usuario as $usuario){
        

            ?>
    <tr>
    
            <td><?php echo $usuario['nome'];  ?></td>
            <td><?php echo $usuario['endereco'];  ?></td>
            <td><?php echo $usuario['cpf'];  ?></td>
            <td><?php echo $usuario['telefone'];  ?></td>
            <td><?php echo date("d/m/y", strtotime($usuario['data']));  ?></td>
            <td><?php echo $usuario['email'];  ?></td>
            <td><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
            
    </tr>
    <?php } ?>        
        
  </tbody>
</table>
      
        
      </div>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>