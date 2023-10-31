<?php
require ('config/Database.php');
require ('helpers/PreventInjectionSQL.php');
session_start();
if(!isset($_SESSION['username'])) {
  header('Location:index.php');
}
$connect = openConnection();
$id = preventInjection($_POST['idData']);
// tahun penduduk
$tahun = preventInjection($_POST['tahun']);
// jumlah penduduk
$jumlah = preventInjection($_POST['jumlah']);

if(mysqli_query($connect, "UPDATE kelola_data SET tahun_penduduk = '$tahun', jumlah_penduduk = '$jumlah' WHERE id ='$id'")) {
  header("Location:create-data.php");
} else {
  header("Location:create-data.php?notify=error");
}