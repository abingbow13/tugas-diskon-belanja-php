
<!DOCTYPE html>
<html>
<head>
    <title>Discount System</title>
</head>
<body>
    <form method="post" action="">
        <label>No transaksi :</label>
        <input type="number" name="no_transaksi" required>
        <br>
        <label>Nama pembeli :</label>
        <input type="text" name="nama_pembeli" required>
        <br>
        <label>Judul buku :</label>
        <input type="text" name="judul_buku" required>
        <br>
        <label>Jumlah buku :</label>
        <input type="number" name="jumlah_buku" required>
        <br>
        <label>Harga buku :</label>
        <input type="number" name="harga_buku" required>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
<?php
if (isset($_POST['submit'])) {
    $no_transaksi = $_POST['no_transaksi'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $judul_buku = $_POST['judul_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku = $_POST['harga_buku'];
    //total belanja sebelum diskon
    $total_belanja = $harga_buku * $jumlah_buku;

    $diskon_belanja = 0;
    if ($total_belanja > 150000) {
        $diskon_belanja = $total_belanja * 0.10;
    }

    $diskon_transaksi = 0;
    if ($no_transaksi <= 50) {
        $diskon_transaksi = $total_belanja * 0.05;
    }
    //total keseluruhan
    $total_bayar = $total_belanja - $diskon_belanja - $diskon_transaksi;
}
?>

<?php if (isset($_POST['submit'])) { ?>
    <div class="result-section">
        <h3>Hasil:</h3>
        <label class="result-label">No. transaksi :</label>
        <div class="result-value"><?php echo $no_transaksi; ?></div>

        <label class="result-label">Nama pembeli :</label>
        <div class="result-value"><?php echo $nama_pembeli; ?></div>

        <label class="result-label">Harga :</label>
        <div class="result-value"><?php echo $harga_buku; ?></div>

        <label class="result-label">Diskon belanja 10% :</label>
        <div class="result-value"><?php echo $diskon_belanja; ?></div>

        <label class="result-label">Diskon transaksi 5% :</label>
        <div class="result-value"><?php echo $diskon_transaksi; ?></div>

        <label class="result-label">Total Bayar :</label>
        <div class="result-value"><?php echo $total_bayar; ?></div>
    </div>
<?php } ?>

</body>
</html>