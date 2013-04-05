<?php

class Estado{

	private $nome, $sigla, $regiao;

	// Construtor 
	function __construct($nome, $sigla, $regiao){
		$this->nome = $nome;
		$this->sigla = $sigla;
		$this->regiao = $regiao;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setSigla($sigla){
		$this->sigla = $sigla;
	}

	function setRegiao($regiao){
		$this->regiao = $regiao;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function getSigla(){
		return $this->sigla;
	}

	function getRegiao(){
		return $this->regiao;
	}

	function __toString(){
		return "IDEstado: " . '------' . "\n" .
			   "Estado: " . $this->nome . " (" . $this->sigla . ")" . "\n" .
			   "Região: " . $this->regiao . "\n";
	}

}
