<!DOCTYPE html>
<html>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<title></title>
</head>
<body>
    <h3>Tampil Pelanggan</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th><th>NAMA PELANGGAN</th><th>ALAMAT</th><th>TELP</th><th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $qry_pelanggan=mysqli_query($conn,"select * from pelanggan");
            $no=0;
            while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){
            $no++;?>
            <tr>
            <td><?=$no?></td><td><?=$data_pelanggan['nama']?></td>
            <td><?=$data_pelanggan['alamat']?></td>
            <td><?=$data_pelanggan['telp']?></td>
            <td><a href="ubah_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a> 
            | <a href="hapus_pelanggan.php?id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        <td><a href="tambah_pelanggan.php" class="btn btn-success">Tambah Pelanggan</a>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>