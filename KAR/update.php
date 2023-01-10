<?php

session_start(); 

$nis = $_POST['Nis'];
$nama = $_POST['Nama'];
$kelas = $_POST['Kelas'];

$db = new PDO("mysql:host=localhost;dbname=data_siswa",'root','');
$query = $db->query("UPDATE `datasiswa` SET `Nik`='$nik',`Nama`='$nama',
`Kelas`='$kelas' WHERE `Nis`='$nis'");
 
if($query){
header ("location:catatan.php");
}