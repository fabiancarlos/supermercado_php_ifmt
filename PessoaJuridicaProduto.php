<?php

class PessoaJuridicaProduto{

	//Atributos de PessoaJuridicaProduto
	private $fornecedor; 
	private $produto;

	// Construtor 
	function __construct(PessoaJuridica $fornecedor, Produto $produto){
		$this->fornecedor = $fornecedor;
		$this->produto = $produto;
	}

	// setters
	function setFornecedor(PessoaJuridica $fornecedor){
		$this->fornecedor = $fornecedor;
	}

	function setProduto(Produto $produto){
		$this->produto = $produto;
	}

	// getters
	function getFornecedor(){
		return $this->fornecedor;
	}

	function getProduto(){
		return $this->produto;
	}

	function __toString(){
		return $this->fornecedor . " - " . $this->produto;
	}

}
