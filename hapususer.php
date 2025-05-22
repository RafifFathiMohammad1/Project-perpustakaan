<?php
include 'config/controller.php';
//menerima id produk yang dipilih untuk di hapus
$ID = (int)$_GET['id'];

//kondisi ketika tombol hapus diklik
if (delete_user_Admin($ID) > 0){
    echo "<script>alert('Data Berhasil di Hapus'); document.location.href='Dmem.php';</script>";
        }else{
            echo "<script>alert('Data Gagal di Hapus'); document.location.href='Dmem.php';</script>";
        
}