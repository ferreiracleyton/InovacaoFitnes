<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>Inovação Fitnes - Despesas</title>
    
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
      <th scope="col">Despesa</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col">Editar | Excluir</th>
    </tr>
  </thead>
  <tbody>

    <?php

            require_once('consultar_mensalidades.php');

            foreach($dados_mensa as $mensa){
        

            ?>
    <tr>
    
            <td><?php echo $mensa['nome'];  ?></td>
            <td>R$<?php echo $mensa['valor'];  ?></td>
            <td><?php echo $mensa['data'];  ?></td>
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