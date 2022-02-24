<?php
session_start();
include "koneksi.php";
$cart=@$_SESSION['cart'];
if(count($cart)>0){
    $lama_beli=5; // satuan hari
    $tgl_harus_bayar=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_beli),date('Y')));
    mysqli_query($conn,"insert into transaksi(id_pelanggan, id_petugas, tgl_transaksi) value('".$_SESSION['id_pelanggan']."', '".$_SESSION['id_petugas']."', '".date('Y-m-d')."')");
    $id=mysqli_insert_id($conn);
    foreach ($cart as $key_produk => $val_produk){
        mysqli_query($conn,"insert into detail_transaksi (id_transaksi, id_produk, qty) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
}
?>