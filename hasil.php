<?php
    // get id
    $arrPercentage = [];

    if(collectData("kwashiorkor", "Kwashiorkor") != false)
        array_push($arrPercentage, collectData("kwashiorkor", "Kwashiorkor"));

    if(collectData("marasmus", "Marasmus") != false)
        array_push($arrPercentage, collectData("marasmus", "Marasmus"));

    if(collectData("gula_darah", "Gula Darah") != false)
        array_push($arrPercentage, collectData("gula_darah", "Gula Darah"));

    if(collectData("masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)") != false)
        array_push($arrPercentage, collectData("masuk_angin", "Penurunan daya tahan tubuh (Masuk angin)"));
    
    if(collectData("hipertensi", "Hipertensi") != false)
        array_push($arrPercentage, collectData("hipertensi", "Hipertensi"));

    if(collectData("jantung", "Jantung") != false)
        array_push($arrPercentage, collectData("jantung", "Jantung"));
    
    function collectData($penyakit, $namaPenyakit){
        include('_dbConfig/dbConfig.php');
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $getid = $_GET['id'];
        }else{
            $getid = $conn->query("SELECT MAX(id) AS id FROM riwayat")->fetch_assoc()["id"];
        }
        $getHasil = $conn->query("SELECT * FROM riwayat WHERE id='$getid'")->fetch_assoc();
        
        if($getHasil[$penyakit] > 0 && $getHasil[$penyakit] != null){
            $sql = $conn->query("SELECT * FROM cf_penyakit WHERE name='$namaPenyakit'")->fetch_assoc();
            $percentage = $getHasil[$penyakit] * 100 . "%";
            return array($namaPenyakit, $percentage, $sql['description']);
        }else{
            return false;
        }
    }
    usort($arrPercentage, fn($a, $b) => $b[1] <=> $a[1]);
?>

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
                <?php $var=0;?>
                <?php foreach ($arrPercentage as $val): ?>
                    <?php if($var == 0){
                        echo'
                        <div class="carousel-item top-50 active" data-bs-interval="10000">
                            <div class="card m-auto" style="width: 50rem; height: 35rem;">
                                <div class="card-body">
                                    <h3 class="card-title text-center">'.$val[0].'</h3>
                                    <h5 class="card-text text-center">'.$val[1].'</h5><br>
                                    <h2 class="card-title text-center mt-5">Keterangan</h2>
                                    <p class="card-text text-center">'.$val[2].'</p>
                                </div>
                            </div>
                        </div>';
                    }else{
                        echo'
                        <div class="carousel-item top-50" data-bs-interval="10000">
                            <div class="card m-auto" style="width: 50rem; height: 35rem;">
                                <div class="card-body">
                                    <h3 class="card-title text-center">'.$val[0].'</h3>
                                    <h5 class="card-text text-center">'.$val[1].'</h5><br>
                                    <h2 class="card-title text-center mt-5">Keterangan</h2>
                                    <p class="card-text text-center">'.$val[2].'</p>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                <?php $var++;?>
                <?php endforeach;?>
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
    <script>
        document.getElementById("home").classList.remove("active");
        document.getElementById("consult").classList.add("active");
        document.getElementById("history").classList.remove("active");
        document.getElementById("about").classList.remove("active");
        document.getElementById("admin").classList.remove("active");
    </script>
    
    <?php include 'framework/footer.php' ?>
</body>

</html>