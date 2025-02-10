<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
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
        <a class="nav-link active" href="supplier.php">Supplier</a>
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
              DATA SUPPLIER
            </div>
            <div class="card-body">
              <a href="add-supplier.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH SUPPLIER</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th class="text-center align-middle" scope="col">NO.</th>
                    <th class="text-center align-middle" scope="col">NAMA SUPPLIER</th>
                    <th class="text-center align-middle" scope="col">JENIS SUPPLIER</th>
                    <th class="text-center align-middle" scope="col">NO. TELEPON</th>
                    <th class="text-center align-middle" scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM supplier");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['phone_number'] ?></td>
                     
                      <td class="d-flex justify-content-around">
                        <a href="edit-supplier.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary mr-1">EDIT</a>
                        <a href="remove-supplier.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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