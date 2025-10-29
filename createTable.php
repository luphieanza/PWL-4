<?php
include 'koneksi.php';
$sql = "CREATE TABLE barang (
    id int(11) NOT NULL,
    nama varchar(40) DEFAULT NULL,
    hrg double DEFAULT NULL,
    jml int(11) DEFAULT NULL,
    keterangan varchar(100) DEFAULT NULL,
    foto varchar(100) DEFAULT NULL,
    PRIMARY KEY (id)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table barang created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();