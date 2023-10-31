<?php

require ('config/Database.php');
require ('helpers/PreventInjectionSQL.php');

session_start();

if(!isset($_SESSION['username'])) {
  header('Location:index.php');
}

$connect = openConnection();

// tahun penduduk
$tahun = preventInjection($_POST['tahun']);
// jumlah penduduk
$jumlah = preventInjection($_POST['jumlah']);

if($runquery1 = mysqli_query($connect,"insert into kelola_data (tahun_penduduk, jumlah_penduduk) values ('$tahun', '$jumlah')")) {
  header('Location:create-data.php');
} else {
  header("Location:create-data.php?notify=error");
}