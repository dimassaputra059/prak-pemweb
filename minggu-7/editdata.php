<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim_baru'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $update_nim = $_POST['nim_lama'];

    $sql = "UPDATE mahasiswa SET nim=$nim, nama='$nama', prodi='$prodi' WHERE nim='$update_nim'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}