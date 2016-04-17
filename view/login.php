<?php
$raiz = '../';

$showNavigation = false;
require_once($raiz.'infraestrutura/config.php');

include_once $header;

// $objSessaoSistema = $raiz.'control/SessaoSistema.php';

// echo $objSessaoSistema;
// die(1);
?>

<div class="container">
  <div class="row text-center">
    <h1 class="page-header">Participe do nosso Quiz Online</h1>
    <h4>Seja Professor ou Aluno, junte-se a nós!</h4>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Login</h3>
        </div>
        <div class="panel-body">
          <!-- <form id="formLogin" role="form" action="<?php echo $objSessaoSistema; ?>" method="post"> -->
          <form id="formLogin" role="form" action="" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Digite o seu E-mail" name="email" type="email" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Digite a sua Senha" name="password" type="password" value="">
              </div>
              <div class="form-group text-right">
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-success">Login</button>
                <a href="registerUser.php" class="btn btn-warning">1ª Acesso</a>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once $footer;
?>