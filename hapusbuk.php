<?php
include 'config/controller.php';
//menerima id produk yang dipilih untuk di hapus
$id = (int)$_GET['id'];

//kondisi ketika tombol hapus diklik
if (delete_buku($id) > 0){
    echo "<script>alert('Data Berhasil di Hapus'); document.location.href='Buk.php';</script>";
        }else{
            echo "<script>alert('Data Gagal di Hapus'); document.location.href='Buk.php';</script>";
        
}