<?php 
include 'koneksi.php';
$id = $_POST['id_product'];
$nama = $_POST['nama'];
$supp = $_POST['sup_id'];
 
$sql = "UPDATE products_tb SET product_name = '$nama', supplier_id = '$supp' where id_product ='$id'";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: index.php?page=posts");
        exit();
    } else {
        echo "Gagal Input Data.";
    }
?>