<?php

include("config.php");


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
 // ambil data dari formulir
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $date = date('y-m-d');
 // buat query
 $sql = "INSERT INTO feedback (date, name, email, message) VALUE ('$date', '$name', '$email', '$message')";
 $query = mysqli_query($db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php denganstatus=sukses
 header('Location: index.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: index.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>