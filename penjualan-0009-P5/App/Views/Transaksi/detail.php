<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">
    <title>Detail Transaksi</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 16px;
            margin: 20px;
            width: 300px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .card p {
            margin: 8px 0;
        }
    </style>
</head>

<body>
    <br>
    <nav>
        <a href="index.php?controller=transaksi&action=index" class="btn btn-add">Kembali ke Daftar Transaksi</a>
    </nav>





    <div class="card">
        <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
        <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
        <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
        <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
        <p><strong>Total Harga:</strong> <?= htmlspecialchars($transaksiDetail['total_harga']) ?></p>
        <p><strong>Tanggal Transaksi:</strong> <?= htmlspecialchars($transaksiDetail['tanggal_transaksi']) ?></p>
    </div>
</body>

</html>