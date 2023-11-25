<?php
include("../config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan operasi penghapusan data berdasarkan ID
    $sql = "DELETE FROM feedback WHERE ID = $id";
    $result = mysqli_query($db, $sql);

    if($result) {
        // Jika penghapusan berhasil, arahkan kembali ke halaman tabel (index.php)
        header("Location: dashboard.php");
        exit(); // Pastikan untuk keluar dari skrip setelah melakukan redirect
    } else {
        // Jika gagal menghapus
        echo "Gagal menghapus data.";
    }
} else {
    echo "Akses dilarang.";
}
?>
