<?php
$raiz = '../';
$showNavigation = true;

require_once($raiz.'infraestrutura/config.php');

include_once $header;

// $objSessaoSistema = $raiz.'control/SessaoSistema.php';

// echo $objSessaoSistema;
// die(1);

?>

<div class="page-wrapper" style="padding:10px">
  <div class="row text-center">
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
</div>
<div class="row">
  <h2 class="page-header">Início<br>
    <small>Corra e aumente o seu conhecimento!</small>
  </h2>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        Quer aprender sobre o quê agora?!
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <h3>Selecione os temas</h3>
            <?php
            include_once $raiz.'control/Temas.php';
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h3>Quantidade de Perguntas</h3>
            <p>
              <select class="form-control" id="selectNivelAcademicoUser">
                <?php
                $totalPerguntas = 15;
                for ($i=1; $i <= $totalPerguntas; $i++)
                  echo "<option>".$i."</option>";
                ?>
              </select>
            </p>
          </div>
          <div class="col-md-6">
            <h3>Nível das perguntas</h3>
            <p>
              <select class="form-control" id="selectNivelAcademicoUser">
                <option>Fácil</option>;
                <option>Médio</option>;
                <option>Danger</option>;
                <option>random</option>;
              </select>
            </p>
          </div>
        </div>
      </div>
      <!-- /.panel-body -->
      <div class="panel-footer text-right">
        <a href="#" class="btn btn-success">Jogar!!</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <?php
    $cores = array(
                   '1'=>'green',
                   '2'=>'yellow',
                   '3'=>'red',
                   );

    for ($i=1; $i<= 10 ; $i++) {
      echo '<div class="col-lg-4">
      <div class="panel panel-'.$cores[rand(1,3)].'">
        <div class="panel-heading">
          Pergunta ' . $i.
        '</div>
        <div class="panel-body">
          <p><b>Enunciado:</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
          </p>
          <p>A) ultrices accumsan. Aliquam ornare</p>
          <p>B) ultrices accumsan. Aliquam ornare</p>
          <p>C) ultrices accumsan. Aliquam ornare</p>
          <p>D) ultrices accumsan. Aliquam ornare</p>
        </div>
        <div class="panel-footer">
          E a alternativa correta é...
        </div>
      </div>
      <!-- /.col-lg-4 -->
    </div>
    ';
    }
    ?>

  </div>

<!-- <div class="row"> -->

  <?php
      // include_once $questoes;
  ?>
<!-- </div> -->
</div>

<?php
include_once $footer;
?>