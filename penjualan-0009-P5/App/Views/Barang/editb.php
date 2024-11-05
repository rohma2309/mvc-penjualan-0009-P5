<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <style>
        /* Tambahkan gaya sesuai kebutuhan */
    </style>
</head>

<body>

    <h1>Edit Barang</h1>
    <form action="index.php?controller=barang&action=update" method="POST">
        <input type="hidden" name="kode_barang" value="<?= $barang['kode_barang'] ?>">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>" required><br>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= $barang['harga'] ?>" required><br>

        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="<?= $barang['stok'] ?>" required><br>

        <button type="submit">Update</button>
        <a href="index.php?controller=barang&action=index" class="btn btn-add">Batal</a>
    </form>

</body>

</html>