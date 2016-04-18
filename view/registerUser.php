<?php
$raiz = '../';

$showNavigation = false;
require_once($raiz.'infraestrutura/config.php');

$controlUser = $raiz.'control/UserControl.php';

include_once $header;
?>
<div class="container">
  <div class="row">
    <div class=" panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Registrar novo usuário</h3>
      </div>
      <form id="formRegisterUser" role="form" action="<?php echo $controlUser;?>" method="post" >
        <div class="panel-body">
          <div class="form-group row">
            <div class="col-md-12"><!-- Foto -->
              <label>Adicione uma foto</label>
              <input type="file" id="fotoUser" name="fotoUser">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6"><!-- Nome -->
              <label class="control-label" for="inputNomeUser">Nome</label>
              <input type="text" class="form-control" id="inputNomeUser" name="inputNomeUser">
            </div>
            <div class="col-md-6"><!-- Email -->
              <label class="control-label" for="inputEmailUser">Email</label>
              <input type="text" class="form-control" id="inputEmailUser" name="inputEmailUser">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3"><!-- Data de nascimento -->
              <label class="control-label" for="inputDataNascimentoUser">Data de nascimento</label>
              <input type="text" placeholder="aaaa-mm-dd" class="form-control" id="inputDataNascimentoUser" name="inputDataNascimentoUser">
            </div>
            <div class="col-md-3"><!-- Sexo -->
              <label>Sexo</label>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadiosSexo" id="optionsRadiosMasculino" value="Mas">Masculino
                </label>
                <label>
                  <input type="radio" name="optionsRadiosSexo" id="optionsRadiosFeminino" value="Fem">Feminino
                </label>
              </div>
            </div>
            <div class="col-md-3"><!-- Senha -->
              <label class="control-label" for="inputSenhaUser1">Senha</label>
              <input type="password" class="form-control" id="inputSenhaUser1" name="inputSenhaUser1">
            </div>
            <div class="col-md-3"><!-- Senha 2-->
              <label class="control-label" for="inputSenhaUser2">Senha(Digite aqui novamente)</label>
              <input type="password" class="form-control" id="inputSenhaUser2" name="inputSenhaUser2">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-4"><!-- Nível Acadêmico -->
              <label class="control-label" for="selectNivelAcademicoUser">Nivel Acadêmico</label>
              <select class="form-control" name="selectNivelAcademicoUser" id="selectNivelAcademicoUser">
                <option value="1">Ensino Médio</option>
                <option value="2">Técnico</option>
                <option value="3">Graduando</option>
                <option value="4">Graduado</option>
                <option value="5">Mestrando</option>
                <option value="6">Mestre</option>
                <option value="7">Doutorando</option>
                <option value="8">Doutorado</option>
              </select>
            </div>
            <div class="col-md-4"><!-- curso -->
              <label class="control-label" for="selectCursoUser">Curso</label>
              <select class="form-control" id="selectCursoUser" name="selectCursoUser">
                <option value="1">Ciência da Computação</option>
                <option value="2">Bacharel em Ciência Tecnologia e Informação</option>
              </select>
            </div>
            <div class="col-md-4"><!-- perfil -->
              <label class="control-label" for="selectPerfilUser">Perfil</label>
              <select class="form-control" name="selectPerfilUser" id="selectPerfilUser">
                <option value="1">Administrador</option>
                <option value="2">Professor</option>
                <option value="3">Aluno</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12"><!-- Termos e Condições -->
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
        <!-- enctype="application/x-www-form-urlencoded" -->
      </div>
    </div>
  </div>
</div>

<?php
include_once $footer;
?>