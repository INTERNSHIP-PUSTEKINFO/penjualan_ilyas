<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$name_supplier = $_POST['name_supplier'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];

//query insert data ke dalam database

$query = "INSERT INTO supplier (name, address, phone_number) VALUES ('$name_supplier', '$address', '$phone_number')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: supplier.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>