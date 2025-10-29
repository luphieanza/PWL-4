<?php
include 'koneksi.php';

$sql1 = "INSERT INTO barang (id, nama, hrg, jml, keterangan, foto) VALUES
(2, 'aglonemaRoDudAnjamani', 65000, 10, NULL, 'aglonemaRoDudAnjamani.jpg')";
$sql2 = "INSERT INTO barang (id, nama, hrg, jml, keterangan, foto) VALUES
(3, 'aglonemaVenus', 65000, 10, '-', 'aglonemaVenus.jpg')";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>