<?php
$raiz = '../';

$showNavigation = false;
require_once($raiz.'infraestrutura/config.php');

$controlUser = $raiz.'control/User.php';

include_once $header;

// $objSessaoSistema = $raiz.'control/SessaoSistema.php';

// echo $objSessaoSistema;
// die(1);
?>

<div class="container">
  <div class="row">
    <div class=" panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Registrar novo usuário</h3>
      </div>
      <div class="panel-body">
        <form id="formRegisterUser" role="form" action="<?php echo $controlUser;?>" method="post">
          <div class="form-group row">
            <div class="col-md-12">
              <label>Adicione uma foto</label>
              <input type="file">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label class="control-label" for="inputNomeUser">Nome</label>
              <input type="text" class="form-control" id="inputNomeUser">
            </div>
            <div class="col-md-6">
              <label class="control-label" for="inputEmailUser">Email</label>
              <input type="text" class="form-control" id="inputEmailUser">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3">
              <label class="control-label" for="inputDataNascimentoUser">Data de nascimento</label>
              <input type="text" placeholder="aaaa-mm-dd" class="form-control" id="inputDataNascimentoUser">
            </div>
            <div class="col-md-3">
              <label>Sexo</label>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadiosSexo" id="optionsRadiosMasculino" value="Mas">Masculino
                </label>
                <label>
                  <input type="radio" name="optionsRadiosSexo" id="optionsRadiosFeminino" value="Fem">Femenino
                </label>
              </div>
            </div>
            <div class="col-md-3">
              <label class="control-label" for="inputSenhaUser1">Senha</label>
              <input type="password" class="form-control" id="inputSenhaUser1">
            </div>
            <div class="col-md-3">
              <label class="control-label" for="inputSenhaUser2">Senha(Digite aqui novamente)</label>
              <input type="password" class="form-control" id="inputSenhaUser2">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4">
              <label class="control-label" for="selectNivelAcademicoUser">Nivel Acadêmico</label>
              <select class="form-control" id="selectNivelAcademicoUser">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="control-label" for="selectCursoUser">Curso</label>
              <select class="form-control" id="selectCursoUser">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="control-label" for="selectPerfilUser">Perfil</label>
              <select class="form-control" id="selectPerfilUser">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <label>Você aceita os termos e condições para usar este sistema?</label>
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosAceita" id="optionsRadiosAceita" value="Sim">Sim
              </label>
              <label class="radio-inline">
                <input type="radio" name="optionsRadiosAceita" id="optionsRadiosAceita" value="nao">Não
              </label>
            </div>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-default btn-success">Inscrever-se!!</button>
            <button type="reset" class="btn btn-default btn-danger">Limpar</button>
            <a href="<?php echo $rootProject; ?>" class="btn btn-info">Página Inicial</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
include_once $footer;
?>