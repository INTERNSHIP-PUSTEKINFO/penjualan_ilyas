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
        <h2 class="mb-4">Form Tambah Customer</h2>
    <form action="save-customer.php" method="POST">
            <div class="form-group">
                <label for="namaProduk">Nama Customer</label>
                <input type="text" class="form-control" name="name_customer" placeholder="Masukkan nama customer">
            </div>
            <div class="form-group">
                <label for="kategori">Jenis Kelamin</label>
                <input type="text" class="form-control"  name="gender" placeholder="Masukkan jenis kelamin">
            </div>
            <div class="form-group">
                <label for="harga">Alamat</label>
                <input type="text" class="form-control" name="address" placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label for="stok">Nomor Telepon</label>
                <input type="number" class="form-control" name="phone_number" placeholder="Masukkan nomor telepon">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Customer</button>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>