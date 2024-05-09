<?php 
  
  include('connection.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM cruds WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>UPDATE</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="">
            UPDATE DATA
            </div>
            <div class="card-body">
              <form action="update_save.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                
                <div class="form-group">
                  <label>KODE</label>
                  <input type="text" name="kode" value="<?php echo $row['kode'] ?>" placeholder="Masukkan Kode" class="form-control">
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>
                
                <button type="submit" class="btn">Simpan Update</button> |
                <button type="reset" class="btn">Kosongkan</button>
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
