<?php
$raiz = '../';
require_once $raiz."dominio/quiz/dao/DAOClass.php";

class UserDAO extends DAOClass{
  private $conLocal;
  // private $sqlSelect = ;
  private $tabName = "usuario_usuario";
  private $sqlInsert = '';

  public function insertUser($user) {
    $this->sqlInsert = "insert into ".$this->tabName." (usuario_usuario_nome, usuario_usuario_email, usuario_usuario_data_nascimento,usuario_usuario_senha, usuario_usuario_nivel_academico, usuario_usuario_curso, usuario_usuario_perfil,usuario_usuario_sexo) VALUES (?,?,?,?,?,?,?,?)";

    // return 'aqui';
    $arrayUser = array($user->getnome(), $user->getemail(), $user->getdataNascimento(), $user->getsenha(), $user->getNivelAcademico(), $user->getCurso(), $user->getPerfil(), $user->getSexo());
    $result = $this->insert($this->sqlInsert, $arrayUser);
    return $result;
  }
}
?>