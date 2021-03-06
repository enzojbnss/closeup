<?php

namespace src\database;

require_once ("DadosConectaBanco.php");

use src\database\DadosConectaBanco;
use \PDO;

class Banco {
	private $tipo;
	private $host;
	private $bd;
	private $user;
	private $pass;
	public function __construct() {
		
		$dadosCon = new DadosConectaBanco();
		$this->tipo = $dadosCon->getTipo();
		$this->host = $dadosCon->getHost();
		$this->bd = $dadosCon->getBD();
		$this->user = $dadosCon->getUser();
		$this->pass = $dadosCon->getPass();
	}
	public function conectar($db) {
		// Pega dados de conexão
		
		$con = $this->tipo_bd();
		if ($con) {
			try {
				$con->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				return $con;
			} catch ( PDOException $e ) {
				echo $e->getMessage();
				$msg = "Erro de conexão com o banco de dados: Código: " . $e->getCode () . "Mensagem " . $e->getMessage () . "hora: " . date ( 'H:i:s' );
			}
			return ($con = false);
		}else{
		   //var_dump($con);	
		}
	}
	
	// &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	private function tipo_bd() {
		$dbname = $this->bd;
		$user = $this->user;
		$pass = $this->pass;
		
		$con = new PDO ("mysql:host=mysql.training4farma.com.br;dbname=training4farma","training4farma", "R615243", array (PDO::ATTR_PERSISTENT => true));
		
		/*
		switch ($this->tipo) {
			case 'mysql' :
				
				break;
			case 'pgsql' :
				$con = new PDO ( "pgsql:dbname={$bd};user={$user}; password={$pass};host=$host" );
				break;
			case 'oci8' :
				$tns = "(DESCRIPTION=(ADDRESS_LIST=(ADDRESS=(PROTOCOL=TCP)(HOST=" . $db ['host'] . ")(PORT=1521)))(CONNECT_DATA=(SID=" . $db ['bd'] . ")))";
				$con = new PDO ( "oci:dbname=" . $tns, $this->user, $this->pass, array (PDO::ATTR_PERSISTENT => true) );
				break;
			case 'mssql' :
				$con = new PDO ( "mssql:host={$host},1433;dbname={$bd}", $user, $pass );
				break;
		}
		*/
		return $con;
	}
}
?>
