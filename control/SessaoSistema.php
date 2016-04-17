<?php
$raiz = '../';
// require_once($raiz.'config/config.php');
// require_once($raiz.'model/AcessoModel.php');

// $acao = '';
// if($_POST[])

// $sessaoSistema = new SessaoSistema($_POST['acao']);

class SessaoSistema{

  public function __construct() {
    if (!isset($_SESSION))
      session_start();
  }

  public function destruir() {

    if (isset($_SESSION))
      return session_destroy();

    return false;
  }

  /**
   * @param string $nome
   * @return boolean
   */
  public function existe($nome) {

    return isset($_SESSION[$nome]);
  }

  public function verificar($nome) {

    if ($this->existe($nome))
      return $_SESSION[$nome];

    return null;
  }

  public function gravar($nome, $valor) {

    $_SESSION[$nome] = $valor;
  }

  // public function autenticarUser($user, $key){
  //   $acessoM = new AcessoModel;
  //   $acessoM->autenticar($user, $key);
  // }
  //gera sessao

  //logar

  //deslogar
}
?>