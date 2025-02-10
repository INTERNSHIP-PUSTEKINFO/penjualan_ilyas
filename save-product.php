<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$nama_produk = $_POST['product_name'];
$kategori = $_POST['category'];
$deskripsi = $_POST['long_description'];
$stok = $_POST['stock'];
$harga = $_POST['product_price'];
$supplier = $_POST['data_supplier'];
$berat = $_POST['height'];


//query insert data ke dalam database

$query = "INSERT INTO product (product_name, category, long_description, stock, product_price, height, supplier) VALUES ('$nama_produk', '$kategori', '$deskripsi', '$stok', '$harga', '$berat', '$supplier')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: product.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>