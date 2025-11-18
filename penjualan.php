<?php
// COMMIT 5 — Array Produk (TIDAK DITAMPILKAN DALAM TABEL)
$kode_barang  = ["P001", "P002", "P003", "P004", "P005"];
$nama_barang  = ["Sprite", "CocaCola B", "Fanta", "Golda", "Aqua"];
$harga_barang = [10000, 8000, 7000, 4000, 5000];
?>

<h2> POLGAN MART </h2>
<p>Daftar Pembelian:</p>

<?php
// COMMIT 6 — Logika Pembelian Random
$beli   = [];
$jumlah = [];

for ($i = 0; $i < 5; $i++) {
    $randomIndex = rand(0, count($kode_barang) - 1);
    $beli[]   = $kode_barang[$randomIndex];
    $jumlah[] = rand(1, 10);
}
?>

<table border="1" cellpadding="10">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>

    <?php
    // COMMIT 7 — Hitung total tiap item
    $grandtotal = 0;

    for ($i = 0; $i < count($beli); $i++) {
        $index = array_search($beli[$i], $kode_barang);

        $nama  = $nama_barang[$index];
        $harga = $harga_barang[$index];
        $qty   = $jumlah[$i];
        $total = $harga * $qty;

        $grandtotal += $total;

        echo "<tr>
                <td>{$beli[$i]}</td>
                <td>{$nama}</td>
                <td>Rp " . number_format($harga) . "</td>
                <td>{$qty}</td>
                <td>Rp " . number_format($total) . "</td>
              </tr>";
    }
    ?>
</table>
<?php
// COMMIT 8 — Total Belanja
echo "<h3>Total Belanja: Rp " . number_format($grandtotal) . "</h3>";
?>
<?php
// COMMIT 9 — Diskon Belanja
if ($grandtotal < 50000) {
    $diskon = 5;
} elseif ($grandtotal <= 100000) {
    $diskon = 10;
} else {
    $diskon = 15;
}

$nilaiDiskon = $grandtotal * $diskon / 100;
$totalAkhir  = $grandtotal - $nilaiDiskon;

echo "<h3>Diskon {$diskon}% : Rp " . number_format($nilaiDiskon) . "</h3>";
echo "<h3>Total Bayar Setelah Diskon: Rp " . number_format($totalAkhir) . "</h3>";
?>

