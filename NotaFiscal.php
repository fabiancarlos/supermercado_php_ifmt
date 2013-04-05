<?php

class NotaFiscal{

	//Atributos de NotaFiscal

	/**
	 * @param Cliente $cliente 
	*/
	private $cliente;
	/**
	 * @param Funcionario $funcionario 
	*/
	private $funcionario;
	/**
	 * @param DateTime $data 
	*/
	private $data;
	/**
	 * @param Array<ItemNotaFiscal> $itens 
	*/
	private $itens;
	/**
	 * @param Array<NotaFiscalFormaPagamento> $formas_pagamento 
	*/
	private $formas_pagamento;

	// Construtor 
	function __construct(Cliente $cliente, Funcionario $funcionario, DateTime $data, Array $itens, Array $formas_pagamento){
		$this->cliente = $cliente;
		$this->funcionario = $funcionario;
		$this->data = $data->format('d/m/Y');
		$this->itens = $itens;
		$this->formas_pagamento = $formas_pagamento;
	}

	// setters
	function setCliente(Cliente $cliente){
		$this->cliente = $cliente;
	}

	function setFuncionario(Funcionario $funcionario){
		$this->funcionario = $funcionario;
	}

	function setData(DateTime $data){
		$this->data = $data->format('d/m/Y');
	}

	function setItens(Array $itens){
		$this->itens = $itens;
	}

	function setFormasPagamento(Array $formas_pagamento){
		$this->formas_pagamento = $formas_pagamento;
	}

	// getters
	function getCliente(){
		return $this->cliente;
	}

	function getFuncionario(){
		return $this->funcionario;
	}

	function getData(){
		return $this->data;
	}

	function getItens(){
		return $this->itens;
	}

	function getFormasPagamento(){
		return $this->formas_pagamento;
	}

	function getValorTotal(){
		$valor_total = 0;
		foreach ($this->itens as $iten) {
			$valor_total += $iten->getValorTotal();
		}
		return $valor_total;
	}

	function getValorTotalPago(){
		$valor_total = 0;
		foreach ($this->formas_pagamento as $pagamento) {
			$valor_total += $pagamento->getValor();
		}
		return $valor_total;
	}

	/**
	 * @return boolean 
	 */
	function isPago(){
		if ($this->getValorTotal() == $this->getValorTotalPago()) {
			return true;
		}
	}

	function __toString(){
		$sItens = "";
		foreach ($this->itens as $iten) {
			$sItens .= $iten->getProduto()->getNome() . ',';
		}
		$sFormas = "";
		foreach ($this->formas_pagamento as $pagamento) {
			$sFormas .= $pagamento->getFormaPagamento()->getNome() . ',';
		}

		return "Data da Emissão: " . $this->data . "\n" .
				"Cliente: " . $this->cliente->getNome() . "\n" .
				"Funcionário: " . $this->funcionario->getNome() . "\n" .
				"Itens da Nota: " . $sItens . "\n" .
				"Formas de Pagamento: " . $sFormas;
	}

}
