<?php

class User{
  private $Id;
  private $nome;
  private $email;
  private $dataNascimento;
  private $senha;
  private $NivelAcademico;
  private $Curso;
  private $Perfil;
  private $Status;
  private $Sexo;

  function __construct($Id = NULL, $nome = NULL, $email = NULL, $dataNascimento = NULL, $senha = NULL, $NivelAcademico = NULL, $Curso = NULL, $Perfil = NULL, $Sexo = NULL){

    $this->Id = $Id;
    $this->nome = $nome;
    $this->email = $email;
    $this->dataNascimento = $dataNascimento;
    $this->senha = $senha;
    $this->NivelAcademico = $NivelAcademico;
    $this->Curso = $Curso;
    $this->Perfil = $Perfil;
    $this->Sexo = $Sexo;
  }

  function toString(){
    return 'Objeto User - '.
    'Id: '. $this->Id . ', '.
    'nome: '. $this->nome . ', '.
    'email: '. $this->email . ', '.
    'dataNascimento: '. $this->dataNascimento . ', '.
    'Senha: '. $this->senha . ','.
    'NivelAcademico: '. $this->NivelAcademico . ', '.
    'Curso: '. $this->Curso . ', '.
    'Perfil: '. $this->Perfil . ', '.
    'Sexo: '. $this->Sexo . ', '.
    '___Fim___';
  }

  public function getId(){
    return $this->Id;
  }
  public function getnome(){
    return $this->nome;
  }
  public function getemail(){
    return $this->email;
  }
  public function getdataNascimento(){
    return $this->dataNascimento;
  }
  public function getSenha(){
    return $this->senha;
  }
  public function getNivelAcademico(){
    return $this->NivelAcademico;
  }
  public function getCurso(){
    return $this->Curso;
  }
  public function getPerfil(){
    return $this->Perfil;
  }
  public function getStatus(){
    return $this->Status;
  }
  public function getSexo(){
    return $this->Sexo;
  }

}
?>