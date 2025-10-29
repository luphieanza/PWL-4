<?php
include 'koneksi.php';
$sql = "INSERT INTO barang (id, nama, hrg, jml, keterangan, foto) VALUES
(1, 'aglonema Suksom', 40000, 10, '-', 'aglonemaSuksom.jpg')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>