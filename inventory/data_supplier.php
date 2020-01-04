<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title> INVENTORY</title>
</head>
<body>
<div class="container"><br>
        <div class="row">
            <div class="text-left col">
                <h1><b>Data Supplier</b></h1>
            </div>
            
                <div class="text-right col">
                <a type="button" class="btn btn-primary" href="tambah_supplier.php">Add Supplier</a>
                <a type="button" class="btn btn-primary" href="index.php">Back Home</a>
                    
                </div>
        </div>
    </div>
<div class="container">
<br>

    <table class="table table-hover">
      <thead>
        <tr>
            <th>ID Supplier</th>
            <th>Company Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
       <?php 
           $query = "SELECT * FROM suppliers_tb";
           $sql = mysqli_query ($koneksidb, $query) or die (mysqli_error($koneksidb));
           while ($data = mysqli_fetch_array($sql)){
         ?>
       
        <tr>
            <th><?=$data['id_supplier']?></th>
            <td><?=$data['company_name']?></td>
            <td><?=$data['addresss']?></td>
            <td><?=$data['phone']?></td>
            <td>
                <a class="badge badge-warning" href="update_supplier.php?id=<?=$data['id_supplier'];?>">Update</a>
                <a class="badge badge-danger" href="delete_supplier.php?id=<?=$data['id_supplier'];?>">Delete</a>
            </td>
        </tr>
            <?php } ?>
      </tbody>
    </table>
    </div>
    </body>
</html>