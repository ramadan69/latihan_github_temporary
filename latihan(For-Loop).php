<body>
<?php
For($a=0;$a<4;$a++){
	echo "Nilai dari a :". $a. "<br/>";
}
?>

<select name="" id="">
    <?php
        for ($i=1900; $i <= 2021 ; $i++){
            echo "
            <option value = $i>$i</option>";
        }
    ?>
</select>

<select name="" id="">
    <?php
        for ($i=1900; $i <= 2021 ; $i++){?>
            <option value ="<?=$i;?>" <?php if($i==1996){ echo "selected";}?>><?=$i?>
            </option>";
            
        <?php } ?>
    ?>
</select>

<select name="" id="">
            <option>satu</option>
            <option selected>dua</option>
            <option>tiga</option>
</select>

</body>