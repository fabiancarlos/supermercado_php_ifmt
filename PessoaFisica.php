<?php

/**
 * Classe especializada de Pessoa
 * @abstract PessoaFisica
 */
abstract class PessoaFisica extends Pessoa{

	//Atributos de PessoaFisica
	private $cpf, $rg;

	// Construtor 
	function __construct($nome, DateTime $data_nascimento, Endereco $endereco, $rg, $cpf){
		parent::setNome($nome);
		parent::setDataNascimento($data_nascimento);
		parent::setEndereco($endereco);
		$this->cpf = $cpf;
		$this->rg = $rg;
	}

	// setters
	function setCpf($cpf){
		$this->cpf = $cpf;
	}

	function setRg($rg){
		$this->rg = $rg;
	}

	// getters
	function getCpf(){
		return $this->cpf;
	}

	function getRg(){
		return $this->rg;
	}

	function __toString(){
		return parent::__toString() . "\n" .
			   "RG: " . $this->rg . "\n" .
			   "CPF: " . $this->cpf . "\n";
	}

}
