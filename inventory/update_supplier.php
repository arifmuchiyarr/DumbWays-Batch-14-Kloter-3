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
    <title>Tambah Product</title>
</head>
<body>
<a href="index.php" class="btn btn-primary"> Back Home</a>
<?php
    $id = $_GET['id']; 
    $query = "SELECT * FROM suppliers_tb WHERE id_supplier = '$id'";
    $sql = mysqli_query($koneksidb, $query) or die (mysqli_error($koneksidb));
    $data = mysqli_fetch_array($sql);
?>
<br><br><br>
    <div class="container">
    <div class="row justify-content-center" >
        <div class="col-4 bg-light rounded" style="border: 1px #ccc solid">
        <div style="padding-top:10px; ">
        <h1><b>Edit Supplier</b></h1>
        <!--  -->
        <form method="post" action="update_supplier_aksi.php">
            <div class="form-group">
                <label for="name">ID Supplier</label>
                <input class="form-control" type="text" name="id_supplier"  value="<?=$data['id_supplier'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Nama Company</label>
                <input class="form-control" type="text" name="nama"  value="<?=$data['company_name'];?>">
            </div>
            <div class="form-group">
                <label for="name">Alamat</label>
                <input class="form-control" type="text" name="alamat" value="<?=$data['address'];?>">
            </div>
            <div class="form-group">
                <label for="name">Alamat</label>
                <input class="form-control" type="text" name="phone" value="<?=$data['phone'];?>">
            </div>
            <button class="btn btn-primary" type="submit"> Update </button>
        </form>
        
        </div>
        </div>
        </div>
    </div>
    </div>

    
</body>
</html>