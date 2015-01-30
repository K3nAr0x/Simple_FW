<?php
session_start();
include_once($_SERVER['DOCUMENT_ROOT'].'/soalonline/library/common.lib.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/soalonline/library/form.lib.php');

if(isset($_GET['controller']) && !empty($_GET['controller'])){
      $controller =$_GET['controller'];
}else{
      $controller ='home'; //default controller
}

if(isset($_GET['function']) && !empty($_GET['function'])){
      $function =$_GET['function'];
}else{
      $function ='home';    //default function
}

$controller=strtolower($controller);

$dir = SITE_ROOT.'controller/'.$controller.'.php';

if(file_exists($dir)){
      require_once($dir);
      $controllerClass=$controller.'Controller';
      if(!method_exists($controllerClass,$function)){
          die($function .' function tidak ditemukan');
      }

      $obj=new $controllerClass;
      $obj-> $function();

}else{
      die($controller .SITE_ROOT.' controller tidak ditemukan');
}
?>