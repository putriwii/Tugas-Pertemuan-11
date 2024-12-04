<?php

require 'functions.php';

$barang = query("SELECT * FROM data_barang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <style>
        tr td img {
            width: 50px;
            height: 50px;
        }
        tr th {
            background-color: #ccc;
        }
        tr td {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h2>Data Barang</h2>

    <a href="tambah.php">Tambah Barang </a>
    <br><br>

    <table border="1" cellpadding="10" >
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($barang as $row) { ?>
        <tr>
            <td><?php echo $i; ?></td>
         
            <td>
                <img src="image/<?php echo $row["gambar"]?>" alt="">
            </td>
            <td><?php echo $row["nama_barang"]?></td>
            <td><?php echo $row["kategori"]?> </td>
            <td><?php echo $row["harga_jual"]?></td>
            <td><?php echo $row["harga_beli"]?></td>
            <td><?php echo $row["stok"]?></td>
            <td>
                <a href="ubah.php?id=<?php echo $row['id']; ?>" onclick="
                    return confirm('Yakin Mau di ubah?')">ubah</a> |
                <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="
                    return confirm('Yakin Mau di hapus?')">hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
</body>
</html>