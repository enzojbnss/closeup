<?php
namespace src\view;
class Page{
	
	private $raiz;
	private $corpo;
	private $controller;
	private $action;
	
	public function __construct($url,$base = "Layout.php"){
		
	}
	
	public function getRaiz(){
		return $this->raiz;
	}
	
	public function getCorpo(){
		return $this->corpo;
	}
	
	public function getController(){
		return $this->controller;
	}
	
	public function getAction(){
		return $this->action;
	}
}