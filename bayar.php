<?php
if($_GET['id']){
    include "koneksi.php";
    $id_transaksi=$_GET['id'];
    $cek_terlambat=mysqli_query($conn, "select * from transaksi where id_transaksi = '".$id_transaksi."' ");
    $dt_pinjam=mysqli_fetch_array($cek_terlambat);

    if(strtotime($dt_pinjam['tgl_bayar'])>=strtotime(date('Y-m-d'))){
        $denda=0;
    }else{
        $harga_denda_perhari=5000;
        $tanggal_bayar = new DateTime();
        $tgl_harus_kembali = new DateTime($dt_pinjam['tgl_bayar']);
        $selisih_hari = $tanggal_bayar->diff($tgl_harus_bayar->d;
        $denda=$selisih_hari*$harga_denda_perhari;
    }
    mysqli_query($conn, "insert into pembayaran (id_transaksi, tgl_pembayaran, denda) value('".$id_transaksi."','".date('Y-m-d')."','".$denda."')");
    header('location: histori_pembelian.php');
}