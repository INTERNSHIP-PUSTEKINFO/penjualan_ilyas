<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$name_customer = $_POST['name_customer'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];

//query insert data ke dalam database

$query = "INSERT INTO customer (name_customer, gender, address, phone_number) VALUES ('$name_customer', '$gender', '$address', '$phone_number')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: customer.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>