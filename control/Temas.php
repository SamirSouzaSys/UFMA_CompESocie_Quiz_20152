<?php
$raiz = '../';
require_once($raiz.'infraestrutura/config.php');

require_once $temasQuestoes;

//array(idtema->array(nome,qtdCadastrada))
//buscarTemasNoBd
$temasDisponiveis = array(
                          '1' => array(
                                       'nome'                    => 'Sistemas Distribuídos',
                                       'qtdPerguntasCadastradas' => '26'
                                      ),
                          '2' => array(
                                       'nome'                    => 'Sistemas Operacionais',
                                       'qtdPerguntasCadastradas' => '21'
                                      ),
                          '3' => array(
                                       'nome'                    => 'Engenharia de Software',
                                       'qtdPerguntasCadastradas' => '64'
                                      ),
                          '4' => array(
                                       'nome'                    => 'Pesquisa Operacional',
                                       'qtdPerguntasCadastradas' => '78'
                                      ),
                          '5' => array(
                                       'nome'                    => 'Algoritmos',
                                       'qtdPerguntasCadastradas' => '53'
                                      ),
                          '6' => array(
                                       'nome'                    => 'Estrutura de Dados',
                                       'qtdPerguntasCadastradas' => '11'
                                      ),
                          );
echo printTemasDisponiveis($temasDisponiveis);
?>