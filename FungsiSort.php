<?php
// memasukan nilai kedalam array
$mobil = array ("volvo", "BMW", "toyota");

//array diurutkan secara ascending
sort($mobil);

//mendapatkan jumlah nilai sari array $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilai dari array
for($x=0; $x < $length; $x++){
    echo $mobil[$x];
    echo "<br/>";
}
?>