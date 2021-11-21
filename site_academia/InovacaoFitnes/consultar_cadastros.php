<?php

//chamando class db 
require_once('db_class.php');

//criando uma query
$sql = "SELECT * FROM usuarios";

//instanciando um objeto da classe db
$objdb = new db();
$link = $objdb->conecta_mysql();

/*
update true/false
select false/resource
insert true/false
delete true/false

quando nosa query é um select recuperamos o returno do resource em uma variavel
*/

$resultado_id = mysqli_query($link, $sql);


//verificando se o resource foi execultado corretamente (verifica se tem erro de sintaxe)
if ($resultado_id){
	
    $dados_usuario = array();

     while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
            $dados_usuario[] = $linha;
     }

     
    
} else{ echo 'Erro ao conectar ao banco';}

?>