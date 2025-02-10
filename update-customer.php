<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$name_customer = $_POST['name_customer'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE customer SET name_customer = '$name_customer', gender = '$gender', address = '$address', phone_number = '$phone_number' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: customer.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>