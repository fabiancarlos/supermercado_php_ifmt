<?php

/**
 * Classe que representa um conceito generico/abstrato dos tipos de pessoas que existem no sistema.
 * @abstract Pessoa
 */
abstract class Pessoa{

	//Atributos de Pessoa
	private $nome, $endereco;
	private $data_nascimento;

	// Construtor 
	function __construct($nome, DateTime $data_nascimento, Endereco $endereco){
		$this->setNome($nome);
		$this->data_nascimento = $data_nascimento;
		$this->endereco = $endereco;
	}

	// setters
	function setNome($nome){
		if (strlen($nome) <= 5 || strlen($nome) > 60) {
			throw new Exception(PessoaExcepiton::NOME_INVALIDO);
		}
		$this->nome = $nome;
	}

	/**
	 * @param DateTime $data_nascimento
	 */
	function setDataNascimento($data_nascimento){
		$this->data_nascimento = $data_nascimento->format('d/m/Y');
	}

	function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	/**
	 * @return string 
	 */
	function getDataNascimento(){
		return $this->data_nascimento;
	}

	function getEndereco(){
		return $this->endereco;
	}

	function __toString(){
		return  "ID: " . '------' . "\n" . 
				"Nome: " . $this->nome . "\n" .
				"Data de Nascimento: " . $this->data_nascimento . "\n" .
				$this->endereco;
	}

}
