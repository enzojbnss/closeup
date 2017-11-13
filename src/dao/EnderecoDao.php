<?php

namespace src\dao;

use src\model\Endereco;

require_once 'model/Endereco.php';
require_once 'database/Commad.php';
require_once 'utils/TesteExecute.php';
class EnderecoDao {
	public function incluir($endereco) {
		$execute = "";
		$mensagem = "";
		$db ["tab"] = "endereco";
		$db ["campos"] = "cep,logradouro,idUF,bairro,cidade";
		$valor = "'" . $endereco->getCep () . "','" . $endereco->getLogradouro () . "',";
		$valor .= $endereco->getUF ()->getID () . ",'" . $endereco->getBairro () . "','";
		$valor .= $endereco->getCidade () . "'";
		$db ["valor"] = $valor;
		$command = new Commad ();
		$status = $command->incluir ( $db );
		if ($status == true) {
			$mensagem = "Inscrição feita com Sucesso!";
		} else {
			$mensagem = "Falha ao fazer a inscrição!";
		}
		$execute = new TesteExecute ( $status, $menssagem );
		return $execute;
	}
	public function getEndereco($idEndereco) {
		$enderecos = [ ];
		$db ["sql"] = "selcect id,cep,logradouro,bairro,cidade,idUF,uf from vwendereco id = " . $idEndereco;
		$command = new Commad ();
		$dados = $command->pesquisar ( $db );
		if (is_array ( $dados )) {
			foreach ( $dados as $indexLinha => $valorLInha ) {
				if (is_array ( $valorLInha )) {
					array_push ( $enderecos, new Endereco ( $valorLInha ["$id"], $valorLInha ["$cep"], $valorLInha ["$logradouro"], $valorLInha ["$uf"], $valorLInha ["$bairro"], $valorLInha ["$cidade"] ) );
					
					// Cargo ( $valorLInha ["id"], $valorLInha ["descricao"] ) );
				}
			}
		}
		return $enderecos;
	}
	public function existe($endereco) {
		$teste = false;
		$db ["sql"] = $sql = "selcect * from vwendereco where cep = '" . $endereco->getCep () . "' ";
		$sql .= "and logradouro '" . $endereco->getLogradouro () . "' ";
		$sql .= "and bairro '" . $endereco->getBairro () . "' ";
		$sql .= "and cidade '" . $endereco->getCidade () . "' ";
		$sql .= "and idUF " . $endereco->getID ()->getID ();
		$command = new Commad ();
		$dados = $command->pesquisar ( $db );
		if (is_array ( $dados )) {
			if (count ( $dados ) > 0)
				$teste = true;
		}
		return $teste;
	}
	public function getID($endereco) {
		$id = 0;
		$db ["sql"] = $sql = "selcect * from vwendereco where cep = '" . $endereco->getCep () . "' ";
		$sql .= "and logradouro '" . $endereco->getLogradouro () . "' ";
		$sql .= "and bairro '" . $endereco->getBairro () . "' ";
		$sql .= "and cidade '" . $endereco->getCidade () . "' ";
		$sql .= "and idUF " . $endereco->getID ()->getID ();
		$command = new Commad ();
		$dados = $command->pesquisar ( $db );
		if (is_array ( $dados )) {
			foreach ( $dados as $indexLinha => $valorLInha ) {
				$id = $valorLInha ["id"];
			}
		}
		return $id;
	}
}