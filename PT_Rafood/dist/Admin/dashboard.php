<?include("..\config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/dash.css">
    <link rel="stylesheet" href="../dist/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>dashboard</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/Rd.png" alt="">
                </span>

                <div class="text header-text">
                    <span class="name">PT. RAFOOD</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-links">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../index.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="px-6 pt-14">
            <div class="pb-8 w-full">
                <h1 class="text-4xl font-medium pb-2">Dashboard</h1>
                <div class="w-full h-10 bg-slate-600 flex items-center px-4 rounded-[6px]">
                <p class="text-white">Dashboard</p>
            </div>
            </div>
            <div class="h-[1px] w-full bg-slate-400 mb-10"></div>
            <div class="w-full">
                <div class="max-w-xl text-center mx-auto">
                    <h2 class="text-2xl font-bold pb-4">Halo Selamat datang di form Admin</h2>
                    <p class="text-base font-medium text-slate-500">Selama Anda Pergi Berikut Adalah hasil laporan pengunjung yang memberikan saran dan masukan kepada anda.</p>
                </div>
            </div>
            <div class="mt-12">
                <table class="table-auto">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Delete</th>
                     </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Assuming your database credentials
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pt_rafood";

// Create a database connection
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM feedback";
$query = mysqli_query($db, $sql);
    while ($pesan = mysqli_fetch_array($query)) {
        echo "<tr>"; 
        echo "<td>" . $pesan['date'] . "</td>";
        echo "<td>" . $pesan['name'] . "</td>";
        echo "<td>" . $pesan['email'] . "</td>";
        echo "<td>" . $pesan['message'] . "</td>";
        echo "<td><a href='delete.php?id=" . $pesan['ID'] . "'></a>";
        echo "<a href='delete.php?id=". $pesan['ID']."' onclick='return confirmDelete()'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>
                </table>
            </div>
        </div>
    </section>
    <script src="Admin.js"></script>
    <script>
        function confirmDelete() {
            return confirm("Yakin Ingin Menghapus data?")
        }
    </script>
</body>
</html>