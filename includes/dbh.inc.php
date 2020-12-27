<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "25256314789C";
$dBname = "loginsystem";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBname);

if (!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
