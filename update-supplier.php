<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$name = $_POST['name_supplier'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE supplier SET name = '$name', address = '$address', phone_number = '$phone_number' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: supplier.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>