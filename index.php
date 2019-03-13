<?php 
//Router
$controller = "";
$method = "";
define('ROOT_PATH', dirname(__FILE__));
if(sizeof($_GET) == 0){
	$controller = "IndexController";
	$method = "principal";
}else{
	$controller = $_GET['controller']."Controller";
	$method     = $_GET['method'];
}
//print_r(array($controller,$method)exit(
include_once "controller/".$controller.".php";
$controller = new $controller();
$controller->$method(); 
?>
