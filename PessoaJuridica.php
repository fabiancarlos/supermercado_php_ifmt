<?php

/**
 * Classe especializada de Pessoa
 * @abstract PessoaJuridica
 */
class PessoaJuridica extends Pessoa{

	//Atributos de PessoaJuridica
	private $cnpj, $inscricao_estadual, $nome_fantasia;

	// Construtor 
	function __construct($nome, DateTime $data_nascimento, $cnpj, $inscricao_estadual, $nome_fantasia){
		parent::setNome($nome);
		parent::setDataNascimento($data_nascimento);
		parent::setEndereco($endereco);
		$this->cnpj = $cnpj;
		$this->inscricao_estadual = $inscricao_estadual;
		$this->nome_fantasia = $nome_fantasia;
	}

	// setters
	function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	function setInscricaoEstadual($inscricao_estadual){
		$this->inscricao_estadual = $inscricao_estadual;
	}

	function setNomeFantasia($nome_fantasia){
		$this->nome_fantasia = $nome_fantasia;
	}

	// getters
	function getCnpj(){
		return $this->cnpj;
	}

	function getInscricaoEstadual(){
		return $this->inscricao_estadual;
	}

	function getNomeFantasia(){
		return $this->nome_fantasia;
	}

	function __toString(){
		return parent::__toString() .
			   "Nome Fantasia: " . $this->nome_fantasia . "\n" . 
			   "CNPJ: " . $this->cnpj . "\n" . 
			   "Inscrição Estadual: " . $this->inscricao_estadual . "\n";
	}

}
