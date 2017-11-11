<?php

namespace src\model;

require_once 'model/Cargo.php';
class Participante {
	private $id;
	private $nome;
	private $dataNascimento;
	private $endereco;
	private $numeroEndereco;
	private $complementoEndereco;
	private $cargo;
	private $email;
	private $musica;
	private $lugar;
	public function __construct($id, $nome, $dataNascimento, $endereco, $numeroEndereco, $complementoEndereco, $cargo, $email, $musica, $lugar) {
		$this->id = $id;
		$this->nome - $nome;
		$this->dataNascimento = $dataNascimento;
		$this->endereco = $endereco;
		$this->numeroEndereco = $numeroEndereco;
		$this->complementoEndereco = $complementoEndereco;
		$this->cargo = $cargo;
		$this->email = $email;
		$this->musica = $musica;
		$this->lugar = $lugar;
	}
	public function getID() {
		return $this->id;
	}
	public function setID($id) {
		$this->id = $id;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	public function setDataNascimento($dataNascimento) {
		$this->dataNascimento = $dataNascimento;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEndereco() {
		return $this->endereco;
	}
	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getNumeroEndereco() {
		return $this->numeroEndereco;
	}
	public function setNumeroEndereco($numeroEndereco) {
		$this->numeroEndereco = $numeroEndereco;
	}
	public function getComplementoEndereco() {
		return $this->complementoEndereco;
	}
	public function setComplementoEndereco($complementoEndereco) {
		$this->complementoEndereco = $complementoEndereco;
	}
	public function getCargo() {
		return $this->cargo;
	}
	public function setCargo($cargo) {
		$this->cargo = $cargo;
	}
	public function getMusica() {
		return $this->musica;
	}
	public function setMusica($musica) {
		$this->musica = $musica;
	}
	public function getLugar() {
		return $this->lugar;
	}
	public function setLugar($lugar) {
		$this->lugar = $lugar;
	}
}

