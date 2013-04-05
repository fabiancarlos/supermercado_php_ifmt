<?php

class ItemNotaFiscal{

	//Atributos de ItemNotaFiscal
	private $qtde, $valor_unitario;
	/**
	 * @param Produto $produto 
	*/
	private $produto;

	// Construtor 
	function __construct($qtde, $valor_unitario, Produto $produto){
		$this->qtde = $qtde;
		$this->valor_unitario = $valor_unitario;
		$this->produto = $produto;
	}

	// setters
	function setQtde($qtde){
		$this->qtde = $qtde;
	}

	function setValorUnitario($valor_unitario){
		$this->valor_unitario = $valor_unitario;
	}

	function setProduto(Produto $produto){
		$this->produto = $produto;
	}

	// getters
	function getQtde(){
		return $this->qtde;
	}

	function getsetValorUnitario(){
		return $this->valor_unitario;
	}

	function getProduto(){
		return $this->produto;
	}

	function getValorTotal(){
		return $this->valor_unitario*$this->qtde;
	}

	function __toString(){
		return $this->produto->getNome() . " (" . $this->qtde . ") - " . ($this->valor_unitario * $this->qtde) . "\n";
	}

}
