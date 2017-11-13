<?php
use src\model\Participante;
use src\dao\ParticipanteDao;
use src\utils\Result;
use src\dao\EnderecoDao;

class  ParticipanteController {
	
	private $page;
	
	public function __construct($page) {
		$this->page = $page;
	}
	
	public function index() {
		include $this->page->getRaiz ();
	}
	
	public function  Salvar(){
		$param=[];
		$coversor = new Coversor();
		$tipoEmail = $coversor->getObject($this->page->getParamJSon("tipoEmail"), "TipoEmail", null);
		$param["tipoEmail"] = $tipoEmail;
		$email = $coversor->getObject($this->page->getParamJSon("email"), "Email", $param); 
		$param["email"] = $email;
		$endereco = $coversor->getObject($this->page->getParamJSon("endereco"), "Endereco", null);
		$param["endereco"] = $this->trataEndereco($endereco);
		$cargo = $coversor->getObject($this->page->getParamJSon("cargo"), "Cargo", null);
		$param["cargo"] = $cargo;
		$participante = $coversor->getObject($this->page->getParamJSon("participante"), "Participante", $param);
		$dao = new ParticipanteDao();
		$exacute = $dao->incluir($participate);
		$result = new Result([$exacute]);
		$result->useJsonSimple();
	}
	
	private function trataEndereco($endereco){
		$daoLocal = new EnderecoDao();
		$teste = $daoLocal->existe($endereco);
		if($teste){
			$endereco->setID($daoLocal->getID($endereco));
		}else{
			$daoLocal->incluir($endereco);
		}
		return $endereco;
	}
}


