<?php
$raiz = '../';

require_once($raiz.'infraestutura/config.php');

require_once './ArrayDatabaseConfig.php';

namespace infraestrutura;

/**
 * Classe que irá gerenciar a conxão com o banco de dados específico do domínio
 */
class GerenciadorConexao{
  //Configuração de Banco de dados sendo usada atualmente

  /* Database - Não precisa alterar */
  private $dbMoodle = 'moodle';
  private $dbTcc = 'bd_ambiente_tcc';

  private $ipLocal = "172.18.53.185";

  private $dbConfigEmUsoMoodle;
  private $dbConfigEmUsoTcc;

  public function __construct(){
    if($_SERVER['HTTP_HOST'] != $this->ipLocal){ //ambiente Produção
      // $url_site = $dadosConfig[0]['url_site'];
      $this->dbConfigEmUsoMoodle = 'production_moodle_2.5'; // 'production_moodle_2.5'; // 'test_moodle_2.5'
      $this->dbConfigEmUsoTcc = 'production_tcc'; // 'production_tcc' 'localSam'
    }else{//ambiente Teste
      $this->dbConfigEmUsoMoodle = 'test_moodle_2.5'; // 'production_moodle_2.5'; // 'test_moodle_2.5'
      $this->dbConfigEmUsoTcc = 'test_tcc_localhost'; // 'production_tcc' 'localSam'
      // $url_site = "http://". $ipLocal."/unasusdev/jornadatccpadrao_v2";
    }
  }

  /**
   * Método que gerencia a escolha do tipo de conexão e servidor
   * baseado no:
   * - banco de dados que será usado
   * - tipo de conexão
   *
   * @param array $arrayConfig
   * @return type
   *
   * @author Samir Souza <samir.guitar@gmail.com>
   * @copyright (c) 2014, UNA-SUS/UFMA
   */
  public function abrirConexaoDb($db, $tipoConexao = NULL) {
    $arrayConfigsDb = array();
    $arrayConfigsDb = ArrayDatabaseConfig::obterDatabaseConfig($arrayConfigsDb);

    if (strpos($db, 'moodle') !== FALSE) {
      $servidor = $arrayConfigsDb[$this->dbConfigEmUsoMoodle]['hostname'];
      $usuario = $arrayConfigsDb[$this->dbConfigEmUsoMoodle]['username'];
      $senha = $arrayConfigsDb[$this->dbConfigEmUsoMoodle]['password'];
      $db = $arrayConfigsDb[$this->dbConfigEmUsoMoodle]['database'];
    } elseif (strpos($db, 'bd_ambiente_tcc') !== FALSE) {
      $servidor = $arrayConfigsDb[$this->dbConfigEmUsoTcc]['hostname'];
      $usuario = $arrayConfigsDb[$this->dbConfigEmUsoTcc]['username'];
      $senha = $arrayConfigsDb[$this->dbConfigEmUsoTcc]['password'];
      $db = $arrayConfigsDb[$this->dbConfigEmUsoTcc]['database'];
    }

    //DEFAULT
    if ($tipoConexao == 'mysql' xor $tipoConexao == null) {
      //Conexão mysql
      $conexao = $this->abrirConexaoMySql($servidor, $usuario, $senha, $db);
      mysql_select_db($db, $conexao);
    } elseif ($tipoConexao == 'pdo') {
      //Conexão PDO
      $conexao = $this->abrirConexaoPDO($servidor, $usuario, $senha, $db);
    }
    return $conexao;
  }

  /**
   * Método gerencia o fechamento das conexões indepente do tipo e banco usado
   *
   * @author Samir Souza <samir.guitar@gmail.com>
   * @copyright (c) 2014, UNA-SUS/UFMA
   */
  public function fecharConexaoDb($conexao = null, boolean $pdo = NULL) {
    if ($pdo == TRUE) {
      $this->fecharConexaoPDO($conexao);
    } else { //mysql
      $this->fecharConexaoMySql($conexao);
    }
  }

  private function getSaltDb($db) {
    $objConfigsDb = new ArrayDatabaseConfig();
    $arrayConfigsDb = $objConfigsDb->obterDatabaseConfig();

    if (strpos($db, 'moodle') !== FALSE) {
      $salt = $arrayConfigsDb[$this->dbConfigEmUsoMoodle]['salt'];
    } elseif (strpos($db, 'bd_ambiente_tcc') !== FALSE) {
      $salt = $arrayConfigsDb[$this->dbConfigEmUsoTcc]['salt'];
    }

    return $salt;
  }

  private function abrirConexaoMySql($servidor, $usuario, $senha, $db) {
    try {
      $conexao = mysql_connect($servidor, $usuario, $senha, TRUE);
      mysql_select_db($db, $conexao);
    } catch (Exception $exc) {
      die($exc->getMessage());
    }
    return $conexao;
  }

  private function fecharConexaoMySql($conexao = null) {
    try {
      if ($conexao == NULL) {
        mysql_close($GLOBALS['conexao']);
      } else {
        mysql_close($conexao);
      }
    } catch (Exception $exc) {
      die($exc->getTraceAsString());
    }
  }

  private function abrirConexaoPDO($servidor, $usuario, $senha, $db) {
    try {
      $conectar_banco = new PDO("mysql:host=" . $servidor . ";port=3306;dbname=" . $db, $usuario, $senha);
      $conectar_banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exc) {
      throw new Exception("Ocorreu um erro ao abrir a conexão com o banco de dados! (PDO)<br/>" . $exc->getMessage());
    }

    return $conectar_banco;
  }

  private function fecharConexaoPDO($conexao){
    $conexao = null;
  }
}
?>