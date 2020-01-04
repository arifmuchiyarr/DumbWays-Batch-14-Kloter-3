<?php
include "koneksi.php";

$id = $_GET['id']; 
$nama = $_POST['nama'];
$supp = $_POST['sup_id'];

$sql = "DELETE FROM products_tb WHERE id_product = '$id'";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: index.php?page=posts");
        exit();
    } else {
        echo "Gagal Delete Data.";
    }
?>