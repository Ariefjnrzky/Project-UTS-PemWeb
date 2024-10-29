<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portofolio - Arief</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container p-3">
            <a class="navbar-brand" href="#"
              ><b>Arief <span style="color: #fbc464"> Fadhiel Januarizky</span></b></a
            >
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
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

     
    <div style="width: 100%; background-color: #B0E0E6" id="about">
        <<div class="container" style="padding-bottom: 50px" id="contact">
      <h1
        style="
          color: white;
          text-align: center;
          margin-top: 30px;
          margin-bottom: 60px;
        ">
                <span style="color: #fbc464">Service</span>
                </h1>
                <?php
                include("koneksi.php");
                $sql = "SELECT * FROM service";
                $hasil = mysqli_query($koneksi, $sql);
                
                $jmlArtikel = mysqli_num_rows($hasil);
                if ($jmlArtikel > 0) {
                    while($row = mysqli_fetch_assoc($hasil)){
                ?>
                <div class="col-lg-6" data-aos="fade-up" data-aos-duration="500">
                    <h1><?= $row["judul"]; //echo $row["judul] ?></h1>
                    <p>
                    <?= $row["isi"]; //echo $row["isi] ?>
                    </p>
                </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-4 box" data-aos="fade-up" data-aos-duration="700">
                <div style="text-align: center; align-items: center; margin-top: 25px">
                <div class="col-lg-6 d-flex justify-content-end" data-aos="fade-up" data-aos-duration="500">
            </div>               