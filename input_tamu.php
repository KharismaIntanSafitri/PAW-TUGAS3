<?php
include "connect/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kharisma | Input Tamu</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <?php include "desain/sidebar_admin.php";?>
    <?php include "desain/navbar_admin.php";?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Awal Isi Konten -->
    <div class="container-fluid">
        <!-- Data Tabel -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Tamu</h6>
            </div>
            <div class="card-body">
                <form action="tambah_tamu.php" method="POST">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">No. Hp</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="hp" placeholder="08xxxxxxxxx6">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input_stock_barang" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-md-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Kabupaten / Kota">
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="tambah_tamu">Tambah</button>
                        <a href="tamu.php"><button type="button" class="btn btn-primary" name="batal">Batal</button></a>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>
</html>