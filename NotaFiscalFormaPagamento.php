<?php

class NotaFiscalFormaPagamento {

	//Atributos de NotaFiscalFormaPagamento
	private $valor;
	/**
	 * @param FormaPagamento $forma_pagamento 
	*/
	private $forma_pagamento;


	// Construtor 
	function __construct($valor, FormaPagamento $forma_pagamento){
		$this->valor = $valor;
		$this->forma_pagamento = $forma_pagamento;
	}

	// setters
	function setDataAdmissao($valor){
		$this->valor = $valor;
	}

	function setFormaPagamento(FormaPagamento $forma_pagamento){
		$this->forma_pagamento = $forma_pagamento;
	}

	// getters
	function getDataAdmissao(){
		return $this->valor;
	}

	function getFormaPagamento(){
		return $this->forma_pagamento;
	}

	function __toString(){
		return "R$ ". $this->valor. " (". $this->forma_pagamento. ")\n";
	}

}
