<?php
$raiz = '../';
require_once($raiz . 'infraestrutura/config.php');
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Quiz_CS Computação - UFMA 2015.2</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo $rootProject.$assetsLocation; ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?php echo $rootProject . $assetsLocation; ?>/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo $rootProject . $assetsLocation; ?>/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo $rootProject . $assetsLocation; ?>/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="height: 100%">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <?php
      if($showNavigation){
        ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Menu</span>
          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <?php
      }
      ?>
      <a class="navbar-brand" href="<?php echo $rootProject;?>">Quiz Acadêmico</a>
    </div>
    <?php
    if($showNavigation){
      ?>
    <ul class="nav navbar-top-links navbar-right">
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li> -->
                        <!-- <li class="divider"></li> -->
                        <li><a href="<?php echo $rootProject.'index.php';?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
    </ul>
    <?php
    }
    ?>


    <?php
    if($showNavigation){
      include_once $templates;
    }
    ?>
  </nav>
  <?php
  $pagestyle = ($showNavigation)? 'page-wrapper':'wrapper'; ?>

  <div id="<?php echo $pagestyle; ?>" style="min-height:100%;">
    <br>