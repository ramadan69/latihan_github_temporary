<?php

// memasukan nilai ke dalam array
$mobil = array("volvo","BMW","Toyota");

//array diurutkan secaral langsung
rsort($mobil);

//mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilai array
for ($x=0; $x < $length; $x++){
    echo $mobil[$x];
    echo "<br/>";
}
?>