<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Halaman Barang</title>
    <style>
        h1 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }


        nav {
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }
    </style>

    <br>
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>
    <title>Daftar Pelanggan</title>
</head>

<body>
    <h1>Daftar Pelanggan</h1>
    <br>
    <a href="index.php?controller=pelanggan&action=create" class="btn btn-add"> + Tambah Data</a>
    <table>
        <tr>
            <th>No</th>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data as $key => $pelanggan): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $pelanggan['id_pelanggan'] ?></td>
                <td><?= $pelanggan['nama_pelanggan'] ?></td>
                <td><?= $pelanggan['alamat'] ?></td>
                <td>
                    <a href="index.php?controller=pelanggan&action=edit&id=<?= $pelanggan['id_pelanggan'] ?>" class="btn btn-edit">Edit</a>
                    <a href="index.php?controller=pelanggan&action=delete&id=<?= $pelanggan['id_pelanggan'] ?>" onclick="return confirm('Kamu yakin akan menghapus data ini ?');" class="btn btn-danger">Hapus</a>
                </td>
            </tr>


        <?php endforeach; ?>
    </table>
</body>

</html>