<?php
$raiz = '../';
$showNavigation = true;

require_once($raiz.'infraestrutura/config.php');

include_once $header;

// $objSessaoSistema = $raiz.'control/SessaoSistema.php';

// echo $objSessaoSistema;
// die(1);

?>
<!-- Morris Charts CSS -->
<link href="<?php echo $rootProject . $assetsLocation;?>/morris/morris.css" rel="stylesheet">

<div class="page-wrapper">
  <div class="row">
    <h2 class="page-header">Ranking<br>
      <small>Em tempo real!</small>
    </h2>
  </div>
  <div class="row ">
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          Pessoas Jogando Diariamente
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div id="morris-area-chart"></div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-lg-6 -->
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          Perguntas respondidas anualmente
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
          <div id="morris-bar-chart"></div>
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
  </div>
  <div class="row">

    <!-- <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Login</h3>
        </div>
        <div class="panel-body">
          <!-- <form id="formLogin" role="form" action="<?php echo $objSessaoSistema; ?>" method="post"> -->
          <!-- <form id="formLogin" role="form" action="" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Digite o seu E-mail" name="email" type="email" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Digite a sua Senha" name="password" type="password" value="">
              </div>
              <div class="form-group text-right">
                <!-- Change this to a button or input when using this as a form -->
                <!-- <button type="submit" class="btn btn-success">Login</button>
                <a href="registerUser.php" class="btn btn-warning">1ª Acesso</a> -->
              <!-- </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div> -->
  </div>
</div>

<?php
include_once $footer;
?>

<!-- Morris Charts JavaScript -->
<script src="<?php echo $rootProject . $assetsLocation;?>/morris/raphael.min.js"></script>
<script src="<?php echo $rootProject . $assetsLocation;?>/morris/morris.min.js"></script>
<script src="<?php echo $rootProject . $assetsLocation;?>/morris/morris-data.js"></script>