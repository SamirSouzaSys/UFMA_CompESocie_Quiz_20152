<?php

Class Acesso{
  private $id;
  private $user;
  private $perfilUser;
  private $curso;
  private $nivelAcademico;
  private $Status;

  function __construct($id = NULL, $user = NULL, $perfilUser = NULL, $curso = NULL, $nivelAcademico = NULL, $Status = NULL) {

    $this->id = $id;
    $this->user = $user;
    $this->perfilUser = $perfilUser;
    $this->curso = $curso;
    $this->nivelAcademico = $nivelAcademico;
    $this->status = $Status;
  }

  public function toString(){
    return 'Objeto Acesso - '.
    'Id: ' . $this->id .', '.
    'User: '.$this->user .', '.
    'PerfilUser: '.$this->perfilUser .', '.
    'Curso: '.$this->curso .', '.
    'NivelAcadêmico: '.$this->nivelAcademico .', '.
    'Status: '.$this->status .', '.
    '__Fim__';
  }

}


?>