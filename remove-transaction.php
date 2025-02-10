<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM transaction WHERE id = '$id'";

if($connection->query($query)) {
    header("location: transaction.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>