<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Produk</title>
  </head>

  <body>

  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="product.php">Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="customer.php">Customer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="supplier.php">Supplier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="transaction.php">Transaction</a>
  </li>
</ul>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PRODUK
            </div>
            <div class="card-body">
              <a href="add-product.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH PRODUK</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th class="text-center align-middle" scope="col">NO.</th>
                    <th class="text-center align-middle" scope="col">NAMA PRODUK</th>
                    <th class="text-center align-middle" scope="col">KATEGORI PRODUK</th>
                    <th class="text-center align-middle" scope="col">DESKRIPSI</th>
                    <th class="text-center align-middle" scope="col">HARGA PRODUK</th>
                    <th class="text-center align-middle" scope="col">STOK</th>
                    <th class="text-center align-middle" scope="col">BERAT</th>
                    <th class="text-center align-middle" scope="col">SUPLIER</th>
                    <th class="text-center align-middle" scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM product");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['product_name'] ?></td>
                      <td><?php echo $row['category'] ?></td>
                      <td><?php echo $row['long_description'] ?></td>
                      <td><?php echo $row['stock'] ?></td>
                      <td><?php echo $row['product_price'] ?></td>
                      <td><?php echo $row['height'] ?></td>
                      <td><?php echo $row['supplier'] ?></td>
                      <td class="d-flex justify-content-around">
                        <a href="edit-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary mr-1">EDIT</a>
                        <a href="remove-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>