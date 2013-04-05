<?php 

class PessoaExcepiton extends Exception{

	const NOME_INVALIDO = "Nome deve possuir entre 6 e 60 caracteres.";

	function __construct(String $msg){
		super($msg);
	}

}

