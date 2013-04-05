<?php

class FormaPagamento {

	//Atributos de FormaPagamento
	private $nome, $maximo_parcelas;


	// Construtor 
	function __construct($nome, $maximo_parcelas){
		$this->nome = $nome;
		$this->maximo_parcelas = $maximo_parcelas;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setMaximoParcelas($maximo_parcelas){
		$this->maximo_parcelas = $maximo_parcelas;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function getMaximoParcelas(){
		return $this->maximo_parcelas;
	}

	function __toString(){
		return $this->nome;
	}

}
