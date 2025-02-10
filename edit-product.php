<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];

  $query = "SELECT * FROM product WHERE id = $id LIMIT 1";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_array($result);

  $query_supplier = "SELECT id, name FROM supplier";
  $result_supplier = $connection->query($query_supplier);

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
              EDIT PRODUK
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>" placeholder="Masukkan Nama Produk" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" name="category" value="<?php echo $row['category'] ?>" placeholder="Masukkan Kategori Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea type="text" class="form-control" name="long_description" placeholder="Masukkan Deskripsi Produk" rows="4"><?php echo $row['long_description'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Harga Produk</label>
                  <input class="form-control" name="product_price" placeholder="Masukkan Harga Produk" value="<?php echo $row['product_price'] ?>">
                </div>

                <div class="form-group">
                  <label>Stok Produk</label>
                  <input type="number" class="form-control" name="stock" placeholder="Masukkan stok Produk" value="<?php echo $row['stock'] ?>">
                </div>

                <div class="form-group">
                    <label for="data_supplier">Pilih Data:</label>
                    <select class="form-control" name="data_supplier">
                        <option value="<?php echo $row['supplier'] ?> "><?php echo $row['supplier'] ?> </option>
                        <?php
                        if ($result_supplier->num_rows > 0) {
                            while($row_supplier = $result_supplier->fetch_assoc()) {
                                echo "<option name='data' value='" . $row_supplier['name'] ."'>". $row_supplier['name'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                </div>      

                <div class="form-group">
                  <label>Berat</label>
                  <input  type="number" class="form-control" name="height" placeholder="Masukkan Berat Produk" value="<?php echo $row['height'] ?>">
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