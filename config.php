<?php 

//VARIÁVEIS GLOBAIS
$email = 'loja@gmail.com';
$telefone = '(33) 3333-3333';
$whatsapp = '(33) 33333-3333';
$whatsapp_link = '5533333333333';
$nome_loja = 'Loja';
$texto_destaque = 'Todos os Produtos em Promoção!';
$endereco_loja = 'Rua X, Número 50, Bairro Centro, São Paulo - SP';

$url_loja = 'localhost/loja/';


//VARIAVEIS DO BANCO DE DADOS
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'loja';


//VARIAVEIS DO SITE
$itens_por_pagina = 6;



//CONFIGURAÇÕES DO FRETE DOS CORREIOS
$cep_origem = '00000-000';

//INFORMAÇÕES EM CM (EMBALAGEM DE ENVIO)
$comprimento_caixa = '30';
$largura_caixa = '20';
$altura_caixa = '20';
$diametro_caixa = '25';

//Indica  se  a  encomenda  será  entregue  com  o  serviço adicional mão própria.Valores possíveis: S ou N   (S –Sim, N –Não)
$mao_propria = 'N';

//Valor declarado, 1 para sim e 0 para não
$valor_declarado = 0;

//Aviso de recebimento  S ou N
$aviso_recebimento = 'N';

//1 Para caixa/Pacote  -   2 para rolo/prisma  -   3 para envelope
$formato_frete = 1;



//VARIAVEIS PARA O CUPOM
//total de cartões para o cliente trocar pelo cumpom de desconto
$total_cartoes_troca = 10;
//valor do desconto para quando o cliente completar x cupons (colocar o valor aqui inteiro)
$valor_cupom_cartao = 20;
$dias_uso_cupom = 7;


//NIVEL MINIMO PARA ALERTA NO ESTOQUE
$nivel_estoque = 5;


//VARIAVEL QUE DEFINE A LIMPEZA DO CARRINHO APÓS 2 DIAS SEM O USUÁRIO FECHAR A COMPRA (NO CASO ABAIXO EU OPTEI POR DOIS DIAS)
$dias_limpar_carrinho = 2;


//definir se vai ser possível retirar o produto no local sim ou não!
$retirada_local = 'sim';

//nota minima para mostrar a avaliação do produto na página do produto
//no exemplo abaixo com valor 3, ele só mostra produto avaliado de 3 a 5
$nota_minima = 3;

 ?>