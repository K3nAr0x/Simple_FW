<?php
  class homeController{
   function __construct() {

   }
   function home(){
	  loadView('header.php');
      loadView('isi.php');
	  loadView('footer.php');
   }
   
   function mulai(){
	  $sesionname = "nama";
	  $nama="".$_POST['nama']."";
	  echo alertEmpty($nama,"Maaf, nama belum diisi!");
	  loadView('header.php');
      sessionSet($sesionname,$nama);
      loadView('mulai.php');
      loadView('footer.php');
   }
   
   function soal(){
	  loadView('header.php');
	  loadView('soal.php');
      loadView('footer.php');
   }
   
   function ambilsoal(){
	   $arrValue=loadModel('data1','data1Show');
      loadView('ambilsoal.php',$arrValue);
   }
   
   function akhir(){
	  loadView('header.php');
      loadView('nilaiakhir.php');
	  loadView('footer.php');
   }
}
?>