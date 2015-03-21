<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);

define('SITE_ROOT',DOC_ROOT.'/soalonline/');
define('SITE_PATH','http://'.$_SERVER['HTTP_HOST'].'/soalonline/');
define('IMAGE_PATH',SITE_PATH.'images/');
define('CSS_PATH',SITE_PATH.'css/');
define('JS_PATH',SITE_PATH.'js/');
define('LIBRARY_ROOT',SITE_ROOT.'library/');
define('VIEW_PATH',SITE_ROOT.'view/');
define('MODEL_PATH',SITE_ROOT.'model/');

function loadView($templateName,$arrPassValue=''){

         $view_path=VIEW_PATH.$templateName;
         if(file_exists($view_path)){
            if(isset($arrPassValue)){
                 $arrData=$arrPassValue;
            }

            include_once($view_path);
         }else{
            die($templateName. ' Template tidak ditemukan dalam View');
         }

}

function loadModel($modelName,$function,$arrArgument=''){
         $model_path=MODEL_PATH.$modelName.'.php';

         if(file_exists($model_path)){
            if(isset($arr)){
                 $arrData=$arrPassValue;
            }

            include_once($model_path);
            $modelClass=$modelName.'Model';
            if(!method_exists($modelClass,$function)){
                die($function .' function tidak ditemukan didalam Model '.$modelName);
            }

            $obj=new $modelClass;
            if(isset($arrArgument)){
                return $obj-> $function($arrArgument);
            }else{
                return $obj-> $function();
            }
         }else{
            die($modelName. ' Model tidak ditemukan didalam folder Model');
         }

}

function CSSUrl($alamat){
		$alamatcss = "css/".$alamat.".css";
		$cssPATH = "<link rel='stylesheet' type='text/css' href='".CSS_PATH.$alamat.".css'/>";
		if(file_exists($alamatcss)){
			return $cssPATH;
		}
		else{
			die($alamat.', Alamat CSS tidak ditemukan');
		}
		}

function JSUrl($alamat){
		$alamatjs = "js/".$alamat.".js";
		$cssPATH = "<script type='text/javascript' src='".JS_PATH.$alamat.".js'></script>";
		if(file_exists($alamatjs)){
			return $cssPATH;
		}
		else{
			die($alamat.', Alamat JavaScript tidak ditemukan');
		}
}

function alertEmpty($value,$pesan){
		if(empty($value))
		{
		return "<script type='text/javascript'>alert('".$pesan."'); 
		history.back();</script>";
		}
}

function sessionSet($value, $name){
		return $_SESSION[$value] = $name;
}

function session($name){
		return $_SESSION["".$name.""];
}

function sessionUnset(){
		return session_unset();
}
?>