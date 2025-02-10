<?php include('koneksi.php'); 

$query_product = "SELECT id, product_name FROM product";
$result_product = $connection->query($query_product);

$query_customer = "SELECT id, name_customer FROM customer";
$result_customer = $connection->query($query_customer);

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
    <h2 class="mb-4">Form Tambah Transaksi</h2>
    <form action="save-transaction.php" method="POST">
            <div class="form-group">
                <label for="data_customer">Pilih Data:</label>
                <select class="form-control" name="data_customer">
                    <option value=""> -- customer -- </option>
                    <?php
                    if ($result_customer->num_rows > 0) {
                        while($row_customer = $result_customer->fetch_assoc()) {
                            echo "<option name='data_customer' value='" . $row_customer['name_customer'] ."'>". $row_customer['name_customer'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>      
            <div class="form-group">
                <label for="data_product">Pilih Data:</label>
                <select class="form-control" name="data_product">
                    <option value=""> -- product -- </option>
                    <?php
                    if ($result_product->num_rows > 0) {
                        while($row_product = $result_product->fetch_assoc()) {
                            echo "<option name='data_product' value='" . $row_product['product_name'] ."'>". $row_product['product_name'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>      
            <div class="form-group">
                <label for="amount">Jumlah</label>
                <input type="text" class="form-control" name="amount" placeholder="Masukkan Jumlah transaksi">
            </div>
            <div class="form-group">
                <label for="date">Tanggal</label>
                <input type="date" class="form-control" name="date" placeholder="Masukkan tanggal">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Transaksi</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>