<?php
include "header.php";
?>
<h2>Histori Peminjaman produk</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>NO</th><th>Tanggal Pinjam</th><th>Tanggal harus Kembali</th><th>Nama produk</th><th>Status</th><th>Aksi</th>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $qry_histori=mysql_query($conn,"select * from peminjaman_produk order by id_peminjaman_produk desc");
            $no=0;
            while($dt_histori=mysql_fetch_array($qry_histori)){
            $no++;

            //menampilkan produk yang dipinjam
            $produk_dipinjam="<ol>";
            $qry_produk=mysql_query($conn,"select * from detail_peminjaman_produk join produk on produk.id_produk = detail_peminjaman_produk.id_produk where id_peminjaman_produk = '".$dt_histori['id_peminjaman_produk']."'");
            while($dt_produk=mysql_fetch_array($qry_produk)){
                $produk_dipinjam.="<li>".$dt_produk['nama_produk']."</li>";
            }
            $produk_dipinjam.="</ol>";

            //menampilkan status sudah kembali atau belum
            $qry_cek_kembali=mysql_query($conn,"select * from pengembalian_produk where id_peminjaman_produk = '".$dt_histori['id_peminjaman_produk']."'");
            if(mysql_num_rows($qry_cek_kembali)>0){
                $dt_kembali=mysql_fetch_array($qry_cek_kembali);
                $denda="denda Rp. ".$dt_kembali['denda'];
                $status_kembali="<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
                $button_kembali="";
            } else {
                $status_kembali="<label class='alert alert-danger'>Belum kembali</label>";
                $button_kembali="<a href='kembali.php?id=".$dt_histori['id_peminjaman_produk']."' class='btn btn-warning' onclick='return confirm(\"hello\")'>Kembalikan</a>";
            }
        ?>
        <tr>
            <td><?=$no?></td><td><?=$dt_histori['tanggal_pinjam']?></td><td><?=$dt_histori['tanggal_kembali']?></td><td><?=$buku_dipinjam?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<?php
include "footer.php";
?>