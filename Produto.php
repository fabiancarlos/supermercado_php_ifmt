<?php

class Produto{

	//Atributos de Produto
	private $nome, $qtde, $valor_unitario, $localizacao, $unidade_medida, $tipo_produto;

	// Construtor 
	function __construct($nome, $qtde, $valor_unitario, $localizacao, UnidadeMedida $unidade_medida, TipoProduto $tipo_produto){
		$this->nome = $nome;
		$this->qtde = $qtde;
		$this->valor_unitario = $valor_unitario;
		$this->localizacao = $localizacao;
		$this->unidade_medida = $unidade_medida;
		$this->tipo_produto = $tipo_produto;
	}

	// setters
	function setNome($nome){
		$this->nome = $nome;
	}

	function setQtde($qtde){
		$this->qtde = $qtde;
	}

	function setValorUnitario($valor_unitario){
		$this->valor_unitario = $valor_unitario;
	}

	function setLocalizacao($localizacao){
		$this->localizacao = $localizacao;
	}

	function setUnidadeMedida(UnidadeMedida $unidade_medida){
		$this->unidade_medida = $unidade_medida;
	}

	function setTipoProduto(TipoProduto $tipo_produto){
		$this->tipo_produto = $tipo_produto;
	}

	// getters
	function getNome(){
		return $this->nome;
	}

	function getQtde(){
		return $this->qtde;
	}

	function getValorUnitario(){
		return $this->valor_unitario;
	}

	function getLocalizacao(){
		return $this->localizacao;
	}

	function getUnidadeMedida(){
		return $this->unidade_medida;
	}

	function getTipoProduto(){
		return $this->tipo_produto;
	}

	function __toString(){
		return $this->nome . " (" . $this->qtde . " " . $this->unidade_medida . ")" . " - R$ " . $this->valor_unitario . "\n"; 
	}

}
