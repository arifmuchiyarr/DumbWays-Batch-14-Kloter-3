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
    <title>Tambah Supplier</title>
</head>
<body>
<a href="index.php" class="btn btn-primary"> Back Home</a>
<?php
    $query = "SELECT * FROM suppliers_tb";
    $sql = mysqli_query($koneksidb, $query) or die (mysqli_error($koneksidb));
?>
<br><br><br>
    <div class="container">
    <div class="row justify-content-center" >
        <div class="col-4 bg-light rounded" style="border: 1px #ccc solid">
        <div style="padding-top:10px; ">
        <h1><b>Tambah Supplier</b></h1><br>
          <form method="post" action="tambah_supplier_aksi.php">
              <div class="form-group">
                  <label for="name">Nama Supplier</label>
                  <input class="form-control" type="text" name="nama">
              </div>
              <div class="form-group">
                  <label for="name">Alamat</label>
                  <input class="form-control" type="text" name="alamat">
              </div>
              <div class="form-group">
                  <label for="name">No Telepon</label>
                  <input class="form-control" type="text" name="phone">
              </div>
              <button class="btn btn-primary" type="submit"> Tambah </button><br>
          </form>
           
        </div>
        </div>
        </div>
    </div>
    </div>

    
</body>
</html>