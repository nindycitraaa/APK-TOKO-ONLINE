<!DOCTYPE html>
<html>
    <head>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <h3>Tambah Pelanggan</h3>
        <form action="proses_tambah_pelanggan.php" method="post">
            <p>
                nama pelanggan:
                <input type="text" name="nama" value="" class="form-control">
            </p>
            <p>
                alamat:
                <textarea name="alamat" class="form-control"
rows="4"></textarea>
            <p>
                no. telp:
            <input type="text" name="telp" value="" class="form-control">
            </p>   
            <td><a href="tampil_pelanggan.php" class="btn btn-outline-primary">Kembali</a>
            <input type="submit" name="simpan" value="Tambah Pelanggan" class="btn btn-primary">     
        </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>    
    </body>
</html>