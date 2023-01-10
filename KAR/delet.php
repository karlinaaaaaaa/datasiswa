<?php

session_start();

$nik = $_GET['Nik'];

$db = new PDO("mysql:host=localhost;dbname=data_siswa",'root','');
$query = $db->query("DELETE FROM `datasiswa` WHERE `Nik`= '$nik'");

if($query)
{
    header("location:catatan.php");
}