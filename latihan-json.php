<?php
// Koneksi ke database MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'web_pendaftaran';

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);
// Cek koneksi
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel users
$sql = 'SELECT * FROM datasantribaru';
$result = mysqli_query($conn, $sql);

// Inisialisasi array untuk menampung data
$data = array();

// Mengambil setiap baris hasil query dan menyimpannya dalam array
while($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

// Menutup koneksi MySQL
mysqli_close($conn);

// Mengubah array menjadi string JSON
$json_data = json_encode($data);
echo $json_data;
// Menyimpan string JSON ke dalam file
//file_put_contents('json.php', $json_data);
?>
