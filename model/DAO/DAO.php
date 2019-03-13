<?php
 /*
	DATA ACCESS OBJETO
	- Classe de acesso a camada de dados (banco)
 */
abstract class DAO{

	protected $connector;
	protected $retornos;
 	//construtor da classe, iniciando tudo que precisar do banco de dados
	public function __construct(){
 		// Criando Conexão
 		$dsn = 'mysql:dbname=db_padrao;host=localhost;port=3336;';
 		$user = 'root';
 		$password = '';
		$this->connector = new PDO($dsn, $user, $password);
		$this->connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connector->exec("SET CHARACTER SET utf8");
 		$retornos = [];
 	}
 	//Método que retorna uma combobox generica da classe que estiver sendo instanciada
	public function selectBox()
 	{
		$select = "";
		foreach($this->select() as $dados)
		{
 			$select .= "<option value='".$dados->codigo."'>".$dados->nome."</option>";
 		}
 		$select .= "";
 		return $select;
 	}
 	// Métodos que devem ser implementados na classe que fizer herança
 	abstract public function select();
	abstract public function insertUpdateDelete($crud);
 }
