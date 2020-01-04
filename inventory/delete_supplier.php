<?php
include "koneksi.php";

$id = $_GET['id']; 

$sql = "DELETE FROM suppliers_tb WHERE id_supplier = '$id'";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: data_supplier.php?page=posts");
        exit();
    } else {
        echo "Gagal Delete Data.";
    }
?>