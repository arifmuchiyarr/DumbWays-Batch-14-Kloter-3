<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$supp = $_POST['sup_id'];
 
$sql = "INSERT INTO products_tb (product_name, supplier_id) VALUES ('$nama','$supp')";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: index.php?page=posts");
        exit();
    } else {
        echo "Gagal Input Data.";
    }
?>