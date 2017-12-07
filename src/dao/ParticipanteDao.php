<?php

namespace src\dao;

require_once 'src/model/Participante.php';
require_once 'src/database/Banco.php';
require_once 'src/utils/TesteExecute.php';
use \PDO;
use src\database\Banco;
use src\model\Participante;
use src\utils\TesteExecute;

class PartcipanteDao {
	public function incluir($participante, $conteudo, $nomeArquivo) {
		$execute = "";
		$mensagem = "";
		$status = true;
		$banco = new Banco ();
		$connection = $banco->conectar ( $banco );
		$execute = new TesteExecute ( true, "Inscrição feita com Sucesso!" );
		if ($connection != false) {
			try {
				setlocale ( LC_CTYPE, "pt_BR" );
				$db ["tab"] = "participante";
				$campos = "nomeCompleto, nomeCracha, nomeEnpresa, cargo,";
				$campos .= "dataNascimento, endereco, emailProfissional, emailPessoal, telefone,";
				$campos .= "celular, propagandaMedica, hospitalar, acesso, varejo, consumer,";
				$campos .= "outro, musica, lugar,idHierarquia";
				if ($conteudo != "") {
					$campos .= ",image,nomeArquivo";
				}
				$sql = "INSERT INTO participante (" . $campos . ") VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?";
				if ($conteudo != "") {
					$sql .= ",?,?";
				}
				$sql .= ")";
				$res = $connection->prepare ( $sql );
				$nomeCompleto = ($participante->getNomeCompleto () != null) ? utf8_decode ( $participante->getNomeCompleto () ) : "";
				$nomeCracha = ($participante->getNomeCracha () != null) ? utf8_decode ( $participante->getNomeCracha () ) : "";
				$nomeEmpresa = ($participante->getNomeEmpresa () != null) ? utf8_decode ( $participante->getNomeEmpresa () ) : "";
				$cargo = ($participante->getCargo () != null) ? utf8_decode ( $participante->getCargo () ) : "";
				$dataNascimento = ($participante->getDataNascimento () != null) ? utf8_decode ( $participante->getDataNascimento () ) : "";
				$endereco = ($participante->getEndereco () != null) ? $participante->getEndereco () : "";
				$emailProfissional = ($participante->getEmailProfissional () != null) ? $participante->getEmailProfissional () : "";
				$emailPessoal = ($participante->getEmailPessoal () != null) ? $participante->getEmailPessoal () : "";
				$telefone = ($participante->getTelefone () != null) ? $participante->getTelefone () : "";
				$celular = ($participante->getCelular () != null) ? $participante->getCelular () : "";
				$propagandaMedica = ($participante->getPropagandaMedica () != null) ? $participante->getPropagandaMedica () : "";
				$hospitalar = ($participante->getHospitalar () != null) ? $participante->getHospitalar () : "";
				$acesso = ($participante->getAcesso () != null) ? $participante->getAcesso () : "";
				$varejo = ($participante->getVarejo () != null) ? $participante->getVarejo () : "";
				$consumer = ($participante->getConsumer () != null) ? $participante->getConsumer () : "";
				$outro = ($participante->getOutro () != null) ? utf8_decode ( $participante->getOutro () ) : "";
				$musica = ($participante->getMusica () != null) ? utf8_decode ( $participante->getMusica () ) : "";
				$lugar = ($participante->getLugar () != null) ? utf8_decode ( $participante->getLugar () ) : "";
				$idHierarquia = ($participante->getHierarquia ()->getID () != null) ? $participante->getHierarquia ()->getID () : 0;
				$res->bindParam ( 1, $nomeCompleto, PDO::PARAM_STR );
				$res->bindParam ( 2, $nomeCracha, PDO::PARAM_STR );
				$res->bindParam ( 3, $nomeEmpresa, PDO::PARAM_STR );
				$res->bindParam ( 4, $cargo, PDO::PARAM_STR );
				$res->bindParam ( 5, $dataNascimento, PDO::PARAM_STR );
				$res->bindParam ( 6, $endereco, PDO::PARAM_STR );
				$res->bindParam ( 7, $emailProfissional, PDO::PARAM_STR );
				$res->bindParam ( 8, $emailPessoal, PDO::PARAM_STR );
				$res->bindParam ( 9, $telefone, PDO::PARAM_STR );
				$res->bindParam ( 10, $celular, PDO::PARAM_STR );
				$res->bindParam ( 11, $propagandaMedica, PDO::PARAM_STR );
				$res->bindParam ( 12, $hospitalar, PDO::PARAM_STR );
				$res->bindParam ( 13, $acesso, PDO::PARAM_STR );
				$res->bindParam ( 14, $varejo, PDO::PARAM_STR );
				$res->bindParam ( 15, $consumer, PDO::PARAM_STR );
				$res->bindParam ( 16, $outro, PDO::PARAM_STR );
				$res->bindParam ( 17, $musica, PDO::PARAM_STR );
				$res->bindParam ( 18, $lugar, PDO::PARAM_STR );
				$res->bindParam ( 19, $idHierarquia, PDO::PARAM_INT );
				if ($conteudo != "") {
					$res->bindParam ( 20, $conteudo, PDO::PARAM_LOB );
					$res->bindParam ( 21, $nomeArquivo, PDO::PARAM_STR );
				}
				if ($res->execute () === false) {
					/*
					 * echo "<pre>";
					 * print_r ( $res->errorInfo () );
					 */
					$status = false;
				}
			} catch ( Exception $e ) {
				// echo $e->getMessage ();
				$status = false;
			}
		}
		if ($status == true) {
			$mensagem = "Inscrição feita com Sucesso!";
		} else {
			$mensagem = "Falha ao fazer a inscrição!";
		}
		$execute = new TesteExecute ( $status, $mensagem );
		return $execute;
	}
}