<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp = $_POST['phone'];
 
$sql = "INSERT INTO suppliers_tb (id_supplier, company_name, addresss, phone) VALUES ('', '$nama', '$alamat', '$hp')";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: data_supplier.php?page=posts");
        exit();
    } else {
        echo "Gagal Input Data.";
    }
?>