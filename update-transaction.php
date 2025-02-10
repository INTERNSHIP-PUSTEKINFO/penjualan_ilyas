<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$product = $_POST['data_product'];
$data_customer = $_POST['data_customer'];
$amount = $_POST['amount'];
$date = $_POST['date'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE transaction SET product = '$product', customer = '$data_customer', amount = '$amount', date = '$date' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: transaction.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>