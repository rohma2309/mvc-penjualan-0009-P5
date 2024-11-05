<link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
<form action="index.php?controller=pelanggan&action=update" method="POST">

    <br>
    <label for="id_pelanggan">ID Pelanggan:</label>
    <input type="text" name="id_pelanggan" value="<?= $pelanggan['id_pelanggan'] ?>" required>
    <br>

    <label for="nama_pelanggan">Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" value="<?= $pelanggan['nama_pelanggan'] ?>" required>


    <br>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" value="<?= $pelanggan['alamat'] ?>" required>
    <br>
    <button type="submit">Update</button>
</form>