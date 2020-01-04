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
    $query = "select id_product, product_name, supplier_id, company_name, addresss, phone from products_tb inner join suppliers_tb on products_tb.supplier_id = suppliers_tb.id_supplier";
    $sql_t = mysqli_query($koneksidb, $query) or die (mysqli_error($koneksidb));
?>
<br><br><br>
    <div class="container">
    <div class="row justify-content-center" >
        <div class="col-4 bg-light rounded" style="border: 1px #ccc solid">
        <div style="padding-top:10px; ">
        <h1><b>Tambah Product</b></h1>
        <!--  -->
        <form method="post" action="tambah_product_aksi.php">
            <div class="form-group">
                <label for="name">Nama Product</label>
                <input class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label for="name">ID Supplier</label>
                <input class="form-control" type="text" name="sup_id" placeholder="Isi hanya dengan id supplier saja">
            </div>
            <button class="btn btn-primary" type="submit"> Tambah </button>
        </form>
        <br>
        <div>
          <h5>Supplier id</h5>
          <table class="table">
            <thead>
              <tr>
                <td>ID</td>
                <td>Nama Supplier</td>
              </tr>
            </thead>
            <tbody>
              <?php
                $query = "SELECT * FROM suppliers_tb";
                $sql = mysqli_query ($koneksidb, $query) or die (mysqli_error($koneksidb));
                while ($data = mysqli_fetch_array($sql)){
              ?>
              <tr>
                <td><?=$data['id_supplier'];?></td>
                <td><?=$data['company_name'];?></td>
              </tr>
                <?php }  ?>
            </tbody>
          </table>
        </div>
        </div>
        </div>
    </div>
    </div>

    
</body>
</html>