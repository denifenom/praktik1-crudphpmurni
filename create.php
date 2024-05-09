<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CREATE</title>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="">
              DATA CREATE
            </div>
            <div class="card-body">
              <form action="create_save.php" method="POST">
                
                <div class="form-group">
                  <label>KODE BARANG</label>
                  <input type="text" name="kode_barang" placeholder="Masukkan Kode" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"></textarea>
                </div>
                

                <button type="submit" class="btn">Simpan Baru</button> |
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
