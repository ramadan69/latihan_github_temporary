<?php

$jml = $_POST["txtJml"];

for ($row = 1; $row <= $jml; $row++)
{
    echo "<center>";
    for ($col = 1; $col <= $row; $col++)
    {
        echo '*';
    }
    echo "<br>";
}

for ($jml; $jml >= 1; $jml--)
{
    echo "<center>";
    for ($col = $jml; $col >= 1; $col--)
    {
        echo '*';
    }
    echo "<br>";
}

?>
<body>
<a href="FormLatihanFor.php">Kembali</a>
</body>
