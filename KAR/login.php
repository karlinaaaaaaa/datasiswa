<?php
session_start();

if(isset($_SESSION["nama"])){
    header("location:catatan.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>datasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:gery">
    <div style="padding: 50px;">
        <form action="catatan.php"  method="POST">
        <div class="text-center fs-1"><h1 class="text-white fw-bold"> D A T A S I S W A</h1></div>
        <div class="container mt-3">
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">I S I   D A T A</h2>
              <div class="mb-3 mt-3 text-center">
                Nis : <br>
                <input class="rounded-3 border-light" type="text" name="nis" placeholder="masukan Nis anda" 
                style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center">
                Nama : <br>
                <input class="rounded-3 border-light" type="text" name="nama" placeholder="masukan Nama anda" 
                style="width: 300px;" required>
              </div>
              <div class="mb-3 mt-3 text-center">
                Kelas : <br>
                <input class="rounded-3 border-light" type="text" name="kelas" placeholder="masukan kelas anda" 
                style="width: 300px;" required>
              </div>
              <div class="text-center mt-3"> 
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 300px;">simpan</button>
                </div>
              </div>
            </form>
        </div>
</body>
</html