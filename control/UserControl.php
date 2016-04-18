<?php

$raiz = '../';
require_once $raiz.'dominio/quiz/bean/User.php';
require_once $raiz.'dominio/quiz/dao/UserDAO.php';

if(isset($_POST)){
  // 'fotoUser' => string '' (length=0)
  if(($_POST['inputSenhaUser1'] == $_POST['inputSenhaUser2'])
     && ($_POST['optionsRadiosAceita'] != 'nao')
     ){
    $userNovo = new User(NULL, $_POST['inputNomeUser'], $_POST['inputEmailUser'], $_POST['inputDataNascimentoUser'],
                         md5($_POST['inputSenhaUser1']), $_POST['selectNivelAcademicoUser'], $_POST['selectCursoUser'],
                         $_POST['selectPerfilUser'], $_POST['optionsRadiosSexo']);
    $userDAO = new UserDAO;

    if($userDAO->insertUser($userNovo)){
      $mensagemRetorno = "===>>>Usuário <b>". $userNovo->getnome() . "</b> Cadastrado com Sucesso!!<<<===";
      header("Location: ".$raiz."view/login.php?msg=".$mensagemRetorno);
    }
  }

  // $_POST['inputNomeUser']             //=> 'Samir José Lopes Souza' (length=23)
  // $_POST['inputEmailUser']            //=> 'samir.guitar@gmail.com' (length=22)
  // $_POST['inputDataNascimentoUser']   //=> '1991-09-20' (length=10)
  // $_POST['optionsRadiosSexo']         //=> 'Fem' (length=3)
  // $_POST['inputSenhaUser1']           //=> '123' (length=3)
  // $_POST['inputSenhaUser2']           //=> '1234' (length=4)
  // $_POST['selectNivelAcademicoUser']  //=> '2' (length=1)
  // $_POST['selectCursoUser']           //=> '3' (length=1)
  // $_POST['selectPerfilUser']          //=> '4' (length=1)
  // $_POST['optionsRadiosAceita']       //=> 'nao' (length=3)
}else{
  echo "Erro ao tentar inserir o usuário";
}
?>