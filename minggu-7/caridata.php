<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prodi = $_POST['prodi'];

    $sql = "SELECT * FROM mahasiswa WHERE prodi = '$prodi'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["nim"] . "</td>
                <td>" . $row["nama"] . "</td>
                <td>" . $row["prodi"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Data dengan Prodi '$prodi' tidak ditemukan.";
    }
}

$conn->close();
?>
