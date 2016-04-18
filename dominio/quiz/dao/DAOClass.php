<?php
class DAOClass{

  private static $pdo;

  //Configuração de Banco de dados sendo usada atualmente
  private $servidor = 'localhost';
  private $dbAtual = 'ufma_compSociedade';
  private $user = 'root';
  private $password = '';

  public function __construct(){
    if (self::$pdo == null) {
      $dsn = "mysql:host={$this->servidor};dbname={$this->dbAtual};charset=utf8";
      self::$pdo = new \PDO($dsn, $this->user, $this->password);
      self::$pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    }
  }

  public function insert($sql, array $argumentos = array()) {
    try {
      $stmt = $this->preparar($sql, $argumentos);
      $stmt->execute();
    } catch(PDOException $e) {
      return 'Error: ' . $e->getMessage();
    }
    return $stmt->rowCount();
  }

  /**
   * @param string $sql
   * @param array $argumentos
   * @return array
   */
  public function select($sql, array $argumentos = array()) {
    try {
      $stmt = $this->preparar($sql, $argumentos);
      $stmt->execute();
    } catch(PDOException $e) {
      return 'Error: ' . $e->getMessage();
    }
    return $stmt->fetchAll();

  }

  /**
   * @param string $sql
   * @param array $argumentos
   * @return \PDOStatement
   */
  public function preparar($sql, array $argumentos = array()) {
    $stmt = self::$pdo->prepare($sql);
    foreach ($argumentos as $c => $v){
      $stmt->bindValue(($c+1), $v);
    }
    return $stmt;
  }

    /**
    * @param string $sql
    * @param array $argumentos
    * @return boolean
    */
    public function executar($sql, array $argumentos = array()) {
      $stmt = $this->preparar($sql, $argumentos);
      return $stmt->execute();
    }

}
?>