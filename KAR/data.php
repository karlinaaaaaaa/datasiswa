<!DOCTYPE html>
<html lang="en">
<head>
    <title>isi data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<div style="padding: 10px;">
        <form action="data.php"  method="POST">
        <div class="container mt-2">
        <div class="row" >
        <div class="col-md-8 offset-md-1" style="margin:auto">
        <div class="card my-6">
            <form class="card-body cardbody-color p-lg-4 text-white ">
            <h2 class="mb-3 mt-4 text-center" style="color:rgb(61, 61, 61);">Isi Data </h2>
            <div class="container mt-2">
            <div class="mb-3">
              <div>
              <div class="mb-3 text-center mt-3 ">
                Nis: 
                <input class="rounded-3 form-control" type="text" name="tanggal" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Nama : 
                <input class="rounded-3 form-control" type="text" name="jam" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                Kelas : 
                <input class="rounded-3 form-control" type="text" name="lokasi" style="width: 400px;margin:auto">
              </div>
              <div class="mb-3 text-center mt-3 ">
                <button type="submit" class="btn btn-success px-3 mb-3" style="width: 100px;">Simpan</button> 
                </div>
              </div>
            </form>
        </div>
      </body>
      </html>
