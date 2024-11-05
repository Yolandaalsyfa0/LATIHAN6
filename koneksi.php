<?php
$mysqli = new mysqli("localhost","root","","dbpenjualanan");
if($mysqli->connect_error){
 die("Koneksi gagal :".$mysqli->connect_error);
}
?>
 