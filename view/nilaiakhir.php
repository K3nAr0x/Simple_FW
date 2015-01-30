<center>
<div id="kotak-kecil">
<div id="title-kotak">
NILAI<br>
</div>
<?php
$nilaiakhir = 0;
$jumlahbenar = 0;
$nama=session("nama");
if(!empty($_POST['jawaban']))
{
foreach($_POST['pilihan'] as $key => $value){
    if($value == $_POST['jawaban'][$key]){
        $jumlahbenar++;
    }
}
$nilaiakhir = $jumlahbenar*4;
echo "<br><br>Selamat <b>".$nama."</b>, <br>anda mendapatkan nilai <b><font color=blue> ".$nilaiakhir." </font></b>";
$arrArgument=array('nama'=>$nama,'nilai'=>$jumlahbenar);
loadModel("Data1","data1Insert",$arrArgument);
sessionUnset();
$host = explode('.', $_SERVER['HTTP_HOST']);

while ($host) {
    $domain = '.' . implode('.', $host);

    foreach ($_COOKIE as $name => $value) {
        setcookie($name, '', 1, '/', $domain);
    }

    array_shift($host);
}
echo "<br><a href='".SITE_PATH."'><input class='button' type=button value='Awal'></a>";
}
else{
	alertEmpty($_POST['jawaban'],"Maaf, anda belum menjawab pertanyaannya!");
}
?>

</div>
</center>