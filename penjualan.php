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
