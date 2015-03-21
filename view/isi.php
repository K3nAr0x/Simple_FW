<center>
<div id="kotak-kecil">
<div id="title-kotak">
<center>NAMA</center>
</div>
<br>
<?php echo Form::open(array("method" => "POST", "action" => "mulai")); ?>
Nama lengkap: <br><br>
<input type=text name='nama'><p>
<input class="button" type=submit value="Masuk">
<?php echo Form::close(); ?>
</div>
</center>