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

<br><br>
    <div class="container"><br>
        <div class="row">
            <div class="text-left col">
                <h1 ><a href="index.php"><b>INVENTORY</b></a></h1>
            </div>
            
                <div class="dropdown text-right col">
                <a type="button" class="btn btn-primary" href="tambah_product.php">Add Product</a>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Supplier
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="data_supplier.php">Lihat Data</a>
                        <a class="dropdown-item" href="tambah_supplier.php">Tambah Data</a>
                    </div>
                </div>
        </div>
    </div>

    <div class="container">
    <table class="table table-hover">
      <thead>
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Company Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
      </thead>
      <tbody>
       <?php 
           $query = "SELECT * FROM products_tb LEFT JOIN suppliers_tb on products_tb.supplier_id = suppliers_tb.id_supplier";
            $sql_prod = mysqli_query ($koneksidb, $query) or die (mysqli_error($koneksidb));
            while ($data = mysqli_fetch_array($sql_prod)){ ?>
       
        <tr>
            <th><?=$data['id_product']?></th>
            <td><?=$data['product_name']?></td>
            <td><?=$data['company_name']?></td>
            <td><?=$data['addresss']?></td>
            <td><?=$data['phone']?></td>
            <td>
                <a class="badge badge-warning" href="update_product.php?id=<?=$data['id_product'];?>">Update</a>
                <a class="badge badge-danger" href="delete.php?id=<?=$data['id_product'];?>">Delete</a>
            </td>
        </tr>
            <?php } ?>
      </tbody>
    </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>