<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">

    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
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

<h1>Daftar Transaksi</h1>
<br>
<a href="index.php?controller=transaksi&action=create" class="btn btn-add"> + Tambah Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>ID Transaksi</th>
        <th>Kode Barang</th>
        <th>ID Pelanggan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Tanggal Transaksi</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($transaksiList as $key => $transaksi): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $transaksi['id_transaksi'] ?></td>
            <td><?= $transaksi['kode_barang'] ?></td>
            <td><?= $transaksi['id_pelanggan'] ?></td>
            <td><?= $transaksi['jumlah'] ?></td>
            <td><?= $transaksi['total_harga'] ?></td>
            <td><?= $transaksi['tanggal_transaksi'] ?></td>
            <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>" class="btn btne-danger">Detail</a></td>

        </tr>
    <?php endforeach; ?>



</table>