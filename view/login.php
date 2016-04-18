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
  <?php
  if(isset($_GET['msg'])){?>
    <div class="row">
      <div class="alert alert-success alert-dismissable text-center">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?php echo $_GET['msg']; ?>
      </div>
    </div>
  <?php
  }
  ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Login</h3>
        </div>
        <div class="panel-body">
          <!-- <form id="formLogin" role="form" action="<?php //echo $objSessaoSistema; ?>" method="post"> -->
          <form id="formLogin" role="form" action="<?php echo $controlLogin;?>" method="post">
            <fieldset>
              <div class="form-group">
                <label class="control-label" for="inputEmailUser">Email</label>
                <input class="form-control" placeholder="Digite o seu E-mail" id="inputEmailUser" name="inputEmailUser" type="email" autofocus>
              </div>
              <div class="form-group">
                <label class="control-label" for="inputPasswordUser">Senha</label>
                <input class="form-control" placeholder="Digite a sua Senha" id="inputPasswordUser" name="inputPasswordUser" type="password" value="">
              </div>
              <div class="form-group text-right">
                <!-- Change this to a button or input when using this as a form -->
                <a href="registerUser.php" class="btn btn-warning">1ª Acesso</a>
                <button type="submit" class="btn btn-success">Login</button>
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