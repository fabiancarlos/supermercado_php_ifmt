<?php

class UnidadeMedida{

	//Atributos de UnidadeMedida
	private $nome, $sigla, $descricao;

	// Construtor 
	function __construct($nome, $sigla, $descricao){
		$this->nome = $nome;
		$this->sigla = $sigla;
		$this->descricao = $descricao;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setSigla($sigla){
		$this->sigla = $sigla;
	}

	function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function getSigla(){
		return $this->sigla;
	}

	function getDescricao(){
		return $this->descricao;
	}

	function __toString(){
		return $this->sigla;
	}

}
