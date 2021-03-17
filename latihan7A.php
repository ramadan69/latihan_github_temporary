<?php
$beli = $_POST['txtJmlBeli'];

if(is_numeric($beli)){
    if($beli>-1){

$hrgBuku = 12000;
$total = $beli*$hrgBuku;
$diskon5 = $total*0.05;
$ttlByr = $total-$diskon5;
if($beli > 20){
    echo "Beli $beli Buku <br>
     Harga Rp $hrgBuku Per Buku  <br>
     Total Belanja Rp $total <br>
     Diskon 5% Rp $diskon5 <br>
     Total bayar Rp $ttlByr <br>";
}
else{
    echo "Beli $beli Buku <br>
    Harga Rp $hrgBuku Per Buku  <br>
    Total Belanja Rp $total <br>
    Total bayar Rp $total <br>";
}
echo "<a href='form_latihan7A.php'>kembali</a>";

}
else{
    echo "jumlah kurang dari nol";
}}
else
{
    echo "salah";
}

?>