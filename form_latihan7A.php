<html>
    <head>
        <Title>Form Input</Title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script type="text/javascript" src="js/jquery-3.5.1.slim.js"></script>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
<body>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Perhitungan Beli Buku<hr></h1>
    <form class="form-inline" action="latihan7A.php" method="POST">
        <div class="form-group mx-sm-3 mb-2">
          <label for="jmlBeli" class="mr-2">Jumlah Beli</label>
          <input type="text" class="form-control" id="jmlBeli" name="txtJmlBeli" placeholder="masukan jumlah beli" required>
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="hitung ">Hitung</button>
      </form>  
  </div>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data yang anda masukan salah!,</strong> Data yang dimasukan harus berupa angka, dan tidak boleh lebih kecil dari nol
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <div class="starter-template">
    <h1>Perhitungan Nilai<hr></h1>
    <form class="form-block" action="latihan7B.php" method="POST">
        <div class="form-group mx-sm-3 mb-2">
          <label for="txtNilaiUTS">Nilai UTS</label>
          <input type="number" class="form-control" name="txtNilaiUTS" placeholder="masukan nilai UTS" min="0" max="100" required>
          <label for="txtNilaiUAS">Nilai UAS</label>
          <input type="number" class="form-control" name="txtNilaiUAS" placeholder="masukan nilai UAS" min="0" max="100" required>
          <label for="txtNilaiTgs">Nilai Tugas</label>
          <input type="number" class="form-control" name="txtNilaiTgs" placeholder="masukan nilai Tugas" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary ml-3 mb-2" name="hitung ">Hitung</button>
      </form>  
  </div>


  <div class="jumbotron">
		<div class="container">
		<h1>Membuat Fungsi Pengecekan Tipe Data String Di Dalam PHP</h1>
		<form action="" method="post">
    <input type="text" class="form-control" id="jmlBeli" name="txtJmlBeli" placeholder="masukan jumlah beli" required>
		<?php 
			$text = "tes";
			echo "<p>$text</p>";
		?>
		<p><button class="btn btn-primary btn-lg" role="button" name="submit" type="submit">Cek Tipe Data</button></p>
		</form>
		<?php
		if(isset($_POST["submit"])){
		 
			if(is_string($_POST['txtJmlBeli'])){
				include 'latihan7A.php';

        
			}else{
				echo "<p>Tipe data bukan string</p>";
			}
		}
		 //komentar perubahan
		?>
		</div>
	</div>
</main>
</body>
</html>