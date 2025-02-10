<?php 
include('koneksi.php'); 

$query_supplier = "SELECT id, name FROM supplier";
$result_supplier = $connection->query($query_supplier);

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
  </head>

  <body>

  <div class="container mt-5">
        <h2 class="mb-4">Form Tambah Produk</h2>
    <form action="save-product.php" method="POST">
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="product_name" placeholder="Masukkan nama produk">
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategoriProduk" name="category" placeholder="Masukkan kategori produk">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name='long_description' rows="3" placeholder="Masukkan deskripsi produk"></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga Produk (Rp)</label>
                <input type="number" class="form-control" id="harga" name="product_price" placeholder="Masukkan harga produk">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukkan jumlah stok">
            </div>

            <div class="form-group">
                <label for="data_supplier">Pilih Data:</label>
                <select class="form-control" name="data_supplier">
                    <option value=""> -- Suplier -- </option>
                    <?php
                    if ($result_supplier->num_rows > 0) {
                        while($row = $result_supplier->fetch_assoc()) {
                            echo "<option name='data_supplier' value='" . $row['name'] ."'>". $row['name'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>      

            <div class="form-group">
                <label for="berat">Berat (Kg)</label>
                <input type="number" step="0.01" class="form-control" id="berat" name="height" placeholder="Masukkan berat produk">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>