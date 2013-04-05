<?php

class Endereco{

	private $rua, $bairro, $cep, $complemento, $numero;
	private $cidade;

	// Construtor 
	function __construct($rua, $bairro, $cep, $complemento, $numero, Cidade $cidade){
		$this->rua = $rua;
		$this->bairro = $bairro;
		$this->cep = $cep;
		$this->complemento = $complemento;
		$this->numero = $numero;
		$this->cidade = $cidade;
	}

	// setters
	function setRua($rua){
		$this->rua = $rua;
	}

	function setBairro($bairro){
		$this->bairro = $bairro;
	}

	function setCep($cep){
		$this->cep = $cep;
	}

	function setComplemento($complemento){
		$this->complemento = $complemento;
	}

	function setNumero($numero){
		$this->numero = $numero;
	}

	/**
	 * @param Cidade $cidade
	 */
	function setCidade(Cidade $cidade){
		$this->cidade = $cidade;
	}

	// getters
	function getRua(){
		return $this->rua;
	}

	function getBairro(){
		return $this->bairro;
	}

	function getCep(){
		return $this->cep;
	}

	function getComplemento(){
		return $this->complemento;
	}

	function getNumero(){
		return $this->numero;
	}

	/**
	 * @return string 
	 */
	function getCidade(){
		return $this->cidade;
	}

	function __toString(){
		return "IDEndereco: " . '------' . "\n" .
			   "Rua: " . $this->rua . ", " . $this->numero . "\n" .
			   "Bairro: " . $this->bairro . "\n" .
			   "Complemento: " . $this->complemento . "\n" .
			   "CEP: " . $this->cep . "\n" . 
			   "Cidade: " . $this->cidade . "\n"; 
	}
}
