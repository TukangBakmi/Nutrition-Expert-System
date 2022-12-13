<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>Hasil Diagnosis | NCD</title>
  <link rel="icon" href="img/_logoCircle.png">
  <?php include 'framework/bootstrap.php'?>
</head>

<body>
<?php include 'framework/navbar.php' ?>
<link rel="stylesheet" href="css/hasil.css">
<div class="container">
    <h1 class="hasil text-center">Hasil Diagnosis</h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
                <div class="carousel-item top-50 active" data-bs-interval="10000">
                    <div class="card m-auto" style="width: 50rem; height: 35rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nama Penyakit</h5>
                            <p class="card-text text-center">Keterangan penyakit</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nilai</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item top-50" data-bs-interval="10000">
                    <div class="card m-auto" style="width: 50rem; height: 35rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nama Penyakit</h5>
                            <p class="card-text text-center">Keterangan penyakit</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nilai</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item top-50" data-bs-interval="10000">
                    <div class="card m-auto" style="width: 50rem; height: 35rem;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Nama Penyakit</h5>
                            <p class="card-text text-center">Keterangan penyakit</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nilai</li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</body>
</html>