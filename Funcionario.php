<?php

class Funcionario extends PessoaFisica{

	//Atributos de Funcionario
	private $data_admissao, $salario, $supervisor;

	function setSupervisor($supervisor){
		$this->supervisor = $supervisor;
	}

	function getSupervisor(){
		return $this->supervisor;
	}

	// Construtor 
	function __construct($nome, DateTime $data_nascimento, $rg, $cpf, DateTime $data_admissao, $salario){
		parent::setNome($nome);
		parent::setDataNascimento($data_nascimento);
		parent::setRg($rg);
		parent::setCpf($cpf);
		$this->data_admissao = $data_admissao->format('d/m/Y');;
		$this->salario = $salario;
	}

	// setters
	function setDataAdmissao(DateTime $data_admissao){
		$this->data_admissao = $data_admissao;
	}

	function setSalario($salario){
		$this->salario = $salario;
	}

	// getters
	function getDataAdmissao(){
		return $this->data_admissao;
	}

	function getSalario(){
		return $this->salario;
	}

	function __toString(){
		return parent::__toString() . "Data Admissão: " . $this->data_admissao . "\n" .
								  "Salário: " . $this->salario . "\n";
	}

}
