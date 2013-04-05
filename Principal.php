<?php 

/**
* Classe especializada de Pessoa
* @author Fabian Carlos <fabian.pow@gmail.com>, Leandro Correa <oncorrea@gmail.com>, Mayara Marta <mayara-sml@hotmail.com>
**/

/* phpinfo(); "show php configurarion"
ini_set('display_errors', '1'); "case errors dont appears"*/

header('Content-type: text/plain; charset=utf-8');
require_once 'Estado.php'; 
require_once 'Cidade.php';
require_once 'Endereco.php'; 

require_once 'exception/PessoaExcepiton.php'; 
require_once 'Pessoa.php'; 
require_once 'PessoaFisica.php';
require_once 'Cliente.php'; 

$estado = new Estado('Mato Grosso', 'MT', 'Centro-oeste');
$cidade = new Cidade('Cuiaba', '65', $estado);
$endereco = new Endereco('rua 2', 'centro', '78000-65', 'casa', '55', $cidade);

$time = new DateTime();

$cliente = new Cliente('Fabian Carlos', $time, $endereco, '283.323.33-22', '323.546.782-32', 4336, 76);

echo $cliente;


