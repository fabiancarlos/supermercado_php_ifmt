<?php

class Cidade{

	private $nome, $ddd;
	private $estado;

	// Construtor 
	function __construct($nome, $ddd, Estado $estado){
		$this->nome = $nome;
		$this->ddd = $ddd;
		$this->estado = $estado;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setDdd($ddd){
		$this->ddd = $ddd;
	}

	function setEstado(Estado $estado){
		$this->estado = $estado;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function getDdd(){
		return $this->ddd;
	}

	function getEstado(){
		return $this->estado;
	}

	function __toString(){
		return $this->nome . " (" . $this->estado->getSigla() . ")" . "\n" .
			   "DDD: " . $this->ddd . "\n";
	}

}
