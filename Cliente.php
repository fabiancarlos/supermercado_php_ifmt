<?php

class Cliente extends PessoaFisica{

	//Atributos de Cliente
	private $numero_fidelidade, $pontos_fidelidade;

	// Construtor 
	function __construct($nome, DateTime $data_nascimento, Endereco $endereco, $rg, $cpf, $numero_fidelidade, $pontos_fidelidade){
		parent::setNome($nome);
		parent::setDataNascimento($data_nascimento);
		parent::setEndereco($endereco);
		parent::setRg($rg);
		parent::setCpf($cpf);
		$this->numero_fidelidade = $numero_fidelidade;
		$this->pontos_fidelidade = $pontos_fidelidade;
	}

	// setters
	function setNumeroFidelidade($numero_fidelidade){
		$this->numero_fidelidade = $numero_fidelidade;
	}

	function setPontosFidelidade($pontos_fidelidade){
		$this->pontos_fidelidade = $pontos_fidelidade;
	}

	// getters
	function getNumeroFidelidade(){
		return $this->numero_fidelidade;
	}

	function getPontosFidelidade(){
		return $this->pontos_fidelidade;
	}

	function __toString(){
		return parent::__toString() . "\n" 
			. "Nº Fidelidade: " . $this->getNumeroFidelidade() . "\n" 
			. "Pontos: " . $this->getPontosFidelidade() . "\n";
	}

}
