<?php
// COMMIT 5 — Array Produk
$kode_barang  = ["P001", "P002", "P003", "P004", "P005"];
$nama_barang  = ["Sprite", "CocaCola B", "Fanta", "Golda", "Aqua"];
$harga_barang = [10000, 8000, 7000, 4000, 5000];
?>
<h2> POLGAN MART </h2>
<p>Daftar Pembelian:</p>

<table border="1" cellpadding="10">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
    </tr>

    <?php
    for ($i = 0; $i < count($kode_barang); $i++) {
        echo "<tr>
                <td>{$kode_barang[$i]}</td>
                <td>{$nama_barang[$i]}</td>
                <td>Rp " . number_format($harga_barang[$i]) . "</td>
              </tr>";
    }
    ?>
</table>
