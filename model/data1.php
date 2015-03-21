<?php
  class data1Model{
   function __construct() {
       $mysql_db_hostname = "localhost";
       $mysql_db_user = "root";
       $mysql_db_password = "";
       $mysql_db_database = "databaseku";

       $con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
       mysql_select_db($mysql_db_database, $con) or die("Could not select database");

   }

   function data1Show(){
            $query="select * from banksoal WHERE topik='produktif'";
            $res=mysql_query($query);
                return $res;
   }
   
   function data1Detail($arrArgument){
            $id=$arrArgument['id'];
            $query="select * from banksoal where topik='$id'";
            $res=mysql_query($query);
            $checkData=mysql_num_rows($res);
            $arrData1=array();
            if($checkData > 0){
                $row=mysql_fetch_array($res);
                $arrData1[]=$row;
                return $arrData1;
            }
			else{
				die('Maaf, data masih kosong');
			}
   }
   
   function data1Insert($arrValue){
            $nama1=$arrValue["nama"];
			$nilai1=$arrValue["nilai"];
            $query="INSERT INTO siswa value(null, '".$nama1."', '".$nilai1."')";
            $res=mysql_query($query);
            if($res){
			return $res;	
			}
			else
			{
				die('Maaf, gagal memasukkan data ke database.');
			}
			
   }
   
      function data1Query($Queryarr = array(
			"where" => "",
			"orderby" => ""))
		{
			if(!empty($Queryarr["where"]))
			{
				$where = "where ".$Queryarr["where"];
			}
			
			if(!empty($Queryarr["orderby"]))
			{
				$orderby = "order by ".$Queryarr["orderby"];
			}
			
            $query="select * from banksoal ".$where." ".$orderby."";
            $res=mysql_query($query);
            $checkData=mysql_num_rows($res);
            $arrData1=array();
            if($checkData > 0){
                $row=mysql_fetch_assoc($res);
                $arrData1[]=$row;
                return $arrData1;
            }
			else{
				die('Maaf, data masih kosong');
			}
   }
}
?>