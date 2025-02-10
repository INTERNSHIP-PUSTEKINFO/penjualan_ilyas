<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM transaction WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  $query_customer = "SELECT id, name_customer FROM customer";
  $result_customer = $connection->query($query_customer);
  $row_customer = mysqli_fetch_array($result_customer);

  $query_product = "SELECT id, product_name FROM product";
  $result_product = $connection->query($query_product);
  $row_product = mysqli_fetch_array($result_product);


  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Transaksi</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TRANSAKSI
            </div>
            <div class="card-body">
              <form action="update-transaction.php" method="POST">

                <div class="form-group">
                  <label for="data_customer">Pilih Customer:</label>
                  <select class="form-control" name="data_customer">
                      <option value="<?php echo $row_customer['name_customer'] ?>"><?php echo $row_customer['name_customer'] ?></option>
                      <?php
                      if ($result_customer->num_rows > 0) {
                          while($row_customer = $result_customer->fetch_assoc()) {
                              echo "<option name='data_customer' value='" . $row_customer['name_customer'] ."'>". $row_customer['name_customer'] . "</option>";
                          }
                      }
                      ?>
                  </select>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>      
                
                <div class="form-group">
                  <label for="data_product">Pilih Data:</label>
                  <select class="form-control" name="data_product">
                      <option value="<?php echo $row_product['product_name'] ?>"><?php echo $row_product['product_name'] ?></option>
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
                  <label>Jumlah</label>
                  <input type="text" name="amount" value="<?php echo $row['amount'] ?>" placeholder="Masukkan Jumlah transaksi" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text" name="date" value="<?php echo $row['date'] ?>" placeholder="Masukkan Tanggal transaksi" class="form-control">
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