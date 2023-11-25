<s><?php
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "pt_rafood";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil nilai yang dikirimkan dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa kecocokan di database
$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: dashboard.php?status=sukses');
    // Anda dapat melakukan pengalihan ke halaman lain atau tindakan lain di sini
} else {
    header('Location: login.php?status=gagal');
}

$conn->close();
?></s>