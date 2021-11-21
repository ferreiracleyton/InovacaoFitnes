<?php

require_once('db_class.php');

$despesa = $_POST['despesa'];
$valor = $_POST['valor'];
$data = $_POST['data'];


//criando um objeto da classe db
$objdb = new db ();

//acessando a função conecta_mysql() e atribuindo ela a uma variavel
$link = $objdb->conecta_mysql();

//inserindo dados no banco
$sql = "insert into despesas(nome, valor, data) values ('$despesa', '$valor', '$data')";

//executando a query, sempre serão passados 2 parametos a query e o link para conexão. fazendo vericação com if se não deu erro
if (mysqli_query($link, $sql)) {

	header('Location: cadastro_contas.php');
	echo 'cadastro realizado com sucesso';

} else {
	header('Location: cadastro_contas.php');
	echo 'Erro ao cadastrar Despesas';	
}

?>