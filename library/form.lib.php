<?php  
  class Form{
   function __construct() {

   }
   function open($Formarr = array(
		"method" => "POST",
		"action" => "#",
		"class" => "",
		"id" => "",
		"ac" => "UTF-8"))
   {
		if(!empty($Formarr["method"]))
			{
				$method = $Formarr["method"];
			}
		else{
			$method = "POST";
			}
		
		if(!empty($Formarr["action"]))
			{
				$action = "".$Formarr["action"]."/";
			}
		else{
			$action = "#";
			}
			
		if(!empty($Formarr["class"]))
			{
				$class = " class='".$Formarr["class"]."'";
			}
		else{
			$class = "";
			}
		
		if(!empty($Formarr["id"]))
			{
				$id = " id='".$Formarr["id"]."'";
			}
		else{
			$id = "";
			}
		if(!empty($Formarr["ac"]))
			{
				$ac = $Formarr["ac"];
			}
		else{
			$ac = "UTF-8";
			}
		
     $Formdata = "<form method='".$method."' action='".$action."' accept-charset='".$ac."'".$id."".$class.">";
   
   return $Formdata;
   }
  

   function close(){
      $Formclose = "</form>";
	return $Formclose;
   }

}
?>