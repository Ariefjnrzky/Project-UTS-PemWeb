<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio - Arief</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container p-3">
        <a class="navbar-brand" href="#"><b>Arief <span style="color: #fbc464"> Fadhiel Januarizky</span></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <img src="/img/bars-solid.svg" style="width: 30px" alt="" />
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Service.php">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Myskill.php">My Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact Me</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>

<div style="width: 100%; background-color: #B0E0E6" id="skill">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 style="color: white; margin-top: 30px;">My <span style="color: #fbc464">Skills</span></h1>
                <?php
                include("koneksi.php");
                $sql = "SELECT * FROM myskill";
                $hasil = mysqli_query($koneksi, $sql);
                
                $jmlArtikel = mysqli_num_rows($hasil);
                if ($jmlArtikel > 0) {
                    while($row = mysqli_fetch_assoc($hasil)){
                ?>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="500">
                    <h1><?= $row["nama_skill"]; //echo $row["judul] ?></h1>
                    <p>
                    <?= $row["kategori"]; //echo $row["isi] ?>
                    </p>
                    <p>
                    <?= $row["deskripsi"]; //echo $row["isi] ?>
                    </p>
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center" style="height: 100%;">
            <img src="HTMLL.png" alt="HTML" style="width: 42px; height: 42px; margin-top: 30px;">
            <img src="PYTHON.png" alt="PYTHON" style="width: 42px; height: 42px; margin-top: 30px;">
            <img src="JAVASCRIPT.png" alt="JAVASCRIPT" style="width: 42px; height: 42px; margin-top: 30px;">
            <img src="CSS.png" alt="CSS" style="width: 42px; height: 42px; margin-top: 30px;">
            <img src="PHP.png" alt="php" style="width: 42px; height: 42px; margin-top: 30px;">
            <img src="Mysql.png" alt="mysql" style="width: 42px; height: 42px; margin-top: 30px;">
            <button onclick="document.location='Portofolio UI.pdf'">Portofolio UI</button>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>