<?php
include 'koneksi.php';
$sql = "select * from barang";
$hasil = $conn->query($sql);
if ($hasil->num_rows > 0) {
    while ($row = $hasil->fetch_assoc()) {
        echo "<b>No. </b>" . $row['id'] . " <b>Nama Barang:</b> " . $row['nama'] .
            " <b>Harga:</b> " . $row['hrg'] . " <b>Jumlah:</b> " . $row['jml'] .
            "<br>";
    }
} else {
    echo "jml rec: 0";
}
$conn->close();
?>