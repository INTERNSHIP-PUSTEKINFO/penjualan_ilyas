<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$nama_produk = $_POST['product_name'];
$kategori = $_POST['category'];
$deskripsi = $_POST['long_description'];
$stock = $_POST['stock'];
$harga = $_POST['product_price'];
$supplier = $_POST['data_supplier'];
$berat = $_POST['height'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE product SET product_name = '$nama_produk', category = '$kategori', long_description = '$deskripsi', stock = '$stock', product_price = '$harga', supplier = '$supplier', height = '$berat' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: product.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>