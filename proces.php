<?php
// $tinggi = $_GET['height'];

// $hasil = ($tinggi - 100) - ($tinggi - 100) * 0.10;
// echo 'hasil adalah : ' . $hasil;

// echo $_GET['height'];
// echo $_GET['gender'];

$result = "";
if (isset($_GET['submit'])) {
  if ($_GET['height'] < 100) {
    echo 'tinggi harus lebih dari 100 cm';
  } else if ($_GET["gender"] == 'girl') {
    $tinggi = $_GET['height'];
    $result = ($tinggi - 100) - ($tinggi - 100) * 0.15 . " KG";
    // echo 'ini adalah hasil dari cewe : ' . $result;
  } else {
    $tinggi = $_GET['height'];
    $result = ($tinggi - 100) - ($tinggi - 100) * 0.10 . " KG";
    // echo 'ini adalah hasil dari cowo : ' . $result;
  }
}
