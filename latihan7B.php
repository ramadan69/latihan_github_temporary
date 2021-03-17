<?php

$Uts = $_POST['txtNilaiUTS'];
$Uas = $_POST['txtNilaiUAS'];
$Tugas = $_POST['txtNilaiTgs'];

$pUts = 0.35*$Uts;
$pUas = 0.5*$Uas;
$pTugas = 0.15*$Tugas;

$ntotal = $pUts+$pUas+$pTugas;

echo "Nilai UTS : $Uts <br>";
echo "Nilai UAS : $Uas <br>";
echo "Nilai Tugas : $Tugas <br>";

echo "Porsentase 35% Nilai UTS : $pUts <br>";
echo "Porsentase 50% Nilai UAS : $pUas <br>";
echo "Porsentase 15% Nilai Tugas : $pTugas <br>";

echo "Nilai Total : $ntotal <br>";

?>