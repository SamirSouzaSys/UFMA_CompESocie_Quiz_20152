<?php

$raiz = '../';
require_once $raiz.'dominio/quiz/bean/User.php';
require_once $raiz.'dominio/quiz/dao/UserDAO.php';

if(isset($_POST)){
  if($_POST['inputEmailUser'] != '' && $_POST['inputPasswordUser'] != ''){
    $userEmail = $_POST['inputEmailUser'];
    $key = md5($_POST['inputSenhaUser1']);

    $userNovo = new User(NULL, NULL, $userEmail, NULL, $key, NULL, NULL, NULL, NULL);
    $userDAO = new UserDAO;

    $retorno = '';
    $retorno = $userDAO->selectUser($userNovo);
    // var_dump($retorno);
    // die();

    if($retorno != ''){
      $mensagemRetorno = "===>>>Usuário <b>". $userNovo->getnome() . "</b> Logado com Sucesso!!<<<===";
      header("Location: ".$raiz."view/mainPage.php?msg=".$mensagemRetorno);
    }else{
      $mensagemRetorno = "===>>>Falha no Login!!<<<===" . $retorno . " _";
      header("Location: ".$raiz."view/login.php?msg=".$mensagemRetorno);
    }
  }else{
    echo "Erro ao tentar efetuar Login";
  }
}
  // // $_POST['inputNomeUser']             //=> 'Samir José Lopes Souza' (length=23)
  // // $_POST['inputEmailUser']            //=> 'samir.guitar@gmail.com' (length=22)
  // // $_POST['inputDataNascimentoUser']   //=> '1991-09-20' (length=10)
  // // $_POST['optionsRadiosSexo']         //=> 'Fem' (length=3)
  // // $_POST['inputSenhaUser1']           //=> '123' (length=3)
  // // $_POST['inputSenhaUser2']           //=> '1234' (length=4)
  // // $_POST['selectNivelAcademicoUser']  //=> '2' (length=1)
  // // $_POST['selectCursoUser']           //=> '3' (length=1)
  // // $_POST['selectPerfilUser']          //=> '4' (length=1)
  // // $_POST['optionsRadiosAceita']       //=> 'nao' (length=3)
?>