<!Doctype HTML>
<head>
<title>Contoh link dinamis PHP</title>
</head>
<body>
<a href='MembuatLinkDinamis.php'>home</a><br/>
<a href='MembuatLinkDinamis.php?p=kontak'>Halaman kontak</a><br/>
<a href='MembuatLinkDinamis.php?p=profil'>Halaman profil</a><br/><hr/>

<?php
  error_reporting(0);
  switch($_GET['p'])
  {
    default:
      echo "Selamat datang dihalaman beranda";
    break;
    case "kontak";
      echo "Ini halaman kontak";
    break;
    case "profil";
    echo "Disini halaman profil";
    break;
  }
?>
</body>
</html> 