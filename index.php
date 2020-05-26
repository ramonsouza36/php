<?php
ini_set('display_errors',1);
  ini_set('display_startup_erros',1);
  error_reporting(E_ALL);
require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$sql=new Hcode\DB\Sql();
  $result=$sql->select("select * from tb_users");
  echo json_encode($result);
});

$app->run();

 ?>
