<?php

//include koneksi database
include('koneksi.php');

//get data dari form

$product = $_POST['data_product'];
$customer = $_POST['data_customer'];
$amount = $_POST['amount'];
$date = $_POST['date'];

//query insert data ke dalam database

$query = "INSERT INTO transaction (product, customer, amount, date) VALUES ('$product', '$customer', '$amount', '$date')";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: transaction.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>