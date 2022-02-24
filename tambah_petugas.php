<!DOCTYPE html>
<html>
    <head>
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
        <title></title>
</head>
<body>
    <h3>Tambah Petugas</h3>
    <form action="proses_tambah_petugas.php" method="post">
        <p>
            nama petugas :
            <input type="text" name="nama_petugas" value="" class="form-control">
        </p>
        <p>
            username :
            <input type="text" name="username" value="" class="form-control">
        </p>
        <p>
            password :
            <input type="password" name="password" value="" class="form-control">
        </p>
        <p>
        level :
        <input type="text" name="level" value="" class="form-control">
        </P>
        <td><a href="tampil_petugas.php" class="btn btn-outline-primary">Kembali</a>
        <input type="submit" name="simpan" value="Tambah Petugas" class="btn btn-primary">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
</body>
</html>