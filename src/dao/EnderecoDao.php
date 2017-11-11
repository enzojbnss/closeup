<?php
namespace  src\dao;


use src\model\Endereco;

require_once 'model/Endereco.php';
require_once 'database/Commad.php';
require_once 'utils/TesteExecute.php';

class EnderecoDao {
	public function incluir($endereco) {
		$endereco = new Endereco();
		$execute="";
		$mensagem="";
		$db ["tab"] = "endereco";
		$db ["campos"] = "cep,logradouro,idUF,bairro,cidade";
		$valor = "'" . $endereco->getCep() . "','" . $endereco->getLogradouro() . "',";
		$valor .= $endereco->getUF()->getID () . ",'" . $endereco->getBairro() . "','";
		$valor .= $endereco->getCidade() . "'";
		$command = new Commad ();
		$status = $command->incluir ( $db );
		if ($status == true) {
			$mensagem = "Inscrição feita com Sucesso!";
		} else {
			$mensagem = "Falha ao fazer a inscrição!";
		}
		$execute = new TesteExecute($status, $menssagem);
		return $execute;
	}
}