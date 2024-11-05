<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
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
</head>
<br>
<nav>
    <ul>

        <li><a href="index.php?controller=home&action=index">Home</a></li>
        <li><a href="index.php?controller=barang&action=index">Barang</a></li>
        <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
        <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
    </ul>
</nav>

<h1>Daftar Barang</h1>
<br>
<a href="index.php?controller=barang&action=create" class="btn btn-add"> + Tambah Data</a>
<table>


    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data as $key => $barang): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $barang['kode_barang'] ?></td>
            <td><?= $barang['nama_barang'] ?></td>
            <td><?= $barang['harga'] ?></td>
            <td><?= $barang['stok'] ?></td>
            <td>
                <a href=" index.php?controller=barang&action=edit&id=<?= $barang['kode_barang'] ?>" class="btn btn-edit">Edit</a>
                <a href="index.php?controller=barang&action=delete&id=<?= $barang['kode_barang'] ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

    <?php endforeach; ?>
</table>