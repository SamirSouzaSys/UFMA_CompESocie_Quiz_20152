<?php
$rootProject = "/ufma/UFMA_CompESocie_Quiz_20152/";
// $rootProject = "";
// $rootProject = "/sam/UFMA_Contabilidade_Portal_20152";

$header    = $raiz."template/head.php";
$footer    = $raiz."template/footer.php";
$templates = $raiz."template/navigation.php";

$questoes  = $raiz."template/printQuestoes.php";
$temasQuestoes  = $raiz."template/printTemasDisponiveis.php";

$assetsLocation = "assets";


// $showNavigation = array("mainPage.php");

// $config = new Config("development");

// class Config{
//     //development / production
//   private $applicationMode;

//   private $configArray = array(
//                        'development' =>
//                           array(
//                             'rootProject'=>'/ufma/UFMA_CompESocie_Quiz_20152',
//                           ),
//                         'production' =>
//                           array(
//                             'rootProject'=>'',
//                           ),
//                       );

//   function __construct($appMode = 'development'){
//     $this->applicationMode = $appMode;
//   }

//   public function getApplicationMode(){
//     return $this->applicationMode;
//   }

//   public function getConfigArray($appMode){
//     return $this->applicationMode;
//   }

// }
?>