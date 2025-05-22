<?php
include 'config/controller.php';
//menerima id produk yang dipilih untuk di hapus
$id_kategori = (int)$_GET['id_kategori'];

//kondisi ketika tombol hapus diklik
if (delete_Kategori($id_kategori) > 0){
    echo "<script>alert('Data Berhasil di Hapus'); document.location.href='Kategori.php';</script>";
        }else{
            echo "<script>alert('Data Gagal di Hapus'); document.location.href='Kategori.php';</script>";
        
}