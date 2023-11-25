<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rafly</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="Admin/Login.php"><i class="ri-account-box-fill"></i> Admin</a></li>
            </ul>
        </div>
        <header>
            <div class="container">
                <div style="display: flex; position: fixed;">
                    <h1 class="logo__img"> <a href="index.php">RD</h1></a>
                    <h1 style="margin-right: 10px;"><a href="index.php">PT RAFOOD</a></h1>
                </div>
                <ul>
                    <li><a href="../index.php">HOME</a></li>
                    <li class="active"><a href="about.php">ABOUT</a></li>
                    <li><a href="visi.php">VISION</a></li>
                    <li><a href="misi.php">MISSION</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                </ul>
            </div>
        </header>
    </div>

    <section class="label">
        <div class="container">
        </div>
    </section>
    
    <section class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <br>
            <br>
            <p>PT. RAFOOD</p>
            <div class="aboutlogo">
                <img src="../image/Rd.png" width=250rem>
            </div>
            <br>
            <br>
            <p>Adalah perusahaan yang bergerak di bidang produksi makanan instan siap saji yang didirikan oleh Mohammad Rafly
            Firmansyah Owner PT. Makanan Sehat Bergizi di Bekasi pada tanggal 19 April tahun 2012, dengan semangat ingin 
            menjadi perusahaan yang siap memenuhi kebutuhan akan makanan yang sehat bagi masyarakat.</p>
            <p>Sesuai keinginan Mohammad Rafly Firmansyah sebagai pendiri PT. RAFOOD , ingin selalu menjadi yang terdepan 
            dan terpercaya sehingga PT. RAFOOD semakin berkembang dan bermanfaat bagi semua lapisan masyarakat.</p>
            <p>Perusahaan ini berkedudukan di Cikarang Barat dan berkantor pusat di Jl. Kw. Industri Mm-2000 Blok T7 No.1, 
            Gandamekar, Kec. Cikarang Barat, Kabupaten Bekasi, Jawa Barat 17530 Perusahaan ini telah berkembang selama 8 
            tahun, memiliki 5 jaringan (Kantor Cabang dan Kantor Selain Kantor Cabang) di seluruh Indonesia dan memiliki 
            lebih dari 15.000 karyawan</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Rafly. All Right Reserved.</small>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>
</body>
</html>