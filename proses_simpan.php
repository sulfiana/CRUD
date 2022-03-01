<?php
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$asal = $_POST['asal'];


$sql = "INSERT INTO mhs_tb VALUES('$nim', '$nama', '$angkatan', '$asal')";
if (mysqli_query($conn, $sql)) {
  echo "Data berhasil disimpan";
  echo "<br>";
  echo "<a href='../input.php'> Isi data lagi </a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
