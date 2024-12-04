<?php

$conn = mysqli_connect("localhost", "root", "", "tugas");

// halaman index.php
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


//  halaman file tambah.php
function tambah($data) {
    global $conn;

    $gambar = $data["gambar"];
    $nama_barang = $data["nama_barang"];
    $kategori = $data["kategori"];
    $harga_jual = $data["harga_jual"];
    $harga_beli = $data["harga_beli"];
    $stok = $data["stok"];
    

    $query = "INSERT INTO data_barang
                    VALUES
                ('', '$gambar', '$nama_barang', '$kategori', '$harga_jual', '$harga_beli', '$stok')
            ";


    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);

}



//  halaman file ubah.php
function ubah($data) {
    global $conn;
    
    $id = $data["id"];
    $gambar = $data["gambar"];
    $nama_barang = $data["nama_barang"];
    $kategori = $data["kategori"];
    $harga_jual = $data["harga_jual"];
    $harga_beli = $data["harga_beli"];
    $stok = $data["stok"];
    

    $query = "UPDATE data_barang SET
                gambar = '$gambar',
                nama_barang = '$nama_barang',
                kategori = '$kategori',
                harga_jual = '$harga_jual',
                harga_beli = '$harga_beli',
                stok = '$stok'
              WHERE id = $id
            ";


    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);

}



// halaman file hapus.php
function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM data_barang WHERE id = $id");

    return mysqli_affected_rows($conn);
}





?>