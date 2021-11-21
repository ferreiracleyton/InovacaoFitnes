<?php 

class db {

	//para realizar uma conexão com o banco precisamos de 4 informações

	//host
	private $host= 'localhost';

	//usuario
	private $usuario = 'root';


	//senha
	private $senha = '';

	//banco de dados
	private $database = 'db_academia';

	//criando uma função para conexão com o banco de dados

	public function conecta_mysql (){

		//criar a conexão
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($con, 'utfe');

		//verificar se houve erro de conexão
		if(mysqli_connect_errno()) {
			echo 'Erro ao tentar se conectar com o DB MySQL: '.mysqli_connect_error();
		}

		return $con;
		
	}



}






?>