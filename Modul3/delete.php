<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
if (isset($_GET['deleted'])) {
    $id = $_GET['deleted'];
}
// (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
$sql = "delete from 'showroom_mobil' where id=$_id";
$result = mysqli_query($connect, $sql);
if ($result) {
    echo "deleted";
} else {
    die(mysqli_error($connect));
}
// (4) Buatkan perkondisi jika eksekusi query berhasil

// Tutup koneksi ke database setelah selesai menggunakan database

?>