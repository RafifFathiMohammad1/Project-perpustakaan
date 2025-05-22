<?php
    include ("koneksi.php");

    //fungsi menampilkan 
    function select($query){
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;   
}

//////////////////User Admin/////////////////////
function create_user_Admin ($post) {
    global $db;

    $name = strip_tags($post['Name']);
    $username = strip_tags($post['Username']);
    $password = strip_tags($post['Password']);
    $level = 1;
    $status = 1;

    // Query menyebutkan kolom yang diisi (kecuali kolom 'id')
    $query = "INSERT INTO masuk (Name, Username, Password, Level, Status) VALUES ('$name', '$username', '$password', '$level' , '$status')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_user_Admin ($post){
    global $db;
    $id = $post['ID'];
    $name = strip_tags($post ['Name']);
    $username = strip_tags($post ['Username']);
    $password = strip_tags($post ['Password']);
    $level = strip_tags($post ['Level']);
    $status = strip_tags($post ['Status']);

    //Querries untuk intinya ngedit datanya lah ya 
    $query  = "UPDATE masuk SET Name ='$name', Username ='$username', Password ='$password', Level ='$level', Status= '$status' WHERE ID=$id" ;
    mysqli_query( $db, $query ) ;   
    return mysqli_affected_rows($db);
}

function delete_user_Admin ($id): int|string {
    global $db;
    
    // Query untuk menghapus user berdasarkan ID yang secara otomatis dibuat karena auto increment 
    $query = "DELETE FROM masuk WHERE ID=$id";
    
    mysqli_query(mysql: $db, query: $query);
    return mysqli_affected_rows(mysql: $db);
}
///////////////////////////////////////////////////

//////////////////Kategori/////////////////////
function create_Kategori ($post) {
    global $db;

    $name = strip_tags($post['Name']);

    // Query menyebutkan kolom yang diisi (kecuali kolom 'id')
    $query = "INSERT INTO kategori (Name) VALUES ('$name')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_Kategori ($post){
    global $db;
    $id_kategori  = $post['id_kategori'];
    $name = strip_tags($post ['Name']);

    //Querries untuk intinya ngedit datanya lah ya 
    $query  = "UPDATE kategori SET Name ='$name' WHERE id_kategori =$id_kategori " ;
    mysqli_query( $db, $query ) ;   
    return mysqli_affected_rows($db);
}

function delete_Kategori ($id_kategori): int|string {
    global $db;
    
    // Query untuk menghapus user berdasarkan ID yang secara otomatis dibuat karena auto increment 
    $query = "DELETE FROM kategori WHERE id_kategori =$id_kategori";
    
    mysqli_query(mysql: $db, query: $query);
    return mysqli_affected_rows(mysql: $db);
}
///////////////////////////////////////////////////

//////////////////buku/////////////////////
function create_buku ($post) {
    global $db;

    $kategori = strip_tags($post['id_kategori']);
    $judul = strip_tags($post['judul_buku']);
    $pengarang = strip_tags($post['pengarang']);
    $tahun = strip_tags($post['tahun_terbit']);
    $jumlah = strip_tags($post['jumlah_buku']);

    // Query menyebutkan kolom yang diisi (kecuali kolom 'id')
    $query = "INSERT INTO buku (id_kategori, judul_buku, pengarang, tahun_terbit, jumlah_buku) VALUES ('$kategori', '$judul', '$pengarang', '$tahun', '$jumlah')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function ubah_buku ($post){
    global $db;
    $id = $post['id'];
    $kategori = strip_tags($post['id_kategori']);
    $judul = strip_tags($post['judul_buku']);
    $pengarang = strip_tags($post['pengarang']);
    $tahun = strip_tags($post['tahun_terbit']);
    $jumlah = strip_tags($post['jumlah_buku']);

    //Querries untuk intinya ngedit datanya lah ya 
    $query  = "UPDATE buku SET id_kategori ='$kategori', judul_buku ='$judul', pengarang ='$pengarang', tahun_terbit ='$tahun', jumlah_buku ='$jumlah' WHERE id=$id" ;
    mysqli_query( $db, $query ) ;   
    return mysqli_affected_rows($db);
}

function delete_buku ($id): int|string {
    global $db;
    
    // Query untuk menghapus user berdasarkan ID yang secara otomatis dibuat karena auto increment 
    $query = "DELETE FROM buku WHERE id=$id";
    
    mysqli_query(mysql: $db, query: $query);
    return mysqli_affected_rows(mysql: $db);
}
///////////////////////////////////////////////////

    