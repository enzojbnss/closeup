<?php
namespace src\dao;
require_once 'src/model/Participante.php';
require_once 'src/database/Commad.php';
require_once 'src/utils/TesteExecute.php';

use src\model\Participante;
use src\database\Commad;
use src\utils\TesteExecute;

class ParticipanteDao {
	public function incluir($participate) {
		$participate = new Participante ();
		$execute="";
		$mensagem="";
		$db ["tab"] = "participante";
		$db ["campos"] = "nome,dataNascimento,idEndereco,numeroEndereco,complementoEndereco,idCargo,email,idTipoEmail,musica,lugar";
		$valor = "'" . $participate->getNome () . "','" . $participate->getDataNascimento () . "',";
		$valor .= $participate->getEndereco ()->getID () . ",'" . $participate->getNumeroEndereco () . "','";
		$valor .= $participate->getComplementoEndereco () . "'," . $participate->getCargo ()->getID () . ",";
		$valor .= $participate->getEmail ()->getID () . "," . $participate->getEmail ()->getTipoEmail ()->getID () . ",'";
		$valor .= $participate->getMusica () . "','" . $participate->getLugar () . "'";
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