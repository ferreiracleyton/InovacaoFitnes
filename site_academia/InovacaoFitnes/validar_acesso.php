<?php

//chamando class db 
require_once('db_class.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//criando uma query
$sql = "SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha'";

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
	$dados_usuario = mysqli_fetch_array($resultado_id);
    
   //valindado se usuario existe
    if(isset($dados_usuario['login'])){

        header('Location: home.php?');
    
    }else {
    	//redirecionando para uma pagina 
        header('Location: ini.php?erro=1');
    }

} else{ echo 'Erro ao conectar ao banco';}

?>