
<?php

$Id= $_GET['Id'];

$db =new PDO("mysql:host=localhost;dbname=data_siswa",'root','');
$query = $db->query("SELECT * FROM `datasiswa` WHERE `Nis`='$Nis");

$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>updateF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey">
<body>
<div style="padding:50px;text-align:center;">
    <form action="update.php" method="POST">
    <div class="container mt-2">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
        <form class="card-body cardbody-color p-lg-4 text-white ">
        <h1 class="mt-3">UPDATE</h1>
        <h2>P E D U L I D I R I</h2>
        <input type="hidden" name="Id" value="<?= $Id?>">
        <div class="mb-3">
            <label>Nis:</label><br>
            <input type="text" name="Nis" class="form-control" style="width:300px;margin:auto" value="<?= $data['Nis'] ?>">
        </div>
        <div class="mb-3">
            <label>Nama:</label><br>
            <input type="text" name="Nama" class="form-control" style="width:300px;margin:auto" value="<?= $data['Nama'] ?>">
        </div>
        <div class="mb-3">
            <label>Kelas :</label><br>
            <input type="text" name="Kelas" class="form-control" style="width:300px;margin:auto" value="<?= $data['Kelas'] ?>">
        </div>
        <br><input type="submit" value="update" style="width:300px;margin:auto" class="btn btn-success"><br>
        </form>
</body>
</html>