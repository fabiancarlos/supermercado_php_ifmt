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
require_once 'PessoaJuridica.php';
require_once 'Produto.php';
require_once 'TipoProduto.php';
require_once 'UnidadeMedida.php';
require_once 'PessoaJuridicaProduto.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'FormaPagamento.php';
require_once 'NotaFiscalFormaPagamento.php';
require_once 'ItemNotaFiscal.php';
require_once 'NotaFiscal.php';



$time = new DateTime();

$estado = new Estado('Mato Grosso', 'MT', 'Centro-oeste');
$cidade = new Cidade('Cuiaba', '65', $estado);
$endereco = new Endereco('rua 2', 'centro', '78000-65', 'casa', '55', $cidade);

echo "PESSOA FISICA\n\n";

$cliente = new Cliente('Fabian Carlos', $time, $endereco, '283.323.33-22', '323.546.782-32', 4336, 76);

echo $cliente . "\n";

echo "PESSOA JURIDICA\n\n";

$pessoa_juridiaca = new PessoaJuridica('Van Damme', $time, '12.123.123/0000-12', '12345', 'Empresa WEB BOM PINGA');

$tipo_produto = new TipoProduto('PAPELARIA');
$unidade_medida = new UnidadeMedida("Unidade","UN","");

$produto_01 = new Produto("Lapis", 130, 1.80, "", $unidade_medida, $tipo_produto);
$produto_02 = new Produto("Caderno", 52, 23.40, "", $unidade_medida, $tipo_produto);

$pessoa_juridica_produto = new PessoaJuridicaProduto($pessoa_juridiaca, $produto_01);

echo $pessoa_juridica_produto . "\n";

echo "Funcionario\n\n";

$funcionario = new Funcionario("Pedro Paulo", $time,"1234","123.456.789-00", $time, 1200.40);

echo $funcionario . "\n";

echo "NOTA FISCAL E PAGAMENTO\n\n";

$forma_pagamento = new FormaPagamento("Dinheiro", 1);

$nota_fiscal_pagamento_01 = new NotaFiscalFormaPagamento(6.55, $forma_pagamento);
$nota_fiscal_pagamento_02 = new NotaFiscalFormaPagamento(9.60, $forma_pagamento);

$nota_pagamento = array($nota_fiscal_pagamento_01, $nota_fiscal_pagamento_02);

echo $nota_fiscal_pagamento;

$item_nota_fiscal_01 = new ItemNotaFiscal(6, $produto_01->getValorUnitario(), $produto_01);
$item_nota_fiscal_02 = new ItemNotaFiscal(4, $produto_02->getValorUnitario(), $produto_02);

$itens = array($item_nota_fiscal_01, $item_nota_fiscal_02);

$nota_fiscal = new NotaFiscal($cliente, $funcionario, $time, $itens, $nota_pagamento);

echo $nota_fiscal;

