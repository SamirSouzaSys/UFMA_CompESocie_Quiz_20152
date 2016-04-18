<?php
$raiz = '../';

require_once($raiz.'infraestutura/config.php');

require_once './ArrayDatabaseConfig.php';

namespace infraestrutura;

/**
 * Classe que irá gerenciar a conxão com o banco de dados específico do domínio
 */
class GerenciadorConexao{
  private static $pdo;

  //Configuração de Banco de dados sendo usada atualmente
  private $servidor = '127.0.0.1';
  private $dbAtual = 'ufma_compSociedade';
  private $user = 'root';
  private $password = '';

  public function __construct(){
    if (self::$pdo == null) {
      $dsn = "mysql:host={$servidor};dbname={$dbAtual};charset=utf8";
      self::$pdo = new \PDO($dsn, $user, $password);
      self::$pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
      return $this->pdo;
    }
  }
}
?>