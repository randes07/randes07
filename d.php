kelompok 6
randes
aidil
fiza

<?php
// Array of products with stock and price
$products = [
    ["id" => 1, "name" => "buavita", "stock" => 30, "price" => 7890],
    ["id" => 2, "name" => "bango", "stock" => 21, "price" => 21890],
    ["id" => 3, "name" => "sariwangi", "stock" => 10, "price" => 9990],
    ["id" => 4, "name" => "Shampo Baby", "stock" => 20, "price" => 20000],
    ["id" => 5, "name" => "Bedak", "stock" => 15, "price" => 15000],
    ["id" => 6, "name" => "Baju Bayi", "stock" => 20, "price" => 35500],
    ["id" => 7, "name" => "Jumper", "stock" => 25, "price" => 50000]
];

// Initialize grand total
$grandTotal = 0;

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";

foreach ($products as $product) {
    $jumlah = $product['stock'] * $product['price'];
    $grandTotal += $jumlah;

    echo "<tr>";
    echo "<td>{$product['id']}</td>";
    echo "<td>{$product['name']}</td>";
    echo "<td>{$product['stock']}</td>";
    echo "<td>{$product['price']}</td>";
    echo "<td>{$jumlah}</td>";
    echo "</tr>";
}

echo "<tr><td colspan='4'>Total</td><td>{$grandTotal}</td></tr>";
echo "</table>";
?>
