<?php
    include "koneksi.php";
    if($_POST['simpan']){
        $nama_produk=$_POST['nama_produk'];
        $deskripsi=$_POST['deskripsi'];
        //upload foto
        $ekstensi = array('png','jpg','jpeg');
		$namafile = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
		$ukuran = $_FILES['file']['size'];	

        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
        }else{
			if(!in_array($tipe_file, $ekstensi)){
				header("location:tambah_produk.php?alert=gagal_ektensi");
			}else{
				if($ukuran < 1044070){			
					move_uploaded_file($tmp, 'assets/foto_produk/'.$namafile);
					$query = mysqli_query($conn, "INSERT INTO buku (nama_produk, deskripsi, foto) VALUE ('".$nama_produk."','".$deskripsi."','".$namafile."')");
					if($query){
						echo "<script>alert('Sukses menambahkan produk');location.href='produk.php';</script>";
					}else{
						echo "<script>alert('Gagal menambahkan produk');location.href='produk.php';</script>";
					}
				}else{
					echo "<script>alert('Ukuran Terlalu Besar');location.href='tambah_produk.php';</script>";
				}
			}
		}
    }
?>