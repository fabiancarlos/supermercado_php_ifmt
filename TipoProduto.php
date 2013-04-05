<?php

class TipoProduto{

	//Atributos de TipoProduto
	private $nome;

	// Construtor 
	function __construct($nome){
		$this->nome = $nome;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function __toString(){
		return "tipo: " . $this->nome . "\n";
	}

}
