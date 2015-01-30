<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/soalonline/js/soal.js.php');
?>
<div id="kotaksoal">
<h2 class=waktu>Sisa waktu: <span id="divtotalwaktu"></span></h2>
<b><div id="divnomor"></div><b>
<b><div id="divpertanyaan"></div></b>
<div id="divoption">
<span id="jawaban_a"></span><br>
<span id="jawaban_b"></span><br>
<span id="jawaban_c"></span><br>
<span id="jawaban_d"></span>
</div>
<p>
<img id="next" style="cursor:pointer" src="<?php echo IMAGE_PATH?>next.jpg">
<form action="akhir" method="post" id="formulir">
<div id="divpilihan"></div>
<div id="divjawaban"></div>
</form>
</div>