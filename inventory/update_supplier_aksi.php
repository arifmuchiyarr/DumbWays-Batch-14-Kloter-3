<?php 
include 'koneksi.php';
$id = $_POST['id_supplier'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
 
$sql = "UPDATE suppliers_tb SET company_name = '$nama', addresss = '$alamat', phone = '$phone'  where id_supplier ='$id'";
 
$save = mysqli_query($koneksidb, $sql);
 
    if ($save) {
        header("location: data_supplier.php?page=posts");
        exit();
    } else {
        echo "Gagal Input Data.";
    }
?>