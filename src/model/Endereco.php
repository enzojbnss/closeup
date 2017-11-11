<?php
namespace src\model;
class Endereco {
	private $id;
	private $cep;
	private $logradouro;
	private $uf;
	private $bairro;
	private $cidade;
	public function __construct($id, $cep, $logradouro, $uf, $bairro, $cidade) {
		$this->id = $id;
		$this->cep = $cep;
		$this->logradouro = $logradouro;
		$this->uf = $uf;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
	}
	public function getID() {
		return $this->id;
	}
	public function setID($id) {
		$this->id = $id;
	}
	public function getCep() {
		return $this->cep;
	}
	public function setCep($cep) {
		$this->cep = $cep;
	}
	public function getLogradouro() {
		return $this->logradouro;
	}
	public function setLogradouro($logradouro) {
		$this->logradouro = $logradouro;
	}
	public function getUF() {
		return $this->uf;
	}
	public function setUF($uf) {
		$this->uf = $uf;
	}
	public function getBairro() {
		return $this->bairro;
	}
	public function setBairro($Bairro) {
		$this->bairro = $bairro;
	}
	public function getCidade() {
		return $this->cidade;
	}
	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}
}