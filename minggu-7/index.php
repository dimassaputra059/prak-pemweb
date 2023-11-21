<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>DATA MAHASISWA</h1>
  <h3>Menambahkan Data Mahasiswa</h3>
  <form action="tambahdata.php" method="post">
    <label for="nim">NIM:</label>
    <input type="text" name="nim" required>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required>
    <label for="prodi">Prodi:</label>
    <input type="text" name="prodi" required>
    <input type="submit" value="Tambahkan">
  </form>

  <h3>Menghapus Data Mahasiswa</h3>
  <form action="hapusdata.php" method="get">
    <label for="nim_del">NIM:</label>
    <input type="text" name="nim_del" required>
    <input type="submit" value="hapus">
  </form>

  <h3>Edit Data Mahasiswa</h3>
    <form method="post" action="editdata.php">
      <label for="nim_lama">NIM lama:</label>
      <input type="text" name="nim_lama" required>
      <label for="nim_baru">NIM baru:</label>
      <input type="text" name="nim_baru" required>
      <label for="nama">Nama:</label>
      <input type="text" name="nama" required>
      <label for="prodi">Prodi:</label>
      <input type="text" name="prodi" required> 
      <input type="submit" value="Update Data">
    </form>

  <h3>Pencarian Data</h3>
    <form method="post" action="caridata.php">
      <label for="prodi">Pilih Program Studi:</label>
      <select name="prodi" id="prodi" class="styled-select">
        <option value="Teknik informatika">Teknik informatika</option>
        <option value="Teknik elektro">Teknik Elektro</option>
        <option value="Teknik mesin">Teknik Mesin</option>
        <option value="Teknik Geofisika">Teknik Geofisika</option>
        <option value="Teknik Geologi">Teknik Geologi</option>
        <option value="Teknik Fisika">Teknik Fisika</option>
        <option value="Teknik Kimia">Teknik Kimia</option>
        <option value="Teknik Industri">Teknik Industri</option>
        <option value="Farmasi">Farmasi</option>
        <option value="Matematika">Matematika</option>
        <option value="Teknik Abal-abal">Teknik Abal-abal</option>
        <input type="submit" value="Cari">
    </form>

  <?php
  include("koneksi.php");
  $sql = "SELECT * FROM mahasiswa";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Menampilkan data baris per baris
    echo
    "Daftar Tabel Mahasiswa
    <table border='1'>
    <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Prodi</th>
    </tr>";
    // Tampilkan setiap baris data
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nim"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["prodi"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "Tidak ada data dalam tabel.";
  }
  ?>
</body>
</html>
