<?php

session_start();

$db = mysqli_connect("localhost","root","","data_siswa");

$result = mysqli_query($db, "SELECT * FROM datasiswa");

if(isset($_GET['caper'])){
  $urut = $_GET['caper'];
  $result =mysqli_query($db,"SELECT * FROM datasiswaorder by `$urut` ASC");
}
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Catatan_siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:grey;">
    <div class="container mt-5">
    <h1 class="text-white">D A T A S I S W A </h1>
    <div class="card text-center">
<div class="container">
    <div class="card my-4 mt-3">
    <div class="d-grip gap-2 col-12 mt-2">
    <table class="table table-light table-hover table-borderless">
  <thead>
    <tr style="text-align:center;">

      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php $i=1;?>
  <?php while($row = mysqli_fetch_assoc($result)):?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?= $i ?></th>
       <td><?=$row['Nis'];?></td>
       <td><?=$row['Nama'];?></td>
       <td><?=$row['Kelas'];?></td>
       <td>
        <a href="from_update.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-success ml-auto">Update</a>
        <a href="delete.php?nis=<?=$row['nis'];?>" class="btn btn-sm btn-danger ml-auto">delete</a>
      </td>
    </tr>
</tbody>

    <?php $i++; ?>
    <?php endwhile ?>
    </table>
    </div>
    </div>
    <div class="text-end">
        <a href="data.php" class="btn btn-dark">isi data</a>
  </div>
</body>
</html>