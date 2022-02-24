<!DOCTYPE html>
<html>
    <head>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous">
    <title>TAMBAH PRODUK</title>
    </head>
    <body>
        <div class="form-control">
            <br> <h3 align="center">Pengisian Data Produk</h3> <br>
            <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
            Nama Produk      :
            <input type="text" name="nama_produk" class="form-control">

            Deskripsi       :
            <textarea name="deskripsi" class="form-control" rows="4"></textarea>

            Foto Produk      :
            <input type="file" name="file" class="form-control"> <br>

            <input type="submit" name="simpan" value="Kirim Data" class="btn btn-primary">
        </div>
            </form>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous">
        </script>
    </body>
</html>