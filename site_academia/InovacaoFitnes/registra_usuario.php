<?php

require_once('db_class.php');

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//criando um objeto da classe db
$objdb = new db ();

//acessando a função conecta_mysql() e atribuindo ela a uma variavel
$link = $objdb->conecta_mysql();

//inserindo dados no banco
$sql = "insert into usuarios(nome, endereco, cpf, telefone, data, login, email, senha) values ('$nome', '$endereco', '$cpf', '$telefone', '$data', '$login', '$email', '$senha')";

//executando a query, sempre serão passados 2 parametos a query e o link para conexão. fazendo vericação com if se não deu erro
if (mysqli_query($link, $sql)) {

	header('Location: cadastroCliente.php');

} else {
	header('Location: cadastroCliente.php');	
}

?>