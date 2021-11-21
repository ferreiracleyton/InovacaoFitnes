<?php

require_once('db_class.php');

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$data = $_POST['data'];


//criando um objeto da classe db
$objdb = new db ();

//acessando a função conecta_mysql() e atribuindo ela a uma variavel
$link = $objdb->conecta_mysql();

//inserindo dados no banco
$sql = "insert into mensalidade(nome, valor, data) values ('$nome', '$valor', '$data')";

//executando a query, sempre serão passados 2 parametos a query e o link para conexão. fazendo vericação com if se não deu erro
if (mysqli_query($link, $sql)) {

	header('Location: cadastro_mensalidades.php');
	echo 'cadastro realizado com sucesso';

} else {
	header('Location: cadastro_mensalidades.php');
	echo 'Erro ao cadastrar Despesas';	
}

?>