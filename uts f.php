kelompok 6
randes
aidil
fiza


<?php
// Membuat array multidimensi untuk produk
$produk = [
    ['id' => 1, 'nama' => 'Buavita', 'stok' => 30, 'harga' => 7890],
    ['id' => 2, 'nama' => 'Bango', 'stok' => 21, 'harga' => 21890],
    ['id' => 3, 'nama' => 'Sariwangi', 'stok' => 10, 'harga' => 9990],
    ['id' => 4, 'nama' => 'Sammpo baby', 'stok' => 20, 'harga' => 20000],
    ['id' => 5, 'nama' => 'Bedak', 'stok' => 15, 'harga' => 15000],
    ['id' => 6, 'nama' => 'Baju bayi', 'stok' => 20, 'harga' => 35500],
    ['id' => 7, 'nama' => 'Jumper', 'stok' => 25, 'harga' => 50000],
];

// Mengurutkan array berdasarkan nama produk
usort($produk, function($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

// Menampilkan array dalam bentuk tabel
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Stok</th>
    <th>Harga</th>
</tr>";

foreach ($produk as $item) {
    echo "<tr>
        <td>{$item['id']}</td>
        <td>{$item['nama']}</td>
        <td>{$item['stok']}</td>
        <td>" . number_format($item['harga'], 0, ',', '.') . "</td>
    </tr>";
}

echo "</table>";
?>
