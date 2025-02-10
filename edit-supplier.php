<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM supplier WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SUPPLIER
            </div>
            <div class="card-body">
              <form action="update-supplier.php" method="POST">
                
                <div class="form-group">
                  <label>Nama supplier</label>
                  <input type="text" name="name_supplier" value="<?php echo $row['name'] ?>" placeholder="Masukkan Nama Suplier" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="address" value="<?php echo $row['address'] ?>" placeholder="Masukkan Alamat" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input type="text" name="phone_number" value="<?php echo $row['phone_number'] ?>" placeholder="Masukkan Nomor Telepon" class="form-control">
                </div>


                
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>