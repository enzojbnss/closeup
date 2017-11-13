<?php
use src\model\UF;
use src\model\Cargo;
use src\model\Email;
use src\model\Endereco;
use src\model\Participante;
use src\model\TipoEmail;
class Coversor {
	private $objJson;
	public function getObject($objJson, $className, $param) {
		$this->objJson = $objJson;
		switch ($className) {
			case "Cargo" :
				$id = $this->getItem ( "id" );
				$descricao = $this->getItem ( "descricao" );
				return new Cargo ( $id, $descricao );
				break;
			case "Email" :
				$id = $this->getItem ( "id" );
				$descricao = $this->getItem ( "descricao" );
				$tipoEmail = $param ["tipoEmail"];
				return new Email ( $id, $descricao, $tipoEmail );
				break;
			case "Endereco" :
				$id = getItem ( "id" );
				$cep = getItem ( "cep" );
				$logradouro = getItem ( "logradouro" );
				$uf = $param ["uf"]; 
				$bairro = getItem ( "bairro" );
				$cidade = getItem ( "cidade" );
				return new Endereco ( $id, $cep, $logradouro, $uf, $bairro, $cidade );
				break;
			case "Participante" :
				$id = getItem ( "id" );
				$nome = getItem ( "nome" );
				$dataNascimento = getItem ( "dataNascimento" );
				$endereco = $param ["endereco"];
				$numeroEndereco = getItem ( "numeroEndereco" );
				$complementoEndereco = getItem ( "complementoEndereco" );
				$cargo = $param ["cargo"];
				$email = $param ["email"];
				$musica = getItem ( "musica" );
				$lugar = getItem ( "lugar" );
				return new Participante ( $id, $nome, $dataNascimento, $endereco, $numeroEndereco, $complementoEndereco, $cargo, $email, $musica, $lugar );
				break;
			case "TipoEmail" :
				$id = $this->getItem ( "id" );
				$descricao = $this->getItem ( "descricao" );
				return new TipoEmail ( $id, $descricao );
				break;
			case "UF" :
				$id = $this->getItem ( "id" );
				$descricao = $this->getItem ( "descricao" );
				return new UF ( $id, $descricao );
				break;
		}
	}
	private function getItem($item) {
		try {
			return $this->objJson->$item;
		} catch ( Exception $e ) {
			return null;
		}
	}
}