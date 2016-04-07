<?php
$raiz = '../';
require_once($raiz.'config/config.php');

include_once $header;
?>

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Login</h3>
        </div>
        <div class="panel-body">
          <form role="form">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="form-group text-right">
                <!-- Change this to a button or input when using this as a form -->
                <a href="index.html" class="btn btn-success">Login</a>
                <a href="index.html" class="btn btn-warning">1ª Vez</a>
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