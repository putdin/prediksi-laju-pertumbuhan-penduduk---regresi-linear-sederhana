<?php
function openConnection()
{
  $conn = new mysqli('localhost','root','','prediksi') or die("Connect failed: %s\n". $conn -> error);

  return $conn;
}

function closeConnection()
{
  $conn->close();
}
