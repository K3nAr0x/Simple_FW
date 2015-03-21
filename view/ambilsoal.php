<?php
$topik = $_GET['topik'];

$json = '{"soal":[ ';
while($x = mysql_fetch_array($arrData)){
    $json .= '{';
    $json .= '"id":"'.$x['id'].'",
        "topik":"'.htmlspecialchars($x['topik']).'",
        "pertanyaan":"'.htmlspecialchars($x['pertanyaan']).'",
        "a":"'.$x['pilihan_a'].'",
        "b":"'.$x['pilihan_b'].'",
        "c":"'.$x['pilihan_c'].'",
        "d":"'.$x['pilihan_d'].'",
        "jawaban":"'.$x['jawaban'].'"
    },';
}
$json = substr($json,0,strlen($json)-1);
$json .= ']';

$json .= '}';
echo $json;

?>
