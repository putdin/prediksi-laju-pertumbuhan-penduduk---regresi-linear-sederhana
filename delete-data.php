<?php
require ('config/Database.php');
session_start();
if(!isset($_SESSION['username'])) {
   header('Location:index.php');
}
$connect = openConnection();
$id = $_GET['id'];
if(mysqli_query($connect, "DELETE FROM kelola_data WHERE kelola_data.id = '$id'")) {
   header('Location:create-data.php');
} else {
   header("Location:create-data.php?notify=error");
}
?>
